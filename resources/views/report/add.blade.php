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
                <div class="card-header date-center">Create a New Report</div>
                <button onclick="one()" class="text-left"> <strong> + Project Phase 1 -  Details</strong></button>        
        </div>
                
                <div id="form1" class="card container">
                    <form action = "{{ route('report.create') }}" method="post" > 
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-md-4">                                    
                         <div class="form-group" style="color:#000">          
                            <label for="location">
                              Location
                            </label><br>
                            <input type="text" name="location" id="location">
                          </div>
                        </div>
                        <div class="col-md-4">
                         <div class="form-group" style="color:#000">          
                              <label for="sc">
                              Survey Completed
                              </label><br>
                         <input type="date" name="sc" id="sc">
                        </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                              <label for="sd">
                              Start Date
                              </label><br>
                              <input type="date" name="sd" id="sd">
                                </div>
                        </div>
                </div> 
                <button type=  "submit" method= "post" onclick = "location.href = '{{route('report.create')}}';" id = "savebutton" name = "button">Add Now</button>
        </form>                                       
        </div>
        <div class="card">
        <button onclick="two()" class="text-left"> <strong> + Phase 2 - Civil Works</strong></button>
</div>
  <div id = "form2" class="card container">
                <form action="{{ route('report.create') }}" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-md-4">
                        <div class="form-group" style="color:#000">                
                        <label for="epsc" class="green" style="color:white">
                                  Equipment pickup from Supplier
                               </label><br>
                               <input type="date" name="epsc" id="epsc">
                        </div>
                        </div>
                    <div class="col-md-4">
                                <div class="form-group" style="color:#000">         
                                <label for="pdc" class="green" style="color:white">
                                      Personnel Departure Civil works
                                      </label><br>
                                      <input type="date" name="pdc" id="pdc">
                                </div>
                        </div>
                    
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">              
                        <label for="pac" class="green" style="color:white">
                                      Personnel Arrival Civil Works
                                      </label><br>
                                      <input type="date" name="pac" id="pac">
                                </div>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                            <label for="startec" class="green" style="color:white">
                                          Start Date
                                          </label><br>    
                                  <input type="date" name="startec" id="startec">
                                </div>
                        </div>
                    </div>
                    <button type=  "submit" method= "post" onclick = "location.href = '{{route('report.create')}}';" id = "savebutton" name = "button">Add Now</button>
                </form>
       </div>
    <div class="card">         
        <button onclick="three()" class="text-left"> <strong> + Phase 3 - Civil works Fencing & Pylon</strong></button>  
    </div>
    <div id="form3" class="card container">
        <form action="{{ route('report.create') }}">                
                @csrf
                <div class="row">
                <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                      <label for="eosc" class="green" style="color:white">
                                  Equipment on Site: Civil works Fencing & Pylon (V) 
                                  </label><br>
                                  <input type="date" name="eosc" id="eosc">
                                </div>
                        </div>
                    
                    <div class="col-md-4">
                        <div class="form-group" style="color:#000">          
                          <label for="aec">
                                      All Excavation Completed (V)                           
                            </label><br>
                                <input type="date" name="aec" id="aec">
                                </div>
                        </div>
                
                    <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                        <label for="fcwc">
                                  Fencing Civil works Completed (V)
                              </label><br>
                              <input type="date" name="fcwc" id="fcwc">
                                </div>
                        </div>
        </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                              <label for="pcwc">
                                  Pylon Civil Works Completed (V)
                               </label><br>
                              <input type="date" name="pcwc" id="pcwc">
                                </div>
                        </div></div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.create')}}';" id = "savebutton" name = "button">Add Now</button>
        </form>
       </div>
       <div class="card">
       <button onclick="four()" class="text-left"><strong>  + Phase 4 - Fencing & Pylon </strong></button>
       </div>
        <div id="form4" class="card container">
                            <form action="{{ route('report.create') }}" method="POST">
                         <div class="row">
                                <div class="col-md-4">
                                <div class="form-group" style="color:#000">         
                   <label for="epsf" class="green" style="color:white">
                                  Equipment pickup from Supplier: Fencing & Pylon
                               </label><br>
                               <input type="date" name="epsf" id="epsf">
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                          <label for="pdf" class="green" style="color:white">
                              Personnel Departure: Installation-Fencing & Pylon 
                          </label><br>
                            <input type="date" name="pdf" id="pdf">
                                </div>
                        </div>

                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                          <label for="paf" class="green" style="color:white">
                                              Personnel Arrival: Installation-Fencing & Pylon
                          </label><br>
                                <input type="date" name="paf" id="paf">
                                </div>
                        </div>
                    </div>
                        <div class="row">
                    <div class="col-md-4">
                                <div class="form-group" style="color:#000">         
                          <label for="startf" class="green" style="color:white">
                                              Start Date: Installation-Fencing & Pylon                        
                           </label><br>
                            <input type="date" name="startf" id="starf">
                        </div>
                        </div>
                </div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.create')}}';" id = "savebutton" name = "button">Add Now</button>
                
                </form>
             </div>
        <div class="card">
       <button onclick="five()" class="text-left"><strong>  + Phase 5 Solar BTS VSAT</strong></button>
        </div>
            <div id ="form5" class="card container">
                             <form action="{{ route('report.create') }}" method="post">
                                     @csrf
                                     <div class="row">
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">              
                        <label for="eosf" class="green" style="color:white">
                                              Equipment on Site: Fencing & Pylon 
                                   </label><br>
                                    <input type="date" name="eosf" id="eosf">
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">          
                        <label for="ipc">
                                              Installation Pylon Completed (V)
                                      </label><br>
                                  <input type="date" name="ipc" id="ipc">
                                </div>
                        </div>          
                        
                        <div class="col-md-4">
                                <div class="form-group" style="color:#000">                
                        <label for="ifc">
                                 Installation Fencing Completed (V)
                          </label><br>
                          <input type="date" name="ifc" id="ifc">
                                </div>
                        </div>
                    </div>
                    
                    <div class="row">
                                <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                   
                                <label for="cwvc">
                                                      Civil Works VSAT Completed (V)</label><br>
                                      <input type="date" name="cwvc" id="cwvc">
                                        </div>
                                </div>
  
                                <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                    
                                           <label for="cwsbc">
                                                  Civil Works Solar or Battery Completed (V)
                                           </label><br>
                                   <input type="date" name="cwsbc" id="cwsbc">
                                        </div>
                                </div>
                        </div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.create')}}';" id = "savebutton" name = "button">Add Now</button>
                    </form>
                </div>
        <div class="card">
                <button onclick="six()" class="text-left"><strong>  + Phase 6 - Solar BTS VSAT</strong></button>
        </div>
                        <div id="form6" class="card container">
                                <form action="{{ route('report.create') }}" method="POST">
                                @csrf
                                <div class="row">
                                <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                  
                                  <label for="epws" class="green" style="color:white">
                                                          Equipment pickup from warehouse: : Solar Materials
                                                       </label><br>
                                        <input type="date" name="epws" id="epws">
                                        </div>
                                </div>

                                <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                 
                                   <label for="pdis" class="green" style="color:white">
                                                                Personnel Departure: Installation-Solar Materials/Vsat Materials/BTS Materials/Wi-Fi Materials
                                          </label><br>
                                    <input type="date" name="pdis" id="pdis">
                                        </div>
                                </div>
                   <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                  
                                <label for="pais" class="green" style="color:white">
                                              Personnel Arrival: Installation-Solar Materials/Vsat Materials/BTS
                                             </label><br>
                                               <input type="date" name="pais" id="pais"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group" style="color:#000">          
                                                    <label for="eoss" class="green" style="color:white">
                                                        Start Date: Installation-Fencing & Pylon  
                                                    </label><br>
                                                    <input type="date" name="starti" id="starti">
                                            </div>
                                        </div>
                    </div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.create')}}';" id = "savebutton" name = "button">Add Now</button>
               
                 </form>
                </div>
              <div class="card">  <button onclick="seven()" class="text-left"> <strong> + Installation Phase</strong></button>
              </div>
               <div id="form7" class="card container">
                    <form action="{{ route('report.create') }}" method="post"> 
                    @csrf
                    <div class="row">
                    <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                          
                                                <label for="eoss" class="green" style="color:white">
                                                  Equipment on Site: Solar Materials/Vsat Materials/BTS Materials/Wi-Fi Materials 
                                                </label><br>
                                                <input type="date" name="eoss" id="eoss">
                                                </div>
                                        </div>                   
                    
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                                                 
                                              <label for="isc">
                                              Installation Solar or Battary for Hub only Completed (V)
                                           </label><br>
                                          <input type="date" name="isc">
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                          
                                          <label for="ibc">
                                              Installation BTS Completed(A) 
                                         </label><br>
                                            <input type="date" name="ibc">
                                                </div>
                                        </div>
                    </div>
                       <div class="row">                 
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                             
                                        <label for="ivc">
                                              Installation Vsat Completed (A) 
                                         </label><br>
                                         <input type="date" name="ivc" id="ivc">
                                                </div>
                                </div>
                    <div class="col-md-4">
                                  <div class="form-group" style="color:#000">                            
                                        <label for="iwc">
                                              Installation WiFi Completed (A) 
                                         </label><br>
                                            <input type="date" name="iwc">
                                                </div>
                                        </div>
                    </div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.create')}}';" id = "savebutton" name = "button">Add Now</button>
               
                    </form> 
                    </div>
              <div class="card">      
                <button onclick="eight()" class="text-left"><strong>  + Commissioning Phase </strong> </button>          
              </div>
               <div id="form8" class="card container">
                    @csrf        <form action="{{ route('report.create') }}">
                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                         
                                      <label for="" class="green" style="color:white">
                                      Personnel Departure: Commissioning (V+AFT) 
                                  </label><br>
                                    <input type="date" name="pcom">
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">          
                                                     <label for="pacom" class="green" style="color:white">
                                              Personnel Arrival: Commissioning (V+AFT)
                                               </label><br>
                                                <input type="date" name="pacom">
                                                </div>
                                        </div>                         
                                                            
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">          
                                                <label for="startcom" class="green" style="color:white">
                                              Start Date: Commissioning (V+AFT/SES) 
                                      </label><br>
                                             <input type="date" name="startcom">
                                                </div>
                                        </div>
                                </div>   
                    <div class="row">
                    <div class="col-md-4">
                               <div class="form-group" style="color:#000">                                  
                                  <label for="coms">
                                      Commissioning Solar (V)
                                     </label><br>
                                   <input type="date" name="coms">
                                    </div>
                                </div>
                             <div class="col-md-4">
                                     <div class="form-group" style="color:#000">                          
                                      <label for="cv">
                                      Commissioning VSAT(A, SES Networks & AFT)
                                    </label><br>
                                      <input type="date" name="cv">
                                                </div>
                                        </div>     
                    <div class="col-md-4">
                              <div class="form-group" style="color:#000">                          
                                  <label for="cb">
                                      Commissioning BTS (A, SES Networks & AFT)
                                  </label><br>
                                 <input type="date" name="cb">
                                </div>
                        </div>
                    </div>
                    <div class="row"> 
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">          
                                                      <label for="cw">
                                                  Commissioning WiFi (A, SES Networks & AFT)
                                               </label><br>
                                      <input type="date" name="cw">
                                                </div>
                                        </div>
                    </div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.create')}}';" id = "savebutton" name = "button">Add Now</button>  
                                </form>
                    </div>
              <div class="card">      
                <button onclick="nine()" class="text-left"> <strong> + Acceptance Phase</strong></button>        
              </div>
                <div id="form9" class="card container">
                         @csrf       <form action="{{ route('report.create') }}">
                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="form-group" style="color:#000">                          
                                        <label for="pda" class="green" style="color:white">
                                                  Personnel Departure: Acceptance (V+AFT & Client) 
                                              </label><br>
                                                <input type="date" name="pda">
                                                </div>
                                        </div>
                                    <div class="col-md-4">
                                        <div class="form-group" style="color:#000">                          
                                                <label for="paa">
                                                          Personnel Arrival: Acceptance (V+AFT & Client)
                                                        </label><br>
                                                        <input type="date" name="paa">
                                                </div>
                                            </div>
                             <div class="col-md-4">
                                 <div class="form-group" style="color:#000">                                                          
                                    <label for="starta">
                                         Start Date: Acceptance (V+AFT/SES & Client) 
                                    </label><br>
                                        <input type="date" name="starta">
                                </div>
                            </div>
                    </div>     

                    <div class="row">
                             <div class="col-md-4">
                                    <div class="form-group" style="color:#000">                              
                                    <label for="af">
                                        Acceptance Fencing (AFT & Client)
                                    </label><br>
                                     <input type="date" name="af">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" style="color:#000">                                
                                    <label for="ap">
                                     Acceptance Pylon (AFT & Client)
                                    </label><br>
                                    <input type="date" name="ap">
                                </div>
                            </div>   
                                    
                    <div class="col-md-4">
                            <div class="form-group" style="color:#000">         
                                    <label for="as">
                                     Acceptance Solar (AFT & Client)
                                    </label><br>
                                <input type="date" name="as">
                                    </div>
                            </div>
                    </div>  
                    <div class="row">
                            <div class="col-md-4">
                                <div class="form-group" style="color:#000">                              
                                <label for="a3g">
                                    Acceptance 3G  (SES Networks,AFT & Client)
                                </label><br>
                            <input type="date" name="a3g">
                                    </div>
                         </div>
                    <div class="col-md-4">
                         <div class="form-group" style="color:#000">                              
                            <label for ="awifi">
                                    Acceptance WiFi  (SES Networks,AFT & Client)
                            </label><br>
                         <input type="date" name="awifi">
                                </div>
                            </div>     
                    </div><button type=  "submit" method= "post" onclick = "location.href = '{{route('report.create')}}';" id = "savebutton" name = "button">Add Now</button>
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
