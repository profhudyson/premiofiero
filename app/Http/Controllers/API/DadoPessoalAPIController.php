<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDadoPessoalAPIRequest;
use App\Http\Requests\API\UpdateDadoPessoalAPIRequest;
use App\Models\DadoPessoal;
use App\Repositories\DadoPessoalRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class DadoPessoalController
 * @package App\Http\Controllers\API
 */

class DadoPessoalAPIController extends AppBaseController
{
    /** @var  DadoPessoalRepository */
    private $dadoPessoalRepository;

    public function __construct(DadoPessoalRepository $dadoPessoalRepo)
    {
        $this->dadoPessoalRepository = $dadoPessoalRepo;
    }

    /**
     * Display a listing of the DadoPessoal.
     * GET|HEAD /dadoPessoals
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dadoPessoalRepository->pushCriteria(new RequestCriteria($request));
        $this->dadoPessoalRepository->pushCriteria(new LimitOffsetCriteria($request));
        $dadoPessoals = $this->dadoPessoalRepository->all();

        return $this->sendResponse($dadoPessoals->toArray(), 'Dado Pessoals retrieved successfully');
    }

    /**
     * Store a newly created DadoPessoal in storage.
     * POST /dadoPessoals
     *
     * @param CreateDadoPessoalAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDadoPessoalAPIRequest $request)
    {
        $input = $request->all();

        $dadoPessoals = $this->dadoPessoalRepository->create($input);

        return $this->sendResponse($dadoPessoals->toArray(), 'Dado Pessoal saved successfully');
    }

    /**
     * Display the specified DadoPessoal.
     * GET|HEAD /dadoPessoals/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var DadoPessoal $dadoPessoal */
        $dadoPessoal = $this->dadoPessoalRepository->findWithoutFail($id);

        if (empty($dadoPessoal)) {
            return $this->sendError('Dado Pessoal not found');
        }

        return $this->sendResponse($dadoPessoal->toArray(), 'Dado Pessoal retrieved successfully');
    }

    /**
     * Update the specified DadoPessoal in storage.
     * PUT/PATCH /dadoPessoals/{id}
     *
     * @param  int $id
     * @param UpdateDadoPessoalAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDadoPessoalAPIRequest $request)
    {
        $input = $request->all();

        /** @var DadoPessoal $dadoPessoal */
        $dadoPessoal = $this->dadoPessoalRepository->findWithoutFail($id);

        if (empty($dadoPessoal)) {
            return $this->sendError('Dado Pessoal not found');
        }

        $dadoPessoal = $this->dadoPessoalRepository->update($input, $id);

        return $this->sendResponse($dadoPessoal->toArray(), 'DadoPessoal updated successfully');
    }

    /**
     * Remove the specified DadoPessoal from storage.
     * DELETE /dadoPessoals/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var DadoPessoal $dadoPessoal */
        $dadoPessoal = $this->dadoPessoalRepository->findWithoutFail($id);

        if (empty($dadoPessoal)) {
            return $this->sendError('Dado Pessoal not found');
        }

        $dadoPessoal->delete();

        return $this->sendResponse($id, 'Dado Pessoal deleted successfully');
    }
}
