<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyImage extends Model
{
    protected $fillable = [
        'title', 'image','survey_id','description'
    ];
    public function report()
    {
      return $this->belongsTo('App\Report', 'survey_id');
    }//
}
