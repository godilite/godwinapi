@extends('layouts.app')
<style>
        #form1, #form2, #form3, #form4, #form5, #form6, #form7, #form8, #form9{
                display: none
        }
</style>
@section('content')

  <div class="container">
<div class="container">
    <div class="row text-left">
       <div class="col-md-12">
            <div class="card">
                <div class="card-header date-center">Update Report</div>
                                <table>
                    <thead>
                        <th>
                            <a href="{{ route('report.show') }}" class = "btn btn-light btn-sm border float-left">Back</a>
                        </th>
                        <th>
                                <a href="{{ route('attachment',['id'=>$report->survey_id]) }}" class = "btn btn-secondary btn-sm border float-right">view attachments</a>
                            
                        </th>
                    </thead>
                </table>

                <button onclick="one()" class="text-left"> <strong> + Project Phase 1 -  Details</strong></button>        
        </div>
                
                <div id="form1" class="card container">
                    <form action = "{{ route('report.update',['survey_id'=>$report['survey_id']]) }}" method="post" > 
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-md-4">                                    
                         <div class="form-group" style="color:#000">          
                            <label for="location">
                              Location
                            </label><br>
                            <input type="text" value="{{ $report->location }}" name="location" id="location">
                          </div>
                        </div>
                        <div class="col-md-4">
                         <div class="form-group" style="color:#000">          
                              <label for="sc">
                              Survey Completed
                              </label><br>
                         <input type="date" value="{{ $report->sc }}" name="sc" id="sc">
                        </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                              <label for="sd">
                              Start Date
                              </label><br>
                              <input type="date" value="{{ $report->sd }}" name="sd" id="sd">
                                </div>
                        </div>
                </div> 
                <button type=  "submit" method= "post" onclick = "location.href = '{{ route('report.update',['survey_id'=>$report['survey_id']])}}';" id = "savebutton" name = "button">Add Now</button>
        </form>                                       
        </div>
        <div class="card">
        <button onclick="two()" class="text-left"> <strong> + Phase 2 - Civil Works</strong></button>
