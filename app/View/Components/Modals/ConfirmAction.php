<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;

class ConfirmAction extends Component
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = null, $message)
    {
        $this->message = $message;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modals.confirm-action');
    }
}
