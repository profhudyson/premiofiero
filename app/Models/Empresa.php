<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Empresa
 * @package App\Models
 * @version June 6, 2017, 7:25 pm UTC
 */
class Empresa extends Model
{

    public $table = 'empresas';
    
    public $timestamps = false;



    public $fillable = [
        'nome',
        'endereco',
        'numero',
        'bairro',
        'complemento',
        'cep',
        'estado',
        'municipio',
        'celular',
        'telfixo',
        'email',
        'registroprof',
        'titulotrab',
        'modalidade',
        'editor',
        'data',
        'ip',
        'host'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'endereco' => 'string',
        'numero' => 'string',
        'bairro' => 'string',
        'complemento' => 'string',
        'cep' => 'string',
        'estado' => 'integer',
        'municipio' => 'integer',
        'celular' => 'string',
        'telfixo' => 'string',
        'email' => 'string',
        'registroprof' => 'string',
        'titulotrab' => 'string',
        'modalidade' => 'string',
        'editor' => 'string',
        'ip' => 'string',
        'host' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
