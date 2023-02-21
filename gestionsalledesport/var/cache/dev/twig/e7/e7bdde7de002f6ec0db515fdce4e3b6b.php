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

/* member/index.html.twig */
class __TwigTemplate_0deb1169c30505c7a35d60918cf35040 extends Template
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
        // line 4
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "member/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "member/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "member/index.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "   <section class=\"breadcrumb-section set-bg\" data-setbg=\"front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Member list</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <span>Member list</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
           
 
    <h1>Member list </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Surname</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Telnumber</th>
                <th>Pack</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Surname", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Name", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Age", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Email", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Telnumber", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Pack", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>
                
                    <td><a class=\"btn btn-success\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" > modifier </a></td>
         <td> <a class=\"btn btn-danger\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo " \" >supprimer</a>  <td>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_member_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "member/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 64,  165 => 61,  156 => 57,  147 => 53,  143 => 52,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  113 => 43,  110 => 42,  105 => 41,  68 => 6,  58 => 5,  35 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("


{% extends \"front/base.html.twig\" %}
{% block body %}
   <section class=\"breadcrumb-section set-bg\" data-setbg=\"front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Member list</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <span>Member list</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
           
 
    <h1>Member list </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Surname</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Telnumber</th>
                <th>Pack</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for member in members %}
            <tr>
                <td>{{ member.id }}</td>
                <td>{{ member.Surname }}</td>
                <td>{{ member.Name }}</td>
                <td>{{ member.Age }}</td>
                <td>{{ member.Email }}</td>
                <td>{{ member.Telnumber }}</td>
                <td>{{ member.Pack }}</td>
                <td>
                
                    <td><a class=\"btn btn-success\" href=\"{{path('modifier',{ id:member.id}      ) }}\" > modifier </a></td>
         <td> <a class=\"btn btn-danger\" href=\"{{path('supprimer',{ id:member.id}      ) }} \" >supprimer</a>  <td>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_member_new') }}\">Create new</a>
{% endblock  %}", "member/index.html.twig", "C:\\Users\\EMNA\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\member\\index.html.twig");
    }
}
