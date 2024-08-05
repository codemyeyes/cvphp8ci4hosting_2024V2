<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('ci_sessions');
        DB::select("
        CREATE TABLE `ci_sessions` (
`id` varchar(128) NOT NULL,
`ip_address` varchar(45) NOT NULL,
`timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
`data` MEDIUMBLOB NOT NULL,
`user_id` bigint DEFAULT NULL,
PRIMARY KEY (`id`,`ip_address`),
UNIQUE KEY `id_UNIQUE` (`id`),
KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
        ");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
