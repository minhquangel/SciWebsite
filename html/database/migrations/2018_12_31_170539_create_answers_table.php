<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    public $set_schema_table = 'answers';

    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) {
            return;
        }

        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->uuid('id')->primary();
            $table->uuid('question_id');
            $table->string('code');
            $table->text('content')->nullable();
            $table->integer('score')->default(0);
            $table->timestamps();

            $table->index(['question_id']);
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->set_schema_table);
    }
}
