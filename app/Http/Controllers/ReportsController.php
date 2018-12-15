<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Report;
use App\SurveyImage;
use App\Form;
use App\User;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Resources\Report as ReportResource;

class ReportsController extends Controller
{
    public function index()
    {
      //get reports
      $reports = Report::all();

      return ReportResource::collection($reports);
    }
    
    public function update(Request $request, $id)
    {
        $report =Report::findOrFail($id);
        $report->update($request->all());

        return $report;
    }


    
    
    public function add()
    {
      //get reports

      return view('report/add');
    }
    public function dashboard()
    {
      
      $survey_counts= Report::all()->count();
      $users_counts=User::all()->count();
     $updated=Report::latest()->first();
      $latest=Report::all()->first();
             

      


//get reports

      return view('dashboard')
                    ->with('reports',Report::paginate(4))
                    ->with('forms',Form::all())
                    ->with('users_count', $users_counts)
                    ->with('survey_counts',$survey_counts)
                    ->with('updated',$updated)
                    ->with('latest',$latest)
                    ->with('latestReports',Report::orderBy('created_at','desc')->simplePaginate(3));
    }

    public function reports()
    {
       
          //get reports 
      $reports = Report::orderBy('created_at', 'desc');
              return view('report.show')
                    ->with('reports',$reports->simplePaginate(10));
    }

    public function store(Request $request)
    {
               
     $report = Report::updateOrCreate(['survey_id' => $request['survey_id']],
                        ['sd' => $request['sd'],
                        'user_id' => Auth::id(),
                        'location' =>$request['location'],
                        'sc'=>$request['sc'],
                        'epsc'=>$request['epsc'],
                        'pdc'=>$request['pdc'],
                        'pac'=>$request['pac'],
                        'startec'=>$request['startec'],
                        'eosc'=>$request['eosc'],
                        'aec'=>$request['aec'],
                        'fcwc'=>$request['fcwc'],
                        'pcwc'=>$request['pcwc'],
                        'epsf'=>$request['epsf'],
                        'pdf'=>$request['pdf'],
                         'paf'=>$request['paf'],
                        'startf'=>$request['startf'],
                         'eoss'=>$request['eoss'],
                         'ipc'=>$request['ipc'],
                          'eosf'=>$request['eosf'],
                         'ifc'=>$request['ifc'],
                             
                        'cwsbc'=>$request['cwsbc'],
                           'epws'=>$request['epws'],
                           'pais'=>$request['pais'],
                           'pdis'=>$request['pdis'],
                             'starti'=>$request['starti'],
                          'isc'=>$request['isc'],
                          'ibc'=>$request['ibc'],
                          'ivc'=>$request['ivc'],
                          'iwc'=>$request['iwc'],
                           'pcom'=>$request['pcom'],
                            'pacom'=>$request['pacom'],
                              'startcom'=>$request['startcom'],
                           'coms'=>$request['coms'],
                           'cv'=>$request['cv'],
                           'cb'=>$request['cb'],
                           'cv'=>$request['cv'],
                           'cw'=>$request['cw'],
                          'pda'=>$request['pda'],
                          'paa'=>$request['paa'],
                             'starta'=>$request['starta'],
                         'af'=>$request['af'],
                         'ap'=>$request['ap'],
                         'as'=>$request['as'],
                         'av'=>$request['av'],
                          'a3g'=>$request['a3g'],
                        'awifi'=>$request['awifi'],
                        
                    ]);
      
      if ($report->save()){
        return new ReportResource($report);
      }
}

public function image(Request $request)
    {
     if($request->hasFile('image'))
     {
        $avatarWithExt = $request->file('image')->getClientOriginalName();
        $fileName = pathinfo($avatarWithExt, PATHINFO_FILENAME);
        $extention = $request->file('image')->getClientOriginalExtension(); 
        $fileNameToStore=$fileName.'_'.time().'.'.$extention;
         $path=$request->file('image')->storeAs('public/uploads',$fileNameToStore);    
    } else {
        $fileNameToStore='noimage.jpg';
    }
 
     $report = SurveyImage::create(['survey_id' => $request['survey_id'],
       'image'=> $fileNameToStore,
       'title'=>$request['title'],
       'description'=>$request['description']
     ]);
      if ($report->save()){
         return new ReportResource($report);
      }
    }
    
