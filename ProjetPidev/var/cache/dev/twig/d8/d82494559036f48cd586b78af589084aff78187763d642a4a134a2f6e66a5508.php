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

/* templateFront.html.twig */
class __TwigTemplate_8b4ce5d28bf1298fc1e6c570f49a82b81167a3dcc59a115aaa71ed3628e9d585 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateFront.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <title>Kabba - Free Bootstrap 4 Template</title>
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <!-- Meta Tags -->
    <meta name=\"description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <!--  Search Engine Tags -->
    <meta itemprop=\"name\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta itemprop=\"description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta itemprop=\"image\" content=\"https://angrystudio.com/featured-image.png\">
    <!-- Facebook OG Meta Tags -->
    <meta property=\"og:url\" content=\"https://angrystudio.com/\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta property=\"og:description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta property=\"og:image\" content=\"https://angrystudio.com/featured-image.png\">
    <!-- Twitter Cards Meta Tags -->
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta name=\"twitter:description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta name=\"twitter:image\" content=\"https://angrystudio.com/featured-image.png\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"assets/css/style.css\" rel=\"stylesheet\">
</head>
<body>
<header class=\"hk-header\">
    <nav class=\"navbar navbar-expand-lg fixed-top navbar-light hk-navbar\">
        <div class=\"container\">
            <!--<a class=\"navbar-brand\" href=\"#\"><img src=\"assets/images/brand.png\"></a>-->
            <a class=\"navbar-brand\" href=\"#\">KABBA</a>
            <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"navbar-collapse hk-offcanvas\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">About</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Portfolio</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Services</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"dropdown-item\" href=\"#\">Digital Marketing</a>
                            <a class=\"dropdown-item\" href=\"#\">UI Design</a>
                            <a class=\"dropdown-item\" href=\"#\">Graphics Design</a>
                            <a class=\"dropdown-item\" href=\"#\">Branding</a>
                            <a class=\"dropdown-item\" href=\"#\">WordPress Websites</a>
                            <a class=\"dropdown-item\" href=\"#\">Custom Web Apps</a>
                            <a class=\"dropdown-item\" href=\"#\">App Development</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contact</a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"far fa-user\"></i> My Account</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"dropdown-item\" href=\"#\">Profile</a>
                            <a class=\"dropdown-item\" href=\"#\">Edit Account</a>
                            <a class=\"dropdown-item\" href=\"#\">Logout</a>
                        </div>
                    </li>
                </ul>
                <span class=\"navbar-text hk-header-social\">
                  <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                  </span>
            </div>
        </div>
    </nav>
</header>
<section class=\"hero-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                <div class=\"hero-content\">
                    <span class=\"hero-pretext text-uppercase\">Design your Dreams</span>
                    <h1 class=\"hero-title\">Full Responsive Bootstrap Based Website Template</h1>
                    <p class=\"hero-subtitle\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem eu est ullamcorper convallis.</p>
                    <div class=\"hero-btns\">
                        <a href=\"#\" class=\"btn btn-main\">Browse Now <i class=\"fas fa-chevron-right\"></i></a>
                        <a href=\"#\" class=\"btn btn-main-outline ml-2\">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                <div class=\"hero-image d-flex align-items-center h-100\">
                    <img src=\"assets/images/hero.svg\">
                </div>
            </div>
        </div>
    </div>
</section>

    <section class=\"services-section hk-section section-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\">Our Services</h2>
                <p class=\"section-subtitle mt-3\">Fusce quis dapibus nisi. Duis quis elit vestibulum, rutrum neque dictum, cursus eros.</p>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fab fa-sketch\"></i></div>
                    <h3 class=\"service-box-title\">Design</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fas fa-vector-square\"></i></div>
                    <h3 class=\"service-box-title\">Branding</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fas fa-laptop-code\"></i></div>
                    <h3 class=\"service-box-title\">Development</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fas fa-signal\"></i></div>
                    <h3 class=\"service-box-title\">SEO</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fab fa-facebook\"></i></div>
                    <h3 class=\"service-box-title\">SMM</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fas fa-funnel-dollar\"></i></div>
                    <h3 class=\"service-box-title\">PPC</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
        </div>
