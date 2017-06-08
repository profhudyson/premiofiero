<?php

use Faker\Factory as Faker;
use App\Models\DadoPessoal;
use App\Repositories\DadoPessoalRepository;

trait MakeDadoPessoalTrait
{
    /**
     * Create fake instance of DadoPessoal and save it in database
     *
     * @param array $dadoPessoalFields
     * @return DadoPessoal
     */
    public function makeDadoPessoal($dadoPessoalFields = [])
    {
        /** @var DadoPessoalRepository $dadoPessoalRepo */
        $dadoPessoalRepo = App::make(DadoPessoalRepository::class);
        $theme = $this->fakeDadoPessoalData($dadoPessoalFields);
        return $dadoPessoalRepo->create($theme);
    }

    /**
     * Get fake instance of DadoPessoal
     *
     * @param array $dadoPessoalFields
     * @return DadoPessoal
     */
    public function fakeDadoPessoal($dadoPessoalFields = [])
    {
        return new DadoPessoal($this->fakeDadoPessoalData($dadoPessoalFields));
    }

    /**
     * Get fake data of DadoPessoal
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDadoPessoalData($dadoPessoalFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nome' => $fake->word,
            'cpf' => $fake->word,
            'endereco' => $fake->word,
            'numero' => $fake->word,
            'bairro' => $fake->word,
            'complemento' => $fake->word,
            'cep' => $fake->word,
            'estado' => $fake->randomDigitNotNull,
            'municipio' => $fake->randomDigitNotNull,
            'celular' => $fake->word,
            'telfixo' => $fake->word,
            'email' => $fake->word
        ], $dadoPessoalFields);
    }
}
