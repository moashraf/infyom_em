<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateslidersARRequest;
use App\Http\Requests\UpdateslidersARRequest;
use App\Repositories\slidersARRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class slidersARController extends AppBaseController
{
    /** @var  slidersARRepository */
    private $slidersARRepository;

    public function __construct(slidersARRepository $slidersARRepo)
    {
        $this->slidersARRepository = $slidersARRepo;
    }

    /**
     * Display a listing of the slidersAR.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->slidersARRepository->pushCriteria(new RequestCriteria($request));
        $slidersARs = $this->slidersARRepository->all();

        return view('sliders_a_rs.index')
            ->with('slidersARs', $slidersARs);
    }

    /**
     * Show the form for creating a new slidersAR.
     *
     * @return Response
     */
    public function create()
    {
        return view('sliders_a_rs.create');
    }

    /**
     * Store a newly created slidersAR in storage.
     *
     * @param CreateslidersARRequest $request
     *
     * @return Response
     */
    public function store(CreateslidersARRequest $request)
    { $input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;

 
        $slidersAR = $this->slidersARRepository->create($input);

        Flash::success('Sliders A R saved successfully.');

        return redirect(route('slidersARs.index'));
    }

    /**
     * Display the specified slidersAR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slidersAR = $this->slidersARRepository->findWithoutFail($id);

        if (empty($slidersAR)) {
            Flash::error('Sliders A R not found');

            return redirect(route('slidersARs.index'));
        }

        return view('sliders_a_rs.show')->with('slidersAR', $slidersAR);
    }

    /**
     * Show the form for editing the specified slidersAR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slidersAR = $this->slidersARRepository->findWithoutFail($id);

        if (empty($slidersAR)) {
            Flash::error('Sliders A R not found');

            return redirect(route('slidersARs.index'));
        }

        return view('sliders_a_rs.edit')->with('slidersAR', $slidersAR);
    }

    /**
     * Update the specified slidersAR in storage.
     *
     * @param  int              $id
     * @param UpdateslidersARRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateslidersARRequest $request)
    {
        $input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;

        
        $slidersAR = $this->slidersARRepository->findWithoutFail($id);

        if (empty($slidersAR)) {
            Flash::error('Sliders A R not found');

            return redirect(route('slidersARs.index'));
        }

        $slidersAR = $this->slidersARRepository->update( $input, $id);

        Flash::success('Sliders A R updated successfully.');

        return redirect(route('slidersARs.index'));
    }

    /**
     * Remove the specified slidersAR from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slidersAR = $this->slidersARRepository->findWithoutFail($id);

        if (empty($slidersAR)) {
            Flash::error('Sliders A R not found');

            return redirect(route('slidersARs.index'));
        }

        $this->slidersARRepository->delete($id);

        Flash::success('Sliders A R deleted successfully.');

        return redirect(route('slidersARs.index'));
    }
}
