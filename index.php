<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome to Ramadlon Nur Kholiq's Portofolio</title>

    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="frontend/styles/main.css">
    
</head>
<body>
    <!--navigasi bar-->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="#" class="navbar-brand">
                <img src="frontend/images/Logo-rama.png" alt="Logo RamaKholiq">
            </a>
            <!--responsive navbar pada layar kecil-->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mynav" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Project</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- header -->
   <header>
       <div class="container">
           <div class="row">
               <div class="col text-center">
                <h1>
                    Helo, I’am
                </h1>
                <p>
                    Ramadlon Nur Kholiq
                    <br>
                    Fullstack Developer
                </p>
                <a href="#" class="btn btn-lets-coffee px-4 mt-4">
                    Let's Coffee
                </a>
               </div>

               <div class="col mt-2">
                   <img src="frontend/images/foto-rama.png" alt="foto-rama">
               </div>
           </div>
       </div>
   </header>




    <script src="frontend/libraries/jquery/jquery-3.5.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/retina/retina.min.js"></script>
</body>
</html>