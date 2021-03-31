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

/* tempFront2SoinMP.html.twig */
class __TwigTemplate_1141eab9cc4763d87d2304a265d2d4aa85c126d3bf3c778232d6bcbd3a809c31 extends Template
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
        // line 1
        echo "<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"footer-col\">
                    <h3 class=\"footer-title\">About</h3>
                    <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rhoncus enim accumsan, pellentesque ex vitae, lobortis lorem. Cras et suscipit mauris. Aliquam ultrices diam ullamcorper dui tempus laoreet. </p>
                </div>
            </div>
            <div class=\"col-md-3 col-lg-2\">
                <div class=\"footer-col\">
                    <h3 class=\"footer-title\">Products</h3>
                    <ul class=\"list-unstyled footer-list mb-0\">
                        <li><a href=\"#\">AI Bots </a></li>
                        <li><a href=\"#\">HR Management</a></li>
                        <li><a href=\"#\">Project Management</a></li>
                        <li><a href=\"#\">CRM</a></li>
                        <li><a href=\"#\">eCommerce</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 col-lg-2\">
                <div class=\"footer-col\">
                    <h3 class=\"footer-title\">Support</h3>
                    <ul class=\"list-unstyled footer-list mb-0\">
                        <li><a href=\"#\">Contact</a></li>
                        <li><a href=\"#\">Support</a></li>
                        <li><a href=\"#\">Forum</a></li>
                        <li><a href=\"#\">FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"footer-col\">
                    <h3 class=\"footer-title\">Contact</h3>
                    <p><i class=\"fas fa-home mr-2\"></i> 342 Maxwell Lane, Plangton, 128231</p>
                    <p><a href=\"tel:+14336331111\"><i class=\"fas fa-phone mr-2\"></i> +1-434-633-1111</a> </p>
                    <p class=\"mb-0\"><a href=\"mailto:contact@angrystudio.com\"><i class=\"far fa-envelope mr-2\"></i> contact@angrystudio.com</a> </p>
                </div>
            </div>
        </div>
        <div class=\"row footer-credits\">
            <div class=\"col-sm-12 col-md-6 justify-content-center align-self-center\">
                <p class=\"mb-0\">2020 &copy; <a href=\"#\">Kabba</a></p>
            </div>
            <div class=\"col-sm-12 col-md-6\">
                <div class=\"footer-credits-nav\">
                    <ul class=\"nav justify-content-end\">
                        <li class=\"nav-item\"><a href=\"#\" class=\"nav-link footer-fb\">TOS</a></li>
                        <li class=\"nav-item\"><a href=\"#\" class=\"nav-link footer-ig\">Privacy</a></li>
                        <li class=\"nav-item\"><a href=\"#\" class=\"nav-link footer-yt\">Disclaimer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(function () {
        'use strict'

        \$('[data-toggle=\"offcanvas\"]').on('click', function () {
            \$('.hk-offcanvas').toggleClass('open')
        })
    })
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "tempFront2SoinMP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 59,  96 => 58,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tempFront2SoinMP.html.twig", "C:\\Users\\USER\\Pi-dev\\ProjetPidev\\templates\\tempFront2SoinMP.html.twig");
    }
}
