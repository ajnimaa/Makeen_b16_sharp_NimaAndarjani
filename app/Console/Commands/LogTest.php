<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class LogTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'work';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $now = Carbon::now();
        // Log::build([
        //     'driver' => 'single',
        //     "path" => storage_path("logs/test.log"),
        // ])->info($now);


$myfile = fopen("log.test" , "w") or die("Unable to open file!");
$txt = Carbon::now();
fwrite($myfile, $txt);
fclose($myfile);
    }
}
