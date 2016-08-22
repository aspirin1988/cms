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
        // $this->call(UsersTableSeeder::class);
        DB::table('pages')->delete();

        $page = array(
            array(
                'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam autem dolor facilis magni nemo placeat? Ad, aliquam cum deserunt excepturi fugit inventore ipsa odio possimus quaerat tempora voluptates voluptatum?',
                'custom_fields'=>'',
                'description'=>'Lorem ipsum dolor sit amet.',
                'parent'=>0,
                'thumbnail'=>'',
            )
        );

        DB::table('pages')->insert($page);

        DB::table('posts')->delete();

        $post = array(
            array(
                'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam autem dolor facilis magni nemo placeat? Ad, aliquam cum deserunt excepturi fugit inventore ipsa odio possimus quaerat tempora voluptates voluptatum?',
                'custom_fields'=>'',
                'description'=>'Lorem ipsum dolor sit amet.',
                'parent'=>0,
                'thumbnail'=>'',
            )
        );

        DB::table('posts')->insert($post);

        DB::table('categories')->delete();

        $post = array(
            array(
                'name'=>'Simple',
                'description'=>'Lorem ipsum dolor sit amet.',
                'parent'=>0,
                'thumbnail'=>'',
            )
        );

        DB::table('categories')->insert($post);
    }

}
