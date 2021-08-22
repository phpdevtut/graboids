<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class EditHuntersDescriptionNameTableMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $hunters = $this->table('hunters');
        $hunters->addColumn('hunter_desc', 'text', ['null' => true])->save();
        $hunters->removeColumn('hunters_desc')->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $hunters = $this->table('hunters');
        $hunters->removeColumn('hunter_desc')->save();
        $hunters->addColumn('hunters_desc', 'text', ['null' => true])->save();

    }
}
