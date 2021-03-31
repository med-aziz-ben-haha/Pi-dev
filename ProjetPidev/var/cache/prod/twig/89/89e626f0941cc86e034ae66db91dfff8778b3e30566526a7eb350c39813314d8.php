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
class __TwigTemplate_b402d296bfb0528f92c8f3da8d3d5e54425fef6acb101a32a5f11d45abc8646c extends Template
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
        $this->loadTemplate("temp1.html.twig", "categorie_soin_mp/ajouterCategorieSoinMP.html.twig", 1)->display($context);
        // line 2
        echo "<div style =\"margin-left: 1%; padding-top: 5%\">


    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAjouterCategorieSoinMP"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Ajouter Categorie Soins Médecine Parallèle  </h1>
    ";
        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formAjouterCategorieSoinMP"] ?? null), "libelleCategorieSoinMP", [], "any", false, false, false, 8), 'label', ["label" => "Titre"]);
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formAjouterCategorieSoinMP"] ?? null), "libelleCategorieSoinMP", [], "any", false, false, false, 9), 'widget');
        echo "

    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAjouterCategorieSoinMP"] ?? null), 'form_end');
        echo "
</div>
";
        // line 13
        $this->loadTemplate("temp2.html.twig", "categorie_soin_mp/ajouterCategorieSoinMP.html.twig", 13)->display($context);
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
        return array (  64 => 13,  59 => 11,  54 => 9,  49 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "categorie_soin_mp/ajouterCategorieSoinMP.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\categorie_soin_mp\\ajouterCategorieSoinMP.html.twig");
    }
}
