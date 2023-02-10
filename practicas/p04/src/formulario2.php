<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN” “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Formulario 2</title>
            </head>
            <style type="text/css">
                body {
                    margin: 20px; 
                background-color: #b9ffff ;
                font-family: Verdana, Helvetica, sans-serif;
                font-size: 90%;
            }
                h1 {
                border-bottom: 1px solid #005825;
            }
                h2 {
                    font-size: 1.2em;
                }
            </style>
        <body>
        <h1>VEHICULO</h1>

            <?php
            $matricula = $_POST["matricula"];
            $datos = array(

                //SEDAN

                'AAA1111' => array('Auto' => array('marca' => "HONDA",
                'modelo' => 2020, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Juan Perez",
                'ciudad' => "Puebla, pue.", 
                'direccion' => "C. 63 B Ote.")),
                
                'BBB1111' => array('Auto' => array('marca' => "VOLVO",
                'modelo' => 2019, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Carlos Juarez", 
                'ciudad' => "Puebla, pue.",
                'direccion' => "C. 12 Sur")),
            
                'CCC1111' => array('Auto' => array('marca' => "NISSAN",
                'modelo' => 2018, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Enrique Guzman", 
                'ciudad' => "Puebla, pue.",
                'direccion' => "Av. 63-A Ote")),
            
                'DDD1111' => array('Auto' => array('marca' => "FORD",
                'modelo' => 2021, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Uriel Lopez", 
                'ciudad' => "Puebla, pue.",
                'direccion' => "C. 10 Sur")),
            
                'EEE1111' => array('Auto' => array('marca' => "CHEVROLET",
                'modelo' => 2020, 'tipo' => "sedan"), 'Propietario' => array(
                'nombre' => "Roberto Reyes",
                'ciudad' => "Puebla, pue.", 
                'direccion' => "C. 8 B Sur")),

                //HACHBACK
            
                'AAA2222' => array('Auto' => array('marca' => "MERCEDEZ",
                'modelo' => 2022, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Alfonso Esparza",
                'ciudad' => "Veracruz, Ver.", 
                'direccion' => "Calle Navegantes 327")),
            
                'BBB2222' => array('Auto' => array('marca' => "CHEVROLET",
                'modelo' => 2020, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Rubi Mendez",
                'ciudad' => "Veracruz, Ver.", 
                'direccion' => "Av Cristóbal Colón")),
                
                'CCC2222' => array('Auto' => array('marca' => "SEAT",
                'modelo' => 2022, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Maria Perez",
                'ciudad' => "Veracruz, Ver.", 
                'direccion' => "Valencia")),
                
                'DDD2222' => array('Auto' => array('marca' => "RENAULT",
                'modelo' => 2022, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Noe Juarez",
                'ciudad' => "Veracruz, Ver.", 
                'direccion' => "Av. Ejército Mexicano Ote.")),

                'EEE2222' => array('Auto' => array('marca' => "HYUNDAI",
                'modelo' => 2019, 'tipo' => "hachback"), 'Propietario' => array(
                'nombre' => "Diego Mendoza",
                'ciudad' => "Veracruz, Ver.", 
                'direccion' => "C. Cándido Aguilar 747")),

                //CAMIONETA

                'AAA3333' => array('Auto' => array('marca' => "SUBARU",
                'modelo' => 2016, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Luis Ortega",
                'ciudad' => "Xicohténcatl, tlax.", 
                'direccion' => "Av Independencia 58A")),

                'BBB3333' => array('Auto' => array('marca' => "SUSUKI",
                'modelo' => 2022, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Rodrigo Perez",
                'ciudad' => "Xicohténcatl, tlax.", 
                'direccion' => "Av. Tlahuicole")),

                'CCC3333' => array('Auto' => array('marca' => "DODGE",
                'modelo' => 2017, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "David Ramos",
                'ciudad' => "Xicohténcatl, tlax.", 
                'direccion' => "Guillermo Valle 111")),

                'DDD3333' => array('Auto' => array('marca' => "HONDA",
                'modelo' => 2020, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Julian Palacios",
                'ciudad' => "Xicohténcatl, tlax.", 
                'direccion' => "C. Texcaltipac 26")),

                'EEE3333' => array('Auto' => array('marca' => "PEUGEOT",
                'modelo' => 2018, 'tipo' => "camioneta"), 'Propietario' => array(
                'nombre' => "Daniel Toxqui",
                'ciudad' => "Xicohténcatl, tlax.", 
                'direccion' => "Priv. del Nte., Ocotlán")),
            );  
             
            print_r($datos);
            echo "<br><br>";
            echo "<h2>Datos del auto con matricula </h2> <strong>$matricula</strong><br>";
            echo "_________________________________________________________<br>";
            foreach($datos[$matricula] as $mat => $dat)
            {
                echo "<strong>$mat </strong><br>";
                foreach($dat as $contenido)
                {
                    print_r($contenido);
                    echo "<br>";
                    
                }
                echo "<br>";
            }
            echo "<br><h2>Datos de todos los autos registrados...</h2><br>";
            echo "_________________________________________________________<br>";

            foreach($datos as $mat => $dat)
            {
                echo "<strong>$mat </strong><br>";
                foreach($dat as $contenido)
                {
                    foreach($contenido as $mostrar)
                    {
                    print_r($mostrar);
                    echo "<br>";
                    }
                }
                echo "<br>";
            }
                echo '<br><br>';
   
            ?>

        </body>
</html>