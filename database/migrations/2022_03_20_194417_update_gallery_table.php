<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('galleries', 'created_by')) {
            Schema::table('galleries', function (Blueprint $table) {
                $table->dropColumn('created_by');
            });
        }
        if (Schema::hasColumn('galleries', 'updated_by')) {
            Schema::table('galleries', function (Blueprint $table) {
                $table->dropColumn('updated_by');
            });
        }
        if (Schema::hasColumn('galleries', 'deleted_by')) {
            Schema::table('galleries', function (Blueprint $table) {
                $table->dropColumn('deleted_by');
            });
        }
        if (Schema::hasColumn('galleries', 'deleted_at')) {
            Schema::table('galleries', function (Blueprint $table) {
                $table->dropColumn('deleted_at');
            });
        }
    }
}
