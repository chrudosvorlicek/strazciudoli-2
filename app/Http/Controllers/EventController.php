<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Nette\Utils\Json;

class EventController extends Controller
{
    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     * @throws \Nette\Utils\JsonException
     */
    public function index()
    {
        $fields = [
            ['key' => 'id', 'label' => 'Id', 'sortable' => true],
            ['key' => 'name', 'label' => 'Akce', 'sortable' => true],
            ['key' => 'place', 'label' => 'Místo', 'sortable' => true],
            ['key' => 'datetime_from', 'label' => 'Od', 'sortable' => true],
            ['key' => 'datetime_to', 'label' => 'Do', 'sortable' => true],
            ['key' => 'user_id', 'label' => 'Org', 'sortable' => true],
            ['key' => 'price', 'label' => 'Cena', 'sortable' => true],
        ];
        return view('event.plan', [
            'countKey' => 'eventsCount',
            'dataKey' => 'events',
            'endpoint' => '/api/events',
            'fields' => Json::encode($fields)
        ]);
    }

    /**
     * @param Event $event
     * @return Application|Factory|RedirectResponse|Redirector|View
     */
    public function get(Event $event)
    {
        if (empty($event->toArray())) {
            flash('event-id-not-given')->error();
            return redirect(route('akce'));
        }
        return view('event/detail', compact('event'));
    }


    /**
     * @param Request $request
     * @return Builder
     */
    private function getEvents(Request $request): Builder
    {
        $filter = $request->post('filter', []);
        if (empty($filter)) {
            return Event::query();
        }
        return Event::filter($filter);
    }
}
