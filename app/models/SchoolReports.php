<?php 

//use Eloquent;

class SchoolReports extends \Eloquent {

	//Eloquent::unguard();

	protected $table = 'schoolreports';

	protected $fillable = ['averagemiles', 'gooddeeds', 'year'];

	//return $this->belongsToMany('School');

}