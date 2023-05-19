<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_mahasiswas', function (Blueprint $table) {
            //
            $table->string('nim')->after('id')->nullable();
            $table->string('nama')->after('nim')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::table('mahasiswas', function (Blueprint $table) {
                //
                $table->dropColumn('nim');
                $table->dropColumn('nama');
            });
        }
};
