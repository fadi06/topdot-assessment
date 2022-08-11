<?php

namespace App\Console\Commands;

use App\Http\Controllers\DataController;
use App\Models\User;
use Illuminate\Console\Command;

class DataSet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:data-set';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command get the data on behalf of user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = (new DataController)->getUserInfo();

        echo '<pre>';
        print_r($users['data']->toArray());
        exit();

        return $users;
    }
}
