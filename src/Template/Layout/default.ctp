<?php 
$fullname="Judicael FALADE";$role="Administrateur"
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>

<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
        <?= $cakeDescription ;?>:
        <?= $this->fetch('title'); ?>
    </title>
   <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="/cakeaddict/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/cakeaddict/plugins/font-awesome/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="/cakeaddict/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/cakeaddict/dist/css/skins/_all-skins.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/cakeaddict/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/cakeaddict/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/cakeaddict/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/cakeaddict/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/cakeaddict/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/cakeaddict/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="sidebar-mini layout-boxed skin-green-light">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="/cakeaddict/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Tab</b></span>
      <!-- logo for regular state and mobile  -->
      <span class="logo-lg"><b>Tableau de bord</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-danger"><?= $nbmessage?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Vous avez <?= $nbmessage?> messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="/cakeaddict/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                       Titre de la notification
                        <small><i class="fa fa-clock-o"></i>temps passé</small>
                      </h4>
                      <p>morceau du Contenu du message</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="/cakeaddict/messages">Lire tous les messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?= $nbnotif?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Vous avez <?= $nbnotif?> notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> vous avez une nouvelle Commande
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Vous avez une nouvelle inscription
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="/cakeaddict/notifications">Voir toutes les notifications</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/cakeaddict/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?= $fullname ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/cakeaddict/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
               
                  <?= $fullname ?>
                <br>
                <span> <?= $role?> </span></p>
              </li> 
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/cakeaddict/users/profile" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="/cakeaddict/users/logout" class="btn btn-default btn-flat">Déconnexion</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle=""><i class="fa "></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
   
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Catégories</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/cakeaddict/categories/add"><i class="fa fa-circle-o"></i>Ajouter</a></li>
            <li><a href="/cakeaddict/categories/"><i class="fa fa-circle-o"></i>Liste</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Produits</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/cakeaddict/products/add"><i class="fa fa-circle-o"></i>Ajouter un produit</a></li>
            <li><a href="/cakeaddict/products/"><i class="fa fa-circle-o"></i>Liste</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>Commandes</span>
            <span class="label label-primary pull-right"><?= $nbNewOrders?></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/cakeaddict/porders/piecesmontees"><i class="fa fa-circle-o"></i>Ajouter Pièces montées</a></li>
            <li><a href="/cakeaddict/porders/index"><i class="fa fa-circle-o"></i>Liste Pièces montées</a></li>

            <li><a href="/cakeaddict/orders/add"><i class="fa fa-circle-o"></i>Ajouter une commande</a></li>
            <li><a href="/cakeaddict/orders"><i class="fa fa-circle-o"></i>Liste commandes simple</a></li>
            <li><a href="/cakeaddict/orders/index/En%20préparation"><i class="fa fa-circle-o"></i>En cours</a></li>
            <li><a href="/cakeaddict/orders/index/Prête"><i class="fa fa-circle-o"></i>Traitées</a></li>
            <li><a href="/cakeaddict/orders/index/Annulée"><i class="fa fa-circle-o"></i>Annulée</a></li>
            <li><a href="/cakeaddict/orders/index/Retournée"><i class="fa fa-circle-o"></i>Retournée</a></li>
            <li><a href="/cakeaddict/orders/"><i class="fa fa-circle-o"></i>Statistiques</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Biscuits de base</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/cakeaddict/biscuits/add"><i class="fa fa-circle-o"></i>Ajouter</a></li>
            <li><a href="/cakeaddict/biscuits/"><i class="fa fa-circle-o"></i>Liste</a></li>
            <li><a href="/cakeaddict/biscuit_entremets/add"><i class="fa fa-circle-o"></i>Associer Entremets-Biscuits</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Entremets</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/cakeaddict/entremets/add"><i class="fa fa-circle-o"></i>Ajouter</a></li>
            <li><a href="/cakeaddict/entremets/"><i class="fa fa-circle-o"></i>Liste</a></li>
            <li><a href="/cakeaddict/biscuit_entremets/add"><i class="fa fa-circle-o"></i>Associer Entremets-Biscuits</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Saveurs</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/cakeaddict/flavors/add"><i class="fa fa-circle-o"></i>Ajouter</a></li>
            <li><a href="/cakeaddict/flavors/"><i class="fa fa-circle-o"></i>Liste</a></li>
            <li><a href="/cakeaddict/biscuit_flavors/add"><i class="fa fa-circle-o"></i>Associer Entremets-Saveurs</a></li>
          </ul>
        </li>



        <li class="treeview">
            <a href="#">
              <i class="fa fa-ship"></i>
              <span>Livraison</span>
              <span class="label label-primary pull-right"><?= $nbNewOrders?></span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/cakeaddict/deliveries/index/Payée"><i class="fa fa-circle-o"></i>En cours</a></li>
              <li><a href="/cakeaddict/deliveries/index/develiverd"><i class="fa fa-circle-o"></i>Traitées</a></li>
              <li><a href="/cakeaddict/deliveries/"><i class="fa fa-circle-o"></i>Statistiques</a></li>
            </ul>
          </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Clients</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/cakeaddict/costumers/add"><i class="fa fa-circle-o"></i>Ajouter</a></li>
            <li><a href="/cakeaddict/costumers"><i class="fa fa-circle-o"></i>Liste</a></li>
            <li><a href="/cakeaddict/costumers/index/banned"><i class="fa fa-circle-o"></i>Suspendu</a></li>
            <li><a href="/cakeaddict/costumers/"><i class="fa fa-circle-o"></i>Stat. Visites</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-wechat"></i>
            <span>Messages</span>
            <span class="label label-primary pull-right"><?php echo $nbmessage?></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/cakeaddict/messages"><i class="fa fa-circle-o"></i>Nouveau Message</a></li>
            <li><a href="/cakeaddict/messages"><i class="fa fa-circle-o"></i>Boite de reception</a></li>
            <li><a href="/cakeaddict/messages/index/draft"><i class="fa fa-circle-o"></i>Brouillon</a></li>
            <li><a href="/cakeaddict/messages/index/trash"><i class="fa fa-circle-o"></i>Corbeille</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Utilisateurs</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/cakeaddict/users/add"><i class="fa fa-circle-o"></i>Ajouter</a></li>
            <li><a href="/cakeaddict/users"><i class="fa fa-circle-o"></i>Liste</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Paramètres</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/cakeaddict/payments"><i class="fa fa-circle-o"></i>Moyens de Paiment</a></li>
            <li><a href="/cakeaddict/deliveries/options"><i class="fa fa-circle-o"></i>Livraison</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 <div class="content-wrapper">  <!-- Content Wrapper. Contains page content -->
    <?= $this->Flash->render() ?>
   <?= $this->fetch('content') ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
     <b>Site réalisé par </b> <strong> <a href="http://benin-numerique.com" target="_blank">Benin Numerique</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Activités récentes</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="/cakeaddict/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="/cakeaddict/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- Sparkline -->
<script src="/cakeaddict/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/cakeaddict/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/cakeaddict/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/cakeaddict/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<!-- datepicker -->
<script src="/cakeaddict/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<!-- <script src="/cakeaddict/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
<!-- Slimscroll -->
<script src="/cakeaddict/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/cakeaddict/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/cakeaddict/dist/js/app.min.js"></script>

<?php if(isset($page) && $page=='home'): ?>
  <!-- Morris.js charts -->
  <script src="/cakeaddict/plugins/morris/morris.min.js"></script>
  <script src="/cakeaddict/plugins/raphael/raphael-min.js"></script>
<script src="/cakeaddict/dist/js/pages/dashboard.js"></script>
<?php endif; ?>
</body>
</html>
