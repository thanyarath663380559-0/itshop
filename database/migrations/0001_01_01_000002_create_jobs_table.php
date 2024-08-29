<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
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
  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');
    }
};
