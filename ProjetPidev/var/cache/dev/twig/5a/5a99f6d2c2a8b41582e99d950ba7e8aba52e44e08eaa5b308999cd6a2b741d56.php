<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* temp1.html.twig */
class __TwigTemplate_baf7d705d3c51382568f46995f3914336b3a78bb27ee2272294c728c9d900d9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminPanel| Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/morris.js/morris.css"), "html", null, true);
        echo "\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/jvectormap/jquery-jvectormap.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <style> .btn-primary {
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;

        }
        .btn-primary:hover {
            opacity: 0.8;
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;
        }
        .btn-primary:active {
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;
        }
    </style>
    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\" >

        <!-- Logo -->

        <a href=\"/admin\" class=\"logo\" style=\"background-color: grey; color:black;\">

            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>LT</span>

            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Admin</b>Panel</span>

        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" style=\"background-color: grey;\" >
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>


            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                                        <!-- Notifications: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Emna Besbes</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\" style=\"background-color: grey;\">
                                <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Emna Besbes - admin/Web Developer
                                    <!--small >Member since Nov. 2012</small-->
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-primary\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/connexion"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\" style=\"background-color: grey; color:white\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar user panel -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>Emna Besbes</p>
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\" data-widget=\"tree\">
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i> <span>Gestion des utilisateurs</span>
                        <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"/Patients\"><i class=\"fa fa-circle-o\"></i> Gestion des patients</a></li>
                        <li><a href=\"/Medecins\"><i class=\"fa fa-circle-o\"></i> Gestion des médecins</a></li>
                        <li><a href=\"/Pharmaciens\"><i class=\"fa fa-circle-o\"></i> Gestion des pharmaciens</a></li>
                        <li><a href=\"/Parapharmaciens\"><i class=\"fa fa-circle-o\"></i> Gestion des parapharmaciens</a></li>
                    </ul>
                </li>

                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i> <span>Gestion des MP</span>
                        <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"/afficherCategorieSoinMP\"><i class=\"fa fa-circle-o\"></i> Gestion des catégories soins MP</a></li>
                        <li><a href=\"/afficherSoinMP\"><i class=\"fa fa-circle-o\"></i> Gestion des soins MP</a></li>
                    </ul>
                </li>

                <li><a href=\"\"><i class=\"fa fa-book\"></i> <span>Gestion des laboratoires</span></a></li>
                <li><a href=\"\"><i class=\"fa fa-book\"></i> <span>Gestion des médicaments</span></a></li>
                <li><a href=\"\"><i class=\"fa fa-book\"></i> <span>Gestion des centres médicaux</span></a></li>
                <li><a href=\"/afficheRegions\"><i class=\"fa fa-book\"></i> <span>Gestion des regions</span></a></li>
                <li><a href=\"/affichePara\"><i class=\"fa fa-book\"></i> <span>Gestion des parapharmacie</span></a></li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "temp1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 130,  192 => 112,  176 => 99,  167 => 93,  102 => 31,  97 => 29,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  71 => 18,  66 => 16,  61 => 14,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminPanel| Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/bower_components/bootstrap/dist/css/bootstrap.min.css')}}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/bower_components/font-awesome/css/font-awesome.min.css')}}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/bower_components/Ionicons/css/ionicons.min.css')}}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/dist/css/AdminLTE.min.css') }}\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/dist/css/skins/_all-skins.min.css')}}\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/bower_components/morris.js/morris.css')}}\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/bower_components/jvectormap/jquery-jvectormap.css')}}\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <style> .btn-primary {
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;

        }
        .btn-primary:hover {
            opacity: 0.8;
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;
        }
        .btn-primary:active {
            background-color: #d11414 !important;
            border-color: #d11414 !important;
            border-radius: 6px;
        }
    </style>
    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\" >

        <!-- Logo -->

        <a href=\"/admin\" class=\"logo\" style=\"background-color: grey; color:black;\">

            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>LT</span>

            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Admin</b>Panel</span>

        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" style=\"background-color: grey;\" >
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>


            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                                        <!-- Notifications: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"{{ asset('bundles/dist/img/user2-160x160.jpg')}}\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Emna Besbes</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\" style=\"background-color: grey;\">
                                <img src=\"{{ asset('bundles/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Emna Besbes - admin/Web Developer
                                    <!--small >Member since Nov. 2012</small-->
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-primary\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"{{ asset ('/connexion') }}\" class=\"btn btn-primary\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\" style=\"background-color: grey; color:white\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar user panel -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"{{ asset('bundles/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>Emna Besbes</p>
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\" data-widget=\"tree\">
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i> <span>Gestion des utilisateurs</span>
                        <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"/Patients\"><i class=\"fa fa-circle-o\"></i> Gestion des patients</a></li>
                        <li><a href=\"/Medecins\"><i class=\"fa fa-circle-o\"></i> Gestion des médecins</a></li>
                        <li><a href=\"/Pharmaciens\"><i class=\"fa fa-circle-o\"></i> Gestion des pharmaciens</a></li>
                        <li><a href=\"/Parapharmaciens\"><i class=\"fa fa-circle-o\"></i> Gestion des parapharmaciens</a></li>
                    </ul>
                </li>

                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i> <span>Gestion des MP</span>
                        <span class=\"pull-right-container\"><i class=\"fa fa-angle-left pull-right\"></i></span>  </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"/afficherCategorieSoinMP\"><i class=\"fa fa-circle-o\"></i> Gestion des catégories soins MP</a></li>
                        <li><a href=\"/afficherSoinMP\"><i class=\"fa fa-circle-o\"></i> Gestion des soins MP</a></li>
                    </ul>
                </li>

                <li><a href=\"\"><i class=\"fa fa-book\"></i> <span>Gestion des laboratoires</span></a></li>
                <li><a href=\"\"><i class=\"fa fa-book\"></i> <span>Gestion des médicaments</span></a></li>
                <li><a href=\"\"><i class=\"fa fa-book\"></i> <span>Gestion des centres médicaux</span></a></li>
                <li><a href=\"/afficheRegions\"><i class=\"fa fa-book\"></i> <span>Gestion des regions</span></a></li>
                <li><a href=\"/affichePara\"><i class=\"fa fa-book\"></i> <span>Gestion des parapharmacie</span></a></li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">

", "temp1.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\temp1.html.twig");
    }
}
