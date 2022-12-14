<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_contact', function (Blueprint $table) {
            $table->id();
			$table->string('name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('email')->nullable();
			$table->string('address')->nullable();
			$table->unsignedBigInteger('telephone')->nullable();
			$table->text('comment')->nullable();
			$table->boolean('status')->default(0);
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
        Schema::dropIfExists('table_contact');
    }
};
