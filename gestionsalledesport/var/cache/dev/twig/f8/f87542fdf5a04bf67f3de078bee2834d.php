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

/* produit_admin/readp.html.twig */
class __TwigTemplate_338b3bb7edc8aa2fc03172dbf1885656 extends Template
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
        // line 2
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_admin/readp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_admin/readp.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "produit_admin/readp.html.twig", 2);
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
        echo "
        <!-- Begin Page Content -->
        <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          ";
        // line 11
        echo "
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">Add new produit</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
               ";
        // line 20
        echo "
    <h1><a class=\"btn btn-primary\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addproduit");
        echo "\" > ajouter </a></h1>
    <table class=\"table table-striped-columns\"  align=\"center\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Image</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            <th>Affiche</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["produit"]);
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 35
            echo "             
                   
           <td>  ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo " </td>   
         <td> <img style=\"width:60px;height:60px;\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 38))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 38), "html", null, true);
            echo "\"/> </td>


         <td><a class=\"btn btn-outline-success\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierp", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" > Modifier </a></td>
         <td> <a class=\"btn btn-outline-danger\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerp", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo " \">Supprimer</a><td>
        <td> <a class=\"btn btn-outline-warning\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shows", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo " \" >Afficher</a><td>
    
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </tbody>
</table>
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
        return "produit_admin/readp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 47,  132 => 43,  128 => 42,  124 => 41,  116 => 38,  112 => 37,  108 => 35,  104 => 34,  88 => 21,  85 => 20,  75 => 11,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"admin/base.html.twig\" %}
{% block body %}

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          {# <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
          <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target=\"_blank\" href=\"https://datatables.net\">official DataTables documentation</a>.</p> #}

          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">Add new produit</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
               {# hnee besh nekhdem khedmti  #}

    <h1><a class=\"btn btn-primary\" href=\"{{path('addproduit')}}\" > ajouter </a></h1>
    <table class=\"table table-striped-columns\"  align=\"center\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Image</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            <th>Affiche</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            {% for produit in produit %}
             
                   
           <td>  {{ produit.nom }} </td>   
         <td> <img style=\"width:60px;height:60px;\" src=\"{{ asset('uploads/' ~ produit.image) }}\" alt=\"{{ produit.image }}\"/> </td>


         <td><a class=\"btn btn-outline-success\" href=\"{{path('modifierp',{ id:produit.id} ) }}\" > Modifier </a></td>
         <td> <a class=\"btn btn-outline-danger\" href=\"{{path('supprimerp',{ id:produit.id} ) }} \">Supprimer</a><td>
        <td> <a class=\"btn btn-outline-warning\" href=\"{{path('shows',{ id:produit.id}   ) }} \" >Afficher</a><td>
    
      </tr>
      {% endfor %}
    </tbody>
</table>
  </div>
              </div>
            </div>
          </div>
        








            
            </div>
          </div>

     

{% endblock %}", "produit_admin/readp.html.twig", "C:\\Users\\AA\\PI1\\pi\\gestionsalledesport\\templates\\produit_admin\\readp.html.twig");
    }
}
