<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_feature', function (Blueprint $table) {
            $table->string('package_id', 10);
            $table->string('feature_name', 60);
            $table->timestamps();
            $table->primary(['package_id', 'feature_name']);
            $table->foreign('package_id')->references('package_id')->on('packages');
            $table->foreign('feature_name')->references('feature_name')->on('features');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_feature');
    }
}
