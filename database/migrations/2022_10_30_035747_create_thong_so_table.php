<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongSoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_so', function (Blueprint $table) {
            $table->id();
            $table->Integer('ma');
            $table->string('ten');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('thong_so', function (Blueprint $table) {
            $table->unsignedBigInteger('loai_do_vat_id');
            $table->foreign('loai_do_vat_id')->references('id')->on('loai_do_vat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thong_so');
        $table->dropColumn('deleted_at');
    }
}
