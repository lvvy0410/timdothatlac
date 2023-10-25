<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiDangReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_dang_report', function (Blueprint $table) {
            $table->id();
            $table->string('noi_dung');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('bai_dang_report', function (Blueprint $table) {
            $table->unsignedBigInteger('bai_dang_id');
            $table->foreign('bai_dang_id')->references('id')->on('bai_dang');
        });
        Schema::table('bai_dang_report', function (Blueprint $table) {
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
        Schema::dropIfExists('bai_dang_report');
        $table->dropColumn('deleted_at');
    }
}
