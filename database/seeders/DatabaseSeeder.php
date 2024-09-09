<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     UserSeeder::class
        // ]);

        // \App\Models\Post::factory(5)->create();

        User::create([
            'name' => 'M Ilham Hatta',
            'email' => 'ace070301@gmail.com',
            'password' => bcrypt('sayailham0')
        ]);

        Category::create([
            'kategori_baju' => 'Baju Pengantin'
        ]);

        Category::create([
            'kategori_baju' => 'Baju Kebaya'
        ]);

        Category::create([
            'kategori_baju' => 'Baju Batik'
        ]);

        Category::create([
            'kategori_baju' => 'Baju Resmi'
        ]);

        // Post::create([
        //     'category_id' => '1',
        //     'nama_baju' => 'Baju Pengantin',
        //     'slug' => 'baju-pengantin', 
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qu...',
        //     'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae deserunt nisi excepturi? Dolorem, omnis, magni dolore nobis quas aspernatur provident ullam modi similique odio nemo nesciunt aut ab ut quibusdam cumque repellat harum vero libero cupiditate quae commodi! Ut molestias reiciendis amet corporis quia minima optio blanditiis delectus, quod illo ea, enim quos expedita distinctio adipisci beatae asperiores ullam unde cum totam a praesentium placeat esse. Praesentium, consectetur aliquid. Suscipit ad, voluptas iste, nostrum perferendis nam autem maxime ullam possimus, omnis totam magnam est libero ex vero exercitationem non? Doloribus expedita mollitia animi aliquid, enim fugit? Quis animi ut, quo nesciunt maxime sint necessitatibus laboriosam magni repellat, nobis soluta consequuntur sequi corporis sed eum sapiente in blanditiis officiis, excepturi at. Nostrum eligendi optio cum voluptatum, commodi deleniti saepe similique maiores! Hic, magni? Laborum itaque sed praesentium rem, ut illo! Autem, voluptatem! Reprehenderit possimus voluptate exercitationem vero sed, aperiam nostrum pariatur officia reiciendis tempora doloribus autem eveniet dolorem sit, nobis magni. Repellat, fuga quaerat. Dolorem suscipit dolorum vitae reprehenderit earum ipsam totam delectus optio excepturi alias quibusdam aliquid, sequi porro ducimus rerum voluptatum corporis asperiores, magnam veritatis distinctio iusto fuga. Aliquid neque provident itaque quidem vel cumque ab voluptatum aliquam est.',
        //     'harga' => '200000',
        //     'image' => 'post-images/IGrrpLKCxNJyZjDrmlELUCl5Dtge6X0KQaq58trL.jpg'
        // ]);

        // Post::create([
        //     'category_id' => '2',
        //     'nama_baju' => 'Baju Kebaya',
        //     'slug' => 'baju-kebaya',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qu...',
        //     'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae deserunt nisi excepturi? Dolorem, omnis, magni dolore nobis quas aspernatur provident ullam modi similique odio nemo nesciunt aut ab ut quibusdam cumque repellat harum vero libero cupiditate quae commodi! Ut molestias reiciendis amet corporis quia minima optio blanditiis delectus, quod illo ea, enim quos expedita distinctio adipisci beatae asperiores ullam unde cum totam a praesentium placeat esse. Praesentium, consectetur aliquid. Suscipit ad, voluptas iste, nostrum perferendis nam autem maxime ullam possimus, omnis totam magnam est libero ex vero exercitationem non? Doloribus expedita mollitia animi aliquid, enim fugit? Quis animi ut, quo nesciunt maxime sint necessitatibus laboriosam magni repellat, nobis soluta consequuntur sequi corporis sed eum sapiente in blanditiis officiis, excepturi at. Nostrum eligendi optio cum voluptatum, commodi deleniti saepe similique maiores! Hic, magni? Laborum itaque sed praesentium rem, ut illo! Autem, voluptatem! Reprehenderit possimus voluptate exercitationem vero sed, aperiam nostrum pariatur officia reiciendis tempora doloribus autem eveniet dolorem sit, nobis magni. Repellat, fuga quaerat. Dolorem suscipit dolorum vitae reprehenderit earum ipsam totam delectus optio excepturi alias quibusdam aliquid, sequi porro ducimus rerum voluptatum corporis asperiores, magnam veritatis distinctio iusto fuga. Aliquid neque provident itaque quidem vel cumque ab voluptatum aliquam est.',
        //     'harga' => '250000',
        //     'image' => 'post-images/2Mhw69dOaJBFCICELtYZNM1r2hAbeddLwPTiS9OU.jpg'
        // ]);

        // Post::create([
        //     'category_id' => '3',
        //     'nama_baju' => 'Baju Batik',
        //     'slug' => 'baju-batik',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qu...',
        //     'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae deserunt nisi excepturi? Dolorem, omnis, magni dolore nobis quas aspernatur provident ullam modi similique odio nemo nesciunt aut ab ut quibusdam cumque repellat harum vero libero cupiditate quae commodi! Ut molestias reiciendis amet corporis quia minima optio blanditiis delectus, quod illo ea, enim quos expedita distinctio adipisci beatae asperiores ullam unde cum totam a praesentium placeat esse. Praesentium, consectetur aliquid. Suscipit ad, voluptas iste, nostrum perferendis nam autem maxime ullam possimus, omnis totam magnam est libero ex vero exercitationem non? Doloribus expedita mollitia animi aliquid, enim fugit? Quis animi ut, quo nesciunt maxime sint necessitatibus laboriosam magni repellat, nobis soluta consequuntur sequi corporis sed eum sapiente in blanditiis officiis, excepturi at. Nostrum eligendi optio cum voluptatum, commodi deleniti saepe similique maiores! Hic, magni? Laborum itaque sed praesentium rem, ut illo! Autem, voluptatem! Reprehenderit possimus voluptate exercitationem vero sed, aperiam nostrum pariatur officia reiciendis tempora doloribus autem eveniet dolorem sit, nobis magni. Repellat, fuga quaerat. Dolorem suscipit dolorum vitae reprehenderit earum ipsam totam delectus optio excepturi alias quibusdam aliquid, sequi porro ducimus rerum voluptatum corporis asperiores, magnam veritatis distinctio iusto fuga. Aliquid neque provident itaque quidem vel cumque ab voluptatum aliquam est.',
        //     'harga' => '300000',
        //     'image' => 'post-images/HKSExVCQlzxPaQuf4s8hDhMZ6npg5bplwu6hafGC.jpg'
        // ]);

        // Post::create([
        //     'category_id' => '4',
        //     'nama_baju' => 'Baju Resmi',
        //     'slug' => 'baju-resmi',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qu...',
        //     'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae deserunt nisi excepturi? Dolorem, omnis, magni dolore nobis quas aspernatur provident ullam modi similique odio nemo nesciunt aut ab ut quibusdam cumque repellat harum vero libero cupiditate quae commodi! Ut molestias reiciendis amet corporis quia minima optio blanditiis delectus, quod illo ea, enim quos expedita distinctio adipisci beatae asperiores ullam unde cum totam a praesentium placeat esse. Praesentium, consectetur aliquid. Suscipit ad, voluptas iste, nostrum perferendis nam autem maxime ullam possimus, omnis totam magnam est libero ex vero exercitationem non? Doloribus expedita mollitia animi aliquid, enim fugit? Quis animi ut, quo nesciunt maxime sint necessitatibus laboriosam magni repellat, nobis soluta consequuntur sequi corporis sed eum sapiente in blanditiis officiis, excepturi at. Nostrum eligendi optio cum voluptatum, commodi deleniti saepe similique maiores! Hic, magni? Laborum itaque sed praesentium rem, ut illo! Autem, voluptatem! Reprehenderit possimus voluptate exercitationem vero sed, aperiam nostrum pariatur officia reiciendis tempora doloribus autem eveniet dolorem sit, nobis magni. Repellat, fuga quaerat. Dolorem suscipit dolorum vitae reprehenderit earum ipsam totam delectus optio excepturi alias quibusdam aliquid, sequi porro ducimus rerum voluptatum corporis asperiores, magnam veritatis distinctio iusto fuga. Aliquid neque provident itaque quidem vel cumque ab voluptatum aliquam est.',
        //     'harga' => '350000',
        //     'image' => 'post-images/b8aS1QwHgWhekIIAY4SbGyBZmKSpZXvizRGeLLSl.jpg'
        // ]);

    }
}
