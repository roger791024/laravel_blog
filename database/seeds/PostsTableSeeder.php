<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 20) as $number){
        	\App\models\Post::create([
        		'title'		=> '測試文章'.$number,
        		'sub_title' => '副標題',
        		'content'	=> '文章內容',
        		'is_hot'	=> false,
        		'created_at'=> date('Y-m-d H:i:s'),
        		'updated_at'=> date('Y-m-d H:i:s'),
        	]);
        }
    }
}
