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

/* produit/produit.html.twig */
class __TwigTemplate_c82973c9130ce1024c006500f93657ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "produit/produit.html.twig", 1);
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
        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Produit Section Begin -->
    <!-- Section-->
        <section class=\"blog-section spad\">
            <div class=\"container px-4 px-lg-5 mt-5\">
                <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center\">
                    <div class=\"col mb-5\">
                     ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["produit"]);
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 26
            echo "                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" style=\"width:300x;height:241px;\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 28))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 28), "html", null, true);
            echo "\" />
                            
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</h5>
                                    <!-- Product price-->
                                    ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 36), "html", null, true);
            echo "TND
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-warning\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">Ajouter au panier</a></div>
                            </div>
                        </div>
                    </div>
                    
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    
                    
                    
                    
                        
                    </div>
                </div>
            </div>
        </section>
        

    <!-- Produit Section End -->



 </body>

</html>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produit/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  122 => 41,  114 => 36,  109 => 34,  98 => 28,  94 => 26,  90 => 25,  68 => 5,  58 => 4,  35 => 1,);
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
        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Produit Section Begin -->
    <!-- Section-->
        <section class=\"blog-section spad\">
            <div class=\"container px-4 px-lg-5 mt-5\">
                <div class=\"row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center\">
                    <div class=\"col mb-5\">
                     {% for produit in produit %}
                        <div class=\"card h-100\">
                            <!-- Product image-->
                            <img class=\"card-img-top\" style=\"width:300x;height:241px;\" src=\"{{ asset('uploads/' ~ produit.image) }}\" alt=\"{{ produit.image }}\" />
                            
                            <!-- Product details-->
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <!-- Product name-->
                                    <h5 class=\"fw-bolder\">{{ produit.nom }}</h5>
                                    <!-- Product price-->
                                    {{ produit.prix }}TND
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                                <div class=\"text-center\"><a class=\"btn btn-warning\" href=\"{{ path('app_add',{'id':produit.id}) }}\">Ajouter au panier</a></div>
                            </div>
                        </div>
                    </div>
                    
                          {% endfor %}
                    
                    
                    
                    
                        
                    </div>
                </div>
            </div>
        </section>
        

    <!-- Produit Section End -->



 </body>

</html>


{% endblock %}", "produit/produit.html.twig", "C:\\Users\\AA\\PI1\\pi\\gestionsalledesport\\templates\\produit\\produit.html.twig");
    }
}
