@extends('layouts.app')

@section('title', 'Cookie Policy — Zerta')
@section('description', 'How Zerta uses cookies and similar technologies on its website.')

@section('content')

<section class="bg-white pt-32 pb-24 lg:pt-40 lg:pb-32">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

        <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Legal</p>
        <h1 class="text-4xl sm:text-5xl font-black text-slate-900 leading-tight tracking-tight mb-4">Cookie Policy</h1>
        <p class="text-sm text-slate-400 mb-12">Last updated: April 1, 2026</p>

        <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-8">

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">1. What are cookies?</h2>
                <p>Cookies are small text files placed on your device when you visit a website. They are widely used to make websites work, improve performance, and provide information to website owners.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">2. Cookies we use</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm border-collapse">
                        <thead>
                            <tr class="border-b border-slate-200">
                                <th class="text-left py-3 pr-6 font-bold text-slate-900">Category</th>
                                <th class="text-left py-3 pr-6 font-bold text-slate-900">Purpose</th>
                                <th class="text-left py-3 font-bold text-slate-900">Duration</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ([
                                ['cat' => 'Strictly necessary', 'purpose' => 'Session management, CSRF protection, security.',         'duration' => 'Session'],
                                ['cat' => 'Functional',         'purpose' => 'Remembering preferences (e.g., cookie consent).',       'duration' => '1 year'],
                                ['cat' => 'Analytics',          'purpose' => 'Aggregate, anonymised data on page visits and usage patterns (via a privacy-respecting analytics tool).', 'duration' => '2 years'],
                                ['cat' => 'Marketing',          'purpose' => 'Serving relevant ads and measuring ad performance. Only set with your consent.', 'duration' => '90 days'],
                            ] as $c)
                            <tr>
                                <td class="py-3 pr-6 font-medium text-slate-800">{{ $c['cat'] }}</td>
                                <td class="py-3 pr-6">{{ $c['purpose'] }}</td>
                                <td class="py-3 text-slate-500">{{ $c['duration'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">3. Third-party cookies</h2>
                <p>We use a small number of third-party services that may set their own cookies, including analytics providers. These providers operate under their own privacy policies. We do not allow any third-party advertising cookies without your explicit consent.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">4. Managing cookies</h2>
                <p class="mb-3">You can control and delete cookies through your browser settings. Please note that disabling certain cookies may affect the functionality of this website. Instructions for the most common browsers:</p>
                <ul class="list-disc pl-5 space-y-2">
                    <li><strong>Chrome:</strong> Settings &rarr; Privacy and security &rarr; Cookies and other site data</li>
                    <li><strong>Firefox:</strong> Settings &rarr; Privacy & Security &rarr; Cookies and Site Data</li>
                    <li><strong>Safari:</strong> Preferences &rarr; Privacy &rarr; Manage Website Data</li>
                    <li><strong>Edge:</strong> Settings &rarr; Cookies and site permissions</li>
                </ul>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">5. Your consent</h2>
                <p>When you first visit our website, we display a cookie banner allowing you to accept or decline non-essential cookies. You may withdraw or change your consent at any time by clicking the cookie settings link in our footer.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">6. Changes to this policy</h2>
                <p>We may update this Cookie Policy from time to time. The "last updated" date at the top indicates when changes were last made.</p>
            </div>

            <div>
                <h2 class="text-xl font-bold text-slate-900 mb-3">7. Contact</h2>
                <p>Questions? Email <a href="mailto:info@zertahq.com" class="font-medium hover:underline" style="color:#150958;">info@zertahq.com</a>.</p>
            </div>

        </div>
    </div>
</section>

@endsection