</section>
<section class=\"portfolio hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\">Our Work</h2>
                <p class=\"section-subtitle mt-3\">Fusce quis dapibus nisi. Duis quis elit vestibulum, rutrum neque dictum, cursus eros.</p>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p1.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\"><i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p2.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p3.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p4.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p5.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p6.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p7.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p8.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
        </div>
</section>
<section class=\"feature-box-section hk-section section-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"feature-box-img d-flex align-items-center h-100\">
                    <img src=\"assets/images/opensource.svg\">
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"feature-box\">
                    <span class=\"feature-box-pre text-uppercase\">Community Supported</span>
                    <h2 class=\"mb-3 feature-box-title\">Open Source Templates</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href=\"#\" class=\"feature-box-cta\">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"feature-box-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 order-lg-2 order-xl-2\">
                <div class=\"feature-box-img d-flex align-items-center h-100\">
                    <img src=\"assets/images/responsive.svg\">
                </div>
            </div>
            <div class=\"col-lg-6 order-lg-1 order-xl-1\">
                <div class=\"feature-box\">
                    <span class=\"feature-box-pre text-uppercase\">Enjoy On Every Device</span>
                    <h2 class=\"mb-3 feature-box-title\">100% Responsive Design</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href=\"#\" class=\"feature-box-cta\">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"feature-box-section hk-section section-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"feature-box-img d-flex align-items-center h-100\">
                    <img src=\"assets/images/minimal.svg\">
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"feature-box\">
                    <span class=\"feature-box-pre text-uppercase\">We Always Create</span>
                    <h2 class=\"mb-3 feature-box-title\">Minimal Design With Clean Code</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href=\"#\" class=\"feature-box-cta\">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"cta-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"cta-box text-center\">
                    <h2 class=\"cta-box-title\">Want to Discuss Something?</h2>
                    <p class=\"mt-3 cta-box-txt\">Small block of text to support above given fat heading text, with some catchy lines and keywords. </p>
                    <a href=\"#\" class=\"btn btn-main btn-lg py-2 px-5 mt-4 font-weight-bold\">Contact us </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"hk-testimnonials hk-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"section-title\">Testimonials</h2>
                <p class=\"section-subtitle mt-3\">Fusce quis dapibus nisi. Duis quis elit vestibulum, rutrum neque dictum, cursus eros.</p>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"testimonial\">
                    <img class=\"testimonial-img\" src=\"assets/images/1.jpg\">
                    <p class=\"testimonial-txt mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
                    <h4 class=\"testimonial-name font-weight-bold mb-1\">Jay V</h4>
                    <i class=\"testimonial-company mt-2\">SEO Expert</i>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"testimonial\">
                    <img class=\"testimonial-img\" src=\"assets/images/2.jpg\">
                    <p class=\"testimonial-txt mt-3\">Ut enim ad minim veniam, quis nostrud ut labore et exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <h4 class=\"testimonial-name font-weight-bold mb-1\">Tom Fuller</h4>
                    <i class=\"testimonial-company mt-2\">Art Director</i>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"testimonial\">
                    <img class=\"testimonial-img\" src=\"assets/images/3.jpg\">
                    <p class=\"testimonial-txt mt-3\">Diam sit amet nisl suscipit adipiscing. Nibh venenatis cras sed felis eget sed felis eget velit cras sed felis aliquet. </p>
                    <h4 class=\"testimonial-name font-weight-bold mb-1\">Jacob</h4>
                    <i class=\"testimonial-company mt-2\">Dev Ops Engineer</i>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class=\"footer\">
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
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "templateFront.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <title>Kabba - Free Bootstrap 4 Template</title>
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <!-- Meta Tags -->
    <meta name=\"description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <!--  Search Engine Tags -->
    <meta itemprop=\"name\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta itemprop=\"description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta itemprop=\"image\" content=\"https://angrystudio.com/featured-image.png\">
    <!-- Facebook OG Meta Tags -->
    <meta property=\"og:url\" content=\"https://angrystudio.com/\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta property=\"og:description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta property=\"og:image\" content=\"https://angrystudio.com/featured-image.png\">
    <!-- Twitter Cards Meta Tags -->
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"Angry Studio - Free Website Templates, UI Snippets and Web Dev Tutorials\">
    <meta name=\"twitter:description\" content=\"Angry Studio is a platform for web designers and developers where we share free website templates, UI snippets and high-quality web dev tutorials.\">
    <meta name=\"twitter:image\" content=\"https://angrystudio.com/featured-image.png\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"assets/css/style.css\" rel=\"stylesheet\">
