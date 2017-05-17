<?php

use CookingChallenge\Model\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->store(1, 'Gustavo Bissolli', 'gustavo.bissolli@gmail.com', 'mypass', '1987-09-03', '+55 (15) 9 9850.6775', 'M', 25);
    }

    private function store($id, $name, $email, $password, $bornAt, $mobile, $gender, $countryId){
        if(! User::find($id)) {
            User::create([
                'id' => $id,
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password),
                'born_at' => $bornAt,
                'mobile' => $mobile,
                'gender' => $gender,
                'country_id' => $countryId,
            ]);
        }
    }
}
