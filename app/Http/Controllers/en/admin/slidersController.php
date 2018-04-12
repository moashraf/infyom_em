<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateslidersRequest;
use App\Http\Requests\UpdateslidersRequest;
use App\Repositories\slidersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class slidersController extends AppBaseController
{
    /** @var  slidersRepository */
    private $slidersRepository;

    public function __construct(slidersRepository $slidersRepo)
    {
        $this->slidersRepository = $slidersRepo;
    }

    /**
     * Display a listing of the sliders.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->slidersRepository->pushCriteria(new RequestCriteria($request));
        $sliders = $this->slidersRepository->all();

        return view('sliders.index')
            ->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new sliders.
     *
     * @return Response
     */
    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Store a newly created sliders in storage.
     *
     * @param CreateslidersRequest $request
     *
     * @return Response
     */
    public function store(CreateslidersRequest $request)
    {
        $input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;


        $sliders = $this->slidersRepository->create($input);

        Flash::success('Sliders saved successfully.');

        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified sliders.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sliders = $this->slidersRepository->findWithoutFail($id);

        if (empty($sliders)) {
            Flash::error('Sliders not found');

            return redirect(route('sliders.index'));
        }

        return view('sliders.show')->with('sliders', $sliders);
    }

    /**
     * Show the form for editing the specified sliders.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sliders = $this->slidersRepository->findWithoutFail($id);

        if (empty($sliders)) {
            Flash::error('Sliders not found');

            return redirect(route('sliders.index'));
        }

        return view('sliders.edit')->with('sliders', $sliders);
    }

    /**
     * Update the specified sliders in storage.
     *
     * @param  int              $id
     * @param UpdateslidersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateslidersRequest $request)
    {
 $input = $request->all();
          $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;


        
        $sliders = $this->slidersRepository->findWithoutFail($id);

        if (empty($sliders)) {
            Flash::error('Sliders not found');

            return redirect(route('sliders.index'));
        }

        $sliders = $this->slidersRepository->update( $input, $id);

        Flash::success('Sliders updated successfully.');

        return redirect(route('sliders.index'));
    }

    /**
     * Remove the specified sliders from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sliders = $this->slidersRepository->findWithoutFail($id);

        if (empty($sliders)) {
            Flash::error('Sliders not found');

            return redirect(route('sliders.index'));
        }

        $this->slidersRepository->delete($id);

        Flash::success('Sliders deleted successfully.');

        return redirect(route('sliders.index'));
    }
}
