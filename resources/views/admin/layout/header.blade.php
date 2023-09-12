<body class="app sidebar-mini">

    <div id="spinner">
       <img src="{{asset('admin/assets/img/svgs/loader.svg') }}" alt="loader">
    </div>

    <div id="app" class="page">
       <div class="main-wrapper" >

     
          <nav class="navbar navbar-expand-lg main-navbar">
             <a class="header-brand" href="index.html">
             
             </a>
             <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-2">
                   <li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i class="fe fe-align-justify"></i></a></li>
                   <li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fe fe-search"></i></a></li>
                </ul>
               
             </form>
             <ul class="navbar-nav navbar-right">
               
                <li>
                   <a href="#" class="navresponsive-toggler d-sm-none nav-link  nav-link-lg d-flex"  data-toggle="collapse" data-target="#navbarSupportedContent-4"
                      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                   <i class="navbar-toggler-icon fe fe-more-vertical text-white"></i>
                   </a>
                </li>
                <!-- navbar mobile-->
                @php
                    $user=Auth::user();
                @endphp
                <li class="dropdown header-user">
                   <a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg d-flex">
                   <span class=" mt-2 d-none d-lg-block ">
                   <span class="text-white"><span class="ml-1"> {{@$user->name}} </span></span>
                   </span>
                   </a>
                   <div class="dropdown-menu dropdown-menu-right">
                      <div class=" dropdown-header noti-title text-center border-bottom pb-3">
                         <h5 class="text-capitalize text-dark mb-1"></h5>
                      </div>
                     

                      <a class="dropdown-item" href="{{route('logout')}}">
                      <i class="mdi  mdi-logout-variant mr-2"></i>
                      <span>Logout</span>
                      </a>
                   </div>
                </li>
             </ul>
          </nav>
          <!--nav closed-->
          <!--navbar mobile--->
          <div class="mb-1 responsive-navbar navbar-dark d-sm-none bg-white">
             <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav navbar-right">
                   <li class="dropdown header-fullscreen">
                      <a href="#" class="nav-link nav-link-lg full-screen-link" id="fullscreen-button">
                      <i class="fe fe-maximize"></i>
                      </a>
                   </li>
                   <li class="dropdown  header-msg1">
                      <a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg ">
                      <span class="badge badge-danger nav-link-badge">3</span><i class="fe fe-mail"></i>
                      </a>
                     
                   </li>
                  
                </ul>
             </div>
          </div>
          
