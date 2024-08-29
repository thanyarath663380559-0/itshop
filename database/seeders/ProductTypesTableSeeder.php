<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
$data = [
['name' => 'ไม่ระบุ'],
['name' => 'เครื+องดื+ม'],
['name' => 'อาหารวา่ งรองทอ้ง'],
['name' => 'อาหารพร้อมทาน'],
['name' => 'เบเกอร์รี+'],
['name' => 'นมโยเกิร์ต'],
['name' => 'ไอศกรีม'],
['name' => 'ขนมและลูกอม'],
['name' => 'อาหารแห้ง'],
['name' => 'ของใช้ในครัวเรือน']
];
DB::table('product_types')->insert($data);
}
}
