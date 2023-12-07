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
Schema::create('historique', function (Blueprint $table) {
$table->id();
$table->unsignedBigInteger('id_utilisateur');
$table->foreign('id_utilisateur')
->references('id')
->on('users')
->onDelete('cascade');
$table->unsignedBigInteger('id_media');
$table->foreign('id_media')
->references('id')
->on('medias')
->onDelete('cascade');
$table->datetime('date_heure');
$table->timestamps(); // Ajout des colonnes created_at et updated_at
});
}

/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('historique');
}
};