<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Event extends JsonResource
{

    /**
     * Get fields for table FilterTable definitions
     * @return array[]
     */
    public static function getTableFields(): array
    {
        return [
            ['key' => 'id', 'label' => 'Id', 'sortable' => true],
            ['key' => 'name', 'label' => 'Akce', 'sortable' => true],
            ['key' => 'datetime_from', 'label' => 'Od', 'sortable' => true],
            ['key' => 'datetime_to', 'label' => 'Do', 'sortable' => true],
            ['key' => 'user_id', 'label' => 'Org', 'sortable' => true],
        ];
    }

    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'datetime_from' => Carbon::createFromTimeString($this->datetime_from)->format('d.m.Y H:i'),
            'datetime_to' => Carbon::createFromTimeString($this->datetime_to)->format('d.m.Y H:i'),
            'user_id' => $this->organizator->nick,
        ];
    }
}
