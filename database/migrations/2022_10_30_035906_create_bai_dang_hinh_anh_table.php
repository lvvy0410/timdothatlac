<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiDangHinhAnhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_dang_hinh_anh', function (Blueprint $table) {
            $table->id();
            $table->string('hinh_anh')->nullable();
            $table->string('path')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('bai_dang_hinh_anh', function (Blueprint $table) {
            $table->unsignedBigInteger('bai_dang_id');
            $table->foreign('bai_dang_id')->references('id')->on('bai_dang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_dang_hinh_anh');
        $table->dropColumn('deleted_at');
    }
}
