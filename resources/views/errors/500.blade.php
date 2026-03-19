<x-layout title="Server Error" description="Something went wrong on our end." robots="noindex, nofollow" :transparentNav="false">

    <section class="py-32 lg:py-40">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 text-center">
            <p class="text-primary-600 font-semibold text-lg mb-4">500</p>
            <h1 class="text-4xl lg:text-5xl font-bold text-base-900 mb-6">Something went wrong</h1>
            <p class="text-lg text-base-600 max-w-xl mx-auto mb-10">
                We're sorry, something went wrong on our end. Please try again later or contact us if the problem persists.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <x-btn href="{{ route('home') }}" variant="primary" size="lg">Back to Home</x-btn>
                <x-btn href="{{ route('contact') }}" variant="outline" size="lg">Contact Us</x-btn>
            </div>
        </div>
    </section>

</x-layout>
