<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGalleryCategoryRequest;
use App\Http\Requests\UpdateGalleryCategoryRequest;
use App\Repositories\GalleryCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GalleryCategoryController extends AppBaseController
{
    /** @var  GalleryCategoryRepository */
    private $galleryCategoryRepository;

    public function __construct(GalleryCategoryRepository $galleryCategoryRepo)
    {
        $this->galleryCategoryRepository = $galleryCategoryRepo;
    }

    /**
     * Display a listing of the GalleryCategory.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->galleryCategoryRepository->pushCriteria(new RequestCriteria($request));
        $galleryCategories = $this->galleryCategoryRepository->all();

        return view('gallery_categories.index')
            ->with('galleryCategories', $galleryCategories);
    }

    /**
     * Show the form for creating a new GalleryCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('gallery_categories.create');
    }

    /**
     * Store a newly created GalleryCategory in storage.
     *
     * @param CreateGalleryCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateGalleryCategoryRequest $request)
    {
         
 $input = $request->all();

     


        $galleryCategory = $this->galleryCategoryRepository->create($input);

        Flash::success('Gallery Category saved successfully.');

        return redirect(route('galleryCategories.index'));
    }

    /**
     * Display the specified GalleryCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $galleryCategory = $this->galleryCategoryRepository->findWithoutFail($id);

        if (empty($galleryCategory)) {
            Flash::error('Gallery Category not found');

            return redirect(route('galleryCategories.index'));
        }

        return view('gallery_categories.show')->with('galleryCategory', $galleryCategory);
    }

    /**
     * Show the form for editing the specified GalleryCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $galleryCategory = $this->galleryCategoryRepository->findWithoutFail($id);

        if (empty($galleryCategory)) {
            Flash::error('Gallery Category not found');

            return redirect(route('galleryCategories.index'));
        }

        return view('gallery_categories.edit')->with('galleryCategory', $galleryCategory);
    }

    /**
     * Update the specified GalleryCategory in storage.
     *
     * @param  int              $id
     * @param UpdateGalleryCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGalleryCategoryRequest $request)
    {

 $input = $request->all();

       

        $galleryCategory = $this->galleryCategoryRepository->findWithoutFail($id);

        if (empty($galleryCategory)) {
            Flash::error('Gallery Category not found');

            return redirect(route('galleryCategories.index'));
        }

        $galleryCategory = $this->galleryCategoryRepository->update( $input  , $id);

        Flash::success('Gallery Category updated successfully.');

        return redirect(route('galleryCategories.index'));
    }

    /**
     * Remove the specified GalleryCategory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $galleryCategory = $this->galleryCategoryRepository->findWithoutFail($id);

        if (empty($galleryCategory)) {
            Flash::error('Gallery Category not found');

            return redirect(route('galleryCategories.index'));
        }

        $this->galleryCategoryRepository->delete($id);

        Flash::success('Gallery Category deleted successfully.');

        return redirect(route('galleryCategories.index'));
    }
}
