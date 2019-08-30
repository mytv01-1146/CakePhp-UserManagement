<?php
use Phinx\Seed\AbstractSeed;

class ClientSeeder extends AbstractSeed
{
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $account = $this->table('accounts');
            $data = [];
            $data = [
                'user_name' => $faker->userName,
                'password' => sha1('Hieptran1'),
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
