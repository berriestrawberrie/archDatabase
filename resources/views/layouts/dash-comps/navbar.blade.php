 <!--LARGE SCREEN LEFT NAVIGATION-->
       <aside id="side-menu" class="bg-light-subtle border-end position-fixed d-none flex-column top-0 left-0 h-100 d-lg-flex" >
            <div class="d-flex align-items-center ms-3 ">
            <a href="{{route('home')}}"><img src="{{asset('storage/images/nea-red.png')}}" width="35"></a>
            <span ><h2 id="menu-text-title"class="ms-2 mt-2 fs-2">DADA</h2></span>
          </div>

          <ul class="d-flex flex-column p-0">
              <li ><a href="{{route('admin.dashboard')}}"><i class="bi bi-boxes fs-2"></i> <span class="menu-span">Dashboard</span></a></li>
              <li><a href="{{route('collections')}}"><i class="bi bi-archive fs-2"></i> <span class="menu-span">Add Collection</span></a></li>
              <li><a href="{{route('verify.data')}}"><i class="bi bi-clipboard-check fs-2"></i> <span class="menu-span">Verify Data</span></a></li>
              <li><a href="{{route('typeselect')}}"><i class="bi bi-plus-square fs-2"></i><span class="menu-span"> Add Artifact </span></a></li>
          </ul>
          <hr>
       </aside>
 <!--END LARGE SCREEN LEFT NAVIGATION-->

 <!--SMALL SCREEN LEFT NAVIGATION-->
        <div id="side-menu-sm" class="side-menu-sm bg-light-subtle border-end position-fixed flex-column left-0 h-100  d-lg-flex" >
          
          <ul class="d-flex flex-column p-0">
              <li ><a href="{{route('admin.dashboard')}}"><i class="bi bi-boxes fs-2"></i> <span class="menu-span">Dashboard</span></a></li>
              <li><a href="{{route('collections')}}"><i class="bi bi-archive fs-2"></i> <span class="menu-span">Add Collection</span></a></li>
              <li><a href="{{route('verify.data')}}"><i class="bi bi-clipboard-check fs-2"></i> <span class="menu-span">Verify Data</span></a></li>
              <li><a href="{{route('typeselect')}}"><i class="bi bi-plus-square fs-2"></i><span class="menu-span"> Add Artifact </span></a></li>
          </ul>
          <hr>
        </div>

  <!--END OF SMALL SCREEN LEFT NAVIGATION-->
