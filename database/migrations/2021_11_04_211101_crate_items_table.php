<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->foreignId('user_id')->constrained();
        //category_id
        //condition_id
        $table->string('name');
        $table->string('description', 400);
        $table->timestamp('created_at')->useCurrent()->nullable();
        $table->timestamp('updated_at')->useCurrent()->nullable();
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
