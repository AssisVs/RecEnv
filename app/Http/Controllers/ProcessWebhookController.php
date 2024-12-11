<?php

namespace App\Http\Controllers;

use App\Events\ServerCreated;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\ProcessWebhook;
use App\Models\Url;
use App\Models\Webhook;
use Illuminate\Http\RedirectResponse;

class ProcessWebhookController extends Controller
{
    public function __invoke(Url $url)
    {

        $method = request()->method();
        $headers = request()->headers->all();
        $ip = request()->ip();
        $body = json_encode(request()->all());
ds($method, $headers, $ip, $body);
        $url = Url::query()->create([
            'url' => 'webhook'
        ]);

        $url
            ->requests()
            ->create(
                (compact('method', 'headers', 'ip', 'body'))
            );

            ServerCreated::dispatch();

ds('xxxxxxxxxxxxxxx', $url);
        return response()->noContent();
    }
    /**
     * Store a new Webhook.
    */
    public function store(Request $request): RedirectResponse
    {
        $webhook = Webhook::create(/* ... */);

        // ...
        ProcessWebhook::dispatch($webhook);

            return redirect('/webhooks');
    }
}
