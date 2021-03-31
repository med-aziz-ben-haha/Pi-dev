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

/* categorie_soin_mp/listCategoriesSoinMP.html.twig */
class __TwigTemplate_41c2b6db99ff31213de5fd38f4c847e24f58d1added66928c7f2241616d47003 extends Template
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
        $this->loadTemplate("temp1.html.twig", "categorie_soin_mp/listCategoriesSoinMP.html.twig", 1)->display($context);
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Categories Soins Médecine Parallèle </h1>

        <form action=\"  ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterCategorieSoinMP");
        echo " \"><button>Ajouter</button></form>

    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Icone</th>
                <th>Id</th>
                <th>Titre</th>
                <th>Modifier</th>
                <th>Supprimer</th>

            </tr>
            </thead>
            <tbody>


            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listCategorieSoinMP"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["CSMP"]) {
            // line 47
            echo "                <tr>
                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["CSMP"], "getLienIconeCSMP", [], "method", false, false, false, 48))), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CSMP"], "Id", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CSMP"], "libelleCategorieSoinMP", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td><form action=\"  ";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierCategorieSoinMP", ["id" => twig_get_attribute($this->env, $this->source, $context["CSMP"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo " \"><button>Modifier</button></form></td>
                    <td><form action=\"  ";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerCategorieSoinMP", ["id" => twig_get_attribute($this->env, $this->source, $context["CSMP"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo " \"><button>Supprimer</button></form></td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CSMP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "


            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 65
        $this->loadTemplate("temp2.html.twig", "categorie_soin_mp/listCategoriesSoinMP.html.twig", 65)->display($context);
    }

    public function getTemplateName()
    {
        return "categorie_soin_mp/listCategoriesSoinMP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 65,  121 => 56,  111 => 52,  107 => 51,  103 => 50,  99 => 49,  95 => 48,  92 => 47,  88 => 46,  66 => 27,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "categorie_soin_mp/listCategoriesSoinMP.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\categorie_soin_mp\\listCategoriesSoinMP.html.twig");
    }
}
