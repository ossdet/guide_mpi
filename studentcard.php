<?php global $nom, $prenom, $num_inscription, $email, $numero_telephone, $niveau_etudes, $filiere;
include_once('studentcardinfo.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Card</title>
  <link rel="icon" href="assets/icons/logo_insat.ico" type="image/png">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/studentcard.css">
  <link rel="stylesheet" href="css/static_navbar.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php
    include('static_navbar.php');
  ?>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header text-center">
        <div class="col-md-12">
          <img src="./assets/img/logo_insat.png" alt="Logo" class="float-start me-3">
          <h2 class="text-black d-inline-block">Carte Etudiant</h2>
        </div>
      </div>

      <div class="card-body">
        <div class="row">

          <div class="col-md-8">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab1"><i class="fas fa-user"></i>Informations perosonnelles </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab2"><i class="fas fa-pen"></i> Editer votre profil </a>
              </li>
            </ul>
            <div class="tab-content">

              <!--  ************************************Informations personnelles -->


              <div class="tab-pane fade show active" id="tab1">
                <h4>Nom: <?php echo $nom . " " . $prenom; ?></h4>
                <br>
                <h4>Numéro d'inscription : <?php echo $num_inscription; ?></h4>
                <br>
                <h4>Email: <?php echo $email; ?></h4>
                <br>
                <h4>Numéro de téléphone: <?php echo $numero_telephone; ?></h4>
                <br>
                <h4>Niveau d'études: <?php echo $niveau_etudes; ?></h4>
                <br>
                <h4>Filière: <?php echo $filiere; ?></h4>
              </div>



              <!--  ************************************Editer votre profil -->



                <div class="tab-pane fade" id="tab2">
                  <form method="post" action="studentcardedit.php">
                  <div class="row mt-2">
                    <div class="col-md-6">
                      <label class="labels">Nom</label>
                      <input type="text" class="form-control" placeholder="Nom" name="nom" value="<?=$nom  ?>">
                    </div>
                    <div class="col-md-6">
                      <label class="labels">Prénom</label>
                      <input type="text" class="form-control" value="" placeholder="Prénom" name="prenom" value="<?=$prenom  ?>">
                    </div>
                  </div>

                  <div class="row mt-3">
                    <!--
                    <div class="col-md-12">
                      <label class="labels">Email</label>
                      <input type="text" class="form-control" placeholder="entrer votre email universiataire"
                             name="email" value="<?=$email ?>"
                    </div>-->
                    <br>
                    <br>
                    <div class="col-md-12">
                      <label class="labels">Numéro de téléphone</label>
                      <input type="text" class="form-control" placeholder="entrer votre numéro de téléphone"
                             name="numero_telephone" value="<?=$numero_telephone  ?>">
                    </div>
                    <br>
                    <br>
                    <label for="niveau_etudes">Niveau d'études:</label>
                    <input type="text" list="niveaux" id="niveau_etudes" name="niveau_etudes" value="<?=$niveau_etudes  ?>">
                    <datalist id="niveaux">
                      <option value="1ère année">
                      <option value="2ème année">
                    </datalist>

                    <label for="filières">Filière:</label>
                    <input type="text" list="filières" id="filieres" name="filiere" value="<?=$filiere  ?>">
                    <datalist id="filières">
                      <option value="MPI">
                      <option value="CBA">
                      <option value="RT">
                      <option value="GL">
                      <option value="IIA">
                      <option value="IMI">
                    </datalist>
                    <div class="mt-3">
                      <label for="student_image">Image de l'étudiant :</label>
                      <input type="file" id="student_image" name="student_image">
                    </div>
                    <div class="button mt-2 d-flex flex-row justify-content-center align-items-center">
                      <button class="btn btn-sm btn-outline-primary edit-button text-white" name="submit">Editer</button>
                    </div>
                  </div>
                  </form>
                </div>

            </div>
          </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>
        <script src="js/studentcard.js"></script>
</body>

</html>