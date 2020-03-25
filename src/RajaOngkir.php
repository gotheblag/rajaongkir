<?php

namespace gotheblag\rajaongkir;

use gotheblag\rajaongkir\app\Cost_luar;
use gotheblag\rajaongkir\app\Dikirim_dari;
use gotheblag\rajaongkir\app\International;
use gotheblag\rajaongkir\app\Kecamatan;
use gotheblag\rajaongkir\app\Provinsi;
use gotheblag\rajaongkir\app\Kota;
use gotheblag\rajaongkir\app\Cost;

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
