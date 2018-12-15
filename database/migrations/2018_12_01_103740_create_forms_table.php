<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('report_id')->unsigned();
            $table->integer('survey_id')->nullable();
            $table->string('image')->nullable();
            $table->string('geo')->nullable();
            $table->boolean('sc')->default(0);
            $table->string('sd')->nullable();
            $table->string('pac')->nullable();
            $table->string('pdc')->nullable();
            $table->string('epsc')->nullable();
            $table->string('aec')->nullable();
            $table->string('startec')->nullable();
            $table->string('eosc')->nullable();
            $table->string('fcwc')->nullable();
            $table->string('pcwc')->nullable();
            $table->string('paf')->nullable();
            $table->string('pdf')->nullable();
            $table->string('epsf')->nullable();
            $table->string('startf')->nullable();
            $table->string('eosf')->nullable();
            $table->string('ipc')->nullable();
            $table->string('ifc')->nullable();
            $table->string('cwvc')->nullable();
            $table->string('cwsbc')->nullable();
            $table->string('pdi')->nullable();
            $table->string('pdis')->nullable();
            $table->string('epws')->nullable();
            $table->string('pais')->nullable();
            $table->string('starti')->nullable();
            $table->string('eoss')->nullable();
            $table->string('isc')->nullable();
            $table->string('ivc')->nullable();
            $table->string('ibc')->nullable();
            $table->string('iwc')->nullable();
            $table->string('pdcom')->nullable();
            $table->string('pacom')->nullable();
            $table->string('startcom')->nullable();
            $table->string('coms')->nullable();
            $table->string('comv')->nullable();
            $table->string('comb')->nullable();
            $table->string('cv')->nullable();
            $table->string('cb')->nullable();
            $table->string('cw')->nullable();
            $table->string('comw')->nullable();
            $table->string('pda')->nullable();
            $table->string('paa')->nullable();
            $table->string('starta')->nullable();
            $table->string('af')->nullable();
            $table->string('ap')->nullable();
            $table->string('as')->nullable();
            $table->string('av')->nullable();
            $table->string('a3g')->nullable();
            $table->string('awifi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
