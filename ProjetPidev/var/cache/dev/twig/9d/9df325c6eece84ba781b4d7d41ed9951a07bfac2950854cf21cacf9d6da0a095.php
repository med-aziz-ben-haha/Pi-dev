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

/* user/templateProfilOriginale.html.twig */
class __TwigTemplate_e6bfeefc80a540510ca3be6a73bab1fff2ef94ff3c7ba77c27f64a12eb897fad extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/templateProfilOriginale.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/templateProfilOriginale.html.twig"));

        // line 1
        echo "<style>
    body{
background: -webkit-linear-gradient(left, #3931af, #00c6ff);
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
width: 70%;
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
    <form method=\"post\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"profile-img\">
                    <img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"\"/>
                    <div class=\"file btn btn-lg btn-primary\">
                        Change Photo
                        <input type=\"file\" name=\"file\"/>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"profile-head\">
                    <h5>
                        Kshiti Ghelani
                    </h5>
                    <h6>
                        Web Developer and Designer
                    </h6>
                    <p class=\"proile-rating\">RANKINGS : <span>8/10</span></p>
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">About</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Timeline</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2\">
                <input type=\"submit\" class=\"profile-edit-btn\" name=\"btnAddMore\" value=\"Edit Profile\"/>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"profile-work\">
                    <p>WORK LINK</p>
                    <a href=\"\">Website Link</a><br/>
                    <a href=\"\">Bootsnipp Profile</a><br/>
                    <a href=\"\">Bootply Profile</a>
                    <p>SKILLS</p>
                    <a href=\"\">Web Designer</a><br/>
                    <a href=\"\">Web Developer</a><br/>
                    <a href=\"\">WordPress</a><br/>
                    <a href=\"\">WooCommerce</a><br/>
                    <a href=\"\">PHP, .Net</a><br/>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"tab-content profile-tab\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>User Id</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>Kshiti123</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Name</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>Kshiti Ghelani</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Email</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>kshitighelani@gmail.com</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Phone</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>123 456 7890</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Profession</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>Web Developer and Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Experience</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Hourly Rate</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>10\$/hr</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Total Projects</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>230</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>English Level</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Availability</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <label>Your Bio</label><br/>
                                <p>Your detail description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/templateProfilOriginale.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    body{
background: -webkit-linear-gradient(left, #3931af, #00c6ff);
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
width: 70%;
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
    <form method=\"post\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"profile-img\">
                    <img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"\"/>
                    <div class=\"file btn btn-lg btn-primary\">
                        Change Photo
                        <input type=\"file\" name=\"file\"/>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"profile-head\">
                    <h5>
                        Kshiti Ghelani
                    </h5>
                    <h6>
                        Web Developer and Designer
                    </h6>
                    <p class=\"proile-rating\">RANKINGS : <span>8/10</span></p>
                    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">About</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Timeline</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2\">
                <input type=\"submit\" class=\"profile-edit-btn\" name=\"btnAddMore\" value=\"Edit Profile\"/>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"profile-work\">
                    <p>WORK LINK</p>
                    <a href=\"\">Website Link</a><br/>
                    <a href=\"\">Bootsnipp Profile</a><br/>
                    <a href=\"\">Bootply Profile</a>
                    <p>SKILLS</p>
                    <a href=\"\">Web Designer</a><br/>
                    <a href=\"\">Web Developer</a><br/>
                    <a href=\"\">WordPress</a><br/>
                    <a href=\"\">WooCommerce</a><br/>
                    <a href=\"\">PHP, .Net</a><br/>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"tab-content profile-tab\" id=\"myTabContent\">
                    <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>User Id</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>Kshiti123</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Name</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>Kshiti Ghelani</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Email</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>kshitighelani@gmail.com</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Phone</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>123 456 7890</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Profession</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>Web Developer and Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Experience</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Hourly Rate</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>10\$/hr</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Total Projects</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>230</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>English Level</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <label>Availability</label>
                            </div>
                            <div class=\"col-md-6\">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <label>Your Bio</label><br/>
                                <p>Your detail description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>", "user/templateProfilOriginale.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\user\\templateProfilOriginale.html.twig");
    }
}
