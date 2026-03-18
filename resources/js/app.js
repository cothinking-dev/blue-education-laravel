import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

/*
|--------------------------------------------------------------------------
| Global Scroll-Triggered Fade-In Animations
|--------------------------------------------------------------------------
*/
document.addEventListener('DOMContentLoaded', () => {
    gsap.utils.toArray('[data-animate="fade-up"]').forEach((el) => {
        gsap.fromTo(el, {
            y: 30,
            opacity: 0,
        }, {
            y: 0,
            opacity: 1,
            duration: 0.6,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
                once: true,
            },
        });
    });

    // Staggered children animation
    gsap.utils.toArray('[data-animate="stagger"]').forEach((el) => {
        if (el.children.length === 0) return;
        gsap.fromTo(el.children, {
            y: 20,
            opacity: 0,
        }, {
            y: 0,
            opacity: 1,
            duration: 0.5,
            stagger: 0.1,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
                once: true,
            },
        });
    });
});

/*
|--------------------------------------------------------------------------
| Stat Count-Up Animation — stagger fade-up first, then count-up after delay
|--------------------------------------------------------------------------
*/
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-stat-countup]').forEach((section) => {
        const grid = section.querySelector('.grid');
        const items = grid ? Array.from(grid.children) : [];
        const counters = section.querySelectorAll('[data-count-target]');
        if (items.length === 0) return;

        // Set initial hidden state
        gsap.set(items, { y: 20, opacity: 0 });

        ScrollTrigger.create({
            trigger: section,
            start: 'top 85%',
            once: true,
            onEnter: () => {
                // Step 1: Stagger fade-up
                gsap.to(items, {
                    y: 0,
                    opacity: 1,
                    duration: 0.5,
                    stagger: 0.1,
                    ease: 'power2.out',
                });

                // Step 2: Count-up after 0.5s delay
                setTimeout(() => {
                    counters.forEach((el) => {
                        const raw = el.dataset.countTarget;
                        const match = raw.match(/^(.*?)([\d,.]+)(.*)$/);
                        if (!match) { el.textContent = raw; return; }
                        const [, prefix, numStr, suffix] = match;
                        const target = parseFloat(numStr.replace(/,/g, ''));
                        const isDecimal = numStr.includes('.');
                        const duration = 1500;
                        const startTime = performance.now();

                        (function step(now) {
                            const progress = Math.min((now - startTime) / duration, 1);
                            const eased = 1 - Math.pow(1 - progress, 3);
                            const current = eased * target;
                            el.textContent = prefix + (isDecimal ? current.toFixed(1) : Math.round(current).toLocaleString()) + suffix;
                            if (progress < 1) requestAnimationFrame(step);
                        })(startTime);
                    });
                }, 500);
            },
        });
    });
});

/*
|--------------------------------------------------------------------------
| Hero Parallax (subtle scroll effect)
|--------------------------------------------------------------------------
*/
document.addEventListener('DOMContentLoaded', () => {
    const parallaxEl = document.querySelector('[data-hero-parallax]');
    if (!parallaxEl) return;

    gsap.to(parallaxEl, {
        y: -80,
        ease: 'none',
        scrollTrigger: {
            trigger: '#home-hero',
            start: 'top top',
            end: 'bottom top',
            scrub: true,
        },
    });
});

/*
|--------------------------------------------------------------------------
| Logo Marquee Auto-Scroll
|--------------------------------------------------------------------------
*/
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-marquee]').forEach((track) => {
        const speed = parseFloat(track.dataset.marquee) || 30;
        const originals = Array.from(track.children);
        if (originals.length === 0) return;

        // Measure one full set width (items + gaps) before cloning
        const firstRect = originals[0].getBoundingClientRect();
        const lastRect = originals[originals.length - 1].getBoundingClientRect();
        const gap = parseFloat(getComputedStyle(track).gap) || 0;
        const setWidth = lastRect.right - firstRect.left + gap;

        // Clone enough sets to fill at least 2× the viewport
        const clonesNeeded = Math.ceil((window.innerWidth * 2) / setWidth);
        for (let i = 0; i < clonesNeeded; i++) {
            originals.forEach((item) => track.appendChild(item.cloneNode(true)));
        }

        gsap.to(track, {
            x: -setWidth,
            duration: setWidth / speed,
            ease: 'none',
            repeat: -1,
            modifiers: {
                x: gsap.utils.unitize((x) => parseFloat(x) % setWidth),
            },
        });

        // Pause on hover
        track.addEventListener('mouseenter', () => gsap.getTweensOf(track).forEach(t => t.pause()));
        track.addEventListener('mouseleave', () => gsap.getTweensOf(track).forEach(t => t.resume()));
    });
});
