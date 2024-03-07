<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Jika ingin mengggunakan seeder factory

        
        
        // User::factory(3)->create();
        // Category::create([
        //     'name'=>'Web Programming',
        //     'slug'=>'Web-Programming',
        // ]);
        // Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal',
        // ]);
        Post::factory(5)->create();
        //Jika Ingin Menggunakan Seeder Manual seperti di php artisan tinker 

        // User::create([
        //     'name'=>'Rangga Saputra',
        //     'email'=>'rangga@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);

        // User::create([
        //     'name'=>'Alma',
        //     'email'=>'alma@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);

        // Post::create([
        //     'tittle'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, cum?',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, cupiditate pariatur sequi laborum nulla, tempore temporibus sit sed voluptates suscipit, necessitatibus explicabo consequuntur quisquam ducimus maiores. Nisi dolores ad ab veniam? Quod officiis magni expedita, velit recusandae eaque illo reiciendis libero architecto repellendus impedit ad dolor eius pariatur in modi quo, asperiores neque. Corporis beatae, quidem nulla vero necessitatibus quaerat ut ratione fuga placeat ea esse deleniti quasi iure laboriosam natus reiciendis? Sed iure velit libero ratione illum, consequuntur accusantium.',
        //     'category_id'=> 1,
        //     'user_id'=> 1
        // ]);
        // Post::create([
        //     'tittle'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, cum?',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, cupiditate pariatur sequi laborum nulla, tempore temporibus sit sed voluptates suscipit, necessitatibus explicabo consequuntur quisquam ducimus maiores. Nisi dolores ad ab veniam? Quod officiis magni expedita, velit recusandae eaque illo reiciendis libero architecto repellendus impedit ad dolor eius pariatur in modi quo, asperiores neque. Corporis beatae, quidem nulla vero necessitatibus quaerat ut ratione fuga placeat ea esse deleniti quasi iure laboriosam natus reiciendis? Sed iure velit libero ratione illum, consequuntur accusantium.',
        //     'category_id'=> 1,
        //     'user_id'=> 1
        // ]);
        // Post::create([
        //     'tittle'=>'Judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, cum?',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, cupiditate pariatur sequi laborum nulla, tempore temporibus sit sed voluptates suscipit, necessitatibus explicabo consequuntur quisquam ducimus maiores. Nisi dolores ad ab veniam? Quod officiis magni expedita, velit recusandae eaque illo reiciendis libero architecto repellendus impedit ad dolor eius pariatur in modi quo, asperiores neque. Corporis beatae, quidem nulla vero necessitatibus quaerat ut ratione fuga placeat ea esse deleniti quasi iure laboriosam natus reiciendis? Sed iure velit libero ratione illum, consequuntur accusantium.',
        //     'category_id'=> 2,
        //     'user_id'=> 1
        // ]);
        // Post::create([
        //     'tittle'=>'Judul Keempat',
        //     'slug'=>'judul-Keempat',
        //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, cum?',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, cupiditate pariatur sequi laborum nulla, tempore temporibus sit sed voluptates suscipit, necessitatibus explicabo consequuntur quisquam ducimus maiores. Nisi dolores ad ab veniam? Quod officiis magni expedita, velit recusandae eaque illo reiciendis libero architecto repellendus impedit ad dolor eius pariatur in modi quo, asperiores neque. Corporis beatae, quidem nulla vero necessitatibus quaerat ut ratione fuga placeat ea esse deleniti quasi iure laboriosam natus reiciendis? Sed iure velit libero ratione illum, consequuntur accusantium.',
        //     'category_id'=> 2,
        //     'user_id'=> 2
        // ]);
    }
}
