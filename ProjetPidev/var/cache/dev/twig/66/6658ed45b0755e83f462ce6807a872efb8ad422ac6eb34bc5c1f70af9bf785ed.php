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

/* user/templateModifierProfil.html.twig */
class __TwigTemplate_2ffd9710eadf3f0242cff518e829de6e0cf00fcdd6f56b86018720b2badd8a82 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/templateModifierProfil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/templateModifierProfil.html.twig"));

        // line 1
        $this->loadTemplate("templateAccueilProfil.html.twig", "user/templateModifierProfil.html.twig", 1)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 1, $this->source); })())]));
        // line 2
        echo "
<style>
    .btn-primary {
        margin-left: 92%;
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;

    }
    .btn-primary:hover {
        opacity: 0.8;
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
    }
    .btn-primary:active {
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
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
    .profile-edit-btn{
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
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
        color:black !important;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
        color:black !important;
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
    ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formModifierUser"]) || array_key_exists("formModifierUser", $context) ? $context["formModifierUser"] : (function () { throw new RuntimeError('Variable "formModifierUser" does not exist.', 121, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"profile-img\">
                    <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 126, $this->source); })()), "getLienImageUser", [], "method", false, false, false, 126))), "html", null, true);
        echo "\"></td>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"profile-head\">

                    <h5 style=\"color: #d11414; font-size:150%;\">
                        ";
        // line 133
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 133, $this->source); })()), "nom", [], "any", false, false, false, 133)), "html", null, true);
        echo "
                        ";
        // line 134
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 134, $this->source); })()), "prenom", [], "any", false, false, false, 134)), "html", null, true);
        echo "
                    </h5>
                    ";
        // line 136
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 136, $this->source); })()), "Role", [], "any", false, false, false, 136), 1))) {
            // line 137
            echo "                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    ";
        }
        // line 143
        echo "

                    ";
        // line 145
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 145, $this->source); })()), "role", [], "any", false, false, false, 145), 3))) {
            // line 146
            echo "                        <br>
                        <br>
                        <h5>Pharmacien</h5>
                        <br>
                        <br>
                    ";
        }
        // line 152
        echo "
                    ";
        // line 153
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 153, $this->source); })()), "role", [], "any", false, false, false, 153), 4))) {
            // line 154
            echo "                        <br>
                        <br>
                        <h5>Parapharmacien</h5>
                        <br>
                        <br>
                    ";
        }
        // line 160
        echo "
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
                                <label>Nom</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierUser"]) || array_key_exists("formModifierUser", $context) ? $context["formModifierUser"] : (function () { throw new RuntimeError('Variable "formModifierUser" does not exist.', 186, $this->source); })()), "nom", [], "any", false, false, false, 186), 'widget');
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Prénom</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierUser"]) || array_key_exists("formModifierUser", $context) ? $context["formModifierUser"] : (function () { throw new RuntimeError('Variable "formModifierUser" does not exist.', 194, $this->source); })()), "prenom", [], "any", false, false, false, 194), 'widget');
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Sexe</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p> ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierUser"]) || array_key_exists("formModifierUser", $context) ? $context["formModifierUser"] : (function () { throw new RuntimeError('Variable "formModifierUser" does not exist.', 202, $this->source); })()), "sexe", [], "any", false, false, false, 202), 'widget');
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Email</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p> ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierUser"]) || array_key_exists("formModifierUser", $context) ? $context["formModifierUser"] : (function () { throw new RuntimeError('Variable "formModifierUser" does not exist.', 210, $this->source); })()), "email", [], "any", false, false, false, 210), 'widget');
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Téléphone</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierUser"]) || array_key_exists("formModifierUser", $context) ? $context["formModifierUser"] : (function () { throw new RuntimeError('Variable "formModifierUser" does not exist.', 218, $this->source); })()), "telephone", [], "any", false, false, false, 218), 'widget');
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Adresse</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierUser"]) || array_key_exists("formModifierUser", $context) ? $context["formModifierUser"] : (function () { throw new RuntimeError('Variable "formModifierUser" does not exist.', 226, $this->source); })()), "adresseUser", [], "any", false, false, false, 226), 'widget');
        echo "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Login</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierUser"]) || array_key_exists("formModifierUser", $context) ? $context["formModifierUser"] : (function () { throw new RuntimeError('Variable "formModifierUser" does not exist.', 236, $this->source); })()), "login", [], "any", false, false, false, 236), 'widget');
        echo "</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Mot de passe</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formModifierUser"]) || array_key_exists("formModifierUser", $context) ? $context["formModifierUser"] : (function () { throw new RuntimeError('Variable "formModifierUser" does not exist.', 244, $this->source); })()), "mdp", [], "any", false, false, false, 244), 'widget', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["userFind"]) || array_key_exists("userFind", $context) ? $context["userFind"] : (function () { throw new RuntimeError('Variable "userFind" does not exist.', 244, $this->source); })()), "mdp", [], "any", false, false, false, 244)]]);
        echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    ";
        // line 252
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formModifierUser"]) || array_key_exists("formModifierUser", $context) ? $context["formModifierUser"] : (function () { throw new RuntimeError('Variable "formModifierUser" does not exist.', 252, $this->source); })()), 'form_end');
        echo "
