@php
    $allFaqs = $faqsByCategory->flatten(1);

    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $allFaqs->map(fn ($faq) => [
            '@type' => 'Question',
            'name' => $faq->question,
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => strip_tags($faq->answer),
            ],
        ])->values()->all(),
    ];
@endphp

<x-layout title="FAQ"
          description="Find answers to common questions about studying, working, and living in Australia."
          :json-ld="$faqSchema">

    {{-- §1 Hero --}}
    <x-hero title="Frequently Asked Questions"
            subtitle="Find answers to common questions about studying, working, and living in Australia."
            :image="asset('images/heroes/faq.webp')"
            alt="East Asian student raising hand to ask a question in a lecture"
            variant="centered"
            :breadcrumbs="true" />

    {{-- §2 FAQ Tabs + Accordions --}}
    <section class="bg-white" x-data="{ tab: 'all' }">
        <div class="max-w-4xl mx-auto px-8 lg:px-16 py-14">

            {{-- Tab Navigation --}}
            <div role="tablist" aria-label="FAQ categories" class="flex flex-wrap gap-2 mb-10">
                <button @click="tab = 'all'" role="tab" id="tab-all" aria-controls="panel-all" :aria-selected="tab === 'all'" :class="tab === 'all' ? 'bg-primary-800 text-white' : 'bg-base-100 text-base-700 hover:bg-base-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">All</button>
                @foreach ($categories as $key => $label)
                    <button @click="tab = '{{ $key }}'" role="tab" id="tab-{{ $key }}" aria-controls="panel-{{ $key }}" :aria-selected="tab === '{{ $key }}'" :class="tab === '{{ $key }}' ? 'bg-primary-800 text-white' : 'bg-base-100 text-base-700 hover:bg-base-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">{{ $label }}</button>
                @endforeach
            </div>

            {{-- All --}}
            <template x-if="tab === 'all'">
                <div role="tabpanel" id="panel-all" aria-labelledby="tab-all">
                    @foreach ($categories as $key => $label)
                        @if ($faqsByCategory->has($key))
                            <h2 class="text-2xl font-bold text-base-900 {{ ! $loop->first ? 'mt-12' : '' }} mb-8">{{ $label }}</h2>
                            <x-accordion :items="$faqsByCategory[$key]->map(fn ($f) => ['question' => $f->question, 'answer' => $f->answer])->all()" />
                        @endif
                    @endforeach
                </div>
            </template>

            {{-- Per-category panels --}}
            @foreach ($categories as $key => $label)
                <template x-if="tab === '{{ $key }}'">
                    <div role="tabpanel" id="panel-{{ $key }}" aria-labelledby="tab-{{ $key }}">
                        <h2 class="text-2xl font-bold text-base-900 mb-8">{{ $label }}</h2>
                        @if ($faqsByCategory->has($key))
                            <x-accordion :items="$faqsByCategory[$key]->map(fn ($f) => ['question' => $f->question, 'answer' => $f->answer])->all()" />
                        @endif
                    </div>
                </template>
            @endforeach
        </div>
    </section>

    {{-- §3 CTA --}}
    <x-cta-banner title="Still have questions?"
                  subtitle="Contact us directly. We respond to all enquiries within one business day."
                  primaryText="Contact Us"
                  :primaryHref="route('contact')" />

</x-layout>
