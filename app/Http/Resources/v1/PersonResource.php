<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        //return ['first_name' => $this->first_name];
        // return $this->modifyName($this->first_name);

        return [
            'full_name' => $this->first_name . ' ' . $this->last_name,
            'mobile_number' => $this->phone
        ];
    }
    private function modifyName($name)
    {
        return 'Domnul: ' . $name;
    }
}
