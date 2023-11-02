<?php

namespace App\Livewire;

use App\Models\Item;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view(
            'livewire.home',
            ['items' => Item::orderBy('created_at', 'desc')->limit(50)->get()]
        );
    }
    public function deleteItem($id)
    {
        Item::find($id)->delete();
        Session::flash('message', 'Xóa thành công.');
        return redirect()->route('home');
    }
}
