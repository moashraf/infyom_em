<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecertificatesARRequest;
use App\Http\Requests\UpdatecertificatesARRequest;
use App\Repositories\certificatesARRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class certificatesARController extends AppBaseController
{
    /** @var  certificatesARRepository */
    private $certificatesARRepository;

    public function __construct(certificatesARRepository $certificatesARRepo)
    {
        $this->certificatesARRepository = $certificatesARRepo;
    }

    /**
     * Display a listing of the certificatesAR.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->certificatesARRepository->pushCriteria(new RequestCriteria($request));
        $certificatesARs = $this->certificatesARRepository->all();

        return view('certificates_a_rs.index')
            ->with('certificatesARs', $certificatesARs);
    }

    /**
     * Show the form for creating a new certificatesAR.
     *
     * @return Response
     */
    public function create()
    {
        return view('certificates_a_rs.create');
    }

    /**
     * Store a newly created certificatesAR in storage.
     *
     * @param CreatecertificatesARRequest $request
     *
     * @return Response
     */
    public function store(CreatecertificatesARRequest $request)
    {
        $input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;

        $certificatesAR = $this->certificatesARRepository->create($input);

        Flash::success('Certificates A R saved successfully.');

        return redirect(route('certificatesARs.index'));
    }

    /**
     * Display the specified certificatesAR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $certificatesAR = $this->certificatesARRepository->findWithoutFail($id);

        if (empty($certificatesAR)) {
            Flash::error('Certificates A R not found');

            return redirect(route('certificatesARs.index'));
        }

        return view('certificates_a_rs.show')->with('certificatesAR', $certificatesAR);
    }

    /**
     * Show the form for editing the specified certificatesAR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $certificatesAR = $this->certificatesARRepository->findWithoutFail($id);

        if (empty($certificatesAR)) {
            Flash::error('Certificates A R not found');

            return redirect(route('certificatesARs.index'));
        }

        return view('certificates_a_rs.edit')->with('certificatesAR', $certificatesAR);
    }

    /**
     * Update the specified certificatesAR in storage.
     *
     * @param  int              $id
     * @param UpdatecertificatesARRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecertificatesARRequest $request)
    {
        $input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;
        $certificatesAR = $this->certificatesARRepository->findWithoutFail($id);

        if (empty($certificatesAR)) {
            Flash::error('Certificates A R not found');

            return redirect(route('certificatesARs.index'));
        }

        $certificatesAR = $this->certificatesARRepository->update( $input, $id);

        Flash::success('Certificates A R updated successfully.');

        return redirect(route('certificatesARs.index'));
    }

    /**
     * Remove the specified certificatesAR from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $certificatesAR = $this->certificatesARRepository->findWithoutFail($id);

        if (empty($certificatesAR)) {
            Flash::error('Certificates A R not found');

            return redirect(route('certificatesARs.index'));
        }

        $this->certificatesARRepository->delete($id);

        Flash::success('Certificates A R deleted successfully.');

        return redirect(route('certificatesARs.index'));
    }
}
