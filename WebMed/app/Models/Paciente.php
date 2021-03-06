<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Paciente
 * @package App\Models
 * @version January 9, 2018, 3:15 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Consultum
 * @property string CPF
 * @property string Nome
 * @property string Convenio
 * @property string Telefone
 * @property date DataNasc
 * @property string TipoSanguineo
 */
class Paciente extends Model
{

    public $table = 'paciente';
    
    public $timestamps = false;



    public $fillable = [
        'CPF',
        'Nome',
        'Convenio',
        'Telefone',
        'DataNasc',
        'TipoSanguineo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'CPF' => 'string',
        'Nome' => 'string',
        'Convenio' => 'string',
        'Telefone' => 'string',
        'DataNasc' => 'date',
        'TipoSanguineo' => 'string',
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function consulta()
    {
        return $this->hasMany(\App\Models\Consultum::class);
    }
}
