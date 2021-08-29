<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class EditHuntersColumnsTableMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $hunters = $this->table('hunters');
        $hunters->addColumn('desc', 'text', ['null' => true])->save();
        $hunters->removeColumn('hunter_desc')->save();
        $hunters->addColumn('name', 'text', ['null' => true])->save();
        $hunters->removeColumn('hunter_name')->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $hunters = $this->table('hunters');
        $hunters->removeColumn('desc')->save();
        $hunters->addColumn('hunter_desc', 'text', ['null' => true])->save();
        $hunters->removeColumn('name')->save();
        $hunters->addColumn('hunter_name', 'text', ['null' => true])->save();
    }
}
