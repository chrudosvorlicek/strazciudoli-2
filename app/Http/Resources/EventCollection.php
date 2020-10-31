<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class EventCollection extends ResourceCollection
{
    /** @var int */
    private int $eventCount;

    /**
     * EventCollection constructor.
     * @param Collection $resource
     * @param int $eventCount
     */
    public function __construct(Collection $resource, int $eventCount)
    {
        $this->eventCount = $eventCount;
        parent::__construct($resource);
    }

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'events' => $this->collection,
            'eventsCount' => $this->eventCount,
        ];
    }
}
