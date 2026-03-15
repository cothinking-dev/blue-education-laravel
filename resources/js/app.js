import './bootstrap';
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
| Stat Count-Up Animation (replaces Alpine x-intersect)
|--------------------------------------------------------------------------
*/
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-stat-countup]').forEach((section) => {
        const counters = section.querySelectorAll('[data-count-target]');
        if (counters.length === 0) return;

        ScrollTrigger.create({
            trigger: section,
            start: 'top 85%',
            once: true,
            onEnter: () => {
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
            },
        });
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
        const items = track.children;
        if (items.length === 0) return;

        // Duplicate items to fill the track
        const fragment = document.createDocumentFragment();
        Array.from(items).forEach((item) => fragment.appendChild(item.cloneNode(true)));
        track.appendChild(fragment);

        const totalWidth = track.scrollWidth / 2;

        gsap.to(track, {
            x: -totalWidth,
            duration: totalWidth / speed,
            ease: 'none',
            repeat: -1,
            modifiers: {
                x: gsap.utils.unitize((x) => parseFloat(x) % totalWidth),
            },
        });

        // Pause on hover
        track.addEventListener('mouseenter', () => gsap.getTweensOf(track).forEach(t => t.pause()));
        track.addEventListener('mouseleave', () => gsap.getTweensOf(track).forEach(t => t.resume()));
    });
});
