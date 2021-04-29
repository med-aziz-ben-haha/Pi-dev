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

/* list_produit/ModifierListProduit.html.twig */
class __TwigTemplate_162c2b304f0a20521c2e5dc7487bf8dced65f8782d4778ef85988ffe005094c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list_produit/ModifierListProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list_produit/ModifierListProduit.html.twig"));

        // line 1
        $this->loadTemplate("tempClient.html.twig", "list_produit/ModifierListProduit.html.twig", 1)->display(twig_array_merge($context, ["iduser" => (isset($context["iduser"]) || array_key_exists("iduser", $context) ? $context["iduser"] : (function () { throw new RuntimeError('Variable "iduser" does not exist.', 1, $this->source); })())]));
        // line 2
        echo "
<style>
    .quantity1{
        display: flex;
        width: 700px;

    }

    .plus-btn{
        width: 70px;
        height: 45px;
        border: 1px solid black;
        color: black;
        border-radius: 0;
        background: grey;
    }
    .minus-btn{
        width: 70px;
        height: 45px;
        border: 1px solid black;
        color: black;
        border-radius: 0;
        background: grey;
    }
    .quantity1 input{
        border: none;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        text-align: center;
        font-size: 20px;
        color: black;
        font-weight: 300;

    }
</style>

<div style =\"margin-left: 1%; padding-top: 5%\">
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Modifier Quantite </h1>



    <div class=\"quantity1\">

        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_start');
        echo "



        <button class=\"minus-btn \" type=\"button\"  >-</button>
        <div style=\"width: 70px\">

            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "qte", [], "any", false, false, false, 53), 'widget', ["id" => "qtt"]);
        echo "

        </div>
        <button class=\"plus-btn\" type=\"button\" style=\"margin-right: 5px \" >+</button>

        ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "


    </div>

    <script>
        var quantity
        quantity=document.getElementById(\"qtt\").value;


        document.querySelector(\".plus-btn\").addEventListener(\"click\", function (){
            quantity=document.getElementById(\"qtt\").value;
            if (quantity<";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["qte"]) || array_key_exists("qte", $context) ? $context["qte"] : (function () { throw new RuntimeError('Variable "qte" does not exist.', 70, $this->source); })()), "html", null, true);
        echo ")
                quantity++;
            document.getElementById(\"qtt\").value=quantity


        })
        document.querySelector(\".minus-btn\").addEventListener(\"click\", function (){
            quantity=document.getElementById(\"qtt\").value;
            if (quantity>1)
                quantity--;
            document.getElementById(\"qtt\").value=quantity


        })


    </script>




";
        // line 91
        $this->loadTemplate("tempFront2SoinMP.html.twig", "list_produit/ModifierListProduit.html.twig", 91)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "list_produit/ModifierListProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 91,  127 => 70,  112 => 58,  104 => 53,  94 => 46,  84 => 39,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'tempClient.html.twig'with{'iduser':iduser} %}

<style>
    .quantity1{
        display: flex;
        width: 700px;

    }

    .plus-btn{
        width: 70px;
        height: 45px;
        border: 1px solid black;
        color: black;
        border-radius: 0;
        background: grey;
    }
    .minus-btn{
        width: 70px;
        height: 45px;
        border: 1px solid black;
        color: black;
        border-radius: 0;
        background: grey;
    }
    .quantity1 input{
        border: none;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        text-align: center;
        font-size: 20px;
        color: black;
        font-weight: 300;

    }
</style>

<div style =\"margin-left: 1%; padding-top: 5%\">
    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
    <h1 style =\"margin-bottom: 2%; text-align: center; color: #d11414 ;  \" > Modifier Quantite </h1>



    <div class=\"quantity1\">

        {{ form_start(form) }}



        <button class=\"minus-btn \" type=\"button\"  >-</button>
        <div style=\"width: 70px\">

            {{ form_widget(form.qte , { 'id':'qtt'}   ) }}

        </div>
        <button class=\"plus-btn\" type=\"button\" style=\"margin-right: 5px \" >+</button>

        {{ form_end(form) }}


    </div>

    <script>
        var quantity
        quantity=document.getElementById(\"qtt\").value;


        document.querySelector(\".plus-btn\").addEventListener(\"click\", function (){
            quantity=document.getElementById(\"qtt\").value;
            if (quantity<{{ qte }})
                quantity++;
            document.getElementById(\"qtt\").value=quantity


        })
        document.querySelector(\".minus-btn\").addEventListener(\"click\", function (){
            quantity=document.getElementById(\"qtt\").value;
            if (quantity>1)
                quantity--;
            document.getElementById(\"qtt\").value=quantity


        })


    </script>




{% include 'tempFront2SoinMP.html.twig' %}", "list_produit/ModifierListProduit.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\list_produit\\ModifierListProduit.html.twig");
    }
}
