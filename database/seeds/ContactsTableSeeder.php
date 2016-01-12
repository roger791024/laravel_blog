<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 20) as $number){
        	\App\models\Contact::create([
        		'name'		=> '名稱',
        		'email' 	=> '電郵地址',
        		'message'	=> '內容',
        		'created_at'=> date('Y-m-d H:i:s'),
        		'updated_at'=> date('Y-m-d H:i:s'),
        	]);
        }
    }
}
