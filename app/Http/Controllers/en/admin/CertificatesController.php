<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCertificatesRequest;
use App\Http\Requests\UpdateCertificatesRequest;
use App\Repositories\CertificatesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CertificatesController extends AppBaseController
{
    /** @var  CertificatesRepository */
    private $certificatesRepository;

    public function __construct(CertificatesRepository $certificatesRepo)
    {
        $this->certificatesRepository = $certificatesRepo;
    }

    /**
     * Display a listing of the Certificates.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->certificatesRepository->pushCriteria(new RequestCriteria($request));
        $certificates = $this->certificatesRepository->all();

        return view('certificates.index')
            ->with('certificates', $certificates);
    }

    /**
     * Show the form for creating a new Certificates.
     *
     * @return Response
     */
    public function create()
    {
        return view('certificates.create');
    }

    /**
     * Store a newly created Certificates in storage.
     *
     * @param CreateCertificatesRequest $request
     *
     * @return Response
     */
    public function store(CreateCertificatesRequest $request)
    {
       $input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;

        $certificates = $this->certificatesRepository->create($input);

        Flash::success('Certificates saved successfully.');

        return redirect(route('certificates.index'));
    }

    /**
     * Display the specified Certificates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $certificates = $this->certificatesRepository->findWithoutFail($id);

        if (empty($certificates)) {
            Flash::error('Certificates not found');

            return redirect(route('certificates.index'));
        }

        return view('certificates.show')->with('certificates', $certificates);
    }

    /**
     * Show the form for editing the specified Certificates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $certificates = $this->certificatesRepository->findWithoutFail($id);

        if (empty($certificates)) {
            Flash::error('Certificates not found');

            return redirect(route('certificates.index'));
        }

        return view('certificates.edit')->with('certificates', $certificates);
    }

    /**
     * Update the specified Certificates in storage.
     *
     * @param  int              $id
     * @param UpdateCertificatesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCertificatesRequest $request)
    {
        $input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;
        
        $certificates = $this->certificatesRepository->findWithoutFail($id);

        if (empty($certificates)) {
            Flash::error('Certificates not found');

            return redirect(route('certificates.index'));
        }

        $certificates = $this->certificatesRepository->update($input, $id);

        Flash::success('Certificates updated successfully.');

        return redirect(route('certificates.index'));
    }

    /**
     * Remove the specified Certificates from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $certificates = $this->certificatesRepository->findWithoutFail($id);

        if (empty($certificates)) {
            Flash::error('Certificates not found');

            return redirect(route('certificates.index'));
        }

        $this->certificatesRepository->delete($id);

        Flash::success('Certificates deleted successfully.');

        return redirect(route('certificates.index'));
    }
}
