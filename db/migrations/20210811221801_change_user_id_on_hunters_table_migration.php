<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ChangeUserIdOnHuntersTableMigration extends AbstractMigration
{
    public function up() {
        $hunters = $this->table('hunters');
        $hunters->changeColumn('user_id', 'integer', ['null' => true])->save();
    }

    public function down() {
        $graboids = $this->table('hunters');
        $graboids->changeColumn('user_id', 'integer', ['null' => false])->save();
    }
}
