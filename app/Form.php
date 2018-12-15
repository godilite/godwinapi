<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
   protected $fillable = ['report_id','survey_id', 'photo', 'geo','sd', 'sc','epsc','pdc','pdi','pac','startec','eosc','aec',
   'fcwc','pcwc','epsf','pdf','paf','startf','eoss','ipc','eosf','ifc','cwsbc','epws','pais','starti',
   'isc','ibc','ivc','iwc','cwvc','pcom','pacom','startcom','coms','cv','cb','cw','pda','paa','starta','af',
   'ap','as','av','a3g','awifi','pdis' 
                        ];

    
    public function report()
    {
        return $this->belongsTo('App\Report');
    }
    
}
