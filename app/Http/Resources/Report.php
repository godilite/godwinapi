<?php

namespace App\Http\Resources;
use App\Http\Resources\Form as FormResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Report extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // parent::toArray($request);
        return [
            'id'=>$this->id,
            'location'=>$this->location,
            'user_id'=>$this->user_id,
            'survey'=>$this->survey,           
            'image'=>$this->image,
            'image1'=>$this->image1,
            'image2'=>$this->image2,


            'geo'=>$this->geo,
            'sc'=>$this->sc,
            'sd'=>$this->sd,
            'pac'=>$this->pac,
            'pdc'=>$this->pdc,
            'epsc'=>$this->epsc,
            'aec'=>$this->aec,
            'startec'=>$this->startec,
            'eosc'=>$this->eosc,
            'fcwc'=>$this->fcwc,
            'pcwc'=>$this->pcwc,
            'paf'=>$this->paf,
            'pdf'=>$this->pdf,
            'epsf'=>$this->epsf,
            'startf'=>$this->startf,
            'eosf'=>$this->eosf,
            'ipc'=>$this->ipc,
            'ifc'=>$this->ifc,
            'cwvc'=>$this->cwvc,
            'cwbc'=>$this->cwbc,
            'cwsbc'=>$this->cwsbc,
            'pdi'=>$this->pdi,
            'pdis'=>$this->pdis,
            'epws'=>$this->epws,
            'pais'=>$this->pais,
            'starti'=>$this->starti,
            'eoss'=>$this->eoss,
            'isc'=>$this->isc,
            'ivc'=>$this->ivc,
            'ibc'=>$this->ibc,
            'iwc'=>$this->iwc,
            'pdcom'=>$this->pdcom,
            'pacom'=>$this->pacom,
            'pcom'=>$this->pcom,
            'startcom'=>$this->startcom,
            'coms'=>$this->coms,
            'comv'=>$this->comv,
            'comb'=>$this->comb,
            'cv'=>$this->cv,
            'cb'=>$this->cb,
            'cw'=>$this->cw,
            'comw'=>$this->comw,
            'pda'=>$this->pda,
            'paa'=>$this->paa,
            'starta'=>$this->starta,
            'af'=>$this->af,
            'ap'=>$this->ap,
            'as'=>$this->as,
            'av'=>$this->av,
            'a3g'=>$this->a3g,
            'awifi'=>$this->awifi,
            
        ];
    }
}
