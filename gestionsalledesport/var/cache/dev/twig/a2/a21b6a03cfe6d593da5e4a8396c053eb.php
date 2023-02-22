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

/* package/new.html.twig */
class __TwigTemplate_6b1aab63d79bf37d1f93c81ee9494684 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/new.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>
<body id=\"page-top\">
";
        // line 30
        echo twig_include($this->env, $context, "front/includes/header.html.twig");
        echo "
";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 409
        echo twig_include($this->env, $context, "front/includes/footer.html.twig");
        echo "

";
        // line 411
        $this->displayBlock('javascripts', $context, $blocks);
        // line 424
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/flaticon.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/barfiller.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">



    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "
 <!-- Hero Section Begin -->
    <section class=\"hero-section\">
        <div class=\"hs-slider owl-carousel\">
            <div class=\"hs-item set-bg\" data-setbg=\"img/hero/hero-1.jpg\">
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

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 411
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 412
        echo "   

 <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.barfiller.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "package/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 421,  604 => 420,  600 => 419,  596 => 418,  592 => 417,  588 => 416,  584 => 415,  580 => 414,  576 => 412,  566 => 411,  180 => 32,  170 => 31,  155 => 23,  151 => 22,  147 => 21,  143 => 20,  139 => 19,  135 => 18,  131 => 17,  127 => 16,  118 => 9,  108 => 8,  89 => 7,  78 => 424,  76 => 411,  71 => 409,  69 => 31,  65 => 30,  61 => 28,  59 => 8,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}


    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/bootstrap.min.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/font-awesome.min.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/flaticon.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/owl.carousel.min.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/barfiller.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/magnific-popup.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/slicknav.min.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/style.css') }}\" type=\"text/css\">



    {% endblock %}
</head>
<body id=\"page-top\">
{{ include('front/includes/header.html.twig') }}
{% block body %}

 <!-- Hero Section Begin -->
    <section class=\"hero-section\">
        <div class=\"hs-slider owl-carousel\">
            <div class=\"hs-item set-bg\" data-setbg=\"img/hero/hero-1.jpg\">
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

{% endblock %}
{{ include('front/includes/footer.html.twig') }}

{% block javascripts %}
   

 <script src=\"{{ asset('front/js/jquery-3.3.1.min.js') }}\"></script>
    <script src=\"{{ asset('front/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('front/js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('front/js/masonry.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('front/js/jquery.barfiller.js') }}\"></script>
    <script src=\"{{ asset('front/js/jquery.slicknav.js') }}\"></script>
    <script src=\"{{ asset('front/js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('front/js/main.js') }}\"></script>

{% endblock %}
</body>
</html>", "package/new.html.twig", "C:\\Users\\Lenovo\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\package\\new.html.twig");
    }
}
