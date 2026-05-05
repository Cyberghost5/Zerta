<?php

namespace Database\Seeders;

use App\Models\JobListing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobListingSeeder extends Seeder
{
    public function run(): void
    {
        // Truncate first to prevent duplicates on re-seed
        DB::table('job_listings')->truncate();

        $jobs = [

            /* ── Engineering ─────────────────────────────────────────── */
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 1,
             'title' => 'Senior Backend Engineer (Laravel / PHP)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 2,
             'title' => 'Senior Frontend Engineer (React / TypeScript)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 3,
             'title' => 'Full-Stack Engineer (Node.js + Vue)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 4,
             'title' => 'Mobile Engineer (React Native)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 5,
             'title' => 'Mobile Engineer (Flutter / Dart)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 6,
             'title' => 'DevOps / Platform Engineer', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 7,
             'title' => 'Cloud Engineer (AWS / GCP)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 8,
             'title' => 'Site Reliability Engineer (SRE)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 9,
             'title' => 'Security Engineer (AppSec)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 10,
             'title' => 'QA Engineer (Manual + Automation)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 11,
             'title' => 'Machine Learning Engineer', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 12,
             'title' => 'Data Engineer (Python / Spark)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 13,
             'title' => 'Blockchain Developer (Solidity / Web3)', 'type' => 'Contract', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 14,
             'title' => 'Embedded Systems Engineer (C / C++)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 15,
             'title' => 'Android Engineer (Kotlin)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Engineering', 'department_type' => 'engineering', 'sort_order' => 16,
             'title' => 'iOS Engineer (Swift)', 'type' => 'Full-time', 'location' => 'Remote'],

            /* ── Design ──────────────────────────────────────────────── */
            ['department' => 'Design', 'department_type' => 'design', 'sort_order' => 1,
             'title' => 'Product Designer (UI/UX)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Design', 'department_type' => 'design', 'sort_order' => 2,
             'title' => 'Senior UX Designer', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Design', 'department_type' => 'design', 'sort_order' => 3,
             'title' => 'UX Researcher', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Design', 'department_type' => 'design', 'sort_order' => 4,
             'title' => 'Brand & Motion Designer', 'type' => 'Contract', 'location' => 'Remote'],
            ['department' => 'Design', 'department_type' => 'design', 'sort_order' => 5,
             'title' => 'Graphic Designer', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Design', 'department_type' => 'design', 'sort_order' => 6,
             'title' => 'Video Editor & Content Creator', 'type' => 'Contract', 'location' => 'Remote'],
            ['department' => 'Design', 'department_type' => 'design', 'sort_order' => 7,
             'title' => 'Design Systems Lead', 'type' => 'Full-time', 'location' => 'Remote'],

            /* ── Product & Delivery ───────────────────────────────────── */
            ['department' => 'Product & Delivery', 'department_type' => 'product', 'sort_order' => 1,
             'title' => 'Product Manager (B2B SaaS)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Product & Delivery', 'department_type' => 'product', 'sort_order' => 2,
             'title' => 'Technical Project Manager', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Product & Delivery', 'department_type' => 'product', 'sort_order' => 3,
             'title' => 'Scrum Master / Agile Coach', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Product & Delivery', 'department_type' => 'product', 'sort_order' => 4,
             'title' => 'Business Analyst', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Product & Delivery', 'department_type' => 'product', 'sort_order' => 5,
             'title' => 'Technical Writer', 'type' => 'Contract', 'location' => 'Remote'],

            /* ── Sales & Growth ───────────────────────────────────────── */
            ['department' => 'Sales & Growth', 'department_type' => 'sales', 'sort_order' => 1,
             'title' => 'Account Executive (EMEA)', 'type' => 'Full-time', 'location' => 'Remote (EU hours)'],
            ['department' => 'Sales & Growth', 'department_type' => 'sales', 'sort_order' => 2,
             'title' => 'Account Executive (North America)', 'type' => 'Full-time', 'location' => 'Remote (US hours)'],
            ['department' => 'Sales & Growth', 'department_type' => 'sales', 'sort_order' => 3,
             'title' => 'Sales Development Representative', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Sales & Growth', 'department_type' => 'sales', 'sort_order' => 4,
             'title' => 'Partnerships Manager', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Sales & Growth', 'department_type' => 'sales', 'sort_order' => 5,
             'title' => 'Revenue Operations Analyst', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Sales & Growth', 'department_type' => 'sales', 'sort_order' => 6,
             'title' => 'Solutions Engineer (Pre-Sales)', 'type' => 'Full-time', 'location' => 'Remote'],

            /* ── Marketing ────────────────────────────────────────────── */
            ['department' => 'Marketing', 'department_type' => 'marketing', 'sort_order' => 1,
             'title' => 'Content Writer / Copywriter', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Marketing', 'department_type' => 'marketing', 'sort_order' => 2,
             'title' => 'SEO Specialist', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Marketing', 'department_type' => 'marketing', 'sort_order' => 3,
             'title' => 'Social Media Manager', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Marketing', 'department_type' => 'marketing', 'sort_order' => 4,
             'title' => 'Performance Marketing Manager (Paid Ads)', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Marketing', 'department_type' => 'marketing', 'sort_order' => 5,
             'title' => 'Email Marketing Specialist', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Marketing', 'department_type' => 'marketing', 'sort_order' => 6,
             'title' => 'Brand Manager', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Marketing', 'department_type' => 'marketing', 'sort_order' => 7,
             'title' => 'Product Marketing Manager', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Marketing', 'department_type' => 'marketing', 'sort_order' => 8,
             'title' => 'Growth Hacker / Demand Generation Specialist', 'type' => 'Full-time', 'location' => 'Remote'],

            /* ── Customer Success ─────────────────────────────────────── */
            ['department' => 'Customer Success', 'department_type' => 'customer_success', 'sort_order' => 1,
             'title' => 'Customer Success Manager', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Customer Success', 'department_type' => 'customer_success', 'sort_order' => 2,
             'title' => 'Customer Support Specialist', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Customer Success', 'department_type' => 'customer_success', 'sort_order' => 3,
             'title' => 'Technical Account Manager', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Customer Success', 'department_type' => 'customer_success', 'sort_order' => 4,
             'title' => 'Onboarding Specialist', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Customer Success', 'department_type' => 'customer_success', 'sort_order' => 5,
             'title' => 'Support Engineer (Tier 2)', 'type' => 'Full-time', 'location' => 'Remote'],

            /* ── People & Operations ──────────────────────────────────── */
            ['department' => 'People & Operations', 'department_type' => 'operations', 'sort_order' => 1,
             'title' => 'HR Manager', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'People & Operations', 'department_type' => 'operations', 'sort_order' => 2,
             'title' => 'Talent Acquisition Specialist', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'People & Operations', 'department_type' => 'operations', 'sort_order' => 3,
             'title' => 'Technical Recruiter', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'People & Operations', 'department_type' => 'operations', 'sort_order' => 4,
             'title' => 'Operations Manager', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'People & Operations', 'department_type' => 'operations', 'sort_order' => 5,
             'title' => 'Executive Assistant', 'type' => 'Full-time', 'location' => 'Remote'],

            /* ── Finance ─────────────────────────────────────────────── */
            ['department' => 'Finance', 'department_type' => 'finance', 'sort_order' => 1,
             'title' => 'Finance Manager', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Finance', 'department_type' => 'finance', 'sort_order' => 2,
             'title' => 'Financial Analyst', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Finance', 'department_type' => 'finance', 'sort_order' => 3,
             'title' => 'Accounts Receivable Specialist', 'type' => 'Full-time', 'location' => 'Remote'],
            ['department' => 'Finance', 'department_type' => 'finance', 'sort_order' => 4,
             'title' => 'Payroll Specialist', 'type' => 'Full-time', 'location' => 'Remote'],

        ];

        foreach ($jobs as $job) {
            JobListing::create(array_merge($job, ['active' => true]));
        }
    }
}
