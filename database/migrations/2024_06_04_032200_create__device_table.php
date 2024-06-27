<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id()->primary(); // Use string or appropriate type for manual ID
            $table->string('nama_device', 100); // Adding max length for the column
            $table->string('lokasi', 100); // Adding max length for the column
            $table->string('status', 50)->default('Aktif'); // Adding default value for the column
            $table->float('nilai')->nullable()->default(0.0); // Adding default value for the column
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
        Schema::dropIfExists('devices');
    }
}
