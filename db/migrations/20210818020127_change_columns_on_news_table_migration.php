<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ChangeColumnsOnNewsTableMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $news = $this->table('news');
        $news->addColumn('title', 'text', ['null' => true])->save();
        $news->addColumn('content', 'text', ['null' => true])->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $news = $this->table('news');
        $news->removeColumn('title', 'text', ['null' => false])->save();
        $news->removeColumn('content', 'text', ['null' => false])->save();
    }
}
