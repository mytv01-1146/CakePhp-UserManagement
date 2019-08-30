<?php

use Phinx\Migration\AbstractMigration;

class UsersMigration extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('full_name', 'string')
            ->addColumn('address', 'string')
            ->addColumn('birth', 'date')
            ->addColumn('account_id', 'integer')
            ->addForeignKey('account_id', 'accounts', 'id')
            ->create();
    }
}
