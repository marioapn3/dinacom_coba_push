<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name_project');
            $table->string('problem');                // masalah
            $table->string('solution');               // solusi
            $table->string('user_goals');             // sasaran pengguna
            $table->string('product_uniqueness');     // keunikan produk dari produk lain
            $table->string('market_potential');       // potensi pasar pada produk
            $table->string('feature_and_function');   // Fungsi dan Fitur Aplikasi
            $table->string('quality_and_method_dev'); // Kualitas Produk dan Metode Pengembangan Aplikasi
            $table->string('expenses');               // Biaya pengeluaran
            $table->string('entrance_fee');           // Biaya pemasukan
            $table->string('url_proposal')->nullable();
            $table->string('url_project')->nullable();
            $table->string('status')->default(0);     // 0 = belum upload , 1 = telah upload 
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berkas_projects');
    }
}
