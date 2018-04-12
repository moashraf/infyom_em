<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateservicesARRequest;
use App\Http\Requests\UpdateservicesARRequest;
use App\Repositories\servicesARRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class servicesARController extends AppBaseController
{
    /** @var  servicesARRepository */
    private $servicesARRepository;

    public function __construct(servicesARRepository $servicesARRepo)
    {
        $this->servicesARRepository = $servicesARRepo;
    }

    /**
     * Display a listing of the servicesAR.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->servicesARRepository->pushCriteria(new RequestCriteria($request));
        $servicesARs = $this->servicesARRepository->all();

        return view('services_a_rs.index')
            ->with('servicesARs', $servicesARs);
    }

    /**
     * Show the form for creating a new servicesAR.
     *
     * @return Response
     */
    public function create()
    {
        return view('services_a_rs.create');
    }

    /**
     * Store a newly created servicesAR in storage.
     *
     * @param CreateservicesARRequest $request
     *
     * @return Response
     */
    public function store(CreateservicesARRequest $request)
    {
$input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;
        $servicesAR = $this->servicesARRepository->create($input);

        Flash::success('Services A R saved successfully.');

        return redirect(route('servicesARs.index'));
    }

    /**
     * Display the specified servicesAR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicesAR = $this->servicesARRepository->findWithoutFail($id);

        if (empty($servicesAR)) {
            Flash::error('Services A R not found');

            return redirect(route('servicesARs.index'));
        }

        return view('services_a_rs.show')->with('servicesAR', $servicesAR);
    }

    /**
     * Show the form for editing the specified servicesAR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicesAR = $this->servicesARRepository->findWithoutFail($id);

        if (empty($servicesAR)) {
            Flash::error('Services A R not found');

            return redirect(route('servicesARs.index'));
        }

        return view('services_a_rs.edit')->with('servicesAR', $servicesAR);
    }

    /**
     * Update the specified servicesAR in storage.
     *
     * @param  int              $id
     * @param UpdateservicesARRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateservicesARRequest $request)
    {
       $input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;
         $servicesAR = $this->servicesARRepository->findWithoutFail($id);

        if (empty($servicesAR)) {
            Flash::error('Services A R not found');

            return redirect(route('servicesARs.index'));
        }

        $servicesAR = $this->servicesARRepository->update( $input, $id);

        Flash::success('Services A R updated successfully.');

        return redirect(route('servicesARs.index'));
    }

    /**
     * Remove the specified servicesAR from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicesAR = $this->servicesARRepository->findWithoutFail($id);

        if (empty($servicesAR)) {
            Flash::error('Services A R not found');

            return redirect(route('servicesARs.index'));
        }

        $this->servicesARRepository->delete($id);

        Flash::success('Services A R deleted successfully.');

        return redirect(route('servicesARs.index'));
    }
}
