<?php

use Faker\Factory as Faker;
use App\Models\Empresa;
use App\Repositories\EmpresaRepository;

trait MakeEmpresaTrait
{
    /**
     * Create fake instance of Empresa and save it in database
     *
     * @param array $empresaFields
     * @return Empresa
     */
    public function makeEmpresa($empresaFields = [])
    {
        /** @var EmpresaRepository $empresaRepo */
        $empresaRepo = App::make(EmpresaRepository::class);
        $theme = $this->fakeEmpresaData($empresaFields);
        return $empresaRepo->create($theme);
    }

    /**
     * Get fake instance of Empresa
     *
     * @param array $empresaFields
     * @return Empresa
     */
    public function fakeEmpresa($empresaFields = [])
    {
        return new Empresa($this->fakeEmpresaData($empresaFields));
    }

    /**
     * Get fake data of Empresa
     *
     * @param array $postFields
     * @return array
     */
    public function fakeEmpresaData($empresaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nome' => $fake->word,
            'endereco' => $fake->word,
            'numero' => $fake->word,
            'bairro' => $fake->word,
            'complemento' => $fake->word,
            'cep' => $fake->word,
            'estado' => $fake->randomDigitNotNull,
            'municipio' => $fake->randomDigitNotNull,
            'celular' => $fake->word,
            'telfixo' => $fake->word,
            'email' => $fake->word,
            'registroprof' => $fake->word,
            'titulotrab' => $fake->word,
            'modalidade' => $fake->word,
            'editor' => $fake->word,
            'data' => $fake->date('Y-m-d H:i:s'),
            'ip' => $fake->word,
            'host' => $fake->word
        ], $empresaFields);
    }
}
