@extends('_master')


@section('head')
	// stylesheet
@stop

@section('title')
	Random User Generator
@stop

@section('content')

	<h1>Random User Generator</h1>

	<?php $faker = Faker\Factory::create(); 
		for ($i=0; $i < $number; $i++) {
  echo $faker->name."<br>";
}
	?>

@stop