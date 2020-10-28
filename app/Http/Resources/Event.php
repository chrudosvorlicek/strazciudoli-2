<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class Event extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'place' => $this->place,
            'datetime_from' => Carbon::createFromTimeString($this->datetime_from)->format('d.m.Y H:i'),
            'datetime_to' => Carbon::createFromTimeString($this->datetime_to)->format('d.m.Y H:i'),
            'user_id' => $this->organizator->nick,
            'price' => $this->price . 'Kč',
        ];
    }
}
