<div class="container  mx-auto my-auto">
    <div class="grid grid-cols-8 grid-rows-7 py-2 gap-2 text-left mt-3">
        <div class="col-span-8 text-white bg-slate-600 py-2 px-2">
            Inventario de Productos
        </div>
        <div class="py-2 col-span-7 px-2 bg-slate-600 ">

            <input wire:model="search" type="text">

        </div>
        <div>
            <button wire:click="crear()"
                                class="float-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-6 my-3">
                                Nuevo</button>

        </div>

        <div class="bg-slate-600 col-span-8 px-2 py-2">
            <table class="bg-gray-700 py-2 text-gray-200 table-auto w-full pb-5 text-center">
                <thead class="bg-slate-800 h-10 border-2 border-slate-400">
                        <tr >
                            <th class="px-4 py-2">id</th>
                            <th class="px-4 py-2">Codigo</th>
                            <th class="px-4 py-2">Descripcion</th>
                            <th class="px-4 py-2">Precio</th>
                            <th class="px-4 py-2">Stock</th>
                            <th class="px-4 py-2">Estado</th>
                            <th class="px-4 py-2">Categoria</th>
                            <th class="px-4 py-2">Acciones</th>

                        </tr>
                </thead>
                <tbody>
                    @if ($productos != null)
                    @foreach ($productos as $prod)
                        <tr >
                            <td class="border px-4 py-2">{{ $prod->id }}</td>
                            <td class="border px-4 py-2">{{ $prod->descripcion }}</td>
                            <td class="border px-4 py-2">{{ $prod->nombre}}</td>
                            <td class="border px-4 py-2">{{ $prod->precio}}</td>
                            <td class="border px-4 py-2">{{ $prod->stock}}</td>




                        </tr>
                    @endforeach
                    @endif


                </tbody>

            </table>
            <div class="py-4">

            </div>
        </div>
    </div>
</div>


