<div class="sidebar" data-background-color="brown" data-active-color="danger">
   <!--
   Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
   Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
-->
   <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-mini">
         CT
      </a>

      <a href="{{route ('stylists.index')}}" class="simple-text logo-normal">
         Admin Interface
      </a>
   </div>
   <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="344e8bae-d975-cf4b-ac3b-3c6ef3f8581e">
      <div class="user">
         <div class="photo">
            <img src="{{asset('img/faces/face-2.jpg')}}">
         </div>
         <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
               <span>
                  {{session()->get('level') === 1 ? 'SuperAdmin' : 'Admin'}}
               </span>
               <span>
                  {{session()->get('name')}}
                  <b class="caret"></b>
               </span>
            </a>
            <div class="clearfix"></div>
               <div class="collapse" id="collapseExample">
                  <ul class="nav">
                     <li>
                        <a href="#profile">
                           <span class="sidebar-mini">Mp</span>
                           <span class="sidebar-normal">My Profile</span>
                        </a>
                     </li>
                     <li>
                        <a href="#settings">
                           <span class="sidebar-mini">S</span>
                           <span class="sidebar-normal">Settings</span>
                        </a>
                     </li>
                     <li>
                        <a href="#settings">
                           <span class="sidebar-mini">L</span>
                           <a href="{{route('logout')}}">
                              <span class="sidebar-normal">Logout</span>
                           </a>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>

         <ul class="nav">
            <li>
               <a data-toggle="collapse" href="#dashboardOverview">
                  <i class="ti-panel"></i>
                  <p>General
                     <b class="caret"></b>
                  </p>
               </a>
               <div class="collapse" id="dashboardOverview">
                  <ul class="nav">
                     <li>
                        <a href="#panda">
                           <span class="sidebar-mini">C1</span>
                           <span class="sidebar-normal">Collapse 1</span>
                        </a>
                     </li>
                     <li>
                        <span class="sidebar-mini">C2</span>
                        <span class="sidebar-normal">Collapse 2</span>
                     </li>
                  </ul>
               </div>
            </li>

            <li>
               <a href="calendar.html">
                  <i class="ti-calendar"></i>
                  <p>Simple Link</p>
               </a>
            </li>
         </ul>
      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
         <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
      </div>
      <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
         <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
      </div>
   </div>
</div>