<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('card_name');
            $table->unsignedBigInteger('user_id');

            $table->string('photo');
            $table->string('card_logo');
            $table->string('card_frame');
            $table->string('card_background');
            $table->string('card_color');
            $table->string('card_type');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('desgination');
            $table->json('social_media_links');
            $table->json('others');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
