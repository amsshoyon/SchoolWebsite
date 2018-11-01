<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function MemberType()
	{
		return $this->belongsTo(MemberType::class);
	}
}
