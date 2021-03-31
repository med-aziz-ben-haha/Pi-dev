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

/* soin_mp/modifierSoinMP.html.twig */
class __TwigTemplate_d361a216612e8f825e4d00bf1cfd102fdda89cbec65a60aaa8177481f76f71a5 extends Template
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
        $this->loadTemplate("temp1.html.twig", "soin_mp/modifierSoinMP.html.twig", 1)->display($context);
        // line 2
        echo "<div style =\"margin-left: 1%; padding-top: 5%\">

    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formModifierSoinMP"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Modifier Soin Médecine Parallèle  </h1>
    ";
        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formModifierSoinMP"] ?? null), "titreSoinMP", [], "any", false, false, false, 8), 'label', ["label" => "Titre"]);
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formModifierSoinMP"] ?? null), "titreSoinMP", [], "any", false, false, false, 9), 'widget');
        echo "

    ";
        // line 12
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formModifierSoinMP"] ?? null), "descriptionSoinMP", [], "any", false, false, false, 12), 'label', ["label" => "Description"]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formModifierSoinMP"] ?? null), "descriptionSoinMP", [], "any", false, false, false, 13), 'widget');
        echo "

    ";
        // line 16
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formModifierSoinMP"] ?? null), "adresseSoinMP", [], "any", false, false, false, 16), 'label', ["label" => "Adresse"]);
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formModifierSoinMP"] ?? null), "adresseSoinMP", [], "any", false, false, false, 17), 'widget');
        echo "

    ";
        // line 20
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formModifierSoinMP"] ?? null), "CategorieSoinMP", [], "any", false, false, false, 20), 'label', ["label" => "Catégorie"]);
        echo "
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formModifierSoinMP"] ?? null), "CategorieSoinMP", [], "any", false, false, false, 21), 'widget');
        echo "

    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formModifierSoinMP"] ?? null), 'form_end');
        echo "
</div>
";
        // line 25
        $this->loadTemplate("temp2.html.twig", "soin_mp/modifierSoinMP.html.twig", 25)->display($context);
    }

    public function getTemplateName()
    {
        return "soin_mp/modifierSoinMP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  89 => 23,  84 => 21,  79 => 20,  74 => 17,  69 => 16,  64 => 13,  59 => 12,  54 => 9,  49 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "soin_mp/modifierSoinMP.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\modifierSoinMP.html.twig");
    }
}
