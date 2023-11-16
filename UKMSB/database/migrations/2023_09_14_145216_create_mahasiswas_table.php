<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_mhs', 30);
            $table->char('nim', 9)->unique();
            $table->string('mail_mhs', 30)->unique();
            $table->enum('role', ['mahasiswa', 'admin']);
            $table->string('telp_mhs', 13)->unique();
            $table->string('password', 255)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
