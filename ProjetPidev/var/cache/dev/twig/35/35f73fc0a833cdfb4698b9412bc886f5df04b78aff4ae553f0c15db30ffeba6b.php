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

/* admin.html.twig */
class __TwigTemplate_bb17bb58e2296f99ec83e99aa346f0d0b7d35a4d206e833593bdde6a4a70ddbc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1);
        // line 2
        echo "
<!DOCTYPE html>
<html>

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>AdminPanel| Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.7 -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
        <!-- Morris chart -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/morris.js/morris.css"), "html", null, true);
        echo "\">
        <!-- jvectormap -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/jvectormap/jquery-jvectormap.css"), "html", null, true);
        echo "\">
        <!-- Date Picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bower_components/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"";
        // line 33
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
        ";
        // line 62
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 65
        echo "    </head>
    <body class=\"hold-transition skin-blue sidebar-mini\" >
        <div class=\"wrapper\" >
            ";
        // line 69
        echo "            ";
        $context["_headerNavbar"] = ((        $this->hasBlock("headerNavbar", $context, $blocks)) ? (        $this->renderBlock("headerNavbar", $context, $blocks)) : (""));
        // line 70
        echo "
            ";
        // line 71
        $this->loadTemplate("includes/admin/header.html.twig", "admin.html.twig", 71)->display(twig_array_merge($context, ["headerNavbar" => (isset($context["_headerNavbar"]) || array_key_exists("_headerNavbar", $context) ? $context["_headerNavbar"] : (function () { throw new RuntimeError('Variable "_headerNavbar" does not exist.', 71, $this->source); })())]));
        // line 72
        echo "
            ";
        // line 73
        $this->loadTemplate("includes/admin/sidebar-left.html.twig", "admin.html.twig", 73)->display($context);
        // line 74
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 77
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 78
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
                ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "            </div>

            ";
        // line 85
        $this->loadTemplate("includes/admin/footer.html.twig", "admin.html.twig", 85)->display($context);
        // line 86
        echo "
           ";
        // line 88
        echo "        </div>
        <!-- ./wrapper -->

      ";
        // line 101
        echo "        ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 104
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 63
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("admin");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 102
        echo "            <!-- Add more javascript. -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 102,  255 => 101,  237 => 82,  224 => 63,  214 => 62,  202 => 104,  199 => 101,  194 => 88,  191 => 86,  189 => 85,  185 => 83,  183 => 82,  180 => 81,  171 => 78,  168 => 77,  164 => 76,  160 => 74,  158 => 73,  155 => 72,  153 => 71,  150 => 70,  147 => 69,  142 => 65,  140 => 62,  108 => 33,  103 => 31,  98 => 29,  93 => 27,  88 => 25,  83 => 23,  77 => 20,  72 => 18,  67 => 16,  62 => 14,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set route_name = app.request.attributes.get('_route') %}

<!DOCTYPE html>
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
        {% block stylesheets %}
            {{ encore_entry_link_tags('admin') }}
        {% endblock %}
    </head>
    <body class=\"hold-transition skin-blue sidebar-mini\" >
        <div class=\"wrapper\" >
            {# Detect if was added more navbar header links from the body block. #}
            {% set _headerNavbar = block('headerNavbar') is defined ? block('headerNavbar'):'' %}

            {% include 'includes/admin/header.html.twig' with {headerNavbar: _headerNavbar} %}

            {% include 'includes/admin/sidebar-left.html.twig' %}

            <div class=\"content-wrapper\">
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}

                {% block body %}{% endblock %}
            </div>

            {% include 'includes/admin/footer.html.twig' %}

           {#  {% include 'includes/admin/sidebar-right.html.twig' %} #}
        </div>
        <!-- ./wrapper -->

      {#  {% block javascripts %}
            {{ encore_entry_script_tags('admin') }}
            <!--Renders website.js & a webpack runtime.js file
                <script src=\"/build/runtime.js\"></script>
                <script src=\"/build/website.js\"></script> -->
            <script>
                web.startComponents({{ get_components() }});
            </script>
        {% endblock %}
      #}
        {% block scripts %}
            <!-- Add more javascript. -->
        {% endblock %}
    </body>
</html>
", "admin.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\admin.html.twig");
    }
}
