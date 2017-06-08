<?php

use App\Models\DadoPessoal;
use App\Repositories\DadoPessoalRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DadoPessoalRepositoryTest extends TestCase
{
    use MakeDadoPessoalTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var DadoPessoalRepository
     */
    protected $dadoPessoalRepo;

    public function setUp()
    {
        parent::setUp();
        $this->dadoPessoalRepo = App::make(DadoPessoalRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateDadoPessoal()
    {
        $dadoPessoal = $this->fakeDadoPessoalData();
        $createdDadoPessoal = $this->dadoPessoalRepo->create($dadoPessoal);
        $createdDadoPessoal = $createdDadoPessoal->toArray();
        $this->assertArrayHasKey('id', $createdDadoPessoal);
        $this->assertNotNull($createdDadoPessoal['id'], 'Created DadoPessoal must have id specified');
        $this->assertNotNull(DadoPessoal::find($createdDadoPessoal['id']), 'DadoPessoal with given id must be in DB');
        $this->assertModelData($dadoPessoal, $createdDadoPessoal);
    }

    /**
     * @test read
     */
    public function testReadDadoPessoal()
    {
        $dadoPessoal = $this->makeDadoPessoal();
        $dbDadoPessoal = $this->dadoPessoalRepo->find($dadoPessoal->id);
        $dbDadoPessoal = $dbDadoPessoal->toArray();
        $this->assertModelData($dadoPessoal->toArray(), $dbDadoPessoal);
    }

    /**
     * @test update
     */
    public function testUpdateDadoPessoal()
    {
        $dadoPessoal = $this->makeDadoPessoal();
        $fakeDadoPessoal = $this->fakeDadoPessoalData();
        $updatedDadoPessoal = $this->dadoPessoalRepo->update($fakeDadoPessoal, $dadoPessoal->id);
        $this->assertModelData($fakeDadoPessoal, $updatedDadoPessoal->toArray());
        $dbDadoPessoal = $this->dadoPessoalRepo->find($dadoPessoal->id);
        $this->assertModelData($fakeDadoPessoal, $dbDadoPessoal->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteDadoPessoal()
    {
        $dadoPessoal = $this->makeDadoPessoal();
        $resp = $this->dadoPessoalRepo->delete($dadoPessoal->id);
        $this->assertTrue($resp);
        $this->assertNull(DadoPessoal::find($dadoPessoal->id), 'DadoPessoal should not exist in DB');
    }
}
