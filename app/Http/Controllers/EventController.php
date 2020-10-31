<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Resources\Event as EventResource;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Nette\Utils\Json;
use Nette\Utils\JsonException;

class EventController extends Controller
{
    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     * @throws JsonException
     */
    public function index()
    {
        $fields = EventResource::getTableFields();
        return view('event.plan', [
            'countKey' => 'eventsCount',
            'dataKey' => 'events',
            'endpoint' => '/api/events',
            'fields' => Json::encode($fields),
            'type' => 'plan',
        ]);
    }

    public function previous()
    {
        $fields = EventResource::getTableFields();
        return view('event.previous', [
            'countKey' => 'eventsCount',
            'dataKey' => 'events',
            'endpoint' => '/api/events/previous',
            'fields' => Json::encode($fields),
            'type' => 'previous',
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
}
