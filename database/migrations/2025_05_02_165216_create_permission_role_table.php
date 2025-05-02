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
        Schema::create('permission_role', function (Blueprint $table) {
            $table->unsignedBigInteger('role_role_id');
            $table->unsignedBigInteger('permissions_permissions_id');
            
            $table->foreign('role_role_id')->references('role_id')->on('roles')->onDelete('cascade');
            $table->foreign('permissions_permissions_id')->references('permissions_id')->on('permissions')->onDelete('cascade');
        
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_role');
    }
};
