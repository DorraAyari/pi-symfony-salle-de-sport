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

/* produit_admin/show.html.twig */
class __TwigTemplate_109f415fa343a7c356eba59e11bea785 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_admin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_admin/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "produit_admin/show.html.twig", 3);
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
        echo "   <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          ";
        // line 10
        echo "
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">Détails Produit</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">


 
<div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24))), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 24, $this->source); })()), "image", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <div class=\"coach-info\">
                                    <div class=\"info-label\" style=\"color:teal;font-weight:1000;\">ID</div>
                                    <div class=\"info-value\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "</div>
                                </div>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"coach-info\">
                                    <div class=\"info-label\" style=\"color:teal;font-weight:1000;\">Nom</div>
                                    <div class=\"info-value\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), "html", null, true);
        echo "</div>
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"coach-info\">
                                    <div class=\"info-label\" style=\"color:teal;font-weight:1000;\">Description</div>
                                    <div class=\"info-value\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), "html", null, true);
        echo "</div>
                                </div>
                                <div class=\"col-sm-4\">
                                <div class=\"coach-info\">
                                    <div class=\"info-label\" style=\"color:teal;font-weight:1000;\">Prix</div>
                                    <div class=\"info-value\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 48, $this->source); })()), "prix", [], "any", false, false, false, 48), "html", null, true);
        echo "DT</div>
                                </div>

    </div>
  </div>
  </div>
   </div>
              </div>
            </div>
          </div>
        </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produit_admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 48,  119 => 43,  110 => 37,  101 => 31,  89 => 24,  73 => 10,  68 => 5,  58 => 4,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

      {% extends \"admin/base.html.twig\" %}
{% block body %}
   <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          {# <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
          <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target=\"_blank\" href=\"https://datatables.net\">official DataTables documentation</a>.</p> #}

          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">Détails Produit</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">


 
<div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <img src=\"{{ asset('uploads/' ~ produit.image) }}\" class=\"img-fluid\" alt=\"{{ produit.image }}\">
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <div class=\"coach-info\">
                                    <div class=\"info-label\" style=\"color:teal;font-weight:1000;\">ID</div>
                                    <div class=\"info-value\">{{ produit.id }}</div>
                                </div>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"coach-info\">
                                    <div class=\"info-label\" style=\"color:teal;font-weight:1000;\">Nom</div>
                                    <div class=\"info-value\">{{ produit.nom }}</div>
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"coach-info\">
                                    <div class=\"info-label\" style=\"color:teal;font-weight:1000;\">Description</div>
                                    <div class=\"info-value\">{{ produit.description }}</div>
                                </div>
                                <div class=\"col-sm-4\">
                                <div class=\"coach-info\">
                                    <div class=\"info-label\" style=\"color:teal;font-weight:1000;\">Prix</div>
                                    <div class=\"info-value\">{{ produit.prix }}DT</div>
                                </div>

    </div>
  </div>
  </div>
   </div>
              </div>
            </div>
          </div>
        </div>
  {% endblock %}
", "produit_admin/show.html.twig", "C:\\Users\\AA\\PI1\\pi\\gestionsalledesport\\templates\\produit_admin\\show.html.twig");
    }
}
