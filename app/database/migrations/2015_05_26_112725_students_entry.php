<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsEntry extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('students')->insert(array(
				'name'=>'Sahil',
				'address'=>'Delhi',
				'gender'=>'Male',
				'year'=>Date('Y'),
				'activities'=>'Football'
			));
		DB::table('students')->insert(array(
				'name'=>'Gaurav Gupta',
				'address'=>'Gurgaon',
				'gender'=>'Male',
				'year'=>'2014',
				'activities'=>'Programming'
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
