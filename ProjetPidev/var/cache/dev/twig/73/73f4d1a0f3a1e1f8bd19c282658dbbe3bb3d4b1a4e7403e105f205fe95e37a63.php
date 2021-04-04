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

/* soin_mp/stars.html.twig */
class __TwigTemplate_5132b74930b920cc3299c7b91f9bcc1b22d9628d138f8c7715595abac6beb17d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/stars.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soin_mp/stars.html.twig"));

        // line 1
        echo "<style>
    .dropdown button {
        color: #FFFFFF;
        background-color: #ee5057;
        border-color: #ee5057;
        border-radius: 6px;
        padding: 8px;
        font-size:18px;
    }
    .dropdown button:hover {
        color: #FFFFFF !important;
        opacity: 0.8 !important;
        background-color: #ee5057!important;
        border-color: #ee5057!important;
        border-radius: 6px!important;
    }
    .dropdown button:active {
        color: #FFFFFF !important;
        background-color: #ee5057 !important;
        border-color: #ee5057 !important;
        border-radius: 6px !important;
    }

    .dropdown button:focus{
        color: #FFFFFF!important;
        background-color: #ee5057!important;
        border-color: #ee5057!important;
        border-radius: 6px!important;
    }
</style>
<div class=\"dropdown\">
    <label for=\"w3review\">Donner votre Avis</label>
    <form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouternoteSMP", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 33, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 33, $this->source); })()), "valeur" => 0, "Method" => "GET"]), "html", null, true);
        echo "\">
        <textarea id=\"w3review\" name=\"avis\" rows=\"2\" cols=\"64\" >";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["aviss"]) || array_key_exists("aviss", $context) ? $context["aviss"] : (function () { throw new RuntimeError('Variable "aviss" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</textarea>
        <button type=\"submit\" style=\"margin-left: 85%\">Submit</button>
    </form>
    <br>

    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Note
    </button>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
        <a class=\"dropdown-item\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouternoteSMP", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 43, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 43, $this->source); })()), "valeur" => 1]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("stars/1star.PNG"), "html", null, true);
        echo "\"></a>
        <a class=\"dropdown-item\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouternoteSMP", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 44, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 44, $this->source); })()), "valeur" => 2]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("stars/2star.PNG"), "html", null, true);
        echo "\"></a>
        <a class=\"dropdown-item\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouternoteSMP", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 45, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 45, $this->source); })()), "valeur" => 3]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("stars/3star.PNG"), "html", null, true);
        echo "\"></a>
        <a class=\"dropdown-item\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouternoteSMP", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 46, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 46, $this->source); })()), "valeur" => 4]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("stars/4star.PNG"), "html", null, true);
        echo "\"></a>
        <a class=\"dropdown-item\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouternoteSMP", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 47, $this->source); })()), "iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 47, $this->source); })()), "valeur" => 5]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("stars/5star.PNG"), "html", null, true);
        echo "\"></a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "soin_mp/stars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 47,  111 => 46,  105 => 45,  99 => 44,  93 => 43,  81 => 34,  77 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .dropdown button {
        color: #FFFFFF;
        background-color: #ee5057;
        border-color: #ee5057;
        border-radius: 6px;
        padding: 8px;
        font-size:18px;
    }
    .dropdown button:hover {
        color: #FFFFFF !important;
        opacity: 0.8 !important;
        background-color: #ee5057!important;
        border-color: #ee5057!important;
        border-radius: 6px!important;
    }
    .dropdown button:active {
        color: #FFFFFF !important;
        background-color: #ee5057 !important;
        border-color: #ee5057 !important;
        border-radius: 6px !important;
    }

    .dropdown button:focus{
        color: #FFFFFF!important;
        background-color: #ee5057!important;
        border-color: #ee5057!important;
        border-radius: 6px!important;
    }
</style>
<div class=\"dropdown\">
    <label for=\"w3review\">Donner votre Avis</label>
    <form action=\"{{ path('ajouternoteSMP',{'id':id,'iduser':iduser,'valeur':0,'Method':'GET'}) }}\">
        <textarea id=\"w3review\" name=\"avis\" rows=\"2\" cols=\"64\" >{{ aviss }}</textarea>
        <button type=\"submit\" style=\"margin-left: 85%\">Submit</button>
    </form>
    <br>

    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Note
    </button>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
        <a class=\"dropdown-item\" href=\"{{ path('ajouternoteSMP',{'id':id,'iduser':iduser,'valeur':1}) }}\"><img src=\"{{ asset('stars/1star.PNG')}}\"></a>
        <a class=\"dropdown-item\" href=\"{{ path('ajouternoteSMP',{'id':id,'iduser':iduser,'valeur':2}) }}\"><img src=\"{{ asset('stars/2star.PNG')}}\"></a>
        <a class=\"dropdown-item\" href=\"{{ path('ajouternoteSMP',{'id':id,'iduser':iduser,'valeur':3}) }}\"><img src=\"{{ asset('stars/3star.PNG')}}\"></a>
        <a class=\"dropdown-item\" href=\"{{ path('ajouternoteSMP',{'id':id,'iduser':iduser,'valeur':4}) }}\"><img src=\"{{ asset('stars/4star.PNG')}}\"></a>
        <a class=\"dropdown-item\" href=\"{{ path('ajouternoteSMP',{'id':id,'iduser':iduser,'valeur':5}) }}\"><img src=\"{{ asset('stars/5star.PNG')}}\"></a>
    </div>
</div>
", "soin_mp/stars.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\soin_mp\\stars.html.twig");
    }
}
