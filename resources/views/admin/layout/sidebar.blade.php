            <!-- Sidebar menu-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar toggle-sidebar">
                <div class="app-sidebar__user">
                    <div class="user-body">
                       
                    </div>
                    <div class="user-info">
                        <a href="#" class=""><span class="app-sidebar__user-name font-weight-semibold">
                                </span><br>
                            <span class="text-muted app-sidebar__user-designation text-sm">HealthMind</span>
                        </a>
                    </div>
                </div>
                <ul class="side-menu toggle-menu">
                    <li>
                        <a class="side-menu__item" href="{{route('dashboard')}}">
                            <i class="side-menu__icon fa fa-tachometer" aria-hidden="true"></i>
                            <span class="side-menu__label">Dashboard</span>
                        </a>
                    </li>
@php
    $user=Auth::user();
@endphp
@if($user->role=='Admin'){
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">

                            <i class="side-menu__icon fa fa-list" aria-hidden="true"></i>
                            <span class="side-menu__label">Users</span>
                            <i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            
                            <li><a class="slide-item" href="{{route('userlist')}}"><span>View List</span></a>
                            </li>

                        </ul>
                    </li>
                }
                @else 
                @endif



                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="#">

                            <i class="side-menu__icon fa fa-globe" aria-hidden="true"></i>
                            <span class="side-menu__label">Blogs</span>
                            <i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            {{-- <li><a class="slide-item" href=""><span>Add About</span></a></li> --}}
                            <li><a class="slide-item" href="{{route('blogs.index')}}"><span>View Blogs</span></a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a class="side-menu__item" href="{{route('change-password')}}">
                            <i class="side-menu__icon fa fa-tachometer" aria-hidden="true"></i>
                            <span class="side-menu__label">Change Password</span>
                        </a>
                    </li>


                   
                    
                   


                   


                   
                   
                  


                  



                   


                  



                  
                  








                </ul>
            </aside> 

        
