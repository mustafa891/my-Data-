<?php

namespace App\View\Components;

use Illuminate\View\Component;

class product extends Component
{
    private $products;
    private $suppliers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($products, $suppliers)
    {
        $this->products = $products;
        $this->suppliers = $suppliers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product', [
            'products' => $this->products,
            'suppliers' => $this->suppliers,
        ]);
    }
}
