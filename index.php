<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>
    body {
        background-image: url(https://fondosmil.com/fondo/485.jpg);
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    #fondo1 {
        background-color: rgba(253, 254, 255, 0.514);
    }

    #fondo2 {
        background-color: rgba(30, 31, 32, 0.678);
        max-width: 50vw;
    }

    input {
        color: aliceblue !important;
        background-color: rgba(0, 0, 0, 0.616) !important;
        border-color: black !important;
        text-align: center !important;
        border-radius: 20px !important;
    }

    input:hover {
        background-color: rgba(14, 13, 13, 0.541) !important;
        border-color: rgb(192, 188, 188) !important;
    }

    h1 {
        text-align: center;
    }
</style>

<body>
    <header>
        <div class="container-fluid justify-content-center p-5">
            <div class="container p-2" id="fondo1">
                <h1>Formulario de Registro</h1>
            </div>
        </div>
    </header>
    <main class="container p-5">
        <div class=" container position-relative  text-light align-items-center pe-5 ps-5 pt-5 pb-3" id="fondo2" width:"20%">
            <div class=" position-absolute top-0 start-50 translate-middle  ">
                <img src="https://cdn-icons-png.flaticon.com/512/72/72648.png" class="rounded-circle bg-light p-1" alt="..." width="150px" height="150px" id="imagenVista">
            </div>
            <form action="index.php" method="GET" action="datosEviados.php" class="m-4">
                <div class="row p-2 pt-5">
                    <div class="col-lg-3">
                        <h6>Nombre/s: </h6>
                    </div>
                    <div class="col-lg-9">
                        <input class="form-control " type="text" name="Nombres" id="nomb" placeholder="Ingresé su nombre o nombres">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-3">
                        <h6>Apellido/s: </h6>
                    </div>
                    <div class="col-lg-9">
                        <input class="form-control " type="text" name="Apellidos" id="apell" placeholder="Ingresé su apellido o apellidos">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-3">
                        <h6>Teléfono: </h6>
                    </div>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input class="form-control " type="tel" name="Telefono" id="telf" placeholder="Ingresé su número telefónico" style="width: 40%; border-radius: 20px 0px 0px 20px !important;">
                            <select class="form-select text-light" name="TipoTelefonos" aria-label="Default select example" style="background-color: rgba(0, 0, 0, 0.616); border-color: rgba(53, 48, 48, 0.849) ; border-radius:  0px  20px 20px 0px  !important;">
                                <option disabled>Seleccione</option>
                                <option value="Hogar">Hogar</option>
                                <option value="Movil">Movil</option>
                                <option value="Orgaización">Orgaización</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-3">
                        <h6>Email: </h6>
                    </div>
                    <div class="col-lg-9">
                        <input class="form-control " type="email" name="Correo" id="email" placeholder="Ingresé su correo electrónico">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-3">
                        <h6>Fecha de nac.: </h6>
                    </div>
                    <div class="col-lg-9">
                        <input class="form-control " type="date" name="Fecha nacimiento" id="fecna" min="1930-01-01" max="2021-12-31" style="width: 56%;">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-3">
                        <h6>Foto de perfil: </h6>
                    </div>
                    <div class="col-lg-9">
                        <input class="form-control" type="file" id="imgFile" name="imagePerfil" accept=".jpg, .jpeg, .png" style="background-color: rgba(0, 0, 0, 0.616); border-color: rgba(192, 188, 188, 0) ;">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-3">
                        <h6>Género: </h6>
                    </div>
                    <div class="col-md-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Genero" id="femenino" value="Femenino">
                            <label class="form-check-label" for="inlineRadio1">Femenino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Genero" id="masculino" value="Masculino">
                            <label class="form-check-label" for="inlineRadio2">Masculino</label>
                        </div>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-3">
                        <h6>Lenguajes de programación que ha empleado: </h6>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="LenguajePro[]" value="C" id="c">
                                    <label class="form-check-label" for="c">
                                        C
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="LenguajePro[]" value="c++" id="cmas">
                                    <label class="form-check-label" for="cmas">
                                        C++
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="LenguajePro[]" value="Java" id="java">
                                    <label class="form-check-label" for="java">
                                        Java
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="LenguajePro[]" value="Python" id="python">
                                    <label class="form-check-label" for="Python">
                                        Python
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="LenguajePro[]" value="Javascript" id="javascript">
                                    <label class="form-check-label" for="javascript">
                                        Javascript
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="LenguajePro[]" value="Swift" id="swift">
                                    <label class="form-check-label" for="swift">
                                        Swift
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="LenguajePro[]" value="Visual Basic" id="visualbasic">
                                    <label class="form-check-label" for="visualbasic">
                                        Visual Basic
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="LenguajePro[]" value="Assembly Language" id="asm">
                                    <label class="form-check-label" for="asm">
                                        Assembly Language
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="LenguajePro[]" value="Ruby" id="ruby">
                                    <label class="form-check-label" for="ruby">
                                        Ruby
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="LenguajePro[]" value="Kotlin" id="kotlint">
                                    <label class="form-check-label" for="kotlin">
                                        Kotlin
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-3">
                        <h6>Rol Profecional: </h6>
                    </div>
                    <div class="col-lg-9">
                        <select class="form-select text-light" aria-label="Default select example" style="background-color: rgba(0, 0, 0, 0.616); border-color: rgba(192, 188, 188, 0) ; width: 50%;" name="Rol">
                            <option disabled selected>Seleccione su Rol </option>
                            <option value="Estudiante">Estudiante</option>
                            <option value="Profesor">Profesor</option>
                            <option value="Empleado Privado">Empleado Privado</option>
                            <option value="Empleado Public">Empleado Publico</option>
                            <option value="Libre">Libre</option>
                        </select>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-3">
                        <h6>Comentario: </h6>
                    </div>
                    <div class="col-lg-9">
                        <textarea class="form-control" name="Comentario" id="exampleFormControlTextarea1" rows="4" placeholder="Escriba su comentario aquí..."></textarea>
                    </div>
                </div>
                <div class="container p-3 text-center">
                    <input class="btn btn-dark " type="submit" value="Enviar " style="width: 150px;">
                </div>
            </form>
        </div>
    </main>

    <footer>
        <div class="contaier- fluid text-center bg-dark text-light p-3 m-2">
            <h6>Realizado por: <a href="http://">Jimy Calvo M.</a></h6>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        const $seleccionArchivos = document.querySelector("#imgFile"),
            $imagenPrevisualizacion = document.querySelector("#imagenVista");
        $seleccionArchivos.addEventListener("change", () => {
            const archivos = $seleccionArchivos.files;
            if (!archivos || !archivos.length) {
                $imagenPrevisualizacion.src = "https://cdn-icons-png.flaticon.com/512/72/72648.png";
                return;
            }
            const primerArchivo = archivos[0];
            const objectURL = URL.createObjectURL(primerArchivo);
            $imagenPrevisualizacion.src = objectURL;
        });
    </script>
    <section class="container-fluid">
        <div class="container text-center p-5 bg-light">
            <h3>DATOS OBTENIDOS DEL FORMULARIO</h3>
            <?php
            var_dump($_GET);

            $nombresEnviado = isset($_GET["Nombres"]) ? $_GET["Nombres"] : " ";
            $apellidosEnviados = isset($_GET['Apellidos']) ? $_GET['Apellidos'] : '';
            $telefonoEnviado = isset($_GET['Telefono']) ? $_GET['Telefono'] : '';
            $teleTipoEnviado = isset($_GET["TipoTelefonos"]) ? $_GET["TipoTelefonos"] : '';
            $correoEnviado = isset($_GET['Correo']) ? $_GET['Correo'] : '';
            $fechaNacEnviado=isset($_GET['Fecha_nacimiento'])? $_GET['Fecha_nacimiento'] : '';
            $GeneroEnviado = isset($_GET['Genero']) ? $_GET['Genero'] : '';
            // $LengujesEnviado[]=isset($_GET["LenguajePro{}"]);
            $RolEnviado=isset($_GET['Rol']) ? $_GET['Rol']: '';
            $CometarioEnviado=isset($_GET['Comentario'])? $_GET['Comentario']:  '';

            function FechaNacer($fecha_nacimiento)
                {
                    $nacimiento = new DateTime($fecha_nacimiento);
                    $ahora = new DateTime(date("Y-m-d"));
                    $diferencia = $ahora->diff($nacimiento);
                    return $diferencia->format("%y");
                }
            

            echo "Nombre Completo: " . $nombresEnviado . " " . $apellidosEnviados;
            echo "<br>";
            echo "Número Telefonico: ".$telefonoEnviado." el cual es ".$teleTipoEnviado;
            echo "<br>";
            echo "Correo Electronico: ".$correoEnviado;
            echo "<br>";
            echo "Fecha de Nacimineto: ".$fechaNacEnviado;
            echo "<br>";
            echo "La Edad actual es: ".FechaNacer($fechaNacEnviado);
            echo "<br>";
            echo "Genero: ".$GeneroEnviado;
            echo "<br>";
            echo "Los Lenguajes de programación que ha seleccioado es: ";
            echo "<br>";
            if (isset($_GET['LenguajePro'])==0) {
                echo "No presenta regitro aqui..";
            } else {
                foreach ($_GET['LenguajePro'] as $i => $lengua)
                {
                    echo $i." - ".$lengua."<br>";
                }
            }
            echo "<br>";
            echo "El Rol profecional que selecciono es: ".$RolEnviado;
            echo "<br>";
            echo "Comentario: ".$CometarioEnviado;
            ?>
        </div>

    </section>
</body>

</html>