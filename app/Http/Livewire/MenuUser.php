<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MenuUser extends Component
{
    public $open=false;
    public function render()
    {
        return view('livewire.menu-user');
    }

    public function show($open) {
       
        if ($this->open == true) {

                $this->open = false;
           
            
        } else {
            $this->open = true;
            
        }
       
        
    }
}
