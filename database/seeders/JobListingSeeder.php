<?php

namespace Database\Seeders;

use App\Models\JobListing;
use Illuminate\Database\Seeder;

class JobListingSeeder extends Seeder
{
    public function run(): void
    {
        $jobs = [
            // Engineering
            ['title' => 'Senior Backend Engineer (Laravel / PHP)',  'department' => 'Engineering', 'department_type' => 'engineering', 'type' => 'Full-time', 'location' => 'Remote', 'sort_order' => 1],
            ['title' => 'Frontend Engineer (React / TypeScript)',    'department' => 'Engineering', 'department_type' => 'engineering', 'type' => 'Full-time', 'location' => 'Remote', 'sort_order' => 2],
            ['title' => 'DevOps / Platform Engineer',                'department' => 'Engineering', 'department_type' => 'engineering', 'type' => 'Full-time', 'location' => 'Remote', 'sort_order' => 3],
            ['title' => 'QA Engineer (Manual + Automation)',         'department' => 'Engineering', 'department_type' => 'engineering', 'type' => 'Full-time', 'location' => 'Remote', 'sort_order' => 4],
            // Design
            ['title' => 'Product Designer (UI/UX)',  'department' => 'Design', 'department_type' => 'design', 'type' => 'Full-time', 'location' => 'Remote', 'sort_order' => 1],
            ['title' => 'Brand & Motion Designer',   'department' => 'Design', 'department_type' => 'design', 'type' => 'Contract',  'location' => 'Remote', 'sort_order' => 2],
            // Product & Delivery
            ['title' => 'Technical Project Manager',  'department' => 'Product & Delivery', 'department_type' => 'product', 'type' => 'Full-time', 'location' => 'Remote', 'sort_order' => 1],
            ['title' => 'Product Manager (B2B SaaS)', 'department' => 'Product & Delivery', 'department_type' => 'product', 'type' => 'Full-time', 'location' => 'Remote', 'sort_order' => 2],
            // Sales & Growth
            ['title' => 'Account Executive (EMEA)',         'department' => 'Sales & Growth', 'department_type' => 'sales', 'type' => 'Full-time', 'location' => 'Remote (EU hours)', 'sort_order' => 1],
            ['title' => 'Sales Development Representative', 'department' => 'Sales & Growth', 'department_type' => 'sales', 'type' => 'Full-time', 'location' => 'Remote', 'sort_order' => 2],
            ['title' => 'Partnerships Manager',              'department' => 'Sales & Growth', 'department_type' => 'sales', 'type' => 'Full-time', 'location' => 'Remote', 'sort_order' => 3],
        ];

        foreach ($jobs as $job) {
            JobListing::create(array_merge($job, ['active' => true]));
        }
    }
}
