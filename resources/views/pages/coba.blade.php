@extends('layouts.dashboard')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 mb-4 mt-1">
        <div class="d-flex flex-wrap justify-content-between align-items-center">
          <h4 class="font-weight-bold">IoT System</h4>
          <div class="vanilla-daterangepicker d-flex flex-row">
            <!-- Add content here -->
          </div>
        </div>
      </div>
      <div class="col-lg-14 col-md-12">
        <div class="row">
          @foreach ($devices as $device)
          <div class="col-md-8 col-lg-2">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div>
                    <dl>
                      <dt>Device Name:</dt>
                      <dd>{{ $device->nama_device }}</dd>
                      <dt>Status:</dt>
                      <dd>{{ $device->status }}</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
            <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                     <h4 class="font-weight-bold">Log Device</h4>
                     <div class="d-flex justify-content-between align-items-center">
                        <div><svg width="24" height="24" viewBox="0 0 24 24" fill="primary" xmlns="http://www.w3.org/2000/svg">
                              <rect x="3" y="3" width="18" height="18" rx="2" fill="#3378FF" />
                              </svg>
                           <span>Mq-2</span>
                        </div>
                        <div class="ml-3"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect x="3" y="3" width="18" height="18" rx="2" fill="#19b3b3" />
                                          </svg>
                           <span>DHT11</span>
                        </div>
                     </div>
                  </div>
                   <div id="chart-apex-column-01" class="custom-chart"></div>
                </div>
            </div>   
            </div>
         </div>
      </div>
         </div>
         
      
   </div>
@endsection