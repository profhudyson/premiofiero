<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDadoPessoalRequest;
use App\Http\Requests\UpdateDadoPessoalRequest;
use App\Repositories\DadoPessoalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DadoPessoalController extends AppBaseController
{
    /** @var  DadoPessoalRepository */
    private $dadoPessoalRepository;

    public function __construct(DadoPessoalRepository $dadoPessoalRepo)
    {
        $this->dadoPessoalRepository = $dadoPessoalRepo;
    }

    /**
     * Display a listing of the DadoPessoal.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dadoPessoalRepository->pushCriteria(new RequestCriteria($request));
        $dadoPessoals = $this->dadoPessoalRepository->all();

        return view('dado_pessoals.index')
            ->with('dadoPessoals', $dadoPessoals);
    }

    /**
     * Show the form for creating a new DadoPessoal.
     *
     * @return Response
     */
    public function create()
    {
        return view('dado_pessoals.create');
    }

    /**
     * Store a newly created DadoPessoal in storage.
     *
     * @param CreateDadoPessoalRequest $request
     *
     * @return Response
     */
    public function store(CreateDadoPessoalRequest $request)
    {
        $input = $request->all();

        $dadoPessoal = $this->dadoPessoalRepository->create($input);

        Flash::success('Dado Pessoal saved successfully.');

        return redirect(route('dadoPessoals.index'));
    }

    /**
     * Display the specified DadoPessoal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dadoPessoal = $this->dadoPessoalRepository->findWithoutFail($id);

        if (empty($dadoPessoal)) {
            Flash::error('Dado Pessoal not found');

            return redirect(route('dadoPessoals.index'));
        }

        return view('dado_pessoals.show')->with('dadoPessoal', $dadoPessoal);
    }

    /**
     * Show the form for editing the specified DadoPessoal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dadoPessoal = $this->dadoPessoalRepository->findWithoutFail($id);

        if (empty($dadoPessoal)) {
            Flash::error('Dado Pessoal not found');

            return redirect(route('dadoPessoals.index'));
        }

        return view('dado_pessoals.edit')->with('dadoPessoal', $dadoPessoal);
    }

    /**
     * Update the specified DadoPessoal in storage.
     *
     * @param  int              $id
     * @param UpdateDadoPessoalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDadoPessoalRequest $request)
    {
        $dadoPessoal = $this->dadoPessoalRepository->findWithoutFail($id);

        if (empty($dadoPessoal)) {
            Flash::error('Dado Pessoal not found');

            return redirect(route('dadoPessoals.index'));
        }

        $dadoPessoal = $this->dadoPessoalRepository->update($request->all(), $id);

        Flash::success('Dado Pessoal updated successfully.');

        return redirect(route('dadoPessoals.index'));
    }

    /**
     * Remove the specified DadoPessoal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dadoPessoal = $this->dadoPessoalRepository->findWithoutFail($id);

        if (empty($dadoPessoal)) {
            Flash::error('Dado Pessoal not found');

            return redirect(route('dadoPessoals.index'));
        }

        $this->dadoPessoalRepository->delete($id);

        Flash::success('Dado Pessoal deleted successfully.');

        return redirect(route('dadoPessoals.index'));
    }
}
