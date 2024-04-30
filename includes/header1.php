<!DOCTYPE html>
<html lang="en-US">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta  http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TB drugs distribution web app</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--offline bootstrap -->
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap.js">
    <!-- online -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styling.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="light">
    <!--navigation bar-->
    <header class="bg-success rounded-pill mt-2 ms-2 me-2">
   <!-- nav bar -->
    <nav class="navbar navbar-expand-lg ">
      <div class="container-xxl container-fluid ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="main-nav">          
          <ul class="navbar-nav w-100 d-flex justify-content-around " style="font-size: 17px;">
            <li class="nav-item">
              <a class="nav-link" href="./index.php" style="font-size: 17px;"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./About.php"><b> Patients</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./career.php"><b> VHM</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./FQAs and feedback.php"><b> Dispensary </b></a>
            </li>         
            <!-- setting the button to be displayed on small screens -->
            <li class="nav-item d-md-none">
              <a class="nav-link" href="./applications .php"> Want to apply?</a>
            </li>
            <!--hiding the button in the small screens -->
            <li class="nav-item ms-2 d-none d-md-inline">
                    <div class="container border-radiu">
                    <div class="row justify-content-end mt-1">
                        <div class="col-md-12">
                            <form class="form-inline">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded-pill" placeholder="Search" />
                                    <div class="input-group-append">
                                        <!-- <button class="btn btn-outline-primary " type="submit" ><i class="fas fa-search"></i></button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>              
            </li>            
          </ul>
        </div>
      </div>     
   </nav> 
  </header>
</body>  
</html>