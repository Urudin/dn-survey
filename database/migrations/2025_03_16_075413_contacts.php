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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('rate');
            $table->enum('combo_dance', ['yes', 'no']);
            $table->enum('tattoo_system', ['yes', 'no']);
            $table->string('buff_system'); // pl: npc_full_no_resists / up_to_74
            $table->text('message')->nullable(); // szabad szöveg, nem kötelező
            $table->boolean('subscribe')->default(false); // checkbox, alapértelmezett: nem iratkozik fel
            $table->ipAddress()->nullable();
            $table->timestamps();
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
