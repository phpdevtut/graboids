<?php


use Phinx\Seed\AbstractSeed;

class GraboidsSeeder extends AbstractSeed
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
        $graboids = [
            [
                'src' => '/assets/images/grab1.jpg',
            ],
            [
                'src' => '/assets/images/grab2.jpg',
            ],
            [
                'src' => '/assets/images/grab3.jpg',
            ],
            [
                'src' => '/assets/images/grab4.jpg',
            ],
            [
                'src' => '/assets/images/grab5.jpg',
            ],
            [
                'src' => '/assets/images/grab6.jpg',
            ],
            [
                'src' => '/assets/images/grab7.jpg',
            ],
            [
                'src' => '/assets/images/grab8.jpg',
            ],
            [
                'src' => '/assets/images/grab9.jpg',
            ],
        ];

        $graboidsTable = $this->table('graboids');
        $graboidsTable->insert($graboids)->saveData();
    }
}
