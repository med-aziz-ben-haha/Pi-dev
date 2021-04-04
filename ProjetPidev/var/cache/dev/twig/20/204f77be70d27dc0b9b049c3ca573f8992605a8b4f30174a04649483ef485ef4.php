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

/* includes/navigation.html.twig */
class __TwigTemplate_fadf806dc264d10f2df06ff38e71397890dc2c8de490fcbe0cf40a39634d8773 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navigation.html.twig"));

        // line 1
        echo "<!-- Navigation -->

<nav class=\"navbar navbar-expand-lg navbar-light fixed-top navigation\">
  <div class=\"container-fluid\">

      <img style=\"width: 50px; height: 50px ; margin-top: -15%;\" src= \"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Logo.jpeg"), "html", null, true);
        echo "\">
    </a>

    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      Menu
      <i class=\"fa fa-bars\"></i>
    </button>

    <div class=\"container\" style=\"margin-left: -2%;\" >
      <!--<a class=\"navbar-brand\" href=\"#\"><img src=\"assets/images/brand.png\"></a>-->

      <div class=\"navbar-collapse hk-offcanvas collapse\" id=\"navbarsExampleDefault navbarResponsive\">
        <ul class=\"navbar-nav mr-auto \">

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">MédecineParallèle</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Réclamation</a>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
              <a class=\"nav-link\" href=\"\"> Réclamer</a>
              <a class=\"nav-link\" href=\"\"> Consulter mes réclamations</a>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Medicament</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Ordonnances</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Parapharmacie</a>

          </li>


          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">CentresMedicaux</a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Forum</a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_index");
        echo "\">News</a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"></path>
              </svg></a>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"far fa-user\"></i></a>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
              <a class=\"dropdown-item\" href=\"\">Profil</a>
              <a class=\"dropdown-item\" href=\"\">Se déconnecter</a>
            </div>
          </li>

        </ul>

      </div>

    </div>


";
        // line 99
        echo "
  </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 99,  98 => 51,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navigation -->

<nav class=\"navbar navbar-expand-lg navbar-light fixed-top navigation\">
  <div class=\"container-fluid\">

      <img style=\"width: 50px; height: 50px ; margin-top: -15%;\" src= \"{{ asset('images/Logo.jpeg')}}\">
    </a>

    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      Menu
      <i class=\"fa fa-bars\"></i>
    </button>

    <div class=\"container\" style=\"margin-left: -2%;\" >
      <!--<a class=\"navbar-brand\" href=\"#\"><img src=\"assets/images/brand.png\"></a>-->

      <div class=\"navbar-collapse hk-offcanvas collapse\" id=\"navbarsExampleDefault navbarResponsive\">
        <ul class=\"navbar-nav mr-auto \">

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">MédecineParallèle</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Réclamation</a>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
              <a class=\"nav-link\" href=\"\"> Réclamer</a>
              <a class=\"nav-link\" href=\"\"> Consulter mes réclamations</a>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Medicament</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Ordonnances</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Parapharmacie</a>

          </li>


          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">CentresMedicaux</a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">Forum</a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('post_index') }}\">News</a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"></path>
              </svg></a>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"far fa-user\"></i></a>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
              <a class=\"dropdown-item\" href=\"\">Profil</a>
              <a class=\"dropdown-item\" href=\"\">Se déconnecter</a>
            </div>
          </li>

        </ul>

      </div>

    </div>


{#
        {% if 1 < locales|split(',')|length %}
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\"
               href=\"#\"
               id=\"navbarDropdown\"
               role=\"button\"
               data-toggle=\"dropdown\"
               aria-haspopup=\"true\"
               aria-expanded=\"false\">
              {{ app.request.locale }}
            </a>
            <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-locale\"
                 aria-labelledby=\"navbarDropdown\">
              {% for locale in locales|split(',') if locale != app.request.locale %}
                <a class=\"dropdown-item dropdown-item-locale\"
                   href=\"{{ path('pages_homepage.' ~ locale, { _locale: locale }) }}\">
                  {{ locale }}
                </a>
              {% endfor %}
            </div>
          </li>
        {% endif %} #}

  </div>
</nav>
", "includes/navigation.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\includes\\navigation.html.twig");
    }
}
