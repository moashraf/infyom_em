<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestingsRequest;
use App\Http\Requests\UpdatestingsRequest;
use App\Repositories\stingsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class stingsController extends AppBaseController
{
    /** @var  stingsRepository */
    private $stingsRepository;

    public function __construct(stingsRepository $stingsRepo)
    {
        $this->stingsRepository = $stingsRepo;
    }

    /**
     * Display a listing of the stings.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->stingsRepository->pushCriteria(new RequestCriteria($request));
        $stings = $this->stingsRepository->all();

        return view('stings.index')
            ->with('stings', $stings);
    }

    /**
     * Show the form for creating a new stings.
     *
     * @return Response
     */
    public function create()
    {
        return view('stings.create');
    }

    /**
     * Store a newly created stings in storage.
     *
     * @param CreatestingsRequest $request
     *
     * @return Response
     */
    public function store(CreatestingsRequest $request)
    {
         $input = $request->all();

        $stings = $this->stingsRepository->create($input);

        Flash::success('Stings saved successfully.');

        return redirect(route('stings.index'));
    }

    /**
     * Display the specified stings.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stings = $this->stingsRepository->findWithoutFail($id);

        if (empty($stings)) {
            Flash::error('Stings not found');

            return redirect(route('stings.index'));
        }

        return view('stings.show')->with('stings', $stings);
    }

    /**
     * Show the form for editing the specified stings.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stings = $this->stingsRepository->findWithoutFail($id);

        if (empty($stings)) {
            Flash::error('Stings not found');

            return redirect(route('stings.index'));
        }

        return view('stings.edit')->with('stings', $stings);
    }

    /**
     * Update the specified stings in storage.
     *
     * @param  int              $id
     * @param UpdatestingsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatestingsRequest $request)
    {
        $stings = $this->stingsRepository->findWithoutFail($id);

        if (empty($stings)) {
            Flash::error('Stings not found');

            return redirect(route('stings.index'));
        }

        $stings = $this->stingsRepository->update($request->all(), $id);

        Flash::success('Stings updated successfully.');

        return redirect(route('stings.index'));
    }

    /**
     * Remove the specified stings from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stings = $this->stingsRepository->findWithoutFail($id);

        if (empty($stings)) {
            Flash::error('Stings not found');

            return redirect(route('stings.index'));
        }

        $this->stingsRepository->delete($id);

        Flash::success('Stings deleted successfully.');

        return redirect(route('stings.index'));
    }
}
