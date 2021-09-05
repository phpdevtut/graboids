<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class EditGraboidsDescriptionTableMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $graboids = $this->table('graboids');
        $graboids->addColumn('title', 'text', ['null' => true])->save();
        $graboids->addColumn('description', 'text', ['null' => true])->save();
        $graboids->addColumn('tags', 'text', ['null' => true])->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $graboids = $this->table('graboids');
        $graboids->removeColumn('title')->save();
        $graboids->removeColumn('description')->save();
        $graboids->removeColumn('tags')->save();
    }
}
