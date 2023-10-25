<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoiDungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_dung', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('ten_dang_nhap');
            $table->string('mat_khau');
            $table->string('so_dien_thoai')->nullable();
            $table->string('email');
            $table->string('dia_chi')->nullable();
            $table->Integer('loai'); //1 la admin, 2 la user
            $table->Integer('trang_thai')->nullable(); //1 la online, 2 la offline
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
        Schema::dropIfExists('nguoi_dung');
        $table->dropColumn('deleted_at');
    }
}
