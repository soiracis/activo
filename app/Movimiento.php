<?php namespace ActivoFijo;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model {

		//
	protected $table = 'movimientos';
	public $timestamps = false;
	protected $primaryKey = 'Movto';
	protected $fillable = ['Gpo'.,'clave','NumInv','AnoPrg','TpoBien','Denomin','FecAlta','DescArt','IdProv','NumFact','Costo','IdTipAdq','IdRub','Edo','Localiz'];

	public function proveedor()
    {
        return $this->belongsTo('ActivoFijo\Proveedor', 'IdProv','IdProv');
    }
}

