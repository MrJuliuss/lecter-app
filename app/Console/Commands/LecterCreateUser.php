<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Facades\Hash;
use App\User;

class LecterCreateUser extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'lecter:create-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a user in database for Lecter app';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $email = $this->argument('email');
        $pass = $this->argument('password'); 

        $user = User::create([
            'email' => $email,
            'password' => Hash::make($pass),
        ]);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['email',    InputArgument::REQUIRED, 'User email'],
            ['password', InputArgument::REQUIRED, 'User password'],
        ];
    }


    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }
}
