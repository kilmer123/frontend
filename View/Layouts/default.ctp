<!DOCTYPE html>
<html lang="en">

<head>

    <title>CDE</title>
    <?php
         echo $this->Html->css(array('build'));
	 echo $this->fetch('meta');
         echo $this->fetch('css');
         echo $this->fetch('script');
    ?>

</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <br><a class="btn btn-danger" href="#">
                <i class="fa fa-reddit fa-3x pull-left"></i> <b>Equipo Rojo</b><br>Version 1.0</a>
                <a class="navbar-brand" <li class="active"><?php echo $this->Html->link('Control de Estudio', array('controller' => 'pages', 'action' => 'home'), array('class' => 'navbar-brand')) ?></li>
                </a>
            </div>
            <br><br><ul class="nav navbar-top-links navbar-right pull-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Desconectar</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <br><div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a ><i class="fa fa-users fa-fw"></i> <b>Estudiantes</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php echo $this->Html->link('Lista de Estudiantes', array('controller' => 'estudiantes', 'action' => 'index')) ?> </a>
                                </li>
                                <li>
                                    <a <?php echo $this->Html->link('Nuevo Estudiante', array('controller' => 'estudiantes', 'action' => 'add')) ?> </a>
                                </li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i> <b>Areas</b> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a <?php echo $this->Html->link('Lista de Areas', array('controller' => 'areas', 'action' => 'index')) ?> </a>
                                </li>
                                <li>
                                    <a <?php echo $this->Html->link('Nueva Area', array('controller' => 'areas', 'action' => 'add')) ?> </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> <b>Sedes</b> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php echo $this->Html->link('Lista de Sedes', array('controller' => 'sedes', 'action' => 'index')) ?> </a>
                                </li>
                                <li>
                                    <a <?php echo $this->Html->link('Nueva Sede', array('controller' => 'sedes', 'action' => 'add')) ?> </a>
                                </li>
                            </ul>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            &nbsp;
            <?php echo $this->fetch('content'); ?>
        </div>

    </div>
    <?php
        echo $this->Html->script(array('build'));
    ?>    

</body>

</html>
