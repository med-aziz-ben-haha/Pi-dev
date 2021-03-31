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

/* user/ListPharmaciens.html.twig */
class __TwigTemplate_4d9264f5c5ce8369b85908a566a12c396da8a4d1d57e54035a898843cdb70e92 extends Template
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
        $this->loadTemplate("temp1.html.twig", "user/ListPharmaciens.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("temp2.html.twig", "user/ListPharmaciens.html.twig", 4)->display($context);
        // line 5
        echo "
";
    }

    public function getTemplateName()
    {
        return "user/ListPharmaciens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/ListPharmaciens.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\user\\ListPharmaciens.html.twig");
    }
}
