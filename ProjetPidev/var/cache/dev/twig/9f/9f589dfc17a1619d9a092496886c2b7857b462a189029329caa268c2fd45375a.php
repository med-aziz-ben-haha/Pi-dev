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

/* categorie_soin_mp/ajouterCategorieSoinMP.html.twig */
class __TwigTemplate_9393ea84e75e0cb9c753d8fe8e03bdbf6890422a4cf9e5d00911224d60df3a5c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_soin_mp/ajouterCategorieSoinMP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_soin_mp/ajouterCategorieSoinMP.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "categorie_soin_mp/ajouterCategorieSoinMP.html.twig", 1)->display($context);
        // line 2
        echo "<div style =\"margin-left: 1%; padding-top: 5%\">


    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAjouterCategorieSoinMP"]) || array_key_exists("formAjouterCategorieSoinMP", $context) ? $context["formAjouterCategorieSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterCategorieSoinMP" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Ajouter Categorie Soins Médecine Parallèle  </h1>
    ";
        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAjouterCategorieSoinMP"]) || array_key_exists("formAjouterCategorieSoinMP", $context) ? $context["formAjouterCategorieSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterCategorieSoinMP" does not exist.', 8, $this->source); })()), "libelleCategorieSoinMP", [], "any", false, false, false, 8), 'label', ["label" => "Titre"]);
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAjouterCategorieSoinMP"]) || array_key_exists("formAjouterCategorieSoinMP", $context) ? $context["formAjouterCategorieSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterCategorieSoinMP" does not exist.', 9, $this->source); })()), "libelleCategorieSoinMP", [], "any", false, false, false, 9), 'widget');
        echo "

    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAjouterCategorieSoinMP"]) || array_key_exists("formAjouterCategorieSoinMP", $context) ? $context["formAjouterCategorieSoinMP"] : (function () { throw new RuntimeError('Variable "formAjouterCategorieSoinMP" does not exist.', 11, $this->source); })()), 'form_end');
        echo "
</div>
";
        // line 13
        $this->loadTemplate("temp2.html.twig", "categorie_soin_mp/ajouterCategorieSoinMP.html.twig", 13)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "categorie_soin_mp/ajouterCategorieSoinMP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  65 => 11,  60 => 9,  55 => 8,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}
<div style =\"margin-left: 1%; padding-top: 5%\">


    {{ form_start(formAjouterCategorieSoinMP,{'attr': {'novalidate': 'novalidate'}} ) }}
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Ajouter Categorie Soins Médecine Parallèle  </h1>
    {# { form_errors(formAjouterCategorieSoinMP.libelleCategorieSoinMP) }#}
    {{ form_label(formAjouterCategorieSoinMP.libelleCategorieSoinMP,\"Titre\") }}
    {{ form_widget(formAjouterCategorieSoinMP.libelleCategorieSoinMP) }}

    {{ form_end(formAjouterCategorieSoinMP) }}
</div>
{% include 'temp2.html.twig' %}", "categorie_soin_mp/ajouterCategorieSoinMP.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\categorie_soin_mp\\ajouterCategorieSoinMP.html.twig");
    }
}
