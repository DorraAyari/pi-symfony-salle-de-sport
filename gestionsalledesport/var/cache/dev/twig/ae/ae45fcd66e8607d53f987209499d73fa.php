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
class __TwigTemplate_cad5cfcaf491d5ccea714dc1a0fea159 extends Template
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
        echo "<div class=\"example-wrapper\">
    <h1>Ajouter un coach</h1>
    <h1><a class=\"btn btn-primary\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterS");
        echo "\" > ajouter </a></h1>
    <table class=\"table table-striped-columns\"  align=\"center\">
    <thead>
        <tr>
            
            <th>nom</th>
            <th>Image</th>

            <th>modifier</th>
              <th>supprimer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coachs"]) || array_key_exists("coachs", $context) ? $context["coachs"] : (function () { throw new RuntimeError('Variable "coachs" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 21
            echo "             
                   
           <td>  ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo " </td>   
         <td> <img style=\"width:60px;height:60px;\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["coach"], "image", [], "any", false, false, false, 24))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "image", [], "any", false, false, false, 24), "html", null, true);
            echo "\"/> </td>
         <td><a class=\"btn btn-success\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierS", ["id" => twig_get_attribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" > modifier </a></td>
         <td> <a class=\"btn btn-danger\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerS", ["id" => twig_get_attribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo " \" >supprimer</a>  <td>
 
         
            
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>
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
        return array (  123 => 32,  111 => 26,  107 => 25,  101 => 24,  97 => 23,  93 => 21,  89 => 20,  72 => 6,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"admin/base.html.twig\" %}
{% block body %}
<div class=\"example-wrapper\">
    <h1>Ajouter un coach</h1>
    <h1><a class=\"btn btn-primary\" href=\"{{path('ajouterS')}}\" > ajouter </a></h1>
    <table class=\"table table-striped-columns\"  align=\"center\">
    <thead>
        <tr>
            
            <th>nom</th>
            <th>Image</th>

            <th>modifier</th>
              <th>supprimer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            {% for coach in coachs %}
             
                   
           <td>  {{ coach.nom }} </td>   
         <td> <img style=\"width:60px;height:60px;\" src=\"{{ asset('uploads/' ~ coach.image) }}\" alt=\"{{ coach.image }}\"/> </td>
         <td><a class=\"btn btn-success\" href=\"{{path('modifierS',{ id:coach.id}      ) }}\" > modifier </a></td>
         <td> <a class=\"btn btn-danger\" href=\"{{path('supprimerS',{ id:coach.id}      ) }} \" >supprimer</a>  <td>
 
         
            
      </tr>
      {% endfor %}
    </tbody>
</table>
</div>

     

{% endblock %}", "coach/read.html.twig", "C:\\Users\\Lenovo\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\coach\\read.html.twig");
    }
}
