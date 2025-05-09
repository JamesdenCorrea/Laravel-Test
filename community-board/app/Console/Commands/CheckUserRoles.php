<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CheckUserRoles extends Command
{
    protected $signature = 'users:check-roles';
    protected $description = 'Check user roles in the database';

    public function handle()
    {
        $users = User::all();
        
        if ($users->isEmpty()) {
            $this->error('No users found in the database!');
            return;
        }

        $this->info('Current users and their roles:');
        $this->table(
            ['ID', 'Name', 'Email', 'Role'],
            $users->map(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->role ?? 'not set'
                ];
            })
        );
    }
} 