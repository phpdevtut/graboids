<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ChangeUsersToNullableTableMigration extends AbstractMigration
{
    public function up() {
        $users = $this->table('users');
        $users->changeColumn('user_id', 'string', ['null' => true])->save();
        $users->changeColumn('username', 'string', ['null' => true])->save();
        $users->changeColumn('password', 'string', ['null' => true])->save();
    }

    public function down() {
        $users = $this->table('users');
        $users->changeColumn('user_id', 'string', ['null' => false])->save();
        $users->changeColumn('username', 'string', ['null' => false])->save();
        $users->changeColumn('password', 'string', ['null' => false])->save();
    }
}
