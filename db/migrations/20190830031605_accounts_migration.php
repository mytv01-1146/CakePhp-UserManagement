<?php

use Phinx\Migration\AbstractMigration;

class AccountsMigration extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('accounts');
        $table->addColumn('user_name', 'string')
            ->addColumn('password', 'string')
            ->addColumn('role', 'integer', ['default' => 1])
            ->create();
    }
}
