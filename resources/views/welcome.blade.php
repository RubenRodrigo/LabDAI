<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- BOOTSTRAP CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>
    <body>
        <nav class ="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container">
                <a href="welcome.blade.php" class="navbar-brand">
                    FIGHT CLUB
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collpase navbar-collpase" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link">Rule1</a>                            
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Info</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="fondo">            
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-4 p-5">
                        <h3>Argumento</h3>
                        <img class="img-fluid" src="images/fight_club1.png" alt="">                                   
                    </div>
                    <div class="col-lg-8 p-5">
                        <p>
                        El narrador (Edward Norton), cuyo nombre nunca se menciona, es un empleado de una empresa automovilística que sufre de insomnio. Su médico se niega a recetarle medicación y, al quejarse de que está sufriendo, le replica que vaya a un grupo de apoyo para ver lo que es el sufrimiento de verdad.
                        </p>  
                    </div>
                </div>
            </div>               
        </header>
        <div class="bg-dark">
            <div class="container">
                <div class="text-center p-4 text-light">
                    <h1 class="display-4">Info</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium rerum, unde ipsa a saepe minus?</p>                    
                    <button class="btn btn-outline-secondary">
                    No hagas Click
                    </button>
                </div>                
            </div>
        </div>        

        <div class="bg-light text-muted py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="images/fight_club.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>Reglas</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, dolores temporibus. Laudantium tempore ut perspiciatis?</p>
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item px-3">
                                <p>
                                    1. La primera regla del Club de la Lucha es: Nadie habla sobre el Club de la Lucha.
                                </p>
                            </li>
                            <li class="nav-item px-3">
                                <p>
                                2. La segunda regla del Club de la Lucha es: Ningún miembro habla sobre el club de la Lucha.
                                </p>
                            </li>
                            <li class="nav-item px-3">
                                <p>
                                3. La tercera regla del Club de la Lucha es: La pelea termina cuando uno de los contendientes grita "basta", desfallece o hace una señal.
                                </p>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
