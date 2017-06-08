<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DadoPessoalApiTest extends TestCase
{
    use MakeDadoPessoalTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateDadoPessoal()
    {
        $dadoPessoal = $this->fakeDadoPessoalData();
        $this->json('POST', '/api/v1/dadoPessoals', $dadoPessoal);

        $this->assertApiResponse($dadoPessoal);
    }

    /**
     * @test
     */
    public function testReadDadoPessoal()
    {
        $dadoPessoal = $this->makeDadoPessoal();
        $this->json('GET', '/api/v1/dadoPessoals/'.$dadoPessoal->id);

        $this->assertApiResponse($dadoPessoal->toArray());
    }

    /**
     * @test
     */
    public function testUpdateDadoPessoal()
    {
        $dadoPessoal = $this->makeDadoPessoal();
        $editedDadoPessoal = $this->fakeDadoPessoalData();

        $this->json('PUT', '/api/v1/dadoPessoals/'.$dadoPessoal->id, $editedDadoPessoal);

        $this->assertApiResponse($editedDadoPessoal);
    }

    /**
     * @test
     */
    public function testDeleteDadoPessoal()
    {
        $dadoPessoal = $this->makeDadoPessoal();
        $this->json('DELETE', '/api/v1/dadoPessoals/'.$dadoPessoal->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/dadoPessoals/'.$dadoPessoal->id);

        $this->assertResponseStatus(404);
    }
}
