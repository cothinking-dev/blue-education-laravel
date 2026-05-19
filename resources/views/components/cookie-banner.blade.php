<div
    x-data="cookieBanner()"
    x-init="init()"
    x-show="visible"
    x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-4"
    class="fixed inset-x-0 bottom-0 z-[60] px-4 pb-4 sm:px-6 sm:pb-6"
    role="dialog"
    aria-modal="false"
    aria-labelledby="cookie-banner-title"
>
    <div class="mx-auto max-w-4xl rounded-2xl border border-base-200 bg-white p-5 shadow-2xl sm:p-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:gap-6">
            <div class="flex-1">
                <p id="cookie-banner-title" class="text-base font-semibold text-base-900">
                    We use cookies to improve your experience
                </p>
                <p class="mt-2 text-sm leading-relaxed text-base-600">
                    Some are essential for the site to function; others help us understand how visitors use the site
                    so we can improve it. You can change your choice at any time.
                    <a href="{{ route('privacy') }}" class="font-medium text-primary-600 underline-offset-2 hover:underline">
                        Read our privacy policy
                    </a>.
                </p>
            </div>

            <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:gap-3">
                <button
                    type="button"
                    @click="reject()"
                    class="inline-flex items-center justify-center rounded-full border border-base-300 px-5 py-2.5 text-sm font-medium text-base-700 transition hover:bg-base-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500"
                >
                    Reject non-essential
                </button>
                <button
                    type="button"
                    @click="accept()"
                    class="inline-flex items-center justify-center rounded-full bg-primary-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-primary-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2"
                >
                    Accept all
                </button>
            </div>
        </div>
    </div>
</div>

@push('head')
    <style>[x-cloak]{display:none!important}</style>
@endpush

@push('scripts')
    <script>
        function cookieBanner() {
            return {
                visible: false,
                STORAGE_KEY: 'cookie_consent',
                init() {
                    try {
                        const stored = localStorage.getItem(this.STORAGE_KEY);
                        this.visible = stored !== 'granted' && stored !== 'denied';
                    } catch (e) {
                        this.visible = true;
                    }
                },
                accept() {
                    try { localStorage.setItem(this.STORAGE_KEY, 'granted'); } catch (e) {}
                    if (typeof gtag === 'function') {
                        gtag('consent', 'update', {
                            'ad_storage': 'granted',
                            'ad_user_data': 'granted',
                            'ad_personalization': 'granted',
                            'analytics_storage': 'granted'
                        });
                    }
                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({ 'event': 'cookie_consent_accepted' });
                    window.dispatchEvent(new CustomEvent('cookie:consent-granted'));
                    this.visible = false;
                },
                reject() {
                    try { localStorage.setItem(this.STORAGE_KEY, 'denied'); } catch (e) {}
                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({ 'event': 'cookie_consent_rejected' });
                    this.visible = false;
                },
            };
        }
    </script>
@endpush
