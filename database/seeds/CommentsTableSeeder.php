<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 20) as $number){
        	\App\models\Comment::create([
        		'name'		=> '名稱',
        		'email' 	=> '電郵地址',
        		'content'	=> '文章內容',
        		'post_id'	=> rand(1,10),
        		'created_at'=> date('Y-m-d H:i:s'),
        		'updated_at'=> date('Y-m-d H:i:s'),
        	]);
        }
    }
}
