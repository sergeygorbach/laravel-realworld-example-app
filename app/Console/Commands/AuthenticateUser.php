<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class AuthenticateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:authenticate {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'JWT user authentication';

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
        $user = User::query()->find((int)$this->argument('user'));
        $this->info('Token:');
        $this->line($user->token);
    }
}
