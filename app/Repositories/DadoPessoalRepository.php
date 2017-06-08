<?php

namespace App\Repositories;

use App\Models\DadoPessoal;
use InfyOm\Generator\Common\BaseRepository;

class DadoPessoalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return DadoPessoal::class;
    }
}
