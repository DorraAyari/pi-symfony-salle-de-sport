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

/* command/index.html.twig */
class __TwigTemplate_d4c3b6844ec0c487de618c19b95171c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "command/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "command/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "command/index.html.twig", 1);
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
        <h3><a class=\"primary-btn pricing-btn\" > New Command </a></h3>
        </center>
        <br>
          <!-- Page Heading -->
          ";
        // line 13
        echo "
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h6 class=\"m-0 font-weight-bold text-primary\">LIST COMMAND</h6>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                ";
        // line 21
        if ( !twig_test_empty((isset($context["command"]) || array_key_exists("command", $context) ? $context["command"] : (function () { throw new RuntimeError('Variable "command" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "    <table class=\"table\">
      <thead>
        <tr>
          <th>ID</th>
          <th>Produit</th>
          <th>Prix</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["command"]);
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 33
                echo "          <tr>
            <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["command"], "produit", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["command"], "produit", [], "any", false, false, false, 36), "prix", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "total", [], "any", false, false, false, 37), 2, ",", "."), "html", null, true);
                echo " DT</td>
            
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </tbody>
    </table>
  ";
        } else {
            // line 44
            echo "    <p>Aucune commande trouvée.</p>
  ";
        }
        // line 46
        echo "
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
        return "command/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 46,  136 => 44,  131 => 41,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  106 => 33,  102 => 32,  90 => 22,  88 => 21,  78 => 13,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}
{% block body %}

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">
        <center>
        <h3><a class=\"primary-btn pricing-btn\" > New Command </a></h3>
        </center>
        <br>
          <!-- Page Heading -->
          {# <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
          <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target=\"_blank\" href=\"https://datatables.net\">official DataTables documentation</a>.</p> #}

          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h6 class=\"m-0 font-weight-bold text-primary\">LIST COMMAND</h6>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                {% if command is not empty %}
    <table class=\"table\">
      <thead>
        <tr>
          <th>ID</th>
          <th>Produit</th>
          <th>Prix</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        {% for command in command %}
          <tr>
            <td>{{ command.id }}</td>
            <td>{{ command.produit.nom }}</td>
            <td>{{ command.produit.prix }}</td>
            <td>{{ command.total|number_format(2, ',', '.') }} DT</td>
            
          </tr>
        {% endfor %}
      </tbody>
    </table>
  {% else %}
    <p>Aucune commande trouvée.</p>
  {% endif %}

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

     
      <!-- End of Main Content -->
{% endblock  %}
     ", "command/index.html.twig", "C:\\Users\\AA\\PI1\\pi\\gestionsalledesport\\templates\\command\\index.html.twig");
    }
}