</div>
";
        // line 254
        $this->loadTemplate("templateAccueilFooter.html.twig", "user/templateModifierProfil.html.twig", 254)->display($context);
        // line 255
        echo "







";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/templateModifierProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 255,  353 => 254,  348 => 252,  337 => 244,  326 => 236,  313 => 226,  302 => 218,  291 => 210,  280 => 202,  269 => 194,  258 => 186,  230 => 160,  222 => 154,  220 => 153,  217 => 152,  209 => 146,  207 => 145,  203 => 143,  195 => 137,  193 => 136,  188 => 134,  184 => 133,  174 => 126,  166 => 121,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'templateAccueilProfil.html.twig'  with {'iduser' :iduser} %}

<style>
    .btn-primary {
        margin-left: 92%;
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;

    }
    .btn-primary:hover {
        opacity: 0.8;
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
    }
    .btn-primary:active {
        background-color: #d11414 !important;
        border-color: #d11414 !important;
        border-radius: 6px;
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
    .profile-edit-btn{
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
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
        color:black !important;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
        color:black !important;
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
    {{ form_start(formModifierUser,{'attr': {'novalidate': 'novalidate'}} ) }}

        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"profile-img\">
                    <img src=\"{{ asset('uploads/' ~ userFind.getLienImageUser())}}\"></td>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"profile-head\">

                    <h5 style=\"color: #d11414; font-size:150%;\">
                        {{ userFind.nom |upper}}
                        {{ userFind.prenom |upper}}
                    </h5>
                    {%if (userFind.Role==1)%}
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    {% endif %}


                    {% if (userFind.role==3) %}
                        <br>
                        <br>
                        <h5>Pharmacien</h5>
                        <br>
                        <br>
                    {% endif %}

                    {% if (userFind.role==4) %}
                        <br>
                        <br>
                        <h5>Parapharmacien</h5>
                        <br>
                        <br>
                    {% endif %}

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
                                <label>Nom</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ form_widget(formModifierUser.nom)}}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Prénom</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ form_widget(formModifierUser.prenom) }}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Sexe</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p> {{ form_widget(formModifierUser.sexe)}}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Email</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p> {{ form_widget(formModifierUser.email)}}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Téléphone</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ form_widget(formModifierUser.telephone)}}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Adresse</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ form_widget(formModifierUser.adresseUser)}}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Login</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ form_widget(formModifierUser.login) }}</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Mot de passe</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>{{ form_widget(formModifierUser.mdp,{'attr': {'value': userFind.mdp} } )}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{ form_end(formModifierUser) }}
</div>
{% include 'templateAccueilFooter.html.twig' %}








", "user/templateModifierProfil.html.twig", "C:\\Users\\Emna\\Desktop\\Pi-dev\\ProjetPidev\\templates\\user\\templateModifierProfil.html.twig");
    }
}
