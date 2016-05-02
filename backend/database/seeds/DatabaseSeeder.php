<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //----------------------------------------------------------------
        DB::table('usuarios')->delete();

        $users = array(
                ['apenom' => 'Palermo Martin', 'email' => 'titan@gmail.com', 'password' => Hash::make('secret')],
                ['apenom' => 'Riquelme Juan Roman', 'email' => 'jr@gmail.com', 'password' => Hash::make('secret')],
                ['apenom' => 'Holly Lloyd', 'email' => 'holly@scotch.io', 'password' => Hash::make('secret')],
                ['apenom' => 'Adnan Kukic', 'email' => 'adnan@scotch.io', 'password' => Hash::make('secret')],
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            Usuario::create($user);
        }
        //----------------------------------------------------------------
    }
}
