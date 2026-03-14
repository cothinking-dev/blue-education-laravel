@props([
    'action' => route('contact.submit'),
])

<form {{ $attributes->merge(['class' => 'space-y-5']) }}
      method="POST"
      action="{{ $action }}"
      x-data="{ sending: false, sent: false }"
      @submit.prevent="
          sending = true;
          fetch($el.action, {
              method: 'POST',
              headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Accept': 'application/json' },
              body: new FormData($el),
          })
          .then(r => r.json())
          .then(data => {
              if (data.errors) {
                  Object.entries(data.errors).forEach(([field, msgs]) => {
                      const el = $el.querySelector(`[name=${field}]`);
                      if (el) {
                          el.classList.add('border-red-400');
                          const errEl = el.parentElement.querySelector('.field-error');
                          if (errEl) errEl.textContent = msgs[0];
                      }
                  });
                  sending = false;
              } else {
                  sent = true;
                  sending = false;
              }
          })
          .catch(() => { sending = false; })
      ">

    <template x-if="sent">
        <div class="bg-green-50 border border-green-200 rounded-corner-lg p-6 text-center">
            <p class="text-green-800 font-semibold">Thank you! We'll be in touch soon.</p>
        </div>
    </template>

    <div x-show="!sent">
        {{-- Name & Email --}}
        <div class="grid sm:grid-cols-2 gap-5 mb-5">
            <div>
                <label for="full-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                <input type="text" name="full_name" id="full-name" required placeholder="Jane Smith"
                       class="w-full rounded-corner border border-gray-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors">
                <p class="field-error text-xs text-red-500 mt-1"></p>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
                <input type="email" name="email" id="email" required placeholder="jane@example.com"
                       class="w-full rounded-corner border border-gray-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors">
                <p class="field-error text-xs text-red-500 mt-1"></p>
            </div>
        </div>

        {{-- Phone & Country --}}
        <div class="grid sm:grid-cols-2 gap-5 mb-5">
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <input type="tel" name="phone" id="phone" placeholder="+1 555 000 0000"
                       class="w-full rounded-corner border border-gray-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors">
            </div>
            <div>
                <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Country of Residence</label>
                <input type="text" name="country" id="country" placeholder="Japan"
                       class="w-full rounded-corner border border-gray-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors">
            </div>
        </div>

        {{-- Enquiry Type & Language --}}
        <div class="grid sm:grid-cols-2 gap-5 mb-5">
            <div>
                <label for="enquiry-type" class="block text-sm font-medium text-gray-700 mb-1">Enquiry Type</label>
                <select name="enquiry_type" id="enquiry-type"
                        class="w-full rounded-corner border border-gray-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors">
                    <option value="">Select…</option>
                    <option value="Education">Education</option>
                    <option value="Migration">Migration</option>
                    <option value="Career">Career</option>
                    <option value="Student Support">Student Support</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div>
                <label for="language" class="block text-sm font-medium text-gray-700 mb-1">Preferred Language</label>
                <select name="preferred_language" id="language"
                        class="w-full rounded-corner border border-gray-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors">
                    <option value="">Select…</option>
                    <option value="English">English</option>
                    <option value="Cantonese">Cantonese</option>
                    <option value="Mandarin">Mandarin</option>
                    <option value="Bahasa">Bahasa</option>
                    <option value="Malay">Malay</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Indonesian">Indonesian</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>

        {{-- Message --}}
        <div class="mb-5">
            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
            <textarea name="message" id="message" rows="5" placeholder="Tell us about your situation and what you're hoping to achieve…"
                      class="w-full rounded-corner border border-gray-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors resize-y"></textarea>
        </div>

        {{-- Submit --}}
        <x-btn type="submit" variant="primary" size="lg" class="w-full sm:w-auto" x-bind:disabled="sending">
            <span x-show="!sending">Send Enquiry</span>
            <span x-show="sending" x-cloak>Sending…</span>
        </x-btn>
    </div>
</form>
