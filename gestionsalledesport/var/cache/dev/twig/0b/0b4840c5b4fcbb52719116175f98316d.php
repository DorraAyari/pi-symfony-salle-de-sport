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

/* base.html.twig */
class __TwigTemplate_d37d1c3621cb1b31c9f974580366ac09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <link rel=\"stylesheet\" href=\"front/css/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/flaticon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/owl.carousel.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/barfiller.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/magnific-popup.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/slicknav.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/style.css\" type=\"text/css\">
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
                <li ><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                <li><a  href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" >About Us</a></li>
                            <li><a href=\"./class-details.html\">Classes</a></li>
                            <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack");
        echo "\">Packs</a></li>
                            <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach");
        echo "\">Our Team</a></li>
      
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
";
        // line 73
        $this->displayBlock('header', $context, $blocks);
        // line 131
        echo "    <!-- Hero Section Begin -->
    <section class=\"hero-section\">
        <div class=\"hs-slider owl-carousel\">
            <div class=\"hs-item set-bg\" data-setbg=\"front/img/hero/hero-1.jpg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hs-item set-bg\" data-setbg=\"front/img/hero/hero-2.jpg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class=\"choseus-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-034-stationary-bike\"></span>
                        <h4>Modern equipment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-033-juice\"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-002-dumbell\"></span>
                        <h4>Proffesponal training plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-014-heart-beat\"></span>
                        <h4>Unique to your needs</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class=\"classes-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"front/img/classes/class-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Weightlifting</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"front/img/classes/class-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"front/img/classes/class-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Kettlebell power</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"front/img/classes/class-4.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h4>Indoor cycling</h4>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"front/img/classes/class-5.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Training</span>
                            <h4>Boxing</h4>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    <section class=\"banner-section set-bg\" data-setbg=\"front/img/banner-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"bs-text\">
                        <h2>registration now to get more deals</h2>
                        <div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
                        <a href=\"#\" class=\"primary-btn  btn-normal\">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class=\"pricing-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>Class drop-in</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 39.0</h2>
                            <span>SINGLE CLASS</span>
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
                        <h3>12 Month unlimited</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 99.0</h2>
                            <span>SINGLE CLASS</span>
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
                        <h3>6 Month unlimited</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 59.0</h2>
                            <span>SINGLE CLASS</span>
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

    <!-- Gallery Section Begin -->
    <div class=\"gallery-section\">
        <div class=\"gallery\">
            <div class=\"grid-sizer\"></div>
            <div class=\"gs-item grid-wide set-bg\" data-setbg=\"front/img/gallery/gallery-1.jpg\">
                <a href=\"img/gallery/gallery-1.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"front/img/gallery/gallery-2.jpg\">
                <a href=\"img/gallery/gallery-2.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"front/img/gallery/gallery-3.jpg\">
                <a href=\"img/gallery/gallery-3.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"front/img/gallery/gallery-4.jpg\">
                <a href=\"img/gallery/gallery-4.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"front/img/gallery/gallery-5.jpg\">
                <a href=\"img/gallery/gallery-5.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item grid-wide set-bg\" data-setbg=\"front/img/gallery/gallery-6.jpg\">
                <a href=\"img/gallery/gallery-6.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class=\"team-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"team-title\">
                        <div class=\"section-title\">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                        <a href=\"#\" class=\"primary-btn btn-normal appoinment-btn\">appointment</a>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"ts-slider owl-carousel\">
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-1.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-2.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-3.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-4.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-5.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-6.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
";
        // line 475
        $this->displayBlock('footer', $context, $blocks);
        // line 592
        echo "    <!-- Js Plugins -->
    <script src=\"front/js/jquery-3.3.1.min.js\"></script>
    <script src=\"front/js/bootstrap.min.js\"></script>
    <script src=\"front/js/jquery.magnific-popup.min.js\"></script>
    <script src=\"front/js/masonry.pkgd.min.js\"></script>
    <script src=\"front/js/jquery.barfiller.js\"></script>
    <script src=\"front/js/jquery.slicknav.js\"></script>
    <script src=\"front/js/owl.carousel.min.js\"></script>
    <script src=\"front/js/main.js\"></script>



