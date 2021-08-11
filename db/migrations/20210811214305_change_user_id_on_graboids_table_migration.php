<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ChangeUserIdOnGraboidsTableMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $graboids = $this->table('graboids');
        $graboids->changeColumn('user_id', 'integer', ['null' => true])->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $graboids = $this->table('graboids');
        $graboids->changeColumn('user_id', 'integer', ['null' => false])->save();
    }
}
