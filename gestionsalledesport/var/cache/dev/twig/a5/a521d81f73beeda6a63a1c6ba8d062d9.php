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

/* blog/blog.html.twig */
class __TwigTemplate_b343b483ff362aa456ba3c8a99782291 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "blog/blog.html.twig", 1);
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

    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"/front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Our Blog</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <a href=\"#\">Pages</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class=\"blog-section spad\">
    
        <div class=\"container\">
        ";
        // line 31
        echo "        ";
        // line 32
        echo "        </button>
        <br></br>
            <div class=\"row\">
            
                <div class=\"col-lg-8 p-0\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["blog"]);
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 38
            echo "                    <div class=\"blog-item\">
                      
                        <div class=\"bi-pic\">
                            <img style=\"width:300x;height:241px;\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 41))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 41), "html", null, true);
            echo "\"/>
                        </div>
                         <div class=\"bi-text\">
                            <h3 style=\"color: white;\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "nom", [], "any", false, false, false, 44), "html", null, true);
            echo "</h3>
                            <ul>
                                <li>by Admin</li>
                                <li>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "createdAt", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true);
            echo "</li>
                            </ul>
                            <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
                            ";
            // line 51
            echo "        ";
            // line 52
            echo "
                             
                             
                          </div>
                       
                               
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    ";
        // line 61
        echo "                  
                </div>
                
            </div>
        </div>
    </section>
    <!-- Blog Section End -->



 </body>

</html>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 61,  151 => 60,  138 => 52,  136 => 51,  132 => 49,  127 => 47,  121 => 44,  113 => 41,  108 => 38,  104 => 37,  97 => 32,  95 => 31,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}


{% block body %}


    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"/front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Our Blog</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <a href=\"#\">Pages</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class=\"blog-section spad\">
    
        <div class=\"container\">
        {# <butt class=\"button-blog\"></butt #}
        {# <a class=\"primary-btn pricing-btn\"  href=\"{{path('addblog')}}\" > add blog </a> #}
        </button>
        <br></br>
            <div class=\"row\">
            
                <div class=\"col-lg-8 p-0\">
                {% for blog in blog %}
                    <div class=\"blog-item\">
                      
                        <div class=\"bi-pic\">
                            <img style=\"width:300x;height:241px;\" src=\"{{ asset('uploads/' ~ blog.image) }}\" alt=\"{{ blog.image }}\"/>
                        </div>
                         <div class=\"bi-text\">
                            <h3 style=\"color: white;\">{{ blog.nom }}</h3>
                            <ul>
                                <li>by Admin</li>
                                <li>{{ blog.createdAt |date('Y-m-d')}}</li>
                            </ul>
                            <p>{{ blog.description }}</p>
                            {# <button type=\"button\" class=\"btn btn-warning\" href=\"{{path('updateblog',{ id:blog.id})}}\">Update</button> #}
        {# <a class=\"primary-btn pricing-btn\"  href=\"{{path('updateblog',{ id:blog.id})}}\" > update blog </a> #}

                             
                             
                          </div>
                       
                               
                    </div>
                    {% endfor %}
                    {# <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a> #}
                  
                </div>
                
            </div>
        </div>
    </section>
    <!-- Blog Section End -->



 </body>

</html>


{% endblock %}", "blog/blog.html.twig", "C:\\Users\\user\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\blog\\blog.html.twig");
    }
}
