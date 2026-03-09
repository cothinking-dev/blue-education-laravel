@props([
    'title' => 'Stay Updated',
    'description' => 'Get the latest news on studying and living in Australia delivered to your inbox.',
    'placeholder' => 'Enter your email address',
    'buttonText' => 'Subscribe',
])

<section {{ $attributes->merge(['class' => 'bg-primary-800']) }}>
    <div class="max-w-2xl mx-auto px-8 py-14 text-center">
        <h2 class="text-2xl font-bold text-white mb-3">{{ $title }}</h2>
        <p class="text-primary-200 mb-8">{{ $description }}</p>
        <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
            <input type="email" placeholder="{{ $placeholder }}" required
                   class="flex-1 px-4 py-3 rounded-corner bg-white/10 text-white placeholder-primary-300 border border-white/20 focus:outline-none focus:ring-2 focus:ring-white/40 text-sm">
            <button type="submit" class="px-6 py-3 bg-white text-primary-800 rounded-corner font-semibold text-sm hover:bg-primary-50 transition-colors">{{ $buttonText }}</button>
        </form>
        <p class="text-primary-400 text-xs mt-4">No spam. Unsubscribe at any time.</p>
    </div>
</section>
