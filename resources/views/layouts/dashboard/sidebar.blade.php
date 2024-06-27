<div class="iq-sidebar  sidebar-default  ">
          <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
               <a href="{{route('dashboard')}}" class="header-logo">
                  <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                  <img src="../assets/images/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
                  <span>Iot system</span>            
              </a>
              <div class="side-menu-bt-sidebar-1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                  </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="side-menu">
                      <li class="active sidebar-layout">
                          <a href="{{route('dashboard')}}" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                  </svg>
                              </i>
                              <span class="ml-2">Dashboard</span>
                          </a>
                      </li>
                      <li class="sidebar-layout">
    <a href="{{ route('users.index') }}" class="svg-icon">
        <i class="">
            <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </i><span class="ml-2">User Profile</span>
    </a>
                        </li>
                      <li class="sidebar-layout">
                          <a href="{{route('devices.index')}} " class="collapsed svg-icon" >
                              <i>
                                  <svg class="svg-icon" id="iq-ui-1" width="18" xmlns="http://www.w3.org/2000/svg" 
                                  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" style="stroke-dasharray: 97, 117; stroke-dashoffset: 0;"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">devices</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              </svg>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="{{route('logs.index')}}" class="collapsed svg-icon" >
                              <i>
                                  <svg class="svg-icon" id="iq-form-1" width="18" xmlns="http://www.w3.org/2000/svg" 
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" style="stroke-dasharray: 74, 94; stroke-dashoffset: 0;"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Logs</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              </svg>
                          </a>
                      </li>
                  </ul>
              </nav>
              <div class="pt-5 pb-5"></div>
          </div>
      </div>