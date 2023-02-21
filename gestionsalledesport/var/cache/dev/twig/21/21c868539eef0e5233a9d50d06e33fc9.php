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

/* frontcours/coach.html.twig */
class __TwigTemplate_c1d2846890b3073e49034ac10f1fdd92 extends Template
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
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontcours/coach.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontcours/coach.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "frontcours/coach.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"breadcrumb-section set-bg\" data-setbg=\"front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Our Team</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <span>Our team</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section Begin -->
    <section class=\"team-section team-page spad\">
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
 
                <div class=\"col-lg-4 col-sm-6\">
                     ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coachs"]) || array_key_exists("coachs", $context) ? $context["coachs"] : (function () { throw new RuntimeError('Variable "coachs" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 39
            echo "
                    <div class=\"ts-item set-bg\" >

   <div class=\"ts-item set-bg\"> <img  src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["coach"], "image", [], "any", false, false, false, 42))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "image", [], "any", false, false, false, 42), "html", null, true);
            echo "\"/> 

                        <div class=\"ts_text\">
                            <h4>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 45), "html", null, true);
            echo " </h4>
                            <span>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "</span>
                            <div class=\"tt_social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                                <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
             
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
                </div>
            </div>
        </div>
       
    </section>

 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "frontcours/coach.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 59,  125 => 46,  121 => 45,  113 => 42,  108 => 39,  104 => 38,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block body %}
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Our Team</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <span>Our team</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section Begin -->
    <section class=\"team-section team-page spad\">
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
 
                <div class=\"col-lg-4 col-sm-6\">
                     {% for coach in coachs %}

                    <div class=\"ts-item set-bg\" >

   <div class=\"ts-item set-bg\"> <img  src=\"{{ asset('uploads/' ~ coach.image) }}\" alt=\"{{ coach.image }}\"/> 

                        <div class=\"ts_text\">
                            <h4>{{ coach.nom }} </h4>
                            <span>{{ coach.description }}</span>
                            <div class=\"tt_social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                                <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
             
                      {% endfor %}

                </div>
            </div>
        </div>
       
    </section>

 {% endblock %}", "frontcours/coach.html.twig", "C:\\Users\\EMNA\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\frontcours\\coach.html.twig");
    }
}
