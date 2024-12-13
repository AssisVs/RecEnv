<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Model;
use App\Models\Url;
use App\Models\Webhook;
use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Post title...';
    public $urls ;
    public $jobs ;

/*   para passar dados para o componnte usa mount   */
    public function mount(Url $urls)
    {

        $this->urls = Url::all();
        $this->jobs = Webhook::all();
        ds('mount  urls', $this->urls);
        ds('mount jobs', $this->jobs);
    }


    public function render()
    {
/*
        foreach ($this->urls as $url) {
            // Faça algo com o objeto $url
        }  */
        return view('livewire.create-post');
    }
}
