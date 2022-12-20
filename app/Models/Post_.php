<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Andre Nathaniel Adipraja",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis pariatur eum atque iure quaerat, quia facilis doloremque voluptatibus eligendi maxime cupiditate. Blanditiis numquam maxime vero magni iusto ipsum sequi voluptatum est magnam distinctio asperiores aliquam deleniti laborum ullam, ad cupiditate. Veritatis a voluptatum sit incidunt commodi laboriosam. Unde sapiente facilis nam obcaecati. Voluptatibus impedit aperiam perspiciatis vel cumque dolore repellendus, temporibus laudantium nemo voluptatum error asperiores quibusdam ut, dolorem qui natus, placeat iusto quos facilis itaque! Facilis sunt nihil error!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Laura Azra Apriliyanti",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis pariatur eum atque iure quaerat, quia facilis doloremque voluptatibus eligendi maxime cupiditate. Blanditiis numquam maxime vero magni iusto ipsum sequi voluptatum est magnam distinctio asperiores aliquam deleniti laborum ullam, ad cupiditate. Veritatis a voluptatum sit incidunt commodi laboriosam. Unde sapiente facilis nam obcaecati. Voluptatibus impedit aperiam perspiciatis vel cumque dolore repellendus, temporibus laudantium nemo voluptatum error asperiores quibusdam ut, dolorem qui natus, placeat iusto quos facilis itaque! Facilis sunt nihil error!"
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Anna Safira Dilla",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis pariatur eum atque iure quaerat, quia facilis doloremque voluptatibus eligendi maxime cupiditate. Blanditiis numquam maxime vero magni iusto ipsum sequi voluptatum est magnam distinctio asperiores aliquam deleniti laborum ullam, ad cupiditate. Veritatis a voluptatum sit incidunt commodi laboriosam. Unde sapiente facilis nam obcaecati. Voluptatibus impedit aperiam perspiciatis vel cumque dolore repellendus, temporibus laudantium nemo voluptatum error asperiores quibusdam ut, dolorem qui natus, placeat iusto quos facilis itaque! Facilis sunt nihil error!"
        ],
        [
            "title" => "Judul Post Keempat",
            "slug" => "judul-post-keempat",
            "author" => "Nanda Raihan Sukma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis pariatur eum atque iure quaerat, quia facilis doloremque voluptatibus eligendi maxime cupiditate. Blanditiis numquam maxime vero magni iusto ipsum sequi voluptatum est magnam distinctio asperiores aliquam deleniti laborum ullam, ad cupiditate. Veritatis a voluptatum sit incidunt commodi laboriosam. Unde sapiente facilis nam obcaecati. Voluptatibus impedit aperiam perspiciatis vel cumque dolore repellendus, temporibus laudantium nemo voluptatum error asperiores quibusdam ut, dolorem qui natus, placeat iusto quos facilis itaque! Facilis sunt nihil error!"
        ],
        [
            "title" => "Judul Post Kelima",
            "slug" => "judul-post-kelima",
            "author" => "Deani Putri Virdiana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis pariatur eum atque iure quaerat, quia facilis doloremque voluptatibus eligendi maxime cupiditate. Blanditiis numquam maxime vero magni iusto ipsum sequi voluptatum est magnam distinctio asperiores aliquam deleniti laborum ullam, ad cupiditate. Veritatis a voluptatum sit incidunt commodi laboriosam. Unde sapiente facilis nam obcaecati. Voluptatibus impedit aperiam perspiciatis vel cumque dolore repellendus, temporibus laudantium nemo voluptatum error asperiores quibusdam ut, dolorem qui natus, placeat iusto quos facilis itaque! Facilis sunt nihil error!"
        ]
        ];
    
    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}