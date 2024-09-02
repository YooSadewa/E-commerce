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
        Schema::table('account', function (Blueprint $table) {
            
            $table->string('nama',15)->change; // Add the 'nama' column$table->string('nama'); // Add the 'nama' column

            $table->string('no_telp')->nullable(); // Add the 'nama' column$table->string('nama'); // Add the 'nama' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('account', function (Blueprint $table) {
            
        });
    }
};
