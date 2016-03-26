<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::create([
            'title' => [
                'en' => 'First post!',
                'fr' => 'Premier poste!',
                'de' => 'Erster Beitrag!'
            ],
            'slug' => 'first-post',
            'content' => 'I am the content of the first post.'
        ]);

        \App\Post::create([
            'title' => [
                'en' => 'PhpStorm is great!',
                'fr' => 'PHPStorm est grand',
                'de' => 'PhpStorm ist groß'
            ],
            'slug' => 'phpstorm-is-great',
            'content' => 'Isn\'t PHPStorm great? It does all the things!'
        ]);
    }
}
