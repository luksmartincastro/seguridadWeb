<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model 
{    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'perfiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    
    //-----------------------------------------------------
    //--------------------- metodos -----------------------
    //-----------------------------------------------------

    public function usuarios()
    {
        return $this->hasMany('App\Models\UsuarioPerfil','usuarioPerfil_idPerf_foreign');
    }
    /*public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario'); 
    }
    //-----------------------------------------
    public function perfil()
    {
        return $this->belongsTo('App\Models\Perfil'); 
    }
    //-----------------------------------------
    */
}