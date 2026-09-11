<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TermOfPaymentSeeder::class,
            BusinessClassificationSeeder::class,
            RoleSeeder::class,
            LocationSeeder::class,
            AdminSeeder::class,
            ProjectSeeder::class,
            VendorSeeder::class,
            BankSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(ApprovalFlowsTableSeeder::class);
        $this->call(ApprovalLogsTableSeeder::class);
        $this->call(ApprovalStepsTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(BusinessClassificationsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CounterOffersTableSeeder::class);
        $this->call(DocumentApprovalsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(NegotiationMessagesTableSeeder::class);
        $this->call(NegotiationThreadsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProjectApprovalEntriesTableSeeder::class);
        $this->call(ProjectItemsTableSeeder::class);
        $this->call(ProjectItemAttachmentsTableSeeder::class);
        $this->call(ProjectSchedulesTableSeeder::class);
        $this->call(PurchaseOrdersTableSeeder::class);
        $this->call(QuotationsTableSeeder::class);
        $this->call(QuotationItemsTableSeeder::class);
        $this->call(QuotationVersionsTableSeeder::class);
        $this->call(RfpsTableSeeder::class);
        $this->call(RfpBusinessClassificationsTableSeeder::class);
        $this->call(RfpSubmissionsTableSeeder::class);
        $this->call(RfqsTableSeeder::class);
        $this->call(RfqBusinessClassificationsTableSeeder::class);
        $this->call(RfqInvitationsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(SuccessfulJobsTableSeeder::class);
        $this->call(TendersTableSeeder::class);
        $this->call(TermOfPaymentsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(VendorCategoryTableSeeder::class);
        $this->call(VendorDocumentsTableSeeder::class);
        $this->call(VendorTermOfPaymentsTableSeeder::class);
    }
}
