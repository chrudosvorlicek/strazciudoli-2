<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventsRequest;
use App\Http\Resources\EventCollection;
use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;

class EventController extends Controller
{

    /**
     * Get oncoming events
     * @param EventsRequest $request
     * @return EventCollection
     */
    public function index(EventsRequest $request)
    {
        $data = $request->validated();
        $events = Event::upcoming();
        $this->filter($data, $events);
        $eventsCount = $events->count();
        $this->sort($data, $events);
        $this->offset($data, $events);

        return new EventCollection($events->get(), $eventsCount);
    }


    public function previous(EventsRequest $request)
    {
        $data = $request->validated();
        $events = Event::previous();
        $this->filter($data, $events);
        $eventsCount = $events->count();
        $this->sort($data, $events);
        $this->offset($data, $events);
        return new EventCollection($events->get(), $eventsCount);
    }

    /**
     * Apply filter if is given
     * @param array $data
     * @param Builder $events
     */
    private function filter(array $data, Builder &$events)
    {
        if (!empty($data['filter'])) {
            $events->filter($data['filter']);
        }
    }

    /**
     * apply offset
     * @param array $data
     * @param Builder $events
     */
    private function offset(array $data, Builder &$events)
    {
        $offset = $data['perPage'] * ($data['currentPage'] - 1);
        $events->limit($data['perPage'])->offset($offset);
    }

    /**
     * sort result
     * @param array $data
     * @param Builder $events
     */
    private function sort(array $data, Builder &$events)
    {
        if (isset($data['sortKey'])) {
            $direction = isset($data['sortDir']) ? $data['sortDir'] : 'asc';
            $events->orderBy($data['sortKey'], $direction);
        }
    }
}
