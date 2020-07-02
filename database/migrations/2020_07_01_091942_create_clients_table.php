<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');  // id номер записи
            $table->string('name'); // Название компании
            $table->text('address')->nullable(); // Адрес фактический
            $table->string('phone1')->nullable(); // Номер телефона основной
            $table->string('phone2')->nullable(); // Номер телефона дополнительный
            $table->string('email1')->nullable(); // Адрес электронной почты основной
            $table->string('email2')->nullable(); // Адрес электронной почты дополнительный
            $table->string('site')->nullable(); // Адрес текущего сайта, если есть
            $table->text('activity')->nullable(); // Род деятельности
            $table->text('comment')->nullable(); // Комментарий от РП
            $table->boolean('archive')->default(true); // не вь архиве?
            $table->date('date')->default(Carbon\Carbon::now()); // Дата добавления записи

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
