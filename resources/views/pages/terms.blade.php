@extends('layouts.app')

@section('title', 'Terms of Service — Zerta')
@section('description', 'Terms governing use of Zerta\'s website and services.')

@section('content')

<section class="bg-white pt-32 pb-24 lg:pt-40 lg:pb-32">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

        <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Legal</p>
        <h1 class="text-4xl sm:text-5xl font-black text-slate-900 leading-tight tracking-tight mb-4">Terms of Service</h1>
        <p class="text-sm text-slate-400 mb-12">Last updated: April 1, 2026</p>

        <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-8">

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">1. Acceptance</h2>
                <p>By accessing or using the zerta.io website or any Zerta services, you agree to be bound by these Terms of Service. If you do not agree, do not use our services.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">2. Services</h2>
                <p>Zerta provides software outsourcing, staff augmentation, dedicated engineering teams, talent outsourcing, and IT consulting services. The specific scope, deliverables, timeline, and pricing for any engagement are governed by a separate Statement of Work or Master Services Agreement executed between Zerta and the client.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">3. Account and access</h2>
                <p>You are responsible for maintaining the confidentiality of any login credentials associated with your account and for all activity that occurs under your account. Notify us immediately of any unauthorised use at <a href="mailto:security@zerta.io" class="font-medium hover:underline" style="color:#150958;">security@zerta.io</a>.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">4. Intellectual property</h2>
                <p>All content on this website — including text, graphics, logos, and code — is the property of Zerta Inc. or its content suppliers and is protected by applicable intellectual property laws. Work product created under a project agreement is governed by the IP terms in that agreement.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">5. Prohibited conduct</h2>
                <p class="mb-3">You agree not to:</p>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Use our website for any unlawful purpose or in violation of any regulations.</li>
                    <li>Attempt to gain unauthorised access to our systems or data.</li>
                    <li>Transmit any malicious code or interfere with the operation of our website.</li>
                    <li>Reproduce or redistribute any content from this website without written permission.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">6. Disclaimer of warranties</h2>
                <p>This website and its contents are provided "as is" without warranty of any kind, express or implied. Zerta does not warrant that the website will be uninterrupted, error-free, or free of viruses.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">7. Limitation of liability</h2>
                <p>To the fullest extent permitted by law, Zerta's total liability for any claims arising from your use of this website shall not exceed $100 USD. Zerta is not liable for indirect, incidental, or consequential damages.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">8. Governing law</h2>
                <p>These terms are governed by the laws of the State of California, United States, without regard to conflict-of-law principles. Any disputes shall be resolved in the courts of San Francisco County, California.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">9. Changes to these terms</h2>
                <p>We may revise these terms at any time. Continued use of the website after changes are posted constitutes acceptance of the revised terms.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">10. Contact</h2>
                <p>Questions about these terms? Email <a href="mailto:legal@zerta.io" class="font-medium hover:underline" style="color:#150958;">legal@zerta.io</a>.</p>
            </div>

        </div>
    </div>
</section>

@endsection
