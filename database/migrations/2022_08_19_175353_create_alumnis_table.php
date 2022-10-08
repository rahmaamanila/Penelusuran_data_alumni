<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->string('nik')->primary();
            $table->integer('id_perusahaan')->nullable();
            $table->integer('id_jabatan')->nullable();
            $table->string('nama',100);
            $table->string('tmpt_lahir',15);
            $table->date('tgl_lahir');
            $table->enum('jenkel', ['laki-laki', 'perempuan'])->default('laki-laki');
            $table->string('agama',10);
            $table->string('no_telp',15);
            $table->text('alamat');
            $table->string('thn_lulus',5);
            $table->string('email',50)->unique();
            $table->string('password',100);
            $table->string('status',15);
            $table->date('tgl_masuk')->nullable();
            $table->string('role',30)->nullable();
            $table->integer('id_user');
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
        Schema::dropIfExists('alumni');
    }
}
