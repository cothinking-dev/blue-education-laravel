<x-layout title="Session Expired" description="Your session has expired. Please refresh the page and try again." robots="noindex, nofollow" :transparentNav="false">

    <section class="py-32 lg:py-40">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 text-center">
            <p class="text-primary-600 font-semibold text-lg mb-4">419</p>
            <h1 class="text-4xl lg:text-5xl font-bold text-base-900 mb-6">Session expired</h1>
            <p class="text-lg text-base-600 max-w-xl mx-auto mb-10 text-pretty">
                Your session has expired. Please refresh the page and try again.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <x-btn href="{{ url()->current() }}" variant="primary" size="lg">Refresh Page</x-btn>
                <x-btn href="{{ route('home') }}" variant="outline" size="lg">Back to Home</x-btn>
            </div>
        </div>
    </section>

</x-layout>
