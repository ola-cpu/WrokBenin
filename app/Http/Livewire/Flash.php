<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flash extends Component
{

	public $message;
	public $type;
	public $colors = [

		'error' =>  'border-red-700 text-red-700 bg-red-200',
		'success' =>  'border-green-700 text-red-700 bg-red-200',
		'warning' => 'border-orange-700 text-red-700 bg-red-200',
		'info' =>  'border-blue-700 text-red-700 bg-red-200'

	];

	

	protected $listeners = ['flash' => 'setFlashMessage'];

	public function setFlashMessage($message, $type)
	{

		$this->message = $message;
		$this->type =$type;

		$this->dispatchBrowserEvent('flash-message');
	}

    public function render()
    {
        return view('livewire.flash');
    }
}
