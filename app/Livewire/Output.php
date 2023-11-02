<?php

namespace App\Livewire;

use App\Models\Item;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Output extends Component
{
    public $customer;
    public $item;
    public $style;
    public $type;
    public $container;
    public $model;
    public $color;
    public $params;
    public $size;
    public $po;
    public $unit;
    public $qty;
    public $date;
    public $note;
    public $id;
    public $user_name;
    public $inventory;
    public function mount($id)
    {
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
        $this->id = $id;

        /* $totalOrder = DB::table('items')
        ->where('order_id', '=', get('id'))
        ->sum('item_qty');*/

        $totalOrder = Item::where('order_id', $id)->sum('qty');
        $this->inventory = $item->qty - $totalOrder;
        if ($this->inventory == 0) {
            Session::flash('message', 'Phụ liệu đã hết');

            return redirect()->route('home');
        }
    }
    public function render()
    {
        return view('livewire.output');
    }
    public function order()
    {
        $this->validate([
            'customer' => 'required|max:20',
            'style' => 'required|max:20',
            'type' => 'required',
            'container' => 'required|max:20',
            'unit' => 'required|max:10',
            'qty' => 'required|lte:inventory',
            'date' => 'required',
            'params' => 'max:10',
            'color' => 'max:20',
            'item' => 'max:20',
            'model' => 'max:20',
            'po' => 'max:20',
        ], [
            'qty.lte' => 'Số lượng phải nhỏ hơn hoặc bằng :value.'
        ]);
        Item::insert([
            'customer' => $this->customer,
            'type' => $this->type,
            'style' => $this->style,
            'container' => $this->container,
            'model' => $this->model,
            'item' => $this->item,
            'color' => $this->color,
            'params' => $this->params,
            'size' => $this->size,
            'po' => $this->po,
            'unit' => $this->unit,
            'qty' => $this->qty,
            'note' => $this->note,
            'date' => $this->date,
            'order_id' => $this->id,
            'user_name' => $this->user_name,
        ]);
        Session::flash('message', 'Xuất phụ liệu thành công.');

        return redirect()->route('home');
    }
}
