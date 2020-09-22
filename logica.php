<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
         <img src="img/camisa.jpg" width="30" height="30" alt="" loading="lazy">
            Tienda Esports
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">vista previa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logica.php">Carrito</a>
            </li>
        </ul>
    </div>
    </nav>
</header>
<main>
<l1> <a href="index.php"> Volver a la pgina principal</a></l1>
    <div class="container">
        
        <div class="row justify-content-center mt-5">
            <div class="col-4">

                <form action="index.php" method="POST">
                    <h3 class="text-center mb-4">Ingrese sus productos</h3>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="producto1" name="producto1">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="precio($)" name="precio1">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="producto2" name="producto2">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="precio($)" name="precio2">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="producto3" name="producto3">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="precio($)"name="producto3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="producto4" name="producto4">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="precio($)" name="producto4">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="producto5" name="producto 5">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="precio($)" name="producto 5">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="botonCalcular">Calcular</button>
                </form>

              
                
                <?php if(isset($_POST["botonCalcular"])): ?>

                
                
                    <h6 class="mt-5"> 
                        <?php
                            
                            $precio1=$_POST["precio1"];
                            $producto1=$_POST["producto1"];

                            $precio2=$_POST["precio2"];
                            $producto2=$_POST["producto2"];

                            $precio3=$_POST["precio3"];
                            $producto3=$_POST["producto3"];

                            $precio4=$_POST["precio4"];
                            $producto4=$_POST["producto4"];

                            $precio5=$_POST["precio5"];
                            $producto5=$_POST["producto5"];

                            

                            $total=$precio1+$precio2+$precio3+$precio4+$precio5;

                            echo("El producto 1 es: ".$producto1." -----($) ".$precio1);
                            echo("<br>");
                            echo("El producto 2 es: ".$producto2." -----($) ".$precio2);
                            echo("<br>");
                            echo("El producto 3 es: ".$producto3." -----($) ".$precio3);
                            echo("<br>");
                            echo("El producto 4 es: ".$producto4." -----($) ".$precio4);
                            echo("<br>");
                            echo("El producto 5 es: ".$producto5." -----($) ".$precio5);
                            echo("<br>");
                            echo("<br>");
                            echo("******************************");
                            echo("<br>");
                            echo("El total de la compra fué de: ".$total);

                            


                        ?>
                    </h6>
               
                
               
                

                <?php endif ?>

                

            </div>
        </div>




       
        

    </div>


</main>
<footer>

</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>