<!-- Sidebar -->

<div class="sidebar" style="opacity: 0; width: 16rem !important;"></div>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="position: fixed; left: 0; top: 0; z-index: 100; background-color: #e18b1d !important; background-image: linear-gradient(180deg,#e18b1d 10%,#b77016 100%) !important;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <img src="img/logo.png">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

    <!-- Nav Item - Other setting -->
    <li class="nav-item">
        <a class="nav-link" href="settings.php">
            <i class="fas fa-users-cog"></i>
            <span>Nastavenia</span></a>
    </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Databáza
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item" id="profiles">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user-tag"></i>
          <span>Umelci</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="actors.php?view=profiles">Herci</a>
            <a class="collapse-item" href="photographers.php?view=profiles">Fotografi</a>
            <a class="collapse-item" href="hostess.php?view=profiles">Hostesky</a>
            <a class="collapse-item" href="models.php?view=profiles">Modeli</a>
            <a class="collapse-item" href="creatives.php?view=profiles">Kreatívny profesionál</a>
          </div>
        </div>
      </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item" id="companies">
            <a class="nav-link" href="companies.php?view=companies">
                <i class="fas fa-users-cog"></i>
                <span>Agentúry</span></a>
        </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">Administrácia</div>

      <!-- Nav Item - Charts -->
      <li class="nav-item" id="photoValidation">
        <a class="nav-link" href="photoValidation.php?view=photoValidation">
            <i class="fas fa-image"></i>
            <span>Fotoautorizácia</span></a>
          <span class="cs-sidebar-item-alert"></span>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item" id="blogEdit">
        <a class="nav-link" href="blogEdit.php?view=blogEdit">
            <i class="fas fa-th-large"></i>
            <span>Blog</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
<!-- End of Sidebar -->

<script>
    $( document ).ready(function() {
        document.getElementById('<?php echo $_POST['view'] ?>').classList.add("active");
    });</script>