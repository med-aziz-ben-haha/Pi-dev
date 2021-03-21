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
class __TwigTemplate_c0cecc970b9e4b5ef7abd267da76366c454c395a7f3adafd12de0c0eb6c8c218 extends Template
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
        <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des types de reclamations </h1>
        <form action=\"  ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutertypereclamation");
        echo "  \"><button>Ajouter</button></form>

    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
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


            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
            <li>     <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherpdf");
        echo "\"> Imprimer </a> </li>
            <li><input  class=\"form-control form-control-sm mr-3 w-75\"  aria-label=\"Search\" type=\"text\" placeholder=\"Search\" name=\"search\" id=\"re\" onkeyup=\"searchh()\" style=\"border-color:#003f81\">
                <br></li>

<li>
            <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tri");
        echo "\"> TRI par type  </a></li>
            <tr>
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listtypereclamation"]) || array_key_exists("listtypereclamation", $context) ? $context["listtypereclamation"] : (function () { throw new RuntimeError('Variable "listtypereclamation" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["C"]) {
            // line 55
            echo "
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["C"], "typeReclamation", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>

                    <td><form action=\" ";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimertypereclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo " \"><button>Supprimer</button></form></td>
                    <td><form action=\" ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifiertypereclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["C"], "id", [], "any", false, false, false, 60)]), "html", null, true);
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
            <script>
                function searchh(){
                    var sch=\$(\"#re\").val();
                    \$.ajax({
                        url: \"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ch");
            echo "\",
                        data:{dat: sch},
                        type: \"POST\",
                        success: function(data){
                            \$('#det22').html(data).show();
                        }
                    });
                }
            </script>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['C'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "


            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 114
        $this->loadTemplate("temp2.html.twig", "typereclamation/listtypereclamation.html.twig", 114)->display($context);
        
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
        return array (  193 => 114,  182 => 105,  165 => 94,  128 => 60,  124 => 59,  119 => 57,  115 => 56,  112 => 55,  108 => 54,  103 => 52,  95 => 47,  72 => 27,  45 => 2,  43 => 1,);
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


            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
            <li>     <a href=\"{{path('afficherpdf') }}\"> Imprimer </a> </li>
            <li><input  class=\"form-control form-control-sm mr-3 w-75\"  aria-label=\"Search\" type=\"text\" placeholder=\"Search\" name=\"search\" id=\"re\" onkeyup=\"searchh()\" style=\"border-color:#003f81\">
                <br></li>

<li>
            <a href=\"{{path('tri') }}\"> TRI par type  </a></li>
            <tr>
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
            <script>
                function searchh(){
                    var sch=\$(\"#re\").val();
                    \$.ajax({
                        url: \"{{ path('ch') }}\",
                        data:{dat: sch},
                        type: \"POST\",
                        success: function(data){
                            \$('#det22').html(data).show();
                        }
                    });
                }
            </script>

            {% endfor %}



            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
{% include 'temp2.html.twig' %}", "typereclamation/listtypereclamation.html.twig", "C:\\Users\\eya\\Desktop\\Pi-dev\\ProjetPidev\\templates\\typereclamation\\listtypereclamation.html.twig");
    }
}
