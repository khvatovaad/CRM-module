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
            $table->id();  // id номер записи
            $table->string('name'); // Название компании
            $table->text('address'); // Адрес фактический
            $table->string('phone1'); // Номер телефона основной
            $table->string('phone2'); // Номер телефона дополнительный
            $table->string('email1'); // Адрес электронной почты основной
            $table->string('email2'); // Адрес электронной почты дополнительный
            $table->string('site'); // Адрес текущего сайта, если есть
            $table->text('activity'); // Род деятельности
            $table->text('comment'); // Комментарий от РП

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
