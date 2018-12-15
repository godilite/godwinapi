@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
              
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
             
              <p class="card-category">Registered Users</p>
              <h3 class="card-title">{{ $users_count }}
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">people</i>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Reports</p>
              <h3 class="card-title"> {{ $survey_counts }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Completed Report</p>
              <h3 class="card-title"></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">App Downloads</p>
              <h3 class="card-title">0</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <div class="ct-chart" id="dailySalesChart" style="height: 30rem"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Daily Reports</h4>
              <p class="card-category">
                <span class="text-success">Reports</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> last updated {{ $updated->created_at->diffForHumans() }}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          
            <div class="col-lg-12 col-md-12">
                    <div class="card">
                      <div class="card-header card-header-warning">
                        <h4 class="card-title">Reports</h4>
                         <p class="card-category">Most recent reports {{ date('F d, Y', strtotime($updated->created_at)) }}</p>
                      </div>
                      <div class="card-body table-responsive">
                        <table class="table table-hover">
                          <thead class="text-warning">
                            <th>Location</th>
                            <th>Supervisor</th>
                            <th>Start Date</th>
                            <th>Status</th>
                            <th>Submitted Date</th>
                          </thead>
                          <tbody>
                            @foreach ($latestReports as $latest)
                            <tr>
                                  <td>{{ $latest->location }}</td>
                                  <td>{{ $latest->user['name']}} </td>
                                  <td>{{ $latest->sd}}</td>
                                  <td>{{ $latest->sc }}</td>
                                  <td>{{ date('F d, Y', strtotime($latest->created_at)) }}</td>
                                </tr>
                            @endforeach
                           
                          </tbody>
                          {{ $latestReports->links() }}
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </div>
        <!--   Core JS Files   -->
        <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chartist JS -->
        <script src="../assets/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="../assets/js/plugins/bootstrap-notify.js"></script>
        <script>
            var reports = {!! json_encode($latestReports->count()) !!};
            var cars = {!! json_encode(23) !!};
            var theft = {!! json_encode($survey_counts) !!};
            var users = {!! json_encode($users_count) !!}
        </script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/material-dashboard.js" type="text/javascript"></script>
        <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chartist JS -->
        <script src="../assets/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="../assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
      
        <script>
          $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
      
          });
        </script>
      </body>
      
      </html>
      



@stop

