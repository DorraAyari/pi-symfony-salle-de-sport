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

/* cours/show.html.twig */
class __TwigTemplate_700a172c289f3b4999669e28567870d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "cours/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cours";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        <!-- Begin Page Content -->
        <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          ";
        // line 13
        echo "
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">ADD NEW BLOG</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
               ";
        // line 22
        echo "<div class=\"card o-hidden border-0 shadow-lg my-5\">
          <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
              <div class=\"col-lg-5 d-none d-lg-block \"><img style=\"width:300px;height:300px;\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26), "html", null, true);
        echo "\"/></div>
              <div class=\"col-lg-6\">
                <div class=\"p-5\">
                  <div class=\"text-center\">
                    <h1 class=\"h4 text-gray-900 mb-4\">Detail coach</h1>
                  </div>
    <h1>Cours</h1>

    <table class=\"table\">
        <tbody>
        
            <tr>
                <th>Nom</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Desription</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            </tr>
           
        </tbody>
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
        return "cours/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 43,  128 => 39,  110 => 26,  104 => 22,  94 => 13,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"admin/base.html.twig\" %}

{% block title %}Cours{% endblock %}

{% block body %}
        <!-- Begin Page Content -->
        <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          {# <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
          <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target=\"_blank\" href=\"https://datatables.net\">official DataTables documentation</a>.</p> #}

          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">ADD NEW BLOG</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
               {# hnee besh nekhdem khedmti  #}
<div class=\"card o-hidden border-0 shadow-lg my-5\">
          <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
              <div class=\"col-lg-5 d-none d-lg-block \"><img style=\"width:300px;height:300px;\" src=\"{{ asset('uploads/' ~ cours.image) }}\" alt=\"{{ cours.image }}\"/></div>
              <div class=\"col-lg-6\">
                <div class=\"p-5\">
                  <div class=\"text-center\">
                    <h1 class=\"h4 text-gray-900 mb-4\">Detail coach</h1>
                  </div>
    <h1>Cours</h1>

    <table class=\"table\">
        <tbody>
        
            <tr>
                <th>Nom</th>
                <td>{{ cours.nom }}</td>
            </tr>
            <tr>
                <th>Desription</th>
                <td>{{ cours.description }}</td>
            </tr>
           
        </tbody>
    </table>

  </div>
  </div>
  </div>
   </div>

{% endblock  %}
", "cours/show.html.twig", "C:\\Users\\AA\\PI1\\pi\\gestionsalledesport\\templates\\cours\\show.html.twig");
    }
}
