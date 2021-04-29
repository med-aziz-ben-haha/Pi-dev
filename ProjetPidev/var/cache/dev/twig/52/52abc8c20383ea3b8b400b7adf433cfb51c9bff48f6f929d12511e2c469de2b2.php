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

/* includes/published.html.twig */
class __TwigTemplate_ef538911eea9c171880a3b3231b2460e00e8e1716da1bf426190ea8a5e8fa400 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/published.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/published.html.twig"));

        // line 1
        $context["showIconDate"] = false;
        // line 2
        $context["showTime"] = true;
        // line 3
        $context["addClass"] = "";
        // line 4
        echo "
";
        // line 5
        if ((isset($context["options"]) || array_key_exists("options", $context))) {
            // line 6
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "showIconDate", [], "any", true, true, false, 6)) {
                // line 7
                echo "        ";
                $context["showIconDate"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()), "showIconDate", [], "any", false, false, false, 7);
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "showTime", [], "any", true, true, false, 10)) {
                // line 11
                echo "        ";
                $context["showTime"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 11, $this->source); })()), "showTime", [], "any", false, false, false, 11);
                // line 12
                echo "    ";
            }
            // line 13
            echo "
    ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "addClass", [], "any", true, true, false, 14)) {
                // line 15
                echo "        ";
                $context["addClass"] = (" " . twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 15, $this->source); })()), "addClass", [], "any", false, false, false, 15));
                // line 16
                echo "    ";
            }
        }
        // line 18
        echo "
";
        // line 19
        if ( !twig_test_empty((isset($context["published"]) || array_key_exists("published", $context) ? $context["published"] : (function () { throw new RuntimeError('Variable "published" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "    <div class=\"published";
            echo twig_escape_filter($this->env, (isset($context["addClass"]) || array_key_exists("addClass", $context) ? $context["addClass"] : (function () { throw new RuntimeError('Variable "addClass" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\">

            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>


        ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["published"]) || array_key_exists("published", $context) ? $context["published"] : (function () { throw new RuntimeError('Variable "published" does not exist.', 25, $this->source); })()), "M j, Y"), "html", null, true);
            echo "


            <span class=\"published-time\">
              ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["published"]) || array_key_exists("published", $context) ? $context["published"] : (function () { throw new RuntimeError('Variable "published" does not exist.', 29, $this->source); })()), "g:i a"), "html", null, true);
            echo "
            </span>

    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/published.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  100 => 25,  91 => 20,  89 => 19,  86 => 18,  82 => 16,  79 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set showIconDate = false %}
{% set showTime = true %}
{% set addClass = '' %}

{% if options is defined  %}
    {% if options.showIconDate is defined %}
        {% set showIconDate = options.showIconDate %}
    {% endif %}

    {% if options.showTime is defined %}
        {% set showTime = options.showTime %}
    {% endif %}

    {% if options.addClass is defined %}
        {% set addClass = ' ' ~ options.addClass %}
    {% endif %}
{% endif %}

{% if published is not empty %}
    <div class=\"published{{ addClass }}\">

            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>


        {{ published|date(\"M j, Y\") }}


            <span class=\"published-time\">
              {{ published|date(\"g:i a\") }}
            </span>

    </div>
{% endif %}
", "includes/published.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\includes\\published.html.twig");
    }
}
