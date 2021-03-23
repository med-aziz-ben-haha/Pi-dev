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

/* user/connexionErrorMessage.html.twig */
class __TwigTemplate_0675a08ea5ae36cf4e36f4437bb28d226f1f99a6c2dc92e56b24f83fcab4f5d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/connexionErrorMessage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/connexionErrorMessage.html.twig"));

        // line 1
        $this->loadTemplate("tempFrontAccueil1.html.twig", "user/connexionErrorMessage.html.twig", 1)->display($context);
        // line 2
        echo "<div style =\"margin-left: 28%; margin-right: 28%;  border: solid 1px #EA3D48; padding:2%; border-radius: 30px; margin-bottom: 25px \">


    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #EA3D48 ;  \" > Se Connecter  </h1>

    <h6 style =\"margin-top: 2%;  color: #EA3D48 ;  \" >  * Verifier votre login et/ou votre mot de passe </h6>
    ";
        // line 10
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 10, $this->source); })()), "login", [], "any", false, false, false, 10), 'label', ["label" => "Login"]);
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 11, $this->source); })()), "login", [], "any", false, false, false, 11), 'widget');
        echo "

    ";
        // line 14
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 14, $this->source); })()), "mdp", [], "any", false, false, false, 14), 'label', ["label" => "Mot de passe"]);
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 15, $this->source); })()), "mdp", [], "any", false, false, false, 15), 'widget');
        echo "

    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 17, $this->source); })()), 'form_end');
        echo "

</div>
";
        // line 20
        $this->loadTemplate("tempFrontAccueil2.html.twig", "user/connexionErrorMessage.html.twig", 20)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/connexionErrorMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  77 => 17,  72 => 15,  67 => 14,  62 => 11,  57 => 10,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFrontAccueil1.html.twig' %}
<div style =\"margin-left: 28%; margin-right: 28%;  border: solid 1px #EA3D48; padding:2%; border-radius: 30px; margin-bottom: 25px \">


    {{ form_start(formConnexion,{'attr': {'novalidate': 'novalidate'}} ) }}
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #EA3D48 ;  \" > Se Connecter  </h1>

    <h6 style =\"margin-top: 2%;  color: #EA3D48 ;  \" >  * Verifier votre login et/ou votre mot de passe </h6>
    {# { form_errors(formConnexion.login) }#}
    {{ form_label(formConnexion.login,\"Login\") }}
    {{ form_widget(formConnexion.login) }}

    {# { form_errors(formConnexion.mdp)}#}
    {{ form_label(formConnexion.mdp,\"Mot de passe\") }}
    {{ form_widget(formConnexion.mdp)}}

    {{ form_end(formConnexion) }}

</div>
{% include 'tempFrontAccueil2.html.twig' %}", "user/connexionErrorMessage.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\user\\connexionErrorMessage.html.twig");
    }
}
