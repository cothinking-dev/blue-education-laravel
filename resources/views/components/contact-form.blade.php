@props([
    'action' => route('contact.submit'),
])

<form {{ $attributes->merge(['class' => 'space-y-5']) }}
      method="POST"
      action="{{ $action }}"
      x-data="{
          sending: false,
          sent: false,
          networkError: false,
          errors: {},
          formData: {
              full_name: '', email: '', phone: '', country: '',
              enquiry_type: '', message: '', website: '',
          },
      }"
      @submit.prevent="
          sending = true;
          networkError = false;
          errors = {};
          fetch($el.action, {
              method: 'POST',
              headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Accept': 'application/json', 'Content-Type': 'application/json' },
              body: JSON.stringify(formData),
          })
          .then(r => r.json().then(data => ({ ok: r.ok, data })))
          .then(({ ok, data }) => {
              if (!ok && data.errors) { errors = data.errors; }
              else if (ok) { sent = true; }
              sending = false;
          })
          .catch(() => { sending = false; networkError = true; })
      ">

    <template x-if="sent">
        <div class="bg-green-50 border border-green-200 rounded-corner-lg p-6 text-center">
            <p class="text-green-800 font-semibold">Thank you! We'll be in touch soon.</p>
        </div>
    </template>

    <div x-show="networkError" x-cloak class="bg-red-50 border border-red-200 rounded-corner-lg p-4 mb-5 text-center">
        <p class="text-red-800 text-sm">Something went wrong. Please check your connection and try again.</p>
    </div>

    <div x-show="!sent">
        {{-- Honeypot --}}
        <div class="hidden" aria-hidden="true">
            <label for="website">Website</label>
            <input type="text" name="website" id="website" tabindex="-1" autocomplete="off" x-model="formData.website">
        </div>

        {{-- Name & Email --}}
        <div class="grid sm:grid-cols-2 gap-5 mb-5">
            <div>
                <label for="full-name" class="block text-sm font-medium text-base-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                <input type="text" name="full_name" id="full-name" required placeholder="Jane Smith" autocomplete="name"
                       x-model="formData.full_name"
                       :class="{ 'border-red-400': errors.full_name }"
                       class="w-full rounded-corner border border-base-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors">
                <p x-show="errors.full_name" x-text="errors.full_name?.[0]" class="text-xs text-red-500 mt-1"></p>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-base-700 mb-1">Email <span class="text-red-500">*</span></label>
                <input type="email" name="email" id="email" required placeholder="jane@example.com" autocomplete="email"
                       x-model="formData.email"
                       :class="{ 'border-red-400': errors.email }"
                       class="w-full rounded-corner border border-base-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors">
                <p x-show="errors.email" x-text="errors.email?.[0]" class="text-xs text-red-500 mt-1"></p>
            </div>
        </div>

        {{-- Phone & Country --}}
        <div class="grid sm:grid-cols-2 gap-5 mb-5">
            <div>
                <label for="phone" class="block text-sm font-medium text-base-700 mb-1">Phone Number</label>
                <input type="tel" name="phone" id="phone" placeholder="+1 555 000 0000" autocomplete="tel"
                       x-model="formData.phone"
                       class="w-full rounded-corner border border-base-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors">
            </div>
            <div>
                <label for="country" class="block text-sm font-medium text-base-700 mb-1">Country of Residence</label>
                <input type="text" name="country" id="country" placeholder="Japan" autocomplete="country-name"
                       x-model="formData.country"
                       class="w-full rounded-corner border border-base-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors">
            </div>
        </div>

        {{-- Enquiry Type --}}
        <div class="mb-5">
            <label for="enquiry-type" class="block text-sm font-medium text-base-700 mb-1">Enquiry Type</label>
            <select name="enquiry_type" id="enquiry-type" x-model="formData.enquiry_type"
                    class="w-full rounded-corner border border-base-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors">
                <option value="">Select…</option>
                @foreach(\App\Models\Enquiry::ENQUIRY_TYPES as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
            </select>
        </div>

        {{-- Message --}}
        <div class="mb-5">
            <label for="message" class="block text-sm font-medium text-base-700 mb-1">Message</label>
            <textarea name="message" id="message" rows="5" placeholder="Tell us about your situation and what you're hoping to achieve…"
                      x-model="formData.message"
                      class="w-full rounded-corner border border-base-300 px-4 py-2.5 text-sm focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition-colors resize-y"></textarea>
        </div>

        {{-- Submit --}}
        <x-btn type="submit" variant="primary" size="lg" class="w-full sm:w-auto" x-bind:disabled="sending">
            <span x-show="!sending">Send Enquiry</span>
            <span x-show="sending" x-cloak>Sending…</span>
        </x-btn>
    </div>
</form>
