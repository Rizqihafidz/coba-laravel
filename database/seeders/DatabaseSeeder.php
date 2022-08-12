<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Album;
use App\Models\Berita;
use App\Models\Gambar;
use App\Models\Produk;
use App\Models\Potensi;
use App\Models\Program;
use App\Models\Aparatur;
use App\Models\Category;
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

        User::factory(3)->create();
        Post::factory(20)->create();
        Potensi::factory(10)->create();
        Program::factory(10)->create();
        Produk::factory(10)->create();
        Aparatur::factory(5)->create();
        Berita::factory(10)->create();
        Album::factory(3)->create();
        Gambar::factory(10)->create();

        // User::create([
        //     'name' => 'Rizqi Maulana Hafidz',
        //     'email' => 'aractorz123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Ivan Galih',
        //     'email' => 'ivangalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'News',
            'slug' => 'news'
        ]);

        Category::create([
            'name' => 'Nature',
            'slug' => 'nature'
        ]);

        Category::create([
            'name' => 'Health',
            'slug' => 'health'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa dolorem officia non iusto laudantium cumque enim debitis ipsum, cum assumenda.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea saepe reprehenderit, ducimus assumenda quas quos tempora architecto delectus ab libero distinctio blanditiis est, voluptas consectetur et animi illo cupiditate, aspernatur beatae. <p></p>Dolore sapiente incidunt dolorum quam eveniet corporis ratione odio molestiae qui fugit libero, dolores quasi deleniti vitae beatae consequatur. Vero ipsam architecto vitae dolorum? Repellendus quas blanditiis assumenda quidem?'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => '2',
        //     'user_id' => '1',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa dolorem officia non iusto laudantium cumque enim debitis ipsum, cum assumenda.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea saepe reprehenderit, ducimus assumenda quas quos tempora architecto delectus ab libero distinctio blanditiis est, voluptas consectetur et animi illo cupiditate, aspernatur beatae. <p></p>Dolore sapiente incidunt dolorum quam eveniet corporis ratione odio molestiae qui fugit libero, dolores quasi deleniti vitae beatae consequatur. Vero ipsam architecto vitae dolorum? Repellendus quas blanditiis assumenda quidem?'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => '1',
        //     'user_id' => '2',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa dolorem officia non iusto laudantium cumque enim debitis ipsum, cum assumenda.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea saepe reprehenderit, ducimus assumenda quas quos tempora architecto delectus ab libero distinctio blanditiis est, voluptas consectetur et animi illo cupiditate, aspernatur beatae. <p></p>Dolore sapiente incidunt dolorum quam eveniet corporis ratione odio molestiae qui fugit libero, dolores quasi deleniti vitae beatae consequatur. Vero ipsam architecto vitae dolorum? Repellendus quas blanditiis assumenda quidem?'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => '1',
        //     'user_id' => '2',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa dolorem officia non iusto laudantium cumque enim debitis ipsum, cum assumenda.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea saepe reprehenderit, ducimus assumenda quas quos tempora architecto delectus ab libero distinctio blanditiis est, voluptas consectetur et animi illo cupiditate, aspernatur beatae. <p></p>Dolore sapiente incidunt dolorum quam eveniet corporis ratione odio molestiae qui fugit libero, dolores quasi deleniti vitae beatae consequatur. Vero ipsam architecto vitae dolorum? Repellendus quas blanditiis assumenda quidem?'
        // ]);
    }
}
