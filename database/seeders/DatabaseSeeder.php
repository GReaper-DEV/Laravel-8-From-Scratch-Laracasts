<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user =  User::factory()->create([
            'name' => 'John Doe'
        ]);
        
         Post::factory(5)->create([
             'user_id' => $user->id
         ]);

    /*
         $facts = Category::create([
             'name' => 'Facts',
             'slug' => 'facts'
         ]);

         $noFacts = Category::create([
            'name' => 'No Facts',
            'slug' => 'no-facts'
        ]);


        Post::create([
            'category_id'=> $facts->id,
            'user_id' => $user->id,
            'title' => 'My first post',
            'excerpt' => 'Lorem ipsum imit.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ]);
        Post::create([
            'category_id'=> $noFacts->id,
            'user_id' => $user->id,
            'title' => 'My second post',
            'excerpt' => 'Lorem ipsum imit.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ]);
        Post::create([
            'category_id'=> $facts->id,
            'user_id' => $user->id,
            'title' => 'My third post',
            'excerpt' => 'Lorem ipsum imit.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ]);
    */
    }
}
