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

/* parapharmacie/ListParapharmacie.html.twig */
class __TwigTemplate_a0078a1a19597dc71077b5e01903bd2be48574f085ee58652a3b9d1f01f20c68 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parapharmacie/ListParapharmacie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parapharmacie/ListParapharmacie.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "parapharmacie/ListParapharmacie.html.twig", 1)->display($context);
        // line 2
        echo "



    <div class=\"box\">
        <div class=\"box-header\">
            <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Parapharmacies </h1>
            <div class=\"col-sm-8\"></div>

            <div class=\"col-sm-4\"><a href=\"parapharmacie/AjoutParapharmacie\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Parapharmacie</a></div>




        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                    <th>Image Parapharmacie</th>
                    <th>id</th>
                    <th>Nom Parapharmacie</th>
                    <th>Region</th>
                    <th>Adresse Parapharmacie</th>
                    <th>Tel Parapharmacie</th>
                    <th>Modifier Parapharmacie</th>
                    <th>Supprimer Parapharmacie</th>


                </tr>
                </thead>
                <tbody>
                <tr ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parapharmacie"]) || array_key_exists("parapharmacie", $context) ? $context["parapharmacie"] : (function () { throw new RuntimeError('Variable "parapharmacie" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo ">
                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["p"], "getLienImageP", [], "any", false, false, false, 36))), "html", null, true);
            echo "\"></td>

                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nomPara", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "region", [], "any", false, false, false, 40), "region", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "adressePara", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "telPara", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierParapharmacie", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                    <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteParapharmacie", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>



                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo ">




                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>

";
        // line 60
        $this->loadTemplate("temp2.html.twig", "parapharmacie/ListParapharmacie.html.twig", 60)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "parapharmacie/ListParapharmacie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 60,  126 => 48,  115 => 44,  111 => 43,  107 => 42,  103 => 41,  99 => 40,  95 => 39,  91 => 38,  86 => 36,  80 => 35,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}




    <div class=\"box\">
        <div class=\"box-header\">
            <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Gestion Des Parapharmacies </h1>
            <div class=\"col-sm-8\"></div>

            <div class=\"col-sm-4\"><a href=\"parapharmacie/AjoutParapharmacie\" class=\"btn btn-block btn-primary\" role=\"button\">Ajouter Parapharmacie</a></div>




        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                    <th>Image Parapharmacie</th>
                    <th>id</th>
                    <th>Nom Parapharmacie</th>
                    <th>Region</th>
                    <th>Adresse Parapharmacie</th>
                    <th>Tel Parapharmacie</th>
                    <th>Modifier Parapharmacie</th>
                    <th>Supprimer Parapharmacie</th>


                </tr>
                </thead>
                <tbody>
                <tr {% for p in parapharmacie %}>
                    <td><img style=\" padding-right: 2px; padding-left: 2px;  width:60px ; hight: 60px ;\" src=\"{{ asset('uploads/' ~ p.getLienImageP)}}\"></td>

                    <td>{{ p.id }}</td>
                    <td>{{ p.nomPara }}</td>
                    <td>{{ p.region.region }}</td>
                    <td>{{ p.adressePara}}</td>
                    <td>{{ p.telPara }}</td>
                    <td><a href=\"{{ path('modifierParapharmacie',{'id':p.id}) }}\" class=\"btn btn-block btn-warning\" role=\"button\">Modifier</a></td>
                    <td><a href=\"{{ path('deleteParapharmacie',{'id':p.id}) }}\" class=\"btn btn-block btn-danger\" role=\"button\">Supprimer</a></td>



                </tr {% endfor %}>




                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>

{% include 'temp2.html.twig' %}", "parapharmacie/ListParapharmacie.html.twig", "C:\\Users\\oussa\\Desktop\\Pi-dev-debutGestionUtil\\ProjetPidev\\templates\\parapharmacie\\ListParapharmacie.html.twig");
    }
}
