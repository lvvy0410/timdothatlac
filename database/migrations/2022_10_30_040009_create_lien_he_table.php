<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLienHeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lien_he', function (Blueprint $table) {
            $table->id();
            $table->string('ten_nguoi_lien_he');
            $table->string('email');
            $table->Integer('so_dien_thoai');
            $table->string('noi_dung');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lien-he');
        $table->dropColumn('deleted_at');
    }
}
