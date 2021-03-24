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

/* typereclamation/listtypereclamation.html.twig */
class __TwigTemplate_62fd22bf69dfd92a5a9db1b62c220471576d07db2ec22a3c042a0d0a25ee5359 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "typereclamation/listtypereclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "typereclamation/listtypereclamation.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "typereclamation/listtypereclamation.html.twig", 1)->display($context);
        // line 2
        echo "
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des types de reclamations </h1>
        <form action=\"  ";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutertypereclamation");
        echo "  \"><button>Ajouter</button></form>

    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">

        <li>     <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherpdf");
        echo "\"> Imprimer </a> </li>
        <table id=\"tableac\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>

                <th>Id</th>

                <th>type reclamation</th>
                <th>Supprimer</th>
                <th>modifier</th>
            </tr>
            </thead>

            <tbody>


<li>
            <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tri");
        echo "\"> TRI par type  </a></li>
<tr>          <div><input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"></div>
                <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listtypereclamation"]) || array_key_exists("listtypereclamation", $context) ? $context["listtypereclamation"] : (function () { throw new RuntimeError('Variable "listtypereclamation" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["C"]) {
            // line 56
            echo "
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["C"], "typeReclamation", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>

                    <td><form action=\" ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimertypereclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo " \"><button>Supprimer</button></form></td>
                    <td><form action=\" ";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifiertypereclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo " \"><button>modifier</button></form></td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['C'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js\" type=\"text/javascript\"></script>
<script src=\"https://code.highcharts.com/highcharts.js\" type=\"text/javascript\"></script>
<script src=\"http://code.highcharts.com/modules/exporting.js\" type=\"text/javascript\"></script>

<script type=\"text/javascript\">
    ";
        // line 115
        echo $this->extensions['Ob\HighchartsBundle\Twig\HighchartsExtension']->chart((isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 115, $this->source); })()));
        echo "
</script>

<div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"> </div>


";
        // line 121
        $this->loadTemplate("temp2.html.twig", "typereclamation/listtypereclamation.html.twig", 121)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "typereclamation/listtypereclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 121,  194 => 115,  179 => 102,  132 => 61,  128 => 60,  123 => 58,  119 => 57,  116 => 56,  112 => 55,  107 => 53,  102 => 51,  82 => 34,  73 => 28,  45 => 2,  43 => 1,);
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des types de reclamations </h1>
        <form action=\"  {{path('ajoutertypereclamation')}}  \"><button>Ajouter</button></form>

    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">

        <li>     <a href=\"{{path('afficherpdf') }}\"> Imprimer </a> </li>
        <table id=\"tableac\" class=\"table table-bordered table-striped\" >
            <thead>
            <tr>

                <th>Id</th>

                <th>type reclamation</th>
                <th>Supprimer</th>
                <th>modifier</th>
            </tr>
            </thead>

            <tbody>


<li>
            <a href=\"{{path('tri') }}\"> TRI par type  </a></li>
<tr>          <div><input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\"></div>
                <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>

            {% for C in listtypereclamation %}

                    <td>{{ C.id }}</td>
                    <td>{{ C.typeReclamation }}</td>

                    <td><form action=\" {{path('supprimertypereclamation',{id:C.id})}} \"><button>Supprimer</button></form></td>
                    <td><form action=\" {{path('modifiertypereclamation',{id:C.id})}} \"><button>modifier</button></form></td>
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

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js\" type=\"text/javascript\"></script>
<script src=\"https://code.highcharts.com/highcharts.js\" type=\"text/javascript\"></script>
<script src=\"http://code.highcharts.com/modules/exporting.js\" type=\"text/javascript\"></script>

<script type=\"text/javascript\">
    {{ chart(chart) }}
</script>

<div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"> </div>


{% include 'temp2.html.twig' %}", "typereclamation/listtypereclamation.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev eya\\ProjetPidev\\templates\\typereclamation\\listtypereclamation.html.twig");
    }
}
