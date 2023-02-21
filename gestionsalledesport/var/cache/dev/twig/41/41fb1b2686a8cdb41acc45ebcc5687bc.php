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

/* coach/read.html.twig */
class __TwigTemplate_e1949a764c2eef9abb52adc3b42cf5e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/read.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/read.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "coach/read.html.twig", 2);
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
              <h4 class=\"m-0 font-weight-bold text-primary\">Coach List</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
               ";
        // line 20
        echo "
    <h1><a class=\"btn btn-primary\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterS");
        echo "\" > Add </a></h1>
    <table class=\"table table-striped-columns\"  align=\"center\">
    <thead>
        <tr>
            
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>

            <th>Show</th>
              <th>Update</th>
                            <th>Delete</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coachs"]) || array_key_exists("coachs", $context) ? $context["coachs"] : (function () { throw new RuntimeError('Variable "coachs" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 39
            echo "             
                   
           <td>  ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 41), "html", null, true);
            echo " </td> 
            <td>  ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "description", [], "any", false, false, false, 42), "html", null, true);
            echo " </td>   
         <td> <img style=\"width:60px;height:60px;\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["coach"], "image", [], "any", false, false, false, 43))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "image", [], "any", false, false, false, 43), "html", null, true);
            echo "\"/> </td>

         <td><a class=\"btn btn-success\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shows", ["id" => twig_get_attribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" > show </a></td>

         <td><a class=\"btn btn-warning\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierS", ["id" => twig_get_attribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" > edit </a></td>
         <td> <a class=\"btn btn-danger\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerS", ["id" => twig_get_attribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo " \" >delete</a>  <td>
 
         
            
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </tbody>
</table>
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
        return "coach/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 54,  140 => 48,  136 => 47,  131 => 45,  124 => 43,  120 => 42,  116 => 41,  112 => 39,  108 => 38,  88 => 21,  85 => 20,  75 => 11,  68 => 4,  58 => 3,  35 => 2,);
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
              <h4 class=\"m-0 font-weight-bold text-primary\">Coach List</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
               {# hnee besh nekhdem khedmti  #}

    <h1><a class=\"btn btn-primary\" href=\"{{path('ajouterS')}}\" > Add </a></h1>
    <table class=\"table table-striped-columns\"  align=\"center\">
    <thead>
        <tr>
            
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>

            <th>Show</th>
              <th>Update</th>
                            <th>Delete</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            {% for coach in coachs %}
             
                   
           <td>  {{ coach.nom }} </td> 
            <td>  {{ coach.description }} </td>   
         <td> <img style=\"width:60px;height:60px;\" src=\"{{ asset('uploads/' ~ coach.image) }}\" alt=\"{{ coach.image }}\"/> </td>

         <td><a class=\"btn btn-success\" href=\"{{path('shows',{ id:coach.id}      ) }}\" > show </a></td>

         <td><a class=\"btn btn-warning\" href=\"{{path('modifierS',{ id:coach.id}      ) }}\" > edit </a></td>
         <td> <a class=\"btn btn-danger\" href=\"{{path('supprimerS',{ id:coach.id}      ) }} \" >delete</a>  <td>
 
         
            
      </tr>
      {% endfor %}
    </tbody>
</table>
    </div>
            </div>
          </div>

        </div>

     

{% endblock %}", "coach/read.html.twig", "C:\\Users\\EMNA\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\coach\\read.html.twig");
    }
}
