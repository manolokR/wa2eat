<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
=======
  <!-- Sesión -->
  <?php $session = session(); ?>

>>>>>>> developJC
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wa2Eat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url("favicon.ico") ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
<<<<<<< HEAD
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url("bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
  <link href="<?= base_url("bootstrap/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
  <link href="<?= base_url("bootstrap/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
  <link href="<?= base_url("bootstrap/quill/quill.snow.css") ?>" rel="stylesheet">
  <link href="<?= base_url("bootstrap/quill/quill.bubble.css") ?>" rel="stylesheet">
  <link href="<?= base_url("bootstrap/remixicon/remixicon.css") ?>" rel="stylesheet">
  <link href="<?= base_url("bootstrap/simple-datatables/style.css") ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url("css/style.css") ?>" rel="stylesheet">
=======
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url("/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/bootstrap/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/bootstrap/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/bootstrap/quill/quill.snow.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/bootstrap/quill/quill.bubble.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/bootstrap/remixicon/remixicon.css") ?>" rel="stylesheet">
  <link href="<?= base_url("/bootstrap/simple-datatables/style.css") ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url("css/style.css") ?>" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="<?= base_url("js/main.js") ?>"></script>
>>>>>>> developJC


</head>

<body>

<<<<<<< HEAD
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?= base_url("iconos/logo.png") ?>" alt="" style="margin-right: 0px;">
        <img class="d-none d-lg-block" src="<?= base_url("iconos/logo_a_medias.png") ?> " style="margin-left: 0px;"></img>
=======


  <!-- ======= Header ======= -->


  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/home" class="logo d-flex align-items-center">
        <img src="<?= base_url("iconos/logo.png") ?>" alt="" style="margin-right: 0px;">
        <img class="d-none d-lg-block" src="<?= base_url("iconos/logo_a_medias.png") ?> "
          style="margin-left: 0px;"></img>
>>>>>>> developJC
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

<<<<<<< HEAD
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Buscar por receta..." title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
=======
    <!-- Barra de búsqueda -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" id="search-query" name="query" placeholder="Buscar por receta..."
          title="Enter search keyword">
      </form>
      <ul id="recipe_list" class="ingredients-list list-unstyled"></ul>
    </div>
    <!-- Fin barra de búsqueda -->





>>>>>>> developJC

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

<<<<<<< HEAD
        <li class="nav-item dropdown">

          

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Mostrar todos los mensajes</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->
=======



>>>>>>> developJC

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
<<<<<<< HEAD
            <img src="<?= base_url("imagenes/perfilTemporal.png") ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Bob Esponja</span>
=======

            <?php if ($session->has('user') && !is_null($session->get('user')->photo)): ?>
              <img src="data:image/jpeg;base64,<?= base64_encode($session->get('user')->photo) ?>" alt="Profile"
                class="rounded-circle">
            <?php else: ?>
              <img src="<?= base_url("imagenes/profile.png") ?>" alt="Profile" class="rounded-circle">
            <?php endif; ?>

            <span class="d-none d-md-block dropdown-toggle ps-2">

            </span>
>>>>>>> developJC
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
<<<<<<< HEAD
              <h6>Bob Esponja</h6>
=======
              <h6>
                <!-- Comprobar inicio de sesión-->
                <?php if ($session->has('logged_in')): ?>
                  <!-- Si usuario logueado -->
                  <p>
                    <?= $session->get('user')->username; ?>
                  </p>
                <?php else: ?>
                  <!-- Si usuario no logueado -->
                  <p>Usuario sin registrar</p>
                <?php endif; ?>
              </h6>
>>>>>>> developJC
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

<<<<<<< HEAD
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Mi perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
=======

            <?php if ($session->has('logged_in')): ?>
              <!-- OPCIONES USUARIOS LOGUEADOS -->
              <!-- COMPROBAR ADMIN -->
              <?php if ($session->get('user')->rol == 2): ?>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="/users">
                    <i class="bi bi-gear"></i>
                    <span>Panel Administrador</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              <?php endif; ?>
              <!-- FIN OPCIÓN ADMIN -->

              <li>
                <a class="dropdown-item d-flex align-items-center" href="/profile">
                  <i class="bi bi-person"></i>
                  <span>Mi perfil</span>
                </a>
              </li>
              <li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="/logout">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Cerrar sesion</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
            <?php else: ?>
              <!-- OPCIONES USUARIOS SIN REGISTRAR -->
              <li>
                <a class="dropdown-item d-flex align-items-center" href="login">
                  <i class="bi bi-question-circle"></i>
                  <span>Registro/Login</span>
                </a>
              </li>
            <?php endif; ?>
>>>>>>> developJC

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

<<<<<<< HEAD
  </header><!-- End Header -->
=======
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/home">
          <i class="bi bi-grid"></i>
          <span>Recetas</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <?php if ($vista == 'home'): ?>
        <div id="catFilters">

          <!-- Filtro Vegano-->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-layout-text-window-reverse"></i><span>Filtro Vegano</span><i
                class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <!--Contenido del dropdown-->
              <ul class="vegan-cboxtags">
                <li>
                  <input type="checkbox" class="filter-checkbox" id="checkboxOne" value="Order one">
                  <label for="checkboxOne">Recetas Veganas </label>
                </li>
              </ul>
            </ul>
          </li><!-- Fin Filtro Vegano -->

          <!-- Filtro Origen-->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav2" data-bs-toggle="collapse" href="#">
              <i class="bi bi-layout-text-window-reverse"></i><span>Filtro Origen</span><i
                class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <!--Contenido del dropdown-->
              <ul class="indian-cboxtags">
                <li>
                  <input type="checkbox" class="filter-checkbox" id="checkboxFour" value="India">
                  <label for="checkboxFour">India </label>
                </li>
              </ul>

              <ul class="french-cboxtags">
                <li>
                  <input type="checkbox" class="filter-checkbox" id="checkboxFive" value="Francia">
                  <label for="checkboxFive">Francia </label>
                </li>
              </ul>
              <ul class="chinese-cboxtags">
                <li>
                  <input type="checkbox" class="filter-checkbox" id="checkboxSix" value="China">
                  <label for="checkboxSix">China </label>
                </li>
              </ul>

              <ul class="mexican-cboxtags">
                <li>
                  <input type="checkbox" class="filter-checkbox" id="checkboxSeven" value="México">
                  <label for="checkboxSeven">México </label>
                </li>
              </ul>

              <ul class="spanish-cboxtags">
                <li>
                  <input type="checkbox" class="filter-checkbox" id="checkboxEight" value="España">
                  <label for="checkboxEight">España </label>
                </li>
              </ul>

              <ul class="japanese-cboxtags">
                <li>
                  <input type="checkbox" class="filter-checkbox" id="checkboxNine" value="Japón">
                  <label for="checkboxNine">Japón </label>
                </li>
              </ul>


            </ul>
          </li><!-- Fin Filtro Origen -->


          <!-- Filtro Temporada -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav3" data-bs-toggle="collapse" href="#">
              <i class="bi bi-layout-text-window-reverse"></i><span>Filtro Temporada</span><i
                class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <!--Contenido del dropdown-->
              <ul class="winter-cboxtags">
                <li>
                  <input type="checkbox" class="filter-checkbox" id="checkboxTen" value="Invierno">
                  <label for="checkboxTen">Invierno </label>
                </li>
              </ul>

              <ul class="spring-cboxtags">
                <li>
                  <input type="checkbox" class="filter-checkbox" id="checkboxEleven" value="Primavera">
                  <label for="checkboxEleven">Primavera </label>
                </li>
              </ul>
              <ul class="summer-cboxtags">
                <li>
                  <input type="checkbox" class="filter-checkbox" id="checkboxTwelve" value="Verano">
                  <label for="checkboxTwelve">Verano </label>
                </li>
              </ul>

              <ul class="autumn-cboxtags">
                <li>
                  <input type="checkbox" class="filter-checkbox" id="checkbox13" value="Otoño">
                  <label for="checkbox13">Otoño </label>
                </li>
              </ul>

            </ul>
          </li><!-- Fin Filtro Temporada -->


        </div>
      <?php endif; ?>


      </div>        
      


      <?php if ($session->has('logged_in')): ?>
        <!-- Si usuario logueado -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/insert_recipe">
            <i class="bi bi-file-earmark"></i>
            <span>Subir receta</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/myrecipes">
            <i class="bi bi-card-list"></i>
            <span>Mis recetas</span>
          </a>
        </li>
      <?php else: ?>
        <!-- Si usuario no logueado -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/login">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Registro/Login</span>
          </a>
        </li>
      <?php endif; ?>



    </ul>

  </aside><!-- End Sidebar-->


  <!-- <script>
$(document).ready(function() {
    $('.filter-checkbox').click(function() {
        var filters = {
            vegan: $('.vegan-cboxtags input:checked').val(),
            origin: [],
            season: []
        };
        $('.indian-cboxtags input:checked, .french-cboxtags input:checked, .chinese-cboxtags input:checked, .mexican-cboxtags input:checked, .spanish-cboxtags input:checked, .japanese-cboxtags input:checked').each(function() {
            filters.origin.push($(this).val());
        });
        $('.winter-cboxtags input:checked, .spring-cboxtags input:checked, .summer-cboxtags input:checked, .autumn-cboxtags input:checked').each(function() {
            filters.season.push($(this).val());
        });
        console.log("Error: " );
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('/filter_recipes'); ?>',
            data: filters,
            success: function(data) {
              
                $('.dashboard').html(data);
            }
        });
    });
});
</script>
 -->
>>>>>>> developJC
