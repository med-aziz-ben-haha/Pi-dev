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

/* soin_mp/listSoinsMPs.html.twig */
class __TwigTemplate_f76f24392603a00149f1b3cb7783e1f5412a596ee718581729fea3859920d094 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/listSoinsMPs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/listSoinsMPs.html.twig"));

        // line 1
        $this->loadTemplate("tempFront1SoinMP.html.twig", "soin_mp/listSoinsMPs.html.twig", 1)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 1, $this->source); })())]));
        // line 2
        echo "
<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"idMP\">Médecine Parallèle</h2>
                <!--div style=\"width:80%; margin-left:10%; margin-top:3%;\">";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 8, $this->source); })()), 'form', ["attr" => ["novalidate" => "novalidate"]]);
        echo "</div-->
               <input style=\"width:80%; margin-left:10%; margin-top:3%;\" id=\"search\" class=\"form-control mr-sm-2\" type=\"text\" name=\"search\" placeholder=\"Search ...\" aria-label=\"Search\"  >
            </div>

                <div class=\"row text-center\" id=\"sa\">
                    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSoinsMPs"]) || array_key_exists("listSoinsMPs", $context) ? $context["listSoinsMPs"] : (function () { throw new RuntimeError('Variable "listSoinsMPs" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["S"]) {
            // line 15
            echo "                    <div class=\"col-12 col-md-6 col-lg-4\" >
                        <article class=\"service-box text-center\" style=\"height:650px;\">
                            <div class=\"service-box-icon\"><img style=\" padding-right: 2px; padding-left: 2px;  width:300px ; height: 200px ; \" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["S"], "getLienImageSMP", [], "method", false, false, false, 17))), "html", null, true);
            echo "\"></div>
                            <h3 class=\"service-box-title\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "titreSoinMP", [], "any", false, false, false, 18), "html", null, true);
            echo "</h3>
                            <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "descriptionSoinMP", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                            <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["S"], "adresseSoinMP", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                            <a  href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherDetailSoinMPs", ["id" => twig_get_attribute($this->env, $this->source, $context["S"], "getId", [], "method", false, false, false, 21), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 21, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-main-outline mt-2\">Consulter<i class=\"fas fa-chevron-right\"></i></a>
                        </article>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['S'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    <script>
                        \$(document).ready(function(){
                            \$('#search').keyup(function(){
                                search_table(\$(this).val());
                            });
                            function search_table(value){
                                \$('#sa div article').each(function(){
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
        </div>
    </div>
    </div>
</section>

";
        // line 58
        $this->loadTemplate("tempFront2SoinMP.html.twig", "soin_mp/listSoinsMPs.html.twig", 58)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "soin_mp/listSoinsMPs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 58,  99 => 25,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 15,  65 => 14,  61 => 13,  53 => 8,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempFront1SoinMP.html.twig' with { 'iduser' :iduser } %}

<section class=\"services-section hk-section section-bg\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\" id=\"idMP\">Médecine Parallèle</h2>
                <!--div style=\"width:80%; margin-left:10%; margin-top:3%;\">{{ form(formSearch,{'attr': {'novalidate': 'novalidate'}}) }}</div-->
               <input style=\"width:80%; margin-left:10%; margin-top:3%;\" id=\"search\" class=\"form-control mr-sm-2\" type=\"text\" name=\"search\" placeholder=\"Search ...\" aria-label=\"Search\"  >
            </div>

                <div class=\"row text-center\" id=\"sa\">
                    <script src=\"{{ asset('/js/jquery.min.js') }}\"></script>
            {% for S in listSoinsMPs %}
                    <div class=\"col-12 col-md-6 col-lg-4\" >
                        <article class=\"service-box text-center\" style=\"height:650px;\">
                            <div class=\"service-box-icon\"><img style=\" padding-right: 2px; padding-left: 2px;  width:300px ; height: 200px ; \" src=\"{{ asset('uploads/' ~ S.getLienImageSMP())}}\"></div>
                            <h3 class=\"service-box-title\">{{ S.titreSoinMP }}</h3>
                            <p>{{ S.descriptionSoinMP}}</p>
                            <p>{{ S.adresseSoinMP}}</p>
                            <a  href=\"{{ path(\"afficherDetailSoinMPs\",{'id':S.getId(), 'iduser': iduser } ) }}\" class=\"btn btn-main-outline mt-2\">Consulter<i class=\"fas fa-chevron-right\"></i></a>
                        </article>
                    </div>
            {% endfor %}
                    <script>
                        \$(document).ready(function(){
                            \$('#search').keyup(function(){
                                search_table(\$(this).val());
                            });
                            function search_table(value){
                                \$('#sa div article').each(function(){
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
        </div>
    </div>
    </div>
</section>

{% include 'tempFront2SoinMP.html.twig' %}
", "soin_mp/listSoinsMPs.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\listSoinsMPs.html.twig");
    }
}
