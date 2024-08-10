<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_add_status_to_todos_table.php

public function up(): void
{
    Schema::table('todos', function (Blueprint $table) {
        $table->enum('status', ['Not Started', 'In Progress', 'Done'])->default('Not Started');
    });
}

public function down(): void
{
    Schema::table('todos', function (Blueprint $table) {
        $table->dropColumn('status');
    });
}
};
