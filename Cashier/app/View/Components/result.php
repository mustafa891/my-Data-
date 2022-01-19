<?php

namespace App\View\Components;

use Illuminate\View\Component;

class result extends Component
{
    private $errors;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($errors)
    {
        $this->errors = $errors;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.result', [
            'errors' => $this->errors,
        ]);
    }
}
