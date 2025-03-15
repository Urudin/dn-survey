<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(protected string $headerImage = 'main_bg.webp', protected bool $showTextBox = true, protected string $textBoxContent = '', protected string $buttons = '{"button1":"Gomb1","button2":"Gomb2"}')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header', [
            'headerImage' => $this->headerImage,
            'showTextBox' => $this->showTextBox,
            'textBoxContent' => json_decode($this->textBoxContent, true),
            'buttons' => json_decode($this->buttons, true),
        ]);
    }
}
