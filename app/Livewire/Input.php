<?php

namespace App\Livewire;

use App\Models\Item;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Input extends Component
{
    public $customer;
    public $style;
    public $type;
    public $container;
    public $model;
    public $item;
    public $color;
    public $params;
    public $size;
    public $po;
    public $unit;
    public $qty;
    public $date;
    public $note;

    public function mount($id = null)
    {
        if ($id) {
            $item = Item::find($id);
            $this->customer = $item->customer;
            $this->style = $item->style;
            $this->type = $item->type;
            $this->container = $item->container;
            $this->model = $item->model;
            $this->item = $item->item;
            $this->color = $item->color;
            $this->params = $item->params;
            $this->size = $item->size;
            $this->po = $item->po;
            $this->unit = $item->unit;
        }
    }
    public function render()
    {

        return view('livewire.input');
    }
    public function add()
    {
        $this->validate([
            'customer' => 'required|max:20',
            'style' => 'required|max:20',
            'type' => 'required',
            'container' => 'required|max:20',
            'unit' => 'required|max:10',
            'qty' => 'required',
            'date' => 'required',
            'params' => 'max:10',
            'color' => 'max:20',
            'item' => 'max:20',
            'model' => 'max:20',
            'po' => 'max:20',
        ]);
        Item::create([
            'customer' => $this->customer,
            'style' => $this->style,
            'type' => $this->type,
            'container' => $this->container,
            'model' => $this->model,
            'item' => $this->item,
            'color' => $this->color,
            'params' => $this->params,
            'size' => $this->size,
            'po' => $this->po,
            'unit' => $this->unit,
            'qty' => $this->qty,
            'date' => $this->date,
            'note' => $this->note,
        ]);
        Session::flash('message', 'Nhập phụ liệu thành công.');

        return redirect()->route('home');
    }
}
