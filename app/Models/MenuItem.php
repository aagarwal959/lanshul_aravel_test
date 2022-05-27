<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

	public function children() {
		return $this->hasMany(MenuItem::class, "parent_id", "id")->with("children");
	}
	public static function getMenu($value='')
	{
		return self::with("children")->whereNull("parent_id")->get();
	}
}
