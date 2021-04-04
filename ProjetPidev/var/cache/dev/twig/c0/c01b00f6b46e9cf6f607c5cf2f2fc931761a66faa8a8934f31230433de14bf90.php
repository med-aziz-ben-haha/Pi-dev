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

/* includes/admin/header.html.twig */
class __TwigTemplate_5eb798cf23d78594b99ffc76b63a4d45056e84a83e3bdf3d245af03851d8a639 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/header.html.twig"));

        // line 1
        echo "<header class=\"main-header\" >

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
    ";
        // line 21
        if ( !twig_test_empty((isset($context["headerNavbar"]) || array_key_exists("headerNavbar", $context) ? $context["headerNavbar"] : (function () { throw new RuntimeError('Variable "headerNavbar" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "      <ul class=\"nav navbar-nav navbar-nav-left\">
        ";
            // line 23
            echo (isset($context["headerNavbar"]) || array_key_exists("headerNavbar", $context) ? $context["headerNavbar"] : (function () { throw new RuntimeError('Variable "headerNavbar" does not exist.', 23, $this->source); })());
            echo "
      </ul>
    ";
        }
        // line 26
        echo "

    <div class=\"navbar-custom-menu\">
      <ul class=\"nav navbar-nav\">

              ";
        // line 48
        echo "
        <!-- User Account: style can be found in dropdown.less -->
        <li class=\"dropdown user user-menu\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
            <span class=\"hidden-xs\">Emna Besbes</span>
          </a>
          <ul class=\"dropdown-menu\">
            <!-- User image -->
            <li class=\"user-header\" style=\"background-color: grey;\">
              <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

              <p>
                Emna Besbes - admin/Web Developer
                <!--small >Member since Nov. 2012</small-->
              </p>
            </li>
            <!-- Menu Footer-->
            <li class=\"user-footer\">
              <div class=\"pull-right\">
                <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/deconnexion"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Se déconnecter</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->

      </ul>
    </div>
  </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/admin/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 68,  98 => 58,  89 => 52,  83 => 48,  76 => 26,  70 => 23,  67 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"main-header\" >

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
    {% if headerNavbar is not empty %}
      <ul class=\"nav navbar-nav navbar-nav-left\">
        {{ headerNavbar|raw }}
      </ul>
    {% endif %}


    <div class=\"navbar-custom-menu\">
      <ul class=\"nav navbar-nav\">

              {#  {% if 1 < locales|split(',')|length %}
          <li class=\"dropdown dropdown-locale\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
              {{ app.request.locale }}
              <span class=\"caret\"></span>
            </a>

            <ul class=\"dropdown-menu dropdown-menu-locale\"> {% for locale in locales|split(',') if locale != app.request.locale %}
                <li>
                  <a href=\"{{ path('admin_pages_index', { _locale: locale }) }}\">
                    {{ locale }}
                  </a>
                </li>
              {% endfor %}
           </ul>
          </li>
        {% endif %}   #}

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
              <div class=\"pull-right\">
                <a href=\"{{ asset ('/deconnexion') }}\" class=\"btn btn-primary\">Se déconnecter</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->

      </ul>
    </div>
  </nav>
</header>", "includes/admin/header.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\includes\\admin\\header.html.twig");
    }
}
