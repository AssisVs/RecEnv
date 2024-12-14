===== queue and jobs ======
Processa fila com prioridade alta
    php artisan queue:work --queue=high,default
===== criar tabela no database ==========
    php artisan make:queue-table
 
    php artisan migrate
=======  gerando classe de jobs  =============
    php artisan make:job ProcessWebhook
    isto cria o diretorio jobs e a classe.
======= injetando dependencias sobre seu controle  ==========
======= chamando o handle method do boot method em ==========
=======  \App\Provider\AppServiceProvider          ==========

use App\Jobs\ProcessWebhook;
use App\Services\AudioProcessor;
use Illuminate\Contracts\Foundation\Application;
 
$this->app->bindMethod([ProcessWebhook::class, 'handle'], function (ProcessWebhook $job, Application $app) {
    return $job->handle($app->make(AudioProcessor::class));
});

======= evitando serialization ====================
/**
 * Create a new job instance.
 */
public function __construct(
    Webhook $webhook,
) {
    $this->webhook = $webhook->withoutRelations();
}
==================dispatching job ============
======= usado no construtor do job ===========

<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Jobs\ProcessWebhook;
use App\Models\Webhook;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
 
class WebhookController extends Controller
{
    /**
     * Store a new Webhook.
     */
    public function store(Request $request): RedirectResponse
    {
        $webhook = Webhook::create(/* ... */);
 
        // ...
 
        ProcessWebhook::dispatch($webhook);
 
        return redirect('/Webhooks');
    }
}
=============== Iniciar o reverb ============
    php artisan reverb:start
==========
vou tentar
