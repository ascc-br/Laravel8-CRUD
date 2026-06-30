<?php

/** 
 *  You can delete this class file if you only want an anonymous view component, 
 *  or keep it to handle data. (Google AI guide)
 */

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout');
    }
}
