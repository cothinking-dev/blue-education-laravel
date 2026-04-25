<x-layout title="Access Denied" description="You don't have permission to access this page." robots="noindex, nofollow" :transparentNav="false">

    <section class="py-32 lg:py-40">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 text-center">
            <p class="text-primary-600 font-semibold text-lg mb-4">403</p>
            <h1 class="text-4xl lg:text-5xl font-bold text-base-900 mb-6">Access denied</h1>
            <p class="text-lg text-base-600 max-w-xl mx-auto mb-10 text-pretty">
                Sorry, you don't have permission to access this page. If you believe this is an error, please contact us.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <x-btn href="{{ route('home') }}" variant="primary" size="lg">Back to Home</x-btn>
                <x-btn href="{{ route('contact') }}" variant="outline" size="lg">Contact Us</x-btn>
            </div>
        </div>
    </section>

</x-layout>
