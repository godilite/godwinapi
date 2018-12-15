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
        <tbody>
     <tr>
                          <td>
                            Location
                          </td>
                          <td class="blue lighten-4">
                            {{ $form->location }}
                          </td>
     </tr><tr>
         <td>
                           Start Date                           
                            </td>
                            <td style="color:red">
                            {{ $form->sc }}
                            </td>
                   </tr>
                   <tr>      <td>
                            Survey Completed
                            </td>
                            <td style="color:red">
                             {{ $form->sd }}
                            </td>
     </tr><tr>
                            <td class="green lighten-4">
                                Equipment pickup from Supplier
                             </td>
                                  <td>
                                    {{ $form->epsc }}
                                  </td>
         </tr><tr>
                              <td class="yellow lighten-4">
                                    Personnel Departure
                                    </td>
                                    <td style="color:red">
                                     {{ $form->pdc}}
                                    </td>
                  </tr> <tr>                 <td class="yellow lighten-4">
                                    Personnel Arrival
                                    </td>
                                    <td style="color:red">
                                    {{ $form->pac }}
                                    </td>
                        </tr><tr>  <td class="yellow lighten-4">
                                        Start Date
                                        </td>    
                                <td style="color:red">
                                        {{ $form->startec }}
                                        </td>
                                    </tr>
            <tr>
                    <td class="green lighten-4">
                                Equipment on Site: Civil works Fencing & Pylon (V) 
                                </td>
                                <td>
                                     {{ $form->eosc }}
                                </td>
                            
            </tr><tr>    <td>
                                        All Excavation Completed (V)                           
                            </td>
                            <td style="color:red">
                                {{ $form->aec }}
                            </td>
                    </tr><tr>        <td>
                                Fencing Civil works Completed (V)
                            </td>
                            <td style="color:red">
                                {{ $form->fcwc }}
                            </td>
                          </tr><tr>
                                <td>
                                Pylon Civil Works Completed (V)
                             </td>
                        </tr>
                        <tr>
                             <td>
                                {{ $form->pcwc}}
                            </td>
                            </tr>
                            <tr>
                 <td class="green lighten-4">
                                Equipment pickup from Supplier: Fencing & Pylon
                             </td>
                        <td style="color:red">
                                {{ $form->epsf }}
                            </td>
                            </tr>
                    <tr> <td class="yellow lighten-4">
                            Personnel Departure: Installation-Fencing & Pylon 
                        </td>
                     <td style="color:red">
                                     {{ $form->pdf }}
                     </td>
                    </tr>
                    <tr>
                        <td class="yellow lighten-4">
                                            Personnel Arrival: Installation-Fencing & Pylon
                        </td>
                    <td style="color:red">
                                      {{ $form->paf }}
                        </td>
                    </tr>
                    <tr>
                          <td class="yellow lighten-4">
                                            Start Date: Installation-Fencing & Pylon                        
                         </td>
                            <td style="color:red">
                                      {{ $form->startf }}
                            </td>
                            </tr>
                            <tr>
                                <td class="green lighten-4">
                                            Equipment on Site: Fencing & Pylon 
                                 </td>
                                <td style="color:red">
                                       {{ $form->eosf }}
                                </td>
                            </tr>        
                            <tr>
                                    <td>
                                            Installation Pylon Completed (V)
                                    </td>
                                <td style="color:red">
                                              {{ $form->ipc }}
                                 </td>
                            </tr>
                            <tr>                
                                <td>
                                            Installation Fencing Completed (V)
                                    </td>
                                    <td style="color:red">
                                              {{ $form->ifc }}
                                    </td>
                            </tr>
                            <tr>
                                    <td>
                                                    Civil Works VSAT Completed (V)</td>
                                    <td style="color:red">
                                               {{ $form->cwvc }}
                                    </td>

                                </tr>
                                <tr>          
                             <td>
                                                Civil Works Solar or Battery Completed (V)
                                         </td>
                                    <td style="color:red">
                                                 {{ $form->cwsbc }}
                                            </td>
                                         </tr>
                                         <tr>
                                                <td class="green lighten-4">
                                                        Equipment pickup from warehouse: : Solar Materials
                                                     </td>
                                                            <td style="color:red">
                                                            {{ $form->epws }}
                                                            </td>
                                         </tr><tr>             <td class="yellow lighten-4">
                                                                    Personnel Departure: Installation-Solar Materials/Vsat Materials/BTS Materials/Wi-Fi Materials
                                                            </td>
                                                            <td style="color:red">
                                                              {{ $form->pdis }}
                                                            </td>
                                                  </tr>
                                            <tr>    <td class="yellow lighten-4">
                                                            Personnel Arrival: Installation-Solar Materials/Vsat Materials/BTS
                                                   </td>
                                                            <td style="color:red">
                                                             {{ $form->pais }}
                                                   </td>

                                            </tr><tr>            <td class="yellow lighten-4">
                                                                    Start Date: Installation-Fencing & Pylon  </td>
                                                              <td style="color:red">
                                                              {{ $form->starti }}
                                                              </td>
                                         </tr><tr>
                                                              <td class="green lighten-4">
                                                                    Equipment on Site: Solar Materials/Vsat Materials/BTS Materials/Wi-Fi Materials 
                                                                 </td>
                                                              <td style="color:red">
                                                               {{ $form->eoss }}
                                                              </td>
                                      </tr><tr><td>
                                            Installation Solar or Battary for Hub only Completed (V)
                                         </td>
                                                    <td style="color:red">
                                                  {{ $form->isc }}
                                       </td>
                                       </tr>
                                       <tr>
                                        <td>
                                            Installation BTS Completed(A) 
                                       </td>
                                          <td style="color:red">
                                            {{ $form->ibc }}
                                      </td>
                                       </tr>
                                       <tr>
                                      <td>
                                            Installation Vsat Completed (A) 
                                       </td>
                                          <td style="color:red">
                                            {{ $form->ivc }}
                                      </td>
                                       </tr>
                                       <tr>
                                      <td>
                                            Installation WiFi Completed (A) 
                                       </td>
                                          <td style="color:red">
                                            {{ $form->iwc }}
                                      </td>
                                </tr>     
                                      <tr>

                            <td class="yellow lighten-4">
                                    Personnel Departure: Commissioning (V+AFT) 
                                </td>
                                  <td style="color:red">
                                        {{ $form->pcom }}
                                            </td>
                                      </tr>
                                      <tr>
                                          <td class="yellow lighten-4">
                                            Personnel Arrival: Commissioning (V+AFT)
                                             </td>
                                              <td style="color:red">
                                                           {{ $form->pacom }}
                                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="yellow lighten-4">
                                        Start Date: Commissioning (V+AFT/SES) 
                                    </td>
                                           <td style="color:red">
                                          {{ $form->startcom }}
                                      </td>
                                      </tr>
                                      <tr>
                                <td>
                                    Commissioning Solar (V)
                                   </td>
                                 <td style="color:red">
                                     {{ $form->coms }}
                                    </td>
                                      </tr>
                                      <tr>
                                    <td>
                                
                                    Commissioning VSAT(A, SES Networks & AFT)
                                </td>
                                    <td style="color:red">
                                    {{ $form->cv }}
                                    </td>
                                      </tr>
                                      <tr>
                                    <td>
                                            Commissioning BTS (A, SES Networks & AFT)
                                        </td>
                                            <td style="color:red">
                                            {{ $form->cb }}
                                            </td>
                                      </tr>
                                      <tr>  <td>
                                                Commissioning WiFi (A, SES Networks & AFT)
                                             </td>
                                    <td style="color:red">
                                    {{ $form->cw }}
                                            </td>
                                
                                      </tr>
                                      <tr>     
                                        <td class="yellow lighten-4">
                                                Personnel Departure: Acceptance (V+AFT & Client) 
                                            </td>
                                              <td style="color:red">
                                                    {{ $form->pda }}
                                                        </td>
                                      </tr>
                                      <tr>
                                      <td class="yellow lighten-4">
                                              Personnel Arrival: Acceptance (V+AFT & Client)
                                               </td>
                                             <td style="color:red">
                                                   {{ $form->paa }}
                                               </td>
                                    <tr>         <td class="yellow lighten-4">
                                            Start Date: Acceptance (V+AFT/SES & Client) 
                                                </td>
                                                       <td style="color:red">
                                                      {{ $form->starta }}
                                            
                                                </td>
                                      </tr>
                                      <tr>
                                        
                                                <td>
                                                    Acceptance Fencing (AFT & Client)
                                               </td>
                                             <td style="color:red">
                                                 {{ $form->af }}
                                                </td>
                                      </tr><tr>   <td>
                                                    Acceptance Pylon (AFT & Client)
                                            </td>
                                                <td style="color:red">
                                                {{ $form->ap }}
                                                </td>
                                             </tr>
                                             <tr>   <td>
                                                        Acceptance Solar (AFT & Client)
                                                     </td>
                                                <td style="color:red">
                                                {{ $form->as }}
                                            </td>
                                             </tr>
                                      </tr>
                                      <td>
                                            Acceptance 3G  (SES Networks,AFT & Client)
                                        </td>
                                    <td style="color:red">
                                    {{ $form->a3g }}
                                </td>
                                <tr>
                                <td>
                                        Acceptance WiFi  (SES Networks,AFT & Client)
                                  </td>
                                <td style="color:red">
                                {{ $form->awifi }}
                            </td>
                                 
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
</div>
 
  <script>
  $(document).ready(function() {

  
var readURL = function(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('.avatar').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
  }
}


$(".file-upload").on('change', function(){
  readURL(this);
});
});
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
      @if (Session::has('success'))
          toastr.success('{{ Session::get('success') }}')
      @endif
  </script>

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