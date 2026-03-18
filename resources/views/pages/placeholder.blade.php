<x-layout :title="$title">
    <div class="min-h-[60vh] flex items-center justify-center">
        <div class="text-center px-8">
            <h1 class="text-3xl font-bold text-base-900 mb-3">{{ $title }}</h1>
            <p class="text-base-500 text-lg">Page coming soon.</p>
            <a href="{{ route('home') }}" class="inline-block mt-6 text-primary-600 hover:text-primary-800 font-medium text-sm">
                &larr; Back to Home
            </a>
        </div>
    </div>
</x-layout>
