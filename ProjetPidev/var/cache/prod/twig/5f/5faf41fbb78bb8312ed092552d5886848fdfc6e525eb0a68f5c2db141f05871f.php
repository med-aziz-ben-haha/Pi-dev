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

/* user/ListPatients.html.twig */
class __TwigTemplate_e0472c979b748cd66c795d59fc895da3b780d04950b2bafb409a59ad907a5ce0 extends Template
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
        $this->loadTemplate("temp1.html.twig", "user/ListPatients.html.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"box\">
    <div class=\"box-header\">
        <h3 class=\"box-title\">Gestion des patients</h3>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Id_User</th>
                <th>Login</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Sexe</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>

            </tr>



            <tr>
                <td>Gecko</td>
                <td>Mozilla 1.5</td>
                <td>Win 95+ / OSX.1+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>

            </tr>
            <tr>
                <td>Gecko</td>
                <td>Mozilla 1.6</td>
                <td>Win 95+ / OSX.1+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>

            </tr>
            <tr>
                <td>Gecko</td>
                <td>Mozilla 1.7</td>
                <td>Win 98+ / OSX.1+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>

            </tr>

            <tr>
                <td>Webkit</td>
                <td>Safari 2.0</td>
                <td>OSX.4+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>

            </tr>
            <tr>
                <td>Webkit</td>
                <td>Safari 3.0</td>
                <td>OSX.4+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>

            </tr>

            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 102
        $this->loadTemplate("temp2.html.twig", "user/ListPatients.html.twig", 102)->display($context);
    }

    public function getTemplateName()
    {
        return "user/ListPatients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 102,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/ListPatients.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\user\\ListPatients.html.twig");
    }
}
