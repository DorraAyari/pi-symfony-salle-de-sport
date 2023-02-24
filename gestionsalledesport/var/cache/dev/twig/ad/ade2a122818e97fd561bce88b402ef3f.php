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

/* frontcoach/cours.html.twig */
class __TwigTemplate_ea589266a6a5fa289b34defda0f62e82 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontcoach/cours.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontcoach/cours.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "frontcoach/cours.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <!-- Class Details Section Begin -->
    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Classes detail</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <a href=\"#\">Classes</a>
                            <span>Body building</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class=\"class-details-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"class-details-text\">
                        <div class=\"cd-pic\">
                            <img src=\"front/img/classes/class-details/class-detailsl.jpg\" alt=\"\">
                        </div>
                        <div class=\"cd-text\">
                            <div class=\"cd-single-item\">
                                <h3>Body buiding</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua accusantium doloremque
                                    laudantium. Excepteur sint occaecat cupidatat non proident sculpa.</p>
                            </div>
                            <div class=\"cd-single-item\">
                                <h3>Trainer</h3>
                                <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur officia
                                    deserunt mollit.</p>
                            </div>
                        </div>
                        <div class=\"cd-trainer\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"cd-trainer-pic\">
                                        <img src=\"front/img/classes/class-details/trainer-profile.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"cd-trainer-text\">
                                        <div class=\"trainer-title\">
                                            <h4>Athart Rachel</h4>
                                            <span>Gym Trainer</span>
                                        </div>
                                        <div class=\"trainer-social\">
                                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                                            <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua viverra maecenas lacus
                                            vel facilisis.</p>
                                        <ul class=\"trainer-info\">
                                            <li><span>Age</span>35</li>
                                            <li><span>Weight</span>148lbs</li>
                                            <li><span>Height</span>10' 2``</li>
                                            <li><span>Occupation</span>no-founder</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua viverra maecenas lacus
                                            vel facilisis. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"sidebar-option\">
                        <div class=\"so-categories\">
                            <h5 class=\"title\">Categories</h5>
                            <ul>
                                <li><a href=\"#\">Yoga <span>12</span></a></li>
                                <li><a href=\"#\">Runing <span>32</span></a></li>
                                <li><a href=\"#\">Weightloss <span>86</span></a></li>
                                <li><a href=\"#\">Cario <span>25</span></a></li>
                                <li><a href=\"#\">Body buiding <span>36</span></a></li>
                                <li><a href=\"#\">Nutrition <span>15</span></a></li>
                            </ul>
                        </div>
                        <div class=\"so-latest\">
                            <h5 class=\"title\">Latest posts</h5>
                            <div class=\"latest-large set-bg\" data-setbg=\"img/letest-blog/latest-1.jpg\">
                                <div class=\"ll-text\">
                                    <h5><a href=\"#\">This Japanese Way of Making Iced Coffee Is a Game...</a></h5>
                                    <ul>
                                        <li>Aug 20, 2019</li>
                                        <li>20 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"front/img/letest-blog/latest-2.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"#\">Grilled Potato and Green Bean Salad</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"front/img/letest-blog/latest-3.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"#\">The \$8 French Rosé I Buy in Bulk Every Summer</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"front/img/letest-blog/latest-4.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"#\">Ina Garten's Skillet-Roasted Lemon Chicken</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"front/img/letest-blog/latest-5.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"#\">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"so-banner set-bg\" data-setbg=\"front/img/sidebar-banner.jpg\">
                            <h5>Banner 300x300</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Class Details Section End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "frontcoach/cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends \"front/base.html.twig\" %}
{% block body %}

    <!-- Class Details Section Begin -->
    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Classes detail</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <a href=\"#\">Classes</a>
                            <span>Body building</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class=\"class-details-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"class-details-text\">
                        <div class=\"cd-pic\">
                            <img src=\"front/img/classes/class-details/class-detailsl.jpg\" alt=\"\">
                        </div>
                        <div class=\"cd-text\">
                            <div class=\"cd-single-item\">
                                <h3>Body buiding</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua accusantium doloremque
                                    laudantium. Excepteur sint occaecat cupidatat non proident sculpa.</p>
                            </div>
                            <div class=\"cd-single-item\">
                                <h3>Trainer</h3>
                                <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur officia
                                    deserunt mollit.</p>
                            </div>
                        </div>
                        <div class=\"cd-trainer\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"cd-trainer-pic\">
                                        <img src=\"front/img/classes/class-details/trainer-profile.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"cd-trainer-text\">
                                        <div class=\"trainer-title\">
                                            <h4>Athart Rachel</h4>
                                            <span>Gym Trainer</span>
                                        </div>
                                        <div class=\"trainer-social\">
                                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                                            <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua viverra maecenas lacus
                                            vel facilisis.</p>
                                        <ul class=\"trainer-info\">
                                            <li><span>Age</span>35</li>
                                            <li><span>Weight</span>148lbs</li>
                                            <li><span>Height</span>10' 2``</li>
                                            <li><span>Occupation</span>no-founder</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua viverra maecenas lacus
                                            vel facilisis. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"sidebar-option\">
                        <div class=\"so-categories\">
                            <h5 class=\"title\">Categories</h5>
                            <ul>
                                <li><a href=\"#\">Yoga <span>12</span></a></li>
                                <li><a href=\"#\">Runing <span>32</span></a></li>
                                <li><a href=\"#\">Weightloss <span>86</span></a></li>
                                <li><a href=\"#\">Cario <span>25</span></a></li>
                                <li><a href=\"#\">Body buiding <span>36</span></a></li>
                                <li><a href=\"#\">Nutrition <span>15</span></a></li>
                            </ul>
                        </div>
                        <div class=\"so-latest\">
                            <h5 class=\"title\">Latest posts</h5>
                            <div class=\"latest-large set-bg\" data-setbg=\"img/letest-blog/latest-1.jpg\">
                                <div class=\"ll-text\">
                                    <h5><a href=\"#\">This Japanese Way of Making Iced Coffee Is a Game...</a></h5>
                                    <ul>
                                        <li>Aug 20, 2019</li>
                                        <li>20 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"front/img/letest-blog/latest-2.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"#\">Grilled Potato and Green Bean Salad</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"front/img/letest-blog/latest-3.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"#\">The \$8 French Rosé I Buy in Bulk Every Summer</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"front/img/letest-blog/latest-4.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"#\">Ina Garten's Skillet-Roasted Lemon Chicken</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"front/img/letest-blog/latest-5.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"#\">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"so-banner set-bg\" data-setbg=\"front/img/sidebar-banner.jpg\">
                            <h5>Banner 300x300</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Class Details Section End -->
{% endblock %}", "frontcoach/cours.html.twig", "C:\\Users\\user\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\frontcoach\\cours.html.twig");
    }
}
