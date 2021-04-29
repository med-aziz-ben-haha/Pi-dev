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

/* ordonnance/Ordonnanceajout.html.twig */
class __TwigTemplate_f8d40d28f17646c852e602a65b8af3c3e2faf7bf759aff0a35ea89494afad0dc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ordonnance/Ordonnanceajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ordonnance/Ordonnanceajout.html.twig"));

        // line 1
        $this->loadTemplate("templateAccueilMed.html.twig", "ordonnance/Ordonnanceajout.html.twig", 1)->display($context);
        // line 2
        echo "

<div class=\"container\">
    <div class=\"form-group\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Ordonnanceajout"]) || array_key_exists("Ordonnanceajout", $context) ? $context["Ordonnanceajout"] : (function () { throw new RuntimeError('Variable "Ordonnanceajout" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <h1> Ajout Ordonnance </h1>
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Ordonnanceajout"]) || array_key_exists("Ordonnanceajout", $context) ? $context["Ordonnanceajout"] : (function () { throw new RuntimeError('Variable "Ordonnanceajout" does not exist.', 9, $this->source); })()), "contenu_ord", [], "any", false, false, false, 9), 'label', ["label" => "Contenu ordonnance"]);
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Ordonnanceajout"]) || array_key_exists("Ordonnanceajout", $context) ? $context["Ordonnanceajout"] : (function () { throw new RuntimeError('Variable "Ordonnanceajout" does not exist.', 10, $this->source); })()), "contenu_ord", [], "any", false, false, false, 10), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Ordonnanceajout"]) || array_key_exists("Ordonnanceajout", $context) ? $context["Ordonnanceajout"] : (function () { throw new RuntimeError('Variable "Ordonnanceajout" does not exist.', 13, $this->source); })()), "medicaments", [], "any", false, false, false, 13), 'label', ["label" => "Liste des médicament"]);
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Ordonnanceajout"]) || array_key_exists("Ordonnanceajout", $context) ? $context["Ordonnanceajout"] : (function () { throw new RuntimeError('Variable "Ordonnanceajout" does not exist.', 14, $this->source); })()), "medicaments", [], "any", false, false, false, 14), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Ordonnanceajout"]) || array_key_exists("Ordonnanceajout", $context) ? $context["Ordonnanceajout"] : (function () { throw new RuntimeError('Variable "Ordonnanceajout" does not exist.', 17, $this->source); })()), "date_ord", [], "any", false, false, false, 17), 'label', ["label" => "Date de saisie"]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Ordonnanceajout"]) || array_key_exists("Ordonnanceajout", $context) ? $context["Ordonnanceajout"] : (function () { throw new RuntimeError('Variable "Ordonnanceajout" does not exist.', 18, $this->source); })()), "date_ord", [], "any", false, false, false, 18), 'widget');
        echo "
        </div>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Ordonnanceajout"]) || array_key_exists("Ordonnanceajout", $context) ? $context["Ordonnanceajout"] : (function () { throw new RuntimeError('Variable "Ordonnanceajout" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
        // line 23
        $this->loadTemplate("tempFront2MO.html.twig", "ordonnance/Ordonnanceajout.html.twig", 23)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ordonnance/Ordonnanceajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  86 => 20,  81 => 18,  77 => 17,  71 => 14,  67 => 13,  61 => 10,  57 => 9,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'templateAccueilMed.html.twig'  %}


<div class=\"container\">
    <div class=\"form-group\">
        {{ form_start( Ordonnanceajout,{'attr': {'novalidate': 'novalidate'}} ) }}
        <h1> Ajout Ordonnance </h1>
        <div class=\"form-group\">
            {{ form_label( Ordonnanceajout.contenu_ord,\"Contenu ordonnance\") }}
            {{ form_widget(Ordonnanceajout.contenu_ord) }}
        </div>
        <div class=\"form-group\">
            {{ form_label( Ordonnanceajout.medicaments, \"Liste des médicament\" )}}
            {{ form_widget( Ordonnanceajout.medicaments ) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(Ordonnanceajout.date_ord,\"Date de saisie\") }}
            {{ form_widget(Ordonnanceajout.date_ord) }}
        </div>
        {{ form_end(Ordonnanceajout) }}
    </div>
</div>
{% include 'tempFront2MO.html.twig' %}", "ordonnance/Ordonnanceajout.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\ordonnance\\Ordonnanceajout.html.twig");
    }
}
