<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Becase user Seeder >> factore inside All Data ->  English Data

        $post01['title'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => 'Impresionante publicación traducida!',
        ];

        $post01['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => 'Impresionante publicación traducida!',
        ];

        Post::create($post01);

    }
}
