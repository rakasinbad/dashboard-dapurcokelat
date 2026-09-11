<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Get required dependencies
        $locations = Location::all();
        $admin = User::role('admin')->first() ?? User::first(); // Assumes Spatie Roles or just first user

        if ($locations->isEmpty() || !$admin) {
            $this->command->warn("Skipping ProjectSeeder: Locations or Users not found. Run LocationSeeder and UserSeeder first.");
            return;
        }

        $projectData = [
            [
                'title' => 'Office Renovation - Jakarta HQ',
                'department' => 'General Affairs',
                'description' => 'Renovation of the 5th floor including new workstations and meeting room soundproofing.',
                'estimated_budget' => 550000000.00,
                'status' => 'approved',
                'location_slug' => 'jkt',
                'project_code' => 'PRJ-001'
            ],
            [
                'title' => 'IT Infrastructure Upgrade 2026',
                'department' => 'IT',
                'description' => 'Server migration to hybrid cloud and core switch replacements.',
                'estimated_budget' => 1250000000.00,
                'status' => 'requested',
                'location_slug' => 'jkt',
                'project_code' => 'PRJ-002'
            ],
            [
                'title' => 'Warehouse Racking Surabaya',
                'department' => 'Logistics',
                'description' => 'Heavy-duty pallet racking system for the new Surabaya distribution center.',
                'estimated_budget' => 320000000.00,
                'status' => 'draft',
                'location_slug' => 'sby',
                'project_code' => 'PRJ-003'
            ],
        ];

        foreach ($projectData as $index => $data) {
            $location = $locations->where('slug', $data['location_slug'])->first();

            // Create the Project
            $project = Project::create([
                'title' => $data['title'],
                'department' => $data['department'],
                'description' => $data['description'],
                'estimated_budget' => $data['estimated_budget'],
                'status' => $data['status'],
                'location_id' => $location?->id,
                'created_by' => $admin->id,
                'approved_by' => $data['status'] === 'approved' ? $admin->id : null,
                'approved_at' => $data['status'] === 'approved' ? now() : null,
                'project_code' => $data['project_code']
            ]);

            // 2. Add Project Items
            $project->items()->createMany([
                [
                    'item_name' => "General Labor / Contractor Fee " . $index + 1,
                    'quantity' => 1,
                    'uom' => 'lot',
                    'target_unit_price' => $data['estimated_budget'] * 0.4,
                    'specs' => ['scope' => 'Standard Installation', 'warranty' => '1 Year'],
                ],
                [
                    'item_name' => 'Primary Hardware / Materials ' . $index + 1,
                    'quantity' => 10,
                    'uom' => 'unit',
                    'target_unit_price' => $data['estimated_budget'] * 0.05,
                    'specs' => ['brand' => 'Premium Brand', 'grade' => 'A'],
                ],
            ]);

            // 3. Add Project Schedule
            $project->schedules()->createMany([
                [
                    'activity_name' => 'Tender Preparation' . $index + 1,
                    'start_datetime' => now(),
                    'end_datetime' => now()->addDays(7),
                    'is_mandatory' => true,
                    'order_sequence' => 1,
                ],
                [
                    'activity_name' => 'Vendor Selection' . $index + 1,
                    'start_datetime' => now()->addDays(8),
                    'end_datetime' => now()->addDays(21),
                    'is_mandatory' => true,
                    'order_sequence' => 2,
                ],
            ]);

            // 4. Add Approval Entry if project is requested or approved
            if (in_array($data['status'], ['pending', 'approved', 'rejected'])) {
                $project->approvalEntries()->create([
                    'approver_id' => $admin->id,
                    'status' => $data['status'],
                    'notes' => 'Initial budget looks aligned with departmental annual plan.',
                    'processed_at' => now(),
                ]);
            }
        }
    }
}
