<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stelar Tech | Planètes</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid-theme.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.html" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Planet.php" class="nav-link">Planètes</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="astronaute.php" class="nav-link">Astronautes</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Liam Orion
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Cher capitaine, l'atterissage...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 h</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Ethan Nova
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Découverte de la galaxie d'...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 5 h</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Serena Astrid
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">La station spatiale de...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 6 h</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Voir tous les messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 nouveaux messages
            <span class="float-right text-muted text-sm">3 min</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 demandes d'ajout
            <span class="float-right text-muted text-sm">12 h</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 journal de bord externe
            <span class="float-right text-muted text-sm">2 j</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Voir toutes les notifications </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Stellar Tech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Apollo Sollis</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/e-commerce.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Celestial Odissey</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/e-commerce1.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>JB 5430</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/e-commerce2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nebula Quest</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="mission.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Missions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>

          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Equipage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Apollo Sollis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile1.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ethan Nova</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Serena Astrid</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liam Orion</p>
                </a>
              </li>
            </ul>
          </li>   
            </ul>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
        </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Missions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Planètes</li>
            </ol>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="tableau">
          <?php
$connection = mysqli_connect("localhost", "root", "", "planètes");

if (!$connection) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

$query = "SELECT * FROM mission";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Erreur lors de l'exécution de la requête : " . mysqli_error($connection));
}



echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nom</th>";
echo "<th>Vaisseau</th>";
echo "<th>Astronaute</th>";
echo "<th>Planètes</th>";
echo "<th>Début</th>";
echo "<th>Fin</th>";
echo "<th>Status</th>";
// Ajoutez d'autres en-têtes de colonnes si nécessaire
echo "</tr>";


while ($row = mysqli_fetch_assoc($result)) {
  echo "<br>";
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Nom'] . "</td>";
    echo "<td>" . $row['Vaisseaux'] . "</td>";
    echo "<td>" . $row['Astronautes'] . "</td>";
    echo "<td>" . $row['Planètes'] . "</td>";
    echo "<td>" . $row['Début'] . "</td>";
    echo "<td>" . $row['Fin'] . "</td>";
    echo "<td>" . $row['Status'] . "</td>";
    // Affichez d'autres colonnes si nécessaire
    echo "</tr>";
}

echo "</table>";

mysqli_close($connection);
echo "<div class='formulaire'>";

echo "Créer une mission";
echo "<br>";
echo "<div class='formulaire'>";

echo"<form action='création.php' method='POST'>";
  echo"<label for='Nom'>Nom :</label>";
  echo"<input type='text' name='Nom' required>";
  echo "<br>";
  echo"<label for='Vaisseaux'>Vaisseau :</label>";
  echo"<input type='text' name='Vaisseaux' required>";
  echo "<br>";
  echo"<label for='Astronautes'>Astronautes:</label>";
  echo"<input type='text' name='Astronautes' required>";
  echo "<br>";
  echo"<label for='Planètes'>Planète:</label>";
  echo"<input type='text' name='Planètes' required>";
  echo "<br>";
  
  
 echo" <input type='submit' value='Ajouter'>";
echo"</form>";
echo"</div>";

?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2060 <a href="https://adminlte.io">StelarTech.io</a></strong>
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


  


</body>
</html>
