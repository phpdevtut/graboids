<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class DeleteUserIdFromUsersTableMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('users');
        $users->removeColumn('user_id')->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $users = $this->table('users');
        $users->addColumn('user_id', 'string', ['null' => true])->save();
    }
}
