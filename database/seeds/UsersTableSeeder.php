<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            array(                                

                [ 'name'=> 'Acambay','municipio'=> 'ACAMBAY','email'=> 'acambay@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Acolman','municipio'=> 'ACOLMAN','email'=> 'acolman@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Aculco','municipio'=> 'ACULCO','email'=> 'aculco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Almoloya de Alquisiras','municipio'=> 'ALMOLOYA DE ALQUISIRAS','email'=> 'almoloya-de-alquisiras@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Almoloya de juarez','municipio'=> 'ALMOLOYA DE JUAREZ','email'=> 'almoloya-de-juarez@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Almoloya del rio','municipio'=> 'ALMOLOYA DEL RIO','email'=> 'almoloya-del-rio@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Amanalco','municipio'=> 'AMANALCO','email'=> 'amanalco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Amatepec','municipio'=> 'AMATEPEC','email'=> 'amatepec@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Amecameca','municipio'=> 'AMECAMECA','email'=> 'amecameca@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Apaxco','municipio'=> 'APAXCO','email'=> 'apaxco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Atenco','municipio'=> 'ATENCO','email'=> 'atenco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Atizapan','municipio'=> 'ATIZAPAN','email'=> 'atizapan@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Atizapan de Zaragoza','ATIZAPAN DE ZARAGOZA'=> 'AMECAMECA','email'=> 'atizapan-de-zaragoza@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Atlacomulco','municipio'=> 'ATLACOMULCO','email'=> 'atlacomulco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Atlautla','municipio'=> 'ATLAUTLA','email'=> 'atlautla@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Axapusco','municipio'=> 'AXAPUSCO','email'=> 'axapusco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Ayapango','municipio'=> 'AYAPANGO','email'=> 'ayapango@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Calimaya','municipio'=> 'CALIMAYA','email'=> 'calimaya@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Capulhuac','municipio'=> 'CAPULHUAC','email'=> 'capulhuac@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Chalco','municipio'=> 'CHALCO','email'=> 'chalco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Chapa de mota','municipio'=> 'CHAPA DE MOTA','email'=> 'chapa-de-mota@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Chapultepec','municipio'=> 'CHAPULTEPEC','email'=> 'chapultepec@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Chiautla','municipio'=> 'CHIAUTLA','email'=> 'chiautla@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Chicoloapan','municipio'=> 'CHICOLOAPAN','email'=> 'chicoloapan@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Chiconcuac','municipio'=> 'CHINCONCUAC','email'=> 'chiconcuac@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Chimalhuacan','municipio'=> 'CHIMALHUACAN','email'=> 'chimalhuacan@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Coacalco de Berriozabal','municipio'=> 'COACALCO DE BERRIOZABAL','email'=> 'coacalco-de-berriozabal@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Coatepec Harinas','municipio'=> 'COATEPEC HARINAS','email'=> 'coatepec-harinas@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Cocotitlan','municipio'=> 'COYOTITLAN','email'=> 'cocotitlan@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Coyotepec','municipio'=> 'COYOTEPEC','email'=> 'coyotepec@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Cuautitlán','municipio'=> 'CUAUTITLAN','email'=> 'cuautitlan@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Cuautitlan Izcalli','municipio'=> 'CUAUTITLAN IZCALLI','email'=> 'cuautitlan-izcalli@encuestasedesem.gob','password'=> bcrypt('123456') ],
                

                [ 'name'=> 'Donato Guerra','municipio'=> 'DONATO GUERRA','email'=> 'donato-guerra@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Ecatepec de Morelos','municipio'=> 'ECATEPEC DE MORELOS','email'=> 'ecatepec-de-morelos@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Ecatzingo','municipio'=> 'ECATZINGO','email'=> 'ecatzingo@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'El Oro','municipio'=> 'EL ORO','email'=> 'eloro@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Huehuetoca','municipio'=> 'HUEHUETOCA','email'=> 'huehuetoca@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Hueypoxtla','municipio'=> 'HUEYPOXTLA','email'=> 'Hueypoxtla@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Huixquilucan','municipio'=> 'HUIXQUILICAN','email'=> 'Huixquilucan@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Isidro Fabela','municipio'=> 'ISIDRO FABELA','email'=> 'isidro-fabela@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Ixtapaluca','municipio'=> 'IXTAPALUCA','email'=> 'Ixtapaluca@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Ixtapan de la Sal','municipio'=> 'IXTAPAN DE LA SAL','email'=> 'ixtapan-de-la-sal@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Ixtapan del oro','municipio'=> 'IXTAPAN DEL ORO','email'=> 'ixtapan-del-oro@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Ixtlahuca','municipio'=> 'IXTLAHUACA','email'=> 'ixtlahuca@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Jaltenco','municipio'=> 'JALTENCO','email'=> 'jaltenco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Jilotepec','municipio'=> 'JILOTEPEC','email'=> 'jilotepec@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Jilotzingo','municipio'=> 'JILOTZINGO','email'=> 'jilotzingo@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Jiquipilco','municipio'=> 'JIQUIPILCO','email'=> 'jiquipilco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Jocotitlan','municipio'=> 'JOCOTITLAN','email'=> 'jocotitlan@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Joquicingo','municipio'=> 'JOQUICINGO','email'=> 'joquicingo@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Juchitepec','municipio'=> 'JUCHITEPEC','email'=> 'Juchitepec@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'La Paz','municipio'=> 'LA PAZ','email'=> 'la-paz@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Lerma','municipio'=> 'LERMA','email'=> 'lerma@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'luvianos','municipio'=> 'LUVIANOS','email'=> 'luvianos@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Malinalco','municipio'=> 'MALINALCO','email'=> 'malinalco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Melchor Ocampo','municipio'=> 'MELCHOR OCAMPO','email'=> 'melchor-ocampo@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Metepec','municipio'=> 'METEPEC','email'=> 'metepec@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'mexicaltzingo','municipio'=> 'MEXICALTZINGO','email'=> 'mexicaltzingo@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Morelos','municipio'=> 'MORELOS','email'=> 'morelos@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Naucalpan de Juarez','municipio'=> 'NAUCALPAN DE JUAREZ','email'=> 'naucalpan-de-Juarez@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Nextlalpan','municipio'=> 'NEXTLALPAN','email'=> 'nextlalpan@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Nezahualcoyotl','municipio'=> 'NEZAHUALCOYOTL','email'=> 'nezahualcoyotl@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Nicolás Romero','municipio'=> 'NICOLAS ROMERO','email'=> 'nicolas-romero@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Nopaltepec','municipio'=> 'NOPALTEPEC','email'=> 'nopaltepec@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Ocoyoacac','municipio'=> 'OCOYOACAC','email'=> 'ocoyoacac@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Ocuilan','municipio'=> 'OCUILAN','email'=> 'ocuilan@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Otumba','municipio'=> 'OTUMBA','email'=> 'otumba@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Otzoloapan','municipio'=> 'OTZOLOAPAN','email'=> 'otzoloapan@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Otzoltepec','municipio'=> 'OTZOLOTEPEC','email'=> 'otzoltepec@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Ozumba','municipio'=> 'OZUMBA','email'=> 'ozumba@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Papalotla','municipio'=> 'PAPALOTLA','email'=> 'papalotla@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Polotitlan','municipio'=> 'POPOTITLAN','email'=> 'polotitlan@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Rayón','municipio'=> 'RAYON','email'=> 'rayon@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'San Antonio la Isla','municipio'=> 'SAN ANTONIO DE LA ISLA','email'=> 'san-antonio-la-isla@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'San felipe del progreso','municipio'=> 'SAN FELIPE DEL PROGRESO','email'=> 'san-felipe-del-progreso@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'San jose del rincon','municipio'=> 'SAN JOSE DEL RINCON','email'=> 'san-jose-del-rincon@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'San Martín de las Pirámides','municipio'=> 'SAN MARTIN DE LAS PIRAMIDES','email'=> 'san-martin-de-las-piramides@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'San Mateo Atenco','municipio'=> 'SAN MATEO ATENCO','email'=> 'san-mateo-atenco@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'San Simón de Guerrero','municipio'=> 'SAN SIMON DE GUERRERO','email'=> 'san-simon-de-guerrero@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Santo Tomás','municipio'=> 'SANTO TOMAS','email'=> 'santo-tomas@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Soyaniquilpan de juarez','municipio'=> 'SOYANIQUILPAN DE JUAREZ','email'=> 'soyaniquilpan-de-juarez@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Sultepec','municipio'=> 'SULTEPEC','email'=> 'sultepec@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Tecámac','municipio'=> 'TECAMAC','email'=> 'tecamac@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Tejupilco','municipio'=> 'TEJUPILCO','email'=> 'tejupilco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Temamatla','municipio'=> 'TEMAMATLA','email'=> 'temamatla@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Temascalapa','municipio'=> 'TEMASCALAPA','email'=> 'temascalapa@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Temascalcingo','municipio'=> 'TEMASCALCINGO','email'=> 'temascalcingo@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Temascaltepec','municipio'=> 'TEMASCALTEPEC','email'=> 'temascaltepec@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Temoaya','municipio'=> 'TEMOAYA','email'=> 'temoaya@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Tenancingo','municipio'=> 'TENANCINGO','email'=> 'Tenancingo@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Tenango del Aire','municipio'=> 'TENANGO DEL AIRE','email'=> 'tenango-del-aire@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Tenango del valle','municipio'=> 'TENANGO DEL VALLE','email'=> 'tenangodelvalle@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Teoloyucan','municipio'=> 'TEOLOYUCAN','email'=> 'teoloyucan@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Teotihuacan','municipio'=> 'TEOTIHUACAN','email'=> 'teotihuacan@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Tepetlaoxtoc','municipio'=> 'TEPETLAOXTOC','email'=> 'tepetlaoxtoc@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Tepetlixpa','municipio'=> 'TEPETLIXPA','email'=> 'tepetlixpa@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Tepotzotlan','municipio'=> 'PETOTZOTLAN','email'=> 'tepotzotlán@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Tequixquiac','municipio'=> 'TEQUIXQUIAC','email'=> 'tequixquiac@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Texcaltitlán','municipio'=> 'TEXCALTITLAN','email'=> 'texcaltitlán@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Texcalyacac','municipio'=> 'TEXCALYACAC','email'=> 'texcalyacac@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Texcoco','municipio'=> 'TEXCOCO','email'=> 'texcoco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Tezoyuca','municipio'=> 'TEZOYUCA','email'=> 'tezoyuca@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Tinguistenco','municipio'=> 'TIANGUISTENCO','email'=> 'tinguistenco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Timilpan','municipio'=> 'TIMILPAN','email'=> 'timilpan@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Tlalmanalco','municipio'=> 'TLALMANALCO','email'=> 'tlalmanalco@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Tlalnepantla de Baz','municipio'=> 'TLALNEPANTLA','email'=> 'tlalnepantla@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Tlatlaya','municipio'=> 'TLATLAYA','email'=> 'tlatlaya@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Toluca','municipio'=> 'TOLUCA','email'=> 'toluca@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Tonanitla','municipio'=> 'TONANITLA','email'=> 'tonanitla@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Tonatico','municipio'=> 'TONATICO','email'=> 'tonatico@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Tultepec','municipio'=> 'TULTEPEC','email'=> 'tultepec@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Tultitlan','municipio'=> 'TULTITLAN','email'=> 'tultitlan@encuestasedesem.gob','password'=> bcrypt('123456') ],


                [ 'name'=> 'Valle de bravo','municipio'=> 'VALLE DE BRAVO','email'=> 'valle-de-bravo@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Valle de Chalco Solidaridad','municipio'=> 'VALLE DE CHALCO SOLIDARIDAD','email'=> 'valle-de-chalco-solidaridad@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Villa de Allende','municipio'=> 'VILLA DE ALLENDE','email'=> 'villa-de-allende@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Villa del carbon','municipio'=> 'VILLA DEL CARBON','email'=> 'villa-del-carbon@encuestasedesem.gob','password'=> bcrypt('123456') ],


                [ 'name'=> 'Villa Guerrero','municipio'=> 'VILLA GUERRERO','email'=> 'villa-guerrero@encuestasedesem.gob','password'=> bcrypt('123456') ],


                [ 'name'=> 'Villa Victoria','municipio'=> 'VILLA VICTORIA','email'=> 'villa-victoria@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Xalatlaco','municipio'=> 'XALATLACO','email'=> 'xalatlaco@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Xonacatlan','municipio'=> 'XONACATLAN','email'=> 'xonacatlan@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Zacazonapan','municipio'=> 'ZACAZONAPAN','email'=> 'zacazonapan@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Zacualpan','municipio'=> 'ZACUALPAN','email'=> 'zacualpan@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Zinacantepec','municipio'=> 'ZINACANTEPEC','email'=> 'zinacantepec@encuestasedesem.gob','password'=> bcrypt('123456') ],

                [ 'name'=> 'Zumpahuacan','municipio'=> 'ZUMPAHUACAN','email'=> 'zumpahuacan@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'Zumpango','municipio'=> 'ZUMPANGO','email'=> 'zumpango@encuestasedesem.gob','password'=> bcrypt('123456') ],


                // usuarios administradores
                [ 'name'=> 'admin1','municipio'=> '','email'=> 'admin1@encuestasedesem.gob','password'=> bcrypt('123456') ],
                [ 'name'=> 'admin','municipio'=> '','email'=> 'admin@encuestasedesem.gob','password'=> bcrypt('123456') ],
                
            )           
        );
    }
}
