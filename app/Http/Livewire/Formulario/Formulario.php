<?php

namespace App\Http\Livewire\Formulario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Venta;
use App\Models\User;

class Formulario extends Component
{

    public $ventaCliente,$selectClie,$clientes,$valor,$nombreClie,$apellidos,$cinit,$busqueda;
    public $modalClie= false,$modalProd = false,$experimento;
    public $prod,$descripcion,$precioventa,$precio,$cantidad,$subtotal,$idProd;
    public $datosCliente,$arreglo="primero",$estado='PROFORMA',$listaProd=[];
    public $idventa,$dVenta,$lprod,$v=[],$lv=[],$actualizar,$venta,$cliente,$producto,$cont;

    protected $listeners = ['addCliente','cerrarModal','addProducto','guardar','editaVenta'];

    public function mount($valor)
    {   if ($valor!=0)
        {
            $this->actualizar = $valor;
            $this->venta =Venta::find($valor);
            $this->selectClie = $this->venta->cliente->id;
            $this->estado = $this->venta->estado;


            $p=$this->venta->productos;

           // $this->actualizar = 1;
            for($i=0;$i< count($p);$i++)
            {
                $idlista =  $p[$i]->id;
                $deslista = $p[$i]->descripcion;
                $preciolista =  $p[$i]->precio;//kkk
                $cantidadlista =  $p[$i]->pivot->cantidad;
                $v['id'] = $idlista;
                $v['descripcion'] = $deslista;
                $v['cantidad'] =$cantidadlista ;
                $v['precio'] = $preciolista;
                $v['subtotal'] = $cantidadlista * $preciolista;
                array_push($this->lv,$v);

                $v=[];
                //$this->bernardo = 'Que pachucas';


            }
            //$this->arreglo = JSON_encode($this->lv);
            $this->arreglo = $this->lv;

            $this->dim = count($this->lv);

        }

    }

    public function render()
    {


        if ($this->selectClie>0)
        {
            $this->cliente = Cliente::find($this->selectClie);
            $this->nombreClie = $this->cliente->nombres ;
            $this->apellidos = $this->cliente->apellidos;
            $this->cinit = $this->cliente->ci;

        }


        return view('livewire.formulario.formulario');
    }

    public function modal($mod)
    {

        if ($mod=='clie') {
            $this->modalClie = true;

        }
        else{
            $this->modalProd = true;
        }
    }



    public function cerrarModal()
    {
        $this->modalClie = false;
        $this->modalProd = false;
    }

    public function addCliente($id)
    {
        $this->selectClie = $id;
        $this->cerrarModal();
    }



    public function addProducto($id)
    {
        $this->cerrarModal();
        $this->idProd = $id;
        $this->producto = Producto::find($id);
        $this->descripcion = $this->producto->descripcion;
        $this->precio = $this->producto->precio;
        $this->cantidad = 0;
        $this->subtotal= $this->precio* $this->cantidad;
        array_push($this->listaProd,$id);
        $this->cont = count($this->listaProd);
    }

    public function nuevoCliente()
    {
        if ($this->cinit!='') {
            $this->cliente = Cliente::where('ci',$this->cinit)->get();
            if (is_null($this->cliente)) {
                $nClie = new Cliente();
                $nclie->nombres = $this->nombres;
                $nclie->apellidos = $this->apellidos;
                $nClie->cinit = $this->cinit;
            }

        }
    }
    public function guardar()
    {
        //$this->arreglo = $que;
        if (is_null($this->selectClie)) {
            $newClie = new Cliente();
            $newClie->nombres = $this->nombreClie;
            $newClie->apellidos = $this->apellidos;
            $newClie->ci = $this->cinit;
            $newClie->save();
            $c = Cliente::where('ci',$this->cinit)->get();
            $this->selectClie = $newClie->id;
        }
        /*
            $v = new Venta();
            $v->estado = 'Pendiente';
            $v->cliente_id = $this->selectClie;
            $v->user_id =  Auth::user()->id;
            $v->save();
            $m =JSON_decode($this->arreglo);
            //$this->idUser = $m[0]->descripcion;
        */
        if ($this->actualizar>0)
        {
            $this->idventa = $this->actualizar;
        }
        else {
            $this->idventa = 0;
        }
        $v = Venta::updateOrCreate(
            ['id'=>$this->idventa],
            ['estado'=>$this->estado,
            'cliente_id'=>$this->selectClie,
            'user_id'=>Auth::user()->id]);

            $m = JSON_decode($this->arreglo);
            //linea de prueba
            $v->productos()->detach();
            foreach ($m as $elem)
            {
                //insercion de productos

                $v->productos()->attach(
                    $elem->id,
                    ['cantidad'=>$elem->cantidad,
                    'precioventa'=>$elem->precio
                ]);
                $anterior = Producto::find($elem->id)->stock;
                if ($v->estado=='PEDIDO')
                {

                    Producto::updateOrCreate(['id'=>$elem->id],
                    [

                        'stock'=>$anterior-$elem->cantidad,

                    ]);

                }
                if ($v->estado=='CANCELADO')
                {

                    Producto::updateOrCreate(['id'=>$elem->id],
                    [

                        'stock'=>$anterior+$elem->cantidad,

                    ]);

                }


            }


            return view('livewire.venta.ventas');


    }

    public function editaVenta($id)
    {
        $this->valor = $id;
    }



}
