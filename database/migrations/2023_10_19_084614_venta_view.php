<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement("
        CREATE VIEW ventas_view
            AS
        SELECT
            ventas.id,
            ventas.estado,
            CONCAT(clientes.nombres,' ',clientes.apellidos) AS titular,
            ventas.updated_at,
            SUM( producto_venta.cantidad*producto_venta.precioventa) AS totalventa
        FROM ventas
        INNER JOIN producto_venta ON (ventas.id=producto_venta.venta_id)
        INNER JOIN clientes ON (ventas.cliente_id=clientes.id)
        GROUP BY(ventas.id)
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
