<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDictionaryHasProfessorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'dictionary_has_professor';
    /**
     * Run the migrations.
     * @table dictionary_has_professor
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_entry');
            $table->integer('id_professor');
            $table->timestamp('time')->nullable();

            $table->index(["id_professor"], 'fk_dictionary_has_professor_professor1_idx');

            $table->index(["id_entry"], 'fk_dictionary_has_professor_dictionary1_idx');


            $table->foreign('id_entry', 'fk_dictionary_has_professor_dictionary1_idx')
                ->references('id_entry')->on('dictionary')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_professor', 'fk_dictionary_has_professor_professor1_idx')
                ->references('id_professor')->on('professor')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
