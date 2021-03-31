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
class __TwigTemplate_ddf58df8578e568017629ad70b5359c535f136c721c0797f1f7868ec40dea8d5 extends Template
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
        // line 1
        $this->loadTemplate("temp1.html.twig", "categorie_soin_mp/modifierCategorieSoinMP.html.twig", 1)->display($context);
        // line 2
        echo "<div style =\"margin-left: 1%; padding-top: 5%\">


    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formModifierCategorieSoinMP"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Modifier Categorie Soins Médecine Parallèle  </h1>
    ";
        // line 9
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formModifierCategorieSoinMP"] ?? null), "libelleCategorieSoinMP", [], "any", false, false, false, 9), 'label', ["label" => "Titre"]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formModifierCategorieSoinMP"] ?? null), "libelleCategorieSoinMP", [], "any", false, false, false, 10), 'widget');
        echo "

    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formModifierCategorieSoinMP"] ?? null), 'form_end');
        echo "
</div>
";
        // line 14
        $this->loadTemplate("temp2.html.twig", "categorie_soin_mp/modifierCategorieSoinMP.html.twig", 14)->display($context);
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
        return array (  65 => 14,  60 => 12,  55 => 10,  50 => 9,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "categorie_soin_mp/modifierCategorieSoinMP.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\categorie_soin_mp\\modifierCategorieSoinMP.html.twig");
    }
}
