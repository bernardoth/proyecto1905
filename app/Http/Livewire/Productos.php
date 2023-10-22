<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Producto;
use App\Models\Categoria;

class Productos extends Component
{
    use WithPagination;
    public $productosl,$search,$codigo,$descripcion,$precio,$stock,$estado,$categoria_id,$idprod;
    public $cat,$nomcat,$idcat,$cant_min;
    public $modal = 0;


    public function render()
    {
        /*
        $this->productos = Producto::where('codigo','like','%'.$this->search.'%')->
        orWhere('descripcion','like','%'.$this->search.'%')->paginate(10);
        */
        $this->cat = Categoria::all();

        return view('livewire.producto.productos',[
            'productos'=>Producto::where('codigo','like','%'.$this->search.'%')->
            orWhere('descripcion','like','%'.$this->search.'%')->paginate(10),
            'cat'=>$this->cat]);
    }

    public function crear()
    {
        $this->limpiar();
        $this->abrirModal();

    }
    public function guardar()
    {
        Producto::updateOrCreate(['id'=>$this->idprod],
        [
            'codigo'=>$this->codigo,
            'descripcion'=>$this->descripcion,
            'precio'=>$this->precio,
            'stock'=>$this->stock,
            'estado'=>$this->estado,
            'cant_min'=>$this->cant_min,
            'categoria_id'=>$this->categoria_id
        ]);
        session()->flash(
            'message',
            $this->idprod ? '¡Actualización exitosa!' : '¡Alta Exitosa!');

        $this->cerrarModal();
        $this->limpiar();
    }
    public function editar($id,$idcat)
    {
        $cat = Categoria::findOrFail($idcat);
        $nomcat = $cat->nombre;
        $productol = Producto::findOrFail($id);
        $this->idprod = $id;
        $this->codigo = $productol->codigo;
        $this->descripcion = $productol->descripcion;
        $this->precio = $productol->precio;
        $this->stock = $productol->stock;
        $this->estado = $productol->estado;
        $this->cant_min = $productol->cant_min;
        $this->categoria_id =$productol->categoria_id;

        $this->abrirModal();
    }

    public function borrar($id)
    {
        Producto::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }
    public function abrirModal()
    {
        $this->modal=true;
    }

    public function cerrarModal()
    {
        $this->modal=false;
    }

    public function limpiar()
    {
        $this->codigo='';
        $this->descripcion='';
        $this->precio='';
        $this->stock='';
        $this->estado='';
        $this->cant_min='';
        $this->categoria_id='';
    }
}
