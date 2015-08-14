<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PoJobApp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po_job_app',function ($table){
            $table->increment(job_app_id);
            $table->string('job_app_no', 100);
            $table->integer('pos_id');
            // monthly
            //date_subscribe
            $table->string('prefix', 100);
            $table->string('first_name', 500);
            $table->string('last_name', 500);
            // date of birth
            // age (calculate)
            $table->string('nation',100);
            $table->string('country',500);
            // date create
            // date edit
            $table->string('religion',500);


        })
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
