<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddParentIdColumnToCommentsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $comments = $this->table('comments');

        $comments
            ->addColumn(
                'parent_id',
                'integer',
                ['null' => true]
            )->update();
    }
}
