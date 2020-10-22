<?php
    $projects=[
    
        [
            'name'=>'CERTIFICADOO DE VIGILANCIA ',
            'description'=>'Este un un curso de vigilancia',
            'technologie'=> 'N/A',
            'icono'=> 'imagenes/JUANNN.png',
            'link'=> '#'
            
        ],
        [
            'name'=>'CALCULADORA.',
            'description'=>'Calculadora basica de panaderia ',
            'technologie'=> 'android y kotlin ',
            'icono'=> 'imagenes/calculadora.png',
            'link'=> 'https://github.com/juanjkl/calculadra'
        ],
        [
            'name'=>'CALCULO DE MASA CORPORAL.',
            'description'=>'CALCULE SU MASA CORPORAR  ',
            'technologie'=> 'android y Java ',
            'icono'=> 'imagenes/masa.jpg',
            'link'=> 'https://github.com/juanjkl/masa-corporal'

        ],
    ];
    $skills=[
        'languaje'=> 'HTML, CSS, JAVA'
    ];
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Martel:wght@600&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css.css/css.css">
    <title>Juan David Martin</title>
</head>

<body>
    <section class="container mt-5">
        <article class="row">
            <div class="col-3">
                <img class="img-fluid " src="Imagenes/juanfoto.png" alt="foto Juan Martin">
            </div>
            <div class="col-7 font1">
                <h1>Juan David Martin</h1>
                <hr>
                <h6>Programador de software  </h6>
                <h6>Vigilante  </h6>
                <h6>juandavi890520@gmail.com</h6>
                <h6>3114750460</h6>
                <h6><a href="https://www.facebook.com/juandavid.martincastaneda/">https://www.facebook.com/juandavid.martincastaneda/</a></h6>
            </div>
        </article>
    </section><br>
    <section class="container">
        <article class="row">
            <div class="justify-content-center font">
                <div class="">
                    <h4 class="h5">Carrer Summary</h4>
                
                    <p>FUNDACION DE EDUCACION SUPERIOR NUEVA AMERICA <br>
                   TECNICA PROFESIONAL EN PROGRAMACION DE SOFTWARE </P> 
                    <p>CENTRO DE ENTRENAMIENTO COLOMBO LATINA <br>
                    FUNDAMENTACION VIGILANTE </p>  
                </div>
            </div>
        </article>
    </section>
    <section class="container pt-4">
        <h5>Projectos</h5>
        <article class="card-columns">



            <?php
            $size = count($projects);
            for($i=0; $i<$size; $i++){
            echo'<div class="card bg-dark text-white">';
            echo'    <div class="card-header text-center">';
            echo'        <h5 class="card-title">'.$projects[$i]['name'].'</h5>';
            echo'    </div>';
            echo'    <div class="card-body">';
            echo'        <img class="img-fluid " src="'.$projects[$i]['icono'].'" alt="Imagen del Proyecto">'; 
            echo'    </div>';
            echo'    <div class="card-footer">';
            echo'        <p style="text-center">'.$projects[$i]['description'].'</p>';
            echo'        <span class="badge badge .primary">'.$projects[$i]['technologie'].'</span>';
            echo'        <a class="btn btn-outline-info btn block" href="'.$projects[$i]['link'].'">Ver proyecto</a>';
            echo'    </div>';
            echo'</div>';
        }

            ?>
        </article>
        </section class="container pt-5 pb-5">
    <h5>Skills and Technologies</h5>
    <article class="row">
        <ul>
            <li>
                <?php
            echo '    <h5>'.$skills['languaje'].'</h5>';
            echo '    <h6>One year</h6>';
            echo '     <p>Manejo y estudio optimo de lenguaje JAVA, uso adecuado de CSS y HTML, en proyeccion a mejora</p>';
            echo '    </li>';
            ?>
        </ul>
    </article>

    <section>

    </section>
    

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>