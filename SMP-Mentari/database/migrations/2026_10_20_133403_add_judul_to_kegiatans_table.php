
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('kegiatans', 'judul')) {
            Schema::table('kegiatans', function (Blueprint $table) {
                $table->string('judul')->after('id');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('kegiatans', 'judul')) {
            Schema::table('kegiatans', function (Blueprint $table) {
                $table->dropColumn('judul');
            });
        }
    }
};
