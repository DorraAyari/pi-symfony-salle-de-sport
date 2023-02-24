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

/* front/includes/header.html.twig */
class __TwigTemplate_3b6f77bc3b63e9c3e34a8eeabc19388a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/header.html.twig"));

        // line 1
        echo "<!-- Header Section Begin -->
<header class=\"header-section\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"logo\">
                    <a href=\"./index.html\">
                        <img style=\"width:60px;height:60px;\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <nav class=\"nav-menu\">
                    <ul>
                        <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">About Us</a></li>
                        <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours");
        echo "\">Classes</a></li>
                        <li><a href=\"./services.html\">Services</a></li>
                        <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach");
        echo "\">Our Team</a></li>
                        <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listblog");
        echo "\">Our blog</a></li>
                        <li><a href=\"./contact.html\">Contact</a></li>
                        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">Profile</a></li>";
        }
        // line 23
        echo "                        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a></li>";
        }
        // line 24
        echo "                        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li>";
        }
        // line 25
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a></li>";
        }
        // line 26
        echo "                    </ul>
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


</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 26,  104 => 25,  97 => 24,  90 => 23,  84 => 22,  79 => 20,  75 => 19,  70 => 17,  66 => 16,  62 => 15,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header Section Begin -->
<header class=\"header-section\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"logo\">
                    <a href=\"./index.html\">
                        <img style=\"width:60px;height:60px;\" src=\"{{ asset('front/img/logo.png') }}\" alt=\"\">
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <nav class=\"nav-menu\">
                    <ul>
                        <li><a href=\"{{ path('app_home') }}\">Home</a></li>
                        <li><a href=\"{{ path('app_about') }}\">About Us</a></li>
                        <li><a href=\"{{ path('app_cours') }}\">Classes</a></li>
                        <li><a href=\"./services.html\">Services</a></li>
                        <li><a href=\"{{ path('app_coach') }}\">Our Team</a></li>
                        <li><a href=\"{{ path('listblog') }}\">Our blog</a></li>
                        <li><a href=\"./contact.html\">Contact</a></li>
                        {% if app.user %}<li><a href=\"{{ path('app_profile') }}\">Profile</a></li>{% endif %}
                        {% if not app.user %}<li><a href=\"{{ path('app_register') }}\">Inscription</a></li>{% endif %}
                        {% if not app.user %}<li><a href=\"{{ path('app_login') }}\">Connexion</a></li>{% endif %}
                        {% if app.user %}<li><a href=\"{{ path('app_logout') }}\">Deconnexion</a></li>{% endif %}
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


</div>
", "front/includes/header.html.twig", "C:\\Users\\user\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\front\\includes\\header.html.twig");
    }
}
