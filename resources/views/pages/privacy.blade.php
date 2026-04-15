@extends('layouts.app')

@section('title', 'Privacy Policy — Zerta')
@section('description', 'How Zerta collects, uses, and protects your personal data.')

@section('content')

<section class="bg-white pt-32 pb-24 lg:pt-40 lg:pb-32">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

        <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Legal</p>
        <h1 class="text-4xl sm:text-5xl font-black text-slate-900 leading-tight tracking-tight mb-4">Privacy Policy</h1>
        <p class="text-sm text-slate-400 mb-12">Last updated: April 1, 2026</p>

        <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-8">

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">1. Who we are</h2>
                <p>Zerta Inc. ("Zerta", "we", "our", or "us") operates the website at zertahq.com and related services. We are the data controller for personal data collected through our website and services. Contact us at <a href="mailto:info@zertahq.com" class="font-medium hover:underline" style="color:#150958;">info@zertahq.com</a>.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">2. Data we collect</h2>
                <p class="mb-3">We collect information you provide directly (name, email, company, project details via our contact forms), information collected automatically when you visit our site (IP address, browser type, pages visited, referral source via cookies and analytics tools), and information from third-party sources such as LinkedIn when you apply for a role.</p>
                <p>We do not collect sensitive personal data (health, financial account details, racial origin, etc.).</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">3. How we use your data</h2>
                <ul class="list-disc pl-5 space-y-2">
                    <li>To respond to enquiries and provide the services you request.</li>
                    <li>To send transactional emails related to your project or engagement.</li>
                    <li>To send our newsletter if you've opted in (you may unsubscribe at any time).</li>
                    <li>To improve our website and services through aggregated analytics.</li>
                    <li>To comply with legal obligations.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">4. Legal basis for processing (GDPR)</h2>
                <p>Where applicable, we process personal data on the following legal bases: your consent; performance of a contract; our legitimate interests (improving our services, fraud prevention); and compliance with a legal obligation.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">5. Data sharing</h2>
                <p>We do not sell your personal data. We share data only with service providers who help us operate our business (e.g., email delivery, analytics, cloud hosting) under data processing agreements, and only to the extent necessary. We may disclose data if required by law.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">6. Data retention</h2>
                <p>We retain personal data for as long as necessary to fulfil the purposes described above, typically no longer than three years after our last interaction, unless a longer period is required by law.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">7. Your rights</h2>
                <p>Depending on your jurisdiction, you may have the right to access, correct, delete, or restrict processing of your personal data, and to data portability. To exercise any right, email <a href="mailto:info@zertahq.com" class="font-medium hover:underline" style="color:#150958;">info@zertahq.com</a>. We will respond within 30 days.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">8. Cookies</h2>
                <p>We use cookies for functionality and analytics. See our <a href="{{ route('cookies') }}" class="font-medium hover:underline" style="color:#150958;">Cookie Policy</a> for details.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">9. Security</h2>
                <p>We implement industry-standard technical and organisational measures to protect your data. No method of transmission over the Internet is 100% secure; we cannot guarantee absolute security.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">10. Changes to this policy</h2>
                <p>We may update this policy from time to time. Material changes will be notified by email or a prominent notice on our website. The "last updated" date at the top indicates when changes were last made.</p>
            </div>

        </div>
    </div>
</section>

@endsection
