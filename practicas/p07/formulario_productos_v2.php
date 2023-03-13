<html>
<head></head>
<body>
    <h2>Formulario para Registrar Productos</h2>

    <form action="http://localhost:8080/tecweb/practicas/p07/update_producto.php" method="post" id="form">
        <label for="nombre">Nombre del Producto</label>
        <input type="text" id="nombre" name="nombre" maxlength="100" value="<?= !empty($_POST['nombre'])?$_POST['nombre']:$_GET['nombre'] ?>">
        <br/>
        <label for="marca">Marca</label>
        <select id="marca" name="marca" value="<?= !empty($_POST['marca'])?$_POST['marca']:$_GET['marca'] ?>">
            <option value="" id="marca">---</option>
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="Hyperx">Hyperx</option>
            <option value="OCELOT">OCELOT</option>
            <option value="Sony">Sony</option>
            <option value="JBL">JBL</option>
            <option value="SoundPEATS">SoundPEATS</option>
        </select>
        <br/>
        <label for="modelo">Modelo</label>
        <input type="text" id="modelo" name="modelo" value="<?= !empty($_POST['modelo'])?$_POST['modelo']:$_GET['modelo'] ?>">
        <br/>
        <label for="precio">Precio $</label>
        <input type="number" id="precio" min="0" step="any" name="precio" value="<?= !empty($_POST['precio'])?$_POST['precio']:$_GET['precio'] ?>">
        <br/>
        <label for="detalles">Detalles</label>
        <br/>
        <input type="text" name="detalles" id="detalles"  style="width:15vw" placeholder="250 caracteres como maximo" maxlength="250" value="<?= !empty($_POST['detalles'])?$_POST['detalles']:$_GET['detalles'] ?>"></textarea>
        <br/>
        <label for="unidades">Unidades</label>
        <input type="number" id="unidades" min="0" name="unidades" value="<?= !empty($_POST['unidades'])?$_POST['unidades']:$_GET['unidades'] ?>">
        <br/>
        <label for="imagen">Direccion de la imagen</label>
        <input type="text" id="imagen" placeholder="img/ejemplo.png" name="imagen" value="<?= !empty($_POST['imagen'])?$_POST['imagen']:$_GET['imagen'] ?>">
        <br/>
        <input type="submit">
        <input type="reset">
        <br/>
        <p class="warnings" id="warnings"> </p>
    </form>


    <script>
        
            const nombre = document.getElementById("nombre");
            const marca = document.getElementById("marca");
            const modelo = document.getElementById("modelo");
            const precio = document.getElementById("precio");
            const detalles = document.getElementById("detalles");
            const unidades = document.getElementById("unidades");
            const imagen = document.getElementById("imagen");
            const parrafo = document.getElementById("warnings");

            const regex = /^[0-9]*$/;
            const regexletras = /^[a-zA-Z]*$/;


            form.addEventListener("submit", e=>{
                
                let warnings= ""
                entrar = false;
                
                
                if(nombre.value.length < 1){
                    warnings += 'El nombre esta vacio <br/>';
                    entrar = true
                }else{
                    if(regex.test(nombre.value)){
                    warnings += 'El nombre no pueden ser solo numeros <br/>';
                    entrar = true
                }
                if(nombre.value.length > 100){
                    warnings += 'El nombre no puede ser mayor a 100 caracteres <br/>';
                    entrar = true;
                }
                }
                

                if(marca.value.length < 1){
                    warnings += 'La marca esta vacia, escoja una opcion<br/>';
                    entrar = true
                }
                

                if(modelo.value.length<1){
                    warnings += 'El modelo esta vacio <br/>';
                    entrar = true
                }else{
                    if(regex.test(modelo.value)){
                    warnings += 'El modelo no pueden ser solo numeros <br/>';
                    entrar = true
                }
                if(regexletras.test(modelo.value)){
                    warnings += 'El modelo no pueden ser solo letras <br/>';
                    entrar = true
                }
                if(modelo.value.length > 25){
                    warnings += 'El modelo no puede ser mayor a 25 caracteres <br/>';
                    entrar = true;
                }
                }
                

                if(precio.value<99.99){
                    warnings += 'El precio debe de ser al menos mayor a $99.99 <br/>';
                    entrar = true
                }else{
                    if(regex.test(precio.value)){
                    }else{
                    warnings += 'El precio solo deben ser numeros <br/>';
                    entrar = true
                }
                }
                

                if(detalles.value.length > 1){
                    if(regex.test(detalles.value)){
                    warnings += 'Los detalles no pueden ser solo numeros <br/>';
                    entrar = true
                }
                if(detalles.value.length>250){
                    warnings += 'Los detalles del producto no deben ser mayores a 250 caracteres <br/>';
                    entrar = true
                }
                }
                

                if(unidades.value<1){
                    warnings += 'Debe haber al menos 1 unidad disponible <br/>';
                    entrar = true
                }else{
                    if(regex.test(unidades.value)){
                }else{
                    warnings += 'Las unidades solo deben ser numeros <br/>';
                    entrar = true
                }
                }

                if(imagen.value.length<1){
                    document.getElementById("imagen").value='img/imagen.png';
                }
                

                if (entrar){
                    parrafo.innerHTML = warnings;
                    entrar = false;
                    e.preventDefault()
                }else{
                    parrafo.innerHTML= 'Enviado';
                }

            })
            
        
    </script>
</body>
</html>