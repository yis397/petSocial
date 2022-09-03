<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Follow extends Component
{
    public $isfollow;
    public $user;


    public function mount($isfollow,$user)
    {
     $this->isfollow=$isfollow;
     $this->user=$user;

    }
    public function darClick(){
        if($this->isfollow){
            $this->isfollow=false;
            return;
        }
        $this->isfollow=true;
    }
    public function render()
    {
        return view('livewire.follow');
    }
}
