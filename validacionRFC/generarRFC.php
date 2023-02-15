<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Genera tu RFC</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>

    <div class="flex-container">
        <h2><center>Generar RFC de contribuyente</center></h2>


         <div class="contenedor-form">
       <label for="nombre">Nombre(s) :</label>
        <input type="text" name="nombre" id="nom">

        <label for="ApellidoMaterno">Apellido Paterno: </label>
        <input type="text" name="aPaterno" id="apep">

        <label for="Apellido Paterno">Apellido Materno</label>
        <input type="text" name="aMaterno" id="apem">

        <label for="fechaN">Fecha de Nacimiento</label>
        <input type="date" name="fechaN" id="fechaN"> 
        <hr><br>
                <button class="button" id="btn-generar">Generar</button>
            <br>
        <label for="impirmi_rfc">RFC: </label>
        <input type="text" id="res">
     </div><br>
    
   


        <!----------- ***********************************************v peueba de api ?*********************************-->



        <br><br><hr>
<h3><center>Consumiendo {JSON} Placeholder Free fake API for testing and prototyping.</center></h3>
        <div class="formpanel" id="f1 ">
            

        <article>id: <input id="id_user" type="text"><button class="button" id="btn-consultar">Consultar api</button><br></article>
        <br>
        name: <input id="name" type="text"><br>
        username: <input id="username" type="text"><br>
        email: <input id="email" type="text"><br>
        direccion: <input id="address" type="text"><br>
        phone: <input id="phone" type="text"><br>
        website: <input id="website" type="text"><br>



        </div>

    </div>
   


    <script src="main.js"></script>
    <script src="jquery-3.6.3.js" type="javascript"></script>
    
</body>


    



</html>
