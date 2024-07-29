<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class GenerateSeeders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:seeders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate seeders for all tables in the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tables = DB::select('SHOW TABLES');
        $dbName = env('DB_DATABASE');
        $tables = array_map('current', $tables);
        
        foreach ($tables as $table) {
            $this->info("Generating seeder for table: $table");
            Artisan::call('iseed', ['tables' => $table, '--force' => true]);
        }

        $this->info('All seeders generated successfully.');
        return 0;
    }
}
