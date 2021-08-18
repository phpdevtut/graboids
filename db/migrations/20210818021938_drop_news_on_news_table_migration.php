<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class DropNewsOnNewsTableMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $news = $this->table('news');
        $news->removeColumn('news')->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $news = $this->table('news');
        $news->addColumn('news', 'text', ['null' => true])->save();
    }
}
