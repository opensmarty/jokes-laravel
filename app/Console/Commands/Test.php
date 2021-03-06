<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
      $output = shell_exec('pwd');
      //shell_exec('mkdir '.time());
      print $output;
      //echo $output;
      $logPath = 'joke_spider/test_log';
      $this->info('test');
      Storage::disk('local')->append($logPath, '['.date('Y-m-d H:i:s', time()).']'.'test');
      return;
    }
}
