<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            h1{
                text-align: center;
                text-transform: uppercase;
            }
            .contenido{
                font-size: 20px;
            }
            #primero{
                background-color: #ccc;
            }
            #segundo{
                color:#44a359;
            }
            #tercero{
                text-decoration:line-through;
            }
    </style>
    </head>
    <body>
        <h1>LA EMPRESA {{$company ->name}}</h1>
        <hr>
        <h2>El propiestario es {{$company->contact}} con número de telefono {{$company->telephone}}</h2>
        </br>
        <h2>La empresa tiene como ingresos anuales: {{$company->money}} €</h2>
        </br>
        <h2>El registro se ha realizado: {{$company->created_at}}</h2>
        </br>
        <h2>Le agradecemos sum comentario: {{$company->coment}}</h2>
        </br>


    </body>
</html>