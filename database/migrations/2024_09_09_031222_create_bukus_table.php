<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id(); // auto-incrementing ID
            $table->string('title'); // varchar di Laravel menggunakan 'string'
            $table->string('author');
            $table->string('publisher');
            $table->string('isbn', 13); // Menetapkan panjang untuk kolom varchar
            $table->integer('published_year');
            $table->string('genre');
            $table->integer('pages');
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
        Schema::dropIfExists('bukus');
    }
}
