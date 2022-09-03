<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Buscador extends Component
{
    public $usuarios=[];
    public $term="";
    public $isOpen=false;
    public function search(string $e){
        $this->term=$e;
        if ($this->term=="") {
            # code...
            $this->isOpen=false;
            $this->usuarios=[];
            return;
        }
        $users=User::when($this->term,function($q){
          $q->where('username','LIKE',$this->term."%");
        })->paginate(5);
        $this->usuarios=[...$users];
        $this->isOpen=true;


    }
    public function render()
    {
        return view('livewire.buscador');
    }
}