</head>
<body>
<header class=\"hk-header\">
    <nav class=\"navbar navbar-expand-lg fixed-top navbar-light hk-navbar\">
        <div class=\"container\">
            <!--<a class=\"navbar-brand\" href=\"#\"><img src=\"assets/images/brand.png\"></a>-->
            <a class=\"navbar-brand\" href=\"#\">KABBA</a>
            <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"navbar-collapse hk-offcanvas\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">About</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Portfolio</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Services</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"dropdown-item\" href=\"#\">Digital Marketing</a>
                            <a class=\"dropdown-item\" href=\"#\">UI Design</a>
                            <a class=\"dropdown-item\" href=\"#\">Graphics Design</a>
                            <a class=\"dropdown-item\" href=\"#\">Branding</a>
                            <a class=\"dropdown-item\" href=\"#\">WordPress Websites</a>
                            <a class=\"dropdown-item\" href=\"#\">Custom Web Apps</a>
                            <a class=\"dropdown-item\" href=\"#\">App Development</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Contact</a>
                    </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"https://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"far fa-user\"></i> My Account</a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <a class=\"dropdown-item\" href=\"#\">Profile</a>
                            <a class=\"dropdown-item\" href=\"#\">Edit Account</a>
                            <a class=\"dropdown-item\" href=\"#\">Logout</a>
                        </div>
                    </li>
                </ul>
                <span class=\"navbar-text hk-header-social\">
                  <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                  <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                  </span>
            </div>
        </div>
    </nav>
</header>
<section class=\"hero-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 order-lg-1 order-xl-1 order-sm-1 order-2\">
                <div class=\"hero-content\">
                    <span class=\"hero-pretext text-uppercase\">Design your Dreams</span>
                    <h1 class=\"hero-title\">Full Responsive Bootstrap Based Website Template</h1>
                    <p class=\"hero-subtitle\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem eu est ullamcorper convallis.</p>
                    <div class=\"hero-btns\">
                        <a href=\"#\" class=\"btn btn-main\">Browse Now <i class=\"fas fa-chevron-right\"></i></a>
                        <a href=\"#\" class=\"btn btn-main-outline ml-2\">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 order-lg-2 order-xl-2 order-sm-2 order-1\">
                <div class=\"hero-image d-flex align-items-center h-100\">
                    <img src=\"assets/images/hero.svg\">
                </div>
            </div>
        </div>
    </div>
</section>

    <section class=\"services-section hk-section section-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\">Our Services</h2>
                <p class=\"section-subtitle mt-3\">Fusce quis dapibus nisi. Duis quis elit vestibulum, rutrum neque dictum, cursus eros.</p>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fab fa-sketch\"></i></div>
                    <h3 class=\"service-box-title\">Design</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fas fa-vector-square\"></i></div>
                    <h3 class=\"service-box-title\">Branding</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fas fa-laptop-code\"></i></div>
                    <h3 class=\"service-box-title\">Development</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fas fa-signal\"></i></div>
                    <h3 class=\"service-box-title\">SEO</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fab fa-facebook\"></i></div>
                    <h3 class=\"service-box-title\">SMM</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"service-box text-center\">
                    <div class=\"service-box-icon\"><i class=\"fas fa-funnel-dollar\"></i></div>
                    <h3 class=\"service-box-title\">PPC</h3>
                    <p class=\"service-box-desc\">Phasellus ultrices euismod ligula, id placerat sem placerat vel. Nulla sit amet lorem.</p>
                    <a href=\"#\" class=\"btn btn-main-outline mt-2\">Read More <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            </div>
        </div>
