<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Create repeatable demonstration accounts.
     *
     * Password for all sample accounts: password
     * Role assignment is applied when the Spatie roles package and
     * HasRoles trait have been added by the authentication/roles contributor.
     */
    public function run(): void
    {
        $accounts = [
            [
                'name' => 'System Administrator',
                'email' => 'admin@example.com',
                'password' => 'password',
                'role' => 'Administrator',
            ],
            [
                'name' => 'Lecturer One',
                'email' => 'lecturer@example.com',
                'password' => 'password',
                'role' => 'Lecturer',
            ],
            [
                'name' => 'Student One',
                'email' => 'student1@example.com',
                'password' => 'password',
                'role' => 'Student',
            ],
            [
                'name' => 'Student Two',
                'email' => 'student2@example.com',
                'password' => 'password',
                'role' => 'Student',
            ],
            [
                'name' => 'Student Three',
                'email' => 'student3@example.com',
                'password' => 'password',
                'role' => 'Student',
            ],
        ];

        foreach ($accounts as $account) {
            $role = $account['role'];
            unset($account['role']);

            // updateOrCreate prevents duplicate accounts when db:seed is rerun.
            $user = User::updateOrCreate(
                ['email' => $account['email']],
                $account
            );

            // This activates automatically after the roles contributor installs
            // Spatie Permission and adds HasRoles to App\Models\User.
            if (method_exists($user, 'assignRole') &&
                class_exists(\Spatie\Permission\Models\Role::class) &&
                \Spatie\Permission\Models\Role::where('name', $role)->exists()) {
                $user->syncRoles([$role]);
            }
        }
    }
}
