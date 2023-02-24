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

/* pack/Pack.html.twig */
class __TwigTemplate_bb39554a3b71d720cebedf91cc3b5562 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/Pack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pack/Pack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Gym Template\">
    <meta name=\"keywords\" content=\"Gym, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/flaticon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/barfiller.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/slicknav.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
</head>

<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class=\"offcanvas-menu-overlay\"></div>
    <div class=\"offcanvas-menu-wrapper\">
        <div class=\"canvas-close\">
            <i class=\"fa fa-close\"></i>
        </div>
        <div class=\"canvas-search search-switch\">
            <i class=\"fa fa-search\"></i>
        </div>
        <nav class=\"canvas-menu mobile-menu\">
            <ul>
                <li><a href=\"./index.html\">Home</a></li>
                <li><a  href=\"";
        // line 45
        echo "about-us.html.twig";
        echo "\">About Us</a></li>
                <li><a href=\"./classes.html\">Classes</a></li>
                <li><a href=\"./Pack.html.twig\">Packs</a></li>
                <li><a href=\"./team.html\">Our Team</a></li>
                <li><a href=\"#\">Pages</a>
                    <ul class=\"dropdown\">
                        <li><a href=\"./about-us.html\">About us</a></li>
                        <li><a href=\"./class-timetable.html\">Classes timetable</a></li>
                        <li><a href=\"./bmi-calculator.html\">Bmi calculate</a></li>
                        <li><a href=\"./team.html\">Our team</a></li>
                        <li><a href=\"./gallery.html\">Gallery</a></li>
                        <li><a href=\"./blog.html\">Our blog</a></li>
                        <li><a href=\"./404.html\">404</a></li>
                    </ul>
                </li>
                <li><a href=\"./contact.html\">Contact</a></li>
            </ul>
        </nav>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"canvas-social\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"logo\">
                        <a href=\"./index.html\">
                            <img src=\"img/logo.png\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"nav-menu\">
                        <ul>
                            <li ><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                <li><a  href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" >About Us</a></li>
                            <li><a href=\"./class-details.html\">Classes</a></li>
                            <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack");
        echo "\">Packs</a></li>
                            <li><a href=\"./team.html\">Our Team</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"./about-us.html\">About us</a></li>
                                    <li><a href=\"./class-timetable.html\">Classes timetable</a></li>
                                    <li><a href=\"./bmi-calculator.html\">Bmi calculate</a></li>
                                    <li><a href=\"./team.html\">Our team</a></li>
                                    <li><a href=\"./gallery.html\">Gallery</a></li>
                                    <li><a href=\"./blog.html\">Our blog</a></li>
                                    <li><a href=\"./404.html\">404</a></li>
                                </ul>
                            </li>
                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"top-option\">
                        <div class=\"to-search search-switch\">
                            <i class=\"fa fa-search\"></i>
                        </div>
                        <div class=\"to-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"canvas-open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Packs</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <span>Packs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    
    <!-- Pricing Section Begin -->
    <section class=\"pricing-section service-pricing spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Packs</span>
                        <h2>Choose your Pack</h2>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>Standard Pack</h3>
                        <div class=\"pi-price\">
                            <h2>DT 60</h2>
                            <span>One Month</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_member");
        echo "\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>Pro Pack</h3>
                        <div class=\"pi-price\">
                            <h2>DT 300</h2>
                            <span>Six Months </span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>Premium Pack</h3>
                        <div class=\"pi-price\">
                            <h2>DT 500</h2>
                            <span>Twelve Months</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Get In Touch Section Begin -->
    <div class=\"gettouch-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"fs-about\">
                        <div class=\"fa-logo\">
                            <a href=\"#\"><img src=\"img/logo.png\" alt=\"\"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class=\"fa-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Classes</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Support</h4>
                        <ul>
                            <li><a href=\"#\">Login</a></li>
                            <li><a href=\"#\">My account</a></li>
                            <li><a href=\"#\">Subscribe</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"fs-widget\">
                        <h4>Tips & Guides</h4>
                        <div class=\"fw-recent\">
                            <h6><a href=\"#\">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class=\"fw-recent\">
                            <h6><a href=\"#\">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"copyright-text\">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src=\"js/jquery-3.3.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"js/masonry.pkgd.min.js\"></script>
    <script src=\"js/jquery.barfiller.js\"></script>
    <script src=\"js/jquery.slicknav.js\"></script>
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/main.js\"></script>



