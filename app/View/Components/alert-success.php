<!-- <?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert-success extends Component
{

   @if(session('success'))
   <div class="mb-4 px-4 py-2 bg-green-100 border border-green-200 text-green-700 rounded-md">
   {{ $slot}}
   </div>
   @endif


    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-success');
    }
}


@if(session('success'))
<div class="mb-4 px-4 py-2 bg-green-100 border border-green-200 text-green-700 rounded-md">
    {{ $slot }}
</div>
@endif -->

