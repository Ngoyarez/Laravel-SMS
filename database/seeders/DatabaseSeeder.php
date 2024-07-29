<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BloodGroupsTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(DormsTableSeeder::class);
        $this->call(ClassTypesTableSeeder::class);
        $this->call(UserTypesTableSeeder::class);
        $this->call(MyClassesTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(LgasTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(StudentRecordsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(BookRequestsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(ExamRecordsTableSeeder::class);
        $this->call(ExamsTableSeeder::class);
        $this->call(MarksTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PaymentRecordsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PinsTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);
        $this->call(ReceiptsTableSeeder::class);
        $this->call(StaffRecordsTableSeeder::class);
        $this->call(TimeSlotsTableSeeder::class);
        $this->call(TimeTableRecordsTableSeeder::class);
        $this->call(TimeTablesTableSeeder::class);
    }
}
