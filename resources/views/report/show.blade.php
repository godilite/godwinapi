@extends('layouts.app')

@section('content')
<br>
<div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Field Survey Report</h4>
                  <p class="card-category"> Here is a summary of daily reports</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Supervisor
                        </th>
                        <th>
                          Location
                        </th>
                        <th>
                         Project Status 
                        </th>
                        <th>
                            
                        
                            Actions
                        </th>
                        
                      </thead>
                      <tbody>
                            @foreach ($reports as $r)
                        <tr>
                          <td>
                            {{ $r->user['name'] }}
                          </td>
                          <td>
                            {{ $r->location }}
                          </td>
                          <td>
                              @if ($r->survey)
                                Completed
                            @else
                               In Progress
                            @endif
                          </td>
                          <td class="text-primary">
                                <a href="{{ route('surveys',['id'=>$r->survey_id]) }}" class = "btn btn-light btn-sm border float-left">view</a>
                            
                          </td>
                          <td class="text-primary">
                            <a href="{{ route('update',['id'=>$r->survey_id]) }}" class = "btn btn-success btn-sm border float-left">edit</a>
                      </td>
                      <td class="text-primary">
                        <a href="{{ route('delete',['id'=>$r->survey_id]) }}" class = "btn btn-danger btn-sm border float-left">delete</a>
                    
                  </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>{{$reports->links()}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  @endsection