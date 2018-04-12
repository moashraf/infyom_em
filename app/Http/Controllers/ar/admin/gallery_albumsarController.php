<?php

namespace App\Http\Controllers;
 use App\Models\gallery_categoriesAR;
use App\Http\Requests\Creategallery_albumsarRequest;
use App\Http\Requests\Updategallery_albumsarRequest;
use App\Repositories\gallery_albumsarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class gallery_albumsarController extends AppBaseController
{
    /** @var  gallery_albumsarRepository */
    private $galleryAlbumsarRepository;

    public function __construct(gallery_albumsarRepository $galleryAlbumsarRepo)
    {
        $this->galleryAlbumsarRepository = $galleryAlbumsarRepo;
    }

    /**
     * Display a listing of the gallery_albumsar.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->galleryAlbumsarRepository->pushCriteria(new RequestCriteria($request));
        $galleryAlbumsars = $this->galleryAlbumsarRepository->all();

        return view('gallery_albumsars.index')
            ->with('galleryAlbumsars', $galleryAlbumsars);
    }

    /**
     * Show the form for creating a new gallery_albumsar.
     *
     * @return Response
     */
    public function create()
    {
           $cat =   gallery_categoriesAR::take(55)->get();

        return view('gallery_albumsars.create')->with('cat', $cat ) ;
    }

    /**
     * Store a newly created gallery_albumsar in storage.
     *
     * @param Creategallery_albumsarRequest $request
     *
     * @return Response
     */
    public function store(Creategallery_albumsarRequest $request)
    {
      $input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;


        $galleryAlbumsar = $this->galleryAlbumsarRepository->create($input);

        Flash::success('Gallery Albumsar saved successfully.');

        return redirect(route('galleryAlbumsars.index'));
    }

    /**
     * Display the specified gallery_albumsar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $galleryAlbumsar = $this->galleryAlbumsarRepository->findWithoutFail($id);

        if (empty($galleryAlbumsar)) {
            Flash::error('Gallery Albumsar not found');

            return redirect(route('galleryAlbumsars.index'));
        }

        return view('gallery_albumsars.show')->with('galleryAlbumsar', $galleryAlbumsar);
    }

    /**
     * Show the form for editing the specified gallery_albumsar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
       $cat =   gallery_categoriesAR::take(55)->get();
          
 
         $galleryAlbumsar = $this->galleryAlbumsarRepository->findWithoutFail($id);

        if (empty($galleryAlbumsar)) {
            Flash::error('Gallery Albumsar not found');

            return redirect(route('galleryAlbumsars.index'));
        }

        return view('gallery_albumsars.edit')->with('galleryAlbumsar', $galleryAlbumsar)->with('cat', $cat ) ;
    }

    /**
     * Update the specified gallery_albumsar in storage.
     *
     * @param  int              $id
     * @param Updategallery_albumsarRequest $request
     *
     * @return Response
     */
    public function update($id, Updategallery_albumsarRequest $request)
    {$input = $request->all();

        $photoexplode = $request->photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(base_path() . '/public/data/', $imageNameGallery);
        $input['photo']=    $imageNameGallery;
        $certificatesAR = $this->certificatesARRepository->findWithoutFail($id);
        $galleryAlbumsar = $this->galleryAlbumsarRepository->findWithoutFail($id);

        if (empty($galleryAlbumsar)) {
            Flash::error('Gallery Albumsar not found');

            return redirect(route('galleryAlbumsars.index'));
        }

        $galleryAlbumsar = $this->galleryAlbumsarRepository->update( $input , $id);

        Flash::success('Gallery Albumsar updated successfully.');

        return redirect(route('galleryAlbumsars.index'));
    }

    /**
     * Remove the specified gallery_albumsar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $galleryAlbumsar = $this->galleryAlbumsarRepository->findWithoutFail($id);

        if (empty($galleryAlbumsar)) {
            Flash::error('Gallery Albumsar not found');

            return redirect(route('galleryAlbumsars.index'));
        }

        $this->galleryAlbumsarRepository->delete($id);

        Flash::success('Gallery Albumsar deleted successfully.');

        return redirect(route('galleryAlbumsars.index'));
    }
}
