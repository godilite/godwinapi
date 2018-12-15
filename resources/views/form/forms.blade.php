@extends('layouts.app')

@section('content')
<br>
<div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Surveys</h4>
                  <p class="card-category"> Here is a summary of daily survey</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                            Start date
                        </th>
                        <th>
                            Location
                          
                        </th>
                       <th>
                         Project Status 
                        </th>
                      </thead>
                      <tbody>
                            @foreach ($forms as $form)
                        <tr>
                          <td>
                            {{ $form->id }}
                          </td>
                          <td>
                            {{ $form->sd }}
                          </td>
                          <td>
                                {{ $form->report->location }}                      
                          </td>
                        
                          <td>
                              <a href="{{ route('form.show',['id'=>$form->id]) }}" class = "btn btn-light btn-sm border float-right">view</a>
                           
                            @if ($form->status)
                                Completed
                            @else
                                Incomplete
                            @endif
                          </td>
                        </tr>
                        @endforeach
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
  @endsection