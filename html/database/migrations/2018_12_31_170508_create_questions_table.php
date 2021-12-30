<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    public $set_schema_table = 'questions';

    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) {
            return;
        }

        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->uuid('id')->primary();
            $table->uuid('block_id');
            $table->uuid('parent_id')->nullable();
            $table->string('code');
            $table->tinyInteger('type');
            $table->text('content')->nullable();
            $table->timestamps();

            $table->index(['block_id']);
            $table->foreign('block_id')->references('id')->on('blocks');
        });

        Schema::table($this->set_schema_table, function(Blueprint $table){
            $table->index(['parent_id']);
            $table->foreign('parent_id')->references('id')->on('questions');
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->set_schema_table);
    }
}
