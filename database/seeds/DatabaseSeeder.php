<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        $this->seedUserTable();

        Model::reguard();
    }

    private function seedUserTable()
    {
        $user = new User();

        $user->name = "Albertmayor";
        $user->password = bcrypt(env('PASSWORD_ESTIMAT','1234'));
        $user->email = "albertxerta93@gmail.com";

        $user->save();
    }
}