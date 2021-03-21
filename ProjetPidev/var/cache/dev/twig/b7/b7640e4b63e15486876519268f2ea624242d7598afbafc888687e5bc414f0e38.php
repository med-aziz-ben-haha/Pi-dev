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

/* reclamation/ajouterreclamation.html.twig */
class __TwigTemplate_aab322001ff469e65bb57cf884213d1a664f5cb06d4d58a4efa550ed63456f1d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/ajouterreclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/ajouterreclamation.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->loadTemplate("tempFront1SoinMP.html.twig", "reclamation/ajouterreclamation.html.twig", 3)->display($context);
        // line 4
        echo "
<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"id\">Reclamation</h2>
            </div>
            <table id=\"example1\" class=\"table table-bordered table-striped\" >
                <div style =\"margin-left: 1%; padding-top: 5%\">


                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Ajouter une reclamation  </h1>

                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 18, $this->source); })()), "descriptionReclamation", [], "any", false, false, false, 18), 'label', ["label" => "Reclamation"]);
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 19, $this->source); })()), "descriptionReclamation", [], "any", false, false, false, 19), 'widget');
        echo "


                    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
                </div>

            </table>
        </div>
    </div>
</section>

";
        // line 30
        $this->loadTemplate("tempFront2SoinMP.html.twig", "reclamation/ajouterreclamation.html.twig", 30)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/ajouterreclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  78 => 22,  72 => 19,  68 => 18,  62 => 15,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% include 'tempFront1SoinMP.html.twig' %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"id\">Reclamation</h2>
            </div>
            <table id=\"example1\" class=\"table table-bordered table-striped\" >
                <div style =\"margin-left: 1%; padding-top: 5%\">


                    {{ form_start(f,{'attr': {'novalidate': 'novalidate'}} ) }}
                    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Ajouter une reclamation  </h1>

                    {{ form_label(f.descriptionReclamation,\"Reclamation\") }}
                    {{ form_widget(f.descriptionReclamation)}}


                    {{ form_end(f) }}
                </div>

            </table>
        </div>
    </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}
", "reclamation/ajouterreclamation.html.twig", "C:\\Users\\eya\\Desktop\\Pi-dev\\ProjetPidev\\templates\\reclamation\\ajouterreclamation.html.twig");
    }
}
