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

/* includes/header.html.twig */
class __TwigTemplate_bc8db53b3df1dd0830a9c9d34b679b1feaa063c92d46ed01d37e5902b6d5ccff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        $context["headingClass"] = "page-heading";
        // line 2
        $context["mainClass"] = "";
        // line 3
        echo "
";
        // line 4
        if ((0 === twig_compare("gallery", (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 4, $this->source); })()))) : (""))))) {
            // line 5
            echo "    ";
            $context["headingClass"] = "post-heading";
        }
        // line 7
        echo "
";
        // line 8
        if ((0 === twig_compare("pages_homepage", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8)))) {
            // line 9
            echo "    ";
            $context["mainClass"] = " d-none d-md-block";
        }
        // line 11
        echo "
<header class=\"masthead";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["mainClass"]) || array_key_exists("mainClass", $context) ? $context["mainClass"] : (function () { throw new RuntimeError('Variable "mainClass" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"masthead-image-wrapper\">
        <img id=\"#\"
             data-src=\"";
        // line 15
        echo "\"
             alt=\"\"
             class=\"lazy\"/>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["headingClass"]) || array_key_exists("headingClass", $context) ? $context["headingClass"] : (function () { throw new RuntimeError('Variable "headingClass" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 25
        echo "                    <br><br><br><br>
                </div>
            </div>
        </div>
    </div>


</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  84 => 23,  74 => 15,  68 => 12,  65 => 11,  61 => 9,  59 => 8,  56 => 7,  52 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set headingClass = 'page-heading' %}
{% set mainClass = '' %}

{% if 'gallery' == type|default() %}
    {% set headingClass = 'post-heading' %}
{% endif %}

{% if 'pages_homepage' == app.request.attributes.get(\"_route\") %}
    {% set mainClass = ' d-none d-md-block' %}
{% endif %}

<header class=\"masthead{{ mainClass }}\">
    <div class=\"masthead-image-wrapper\">
        <img id=\"#\"
             data-src=\"{# {{ asset(image|default('images/bg.jpg')|imagine_filter('1440x800')) }} #}\"
             alt=\"\"
             class=\"lazy\"/>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"{{ headingClass }}\">
                    {#  <h1>{{ title|default('Blog Personal') }}</h1>#}
                    <br><br><br><br>
                </div>
            </div>
        </div>
    </div>


</header>
", "includes/header.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\includes\\header.html.twig");
    }
}
