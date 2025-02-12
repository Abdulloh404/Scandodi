<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RefreshDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Log::info("Cron Run");
        $this->resetDatabase();
        $this->copyImages();
        $this->info("All database has been refreshed");
        return 0;
    }

    public function resetDatabase()
    {
        Artisan::call('migrate:fresh', ['--force' => true]);
       // Log::error(Artisan::output());
        if(\Module::has("MultiRestaurant")){
            Artisan::call('module:migrate MultiRestaurant');
            $sql_dump = Storage::get('/public/sql/multi_restaurant.sql');
            DB::connection()->getPdo()->exec($sql_dump);
        }
        $sql_dump = $contents = Storage::get('/public/sql/picoqr.sql');
        DB::connection()->getPdo()->exec($sql_dump);
        Artisan::call('clear:all');
    }


    public function copyImages()
    {
        File::deleteDirectory(public_path().'/uploads');
        File::copyDirectory(storage_path('/app/public/backup_images'),public_path().'/uploads');
    }

}
