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

/* packageadmin/readadmin.html.twig */
class __TwigTemplate_769dd5b2d3704c36f90882604b43ecb7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "packageadmin/readadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "packageadmin/readadmin.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "packageadmin/readadmin.html.twig", 2);
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
    <h1>Ajouter un Package</h1>

    <table class=\"table table-striped-columns\"  align=\"center\">
    <thead>
        <tr>
            
            <th>Id</th>
            <th>choices</th>

            <th>actions</th>
        </tr>
    </thead>
    <tbody>
       
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Package"]) {
            // line 20
            echo "             <tr>
                <td>  ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Package"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo " </td>   

                   
           <td>  ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Package"], "choices", [], "any", false, false, false, 24), "html", null, true);
            echo " </td>   
         
         <td><a class=\"btn btn-success\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierpck", ["id" => twig_get_attribute($this->env, $this->source, $context["Package"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" > modifier </a>
        <a class=\"btn btn-danger\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerpck", ["id" => twig_get_attribute($this->env, $this->source, $context["Package"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo " \" >supprimer</a>  <td>
 
         
            
      
   </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </tbody>
</table>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "packageadmin/readadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  107 => 27,  103 => 26,  98 => 24,  92 => 21,  89 => 20,  85 => 19,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"admin/base.html.twig\" %}
{% block body %}
<div class=\"example-wrapper\">
    <h1>Ajouter un Package</h1>

    <table class=\"table table-striped-columns\"  align=\"center\">
    <thead>
        <tr>
            
            <th>Id</th>
            <th>choices</th>

            <th>actions</th>
        </tr>
    </thead>
    <tbody>
       
            {% for Package in package %}
             <tr>
                <td>  {{ Package.id }} </td>   

                   
           <td>  {{ Package.choices }} </td>   
         
         <td><a class=\"btn btn-success\" href=\"{{path('modifierpck',{ id:Package.id}      ) }}\" > modifier </a>
        <a class=\"btn btn-danger\" href=\"{{path('supprimerpck',{ id:Package.id}      ) }} \" >supprimer</a>  <td>
 
         
            
      
   </tr>
      {% endfor %}
    </tbody>
</table>
</div>

{% endblock %}", "packageadmin/readadmin.html.twig", "C:\\Users\\Lenovo\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\packageadmin\\readadmin.html.twig");
    }
}
