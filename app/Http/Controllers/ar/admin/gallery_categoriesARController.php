<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creategallery_categoriesARRequest;
use App\Http\Requests\Updategallery_categoriesARRequest;
use App\Repositories\gallery_categoriesARRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class gallery_categoriesARController extends AppBaseController
{
    /** @var  gallery_categoriesARRepository */
    private $galleryCategoriesARRepository;

    public function __construct(gallery_categoriesARRepository $galleryCategoriesARRepo)
    {
        $this->galleryCategoriesARRepository = $galleryCategoriesARRepo;
    }

    /**
     * Display a listing of the gallery_categoriesAR.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->galleryCategoriesARRepository->pushCriteria(new RequestCriteria($request));
        $galleryCategoriesARs = $this->galleryCategoriesARRepository->all();

        return view('gallery_categories_a_rs.index')
            ->with('galleryCategoriesARs', $galleryCategoriesARs);
    }

    /**
     * Show the form for creating a new gallery_categoriesAR.
     *
     * @return Response
     */
    public function create()
    {
        return view('gallery_categories_a_rs.create');
    }

    /**
     * Store a newly created gallery_categoriesAR in storage.
     *
     * @param Creategallery_categoriesARRequest $request
     *
     * @return Response
     */
    public function store(Creategallery_categoriesARRequest $request)
    {
        $input = $request->all();

        $galleryCategoriesAR = $this->galleryCategoriesARRepository->create($input);

        Flash::success('Gallery Categories A R saved successfully.');

        return redirect(route('galleryCategoriesARs.index'));
    }

    /**
     * Display the specified gallery_categoriesAR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $galleryCategoriesAR = $this->galleryCategoriesARRepository->findWithoutFail($id);

        if (empty($galleryCategoriesAR)) {
            Flash::error('Gallery Categories A R not found');

            return redirect(route('galleryCategoriesARs.index'));
        }

        return view('gallery_categories_a_rs.show')->with('galleryCategoriesAR', $galleryCategoriesAR);
    }

    /**
     * Show the form for editing the specified gallery_categoriesAR.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $galleryCategoriesAR = $this->galleryCategoriesARRepository->findWithoutFail($id);

        if (empty($galleryCategoriesAR)) {
            Flash::error('Gallery Categories A R not found');

            return redirect(route('galleryCategoriesARs.index'));
        }

        return view('gallery_categories_a_rs.edit')->with('galleryCategoriesAR', $galleryCategoriesAR);
    }

    /**
     * Update the specified gallery_categoriesAR in storage.
     *
     * @param  int              $id
     * @param Updategallery_categoriesARRequest $request
     *
     * @return Response
     */
    public function update($id, Updategallery_categoriesARRequest $request)
    {
        $galleryCategoriesAR = $this->galleryCategoriesARRepository->findWithoutFail($id);

        if (empty($galleryCategoriesAR)) {
            Flash::error('Gallery Categories A R not found');

            return redirect(route('galleryCategoriesARs.index'));
        }

        $galleryCategoriesAR = $this->galleryCategoriesARRepository->update($request->all(), $id);

        Flash::success('Gallery Categories A R updated successfully.');

        return redirect(route('galleryCategoriesARs.index'));
    }

    /**
     * Remove the specified gallery_categoriesAR from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $galleryCategoriesAR = $this->galleryCategoriesARRepository->findWithoutFail($id);

        if (empty($galleryCategoriesAR)) {
            Flash::error('Gallery Categories A R not found');

            return redirect(route('galleryCategoriesARs.index'));
        }

        $this->galleryCategoriesARRepository->delete($id);

        Flash::success('Gallery Categories A R deleted successfully.');

        return redirect(route('galleryCategoriesARs.index'));
    }
}
