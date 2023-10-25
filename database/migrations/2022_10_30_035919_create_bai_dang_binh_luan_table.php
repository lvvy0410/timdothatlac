<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiDangBinhLuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_dang_binh_luan', function (Blueprint $table) {
            $table->id();
            $table->string('noi_dung');
            $table->dateTime('thoi_gian');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('bai_dang_binh_luan', function (Blueprint $table) {
            $table->unsignedBigInteger('bai_dang_id');
            $table->foreign('bai_dang_id')->references('id')->on('bai_dang');
        });
        Schema::table('bai_dang_binh_luan', function (Blueprint $table) {
            $table->unsignedBigInteger('nguoi_dung_id');
            $table->foreign('nguoi_dung_id')->references('id')->on('nguoi_dung');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_dang_binh_luan');
        $table->dropColumn('deleted_at');
    }
}
