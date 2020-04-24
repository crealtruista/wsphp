<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubilop WebServices</title>
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>


input#abrir-cerrar {
    position: absolute;
    top: -9999px;
}


label[for="abrir-cerrar"] {
    cursor:pointer;
    padding: 1rem;
    background-color:#35fdf0;
    color:black;
    display:inline-block;
    width:100%;

}

.abrir {
    display:none;
}


#contenido {
    margin-left:0;
}

input#abrir-cerrar:checked ~ #sidebar {
    width:40px;
    display: none;
}

input#abrir-cerrar:checked + label[for="abrir-cerrar"], input#abrir-cerrar:checked ~ #contenido {
    margin-right:-50px;
    transition: margin-right .4s;
}


</style>
</head>
<body class="<?php echo obtenerPaginaActual(); ?>">