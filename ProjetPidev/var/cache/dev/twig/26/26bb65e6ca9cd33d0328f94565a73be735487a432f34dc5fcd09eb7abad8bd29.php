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

/* produit/AjoutProduit.html.twig */
class __TwigTemplate_7493a32e43ee212b6a90fb47879fddbb081d1f2fb0d41598ebd3016b69079aa2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/AjoutProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/AjoutProduit.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "produit/AjoutProduit.html.twig", 1)->display($context);
        // line 2
        echo "<div style =\"margin-left: 1%; padding-top: 5%\">
    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Ajouter Produit </h1>
    ";
        // line 6
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nomProduit", [], "any", false, false, false, 6), 'label', ["label" => "Nom du produit"]);
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nomProduit", [], "any", false, false, false, 7), 'widget');
        echo "

    ";
        // line 10
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "prixProduit", [], "any", false, false, false, 10), 'label', ["label" => "Prix du produit"]);
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "prixProduit", [], "any", false, false, false, 11), 'widget');
        echo "

    ";
        // line 14
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 14), 'label', ["label" => "Quantite du produit"]);
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "quantiteProduit", [], "any", false, false, false, 15), 'widget');
        echo "

    ";
        // line 18
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), 'label', ["label" => "Descriptions du produit"]);
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'widget');
        echo "



    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        echo "

";
        // line 25
        $this->loadTemplate("tempFront2SoinMP.html.twig", "produit/AjoutProduit.html.twig", 25)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/AjoutProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  95 => 23,  88 => 19,  83 => 18,  78 => 15,  73 => 14,  68 => 11,  63 => 10,  58 => 7,  53 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' %}
<div style =\"margin-left: 1%; padding-top: 5%\">
    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Ajouter Produit </h1>
    {# { form_errors(form.nomProduit) }#}
    {{ form_label(form.nomProduit,\"Nom du produit\") }}
    {{ form_widget(form.nomProduit) }}

    {# { form_errors(form.prixProduit) }#}
    {{ form_label(form.prixProduit,\"Prix du produit\") }}
    {{ form_widget(form.prixProduit) }}

    {# { form_errors(form.quantiteProduit) }#}
    {{ form_label(form.quantiteProduit,\"Quantite du produit\") }}
    {{ form_widget(form.quantiteProduit) }}

    {# { form_errors(form.description) }#}
    {{ form_label(form.description,\"Descriptions du produit\") }}
    {{ form_widget(form.description) }}



    {{ form_end(form)  }}

{% include 'tempFront2SoinMP.html.twig' %}", "produit/AjoutProduit.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\produit\\AjoutProduit.html.twig");
    }
}