</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 73
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 74
        echo "
    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"logo\">
                        <a href=\"./index.html\">
                            <img style=\"width:60px;height:60px;\" src=\"front/img/logo.png\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"nav-menu\">
                        <ul>
                            <li ><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                <li><a  href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" >About Us</a></li>
                            <li><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours");
        echo "\">Classes</a></li>
                            <li><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pack");
        echo "\">Packs</a></li>
                            <li><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach");
        echo "\">Coach</a></li>

                            <li><a  href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\" >Blog</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"./about-us.html\">About us</a></li>
                                    <li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning");
        echo "\">Classes timetable</a></li>
                                    <li><a href=\"./bmi-calculator.html\">Bmi calculate</a></li>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 475
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 476
        echo "    <!-- Get In Touch Section Begin -->
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
                            <a href=\"#\"><img style=\"width:60px;height:60px;\" src=\"front/img/logo.png\" alt=\"\"></a>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 476,  602 => 475,  560 => 99,  553 => 95,  548 => 93,  544 => 92,  540 => 91,  536 => 90,  532 => 89,  515 => 74,  505 => 73,  481 => 592,  479 => 475,  133 => 131,  131 => 73,  102 => 47,  98 => 46,  93 => 44,  89 => 43,  45 => 1,);
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
    <link rel=\"stylesheet\" href=\"front/css/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/flaticon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/owl.carousel.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/barfiller.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/magnific-popup.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/slicknav.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"front/css/style.css\" type=\"text/css\">
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
                <li ><a href=\"{{ path('app_home') }}\">Home</a></li>
                <li><a  href=\"{{ path('app_about') }}\" >About Us</a></li>
                            <li><a href=\"./class-details.html\">Classes</a></li>
                            <li><a href=\"{{path('app_pack')}}\">Packs</a></li>
                            <li><a href=\"{{ path('app_coach') }}\">Our Team</a></li>
      
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
{% block header %}

    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"logo\">
                        <a href=\"./index.html\">
                            <img style=\"width:60px;height:60px;\" src=\"front/img/logo.png\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"nav-menu\">
                        <ul>
                            <li ><a href=\"{{ path('app_home') }}\">Home</a></li>
                <li><a  href=\"{{ path('app_about') }}\" >About Us</a></li>
                            <li><a href=\"{{ path('app_cours') }}\">Classes</a></li>
                            <li><a href=\"{{path('app_pack')}}\">Packs</a></li>
                            <li><a href=\"{{ path('app_coach') }}\">Coach</a></li>

                            <li><a  href=\"{{ path('app_blog') }}\" >Blog</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"./about-us.html\">About us</a></li>
                                    <li><a href=\"{{ path('app_planning') }}\">Classes timetable</a></li>
                                    <li><a href=\"./bmi-calculator.html\">Bmi calculate</a></li>
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
{% endblock %}
    <!-- Hero Section Begin -->
    <section class=\"hero-section\">
        <div class=\"hs-slider owl-carousel\">
            <div class=\"hs-item set-bg\" data-setbg=\"front/img/hero/hero-1.jpg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hs-item set-bg\" data-setbg=\"front/img/hero/hero-2.jpg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class=\"choseus-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-034-stationary-bike\"></span>
                        <h4>Modern equipment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-033-juice\"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-002-dumbell\"></span>
                        <h4>Proffesponal training plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-014-heart-beat\"></span>
                        <h4>Unique to your needs</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class=\"classes-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"front/img/classes/class-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Weightlifting</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"front/img/classes/class-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"front/img/classes/class-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Kettlebell power</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"front/img/classes/class-4.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h4>Indoor cycling</h4>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"front/img/classes/class-5.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Training</span>
                            <h4>Boxing</h4>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    <section class=\"banner-section set-bg\" data-setbg=\"front/img/banner-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"bs-text\">
                        <h2>registration now to get more deals</h2>
                        <div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
                        <a href=\"#\" class=\"primary-btn  btn-normal\">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class=\"pricing-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>Class drop-in</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 39.0</h2>
                            <span>SINGLE CLASS</span>
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
                        <h3>12 Month unlimited</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 99.0</h2>
                            <span>SINGLE CLASS</span>
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
                        <h3>6 Month unlimited</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 59.0</h2>
                            <span>SINGLE CLASS</span>
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

    <!-- Gallery Section Begin -->
    <div class=\"gallery-section\">
        <div class=\"gallery\">
            <div class=\"grid-sizer\"></div>
            <div class=\"gs-item grid-wide set-bg\" data-setbg=\"front/img/gallery/gallery-1.jpg\">
                <a href=\"img/gallery/gallery-1.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"front/img/gallery/gallery-2.jpg\">
                <a href=\"img/gallery/gallery-2.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"front/img/gallery/gallery-3.jpg\">
                <a href=\"img/gallery/gallery-3.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"front/img/gallery/gallery-4.jpg\">
                <a href=\"img/gallery/gallery-4.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"front/img/gallery/gallery-5.jpg\">
                <a href=\"img/gallery/gallery-5.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item grid-wide set-bg\" data-setbg=\"front/img/gallery/gallery-6.jpg\">
                <a href=\"img/gallery/gallery-6.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class=\"team-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"team-title\">
                        <div class=\"section-title\">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                        <a href=\"#\" class=\"primary-btn btn-normal appoinment-btn\">appointment</a>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"ts-slider owl-carousel\">
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-1.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-2.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-3.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-4.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-5.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"front/img/team/team-6.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
{% block footer %}
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
                            <a href=\"#\"><img style=\"width:60px;height:60px;\" src=\"front/img/logo.png\" alt=\"\"></a>
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
{% endblock %}
    <!-- Js Plugins -->
    <script src=\"front/js/jquery-3.3.1.min.js\"></script>
    <script src=\"front/js/bootstrap.min.js\"></script>
    <script src=\"front/js/jquery.magnific-popup.min.js\"></script>
    <script src=\"front/js/masonry.pkgd.min.js\"></script>
    <script src=\"front/js/jquery.barfiller.js\"></script>
    <script src=\"front/js/jquery.slicknav.js\"></script>
    <script src=\"front/js/owl.carousel.min.js\"></script>
    <script src=\"front/js/main.js\"></script>



</body>

</html>", "base.html.twig", "C:\\Users\\Lenovo\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\base.html.twig");
    }
}