</div>
  <div id = "form2" class="card container">
                <form action="{{ route('report.update',['survey_id'=>$report['survey_id']]) }}" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-md-4">
                        <div class="form-group" style="color:#000">                
                        <label for="epsc" class="green" style="color:white">
                                  Equipment pickup from Supplier
                               </label><br>
                               <input type="date" value="{{ $report->epsc }}" name="epsc" id="epsc">
                        </div>
                        </div>
                    <div class="col-md-4">
                                <div class="form-group" style="color:#000">         
                                <label for="pdc" class="green" style="color:white">
                                      Personnel Departure Civil works
                                      </label><br>
                                      <input type="date" value="{{ $report->pdc }}" name="pdc" id="pdc">
                                </div>
                        </div>
                    
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">              
                        <label for="pac" class="green" style="color:white">
                                      Personnel Arrival Civil Works
                                      </label><br>
                                      <input type="date" value="{{ $report->pac }}" name="pac" id="pac">
                                </div>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                            <label for="startec" class="green" style="color:white">
                                          Start Date
                                          </label><br>    
                                  <input type="date" value="{{ $report->startec }}" name="startec" id="startec">
                                </div>
                        </div>
                    </div>
                    <button type=  "submit" method= "post" onclick = "location.href = '{{ route('report.update',['survey_id'=>$report['survey_id']])}}';" id = "savebutton" name = "button">Add Now</button>
                </form>
       </div>
    <div class="card">         
        <button onclick="three()" class="text-left"> <strong> + Phase 3 - Civil works Fencing & Pylon</strong></button>  
    </div>
    <div id="form3" class="card container">
        <form action="{{ route('report.update',['survey_id'=>$report['survey_id']]) }}">                
                @csrf
                <div class="row">
                <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                      <label for="eosc" class="green" style="color:white">
                                  Equipment on Site: Civil works Fencing & Pylon (V) 
                                  </label><br>
                                  <input type="date" value="{{ $report->eosc }}" name="eosc" id="eosc">
                                </div>
                        </div>
                    
                    <div class="col-md-4">
                        <div class="form-group" style="color:#000">          
                          <label for="aec">
                                      All Excavation Completed (V)                           
                            </label><br>
                                <input type="date" value="{{ $report->aec }}" name="aec" id="aec">
                                </div>
                        </div>
                
                    <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                        <label for="fcwc">
                                  Fencing Civil works Completed (V)
                              </label><br>
                              <input type="date" value="{{ $report->fcwc }}" name="fcwc" id="fcwc">
                                </div>
                        </div>
        </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                              <label for="pcwc">
                                  Pylon Civil Works Completed (V)
                               </label><br>
                              <input type="date" value="{{ $report->pcwc }}" name="pcwc" id="pcwc">
                                </div>
                        </div></div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.update',['survey_id'=>$report['survey_id']])}}';" id = "savebutton" name = "button">Add Now</button>
        </form>
       </div>
       <div class="card">
       <button onclick="four()" class="text-left"><strong>  + Phase 4 - Fencing & Pylon </strong></button>
       </div>
        <div id="form4" class="card container">
                            <form action="{{ route('report.update',['survey_id'=>$report['survey_id']]) }}" method="POST">
                         <div class="row">
                                <div class="col-md-4">
                                <div class="form-group" style="color:#000">         
                   <label for="epsf" class="green" style="color:white">
                                  Equipment pickup from Supplier: Fencing & Pylon
                               </label><br>
                               <input type="date" value="{{ $report->epsf }}" name="epsf" id="epsf">
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                          <label for="pdf" class="green" style="color:white">
                              Personnel Departure: Installation-Fencing & Pylon 
                          </label><br>
                            <input type="date" value="{{ $report->pdf }}" name="pdf" id="pdf">
                                </div>
                        </div>

                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                          <label for="paf" class="green" style="color:white">
                                              Personnel Arrival: Installation-Fencing & Pylon
                          </label><br>
                                <input type="date" value="{{ $report->paf }}" name="paf" id="paf">
                                </div>
                        </div>
                    </div>
                        <div class="row">
                    <div class="col-md-4">
                                <div class="form-group" style="color:#000">         
                          <label for="startf" class="green" style="color:white">
                                              Start Date: Installation-Fencing & Pylon                        
                           </label><br>
                            <input type="date" value="{{ $report->startf }}" name="startf" id="starf">
                        </div>
                        </div>
                </div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.update',['survey_id'=>$report['survey_id']])}}';" id = "savebutton" name = "button">Add Now</button>
                
                </form>
             </div>
        <div class="card">
       <button onclick="five()" class="text-left"><strong>  + Phase 5 Solar BTS VSAT</strong></button>
        </div>
            <div id ="form5" class="card container">
                             <form action="{{ route('report.update',['survey_id'=>$report['survey_id']]) }}" method="post">
                                     @csrf
                                     <div class="row">
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">              
                        <label for="eosf" class="green" style="color:white">
                                              Equipment on Site: Fencing & Pylon 
                                   </label><br>
                                    <input type="date" value="{{ $report->eosf }}" name="eosf" id="eosf">
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                        <label for="ipc">
                                              Installation Pylon Completed (V)
                                      </label><br>
                                  <input type="date" value="{{ $report->ipc }}" name="ipc" id="ipc">
                                </div>
                        </div>          
                        
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">                
                        <label for="ifc">
                                 Installation Fencing Completed (V)
                          </label><br>
                          <input type="date" value="{{ $report->ifc }}" name="ifc" id="ifc">
                                </div>
                        </div>
                    </div>
                    
                    <div class="row">
                                <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                   
                                <label for="cwvc">
                                                      Civil Works VSAT Completed (V)</label><br>
                                      <input type="date" value="{{ $report->cwvc }}" name="cwvc" id="cwvc">
                                        </div>
                                </div>
  
                                <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                    
                                           <label for="cwsbc">
                                                  Civil Works Solar or Battery Completed (V)
                                           </label><br>
                                   <input type="date" value="{{ $report->cwsbc }}" name="cwsbc" id="cwsbc">
                                        </div>
                                </div>
                        </div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.update',['survey_id'=>$report['survey_id']])}}';" id = "savebutton" name = "button">Add Now</button>
                    </form>
                </div>
        <div class="card">
                <button onclick="six()" class="text-left"><strong>  + Phase 6 - Solar BTS VSAT</strong></button>
        </div>
                        <div id="form6" class="card container">
                                <form action="{{ route('report.update',['survey_id'=>$report['survey_id']]) }}" method="POST">
                                @csrf
                                <div class="row">
                                <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                  
                                  <label for="epws" class="green" style="color:white">
                                                          Equipment pickup from warehouse: : Solar Materials
                                                       </label><br>
                                        <input type="date" value="{{ $report->epws }}" name="epws" id="epws">
                                        </div>
                                </div>

                                <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                 
                                   <label for="pdis" class="green" style="color:white">
                                                                Personnel Departure: Installation-Solar Materials/Vsat Materials/BTS Materials/Wi-Fi Materials
                                          </label><br>
                                    <input type="date" value="{{ $report->pdis }}" name="pdis" id="pdis">
                                        </div>
                                </div>
                   <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                  
                                <label for="pais" class="green" style="color:white">
                                              Personnel Arrival: Installation-Solar Materials/Vsat Materials/BTS
                                             </label><br>
                                               <input type="date" value="{{ $report->pais }}" name="pais" id="pais"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group" style="color:#000">          
                                                    <label for="eoss" class="green" style="color:white">
                                                        Start Date: Installation-Fencing & Pylon  
                                                    </label><br>
                                                    <input type="date" value="{{ $report->starti }}" name="starti" id="starti">
                                            </div>
                                        </div>
                    </div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.update',['survey_id'=>$report['survey_id']])}}';" id = "savebutton" name = "button">Add Now</button>
               
                 </form>
                </div>
              <div class="card">  <button onclick="seven()" class="text-left"> <strong> + Installation Phase</strong></button>
              </div>
               <div id="form7" class="card container">
                    <form action="{{ route('report.update',['survey_id'=>$report['survey_id']]) }}" method="post"> 
                    @csrf
                    <div class="row">
                    <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                          
                                                <label for="eoss" class="green" style="color:white">
                                                  Equipment on Site: Solar Materials/Vsat Materials/BTS Materials/Wi-Fi Materials 
                                                </label><br>
                                                <input type="date" value="{{ $report->eoss }}" name="eoss" id="eoss">
                                                </div>
                                        </div>                   
                    
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                                                 
                                              <label for="isc">
                                              Installation Solar or Battary for Hub only Completed (V)
                                           </label><br>
                                          <input type="date" value="{{ $report->isc }}" name="isc">
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                          
                                          <label for="ibc">
                                              Installation BTS Completed(A) 
                                         </label><br>
                                            <input type="date" value="{{ $report->ibc }}" name="ibc">
                                                </div>
                                        </div>
                    </div>
                       <div class="row">                 
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                             
                                        <label for="ivc">
                                              Installation Vsat Completed (A) 
                                         </label><br>
                                         <input type="date" value="{{ $report->ivc }}" name="ivc" id="ivc">
                                                </div>
                                </div>
                    <div class="col-md-4">
                                  <div class="form-group" style="color:#000">                            
                                        <label for="iwc">
                                              Installation WiFi Completed (A) 
                                         </label><br>
                                            <input type="date" value="{{ $report->iwc }}" name="iwc">
                                                </div>
                                        </div>
                    </div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.update',['survey_id'=>$report['survey_id']])}}';" id = "savebutton" name = "button">Add Now</button>
               
                    </form> 
                    </div>
              <div class="card">      
                <button onclick="eight()" class="text-left"><strong>  + Commissioning Phase </strong> </button>          
              </div>
               <div id="form8" class="card container">
                    @csrf        <form action="{{ route('report.update',['survey_id'=>$report['survey_id']]) }}">
                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                         
                                      <label for="" class="green" style="color:white">
                                      Personnel Departure: Commissioning (V+AFT) 
                                  </label><br>
                                    <input type="date" value="{{ $report->pcom }}" name="pcom">
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">          
                                                     <label for="pacom" class="green" style="color:white">
                                              Personnel Arrival: Commissioning (V+AFT)
                                               </label><br>
                                                <input type="date" value="{{ $report->pacom }}" name="pacom">
                                                </div>
                                        </div>                         
                                                            
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">          
                                                <label for="startcom" class="green" style="color:white">
                                              Start Date: Commissioning (V+AFT/SES) 
                                      </label><br>
                                             <input type="date" value="{{ $report->startcom }}" name="startcom">
                                                </div>
                                        </div>
                                </div>   
                    <div class="row">
                    <div class="col-md-4">
                               <div class="form-group" style="color:#000">                                  
                                  <label for="coms">
                                      Commissioning Solar (V)
                                     </label><br>
                                   <input type="date" value="{{ $report->coms }}" name="coms">
                                    </div>
                                </div>
                             <div class="col-md-4">
                                     <div class="form-group" style="color:#000">                          
                                      <label for="cv">
                                      Commissioning VSAT(A, SES Networks & AFT)
                                    </label><br>
                                      <input type="date" value="{{ $report->cv }}" name="cv">
                                                </div>
                                        </div>     
                    <div class="col-md-4">
                              <div class="form-group" style="color:#000">                          
                                  <label for="cb">
                                      Commissioning BTS (A, SES Networks & AFT)
                                  </label><br>
                                 <input type="date" value="{{ $report->cb }}" name="cb">
                                </div>
                        </div>
                    </div>
                    <div class="row"> 
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">          
                                                      <label for="cw">
                                                  Commissioning WiFi (A, SES Networks & AFT)
                                               </label><br>
                                      <input type="date" value="{{ $report->cw }}" name="cw">
                                                </div>
                                        </div>
                    </div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.update',['survey_id'=>$report['survey_id']])}}';" id = "savebutton" name = "button">Add Now</button>  
                                </form>
                    </div>
              <div class="card">      
                <button onclick="nine()" class="text-left"> <strong> + Acceptance Phase</strong></button>        
              </div>
                <div id="form9" class="card container">
                         @csrf       <form action="{{ route('report.update',['survey_id'=>$report['survey_id']]) }}">
                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                          
                                        <label for="pda" class="green" style="color:white">
                                                  Personnel Departure: Acceptance (V+AFT & Client) 
                                              </label><br>
                                                <input type="date" value="{{ $report->pda }}" name="pda">
                                                </div>
                                        </div>
                                    <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                          
                                                <label for="paa">
                                                          Personnel Arrival: Acceptance (V+AFT & Client)
                                                        </label><br>
                                                        <input type="date" value="{{ $report->paa }}" name="paa">
                                                </div>
                                            </div>
                             <div class="col-md-4">
                                 <div class="form-group" style="color:#000">                                                          
                                    <label for="starta">
                                         Start Date: Acceptance (V+AFT/SES & Client) 
                                    </label><br>
                                        <input type="date" value="{{ $report->starta }}" name="starta">
                                </div>
                            </div>
                    </div>     

                    <div class="row">
                             <div class="col-md-4">
                                    <div class="form-group" style="color:#000">                              
                                    <label for="af">
                                        Acceptance Fencing (AFT & Client)
                                    </label><br>
                                     <input type="date" value="{{ $report->af }}" name="af">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" style="color:#000">                                
                                    <label for="ap">
                                     Acceptance Pylon (AFT & Client)
                                    </label><br>
                                    <input type="date" value="{{ $report->ap }}" name="ap">
                                </div>
                            </div>   
                                    
                    <div class="col-md-4">
                            <div class="form-group" style="color:#000">         
                                    <label for="as">
                                     Acceptance Solar (AFT & Client)
                                    </label><br>
                                <input type="date" value="{{ $report->as }}" name="as">
                                    </div>
                            </div>
                    </div>  
                    <div class="row">
                            <div class="col-md-4">
                                <div class="form-group" style="color:#000">                              
                                <label for="a3g">
                                    Acceptance 3G  (SES Networks,AFT & Client)
                                </label><br>
                            <input type="date" value="{{ $report->a3g }}" name="a3g">
                                    </div>
                         </div>
                    <div class="col-md-4">
                         <div class="form-group" style="color:#000">                              
                            <label for ="awifi">
                                    Acceptance WiFi  (SES Networks,AFT & Client)
                            </label><br>
                         <input type="date" value="{{ $report->awifi }}" name="awifi">
                                </div>
                            </div>     
                    </div><button type=  "submit" method= "post" onclick = "location.href = '{{ route('report.update',['survey_id'=>$report['survey_id']])}}';" id = "savebutton" name = "button">Add Now</button>
                </form>                      
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function one(){
        var x = document.getElementById("form1");
        if(x.style.display==='none'){
                x.style.display="block";
        }else{
                x.style.display="none";
        }
        }
        function two(){
                var x = document.getElementById("form2");
                if(x.style.display==='none'){
                        x.style.display="block";
                }else{
                        x.style.display="none";
                }
                }
function three(){
   var x = document.getElementById("form3");
 if(x.style.display==='none'){
 x.style.display="block";
        }else{
         x.style.display="none";
 }
}
 
function four(){
var x = document.getElementById("form4");
if(x.style.display==='none'){
x.style.display="block";
}else{
x.style.display="none";
}
}
function five(){
        var x = document.getElementById("form5");
        if(x.style.display==='none'){
        x.style.display="block";
        }else{
        x.style.display="none";
        }
} 
function six(){
var x = document.getElementById("form6");
if(x.style.display==='none'){
x.style.display="block";
}else{
x.style.display="none";
}
}
function seven(){
        var x = document.getElementById("form7");
        if(x.style.display==='none'){
        x.style.display="block";
        }else{
        x.style.display="none";
        }
        }        
function eight(){
var x = document.getElementById("form8");
if(x.style.display==='none'){
x.style.display="block";
}else{
x.style.display="none";
}
}
function nine(){
        var x = document.getElementById("form9");
        if(x.style.display==='none'){
        x.style.display="block";
        }else{
        x.style.display="none";
        }
        }
</script>
<script>
        var changeInput = function (val){
     var input = document.getElementById("cat_id");
         input.value = val;
            }
   </script> 
@endsection
