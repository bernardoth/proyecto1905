<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //




        Producto::create([
            'codigo' => ' fd35r',
            'descripcion'=>'pernos',
            'precio'=>'724',
            'stock'=>'250',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46920',
            'descripcion'=>'ABRAZADERA DE UÑA 1/2 BOLSA CON 10 PZA VOLTECK',
            'precio'=>'352',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46921',
            'descripcion'=>'ABRAZADERA DE UÑA 3/4 VOLTECH 10 PZS',
            'precio'=>'39',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46922',
            'descripcion'=>'ABRAZADERA DE UÑA 1" VOLTECK BOLSA C/10 PZS',
            'precio'=>'914',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44230',
            'descripcion'=>'ABRAZADERA NO. 4 10-16MM FIERO 10 PZS MI',
            'precio'=>'5584',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44232',
            'descripcion'=>'ABRAZADERA NO. 4 3/8-5/8" REFOR BOLSA 10',
            'precio'=>'501',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44233',
            'descripcion'=>'ABRAZADERA NO. 6 1/2-3/4 BOLSA 10 PZS',
            'precio'=>'5753',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44231',
            'descripcion'=>'ABRAZADERA NO. 6 1/2-3/4" BOLSA C/10 PZS',
            'precio'=>'7263',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44234',
            'descripcion'=>'ABRAZADERA NO. 8 5/8-7/8" BOLSA 10 PZS',
            'precio'=>'9053',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44235',
            'descripcion'=>'ABRAZADERA NO.10 19-27MM FIERO 10 P AB-1',
            'precio'=>'3478',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44236',
            'descripcion'=>'ABRAZADERA NO.12 5/8-1-1/4" BOLSA 10 PZS',
            'precio'=>'231',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44237',
            'descripcion'=>'ABRAZADERA NO.16 19-38MM FIERO 10 PB',
            'precio'=>'72',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44238',
            'descripcion'=>'ABRAZADERA NO.20 3/4- 1-3/4" BOLSA 10 PZ',
            'precio'=>'2909',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44239',
            'descripcion'=>'ABRAZADERA NO.24 1-1/4-2" BOLSA 10 PZS',
            'precio'=>'2385',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44240',
            'descripcion'=>'ABRAZADERA NO.28 1-1/2 - 2-1/4 BOLSA 10P',
            'precio'=>'3196',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44243',
            'descripcion'=>'ABRAZADERA NO.40 57-76MM FIERO 5 PB',
            'precio'=>'8826',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44246',
            'descripcion'=>'ABRAZADERA NO.52 72-95MM FIERO 5 PZSB',
            'precio'=>'4544',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44250',
            'descripcion'=>'ABRAZADERA NO.72 105-127MM FIERO 5 PZS B',
            'precio'=>'6239',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46923',
            'descripcion'=>'ABRAZADERA OMEGA 1/2 VOLTECK BOLSA C/10 PZA',
            'precio'=>'7563',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46924',
            'descripcion'=>'ABRAZADERA OMEGA 3/4" VOLTECK C/10 PZA',
            'precio'=>'9098',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46925',
            'descripcion'=>'ABRAZADERA OMEGA1" VOLTECKBOLSA CON 10 PZS',
            'precio'=>'2802',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '102304',
            'descripcion'=>'ABRAZADERA OMEGA 1 1/4" AKSI',
            'precio'=>'6714',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46030',
            'descripcion'=>'ABRAZADERA OMEGA 1 1/4" VOLTECH 5 PZS',
            'precio'=>'5164',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46928',
            'descripcion'=>'ABRAZADERA OMEGA 3" BOLSA CON 5 PZA VOLTECK',
            'precio'=>'5681',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => ' ABR-T8 PP ',
            'descripcion'=>'ABRAZADERA PARA TUBO LED T8 POLIPROPILENO',
            'precio'=>'291',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '57045',
            'descripcion'=>'ABSORBEDOR DE HUMEDAD 300GR KLINTEK',
            'precio'=>'7507',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '191558',
            'descripcion'=>'ACCESORIO P/MULTIPRO AKSI',
            'precio'=>'8804',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '290147',
            'descripcion'=>'ACCESORIO P/TALADRO ANGULO 90 Y 6 PUNTAS',
            'precio'=>'150',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '10',
            'descripcion'=>'ACCESORIO P/TALADRO BOLSA',
            'precio'=>'1088',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '190194',
            'descripcion'=>'ACCESORIO P/TALADRO CARDA Y DAPTADOR',
            'precio'=>'938',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '190196',
            'descripcion'=>'ACCESORIO P/TALADRO DISCO C/METAL JGO',
            'precio'=>'1429',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '190193',
            'descripcion'=>'ACCESORIO P/TALADRO SIERRA JGO 102 MM',
            'precio'=>'4328',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '306411',
            'descripcion'=>'ACCESORIOS P/AIRE 14 PZS MAX TOOLS',
            'precio'=>'7355',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' L4927 ',
            'descripcion'=>'ACCESORIOS P/AIRE 17 PZS LION TOOLS',
            'precio'=>'3791',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '306412',
            'descripcion'=>'ACCESORIOS P/AIRE 17 PZS MAX-TOOLS',
            'precio'=>'689',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '19022',
            'descripcion'=>'ACCESORIOS P/AIRE 17 PZS TRUPER JAN-17',
            'precio'=>'3075',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' L4920 ',
            'descripcion'=>'ACCESORIOS P/AIRE 18 PZS LION TOOLS',
            'precio'=>'4705',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '19076',
            'descripcion'=>'ACCESORIOS P/AIRE TRUPER 2 VAL INFLA ADAPTADOR',
            'precio'=>'4303',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '49255',
            'descripcion'=>'ACCESORIOS P/BA¥O FOSET 5 PZS BASIC',
            'precio'=>'7396',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '16285',
            'descripcion'=>'ACCESORIOS P/MOTOTOOL TRUPER KIT 41 PZS*',
            'precio'=>'4075',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '290103',
            'descripcion'=>'ACCESORIOS PARA TALADRO DISCOS 1/8" DIAM',
            'precio'=>'8185',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '372',
            'descripcion'=>'ACEITE 3 EN 1 30 MIL. CHICO *',
            'precio'=>'8698',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '628',
            'descripcion'=>'ACEITE 3 EN 1 90 MIL GRANDE *',
            'precio'=>'8939',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '119581',
            'descripcion'=>'ACEITE AKSI P/MOTOR 2 TIEMPOS CHICO 120 MIL.',
            'precio'=>'8597',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '119582',
            'descripcion'=>'ACEITE AKSI P/MOTOR 2 TIEMPOS GRANDE 475 MIL',
            'precio'=>'6171',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '4426',
            'descripcion'=>'ACEITE LUBRICANTE MOL *',
            'precio'=>'5064',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '16711',
            'descripcion'=>'ACEITE LUBRICANTE TRUPER 30 MIL CHICO A-31-30',
            'precio'=>'6806',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '16712',
            'descripcion'=>'ACEITE LUBRICANTE TRUPER 90 MIL GRANDE A-31-90',
            'precio'=>'8836',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '2554',
            'descripcion'=>'ACEITE ROJO 240 ML. *',
            'precio'=>'3764',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => ' OC125 ',
            'descripcion'=>'ACEITERA 125CC MAR-RAM FLEXIBLE',
            'precio'=>'2313',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => ' OC500 ',
            'descripcion'=>'ACEITERA 500CC MAR-RAM FLEXIBLE',
            'precio'=>'274',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => ' AM200MR ',
            'descripcion'=>'ACEITERA MAR-RAM 200CC PROFESIONAL',
            'precio'=>'443',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => ' AM300MR ',
            'descripcion'=>'ACEITERA MAR-RAM 300CC PROFESIONAL',
            'precio'=>'133',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '14870',
            'descripcion'=>'ACEITERA TRUPER FLEXIBLE 180MI ACEF-180*',
            'precio'=>'3358',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '2847',
            'descripcion'=>'ACIDO MURIATICO 1 LTS .',
            'precio'=>'2798',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '48485',
            'descripcion'=>'ACOPLADOR COAXIAL EXTERIOR VOLTECH',
            'precio'=>'3919',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' 01-2010 ',
            'descripcion'=>'ACOPLADOR EXTERIOR MITZU',
            'precio'=>'120',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '854',
            'descripcion'=>'ADAPTADOR 3 PZS MAR-RAM',
            'precio'=>'4245',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' IA03-F',
            'descripcion'=>'ADAPTADOR 3 PZS MAR-RAM IMPACTO',
            'precio'=>'7624',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' DR3412MR',
            'descripcion'=>'ADAPTADOR 3/4 A 1/2 MAR-RAM REDUCCION',
            'precio'=>'5384',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '49307',
            'descripcion'=>'ADAPTADOR FOSET 1" MACHOBOMBA POLIDUT',
            'precio'=>'4047',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '49306',
            'descripcion'=>'ADAPTADOR FOSET 3/4" MACHO BOMBA POLIDU',
            'precio'=>'4084',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' DR2MR ',
            'descripcion'=>'ADAPTADOR MAR-RAM 2 PZS 3/8A1/4 1/2A3/8',
            'precio'=>'8281',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '290145',
            'descripcion'=>'ADAPTADOR P/TALADRO 1/2 OBI',
            'precio'=>'9149',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '20050',
            'descripcion'=>'ADAPTADOR PRETUL Y P/MANGUERA AD-2P *',
            'precio'=>'906',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342263',
            'descripcion'=>'ADAPTADOR TELEFONICO 1 A 2 SANELEC 4226',
            'precio'=>'7081',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342256',
            'descripcion'=>'ADAPTADOR TELEFONICO 1 A 2 SANELEC GRANE',
            'precio'=>'2688',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342232',
            'descripcion'=>'ADAPTADOR TELEFONICO 1 A 3 SANELEC 4223',
            'precio'=>'2197',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342249',
            'descripcion'=>'ADAPTADOR TELEFONICO 1 A 3 SANELEC BLIST',
            'precio'=>'292',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46074',
            'descripcion'=>'ADAPTADOR TELEFONICO 2 A 1 VOLTECH',
            'precio'=>'8009',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342270',
            'descripcion'=>'ADAPTADOR TELEFONICO P/EXTEN DE 2 LINEAS',
            'precio'=>'1286',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342287',
            'descripcion'=>'ADAPTADOR TELEFONICO P/EXTEN P/2 LINEAS',
            'precio'=>'2404',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '10372',
            'descripcion'=>'ADAPTADOR TRUPER P/2 Y MANGUERAS AD-2 AL',
            'precio'=>'8161',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '43',
            'descripcion'=>'ADORNO DE DELFINES C/BASE FPD206-C',
            'precio'=>'3595',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' L6782 ',
            'descripcion'=>'AEROGRAFO LION TOOLS C/ACCESORIOS',
            'precio'=>'349',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '14016',
            'descripcion'=>'AFILADOR DE CUCHILLOS TRUPER',
            'precio'=>'6665',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' L8341 ',
            'descripcion'=>'AFILADOR DE CUCHILLOS YNAVAJAS LION TOOLS',
            'precio'=>'2854',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' JA4MR ',
            'descripcion'=>'AFINACION 4 PZS 1/2 MAR-RAM PROFESIONAL',
            'precio'=>'4277',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' JA4MR-F ',
            'descripcion'=>'AFINACION 4 PZS FLEXIBLE MAR-RAM 1/2 MAT',
            'precio'=>'2821',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '365026',
            'descripcion'=>'AFLOJATODO LUBRICANTE 110 G SANTUL 6502',
            'precio'=>'1274',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '13468',
            'descripcion'=>'AFLOJATODO LUBRICANTE 110 MIL TRUPERNUEVO',
            'precio'=>'7907',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '365033',
            'descripcion'=>'AFLOJATODO LUBRICANTE 235 G SANTUL 6503',
            'precio'=>'5713',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '13469',
            'descripcion'=>'AFLOJATODO LUBRICANTE 235 MIL TRUPER NUEVO',
            'precio'=>'4846',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '365040',
            'descripcion'=>'AFLOJATODO LUBRICANTE 400 G SANTUL 6504',
            'precio'=>'7089',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '13471',
            'descripcion'=>'AFLOJATODO LUBRICANTE 400 MIL TRUPER NUEVO',
            'precio'=>'907',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '1268',
            'descripcion'=>'AFLOJATODO WD-40 5.5 ONZAS',
            'precio'=>'3269',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '8',
            'descripcion'=>'AFLOJATODO WD-40 8 ONZAS """""OJO""""',
            'precio'=>'3626',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '20',
            'descripcion'=>'AIRE COMPRIMIDO AIR FLAM 514 MIL AMARILL',
            'precio'=>'832',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '532',
            'descripcion'=>'ALAMBRE 10 POR METRO',
            'precio'=>'722',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '16',
            'descripcion'=>'ALAMBRE 8POR METRO',
            'precio'=>'8651',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44884',
            'descripcion'=>'ALAMBRE DE PUAS CALI 15 ROLLO DE 100MTSA',
            'precio'=>'1088',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '117053',
            'descripcion'=>'ALAMBRE DE PUAS CALIBRE 15.5 360MTS AKSI',
            'precio'=>'9486',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44465',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 12.5 FIERO',
            'precio'=>'4167',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44466',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 14.5 FIERO',
            'precio'=>'2378',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44467',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 16 FIERO',
            'precio'=>'9386',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44468',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 18 FIERO',
            'precio'=>'9799',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44469',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 20 FIERO',
            'precio'=>'837',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44470',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 22 FIERO',
            'precio'=>'4786',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '15',
            'descripcion'=>'ALAMBRE GALVANIZADO TLAPALERO NO.16',
            'precio'=>'1421',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '16',
            'descripcion'=>'ALAMBRE GALVANIZADO TLAPALERO NO.18',
            'precio'=>'2745',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '17',
            'descripcion'=>'ALAMBRE GALVANIZADO TLAPALERO NO.20',
            'precio'=>'9465',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '18',
            'descripcion'=>'ALAMBRE GALVANIZADO TLAPALERO NO.22',
            'precio'=>'9087',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '35',
            'descripcion'=>'ALAMBRE NO.10',
            'precio'=>'704',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '36',
            'descripcion'=>'ALAMBRE NO.12',
            'precio'=>'7942',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '37',
            'descripcion'=>'ALAMBRE NO.14',
            'precio'=>'8587',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '38',
            'descripcion'=>'ALAMBRE NO.8',
            'precio'=>'9108',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44458',
            'descripcion'=>'ALAMBRE RECOCIDO POR KILO',
            'precio'=>'978',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44457',
            'descripcion'=>'ALAMBRE RECOCIDO POR ROLLO DE 20 CAL16',
            'precio'=>'1577',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '346025',
            'descripcion'=>'ALARMA SANTUL PUERTAS Y VENTANAS CONTRO REMOTO 460',
            'precio'=>'8543',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44989',
            'descripcion'=>'ALCAYATA ROSCADA 21X80 MM 12 PZS',
            'precio'=>'7987',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44991',
            'descripcion'=>'ALCAYATA ROSCADA 22X100 MM 12 PZS',
            'precio'=>'4305',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44990',
            'descripcion'=>'ALCAYATA ROSCADA 22X90 MM 12 PZS',
            'precio'=>'7564',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44992',
            'descripcion'=>'ALCAYATA ROSCADA 23X110 MM 12 PZS',
            'precio'=>'4905',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '138',
            'descripcion'=>'ALCAYATA VARILLA 13 CTM',
            'precio'=>'1832',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '191',
            'descripcion'=>'ALCAYATA VARILLA 16 CTM',
            'precio'=>'4444',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '281',
            'descripcion'=>'ALCAYATA VARILLA 18 CTM',
            'precio'=>'6725',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '592',
            'descripcion'=>'ALCAYATA VARILLA DE OJO CHICA 3/8',
            'precio'=>'293',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '918',
            'descripcion'=>'ALCAYATA VARILLA DE OJO GRANDE',
            'precio'=>'1291',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '816',
            'descripcion'=>'ALCAYATA VARILLA DE OJO MEDIANA 1/2',
            'precio'=>'5573',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '985',
            'descripcion'=>'ALCOHOL EN GEL 250ML CARNU',
            'precio'=>'3995',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '50',
            'descripcion'=>'ALEZNA FINA ECONOMICA *E014',
            'precio'=>'3256',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '66261079600',
            'descripcion'=>'ALMOHADILLA NORTON VERDE MUY FINO 152X22',
            'precio'=>'4296',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '465',
            'descripcion'=>'AMARRADOR DE VARILLA',
            'precio'=>'171',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '367',
            'descripcion'=>'AMARRADOR REDONDO',
            'precio'=>'5664',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => ' 02-2007 ',
            'descripcion'=>'ANTENA C/B C/2 ARI COAX MITZ02-2007',
            'precio'=>'3191',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' AIN21 ',
            'descripcion'=>'ANTENA INTERIOR PLANA HDTV 21" SURTEK',
            'precio'=>'896',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' SALP',
            'descripcion'=>'ANTENA MAGA¥A A-A13 ALPHA',
            'precio'=>'523',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' S-OMEGA ',
            'descripcion'=>'ANTENA MAGA¥A A-A14 OMEGA ALETA CURVA',
            'precio'=>'9267',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' SORO',
            'descripcion'=>'ANTENA MAGA¥A A-ORO DURA ORO',
            'precio'=>'647',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' UV14',
            'descripcion'=>'ANTENA MAGA¥A A-UV14-MX 28 ELEMENTOS',
            'precio'=>'5434',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '341969',
            'descripcion'=>'ANTENA SANELEC GIRATORIA CLASICA CONTROL',
            'precio'=>'523',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '341822',
            'descripcion'=>'ANTENA SANELEC HD TV INTERIOR 12" NEGRA',
            'precio'=>'9849',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '341907',
            'descripcion'=>'ANTENA SANELEC PLANA MINI ULTRA DELGADA',
            'precio'=>'3553',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' AN-4002 ',
            'descripcion'=>'ANTENA T/PANA FUSSION C/COAXIAL Y PLANO',
            'precio'=>'8219',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' AN-4000A',
            'descripcion'=>'ANTENA T/PANA FUSSION C/PLANO',
            'precio'=>'434',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A-AT',
            'descripcion'=>'ANTENA TIPO T LUMIHDIML3MTS DE CABLE POLIETILE',
            'precio'=>'7513',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '57',
            'descripcion'=>'ANTENA TIPO T PVC LUMIHD CHICA C/ABLE',
            'precio'=>'6264',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '67',
            'descripcion'=>'ANTENA TIPO T PVC LUMIHD GRANDE C/CABLE',
            'precio'=>'8783',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '375827',
            'descripcion'=>'ANTORCHA RUSTICA SANTUL BAMBU 7582',
            'precio'=>'512',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46444',
            'descripcion'=>'APAGADOR COLA DE RATA VOLTECH',
            'precio'=>'9251',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46001',
            'descripcion'=>'APAGADOR CON CONTACTO VOLTECK',
            'precio'=>'895',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '117213',
            'descripcion'=>'APAGADOR DE PASO AKSI',
            'precio'=>'6723',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '2355',
            'descripcion'=>'APAGADOR DE PASO ROYER 227',
            'precio'=>'93',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342959',
            'descripcion'=>'APAGADOR DE PASO SANELEC',
            'precio'=>'4479',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '1084',
            'descripcion'=>'APAGADOR ESCALERA MODUS 10A *',
            'precio'=>'9606',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '4457',
            'descripcion'=>'APAGADOR ESCALERA QUINZI¥O *',
            'precio'=>'4592',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '2137',
            'descripcion'=>'APAGADOR ESCALERA ROYER 3223 *',
            'precio'=>'4144',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '19',
            'descripcion'=>'APAGADOR ESCALERA SAMY',
            'precio'=>'6944',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '136558',
            'descripcion'=>'APAGADOR PUSH SURTEK',
            'precio'=>'2287',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '70',
            'descripcion'=>'APAGADOR ROYER VIS.CUAD.222 *',
            'precio'=>'605',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '1859',
            'descripcion'=>'APAGADOR ROYER VIS.RED.221 *',
            'precio'=>'6162',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '4456',
            'descripcion'=>'APAGADOR SENCILLO BTICINO *',
            'precio'=>'8996',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' E2001 ',
            'descripcion'=>'APAGADOR SENCILLO BTICINO MODUS *',
            'precio'=>'6496',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '2731',
            'descripcion'=>'APAGADOR SENCILLO ROYER 3222 *',
            'precio'=>'5488',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '42',
            'descripcion'=>'APAGADOR SENCILLO SAMY',
            'precio'=>'7955',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '343147',
            'descripcion'=>'APAGADOR VISIBLE OVALADO SANELEC 4314',
            'precio'=>'331',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '116742',
            'descripcion'=>'APAGADOR VISIBLE PLANO AKSI',
            'precio'=>'2683',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46004',
            'descripcion'=>'APAGADOR VISIBLE VOLTECH APSO-S',
            'precio'=>'3488',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' P-LL1605-25 ',
            'descripcion'=>'ARBOL P/REGADERA CON TORNILLO',
            'precio'=>'9389',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' DCS05-F ',
            'descripcion'=>'ARCO P/CALAR 5 SEGUETAS RAM-TOOLS',
            'precio'=>'648',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' H002',
            'descripcion'=>'ARCO P/CALAR MADERA NO.2 TUBULAR',
            'precio'=>'4234',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' H003',
            'descripcion'=>'ARCO P/CALAR MADERA NO.3 TUBULAR',
            'precio'=>'1732',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' ARCO12MR',
            'descripcion'=>'ARCO P/SEGUETA MAR-RAM CUADRADO M/AMARIL',
            'precio'=>'5956',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '301004',
            'descripcion'=>'ARCO P/SEGUETA MAX-TOOLS CROMADO',
            'precio'=>'4585',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '301001',
            'descripcion'=>'ARCO P/SEGUETA MAX-TOOLS SOLERA',
            'precio'=>'5058',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '1825',
            'descripcion'=>'ARCO P/SEGUETA MINI ECONOMICO *',
            'precio'=>'1533',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '20017',
            'descripcion'=>'ARCO P/SEGUETA PRETUL SOLERA 12" A*',
            'precio'=>'2492',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '370327',
            'descripcion'=>'ARCO P/SEGUETA SANTUL 7032 ALTA TENSION',
            'precio'=>'7862',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' H044',
            'descripcion'=>'ARCO P/SEGUETA SOLERA 1/2X1"',
            'precio'=>'1835',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' AR15110 ',
            'descripcion'=>'ARCO P/SEGUETA SOLERA 1/4X1GRIS',
            'precio'=>'5587',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' H005',
            'descripcion'=>'ARCO P/SEGUETA SOLERA 1/4X1"',
            'precio'=>'2429',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' H043',
            'descripcion'=>'ARCO P/SEGUETA SOLERA 3/8X1"',
            'precio'=>'5385',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '10232',
            'descripcion'=>'ARCO P/SEGUETA TRUPER TENS 12" P ATX12 *',
            'precio'=>'9639',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '10234',
            'descripcion'=>'ARCO P/SEGUETA TRUPER TUBULAR 12" ATT12*',
            'precio'=>'204',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '19255',
            'descripcion'=>'ARMAZON METALICO PARA RODILLO TRUPER',
            'precio'=>'1282',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '44377',
            'descripcion'=>'ARMELLA ABIERTA 17X40 24 PZS FIERO',
            'precio'=>'289',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44378',
            'descripcion'=>'ARMELLA ABIERTA 18X50 18 PZS FIERO',
            'precio'=>'7598',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44379',
            'descripcion'=>'ARMELLA ABIERTA 19X60 18 PZS FIERO',
            'precio'=>'7125',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44380',
            'descripcion'=>'ARMELLA ABIERTA 20X70 24 PZS FIERO',
            'precio'=>'283',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44381',
            'descripcion'=>'ARMELLA ABIERTA 21X80 12 PZS FIERO',
            'precio'=>'2775',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44382',
            'descripcion'=>'ARMELLA ABIERTA 22X100 12 PZS FIERO',
            'precio'=>'5386',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44383',
            'descripcion'=>'ARMELLA ABIERTA 23X110 12 PZS FIERO',
            'precio'=>'8605',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44370',
            'descripcion'=>'ARMELLA CERRADA 17X40 18 PZS FIERO',
            'precio'=>'6866',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44371',
            'descripcion'=>'ARMELLA CERRADA 18X50 18 PZS FIERO',
            'precio'=>'8516',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44372',
            'descripcion'=>'ARMELLA CERRADA 19X60 18 PZS FIERO',
            'precio'=>'1982',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44373',
            'descripcion'=>'ARMELLA CERRADA 20X70 18 PZS FIERO',
            'precio'=>'436',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44374',
            'descripcion'=>'ARMELLA CERRADA 21X80 12 PZS FIERO',
            'precio'=>'5856',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44375',
            'descripcion'=>'ARMELLA CERRADA 22X80 12 PZS FIERO',
            'precio'=>'6199',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44376',
            'descripcion'=>'ARMELLA CERRADA 23X110 12 PZS FIERO',
            'precio'=>'3426',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '137443',
            'descripcion'=>'ARNES SURTEK P/RESCATE UNITALLA',
            'precio'=>'8535',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '14439',
            'descripcion'=>'ARNES TRUPER 3 ANILLOS Y POSICI ARN5436¨',
            'precio'=>'2397',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '14432',
            'descripcion'=>'ARNES TRUPER CUERPO COMPLE 1 ANIARN5435¨',
            'precio'=>'6381',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '14434',
            'descripcion'=>'ARNES TRUPER CUERPO COMPLETO 5 ANILLOS P',
            'precio'=>'4714',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '14433',
            'descripcion'=>'ARNES TRUPER CUERPO COMPLETO ARN-5437',
            'precio'=>'4427',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '49902',
            'descripcion'=>'ASIENTO PARA WC 35 CM BLANCO FOSET',
            'precio'=>'7993',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '49903',
            'descripcion'=>'ASIENTO PARA WC 40 CM BLANCO FOSET',
            'precio'=>'6685',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' RS',
            'descripcion'=>'ASPERSOR GRIRATORIO MAR-RAM',
            'precio'=>'9445',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '375339',
            'descripcion'=>'ASPERSOR SANTUL C/ESTACA METAL 7533 *',
            'precio'=>'717',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '375322',
            'descripcion'=>'ASPERSOR SANTUL C/ESTACA PLASTICO 7532 *',
            'precio'=>'7515',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '375360',
            'descripcion'=>'ASPERSOR SANTUL CON ESTACA 9 FUNCIO 753*',
            'precio'=>'6067',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '375308',
            'descripcion'=>'ASPERSOR SANTUL METALICO P/RIEGO 7530*',
            'precio'=>'7789',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '12076',
            'descripcion'=>'ASPIRADORA FILTRO DE ESPUMA PA ASP1-03',
            'precio'=>'742',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '22090',
            'descripcion'=>'ASPIRADORA PRETUL P/AUTO 12 VOLS',
            'precio'=>'343',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '12091',
            'descripcion'=>'ASPIRADORA TRUPER 3 GALONES ASPI-03',
            'precio'=>'9489',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '12092',
            'descripcion'=>'ASPIRADORA TRUPER 6 GALONES ASPI-06',
            'precio'=>'6415',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '103502',
            'descripcion'=>'ATOMIZADOR AKSI 1 LTS.',
            'precio'=>'3607',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '103501',
            'descripcion'=>'ATOMIZADOR AKSI DE 500 MIL.',
            'precio'=>'8791',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '388018',
            'descripcion'=>'ATOMIZADOR SANTUL SPRAY 17 8801',
            'precio'=>'3136',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '388001',
            'descripcion'=>'ATOMIZADOR SPRAY SANTUL 900 MIL 8800',
            'precio'=>'9304',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' MH-7000WH ',
            'descripcion'=>'AUDIFONO MITZU 3.5 DIADEMA T-BEATS BLANCO',
            'precio'=>'7114',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' MH-9088BL ',
            'descripcion'=>'AUDIFONO MITZU BLUETOOTH V2 1+EDR 10M/MANOS LIBRES',
            'precio'=>'7659',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '13975',
            'descripcion'=>'AUTOCLER 135 PZS TRUPER 1/4-3/8-1/2 ¨¨',
            'precio'=>'6952',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' AEE1534MR ',
            'descripcion'=>'AUTOCLER 15 PZS MAR-RAM ENT 3/4 ASTRIADO',
            'precio'=>'1784',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A1434MR ',
            'descripcion'=>'AUTOCLER 15 PZS MAR-RAM ENTRADA DE 3/4',
            'precio'=>'8064',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A1612MR ',
            'descripcion'=>'AUTOCLER 16 PZS MAR-RAM PROF MILIMETRICO',
            'precio'=>'4968',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A1714MMR',
            'descripcion'=>'AUTOCLER 17 PZS 1/4" MAR-RAM MM.ROJO',
            'precio'=>'649',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' SK17',
            'descripcion'=>'AUTOCLER 17 PZS 1/4" MAR-RAM STD AZUL',
            'precio'=>'8341',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A2134MR ',
            'descripcion'=>'AUTOCLER 21 PZS MAR-RAM ENTRADA DE 3/4"',
            'precio'=>'9756',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A2512MR ',
            'descripcion'=>'AUTOCLER 25 PZS MAR-RAM PROF HOGAR/ CHIC',
            'precio'=>'3757',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A2512MMR',
            'descripcion'=>'AUTOCLER 25 PZS MAR-RAM PROFE USO TALLER',
            'precio'=>'9517',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' SK25',
            'descripcion'=>'AUTOCLER 25 PZS MAR-RAM SK25',
            'precio'=>'6313',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A40MR ',
            'descripcion'=>'AUTOCLER 40 PZS MAR-RAM 1/4"',
            'precio'=>'30',
            'stock'=>'15',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A52MR ',
            'descripcion'=>'AUTOCLER 52 PZS MAR-RAM PROFESINAL',
            'precio'=>'6138',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A75MR ',
            'descripcion'=>'AUTOCLER 75 PZS MAR-RAM 1/4',
            'precio'=>'15',
            'stock'=>'15',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' TC07-F',
            'descripcion'=>'AVELLANADOR 7 PZS RAM-TOOLS',
            'precio'=>'981',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '112120',
            'descripcion'=>'AVELLANADOR AKSI CON DOBLE MARIPOSA 3',
            'precio'=>'4114',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '12868',
            'descripcion'=>'AVELLANADOR TRUPER DE TUB 3/16-5/8 JAV-7',
            'precio'=>'114',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '10555',
            'descripcion'=>'AZADON P/NIÑOS TRUPER MANGO 42"ATJ-KID',
            'precio'=>'3358',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10603',
            'descripcion'=>'AZADON TRUPER AL-1 NO.1 FORJADO SIN MAN*',
            'precio'=>'3369',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10606',
            'descripcion'=>'AZADON TRUPER AL-2 NO.2 FORJADO SIN MAN*',
            'precio'=>'6773',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10609',
            'descripcion'=>'AZADON TRUPER AL-3 NO.3 FORJADO SIN MAN*',
            'precio'=>'3757',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10621',
            'descripcion'=>'AZADON TRUPER LANE C/MANGO NO.3 1.8 AL-3',
            'precio'=>'8466',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' MSA-4015ST',
            'descripcion'=>'BAFLE AMPLIFICADO 15" DONKER RECARG KIT',
            'precio'=>'1058',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' MSA-5815',
            'descripcion'=>'BAFLE AMPLIFICADO 15" KAISER RECARGABLE KIT',
            'precio'=>'9893',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' MSA-4015',
            'descripcion'=>'BAFLE DONKER 15" RECARGABLE BLUETOOTH LUZ LED',
            'precio'=>'6291',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' MSA-5715',
            'descripcion'=>'BAFLE MITZU 15" RECARGABLE AMPLI BLUETOOTH',
            'precio'=>'1776',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' KSA-7908BT',
            'descripcion'=>'BAFLE MITZU 8" RECARGABLE AMPLIFICADO BLUETOOTH',
            'precio'=>'7',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '8063',
            'descripcion'=>'BALASTRA LUMICON 2X39 127V.T12 SLIM-LINE',
            'precio'=>'4708',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '19784',
            'descripcion'=>'BALERO P/CARRETILLA JGO 2 PZS',
            'precio'=>'3518',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' SR-1028CR ',
            'descripcion'=>'BANDERIN ANARANJADO MALLA C/REFLEJANTE T',
            'precio'=>'3465',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BALLMR',
            'descripcion'=>'BANDOLA CON DESTORCEDOR MAR-RAM 1PZ 5/8"',
            'precio'=>'6772',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' ASL07DB ',
            'descripcion'=>'BANDOLA DE ALUMINIO 2 PZS 7MM BR COLORES',
            'precio'=>'3463',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '206202',
            'descripcion'=>'BANDOLA GIRA C/DESTOR OVAL 3/8 10 PZS',
            'precio'=>'7002',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BGF1MR',
            'descripcion'=>'BANDOLA GIRATORIA CIERRE RAPIDO 1" GANCHO FIJO',
            'precio'=>'462',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BG1MR ',
            'descripcion'=>'BANDOLA GIRATORIA DESTORCEDOR 1"',
            'precio'=>'2094',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '206263',
            'descripcion'=>'BANDOLA MOSQUETON RECTA 12 CM',
            'precio'=>'661',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '206261',
            'descripcion'=>'BANDOLA MOSQUETON RECTA 8 CM',
            'precio'=>'677',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '377784',
            'descripcion'=>'BANDOLA SANTUL 2" LARGO 51 MM 7778',
            'precio'=>'4018',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '377807',
            'descripcion'=>'BANDOLA SANTUL 3 1/2" LA 89 MM 7780*',
            'precio'=>'9782',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '377791',
            'descripcion'=>'BANDOLA SANTUL 3" LARGO 76 MM 7779 *',
            'precio'=>'6853',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '377821',
            'descripcion'=>'BANDOLA SANTUL 4 1/2" LA 108 MM 7782*',
            'precio'=>'4921',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '377814',
            'descripcion'=>'BANDOLA SANTUL 4" LARGO 102 MM 7781 *',
            'precio'=>'4044',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMALUM8MR ',
            'descripcion'=>'BANDOLA TIPO PERA ALUMINIO 8X80MM C/SEGURO MAR-RAM',
            'precio'=>'5458',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS6MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 6X60MM C/SEGURO MAR-RAM',
            'precio'=>'5159',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMA6MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 6X60MM MAR-RAM',
            'precio'=>'9419',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS7MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 7X70MM C/SEGURO MAR-RAM',
            'precio'=>'1619',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMA7MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 7X70MM MAR-RAM',
            'precio'=>'984',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS8MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 8X80MM C/SEGURO MAR-RAM',
            'precio'=>'4341',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMA8MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 8X80MM MAR-RAM',
            'precio'=>'2185',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS9MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 9X90MM C/SEGURO MAR-RAM',
            'precio'=>'7903',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMA9MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 9X90MM MAR-RAM',
            'precio'=>'2961',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS10MR ',
            'descripcion'=>'BANDOLA TIPO PERA NO.10X100MM C/SEGURO MAR-RAM',
            'precio'=>'1095',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS12MR ',
            'descripcion'=>'BANDOLA TIPO PERA NO.12X140MM C/SEGURO MAR-RAM',
            'precio'=>'659',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '244841',
            'descripcion'=>'BANDOLA TIPO TRIANGULO 5 MM DELTA C/TU',
            'precio'=>'9666',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '12338',
            'descripcion'=>'BARBOQUEJO CON BARBILLA PARA CASCO TRUPER DE SEGUR',
            'precio'=>'8559',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '137622',
            'descripcion'=>'BARBOQUEJO SURTEK SIN BARBILLA',
            'precio'=>'3799',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10859',
            'descripcion'=>'BARRETA DE U¥A TRUPER 3/4X75CTM BU-75',
            'precio'=>'3316',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10762',
            'descripcion'=>'BARRETA TRUPER 1" X 1.75MTS BAP-175',
            'precio'=>'5184',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10756',
            'descripcion'=>'BARRETA TRUPER 1"X1.50 MTS BAP-150',
            'precio'=>'597',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10750',
            'descripcion'=>'BARRETA TRUPER 7/8"X100 CM',
            'precio'=>'430',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10753',
            'descripcion'=>'BARRETA TRUPER 7/8"X125CM',
            'precio'=>'359',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '49910',
            'descripcion'=>'BASCULA DE BA¥O HASTA 180 KG VOLTECH',
            'precio'=>'5048',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '207123',
            'descripcion'=>'BASCULA DE VIAJE MALETERA 25 KG OBI DIGI',
            'precio'=>'4472',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '359278',
            'descripcion'=>'BASCULA DIGITAL SANTUL 5 KILOS',
            'precio'=>'7216',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '207135',
            'descripcion'=>'BASCULA MULTISUSOS OBI 2KG/0.1G DIGITAL',
            'precio'=>'2662',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '21253',
            'descripcion'=>'BASCULA ROMANA PRETUL 25 KG',
            'precio'=>'1663',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '17087',
            'descripcion'=>'BASCULA TRUPER COLGANTE DE 10 KG.',
            'precio'=>'327',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '15160',
            'descripcion'=>'BASCULA TRUPER DIGITAL BASE DE VIDRIO 5 KG',
            'precio'=>'6648',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '17082',
            'descripcion'=>'BASCULA TRUPER MECANICA C/CUCHARON 2 KIL',
            'precio'=>'2257',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '17083',
            'descripcion'=>'BASCULA TRUPER MECANICA C/CUCHARON 5 KIL',
            'precio'=>'1341',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '17556',
            'descripcion'=>'BASE P/CAUTIN DE LAPIZ TRUPER C/ESPONJA',
            'precio'=>'9935',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '1384',
            'descripcion'=>'BASE P/MEDIDOR IUSA 4 TERMINALES 5875',
            'precio'=>'565',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '46025',
            'descripcion'=>'BASE P/MEDIDOR VOLTECH',
            'precio'=>'8445',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '117583',
            'descripcion'=>'BASE PORTALAMPARA BI PIN G13 AKSI',
            'precio'=>'5276',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '46508',
            'descripcion'=>'BASE PORTALAMPARA BIPIN VOLTECH POPL-15',
            'precio'=>'1046',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '313935',
            'descripcion'=>'BASE SANELECP/FOCO MR-16 FIJA CROMO',
            'precio'=>'9403',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '313942',
            'descripcion'=>'BASE SANELEC P/FOCO MR-16 DIRIGIBLE BLANCA',
            'precio'=>'3876',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '313928',
            'descripcion'=>'BASE SANELEC P/FOCO MR-16 FIJA BLANCA',
            'precio'=>'117',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '313959',
            'descripcion'=>'BASE SANELEC P/FOCO MR-16 MOBIBLE PLATA',
            'precio'=>'4225',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '46506',
            'descripcion'=>'BASE SLIM LINE VOLTECH POPL-14',
            'precio'=>'7612',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' IP-5525WH ',
            'descripcion'=>'BATERIA MITZU 2500 MA ULTRA PLANA UNIVER',
            'precio'=>'5384',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '150',
            'descripcion'=>'BERBIQUI ECONOMICO #12',
            'precio'=>'4087',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '11024',
            'descripcion'=>'BIELDO TRUPER 4 DIENTES JARDIN FIBRA 30"',
            'precio'=>'428',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '11003',
            'descripcion'=>'BIELDO TRUPER FORJADO 4 D C/M 50"BPJ-4',
            'precio'=>'9142',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '11018',
            'descripcion'=>'BIELDO TRUPER JARDIN T2000 4D C/M BJ-4P',
            'precio'=>'2867',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '11009',
            'descripcion'=>'BIELDO TRUPER PARA PAJA 6 DIENTES 54" MA',
            'precio'=>'6911',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '163',
            'descripcion'=>'BIRLO GALVANIZADO 1/4X4" P/LAMINAS',
            'precio'=>'5952',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10930010',
            'descripcion'=>'BIRLO GALVANIZADO 3/16X4 P/LAMINA PZ',
            'precio'=>'9027',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10930015',
            'descripcion'=>'BIRLO GALVANIZADO 3/16X5 P/LAMINA PZS',
            'precio'=>'7281',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '28800',
            'descripcion'=>'BISAGRA 3X3" HERMEX BASIC LATONADA C/AMA',
            'precio'=>'9322',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43237',
            'descripcion'=>'BISAGRA 3X3" HERMEX LATONADA P/PLANA',
            'precio'=>'4768',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43232',
            'descripcion'=>'BISAGRA 3X3" HERMEX LATONADA P/REDONDO',
            'precio'=>'5872',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43261',
            'descripcion'=>'BISAGRA HERMEX 3" MATE PLANA',
            'precio'=>'5057',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43239',
            'descripcion'=>'BISAGRA HERMEX 4" ACERO LATONADO PLANA',
            'precio'=>'7668',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43193',
            'descripcion'=>'BISAGRA HERMEX LATONADA 1 1/2"X1 3/16"',
            'precio'=>'3172',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43192',
            'descripcion'=>'BISAGRA HERMEX LATONADA 1"X7/8"',
            'precio'=>'2852',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43195',
            'descripcion'=>'BISAGRA HERMEX LATONADA 2 1/2"X1 5/8"',
            'precio'=>'4747',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43194',
            'descripcion'=>'BISAGRA HERMEX LATONADA 2"X 1 1/2"',
            'precio'=>'5179',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43197',
            'descripcion'=>'BISAGRA HERMEX LATONADA 3 1/2"X 2 1/8"',
            'precio'=>'1654',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43196',
            'descripcion'=>'BISAGRA HERMEX LATONADA 3"X 1 15/16"',
            'precio'=>'2732',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43198',
            'descripcion'=>'BISAGRA HERMEX LATONADA 4"X 2 3/4"',
            'precio'=>'870',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43186',
            'descripcion'=>'BISAGRA HERMEX PULIDO 1 1/2"X1 3/16"',
            'precio'=>'5305',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43185',
            'descripcion'=>'BISAGRA HERMEX PULIDO 1"X7/8"',
            'precio'=>'421',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43188',
            'descripcion'=>'BISAGRA HERMEX PULIDO 2 1/2"X1 5/8"',
            'precio'=>'6194',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43187',
            'descripcion'=>'BISAGRA HERMEX PULIDO 2"X 1 1/2"',
            'precio'=>'9705',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43190',
            'descripcion'=>'BISAGRA HERMEX PULIDO 3 1/2"X2 1/8"',
            'precio'=>'9944',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43189',
            'descripcion'=>'BISAGRA HERMEX PULIDO 3"X 1 15/16"',
            'precio'=>'602',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43191',
            'descripcion'=>'BISAGRA HERMEX PULIDO 4"X 2 3/4"',
            'precio'=>'3182',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '18912',
            'descripcion'=>'BISAGRA TRUPER 3-1/2" REMACHADO 35L SANT',
            'precio'=>'4101',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '18958',
            'descripcion'=>'BISAGRA TRUPER LA 3 1/2 C.RED BIC-35L-',
            'precio'=>'961',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '2351',
            'descripcion'=>'BISAGRA TUBULAR 1/2',
            'precio'=>'2503',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '5185',
            'descripcion'=>'BISAGRA TUBULAR 3/4',
            'precio'=>'9632',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '2211',
            'descripcion'=>'BISAGRA TUBULAR 3/8',
            'precio'=>'652',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '2705',
            'descripcion'=>'BISAGRA TUBULAR 5/8',
            'precio'=>'4362',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' DSB-6950',
            'descripcion'=>'BOCINA 6X9 3 VIAS 800 W PMPO DONKER',
            'precio'=>'9856',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' 18-9111BK ',
            'descripcion'=>'BOCINA MITZU REC/BT/TF/AUX/FM/USB/MANOS LIBRES NEG',
            'precio'=>'6194',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' 18-9426BL ',
            'descripcion'=>'BOCINA PORTATIL MITZU 2X4 180W BLUETOOH',
            'precio'=>'1401',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' 18-9450 ',
            'descripcion'=>'BOCINA PORTATIL MITZU 6.5" 120W USB SD A',
            'precio'=>'8424',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '45270',
            'descripcion'=>'BOILER FOSET SOLAR 100 LTS TERMOTANQUE',
            'precio'=>'7915',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' BB10MR',
            'descripcion'=>'BOMBA DE MANO 10" MAR-RAM BALONERA',
            'precio'=>'4306',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' BP15MR',
            'descripcion'=>'BOMBA DE MANO 15" MAR-RAM',
            'precio'=>'7782',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' BP20MR',
            'descripcion'=>'BOMBA DE MANO 20" MAR-RAM BP20MR',
            'precio'=>'5994',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '14863',
            'descripcion'=>'BOMBA DE MANO 23" TRUPER BOM-TR',
            'precio'=>'6622',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' BAPMR ',
            'descripcion'=>'BOMBA DE PIE MAR-RAM BAPMR',
            'precio'=>'5128',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' MZSP',
            'descripcion'=>'BOMBA DE SIFON PLASTICA P/GAS MAR-RAM',
            'precio'=>'5776',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '442',
            'descripcion'=>'BOMBA EXTRACTORA DE LIQUIDOS MAR-RAM',
            'precio'=>'3497',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '10071',
            'descripcion'=>'BOMBA P/AGUA1/4 HP TRUPER BOAC-1/4 $',
            'precio'=>'155',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '385192',
            'descripcion'=>'BOMBA P/AGUA 1/2 HP 20 MTS PERIFERICANO IVA)',
            'precio'=>'283',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '1320125',
            'descripcion'=>'BOMBA P/AGUA 1/2 HP IGOTO AUTOCEBANTE AT60',
            'precio'=>'95',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '191321',
            'descripcion'=>'BOMBA P/AGUA 1/2 HP PERIFERICA',
            'precio'=>'3903',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '1320127',
            'descripcion'=>'BOMBA P/AGUA 1/2 HP PERIFERICA DUO IGOTO TPKM60',
            'precio'=>'6666',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '10072',
            'descripcion'=>'BOMBA P/AGUA 1/2 HP TRUPER BOAC-1/2 $',
            'precio'=>'1618',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '10073',
            'descripcion'=>'BOMBA P/AGUA 3/4 HP TRUPER BOAC-3/4 $',
            'precio'=>'8094',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '385178',
            'descripcion'=>'BOMBA P/AGUA3/4 HPPERIFERICA 8517 SA',
            'precio'=>'5617',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '10075',
            'descripcion'=>'BOMBA P/AGUA 1 1/2 HP TRUPER BOAC-1 1/',
            'precio'=>'3803',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '191323',
            'descripcion'=>'BOMBA P/AGUA 1 HP AKSI PERIFERICA',
            'precio'=>'2163',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '385161',
            'descripcion'=>'BOMBA P/AGUA 1 HP PERIFERICA 8516 SANT',
            'precio'=>'9406',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '10074',
            'descripcion'=>'BOMBA P/AGUA 1 HP TRUPER BOAC-1 $',
            'precio'=>'542',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '157',
            'descripcion'=>'BOMBA P/W.C GRANDENEGRA 650. *',
            'precio'=>'449',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '540',
            'descripcion'=>'BOMBA P/W.C. ROJA GRANDE 650 *',
            'precio'=>'823',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '295',
            'descripcion'=>'BOMBA P/W.C. ROJA MEDIANA 550',
            'precio'=>'647',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '2202',
            'descripcion'=>'BOMBA P/W.C.MEDIANANEGRA 550. *',
            'precio'=>'764',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '191301',
            'descripcion'=>'BOMBA SUMERGIBLE 750W AKSI',
            'precio'=>'1882',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '191303',
            'descripcion'=>'BOMBA SUMERGIBLE AKSI AGUA SUCIA 400W',
            'precio'=>'7116',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '1118',
            'descripcion'=>'BOQUILLA P/SOPLETE CHICA « RH',
            'precio'=>'9935',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '2214',
            'descripcion'=>'BOQUILLA P/SOPLETE GRANDE 7/8 RH',
            'precio'=>'8327',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' 1 134 ',
            'descripcion'=>'BOQUILLA P/SOPLETE LINMEX C/CARTUCHO G-3',
            'precio'=>'1829',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '11986',
            'descripcion'=>'BOQUILLA P/SOPLETE TRUPER 65MM ROSCA',
            'precio'=>'4163',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '26401',
            'descripcion'=>'BORLA DE LANA P/PULIDORA PRETUL',
            'precio'=>'5329',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '146',
            'descripcion'=>'BORLA PARA PULIR 100% LANA NO.5',
            'precio'=>'4156',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '355',
            'descripcion'=>'BORLA PARA PULIR 100% LANA NO.7',
            'precio'=>'4791',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '584',
            'descripcion'=>'BORLA PARA PULIR 100% LANA NO.9',
            'precio'=>'1489',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17920',
            'descripcion'=>'BOTA HULE JARDINERA NO.24 TRUPER',
            'precio'=>'307',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17921',
            'descripcion'=>'BOTA HULE JARDINERA NO.25 TRUPER',
            'precio'=>'882',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17922',
            'descripcion'=>'BOTA HULE JARDINERA NO.26 TRUPER',
            'precio'=>'5202',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17923',
            'descripcion'=>'BOTA HULE JARDINERA NO.27 TRUPER',
            'precio'=>'3362',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17924',
            'descripcion'=>'BOTA HULE JARDINERA NO.28 TRUPER',
            'precio'=>'1207',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17925',
            'descripcion'=>'BOTA HULE JARDINERA NO.29 TRUPER',
            'precio'=>'5948',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '114411',
            'descripcion'=>'BOTA HULE SANITARIA NO.25 BLANCA AKSI',
            'precio'=>'612',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '114412',
            'descripcion'=>'BOTA HULE SANITARIA NO.26 BLANCA AKSI',
            'precio'=>'2757',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '114413',
            'descripcion'=>'BOTA HULE SANITARIA NO.27 BLANCA AKSI',
            'precio'=>'5422',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '114414',
            'descripcion'=>'BOTA HULE SANITARIA NO.28 BLANCA AKSI',
            'precio'=>'8842',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '4592',
            'descripcion'=>'BOTELLA LIMONES FV98081LE-C',
            'precio'=>'7942',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' B01 ',
            'descripcion'=>'BOTIQUIN CHICO BLANCO 23X16X7',
            'precio'=>'3185',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' B03 ',
            'descripcion'=>'BOTIQUIN GRANDE BLANCO 35X25X7',
            'precio'=>'2098',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' B02 ',
            'descripcion'=>'BOTIQUIN MEDIANO BLANCO 30X21X7',
            'precio'=>'936',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '1508',
            'descripcion'=>'BOTON P/TIMBRE ROYER 3012 *',
            'precio'=>'8387',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '2356',
            'descripcion'=>'BOTON TIMBRE ROYER CUAD.202',
            'precio'=>'9127',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '116741',
            'descripcion'=>'BOTON TIMBRE VISIBLE PLANO AKSI',
            'precio'=>'472',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '49378',
            'descripcion'=>'BRAZO P/REGADERA C/CHAPETON FOSET',
            'precio'=>'8929',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' P-TL40CM',
            'descripcion'=>'BRAZO P/REGADERA LARGO MAGA¥A 40 CTM',
            'precio'=>'6359',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' P-TL50CM',
            'descripcion'=>'BRAZO P/REGADERA MAGA¥A 50 CTM',
            'precio'=>'5009',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '114806',
            'descripcion'=>'BRAZO Y CHAPETON AKSI METALICO',
            'precio'=>'5966',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' CCAUMR',
            'descripcion'=>'CABLE ACERO MAR-RAM MULTIUSOS 12 MMX2MTS',
            'precio'=>'4991',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' CC51624 ',
            'descripcion'=>'CABLE ACERO PARA BICICLETA 5/16X24 BR',
            'precio'=>'311',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' CC51636 ',
            'descripcion'=>'CABLE ACERO PARA BICICLETA 5/16X36 MAR-R',
            'precio'=>'576',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' RG-59L',
            'descripcion'=>'CABLE COAXIAL RG-59 100 MTS MAGAÑA',
            'precio'=>'3551',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '48473',
            'descripcion'=>'CABLE COAXIAL RG-59 100 MTS VOLTECH',
            'precio'=>'6028',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' 07-5920 ',
            'descripcion'=>'CABLE COAXIAL RG-59 20 MTS NEGRO',
            'precio'=>'9487',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342805',
            'descripcion'=>'CABLE COAXIAL RG-59 SANELEC 500 MTS',
            'precio'=>'9349',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342782',
            'descripcion'=>'CABLE COAXIAL RG-59 SANTUL 100 MTS',
            'precio'=>'8283',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' RG-6L ',
            'descripcion'=>'CABLE COAXIAL RG-6 100 MTS MAGAÑA',
            'precio'=>'3371',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '69',
            'descripcion'=>'CABLE COAXIAL RG-6 2 MTS CABLEVISION',
            'precio'=>'2006',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' 07-0620 ',
            'descripcion'=>'CABLE COAXIAL RG-6 20MTS OJO CABLEVISION',
            'precio'=>'9916',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' CLL36 ',
            'descripcion'=>'CABLE CON CANDADO PARA BICICLETA 5/16',
            'precio'=>'356',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '44220',
            'descripcion'=>'CABLE DE ACERO 1/16 RIGIDO RECUBIERTO FIERO',
            'precio'=>'8055',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '213588',
            'descripcion'=>'CABLE DE ACERO 1/16-3/32 FORRADO 7X7 150',
            'precio'=>'9595',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '44224',
            'descripcion'=>'CABLE DE ACERO 1/4 FIERO FORRADO 7X19H 75MT',
            'precio'=>'3808',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '44217',
            'descripcion'=>'CABLE DE ACERO 3/16 RECUBIERTO 75 MTS FIERO',
            'precio'=>'258',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '44206',
            'descripcion'=>'CABLE DE ACERO 3/16" RIGIDO FIERO 75 MTS CAB-3/16R',
            'precio'=>'9864',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '44207',
            'descripcion'=>'CABLE DE ACERO 7X7 HILOS 75 MTS 2240 KG',
            'precio'=>'8544',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '14435',
            'descripcion'=>'CABLE DE VIDA 2 GANCHOS TRUPER 1.5 MTS.',
            'precio'=>'3131',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '14436',
            'descripcion'=>'CABLE DE VIDA TRUPER 2 GANCH CAB-5489-20',
            'precio'=>'22',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46266',
            'descripcion'=>'CABLE HDMI MACHO MACHO 90 CM VOLTECH',
            'precio'=>'716',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '264',
            'descripcion'=>'CABLE NO.10 *',
            'precio'=>'3514',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340771',
            'descripcion'=>'CABLE NO.10 BLANCO KEERALUCOBRE',
            'precio'=>'5422',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46055',
            'descripcion'=>'CABLE NO.10 BLANCO VOLTECH',
            'precio'=>'657',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340788',
            'descripcion'=>'CABLE NO.10 NEGRO KEER THW ALUCOBRE',
            'precio'=>'6581',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46051',
            'descripcion'=>'CABLE NO.10 NEGRO VOLTECH',
            'precio'=>'3197',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340764',
            'descripcion'=>'CABLE NO.10 ROJO KEER THW ALUCOBRE',
            'precio'=>'6239',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46059',
            'descripcion'=>'CABLE NO.10 ROJO VOLTECH',
            'precio'=>'1608',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340795',
            'descripcion'=>'CABLE NO.10 VERDE KEER THW ALUCOBRE',
            'precio'=>'9321',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340078',
            'descripcion'=>'CABLE NO.10 VERDE SANTUL',
            'precio'=>'178',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '265',
            'descripcion'=>'CABLE NO.12',
            'precio'=>'939',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '4',
            'descripcion'=>'CABLE NO.12 BLANCO IUSA',
            'precio'=>'9354',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340818',
            'descripcion'=>'CABLE NO.12 BLANCO KEER THW ALUCOBRE',
            'precio'=>'3955',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46056',
            'descripcion'=>'CABLE NO.12 BLANCO VOLTECH',
            'precio'=>'171',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' I397454 ',
            'descripcion'=>'CABLE NO.12 NEGRO IUSA',
            'precio'=>'6688',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46052',
            'descripcion'=>'CABLE NO.12 NEGRO VOLTECH',
            'precio'=>'8307',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340825',
            'descripcion'=>'CABLE NO.12 NEGROTHW ALUCOBRE',
            'precio'=>'1474',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' I397456 ',
            'descripcion'=>'CABLE NO.12 ROJO IUSA',
            'precio'=>'2448',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340801',
            'descripcion'=>'CABLE NO.12 ROJO KEER THW ALUCOBRE',
            'precio'=>'7819',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46060',
            'descripcion'=>'CABLE NO.12 ROJO VOLTECH',
            'precio'=>'175',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340832',
            'descripcion'=>'CABLE NO.12 VERDE KEER ALUCOBRE',
            'precio'=>'5295',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340030',
            'descripcion'=>'CABLE NO.12 VERDE SANELEC',
            'precio'=>'1224',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '266',
            'descripcion'=>'CABLE NO.14',
            'precio'=>'236',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46057',
            'descripcion'=>'CABLE NO.14 BLANCO VOLTECH',
            'precio'=>'7508',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46053',
            'descripcion'=>'CABLE NO.14 NEGRO VOLTECH',
            'precio'=>'6833',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46061',
            'descripcion'=>'CABLE NO.14 ROJO VOLTECH',
            'precio'=>'1642',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' DU-18100',
            'descripcion'=>'CABLE NO.18 BICOLOR MAGA¥A',
            'precio'=>'7709',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46268',
            'descripcion'=>'CABLE NO.18 BICOLOR VOLTECH 100M',
            'precio'=>'3621',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' 07-18100P ',
            'descripcion'=>'CABLE NO.18 POLARIZADO MITZU',
            'precio'=>'4976',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46270',
            'descripcion'=>'CABLE NO.18 POLARIZADO VOLTECH',
            'precio'=>'4017',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '171',
            'descripcion'=>'CABLE NO.22 BICOLOR MAGA¥A',
            'precio'=>'5159',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46264',
            'descripcion'=>'CABLE NO.22 BICOLOR VOLTECH',
            'precio'=>'3741',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '263',
            'descripcion'=>'CABLE NO.8',
            'precio'=>'3231',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340740',
            'descripcion'=>'CABLE NO.8 KEER',
            'precio'=>'4929',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '290',
            'descripcion'=>'CABLE P/CAFETERA *',
            'precio'=>'4954',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '683',
            'descripcion'=>'CABLE P/CAFETERA DAYCO',
            'precio'=>'9983',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '292',
            'descripcion'=>'CABLE P/GRAB.UNIVERSAL C/RANURA *',
            'precio'=>'5052',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '288',
            'descripcion'=>'CABLE P/SOLDAR 10 M.SENC.',
            'precio'=>'5312',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '286',
            'descripcion'=>'CABLE P/SOLDAR 5M.SENC.B',
            'precio'=>'1402',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '1113',
            'descripcion'=>'CHAPA PHILLIPS 715 I IZQUIERDA CLASICA',
            'precio'=>'2525',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '582',
            'descripcion'=>'CHAPA PHILLIPS 800 FIJA DERECHALL/PLAN',
            'precio'=>'178',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '583',
            'descripcion'=>'CHAPA PHILLIPS 800 FIJA IZQUIERDA LL/PLA',
            'precio'=>'1327',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' AS-725 IF D ',
            'descripcion'=>'CHAPA PHILLIPS AS-725 IF D ABG LL/QUESO',
            'precio'=>'1294',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' AS-725 IF I ',
            'descripcion'=>'CHAPA PHILLIPS AS-725-IF 1 ABG LL/QUESO',
            'precio'=>'2491',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' HS-4000 AS I',
            'descripcion'=>'CHAPA PHILLIPS HS-4000 AS-6-IF-IZQUIERDA',
            'precio'=>'8571',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' HS-4000 D ',
            'descripcion'=>'CHAPA PHILLIPS HS-4000-AS 6 D IF AI',
            'precio'=>'5384',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' HS-4100 AS D',
            'descripcion'=>'CHAPA PHILLIPS HS-4100 AS-6 DF DERECHA',
            'precio'=>'1204',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' HS-4100-AS I',
            'descripcion'=>'CHAPA PHILLIPS HS-4100-AS 6 I IF AI',
            'precio'=>'9869',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' X-720 IF D',
            'descripcion'=>'CHAPA PHILLIPS X-720 IF D LLAVE TETRA',
            'precio'=>'5734',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' X-720 IF I',
            'descripcion'=>'CHAPA PHILLIPS X-720 IF I LLAVE TETRA',
            'precio'=>'9063',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '598',
            'descripcion'=>'CHAPA PHILLIPS X900 DERECHA LL/TETRA',
            'precio'=>'8113',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '603',
            'descripcion'=>'CHAPA PHILLIPS X900 IZQUIERDA LL/TETRA',
            'precio'=>'3375',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '386335',
            'descripcion'=>'CHAPA SANTUL TIPO/715 CLASICA DERECHA',
            'precio'=>'2537',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '106908',
            'descripcion'=>'CHAROLA P/PINTAR AKSI',
            'precio'=>'256',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '19211',
            'descripcion'=>'CHAROLA TRUPER PARA PINTURA',
            'precio'=>'5189',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '45023',
            'descripcion'=>'CLAVO CON CABEZA 3" KILO FIERO',
            'precio'=>'3782',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44156',
            'descripcion'=>'CLAVO CON CABEZA 4 CAJA CON 25K FIERO K',
            'precio'=>'4374',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '45025',
            'descripcion'=>'CLAVO CON CABEZA 4" KILO FIERO',
            'precio'=>'521',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '45026',
            'descripcion'=>'CLAVO CON CABEZA 5" BOLSA KILO FIERO',
            'precio'=>'9485',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44124',
            'descripcion'=>'CLAVO P/CONCRETO GALVANIZADO 2 1/2 KILO',
            'precio'=>'586',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44123',
            'descripcion'=>'CLAVO P/CONCRETO GALVANIZADO 2" KILO',
            'precio'=>'848',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44120',
            'descripcion'=>'CLAVO P/CONCRETO GALVANIZADO 3/4 KILO FI',
            'precio'=>'6657',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44126',
            'descripcion'=>'CLAVO P/CONCRETO GALVANIZADO 3« KILO',
            'precio'=>'741',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44132',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 1 1/2" KILO',
            'precio'=>'3734',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44131',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 1" KILO',
            'precio'=>'6449',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44134',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 2 1/2 KILO',
            'precio'=>'1043',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44133',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 2" KILO',
            'precio'=>'5867',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44136',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 3 1/2 POR KILO',
            'precio'=>'6204',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44135',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 3" KILO',
            'precio'=>'3421',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44130',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 3/4 POR KILO',
            'precio'=>'8493',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '117130',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 3/4" 1 K',
            'precio'=>'220',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44496',
            'descripcion'=>'CLAVO SIN CABEZA 1 1/2" FIERO KILO',
            'precio'=>'5522',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44495',
            'descripcion'=>'CLAVO SIN CABEZA 1 FIERO KILO',
            'precio'=>'101',
            'stock'=>'150',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);











    }
}
