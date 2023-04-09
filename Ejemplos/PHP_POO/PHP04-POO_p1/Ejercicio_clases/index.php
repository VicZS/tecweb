<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        use EJEMPLOS\POO\Mascota as mascotas;
        require_once __DIR__ . '/mascotas.php';
        
        $pet = new Mascota('','','','');
        $pet->setDatos('Thor','Afgano','1 años','3 Kg');
        $pet->setDatos('Rocky','Basenji','2 años','5 Kg');
        $pet->setDatos('Nemo','Pastor Aleman','3 años','4 Kg');
        $pet->MotrarDatos();

        use EJEMPLOS\POO\Mascota2 as mascotas2;
        require_once __DIR__ . '/mascotas.php';
        
        $pet = new Mascota2('','','','','');
        $pet->setDatos('Nala','Akita','4 años','6 Kg','</p><img src="img/p1.jpg" width="130" height="100"><p>');
        $pet->setDatos('Simba','Pitbull','5 años','5 Kg','</p><img src="img/p2.png" width="130" height="100"><p>');
        $pet->setDatos('Filo','Husky','6 años','8 Kg','</p><img src="img/p3.jpg" width="130" height="100"><p>');
        $pet->MotrarDatos();

        
    ?>
    

</body>
</html>