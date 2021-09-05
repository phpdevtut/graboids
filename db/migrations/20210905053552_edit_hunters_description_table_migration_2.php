<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class EditHuntersDescriptionTableMigration2 extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $hunters = $this->table('hunters');
        $hunters->renameColumn('desc', 'description')->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $hunters = $this->table('hunters');
        $hunters->renameColumn('description', 'desc')->save();
    }
}
