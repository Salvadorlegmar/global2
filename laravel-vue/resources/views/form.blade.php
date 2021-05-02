<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario Empresa</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        
    </head>
    <body>
    <div id="crud" class="row">
        <div class="col-md-8 order-md-1">
            <div class="col-md-7 mb-3">
                <h1>Deja tus datos y nos pondremos en contacto</h1>
            </div>
            <form class="needs-validation" method="POST" v-on:submit.prevent="createCompany">
                <!--<div class="row">-->
                    <div class="col-md-6 mb-3">
                        <label for="nombre">¿Como se llama tu empresa?</label>
                        <input class="form-control" id="nombre" placeholder="Empresa 5" type="text" name="nombre" v-model="newNombre"/>
                    </div>
                <!--</div>-->
                <div class="col-md-6 mb-3">
                    <label for="email">¿Cuales son tus ingresos anuales?</label>
                    <input class="form-control"  id="email" type="text" placeholder="15.000" name="ingresos" v-model="newIngresos"/>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">¿Como te llamas tú?</label>
                    <input class="form-control"  id="email" type="text" placeholder="Pedro" name="namePersona" v-model="newContacto"/>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">Teléfono de contacto</label>
                    <input class="form-control"  id="email" type="text" placeholder="666565" name="telefono" v-model="newTelefono"/>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">¿Qué te interesa de nosotros?</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Me interesan vuestros productos" rows="3" v-model="newComent"></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label>
                        <input type="checkbox"> Acepto los terminos legales
                    </label>
                </div>
                <div class="col-md-6 mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <!--<script src="{{ asset('js/app.js') }}"></script>-->
    </body>
</html>
