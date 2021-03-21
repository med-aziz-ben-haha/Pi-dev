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

/* user/ListMedecins.html.twig */
class __TwigTemplate_1b77d364f317220dbd331d5c1acf82e14166880b2d62a793c22131110b8891a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/ListMedecins.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/ListMedecins.html.twig"));

        // line 1
        $this->loadTemplate("temp1.html.twig", "user/ListMedecins.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"box\">
    <div class=\"box-header\">
        <h3 class=\"box-title\">Gestion des médecins</h3>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Image</th>
                <th>Id_User</th>
                <th>Login</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Sexe</th>
                <th>Matricule fiscale</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img style=\"padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px ;\" src= \"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" ></td>
                <td>1</td>
                <td>emna</td>
                <td>besbes</td>
                <td>emna</td>
                <td>emna@gmail.com</td>
                <td>esprit</td>
                <td>+55556268443</td>
                <td>F</td>
                <td>00007214369</td>

            </tr>



            <tr>
                <td><img style=\" padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px ;\" src= \"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/avatar04.png"), "html", null, true);
        echo "\" ></td>
                <td>Mozilla 1.5</td>
                <td>Win 95+ / OSX.1+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Internet Explorer 4.0</td>

            </tr>
            <tr>
                <td><img style=\" padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px ;\" src= \"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/avatar04.png"), "html", null, true);
        echo "\" ></td>
                <td>Mozilla 1.6</td>
                <td>Win 95+ / OSX.1+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Internet Explorer 4.0</td>

            </tr>
            <tr>
                <td><img style=\" padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px ;\" src= \"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/avatar3.png"), "html", null, true);
        echo "\" ></td>
                <td>Mozilla 1.7</td>
                <td>Win 98+ / OSX.1+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Internet Explorer 4.0</td>

            </tr>

            <tr>
                <td><img style=\" padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px  ;\" src= \"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/avatar2.png"), "html", null, true);
        echo "\" ></td>
                <td>Safari 2.0</td>
                <td>OSX.4+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Internet Explorer 4.0</td>

            </tr>
            <tr>
                <td><img style=\" padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px ;\"src= \"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/dist/img/avatar.png"), "html", null, true);
        echo "\" ></td>
                <td>Safari 3.0</td>
                <td>OSX.4+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Internet Explorer 4.0</td>

            </tr>

            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
";
        // line 110
        $this->loadTemplate("temp2.html.twig", "user/ListMedecins.html.twig", 110)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/ListMedecins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 110,  152 => 92,  137 => 80,  121 => 67,  106 => 55,  91 => 43,  72 => 27,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'temp1.html.twig' %}

<div class=\"box\">
    <div class=\"box-header\">
        <h3 class=\"box-title\">Gestion des médecins</h3>
    </div>
    <!-- /.box-header -->
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Image</th>
                <th>Id_User</th>
                <th>Login</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Sexe</th>
                <th>Matricule fiscale</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img style=\"padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px ;\" src= \"{{ asset('bundles/dist/img/user2-160x160.jpg')}}\" ></td>
                <td>1</td>
                <td>emna</td>
                <td>besbes</td>
                <td>emna</td>
                <td>emna@gmail.com</td>
                <td>esprit</td>
                <td>+55556268443</td>
                <td>F</td>
                <td>00007214369</td>

            </tr>



            <tr>
                <td><img style=\" padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px ;\" src= \"{{ asset('bundles/dist/img/avatar04.png')}}\" ></td>
                <td>Mozilla 1.5</td>
                <td>Win 95+ / OSX.1+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Internet Explorer 4.0</td>

            </tr>
            <tr>
                <td><img style=\" padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px ;\" src= \"{{ asset('bundles/dist/img/avatar04.png')}}\" ></td>
                <td>Mozilla 1.6</td>
                <td>Win 95+ / OSX.1+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Internet Explorer 4.0</td>

            </tr>
            <tr>
                <td><img style=\" padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px ;\" src= \"{{ asset('bundles/dist/img/avatar3.png')}}\" ></td>
                <td>Mozilla 1.7</td>
                <td>Win 98+ / OSX.1+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Internet Explorer 4.0</td>

            </tr>

            <tr>
                <td><img style=\" padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px  ;\" src= \"{{ asset('bundles/dist/img/avatar2.png')}}\" ></td>
                <td>Safari 2.0</td>
                <td>OSX.4+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Internet Explorer 4.0</td>

            </tr>
            <tr>
                <td><img style=\" padding-right: 0px; padding-left: 0px;  width:30px ; hight: 30px ;\"src= \"{{ asset('bundles/dist/img/avatar.png')}}\" ></td>
                <td>Safari 3.0</td>
                <td>OSX.4+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Internet Explorer 4.0</td>

            </tr>

            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
{% include 'temp2.html.twig' %}
", "user/ListMedecins.html.twig", "C:\\Users\\eya\\Desktop\\Pi-dev\\ProjetPidev\\templates\\user\\ListMedecins.html.twig");
    }
}
