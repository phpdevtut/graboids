<?php


use Phinx\Seed\AbstractSeed;

class HuntersSeeder extends AbstractSeed
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
        $hunters = [
            [
                'src' => '/assets/images/hunters/hunter1.jpg',
            ],
            [
                'src' => '/assets/images/hunters/hunter2.jpg',
            ],
            [
                'src' => '/assets/images/hunters/hunter3.jpg',
            ],
            [
                'src' => '/assets/images/hunters/hunter4.jpg',
            ],
            [
                'src' => '/assets/images/hunters/hunter5.jpg',
            ],
        ];

        $huntersTable = $this->table('hunters');
        $huntersTable->insert($hunters)->saveData();
    }
}
