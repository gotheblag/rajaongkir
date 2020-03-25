<?php

namespace gotheblag\rajaongkir;

use Illuminate\Support\Facades\Facade;

class RajaOngkirFacade extends Facade{
	protected static function getFacadeAccessor() { return 'rajaOngkir'; }
}
