<x-layout title="Terms of Use" description="Terms and conditions governing use of the Blue Education website and services.">

    <x-hero
        title="Terms of Use"
        subtitle="Terms and conditions governing use of our website and services."
        variant="light"
        height="240px"
        :breadcrumbs="true"
    />

    <section class="bg-white">
        <div class="max-w-3xl mx-auto px-8 lg:px-16 py-14 prose prose-gray">
            <p class="text-sm text-base-500 mb-8">Last updated: March 19, 2026</p>

            <h2>1. Acceptance of Terms</h2>
            <p>By accessing and using the Blue Education website (blueeducation.com.au), you accept and agree to be bound by these Terms of Use. If you do not agree, please do not use our website.</p>

            <h2>2. About Our Services</h2>
            <p>Blue Education Pty Ltd provides education consulting, migration advisory, career services, and student support programmes. We act as an independent intermediary between you and educational institutions, government bodies, and other service providers. We are not the institution itself, and final decisions on admissions, visa grants, and related outcomes are made by the relevant authority.</p>

            <h2>3. Migration Services Disclaimer</h2>
            <p>Migration advice provided by Blue Education is given by or under the supervision of registered migration agents in accordance with the Migration Act 1958 (Cth). Our registered agents hold current registration with the Office of the Migration Agents Registration Authority (OMARA). Registration details are available on request. Nothing on this website constitutes migration advice. For personalised advice, please contact us directly.</p>

            <h2>4. Education Agent Disclaimer</h2>
            <p>Blue Education acts as an authorised representative of various Australian educational institutions. We assist with course selection, application preparation, and enrolment processes. However, we do not guarantee admission to any institution or programme. Entry requirements, fees, and course availability are determined by the institution and may change without notice.</p>

            <h2>5. Intellectual Property</h2>
            <p>All content on this website (including text, images, logos, and design) is the property of Blue Education Pty Ltd or its licensors. You may not reproduce, distribute, or modify any content without our prior written consent.</p>

            <h2>6. Accuracy of Information</h2>
            <p>We endeavour to keep the information on our website accurate and up to date. However, we make no warranties or representations about the accuracy, completeness, or suitability of this information. Visa regulations, course details, and fees are subject to change without notice. Always verify current details with the relevant institution or government department.</p>

            <h2>7. Enquiry Form</h2>
            <p>When you submit an enquiry through our contact form, you consent to us collecting and using the information you provide in accordance with our <a href="{{ route('privacy') }}">Privacy Policy</a>. We will use your enquiry details solely to respond to your request.</p>

            <h2>8. User Obligations</h2>
            <p>When using our website or services, you agree to:</p>
            <ul>
                <li>Provide accurate and truthful information</li>
                <li>Not use the website for unlawful purposes</li>
                <li>Not attempt to interfere with the website's operation</li>
                <li>Respect the intellectual property rights of Blue Education</li>
            </ul>

            <h2>9. Limitation of Liability</h2>
            <p>To the maximum extent permitted by law, Blue Education Pty Ltd is not liable for any loss or damage arising from your use of this website or reliance on its content. This includes direct, indirect, incidental, or consequential damages.</p>

            <h2>10. External Links</h2>
            <p>Our website may contain links to third-party websites. We are not responsible for the content or privacy practices of external sites. Use of external links is at your own risk.</p>

            <h2>11. Governing Law</h2>
            <p>These Terms of Use are governed by the laws of Western Australia and the Commonwealth of Australia. Any disputes shall be subject to the exclusive jurisdiction of the courts of Western Australia.</p>

            <h2>12. Changes to Terms</h2>
            <p>We reserve the right to update these Terms of Use at any time. Continued use of the website after changes constitutes acceptance of the updated terms.</p>

            <h2>13. Contact</h2>
            <p>For questions about these terms, contact us at:</p>
            <p>
                Blue Education Pty Ltd<br>
                33 Barrack St, GF Unit 2<br>
                Perth WA 6000<br>
                Email: <a href="mailto:info@blueeducation.com.au">info@blueeducation.com.au</a><br>
                Phone: <a href="tel:+61863810030">+61 8 6381 0030</a>
            </p>
        </div>
    </section>

    <x-cta-banner title="Need Clarification?"
                  subtitle="If you have questions about our terms or services, we're happy to help."
                  primary-text="Contact Us"
                  :primary-href="route('contact')" />

</x-layout>
