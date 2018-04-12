<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreategalleryAlbumRequest;
use App\Http\Requests\UpdategalleryAlbumRequest;
use App\Repositories\galleryAlbumRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
 use App\Models\GalleryCategory;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class galleryAlbumController extends AppBaseController
{
    /** @var  galleryAlbumRepository */
    private $galleryAlbumRepository;

    public function __construct(galleryAlbumRepository $galleryAlbumRepo)
    {
        $this->galleryAlbumRepository = $galleryAlbumRepo;
    }

    /**
     * Display a listing of the galleryAlbum.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->galleryAlbumRepository->pushCriteria(new RequestCriteria($request));
        $galleryAlbums = $this->galleryAlbumRepository->all();

        return view('gallery_albums.index')
            ->with('galleryAlbums', $galleryAlbums);
    }

    /**
     * Show the form for creating a new galleryAlbum.
     *
     * @return Response
     */
    public function create()
    {
         $cat =   GalleryCategory::take(55)->get();
         return view('gallery_albums.create')->with('cat', $cat ) ;
    }

    /**
     * Store a newly created galleryAlbum in storage.
     *
     * @param CreategalleryAlbumRequest $request
     *
     * @return Response
     */
    public function store(CreategalleryAlbumRequest $request)
    {
 
 $input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;
        $galleryAlbum = $this->galleryAlbumRepository->create($input);

        Flash::success('Gallery Album saved successfully.');

        return redirect(route('galleryAlbums.index'));
    }

    /**
     * Display the specified galleryAlbum.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        
        $galleryAlbum = $this->galleryAlbumRepository->findWithoutFail($id);

        if (empty($galleryAlbum)) {
            Flash::error('Gallery Album not found');

            return redirect(route('galleryAlbums.index'));
        }

        return view('gallery_albums.show')->with('galleryAlbum', $galleryAlbum);
    }

    /**
     * Show the form for editing the specified galleryAlbum.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $galleryAlbum = $this->galleryAlbumRepository->findWithoutFail($id);
         $cat =   GalleryCategory::take(55)->get();

        if (empty($galleryAlbum)) {
            Flash::error('Gallery Album not found');

            return redirect(route('galleryAlbums.index'));
        }

        return view('gallery_albums.edit')->with('galleryAlbum', $galleryAlbum)->with('cat', $cat);;
    }

    /**
     * Update the specified galleryAlbum in storage.
     *
     * @param  int              $id
     * @param UpdategalleryAlbumRequest $request
     *
     * @return Response
     */
    public function update($id, UpdategalleryAlbumRequest $request)
    { 
 $input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;
        $galleryAlbum = $this->galleryAlbumRepository->findWithoutFail($id);

        if (empty($galleryAlbum)) {
            Flash::error('Gallery Album not found');

            return redirect(route('galleryAlbums.index'));
        }

        $galleryAlbum = $this->galleryAlbumRepository->update( $input , $id);

        Flash::success('Gallery Album updated successfully.');

        return redirect(route('galleryAlbums.index'));
    }

    /**
     * Remove the specified galleryAlbum from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $galleryAlbum = $this->galleryAlbumRepository->findWithoutFail($id);

        if (empty($galleryAlbum)) {
            Flash::error('Gallery Album not found');

            return redirect(route('galleryAlbums.index'));
        }

        $this->galleryAlbumRepository->delete($id);

        Flash::success('Gallery Album deleted successfully.');

        return redirect(route('galleryAlbums.index'));
    }
}
