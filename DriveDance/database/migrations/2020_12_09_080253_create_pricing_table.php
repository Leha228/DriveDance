<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('price');
            $table->string('time');
            $table->string('info_button');
            $table->timestamps();
        });

        DB::table('pricing')->insert(
            array(
                'title' => 'Бесплатно',
                'price' => 0,
                'time' => 'занятие',
                'info_button' => 'Попробовать'
            )
        );

        DB::table('pricing')->insert(
            array(
                'title' => 'Профессионал',
                'price' => 1499,
                'time' => 'месяц',
                'info_button' => 'Купить'
            )
        );

        DB::table('pricing')->insert(
            array(
                'title' => 'Эксперт',
                'price' => 4999,
                'time' => 'месяц',
                'info_button' => 'Купить'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricing');
    }
}
