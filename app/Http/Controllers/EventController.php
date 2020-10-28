<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class EventController extends Controller
{
    private static $pagination = [
        'perPage' => 10,
        'page' => 1,
    ];

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $pagination = $request->post('pagination', self::$pagination);
        $events = $this->getEvents($request);
        $eventsCount = $events->count();
        $events->paginate($pagination['perPage'], ['*'], 'page', $pagination['page']);
        return response()->json([
            'events' => $events->get(),
            'eventsCount' => $eventsCount,
            'pagination' => $pagination,
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
