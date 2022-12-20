<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
            //     'name' => 'Andre Nathaniel Adipraja',
            //     'email' => 'nielraja123@gmail.com',
            //     'password' => bcrypt('12345')
            // ]);
            // User::create([
                //     'name' => 'Hanifan Ayusti Montolalu',
                //     'email' => 'nobody@gmail.com',
                //     'password' => bcrypt('12345')
                // ]);


        User::factory(3)->create();
        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);
        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);


        Post::factory(20)->create();
        // Post::create([ 
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur at ratione optio odit aspernatur eum fugiat. Vero hic dolorum, odit nisi similique cumque voluptatibus libero soluta! Quos eaque expedita error.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat laudantium magni quas dolores totam? Minima nulla reprehenderit doloremque eaque earum, id reiciendis repudiandae mollitia aspernatur consequuntur, provident explicabo necessitatibus. Laudantium ut suscipit minus, ad placeat repellendus labore nulla doloremque dolor officiis tempora blanditiis corporis tenetur quo facere vitae, eveniet, beatae optio commodi at. Quam repudiandae distinctio fugit. Ea esse obcaecati repellendus aut enim fugiat nisi commodi rem dolores voluptatem id totam illo eveniet magnam vero asperiores, voluptatibus pariatur perspiciatis, repellat culpa ad recusandae earum dolor. Accusamus ut laudantium, quia dolores placeat debitis odio dolore maiores accusantium similique molestias, omnis nesciunt!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nam, incidunt modi corrupti, optio facere perspiciatis ad explicabo non hic harum earum consequuntur, qui pariatur quos illum sapiente. Quia officia nobis minima consequuntur nam molestiae debitis rerum cumque labore porro quos adipisci pariatur blanditiis corrupti numquam, temporibus facere, ex delectus natus in magni unde. Rerum delectus enim magni officia nam nulla ipsa hic? Expedita ex quae harum, fuga provident reprehenderit repellat totam error laboriosam molestias.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([ 
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur at ratione optio odit aspernatur eum fugiat. Vero hic dolorum, odit nisi similique cumque voluptatibus libero soluta! Quos eaque expedita error.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat laudantium magni quas dolores totam? Minima nulla reprehenderit doloremque eaque earum, id reiciendis repudiandae mollitia aspernatur consequuntur, provident explicabo necessitatibus. Laudantium ut suscipit minus, ad placeat repellendus labore nulla doloremque dolor officiis tempora blanditiis corporis tenetur quo facere vitae, eveniet, beatae optio commodi at. Quam repudiandae distinctio fugit. Ea esse obcaecati repellendus aut enim fugiat nisi commodi rem dolores voluptatem id totam illo eveniet magnam vero asperiores, voluptatibus pariatur perspiciatis, repellat culpa ad recusandae earum dolor. Accusamus ut laudantium, quia dolores placeat debitis odio dolore maiores accusantium similique molestias, omnis nesciunt!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nam, incidunt modi corrupti, optio facere perspiciatis ad explicabo non hic harum earum consequuntur, qui pariatur quos illum sapiente. Quia officia nobis minima consequuntur nam molestiae debitis rerum cumque labore porro quos adipisci pariatur blanditiis corrupti numquam, temporibus facere, ex delectus natus in magni unde. Rerum delectus enim magni officia nam nulla ipsa hic? Expedita ex quae harum, fuga provident reprehenderit repellat totam error laboriosam molestias.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([ 
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur at ratione optio odit aspernatur eum fugiat. Vero hic dolorum, odit nisi similique cumque voluptatibus libero soluta! Quos eaque expedita error.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat laudantium magni quas dolores totam? Minima nulla reprehenderit doloremque eaque earum, id reiciendis repudiandae mollitia aspernatur consequuntur, provident explicabo necessitatibus. Laudantium ut suscipit minus, ad placeat repellendus labore nulla doloremque dolor officiis tempora blanditiis corporis tenetur quo facere vitae, eveniet, beatae optio commodi at. Quam repudiandae distinctio fugit. Ea esse obcaecati repellendus aut enim fugiat nisi commodi rem dolores voluptatem id totam illo eveniet magnam vero asperiores, voluptatibus pariatur perspiciatis, repellat culpa ad recusandae earum dolor. Accusamus ut laudantium, quia dolores placeat debitis odio dolore maiores accusantium similique molestias, omnis nesciunt!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nam, incidunt modi corrupti, optio facere perspiciatis ad explicabo non hic harum earum consequuntur, qui pariatur quos illum sapiente. Quia officia nobis minima consequuntur nam molestiae debitis rerum cumque labore porro quos adipisci pariatur blanditiis corrupti numquam, temporibus facere, ex delectus natus in magni unde. Rerum delectus enim magni officia nam nulla ipsa hic? Expedita ex quae harum, fuga provident reprehenderit repellat totam error laboriosam molestias.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([ 
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur at ratione optio odit aspernatur eum fugiat. Vero hic dolorum, odit nisi similique cumque voluptatibus libero soluta! Quos eaque expedita error.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat laudantium magni quas dolores totam? Minima nulla reprehenderit doloremque eaque earum, id reiciendis repudiandae mollitia aspernatur consequuntur, provident explicabo necessitatibus. Laudantium ut suscipit minus, ad placeat repellendus labore nulla doloremque dolor officiis tempora blanditiis corporis tenetur quo facere vitae, eveniet, beatae optio commodi at. Quam repudiandae distinctio fugit. Ea esse obcaecati repellendus aut enim fugiat nisi commodi rem dolores voluptatem id totam illo eveniet magnam vero asperiores, voluptatibus pariatur perspiciatis, repellat culpa ad recusandae earum dolor. Accusamus ut laudantium, quia dolores placeat debitis odio dolore maiores accusantium similique molestias, omnis nesciunt!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nam, incidunt modi corrupti, optio facere perspiciatis ad explicabo non hic harum earum consequuntur, qui pariatur quos illum sapiente. Quia officia nobis minima consequuntur nam molestiae debitis rerum cumque labore porro quos adipisci pariatur blanditiis corrupti numquam, temporibus facere, ex delectus natus in magni unde. Rerum delectus enim magni officia nam nulla ipsa hic? Expedita ex quae harum, fuga provident reprehenderit repellat totam error laboriosam molestias.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
