<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Supplier extends Component
{
    private $suppliers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($suppliers)
    {
        $this->suppliers = $suppliers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.supplier', [
            'suppliers' => $this->suppliers,
        ]);
    }
}
