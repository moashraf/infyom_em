     <li  class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a  style="         color: white;
    font-weight: bold;
    font-size: 23px; "  href=""> <span>EN</span></a>
</li> 



     <li class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a href="{!! route('sliders.index') !!}"><i class="fa fa-edit"></i><span>Sliders</span></a>
</li>

<li class="{{ Request::is('stings*') ? 'active' : '' }}">
    <a href="{!! route('stings.index') !!}"><i class="fa fa-edit"></i><span>settings</span></a>
</li>

<li class="{{ Request::is('certificates*') ? 'active' : '' }}">
    <a href="{!! route('certificates.index') !!}"><i class="fa fa-edit"></i><span>Certificates</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{!! route('services.index') !!}"><i class="fa fa-edit"></i><span>Services</span></a>
</li>

<li class="{{ Request::is('galleryCategories*') ? 'active' : '' }}">
    <a href="{!! route('galleryCategories.index') !!}"><i class="fa fa-edit"></i><span>Gallery Categories</span></a>
</li>

<li class="{{ Request::is('galleryAlbums*') ? 'active' : '' }}">
    <a href="{!! route('galleryAlbums.index') !!}"><i class="fa fa-edit"></i><span>Gallery Albums</span></a>
</li>


 <li class="{{ Request::is('requests*') ? 'active' : '' }}">
    <a href="{!! route('requests.index') !!}"><i class="fa fa-edit"></i><span>Requests</span></a>
</li>
     
  

       <li  class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a  style="       color: white;
    font-weight: bold;
    font-size: 23px;"  href=""> <span>AR</span></a>
</li> 



<li class="{{ Request::is('slidersARs*') ? 'active' : '' }}">
    <a href="{!! route('slidersARs.index') !!}"><i class="fa fa-edit"></i><span>Sliders A Rs</span></a>
</li>

  
<li class="{{ Request::is('certificatesARs*') ? 'active' : '' }}">
    <a href="{!! route('certificatesARs.index') !!}"><i class="fa fa-edit"></i><span>Certificates A Rs</span></a>
</li>

<li class="{{ Request::is('galleryAlbumsars*') ? 'active' : '' }}">
    <a href="{!! route('galleryAlbumsars.index') !!}"><i class="fa fa-edit"></i><span>Gallery Albumsars</span></a>
</li>

<li class="{{ Request::is('galleryCategoriesARs*') ? 'active' : '' }}">
    <a href="{!! route('galleryCategoriesARs.index') !!}"><i class="fa fa-edit"></i><span>Gallery Categories A Rs</span></a>
</li>

<li class="{{ Request::is('servicesARs*') ? 'active' : '' }}">
    <a href="{!! route('servicesARs.index') !!}"><i class="fa fa-edit"></i><span>Services A Rs</span></a>
</li>



<li class="{{ Request::is('settingsARs*') ? 'active' : '' }}">
    <a href="{!! route('settingsARs.index') !!}"><i class="fa fa-edit"></i><span>Settings A Rs</span></a>
</li>

 <li class="{{ Request::is('requests*') ? 'active' : '' }}">
    <a href="{!! route('requests.index') !!}"><i class="fa fa-edit"></i><span>Requests</span></a>
</li>
     
   