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

/* admin/pages/index.html.twig */
class __TwigTemplate_561313536628491e2bfca8039b7cf839095e8bf5ee3b7daea3c2b9f6c7df6ea5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/pages/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            ";
        // line 7
        echo "        </h1>

    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">

            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                    <div class=\"hero-content\">
                        <h3 style=\" color: #EA3D48; margin-top: 10%;\">Besoin de soin, Besoin de toi</h3>
                        <p class=\"hero-subtitle\">Un doute, une inquiétude, besoin d’un conseil santé ? <br> Sa7ti.TN c’est la solution</p>
                    </div>
                </div>

                <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                    <img style=\"margin-left: 30%; margin-top: 5%; width: 40%; height: 40% ;\" src= \"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Logo.jpeg"), "html", null, true);
        echo "\" >
                </div>

            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  72 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    <section class=\"content-header\">
        <h1>
            {#       {{ 'admin.index.homepage'|trans }} #}
        </h1>

    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">

            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                    <div class=\"hero-content\">
                        <h3 style=\" color: #EA3D48; margin-top: 10%;\">Besoin de soin, Besoin de toi</h3>
                        <p class=\"hero-subtitle\">Un doute, une inquiétude, besoin d’un conseil santé ? <br> Sa7ti.TN c’est la solution</p>
                    </div>
                </div>

                <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                    <img style=\"margin-left: 30%; margin-top: 5%; width: 40%; height: 40% ;\" src= \"{{ asset('images/Logo.jpeg')}}\" >
                </div>

            </div>
        </div>
    </section>

{% endblock %}", "admin/pages/index.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\admin\\pages\\index.html.twig");
    }
}
