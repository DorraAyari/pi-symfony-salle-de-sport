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

/* blogadmin/listblog.html.twig */
class __TwigTemplate_25a3d23b3bcb2a380bbedfcb4b9e1c3a extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogadmin/listblog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogadmin/listblog.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "blogadmin/listblog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
        <!-- Begin Page Content -->
        <div class=\"container-fluid\">
        <center>
        <h2><a  class=\"m-0 font-weight-bold text-primary\"  href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addblog");
        echo "\" > ADD BLOG </a></h2>
        </center>
        <br>
          <!-- Page Heading -->
          ";
        // line 13
        echo "
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">LIST BLOG</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                
                  <thead>
                    <tr>
                      <th>sujet</th>
                      <th>description</th>
                      <th>current date </th>
                      <th>image </th>
                      <th>Update </th>
                      <th>Delete </th>
                      
                    </tr>
                  </thead>
                  ";
        // line 44
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["blog"]);
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 45
            echo "                  <tbody>
                    <tr>
                      <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                      <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                      <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "createdAt", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true);
            echo "</td>
                      <td> <img style=\"width:200x;height:200px;\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 50))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 50), "html", null, true);
            echo "\"/></td>
                      <td><a class=\"btn btn-success\"  href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateblog", ["id" => twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" > Update blog </a></td>
                      <td><a class=\"btn btn-danger\"  href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteblog", ["id" => twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" > Delete blog </a></td>
                    </tr>
                   
                  </tbody>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

     
      <!-- End of Main Content -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blogadmin/listblog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 57,  135 => 52,  131 => 51,  125 => 50,  121 => 49,  117 => 48,  113 => 47,  109 => 45,  104 => 44,  81 => 13,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}
{% block body %}

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">
        <center>
        <h2><a  class=\"m-0 font-weight-bold text-primary\"  href=\"{{path('addblog')}}\" > ADD BLOG </a></h2>
        </center>
        <br>
          <!-- Page Heading -->
          {# <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
          <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target=\"_blank\" href=\"https://datatables.net\">official DataTables documentation</a>.</p> #}

          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">LIST BLOG</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                
                  <thead>
                    <tr>
                      <th>sujet</th>
                      <th>description</th>
                      <th>current date </th>
                      <th>image </th>
                      <th>Update </th>
                      <th>Delete </th>
                      
                    </tr>
                  </thead>
                  {# <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot> #}
                  {% for blog in blog %}
                  <tbody>
                    <tr>
                      <td>{{ blog.nom }}</td>
                      <td>{{ blog.description }}</td>
                      <td>{{ blog.createdAt |date('Y-m-d')}}</td>
                      <td> <img style=\"width:200x;height:200px;\" src=\"{{ asset('uploads/' ~ blog.image) }}\" alt=\"{{ blog.image }}\"/></td>
                      <td><a class=\"btn btn-success\"  href=\"{{path('updateblog',{ id:blog.id})}}\" > Update blog </a></td>
                      <td><a class=\"btn btn-danger\"  href=\"{{path('deleteblog',{ id:blog.id})}}\" > Delete blog </a></td>
                    </tr>
                   
                  </tbody>
                  {% endfor %}
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

     
      <!-- End of Main Content -->
{% endblock  %}
     ", "blogadmin/listblog.html.twig", "C:\\Users\\EMNA\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\blogadmin\\listblog.html.twig");
    }
}
