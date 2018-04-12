<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesettingsARRequest;
use App\Http\Requests\UpdatesettingsARRequest;
use App\Repositories\settingsARRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class settingsARController extends AppBaseController
{
    /** @var  settingsARRepository */
    private $settingsARRepository;

    public function __construct(settingsARRepository $settingsARRepo)
    {
        $this->settingsARRepository = $settingsARRepo;
    }

    /**
     * Display a listing of the settingsAR.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->settingsARRepository->pushCriteria(new RequestCriteria($request));
        $settingsARs = $this->settingsARRepository->all();

        return view('settings_a_rs.index')
            ->with('settingsARs', $settingsARs);
    }

    /**
     * Show the form for creating a new settingsAR.
     *
     * @return Response
     */
    public function create()
    {
        return view('settings_a_rs.create');
    }

    /**
     * Store a newly created settingsAR in storage.
     *
     * @param CreatesettingsARRequest $request
     *
     * @return Response
     */
    public function store(CreatesettingsARRequest $request)
    {
        $input = $request->all();

        $settingsAR = $this->settingsARRepository->create($input);

        Flash::success('Settings A R saved successfully.');

        return redirect(route('settingsARs.index'));
    }

    /**
     * Display the specified settingsAR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $settingsAR = $this->settingsARRepository->findWithoutFail($id);

        if (empty($settingsAR)) {
            Flash::error('Settings A R not found');

            return redirect(route('settingsARs.index'));
        }

        return view('settings_a_rs.show')->with('settingsAR', $settingsAR);
    }

    /**
     * Show the form for editing the specified settingsAR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $settingsAR = $this->settingsARRepository->findWithoutFail($id);

        if (empty($settingsAR)) {
            Flash::error('Settings A R not found');

            return redirect(route('settingsARs.index'));
        }

        return view('settings_a_rs.edit')->with('settingsAR', $settingsAR);
    }

    /**
     * Update the specified settingsAR in storage.
     *
     * @param  int              $id
     * @param UpdatesettingsARRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesettingsARRequest $request)
    {
        $settingsAR = $this->settingsARRepository->findWithoutFail($id);

        if (empty($settingsAR)) {
            Flash::error('Settings A R not found');

            return redirect(route('settingsARs.index'));
        }

        $settingsAR = $this->settingsARRepository->update($request->all(), $id);

        Flash::success('Settings A R updated successfully.');

        return redirect(route('settingsARs.index'));
    }

    /**
     * Remove the specified settingsAR from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $settingsAR = $this->settingsARRepository->findWithoutFail($id);

        if (empty($settingsAR)) {
            Flash::error('Settings A R not found');

            return redirect(route('settingsARs.index'));
        }

        $this->settingsARRepository->delete($id);

        Flash::success('Settings A R deleted successfully.');

        return redirect(route('settingsARs.index'));
    }
}
