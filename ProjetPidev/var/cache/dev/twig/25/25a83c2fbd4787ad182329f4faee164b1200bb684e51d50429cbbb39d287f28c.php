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

/* user/connexion.html.twig */
class __TwigTemplate_a874909ee034b62471cfb3ab972214cfb1b88295a945f53ba9771338b23cefa3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/connexion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/connexion.html.twig"));

        // line 1
        $this->loadTemplate("tempFrontAccueil1.html.twig", "user/connexion.html.twig", 1)->display($context);
        // line 2
        echo "<div style =\"margin-left: 28%; margin-right: 28%;  border: solid 1px #EA3D48; padding:2%; border-radius: 30px; margin-bottom: 25px \">

    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #EA3D48 ; \" > Se Connecter  </h1>

    ";
        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 8, $this->source); })()), "login", [], "any", false, false, false, 8), 'label', ["label" => "Login"]);
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 9, $this->source); })()), "login", [], "any", false, false, false, 9), 'widget');
        echo "

    ";
        // line 12
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 12, $this->source); })()), "mdp", [], "any", false, false, false, 12), 'label', ["label" => "Mot de passe"]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 13, $this->source); })()), "mdp", [], "any", false, false, false, 13), 'widget');
        echo "

    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formConnexion"]) || array_key_exists("formConnexion", $context) ? $context["formConnexion"] : (function () { throw new RuntimeError('Variable "formConnexion" does not exist.', 15, $this->source); })()), 'form_end');
        echo "

    <center>
        <div>
            <a class=\"hollow button primary\" href=\"/connect/google/\">
                <img width=\"35px\" style=\"margin-bottom:3px; font-size: 250px; margin-right:5px\" alt=\"Google login\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png\" />
                Se Connecter via Google
            </a>
        </div>
    </center>
</div>
";
        // line 26
        $this->loadTemplate("tempFrontAccueil2.html.twig", "user/connexion.html.twig", 26)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  75 => 15,  70 => 13,  65 => 12,  60 => 9,  55 => 8,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFrontAccueil1.html.twig' %}
<div style =\"margin-left: 28%; margin-right: 28%;  border: solid 1px #EA3D48; padding:2%; border-radius: 30px; margin-bottom: 25px \">

    {{ form_start(formConnexion,{'attr': {'novalidate': 'novalidate'}} ) }}
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #EA3D48 ; \" > Se Connecter  </h1>

    {# { form_errors(formConnexion.login) }#}
    {{ form_label(formConnexion.login,\"Login\") }}
    {{ form_widget(formConnexion.login) }}

    {# { form_errors(formConnexion.mdp)}#}
    {{ form_label(formConnexion.mdp,\"Mot de passe\") }}
    {{ form_widget(formConnexion.mdp)}}

    {{ form_end(formConnexion) }}

    <center>
        <div>
            <a class=\"hollow button primary\" href=\"/connect/google/\">
                <img width=\"35px\" style=\"margin-bottom:3px; font-size: 250px; margin-right:5px\" alt=\"Google login\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png\" />
                Se Connecter via Google
            </a>
        </div>
    </center>
</div>
{% include 'tempFrontAccueil2.html.twig' %}", "user/connexion.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\user\\connexion.html.twig");
    }
}
