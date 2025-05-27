<!--HEADER WRAPPER-->
<div class="dash-head border-end  d-flex justify-content-between justify-content-lg-end align-items-center p-2">
    <button id="open-btn" class="icon btn border rounded-3 d-lg-none" onclick=expandMenu()><i class="bi bi-menu-app"></i></button>
    <button id="close-btn" class="d-none icon btn border rounded-3 d-lg-none" onclick=closeMenu()><i class="bi bi-x-lg"></i></button>
    <div class="d-flex d-lg-none">
        <img  src="{{asset('storage/images/nea-red.png')}}" width="40" height="40">
        <h2>DADA</h2>
    </div>
    <!--DOT MENU FOR SMALL SCREENS-->
    <div class="d-inline-flex d-lg-none">
        <button class="btn" onclick=extraMenu() ><i class="bi bi-three-dots"></i></button>
    </div>
    <!--END OF DOT MENU FOR SMALL SCREENS-->

    <!--DROP DOWN ONLY VISIBLE ON LARGE SCREENS-->
    <div class="d-none d-lg-flex align-items-center justify-content-evenly gap-2">
        <button class="icon btn rounded-circle border" onclick=setTheme() ><i id="top-theme" class="bi bi-moon-fill" ></i></button>
        <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Person Name
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <img class="rounded-circle border"  src="{{asset('storage/images/avatar.png')}}" height="50" width="50">
    </div>
    <!--END OF DROP DOWN ONLY VISIBLE ON LARGE SCREENS-->

</div><!--END HEADER WRAPPER-->

<!--SECONDARY MENU FOR SMALL SCREENS-->
<div class="border w-100 d-none d-lg-none justify-content-end gap-2 p-2" id="extra-menu">
      <button class="icon btn border rounded-circle" onclick=setTheme()><i id="bottom-theme" class="bi bi-moon-fill"></i></button>
        <div class="dropdown">
            <button class="btn text-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Person Name
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <img class="rounded-circle border"  src="{{asset('storage/images/avatar.png')}}" height="50" width="50">
    </div>
</div>
<!--END SECONDARY MENU FOR SMALL SCREENS-->