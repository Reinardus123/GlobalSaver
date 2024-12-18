<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Event;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Reinardus Revelino',
            'username' => 'Reinardus',
            'email' => 'reinardusrevelino@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name'=> 'Reboisasi',
            'slug' => 'reboisasi'
        ]);

        Category::create([
            'name'=> 'Recycle',
            'slug' => 'recycle'
        ]);
        Category::create([
            'name'=> 'Eco Tourism',
            'slug' => 'eco-tourism'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem facilis maiores autem, voluptatibus voluptatem cumque vero alias doloremque quidem quia!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta cupiditate nostrum alias, fuga itaque dolores nihil ratione repellendus, voluptas vel excepturi labore officiis perferendis quae nobis facilis explicabo? Beatae dolor minus ipsam corrupti repellendus natus, a, repellat in voluptatum culpa consequuntur libero? Eos, officia. Assumenda sapiente fuga doloribus velit perferendis. Molestiae facere praesentium recusandae adipisci delectus molestias fugiat dolor consequuntur nesciunt repudiandae! Accusantium numquam accusamus natus consequuntur sequi eos, voluptatem expedita? Aliquid iste illum dolor, ducimus sit sint nostrum sequi quas, praesentium exercitationem debitis quos beatae fugiat laborum expedita! Numquam soluta itaque odio natus consequuntur tempora, dolore mollitia optio.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem facilis maiores autem, voluptatibus voluptatem cumque vero alias doloremque quidem quia!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta cupiditate nostrum alias, fuga itaque dolores nihil ratione repellendus, voluptas vel excepturi labore officiis perferendis quae nobis facilis explicabo? Beatae dolor minus ipsam corrupti repellendus natus, a, repellat in voluptatum culpa consequuntur libero? Eos, officia. Assumenda sapiente fuga doloribus velit perferendis. Molestiae facere praesentium recusandae adipisci delectus molestias fugiat dolor consequuntur nesciunt repudiandae! Accusantium numquam accusamus natus consequuntur sequi eos, voluptatem expedita? Aliquid iste illum dolor, ducimus sit sint nostrum sequi quas, praesentium exercitationem debitis quos beatae fugiat laborum expedita! Numquam soluta itaque odio natus consequuntur tempora, dolore mollitia optio.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem facilis maiores autem, voluptatibus voluptatem cumque vero alias doloremque quidem quia!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta cupiditate nostrum alias, fuga itaque dolores nihil ratione repellendus, voluptas vel excepturi labore officiis perferendis quae nobis facilis explicabo? Beatae dolor minus ipsam corrupti repellendus natus, a, repellat in voluptatum culpa consequuntur libero? Eos, officia. Assumenda sapiente fuga doloribus velit perferendis. Molestiae facere praesentium recusandae adipisci delectus molestias fugiat dolor consequuntur nesciunt repudiandae! Accusantium numquam accusamus natus consequuntur sequi eos, voluptatem expedita? Aliquid iste illum dolor, ducimus sit sint nostrum sequi quas, praesentium exercitationem debitis quos beatae fugiat laborum expedita! Numquam soluta itaque odio natus consequuntur tempora, dolore mollitia optio.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem facilis maiores autem, voluptatibus voluptatem cumque vero alias doloremque quidem quia!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta cupiditate nostrum alias, fuga itaque dolores nihil ratione repellendus, voluptas vel excepturi labore officiis perferendis quae nobis facilis explicabo? Beatae dolor minus ipsam corrupti repellendus natus, a, repellat in voluptatum culpa consequuntur libero? Eos, officia. Assumenda sapiente fuga doloribus velit perferendis. Molestiae facere praesentium recusandae adipisci delectus molestias fugiat dolor consequuntur nesciunt repudiandae! Accusantium numquam accusamus natus consequuntur sequi eos, voluptatem expedita? Aliquid iste illum dolor, ducimus sit sint nostrum sequi quas, praesentium exercitationem debitis quos beatae fugiat laborum expedita! Numquam soluta itaque odio natus consequuntur tempora, dolore mollitia optio.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    //     // User::create([
    //     //     'name' => 'Dody',
    //     //     'email' => 'Doddy@gmail.com',
    //     //     'password' => bcrypt('12345')
    //     // ]);
    // }

    User::factory(3)->create();
    Post::factory(3)->create();
    Event::factory(3)->create();
}   



}