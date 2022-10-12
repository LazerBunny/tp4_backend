<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tp4_backend</title>
    </head>
    <body>
        <h3>♥Pares de michis♥</h3>
        <?php
            $pares=[2,4,6,8,10,12,14,16,18,20,];
            foreach ($pares as $michis) {
                print "$michis <br>";
            }
        ?>
        <h3>♦Datos random♦</h3>
        <?php
            $datos_random=["Pedro","Ana",34,1,];
            print_r($datos_random);
        ?>
        <h3>♠Datos del asesino (ir a arrestarlo)♠</h3>
        <?php
            $datos_del_asesino=['nombre'=>"Pedro",'apellido'=>"Torres",'direccion'=>"Av. Mayor 3703",'telefono'=>"1122334455",];
/*No decía que había que imprimir, pero no sé, quería que se vea jaja*/
            print "<pre>\n";
            print_r($datos_del_asesino);
            print "</pre>\n";
        ?>
        <h3>♣Ciudades con alta facha♣</h3>
        <?php
            $ciudades_facha=["Madrid","Barcelona","Londres","New York","Los Ángeles","Chicago"];
            print "La ciudad con el índice 0 en facha es $ciudades_facha[0].<br>";
            print "La ciudad con el índice 1 en facha es $ciudades_facha[1].<br>";
            print "La ciudad con el índice 2 en facha es $ciudades_facha[2].<br>";
            print "La ciudad con el índice 3 en facha es $ciudades_facha[3].<br>";
            print "La ciudad con el índice 4 en facha es $ciudades_facha[4].<br>";
            print "La ciudad con el índice 5 en facha es $ciudades_facha[5].<br>";
        ?>
        <h3>☺Índices de las ciudades facheras☻</h3>
        <?php
            $indice_ciudades=['madrid'=>"MD",'barcelona'=>"BCL",'londres'=>"LD",'new_york'=>"NY",'los_angeles'=>"LA",'chicago'=>"CCG",];
            print "El índice de Madrid es $indice_ciudades[madrid].<br>";
            print "El índice de Barcelona es $indice_ciudades[barcelona].<br>";
            print "El índice de Londres es $indice_ciudades[londres].<br>";
            print "El índice de New York es $indice_ciudades[new_york].<br>";
            print "El índice de Los Ángeles es $indice_ciudades[los_angeles].<br>";
            print "El índice de Chicago es $indice_ciudades[chicago].<br>";
        ?>
    </body>
</html>