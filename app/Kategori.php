<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table='kategoris';
    protected $fillable=['judul'];
    public $timestamps=true;

    public function Artikel()
	{
		return $this->hasMany('App\Artikel','kategori_id');
	}
}
