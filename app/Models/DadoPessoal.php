<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DadoPessoal
 * @package App\Models
 * @version June 6, 2017, 7:29 pm UTC
 */
class DadoPessoal extends Model
{

    public $table = 'dados_pessoais';
    
    public $timestamps = false;



    public $fillable = [
        'nome',
        'cpf',
        'endereco',
        'numero',
        'bairro',
        'complemento',
        'cep',
        'estado',
        'municipio',
        'celular',
        'telfixo',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'cpf' => 'string',
        'endereco' => 'string',
        'numero' => 'string',
        'bairro' => 'string',
        'complemento' => 'string',
        'cep' => 'string',
        'estado' => 'integer',
        'municipio' => 'integer',
        'celular' => 'string',
        'telfixo' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
