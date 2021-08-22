<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class EditHuntersDescriptionTableMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $hunters = $this->table('hunters');
        $hunters->addColumn('hunters_desc', 'text', ['null' => true])->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $hunters = $this->table('hunters');
        $hunters->removeColumn('hunters_desc')->save();
    }
}
