<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelloCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello:class {--switch}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'サンプルコマンド（クラス）';

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
     * optionがついている場合はtrueを返して、付いていない場合はfalseを返す
     */
    public function handle()
    {
        $switch = $this->option('switch');
        $this->comment('Hello ' . ($switch ? 'ON' : 'OFF'));
    }
}
