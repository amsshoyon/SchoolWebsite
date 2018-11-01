<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberType extends Model
{
    public function Member()
	{
		 return $this->hasMany(Member::class);
		 
	}
}
