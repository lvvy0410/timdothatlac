<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiDangThongSoDoVatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_dang_thong_so_do_vat', function (Blueprint $table) {
            $table->id();
            $table->string('mo_ta')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('bai_dang_thong_so_do_vat', function (Blueprint $table) {
            $table->unsignedBigInteger('bai_dang_id');
            $table->foreign('bai_dang_id')->references('id')->on('bai_dang');
        });
        Schema::table('bai_dang_thong_so_do_vat', function (Blueprint $table) {
            $table->unsignedBigInteger('thong_so_id');
            $table->foreign('thong_so_id')->references('id')->on('thong_so');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_dang_thong_so_do_vat');
        $table->dropColumn('deleted_at');
    }
}
