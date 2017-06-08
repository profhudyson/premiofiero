<?php

namespace App\Repositories;

use App\Models\Empresa;
use InfyOm\Generator\Common\BaseRepository;

class EmpresaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Empresa::class;
    }
}
