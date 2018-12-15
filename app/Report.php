<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'location', 'user_id', 'survey_id','sd', 'sc','epsc','pdc','pdi','pac','startec','eosc','aec','pdc',
        'fcwc','pcwc','epsf','pdf','paf','startf','eoss','ipc','eosf','ifc','cwsbc','epws','pais','starti',
        'isc','ibc','ivc','iwc','cwvc','pcom','pacom','startcom','coms','cv','cb','cw','pda','paa','starta','af',
        'ap','as','av','a3g','awifi','pdis','image','image1','image2' 
    ];
    public function user()
    {
      return $this->belongsTo('App\User');
    }
    
    public function forms()
    {
        return $this->hasMany('App\Form');
    }
    public function images()
        {
            return $this->hasMany('App\SurveyImage');
        }
}
