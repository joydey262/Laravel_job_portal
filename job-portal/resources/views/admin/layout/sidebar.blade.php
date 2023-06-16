<div class="sidebar" data-color="green">
    <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Job Portal
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            @if(Auth::guard('admin')->user()->type=="employer")<!-- Analytics -->
            <li class="{{ 'admin/dashboard' == request()->path() ? 'active' : '' }}">
                <a href="">
                    <i class="now-ui-icons design_app"></i>
                    <p style="font-size:12px;">Analytics</p>
                </a>
            </li>
            <!-- Add jobs -->
            <li>
                <a href=#>
                    <i class="now-ui-icons design_app"></i>
                    <p style="font-size:12px;">Add New Job</p>
                </a>
            </li>
            <!-- CV bank -->
            <li>
                <a href="#">
                    <i class="now-ui-icons design_app"></i>
                    <p style="font-size:12px;">CV bank</p>
                </a>
            </li> 
            <!-- Communication -->
            <li>
                <a href="#">
                    <i class="now-ui-icons design_app"></i>
                    <p style="font-size:12px;">Communication</p>
                </a>
            </li>
            <!-- Settings -->
            <li class="{{ 'admin/update-employer-details/personal' == request()->path() ? 'active2' : '' }} || {{ 'admin/update-employer-details/personal' == request()->path() ? 'active2' : '' }} ">
                <!-- <a data-toggle="collapse" href="#settings"> -->
                <a data-toggle="collapse" href="#settings" aria-expanded="false" class="">
                    <i class="now-ui-icons ui-1_settings-gear-63"></i>
                    <p style="font-size:12px;">Settings <b class="caret"></b></p>
                </a>
               <div class="collapse show" id="settings">
                  <ul class="nav">
                     <li class="{{'admin/update-employer-details/personal' == request()->path() ? 'active' : '' }}">
                        <a href="{{url('admin/update-employer-details/personal')}}">
                            <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                            <span class="sidebar-normal"> Update personal details </span>
                        </a>
                     </li>
                    <!-- 
                     <li class="{{'admin/update-admin-password' == request()->path() ? 'active' : '' }}">
                        <a href="{{url('admin/update-admin-password')}}">
                            <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                            <span class="sidebar-normal"> Update password </span>
                        </a>
                     </li> -->
                     <!-- 
                     <li class="{{'admin/update-admin-details' == request()->path() ? 'active' : '' }}">
                        <a href="{{url('admin/update-employer-details/')}}">
                            <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                            <span class="sidebar-normal"> Update instution details </span>
                        </a>
                     </li>
                     <li class="{{'admin/update-admin-details' == request()->path() ? 'active' : '' }}">
                        <a href="{{url('admin/update-employer-details/')}}">
                            <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                            <span class="sidebar-normal"> Update banking details </span>
                        </a>
                     </li> -->
                  </ul>
               </div>
            </li>
            @else
            <!-- Analytics -->
            <li class="{{ 'admin/dashboard' == request()->path() ? 'active' : '' }}">
                <a href="{{url('admin/dashboard')}}">
                    <i class="now-ui-icons design_app"></i>
                    <p style="font-size:12px;">Analytics</p>
                </a>
            </li>
            <!-- Add jobs -->
            <li>
                <a href=#>
                    <i class="now-ui-icons design_app"></i>
                    <p style="font-size:12px;">Add New Job</p>
                </a>
            </li>
            <!-- CV bank -->
            <li>
                <a href="#">
                    <i class="now-ui-icons design_app"></i>
                    <p style="font-size:12px;">CV bank</p>
                </a>
            </li> 
            <!-- Communication -->
            <li>
                <a href="#">
                    <i class="now-ui-icons design_app"></i>
                    <p style="font-size:12px;">Communication</p>
                </a>
            </li>
            <!-- Settings -->
            <li class="{{ 'admin/update-admin-password' == request()->path() ? 'active2' : '' }} || {{ 'admin/update-admin-details' == request()->path() ? 'active2' : '' }} ">
                <!-- <a data-toggle="collapse" href="#settings"> -->
                <a data-toggle="collapse" href="#settings" aria-expanded="false" class="">
                    <i class="now-ui-icons ui-1_settings-gear-63"></i>
                    <p style="font-size:12px;">Settings <b class="caret"></b></p>
                </a>
               <div class="collapse show" id="settings">
                  <ul class="nav">
                     <li class="{{'admin/update-admin-password' == request()->path() ? 'active' : '' }}">
                        <a href="{{url('admin/update-admin-password')}}">
                            <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                            <span class="sidebar-normal"> Update password </span>
                        </a>
                     </li>
                     <li class="{{'admin/update-admin-details' == request()->path() ? 'active' : '' }}">
                        <a href="{{url('admin/update-admin-details')}}">
                            <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                            <span class="sidebar-normal"> Update details </span>
                        </a>
                     </li>
                  </ul>
               </div>
            </li>
            @endif
            <!--<li>
                <a data-toggle="collapse" href="#settings">
                    <i class="now-ui-icons ui-1_settings-gear-63"></i>
                    <p style="font-size:12px;">Settings <b class="caret"></b></p>
                </a>
               <div class="collapse " id="settings">
                  <ul class="nav">
                     <li class="{{'admin/update-admin-password' == request()->path() ? 'active' : '' }}">
                        <a href="{{url('admin/update-admin-password')}}">
                            <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                            <span class="sidebar-normal"> Update password </span>
                        </a>
                     </li>
                     <li>
                        <a href="../examples/maps/fullscreen.html">
                            <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                            <span class="sidebar-normal"> Update details </span>
                        </a>
                     </li>
                  </ul>
               </div>
            </li> -->
            <!-- <li>
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="{{ 'admin/update-admin-password' == request()->path() ? 'true' : '' }}" data-target="#submenu-1" aria-controls="submenu-1">
                    <i class="now-ui-icons ui-1_settings-gear-63"></i>
                    <p style="font-size:12px;">Settings<b class="caret"></b></p>
                </a>
                <div id="submenu-1" class="collapse submenu" style="">
                    <ul class="nav flex-column">
                        <li class="{{ 'admin/update-admin-password' == request()->path() ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('admin/update-admin-password')}}">
                                <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                                <p>Update password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/update-admin-details')}}">
                                <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                                <p>Update details</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <!-- <li>
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
                    <i class="now-ui-icons ui-1_settings-gear-63"></i>
                    <p style="font-size:12px;">Option 3<b class="caret"></b></p>
                </a>
                <div id="submenu-2" class="collapse submenu" style="">
                    <ul class="nav flex-column">
                        <li class="">
                            <a class="nav-link" href="pages/form-elements.html">
                                <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                                <p>Update password</p>
                            </a>
                        </li>
                        <li class="">
                            <a class="nav-link" href="pages/form-validation.html">
                                <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                                <p>Update details</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <!--<li>
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">
                    <i class="now-ui-icons ui-1_settings-gear-63"></i>
                    <p style="font-size:12px;">option 4<b class="caret"></b></p>
                </a>
                <div id="submenu-3" class="collapse submenu" style="">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/form-elements.html">
                                <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                                <p>Update password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/form-validation.html">
                                <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 15px;"></i>
                                <p>Update details</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
        </ul>
    </div>
</div>



<!--<li>
        <a href="examples/icons.html">
            <i class="now-ui-icons education_atom"></i>
            <p>Icons</p>
        </a>
    </li>
    <li>
        <a href="examples/map.html">
            <i class="now-ui-icons location_map-big"></i>
            <p>Maps</p>
        </a>
    </li>
    <li>
        <a href="notifications.html">
            <i class="now-ui-icons ui-1_bell-53"></i>
            <p>Notifications</p>
        </a>
    </li>
    <li>
        <a href="examples/user.html">
            <i class="now-ui-icons users_single-02"></i>
            <p>User Profile</p>
        </a>
    </li>
    <li>
        <a href="examples/tables.html">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Table List</p>
        </a>
    </li>
    <li>
        <a href="examples/typography.html">
            <i class="now-ui-icons text_caps-small"></i>
            <p>Typography</p>
        </a>
    </li>
    <li class="active-pro">
        <a href="examples/upgrade.html">
            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
            <p>Settings</p>
        </a>
    </li> 
-->
<!-- background-color: hsla(0,0%,100%,.1); -->