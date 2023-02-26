<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
         [
                'name'=> 'Oppo Mobile',
            "price" =>"10000",
            "description"=>"A smartphone with 6gb ram and much more features",
            "category"=>"mobile",
            "gallery"=>"https://static1.xdaimages.com/wordpress/wp-content/uploads/2019/12/Oppo-Reno3_1-1024x1024.png"
         ],
         [
            'name'=> 'Realme6 Mobile',
        "price" =>"10000",
        "description"=>"A smartphone with 8gb ram and much more features",
        "category"=>"mobile",
        "gallery"=>"https://images.fonearena.com/blog/wp-content/uploads/2020/03/realme-6-Pro-1024x938.jpg"
     ],
     [
        'name'=> 'LG tv',
    "price" =>"70000",
    "description"=>"A smartphone with 4gb ram and much more features",
    "category"=>"tv",
    "gallery"=>"https://www.thebignano.com/wp-content/uploads/2018/10/81ZBWDMY0YL._SL1500_.jpg"
 ],
 [
    'name'=> 'Samsung Refrigerator',
"price" =>"40000",
"description"=>"A  Refrigerator with very expensive.",
"category"=>"Refrigerator",
"gallery"=>"https://tse2.mm.bing.net/th?id=OIP.XgQhT8KckyPhYbq_h6F9zwHaHa&pid=Api&P=0"
],


          
        ]);
    }
}