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

            <a class="bg-yellow-500 rounded-lg shadow px-4 text-slate-900 hover:bg-opacity-80" href="{{ route('livewire.update', $url) }}?test=1" target="_blank">
                test
            </a>
        </div>
    </div>
</div>
