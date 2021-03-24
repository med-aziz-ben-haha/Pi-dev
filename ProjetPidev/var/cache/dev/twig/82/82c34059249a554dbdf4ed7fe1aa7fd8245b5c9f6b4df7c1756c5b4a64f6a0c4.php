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

/* reclamation/listreclamation.html.twig */
class __TwigTemplate_5742dd8e1e849423144a8e929e26dc6933ee8ceb57201deca8be7bf8fa102f2f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/listreclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/listreclamation.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "reclamation/listreclamation.html.twig", 1)->display($context);
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des reclamations </h1>

        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"tableac\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>

                <th>Id</th>
                <th>Description</th>
                <th>user</th>
                <th>type reclamation</th>
                <th>repondre</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
            <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherpdf");
        echo "\"> Imprimer </a>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listreclamation"]) || array_key_exists("listreclamation", $context) ? $context["listreclamation"] : (function () { throw new RuntimeError('Variable "listreclamation" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 48
            echo "                <tr>

                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "descriptionReclamation", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["S"], "user", [], "any", false, false, false, 52), "getNom", [], "method", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["S"], "typeReclamation", [], "any", false, false, false, 53), "getTypeReclamation", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>

                   <td><form action=\" ";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repondre", ["id" => twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo " \"><button>repondre</button></form></td>
                    <td><form action=\" ";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerreclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["S"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo " \"><button>Supprimer</button></form></td>

                </tr>
                <script>
                    \$(document).ready(function(){
                        \$('#search').keyup(function(){
                            search_table(\$(this).val());
                        });
                        function search_table(value){
                            \$('#tableac tbody tr').each(function(){
                                var found = 'false';
                                \$(this).each(function(){
                                    if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                    {
                                        found = 'true';
                                    }
                                });
                                if(found == 'true')
                                {
                                    \$(this).show();

                                }
                                else
                                {
                                    \$(this).hide();

                                }
                            });
                        }
                    });
                </script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 95
        $this->loadTemplate("temp2.html.twig", "reclamation/listreclamation.html.twig", 95)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/listreclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 95,  165 => 88,  127 => 56,  123 => 55,  118 => 53,  114 => 52,  110 => 51,  106 => 50,  102 => 48,  98 => 47,  94 => 46,  73 => 28,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}
<style>
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des reclamations </h1>

        <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"tableac\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>

                <th>Id</th>
                <th>Description</th>
                <th>user</th>
                <th>type reclamation</th>
                <th>repondre</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
            <a href=\"{{path('afficherpdf') }}\"> Imprimer </a>
            {% for S in listreclamation %}
                <tr>

                    <td>{{ S.id }}</td>
                    <td>{{ S.descriptionReclamation }}</td>
                    <td>{{ S.user.getNom() }}</td>
                    <td>{{ S.typeReclamation.getTypeReclamation }}</td>

                   <td><form action=\" {{path('repondre',{id:S.id})}} \"><button>repondre</button></form></td>
                    <td><form action=\" {{path('supprimerreclamation',{id:S.id})}} \"><button>Supprimer</button></form></td>

                </tr>
                <script>
                    \$(document).ready(function(){
                        \$('#search').keyup(function(){
                            search_table(\$(this).val());
                        });
                        function search_table(value){
                            \$('#tableac tbody tr').each(function(){
                                var found = 'false';
                                \$(this).each(function(){
                                    if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                    {
                                        found = 'true';
                                    }
                                });
                                if(found == 'true')
                                {
                                    \$(this).show();

                                }
                                else
                                {
                                    \$(this).hide();

                                }
                            });
                        }
                    });
                </script>
            {% endfor %}

            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
{% include 'temp2.html.twig' %}", "reclamation/listreclamation.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev eya\\ProjetPidev\\templates\\reclamation\\listreclamation.html.twig");
    }
}