</section>
<section class=\"portfolio hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2 class=\"section-title\">Our Work</h2>
                <p class=\"section-subtitle mt-3\">Fusce quis dapibus nisi. Duis quis elit vestibulum, rutrum neque dictum, cursus eros.</p>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p1.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\"><i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p2.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p3.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p4.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p5.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p6.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p7.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
            <div class=\"col-6 col-md-6 col-lg-3 port-col\">
                <div class=\"portfolio-item\">
                    <img src=\"assets/images/p8.jpg\" class=\"img-fluid\">
                    <span class=\"portfolio-overlay\">
                  <i class=\"far fa-eye\"></i>
                  </span>
                </div>
            </div>
        </div>
</section>
<section class=\"feature-box-section hk-section section-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"feature-box-img d-flex align-items-center h-100\">
                    <img src=\"assets/images/opensource.svg\">
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"feature-box\">
                    <span class=\"feature-box-pre text-uppercase\">Community Supported</span>
                    <h2 class=\"mb-3 feature-box-title\">Open Source Templates</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href=\"#\" class=\"feature-box-cta\">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"feature-box-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 order-lg-2 order-xl-2\">
                <div class=\"feature-box-img d-flex align-items-center h-100\">
                    <img src=\"assets/images/responsive.svg\">
                </div>
            </div>
            <div class=\"col-lg-6 order-lg-1 order-xl-1\">
                <div class=\"feature-box\">
                    <span class=\"feature-box-pre text-uppercase\">Enjoy On Every Device</span>
                    <h2 class=\"mb-3 feature-box-title\">100% Responsive Design</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href=\"#\" class=\"feature-box-cta\">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"feature-box-section hk-section section-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"feature-box-img d-flex align-items-center h-100\">
                    <img src=\"assets/images/minimal.svg\">
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"feature-box\">
                    <span class=\"feature-box-pre text-uppercase\">We Always Create</span>
                    <h2 class=\"mb-3 feature-box-title\">Minimal Design With Clean Code</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href=\"#\" class=\"feature-box-cta\">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"cta-section hk-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"cta-box text-center\">
                    <h2 class=\"cta-box-title\">Want to Discuss Something?</h2>
                    <p class=\"mt-3 cta-box-txt\">Small block of text to support above given fat heading text, with some catchy lines and keywords. </p>
                    <a href=\"#\" class=\"btn btn-main btn-lg py-2 px-5 mt-4 font-weight-bold\">Contact us </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"hk-testimnonials hk-section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"section-title\">Testimonials</h2>
                <p class=\"section-subtitle mt-3\">Fusce quis dapibus nisi. Duis quis elit vestibulum, rutrum neque dictum, cursus eros.</p>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"testimonial\">
                    <img class=\"testimonial-img\" src=\"assets/images/1.jpg\">
                    <p class=\"testimonial-txt mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
                    <h4 class=\"testimonial-name font-weight-bold mb-1\">Jay V</h4>
                    <i class=\"testimonial-company mt-2\">SEO Expert</i>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"testimonial\">
                    <img class=\"testimonial-img\" src=\"assets/images/2.jpg\">
                    <p class=\"testimonial-txt mt-3\">Ut enim ad minim veniam, quis nostrud ut labore et exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <h4 class=\"testimonial-name font-weight-bold mb-1\">Tom Fuller</h4>
                    <i class=\"testimonial-company mt-2\">Art Director</i>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"testimonial\">
                    <img class=\"testimonial-img\" src=\"assets/images/3.jpg\">
                    <p class=\"testimonial-txt mt-3\">Diam sit amet nisl suscipit adipiscing. Nibh venenatis cras sed felis eget sed felis eget velit cras sed felis aliquet. </p>
                    <h4 class=\"testimonial-name font-weight-bold mb-1\">Jacob</h4>
                    <i class=\"testimonial-company mt-2\">Dev Ops Engineer</i>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class=\"footer\">
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
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/bootstrap.min.js\"></script>
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
", "templateFront.html.twig", "C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\templates\\templateFront.html.twig");
    }
}
