
<div>
    {{-- Be like water. --}}
    <h1>Title: {{ $title }}</h1>

    <form wire:submit="save">
        <label for="title">Title:</label>

        <input type="text" id="title" wire:model.live="title">

        <button type="submit">Save</button>
    </form>

    <div>
        @foreach ($urls as $url)
            <div>

                {{ $url->id }} :: {{$url->url}} :: {{ $url->created_at }}
            </div>
        @endforeach
    </div>
    <!-- <button type="button" wire:click="$commit">Atualize</button> -->
    <div>
        @foreach ($jobs as $job)
            <div>

               {{ 'jobs= ' }} :: {{$job->queue}} :: {{ $url->payload }}
            </div>
        @endforeach
    </div>
</div>
