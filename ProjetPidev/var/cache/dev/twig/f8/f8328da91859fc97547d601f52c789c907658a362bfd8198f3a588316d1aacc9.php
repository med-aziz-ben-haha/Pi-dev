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

/* user/templateAfficherProfilMed.html.twig */
class __TwigTemplate_5a70d6346701673d29f96adf93b86d5908ec51c050f69ae36b0b527644561c29 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/templateAfficherProfilMed.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/templateAfficherProfilMed.html.twig"));

        // line 1
        $this->loadTemplate("templateAccueilProfil.html.twig", "user/templateAfficherProfilMed.html.twig", 1)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 1, $this->source); })())]));
        // line 2
        echo "
<style>
    #couleur_d{
        color: black !important;
    }
    .emp-profile{
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
    .profile-head h5{
        color: #333;
    }
    .profile-head h6{
        color: #0062cc;
    }
    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        text-align: center;
        cursor: pointer;
    }
    .proile-rating{
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }
    .proile-rating span{
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }
    .profile-head .nav-tabs{
        margin-bottom:5%;
    }
    .profile-head .nav-tabs .nav-link{
        font-weight:600;
        border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
    }
    .profile-work{
        padding: 14%;
        margin-top: -15%;
    }
    .profile-work p{
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }
    .profile-work a{
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }
    .profile-work ul{
        list-style: none;
    }
    .profile-tab label{
        font-weight: 600;
    }
    .profile-tab p{
        font-weight: 600;
        color: #0062cc;
    }</style>
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container emp-profile\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"profile-img\">
                <img  src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 108, $this->source); })()), "getLienImageUser", [], "method", false, false, false, 108))), "html", null, true);
        echo "\"></td>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"profile-head\">
                <h5 style=\"color: #d11414; font-size:150%;\">
                    ";
        // line 114
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 114, $this->source); })()), "nom", [], "any", false, false, false, 114)), "html", null, true);
        echo "
                    ";
        // line 115
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 115, $this->source); })()), "prenom", [], "any", false, false, false, 115)), "html", null, true);
        echo "
                </h5>
                <br>
                <h6 style=\"color: black;\">Spécialité: ";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 118, $this->source); })()), "specialite", [], "any", false, false, false, 118), "html", null, true);
        echo "</h6>
                <h6 style=\"color: black;\">Matricule Fiscale: ";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 119, $this->source); })()), "matriculeFiscale", [], "any", false, false, false, 119), "html", null, true);
        echo "</h6>
                <br>
                <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Données personnelles</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Données du compte</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-2\">
            <a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierMed", ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 132, $this->source); })())]), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\" name=\"btnAddMore\">
                Modifier Profil
            </a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"profile-work\">
            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"tab-content profile-tab\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Nom :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 151, $this->source); })()), "nom", [], "any", false, false, false, 151), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Prénom :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\">";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 159, $this->source); })()), "prenom", [], "any", false, false, false, 159), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Sexe :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\"> ";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 167, $this->source); })()), "sexe", [], "any", false, false, false, 167), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Email :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\"> ";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 175, $this->source); })()), "email", [], "any", false, false, false, 175), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Téléphone :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\">";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 183, $this->source); })()), "telephone", [], "any", false, false, false, 183), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Adresse :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\">";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 191, $this->source); })()), "adresseUser", [], "any", false, false, false, 191), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Login :</label>
                        </div>
                        <div class=\"col-md-6\" >
                            <p id=\"couleur_d\">";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 201, $this->source); })()), "login", [], "any", false, false, false, 201), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 209
        $this->loadTemplate("templateAccueilFooter.html.twig", "user/templateAfficherProfilMed.html.twig", 209)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/templateAfficherProfilMed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 209,  282 => 201,  269 => 191,  258 => 183,  247 => 175,  236 => 167,  225 => 159,  214 => 151,  192 => 132,  176 => 119,  172 => 118,  166 => 115,  162 => 114,  153 => 108,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'templateAccueilProfil.html.twig'  with {'iduser' :iduser} %}

<style>
    #couleur_d{
        color: black !important;
    }
    .emp-profile{
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
    .profile-head h5{
        color: #333;
    }
    .profile-head h6{
        color: #0062cc;
    }
    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        text-align: center;
        cursor: pointer;
    }
    .proile-rating{
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }
    .proile-rating span{
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }
    .profile-head .nav-tabs{
        margin-bottom:5%;
    }
    .profile-head .nav-tabs .nav-link{
        font-weight:600;
        border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
    }
    .profile-work{
        padding: 14%;
        margin-top: -15%;
    }
    .profile-work p{
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }
    .profile-work a{
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }
    .profile-work ul{
        list-style: none;
    }
    .profile-tab label{
        font-weight: 600;
    }
    .profile-tab p{
        font-weight: 600;
        color: #0062cc;
    }</style>
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<div class=\"container emp-profile\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"profile-img\">
                <img  src=\"{{ asset('uploads/' ~ userFind.getLienImageUser())}}\"></td>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"profile-head\">
                <h5 style=\"color: #d11414; font-size:150%;\">
                    {{ userFind.nom |upper}}
                    {{ userFind.prenom |upper}}
                </h5>
                <br>
                <h6 style=\"color: black;\">Spécialité: {{ userFind.specialite }}</h6>
                <h6 style=\"color: black;\">Matricule Fiscale: {{ userFind.matriculeFiscale }}</h6>
                <br>
                <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Données personnelles</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Données du compte</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-2\">
            <a href=\"{{ path('modifierMed',{'iduser':iduser} ) }}\" type=\"submit\" class=\"btn btn-primary\" name=\"btnAddMore\">
                Modifier Profil
            </a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"profile-work\">
            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"tab-content profile-tab\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Nom :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\">{{ userFind.nom}}</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Prénom :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\">{{ userFind.prenom }}</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Sexe :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\"> {{ userFind.sexe}}</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Email :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\"> {{ userFind.email}}</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Téléphone :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\">{{ userFind.telephone}}</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Adresse :</label>
                        </div>
                        <div class=\"col-md-6\">
                            <p id=\"couleur_d\">{{ userFind.adresseUser}}</p>
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <label>Login :</label>
                        </div>
                        <div class=\"col-md-6\" >
                            <p id=\"couleur_d\">{{ userFind.login }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% include 'templateAccueilFooter.html.twig' %}
", "user/templateAfficherProfilMed.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\user\\templateAfficherProfilMed.html.twig");
    }
}
