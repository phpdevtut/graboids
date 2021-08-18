<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddAdminColumnToUsersTable extends AbstractMigration
{
    public function up()
    {
        $usersTable = $this->table('users');
        $usersTable->addColumn('admin', 'boolean', [
            'null' => false,
            'default' => false,
        ])->save();
    }

    public function down()
    {
        $usersTable = $this->table('users');
        $usersTable->removeColumn('admin')->save();
    }
}
