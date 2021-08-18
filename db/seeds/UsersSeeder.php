<?php


use Phinx\Seed\AbstractSeed;

class UsersSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $users = [
            [
                'user_id' => 123,
                'username' => 'braden',
                'password' => 'secret',
            ],
        ];

        $usersTable = $this->table('users');
        $usersTable->insert($users)->saveData();
    }
}
