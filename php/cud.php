<?php
include("conncrtio.php");
$con= connection();

$sql= "SELECT * FROM user";
$query= mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/iso-logo.png" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="./styleCrud.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Black+Han+Sans&family=Montserrat+Alternates:wght@100&family=Passion+One:wght@700&family=Roboto:wght@100;300;400;500&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Montserrat+Alternates:wght@100&family=Passion+One:wght@700&family=Roboto:wght@100;300;400;500&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100&family=Passion+One:wght@700&family=Roboto:wght@100;300;400;500&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100&family=Roboto:wght@100;300;400;500&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100&family=Passion+One:wght@700&family=Roboto:wght@100;300;400;500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script defer src="../js/app.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Black+Han+Sans&family=Montserrat+Alternates:wght@100&family=Passion+One:wght@700&family=Roboto:wght@100;300;400;500&display=swap');
    </style>
    <title>TechMarket</title>
</head>
<style>
    section[id] {
    scroll-margin-top: 70px;
  
  }
  
a{
    text-decoration: none;
}
.slider-container {
    display: flex;
    justify-content: center; /* Centra horizontalmente en la pantalla */
    width: 100%;
    background-color: rgb(231, 231, 231);
    overflow: hidden;
}

.contact-form {
    margin: 0 auto;
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 10px;
    width: 50vw;
    
}

.contact-form label {
    color: black;
}

.contact-form form {
    display: flex;
    flex-direction: column;
    text-align: start;
}

.contact-form label {
    margin-bottom: 10px;
}

.contact-form input,
.contact-form textarea {
    padding: 10px;
    border: none;
    border-radius: 50px;
    margin-bottom: 20px;
}

.contact-form input:focus,
.contact-form textarea:focus {
    outline: none;
    box-shadow: 0 0 5px #ff6384;
    transform: scale(1.05);
    transition: transform 0.3s ease-in-out;
}
.BtnsContact{
    display: flex;
    margin: 0 auto;
    width: 100%;
    align-items: center;
    justify-content: center;
}

</style>
<body>
    <header class="topheader">
        <nav class="topnav">
            <a href="#" class="logo">
                <img src="../img/logo.svg" alt="logo" />
            </a>
            <button class="open-menu" aria-label="Abrir menú">
                <img src="../img/hamburger-icon.svg" alt="abrir menú" />
            </button>
            <ul class="menu">
                <li>
                    <button class="close-menu" aria-label="Cerrar menú">axe/structure
                        <img src="../img/close-icon.svg" alt="cerrar menú" />
                    </button>
                </li>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../shop.html">Shop</a></li>
                <li><a href="../AboutUs.html">About Us</a></li>
                <li><a href="../blog.html">Blog</a></li>
                <li><a href="../ContactUs.html">Contact</a></li>
                <li><a href="./cud.php" class="selected">Users</a></li>


            </ul>
            <a href="../login.html"><i class='fas fa-user-circle' alt="Login"></i></a>
        </nav>
    </header>
<br><br><br>
<section id="inicio">
<div class="slider-container" >
        <center>
            <h1>Suscríbete a Nuestro Email</h1>
        </center>
    </div>
</section>

<div class="contact-form">
        <form action="insert_user.php" method="POST">
            <center><h1>Crear Usuario</h1></center>
            <label for="name">Nombre</label>
            <input type="text" name="name" required="obligatorio" palceholder="Nombre">
            <label for="lastname">lastname</label>
            <input type="text" name="lastname" required="obligatorio" palceholder="Apellido">
            <label for="username">username</label>
            <input type="text" name="username" palceholder="Username">
            <label for="password">password</label>
            <input type= "password" name="password" required="obligatorio" palceholder="Password">
            <label for="email">email</label>
            <input type="text" required="obligatorio" name="email" palceholder="email">

            <div class="BtnsContact">
                        <input type="submit" class="button" value="Registrar">
    
                        <input type="reset" class="button" value="Borrar todo">
                        </div>

        </form>
    </div>
    <div class= "users-table">
        <h2>Usuarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)):?>
                <tr>

                <th > <?=$row ['id']?></th>
                <th ><?=$row ['name']?></th>
                <th ><?=$row ['lastname']?></th>
                <th ><?=$row ['username']?></th>
                <th ><?=$row ['password']?></th>
                <th ><?=$row ['email']?></th>

                <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
            <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
            </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    
    <a href="#inicio">
        <button type="button" class="btn-arriba">
            ↑
        </button>
    </a>



    <section class="footer">
        <div class="slider-container">
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="../img/1.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/2.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/3.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/4.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/5.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/1.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/2.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/3.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/4.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container-fluid  text-black p-3" style="font-family: 'Poppins', sans-serif; background: white;">

                <div class="mt-3 ">
                    <h4 class="text-center fw-bold">Suscríbete a Nuestro Email</h4>
                    <h3 class="text-center fw-bold">Para las Últimas Noticias y Actualizaciones</h3>
                    <div class="searchBox">
                        <input class="searchInput" type="text" name="" placeholder="Search something">
                        <button class="searchButton" href="#">
                            <a href="#inicio"><h2>Suscríbete</h2></a>
                        </button>
                    </div>

                    <style>
                    </style>

                </div>

                <div class="row justify-content-around text-center text-md-start">

                    <div class="col-md-2 text-center">
                        <a href="#" class="logo">
                            <img src="../img/logo.svg" alt="logo" />
                        </a>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-unstyled">
                            <li class="fw-bold my-2">Partnership</li>
                            <li> <a href="#" class="text-decoration-none text-black">Website</a> </li>
                            <li> <a href="#" class="text-decoration-none text-black"> Social Media</a></li>
                            <li> <a href="#" class="text-decoration-none text-black">Branding</a> </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-unstyled">
                            <li class="fw-bold my-2">About</li>
                            <li> <a href="../AboutUs.html" class="text-decoration-none text-black">Our Project</a> </li>
                            <li> <a href="#" class="text-decoration-none text-black">Careers</a> </li>

                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-unstyled">
                            <li class="fw-bold my-2">Support</li>
                            <li> <a href="../ContactUs.html" class="text-decoration-none text-black">Contact</a> </li>
                            <li> <a href="#" class="text-decoration-none text-black">Support Request</a> </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <p class="fw-bold my-2 list-unstyled">Follow us</p>
                        <ul class="list-unstyled d-flex justify-content-center justify-content-md-start">
                            <li><a href="#" class="text-black"><i class="fa-brands fa-facebook me-2 fa-1x"></i></a></li>
                            <li><a href="#" class="text-black"><i class="fa-brands fa-whatsapp mx-2 fa-1x"></i></a></li>
                            <li><a href="#" class="text-black"><i class="fa-brands fa-youtube mx-2 fa-1x"></i></a></li>
                            <li><a href="#" class="text-black"><i class="fa-brands fa-instagram mx-2 fa-1x"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 text-center pt-2">
                        <p>&copy; 2022 Copyright <a href="#" class="text-black">Engineer Josadac Rodriguez</a></p>
                    </div>
                </div>
            </div>

        </footer>
    </section>
</body>

</html>