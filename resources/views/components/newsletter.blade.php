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

        <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto"
              method="POST"
              action="{{ route('newsletter.subscribe') }}"
              x-data="{ email: '', sending: false, sent: false, error: '' }"
              @submit.prevent="
                  sending = true;
                  error = '';
                  fetch($el.action, {
                      method: 'POST',
                      headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Accept': 'application/json', 'Content-Type': 'application/json' },
                      body: JSON.stringify({ email }),
                  })
                  .then(r => r.json().then(data => ({ ok: r.ok, data })))
                  .then(({ ok, data }) => {
                      if (!ok && data.errors?.email) { error = data.errors.email[0]; }
                      else if (ok) { sent = true; }
                      sending = false;
                  })
                  .catch(() => { sending = false; error = 'Something went wrong. Please try again.'; })
              ">

            <template x-if="sent">
                <p class="text-green-300 font-semibold py-3">Thank you for subscribing!</p>
            </template>

            <template x-if="!sent">
                <div class="flex flex-col sm:flex-row gap-3 w-full">
                    <label for="newsletter-email" class="sr-only">Email address</label>
                    <input type="email" name="email" id="newsletter-email" x-model="email" placeholder="{{ $placeholder }}" required
                           class="flex-1 px-4 py-3 rounded-corner bg-white/10 text-white placeholder-primary-300 border border-white/20 focus:outline-none focus:ring-2 focus:ring-white/40 text-sm">
                    <button type="submit" x-bind:disabled="sending"
                            class="px-6 py-3 bg-white text-primary-800 rounded-corner font-semibold text-sm hover:bg-primary-50 transition-colors disabled:opacity-50">
                        <span x-show="!sending">{{ $buttonText }}</span>
                        <span x-show="sending" x-cloak>Sending&hellip;</span>
                    </button>
                </div>
            </template>
        </form>

        <p x-show="error" x-text="error" x-cloak class="text-red-300 text-xs mt-2"></p>
        <p class="text-primary-400 text-xs mt-4">No spam. Unsubscribe at any time.</p>
    </div>
</section>
