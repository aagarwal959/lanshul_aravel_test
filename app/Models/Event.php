<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $connection = "mysql";

	public static function getallEventWorkShops(){
		$events = new Event;

		return $events->with("workshops")->get();
	}

	public function workshops() {
		return $this->hasMany(Workshop::class, "event_id", 'id');
	}
}
