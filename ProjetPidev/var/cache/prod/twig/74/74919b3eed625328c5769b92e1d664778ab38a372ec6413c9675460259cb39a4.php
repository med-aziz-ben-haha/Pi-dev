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

/* soin_mp/listSoinsMP.html.twig */
class __TwigTemplate_f0bb552e94938cfcca8b81ecb099256710f4592cc3d96ae7fb7cb257214a157e extends Template
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
        $this->loadTemplate("temp1.html.twig", "soin_mp/listSoinsMP.html.twig", 1)->display($context);
        // line 2
        echo "<style>
    button {
        color: #FFFFFF;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }
    button:hover {
        color: #FFFFFF;
        opacity: 0.8;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }
    button:active {
        color: #FFFFFF;
        background-color: #d11414;
        border-color: #d11414;
        border-radius: 6px;
    }

</style>
<div class=\"box\">
    <div class=\"box-header\">
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Soins Médecine Parallèle </h1>

        <form href=\"  ";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterSoinMP");
        echo "  \"><button>Ajouter</button></form>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>
                <th>Image</th>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Adresse</th>
                <th>Categorie</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listSoinsMP"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 48
            echo "                <tr>
                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["S"], "getLienImageSMP", [], "method", false, false, false, 49))), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "titreSoinMP", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "descriptionSoinMP", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "adresseSoinMP", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["S"], "CategorieSoinMP", [], "any", false, false, false, 54), "getLibelleCategorieSoinMP", [], "method", false, false, false, 54), "html", null, true);
            echo "</td>

                    <td><form action=\"   ";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierSoinMP", ["id" => twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "  \"><button>Modifier</button></form></td>
                    <td><form action=\" ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerSoinMP", ["id" => twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo " \"><button>Supprimer</button></form></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "


            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 69
        $this->loadTemplate("temp2.html.twig", "soin_mp/listSoinsMP.html.twig", 69)->display($context);
    }

    public function getTemplateName()
    {
        return "soin_mp/listSoinsMP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 69,  134 => 60,  125 => 57,  121 => 56,  116 => 54,  112 => 53,  108 => 52,  104 => 51,  100 => 50,  96 => 49,  93 => 48,  89 => 47,  67 => 28,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "soin_mp/listSoinsMP.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\listSoinsMP.html.twig");
    }
}
