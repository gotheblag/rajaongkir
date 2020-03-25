<?php

namespace gotheblag\rajaongkir;

use aresbgt\rajaongkir\app\Cost_luar;
use aresbgt\rajaongkir\app\Dikirim_dari;
use aresbgt\rajaongkir\app\International;
use aresbgt\rajaongkir\app\Kecamatan;
use aresbgt\rajaongkir\app\Provinsi;
use aresbgt\rajaongkir\app\Kota;
use aresbgt\rajaongkir\app\Cost;

class RajaOngkir {
	public function Provinsi(){
		return new Provinsi;
	}

	public function Kota(){
		return new Kota;
	}

    public function kecamatan(){
        return new Kecamatan;
    }

    public function international(){
	    return new International;
    }
    public function dikirim_dari(){
        return new Dikirim_dari;
    }
	public function Cost($attributes){
		return new Cost($attributes);
	}
	public function Cost_luar($attributes){
		return new Cost_luar($attributes);
	}
}
