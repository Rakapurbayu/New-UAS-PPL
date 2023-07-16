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
        Schema::table('lesson', function (Blueprint $table) {
        $table->dropColumn('quiz_modul');
        $table->renameColumn('nama_modul', 'nama_matpel');
        $table->renameColumn('desc_modul', 'desc_matpel');
        $table->renameColumn('konten_modul', 'linkV');

    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
