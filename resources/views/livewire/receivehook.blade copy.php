<div>
    {{-- The whole world belongs to you. --}}

    <h1>{{'Recebe webhook' }}</h1>

    @session('success')
    <div class="alert alert-success" role="alert">{!!$value!!}</div>
    @endsession

    @session('error')
     <div class="alert alert-danger" role="alert">{!!$value!!}</div>
    @endsession

    @session('errorMessage')
     <div class="alert alert-danger" role="alert">{!!$value!!}</div>
    @endsession

<div class="grid grid-cols-3 gap-4 h-full p-10">
    <div>
        <button class="bg-yellow-600 rounded-lg shadow px-4 text-slate-900 hover:bg-opacity-80"  wire:click="receivehook">
            Receive webHook
        </button>

    </div>

    <div class= "flex justify-between">
        {{ route('webhook', $url) }}
        <a class="bg-yellow-500 rounded-lg shadow px-4 text-slate-900 hover:bg-opacity-80" href="{{ route('handle-requests', $url) }}?test=1" target="_blank">
            test
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Queue</th>
                <th scope="col">Payload</th>
              </tr>
        </thead>
        <tbody>
            @forelse ($jobs as $job)
                <tr>
                    <th>{{ $job->id }}</th>
                    <td>{{ $job->queue }}</td>
                    <td>{{ $job->payload }}</td>
              </tr>
            @empty
                <span style="color: #f00;">Nenhum job cadastrado!</span><br>
                <a href="{{ route('receivehook') }}" class="btn btn-warning btn-sm me-1">Contactar administrador</a>
            @endforelse
        </tbody>
    </table>
</div>
</div>
