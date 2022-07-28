<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\{
    Schema,
    Storage
};

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->default('');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
        $allImages = Storage::allFiles('public/categories');
        Storage::delete($allImages);
    }
};
