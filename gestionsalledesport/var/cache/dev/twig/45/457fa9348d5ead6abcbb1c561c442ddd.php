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
class __TwigTemplate_e274f7edf5bfcde9f9fdac2216cde064 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "member/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "member/index.html.twig"));

        // line 1
        echo "



    <h1>Member index</h1>

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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Surname", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Name", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Age", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Email", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Telnumber", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "Pack", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>
                
                    <td><a class=\"btn btn-success\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierS", ["id" => twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" > modifier </a></td>
         <td> <a class=\"btn btn-danger\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerS", ["id" => twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo " \" >supprimer</a>  <td>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_member_new");
        echo "\">Create new</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  130 => 44,  125 => 41,  116 => 37,  107 => 33,  103 => 32,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  70 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



    <h1>Member index</h1>

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
                
                    <td><a class=\"btn btn-success\" href=\"{{path('modifierS',{ id:member.id}      ) }}\" > modifier </a></td>
         <td> <a class=\"btn btn-danger\" href=\"{{path('supprimerS',{ id:member.id}      ) }} \" >supprimer</a>  <td>
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
", "member/index.html.twig", "C:\\Users\\Lenovo\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\member\\index.html.twig");
    }
}
