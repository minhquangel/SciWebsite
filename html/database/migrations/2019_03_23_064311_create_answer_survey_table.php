<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerSurveyTable extends Migration
{
    public $set_schema_table = 'answer_survey';

    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) {
            return;
        }

        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('answer_id');
            $table->uuid('survey_id');

            $table->index(['answer_id']);
            $table->index(['survey_id']);

            $table->foreign('answer_id')->references('id')->on('answers');
            $table->foreign('survey_id')->references('id')->on('surveys');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->set_schema_table);
    }
}
