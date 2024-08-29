<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        ['name'=>'กาน่าฉ่าย',
         'cost'=>"60",
         'price'=>"80",
         'qty'=>"10",
         'image_url'=>'sa=i&url=https%3A%2F%2Fwww.gourmetandcuisine.com%2Fgoing_out_eating%2Fdetail%2F1494&psig=AOvVaw1qsPONPrXTZHOgR4FdY-9C&ust=1725013162617000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMjDmfj8mYgDFQAAAAAdAAAAABAI',
         'product_type_id'=>"4"],
        ['name'=>'ต้มยำกุ้ง',
         'cost'=>"15",
         'price'=>"30",
         'qty'=>"5",
         'image_url'=>'rce=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCLiqlaj-mYgDFQAAAAAdAAAAABAE',
         'product_type_id'=>"2"]
        
        ];
        
        DB::table('products')->insert($data);
        
    }   
}
