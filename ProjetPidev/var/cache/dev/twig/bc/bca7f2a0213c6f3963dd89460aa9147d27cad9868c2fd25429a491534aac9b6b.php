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

/* categorie_soin_mp/modifierCategorieSoinMP.html.twig */
class __TwigTemplate_a4409dd99753464f814ee798a3520d7244d61ea1c388537755660371536b309d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_soin_mp/modifierCategorieSoinMP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_soin_mp/modifierCategorieSoinMP.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "categorie_soin_mp/modifierCategorieSoinMP.html.twig", 1)->display($context);
        // line 2
        echo "<div style =\"margin-left: 1%; padding-top: 5%\">


    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formModifierCategorieSoinMP"]) || array_key_exists("formModifierCategorieSoinMP", $context) ? $context["formModifierCategorieSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierCategorieSoinMP" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Modifier Categorie Soins Médecine Parallèle  </h1>
    ";
        // line 9
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierCategorieSoinMP"]) || array_key_exists("formModifierCategorieSoinMP", $context) ? $context["formModifierCategorieSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierCategorieSoinMP" does not exist.', 9, $this->source); })()), "libelleCategorieSoinMP", [], "any", false, false, false, 9), 'label', ["label" => "Titre"]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierCategorieSoinMP"]) || array_key_exists("formModifierCategorieSoinMP", $context) ? $context["formModifierCategorieSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierCategorieSoinMP" does not exist.', 10, $this->source); })()), "libelleCategorieSoinMP", [], "any", false, false, false, 10), 'widget');
        echo "

    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formModifierCategorieSoinMP"]) || array_key_exists("formModifierCategorieSoinMP", $context) ? $context["formModifierCategorieSoinMP"] : (function () { throw new RuntimeError('Variable "formModifierCategorieSoinMP" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
</div>
";
        // line 14
        $this->loadTemplate("temp2.html.twig", "categorie_soin_mp/modifierCategorieSoinMP.html.twig", 14)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "categorie_soin_mp/modifierCategorieSoinMP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  66 => 12,  61 => 10,  56 => 9,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}
<div style =\"margin-left: 1%; padding-top: 5%\">


    {{ form_start(formModifierCategorieSoinMP,{'attr': {'novalidate': 'novalidate'}} ) }}

    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Modifier Categorie Soins Médecine Parallèle  </h1>
    {# { form_errors(formModifierCategorieSoinMP.libelleCategorieSoinMP) }#}
    {{ form_label(formModifierCategorieSoinMP.libelleCategorieSoinMP,\"Titre\") }}
    {{ form_widget(formModifierCategorieSoinMP.libelleCategorieSoinMP) }}

    {{ form_end(formModifierCategorieSoinMP) }}
</div>
{% include 'temp2.html.twig' %}", "categorie_soin_mp/modifierCategorieSoinMP.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\categorie_soin_mp\\modifierCategorieSoinMP.html.twig");
    }
}
