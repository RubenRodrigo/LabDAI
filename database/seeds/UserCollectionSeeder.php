<?php

use Illuminate\Database\Seeder;
use App\User;

class UserCollectionSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'rodrigo',
            'email' => 'rodrigohde905@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->each( function ($user){
            $user->posts() ->createMany(
                factory(App\Post::class, 4)->make()->toArray()
            );
         });
            
            
        $users = factory(App\User::class, 10)
            ->create()
            ->each( function ($user){                
                $user->posts()->createMany(
                    factory(App\Post::class, 2)->make()->toArray()
                );  
                // $usersCount = User::count();
                // echo $usersCount;
            });
    }
}
