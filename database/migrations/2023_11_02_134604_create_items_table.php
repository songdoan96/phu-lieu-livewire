<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {

            $table->id();
            $table->string('customer', 20);
            $table->string('style', 20);
            $table->string('type', 100);
            $table->string('container', 20);
            $table->string('model', 20)->nullable();
            $table->string('item', 20)->nullable();
            $table->string('color', 20)->nullable();
            $table->string('params', 10)->nullable();
            $table->string('size', 100)->nullable();
            $table->string('po', 20)->nullable();
            $table->string('unit', 10);
            $table->float('qty', 10, 2, true);
            $table->string('note')->nullable();
            $table->date('date');
            $table->boolean('sold_out')->default(0);
            $table->unsignedBigInteger('order_id')->nullable();
            $table->float('plan', 10, 2, true)->nullable();
            $table->float('norm', 2)->nullable();
            $table->string('user_name',20)->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('order_id')->references('id')->on('items')->cascadeOnDelete();
//            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
