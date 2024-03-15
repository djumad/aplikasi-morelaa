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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->string("nik" , 100)->nullable(false)->primary()->unique("penduduks_unique_nik");
            $table->string("nama" , 100)->nullable(false);
            $table->string("password" , 100)->nullable(false);
            $table->enum("role" , ['masyarakat' , 'raja' , 'admin'])->nullable(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduks');
    }
};
