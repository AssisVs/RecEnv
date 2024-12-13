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
            <button class="bg-yellow-600 rounded-lg shadow px-4 text-slate-900 hover:bg-opacity-80"  href="{{ route('store') }}">
                Receive webHook
            </button>
         <!--  coloquei a variavel no app/serviceprovider/boot, para inicializar -->

        </div>

        @if (!$urls == 'inicial')
        <ul class="overflow-y-auto h-[600px] text-lg flex flex-col space-y-2">
            @foreach ($urls as $url)
                <li >
                    <div class= "flex justify-between">
                        {{ route('process-webhook', $url) }}
                        <a class="bg-yellow-500 rounded-lg shadow px-4 text-slate-900 hover:bg-opacity-80" href="{{ route('process-webhook', $url) }}?test=1" target="_blank">
                            test
                        </a>
                    </div>
                    <ul>
                        @foreach ($url->requests as $request)
                            <li class="cursor.pointer hover:text-yellow-30" wire.click="setR({{ $request->id }})">
                                {{ $request->method }} :: {{ $request->created_at->diffForHumans() }}
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
        @endif
    </div>
</div>