</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pack/Pack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 174,  143 => 90,  138 => 88,  134 => 87,  89 => 45,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Gym Template\">
    <meta name=\"keywords\" content=\"Gym, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/flaticon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/barfiller.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/slicknav.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
</head>

<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class=\"offcanvas-menu-overlay\"></div>
    <div class=\"offcanvas-menu-wrapper\">
        <div class=\"canvas-close\">
            <i class=\"fa fa-close\"></i>
        </div>
        <div class=\"canvas-search search-switch\">
            <i class=\"fa fa-search\"></i>
        </div>
        <nav class=\"canvas-menu mobile-menu\">
            <ul>
                <li><a href=\"./index.html\">Home</a></li>
                <li><a  href=\"{{ 'about-us.html.twig' }}\">About Us</a></li>
                <li><a href=\"./classes.html\">Classes</a></li>
                <li><a href=\"./Pack.html.twig\">Packs</a></li>
                <li><a href=\"./team.html\">Our Team</a></li>
                <li><a href=\"#\">Pages</a>
                    <ul class=\"dropdown\">
                        <li><a href=\"./about-us.html\">About us</a></li>
                        <li><a href=\"./class-timetable.html\">Classes timetable</a></li>
                        <li><a href=\"./bmi-calculator.html\">Bmi calculate</a></li>
                        <li><a href=\"./team.html\">Our team</a></li>
                        <li><a href=\"./gallery.html\">Gallery</a></li>
                        <li><a href=\"./blog.html\">Our blog</a></li>
                        <li><a href=\"./404.html\">404</a></li>
                    </ul>
                </li>
                <li><a href=\"./contact.html\">Contact</a></li>
            </ul>
        </nav>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"canvas-social\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"logo\">
                        <a href=\"./index.html\">
                            <img src=\"img/logo.png\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"nav-menu\">
                        <ul>
                            <li ><a href=\"{{ path('app_home') }}\">Home</a></li>
                <li><a  href=\"{{ path('app_about') }}\" >About Us</a></li>
                            <li><a href=\"./class-details.html\">Classes</a></li>
                            <li><a href=\"{{path('app_pack')}}\">Packs</a></li>
                            <li><a href=\"./team.html\">Our Team</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"./about-us.html\">About us</a></li>
                                    <li><a href=\"./class-timetable.html\">Classes timetable</a></li>
                                    <li><a href=\"./bmi-calculator.html\">Bmi calculate</a></li>
                                    <li><a href=\"./team.html\">Our team</a></li>
                                    <li><a href=\"./gallery.html\">Gallery</a></li>
                                    <li><a href=\"./blog.html\">Our blog</a></li>
                                    <li><a href=\"./404.html\">404</a></li>
                                </ul>
                            </li>
                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"top-option\">
                        <div class=\"to-search search-switch\">
                            <i class=\"fa fa-search\"></i>
                        </div>
                        <div class=\"to-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"canvas-open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Packs</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <span>Packs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    
    <!-- Pricing Section Begin -->
    <section class=\"pricing-section service-pricing spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Packs</span>
                        <h2>Choose your Pack</h2>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>Standard Pack</h3>
                        <div class=\"pi-price\">
                            <h2>DT 60</h2>
                            <span>One Month</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"{{ path('app_member') }}\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>Pro Pack</h3>
                        <div class=\"pi-price\">
                            <h2>DT 300</h2>
                            <span>Six Months </span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>Premium Pack</h3>
                        <div class=\"pi-price\">
                            <h2>DT 500</h2>
                            <span>Twelve Months</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Get In Touch Section Begin -->
    <div class=\"gettouch-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"fs-about\">
                        <div class=\"fa-logo\">
                            <a href=\"#\"><img src=\"img/logo.png\" alt=\"\"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class=\"fa-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Classes</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Support</h4>
                        <ul>
                            <li><a href=\"#\">Login</a></li>
                            <li><a href=\"#\">My account</a></li>
                            <li><a href=\"#\">Subscribe</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"fs-widget\">
                        <h4>Tips & Guides</h4>
                        <div class=\"fw-recent\">
                            <h6><a href=\"#\">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class=\"fw-recent\">
                            <h6><a href=\"#\">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"copyright-text\">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src=\"js/jquery-3.3.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"js/masonry.pkgd.min.js\"></script>
    <script src=\"js/jquery.barfiller.js\"></script>
    <script src=\"js/jquery.slicknav.js\"></script>
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/main.js\"></script>



</body>

</html>", "pack/Pack.html.twig", "C:\\Users\\user\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\pack\\Pack.html.twig");
    }
}
