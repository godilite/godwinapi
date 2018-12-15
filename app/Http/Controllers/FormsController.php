<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\Report;
use App\Http\Resources\Form as FormResource;
class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get reports
        $reports = Form::all();

        return FormResource::collection($reports);
    }

    public function forms($id)
   {
      $channel=Report::where('survey_id', $id)->first();
      
      return view('form/show')->with('form',$channel);
   }

   public function formShow($id)
   {
      $channel=Form::where('survey_id', $id)->first();
      
      return view('form/show')->with('form',$channel);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   /* public function store(Request $request)
    {
        $report = $request ->isMethod('put')?Form::findOrfail()
        ($request->form_id):new Form;
        $report->id =$request->input('form_id');
        $report->sc =$request->input('sc');
        $report->startec =$request->input('startec');
  
        if ($report->save()){
          return new FormResource($report);
        }    
    }
*/
    public function store($id)
    {
        $r = Report::findOrfail($id);
        $s= request();
        
            if($s->hasFile('image'))
                {
                $photo = $s->file('image');

                    $filename = time().'.'.$photo->getClientOriginalExtension();

                    Image::make($photo)->resize(400, 400)->save(public_path('image/'.$filename));
                }
        $survey = Form::create([
            'report_id'=>$id,
            'sd'=>$s->sd,
            'sc'=>$s->sc,'epsc'=>$s->epsc,'pdc'=>$s->pdc,'pdi'=>$s->pdi,'pac'=>$s->pac,'startec'=>$s->startec,'status'=>$s->status,'eosc'=>$s->eosc,'aec'=>$s->aec,
            'fcwc'=>$s->fcwc,'pcwc'=>$s->pcwc,'epsf'=>$s->epsf,'pdf'=>$s->pdf,'paf'=>$s->paf,'startf'=>$s->startf,'eoss'=>$s->eoss,'ipc'=>$s->ipc,'eosf'=>$s->eosf,'ifc'=>$s->ifc,'cwbc'=>$s->cwbc,'cwsbc'=>$s->cwsbc,'epws'=>$s->epws,'pais'=>$s->pais,'starti'=>$s->starti,
            'isc'=>$s->isc,'ibc'=>$s->ibc,'ivc'=>$s->ivc,'iwc'=>$s->iwc,'pcom'=>$s->pcom,'pacom'=>$s->pacom,'startcom'=>$s->startcom,'coms'=>$s->coms,'comv'=>$s->comv,'comb'=>$s->comb,'comw'=>$s->comw,'pda'=>$s->pda,'paa'=>$s->paa,'starta'=>$s->starta,'af'=>$s->af,
            'ap'=>$s->ap,'as'=>$s->as,'av'=>$s->av,'a3g'=>$s->a3g,'awifi'=>$s->awifi, 'image'=>$filename
        ]);
        if ($survey->save()){
            return new FormResource($survey);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $report = Form::findOrfail($id);
          if ($report->delete()) {
            return new FormResource($report);
          }     //
    }
}
