<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model {
	//ho ho ho its magic you know never believe it its not so! 
	public $timestamps = false;
	protected $table = 'clients';
}