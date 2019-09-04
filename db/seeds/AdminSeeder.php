<?php

use Cake\ORM\TableRegistry;
use Phinx\Seed\AbstractSeed;

class AdminSeeder extends AbstractSeed
{
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            $account = $this->table('accounts');
            $data = [];
            $data = [
                'user_name' => 'admin' . ($i + 1),
                'password' => sha1('Hieptran1'),
                'role' => 0,
            ];
            try {
                $account->insert($data)->save();
                $user = $this->table('users');
                $data = [];
                $data = [
                    'full_name' => $faker->name,
                    'address' => $faker->address,
                    'birth' => '1997-04-19',
                    'account_id' => $this->getAdapter()->getConnection()->lastInsertId(),
                ];
                $user->insert($data)->save();
            } catch (Exception $e) {
                throw $e;
            }
        }
    }
}
