<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForProfEleveUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prof_eleve_user', function (Blueprint $table) {
            $table->foreign('classe_id')->references('id')->on('classe_matieres')->onDelete('cascade');
            $table->foreign('classe_eleve_id')->references('id')->on('choix_classe_eleves')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prof_eleve_user', function(Blueprint $table) {

            $table->dropForeign('prof_eleve_user_classe_id_foreign');
            $table->dropForeign('prof_eleve_user_classe_eleve_id_foreign');
            $table->dropForeign('prof_eleve_user_user_id_foreign');
        });
    }
}

