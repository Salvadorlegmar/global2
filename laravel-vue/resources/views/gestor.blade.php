<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestor</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="../sass/gestor.css">
    
  
    </head>
    <body>
        <div id="crud" class="col-md-6 mb-3">
            <div class="input-group">
                <div class="form-outline">
                    <input type="search" class="rounded" id="form1" placeholder="Filtrar por nomnre de la empresa" class="form-control" />
                </div>
            </div>
        </div>
   
        <div class="col-md-12 mb-3"> 
            <table id="table_gestor" class="table table-hover table-bordered">
                <thead>
                    <tr class="table-active">
                        <th scope="col">id</th>
                        <th scope="col">Empresa</th>
                        <th scope="col" data-sortable="true" >Ingresos anuales</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Fecha de consulta</th>
                        <th scope="col">Gestionado</th>
                    </tr>
                </thead>
                <tbody>
                    <!--<tr v-for="company in companies">
	                    <td width="10px">@{{ company.id }}</td>
	                    <td>@{{ company.nombre }}</td>
                        <td>@{{ company.ingresos }}</td>
                        <td>@{{ company.contacto }} + @{{ company.telefono }}</td>
                        <td>@{{ company.fecha }}</td>
                        <td>@{{ company.gestionado }}</td>
                    </tr>-->
                    <tr>
                        <th scope="row">1</th>
                        <td>Empresa 1</td>
                        <td>1000€</td>
                        <td>Pedro (65547879)</td>
                        <td>6 de marzo a las 11:30</td>
                        <td>SI</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Empresa 2</td>
                        <td>1000€</td>
                        <td>Pedro (65547879)</td>
                        <td>6 de marzo a las 10:30</td>
                        <td>NO</td>
                    </tr>
                
            </tbody>
        </table>
      </div>

    <!--<script src="{{ asset('js/app.js') }}"></script>-->
    </body>
</html>