<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateColumnsOnHunterTableMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $hunters = $this->table('hunters');
        $hunters->addColumn('hunter_name', 'text', ["null" => true])->save();
        $hunters->addColumn('tags', 'text', ["null" => true])->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $hunters = $this->table('hunters');
        $hunters->removeColumn('hunter_name')->save();
        $hunters->removeColumn('tags')->save();
    }
}
