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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('form_name')->nullable();
            $table->string('form_address')->nullable();
            $table->string('form_phone')->nullable();
            $table->string('form_email')->nullable();
            $table->date('booking_date')->nullable();
            
            $table->string('location')->nullable();
            $table->boolean('type')->default(0)->comment('0=raiseQuery/Contactus, 1=BookAppoinment');
            $table->string('comertial_residen')->nullable();
            $table->text('form_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
