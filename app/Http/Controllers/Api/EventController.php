<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventsRequest;
use App\Http\Resources\EventCollection;
use App\Models\Event;

class EventController extends Controller
{

    /**
     * @param EventsRequest $request
     * @return EventCollection
     */
    public function index(EventsRequest $request)
    {
        $data = $request->validated();
        $events = empty($data['filter']) ? Event::query() : Event::filter($data['filter']);
        $eventsCount = $events->count();
        if (isset($data['sortKey'])) {
            $direction = isset($data['sortDir']) ? $data['sortDir'] : 'asc';
            $events->orderBy($data['sortKey'], $direction);
        }
        $offset = $data['perPage'] * ($data['currentPage'] - 1);
        $events->limit($data['perPage'])->offset($offset);
        return new EventCollection($events->get(), $eventsCount);
    }
}
