<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioPerfil extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarioperfil';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    
    //-----------------------------------------------------
    //--------------------- metodos -----------------------
    //-----------------------------------------------------

    /*public function equipos()
    {
        return $this->hasMany('adminsel\Models\EquipoAccesorio','equipoaccesorio_idacc_foreign');
    }*/
    public function usuario()
    {
        return $this->belongsTo('App\Usuario'); 
    }
    //-----------------------------------------
    public function perfil()
    {
        return $this->belongsTo('App\Models\Perfil'); 
    }
    //-----------------------------------------
}