     public function create(Request $request)
    {
        
        
      if($request->hasFile('image'))
                {
                $photo = $s->file('image');

                    $filename = time().'.'.$photo->getClientOriginalExtension();

                    Image::make($photo)->resize(400, 400)->save(public_path('image/'.$filename));
                }
                
                $survey_id = rand(1000,100000);
      
     $report = Report::updateOrCreate(['survey_id' => $survey_id],
                        ['sd' => $request['sd'],
                        'user_id' => Auth::id(),
                        'location' =>$request['location'],
                        'sc'=>$request['sc'],
                        'epsc'=>$request['epsc'],
                        'pdc'=>$request['pdc'],
                        'pac'=>$request['pac'],
                        'startec'=>$request['startec'],
                        'eosc'=>$request['eosc'],
                        'aec'=>$request['aec'],
                        'fcwc'=>$request['fcwc'],
                        'pcwc'=>$request['pcwc'],
                        'epsf'=>$request['epsf'],
                        'pdf'=>$request['pdf'],
                         'paf'=>$request['paf'],
                        'startf'=>$request['startf'],
                         'eoss'=>$request['eoss'],
                         'ipc'=>$request['ipc'],
                          'eosf'=>$request['eosf'],
                         'ifc'=>$request['ifc'],
                             
                        'cwsbc'=>$request['cwsbc'],
                           'epws'=>$request['epws'],
                           'pais'=>$request['pais'],
                           'pdis'=>$request['pdis'],
                             'starti'=>$request['starti'],
                          'isc'=>$request['isc'],
                          'ibc'=>$request['ibc'],
                          'ivc'=>$request['ivc'],
                          'iwc'=>$request['iwc'],
                           'pcom'=>$request['pcom'],
                            'pacom'=>$request['pacom'],
                              'startcom'=>$request['startcom'],
                           'coms'=>$request['coms'],
                           'cv'=>$request['cv'],
                           'cb'=>$request['cb'],
                           'cv'=>$request['cv'],
                           'cw'=>$request['cw'],
                          'pda'=>$request['pda'],
                          'paa'=>$request['paa'],
                             'starta'=>$request['starta'],
                         'af'=>$request['af'],
                         'ap'=>$request['ap'],
                         'as'=>$request['as'],
                         'av'=>$request['av'],
                          'a3g'=>$request['a3g'],
                        'awifi'=>$request['awifi'],
                        
                    ]);
      //$report->image=$request->input('image');


      if ($report->save()){
        
        return redirect()->route('report.show');
        
      }
    }
    
    public function updateSurvey($id)
    {
        
          $report = Report::where('survey_id',$id)->first();
    return view('report/update')->with('report',$report);
}  
public function attach($id)
{
  $id= request('id');
        $report = SurveyImage::where('survey_id',$id)->get();
          
    return view('report/attach')->with('reports',$report);     
}
public function saveSurvey(Request $request, $survey_id)
{
Report::where('survey_id',$survey_id)
    ->update(['sd' => $request['sd'],
'user_id' => Auth::id(),
'location' =>$request['location'],
'sc'=>$request['sc'],
'epsc'=>$request['epsc'],
'pdc'=>$request['pdc'],
'pac'=>$request['pac'],
'startec'=>$request['startec'],
'eosc'=>$request['eosc'],
'aec'=>$request['aec'],
'fcwc'=>$request['fcwc'],
'pcwc'=>$request['pcwc'],
'epsf'=>$request['epsf'],
'pdf'=>$request['pdf'],
 'paf'=>$request['paf'],
'startf'=>$request['startf'],
 'eoss'=>$request['eoss'],
 'ipc'=>$request['ipc'],
  'eosf'=>$request['eosf'],
 'ifc'=>$request['ifc'],
     
'cwsbc'=>$request['cwsbc'],
   'epws'=>$request['epws'],
   'pais'=>$request['pais'],
   'pdis'=>$request['pdis'],
     'starti'=>$request['starti'],
  'isc'=>$request['isc'],
  'ibc'=>$request['ibc'],
  'ivc'=>$request['ivc'],
  'iwc'=>$request['iwc'],
   'pcom'=>$request['pcom'],
    'pacom'=>$request['pacom'],
      'startcom'=>$request['startcom'],
   'coms'=>$request['coms'],
   'cv'=>$request['cv'],
   'cb'=>$request['cb'],
   'cv'=>$request['cv'],
   'cw'=>$request['cw'],
  'pda'=>$request['pda'],
  'paa'=>$request['paa'],
     'starta'=>$request['starta'],
 'af'=>$request['af'],
 'ap'=>$request['ap'],
 'as'=>$request['as'],
 'av'=>$request['av'],
  'a3g'=>$request['a3g'],
'awifi'=>$request['awifi'],

               ]);
 
   return redirect()->back();
} 

    public function show($id)
    {
      $report = Report::findOrfail($id);

      return new ReportResource($report);

    }

    
    public function destroy($survey_id)
    {
      $report = Report::findOrfail($survey_id);
      if ($report->delete()) {
        return redirect()->back();
      }
      

    }
}
