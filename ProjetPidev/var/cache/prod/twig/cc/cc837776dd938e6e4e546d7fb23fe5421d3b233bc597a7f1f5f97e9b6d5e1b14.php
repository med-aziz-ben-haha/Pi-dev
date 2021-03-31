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

/* admin/index.html.twig */
class __TwigTemplate_55c7a74dac42096f57fe6b2fe4c3d004003921a97563c5314c417e6b8faeb5b4 extends Template
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
        echo "
    ";
        // line 2
        $this->loadTemplate("temp1.html.twig", "admin/index.html.twig", 2)->display($context);
        // line 3
        echo "
        <img style=\"margin-left: 30%; margin-top: 5%; width: 40%; height: 40% ;\" src= \"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/Logo.jpeg"), "html", null, true);
        echo "\" >

    ";
        // line 6
        $this->loadTemplate("temp2.html.twig", "admin/index.html.twig", 6)->display($context);
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  50 => 6,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\admin\\index.html.twig");
    }
}
