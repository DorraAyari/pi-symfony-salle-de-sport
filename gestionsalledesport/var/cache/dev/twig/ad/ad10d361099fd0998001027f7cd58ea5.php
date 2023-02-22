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

/* reservation/readres.html.twig */
class __TwigTemplate_5b8bea45337aae2181fe360128508979 extends Template
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
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/readres.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/readres.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "reservation/readres.html.twig", 1);
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
    <section class=\"hero-section\">
        <div class=\"hs-slider owl-carousel\">
            <div class=\"hs-item set-bg\" data-setbg=\"front/img/hero/hero-1.jpg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hs-item set-bg\" data-setbg=\"front/img/hero/hero-2.jpg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h1>Package index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Choices</th>
             
            </tr>
        </thead>
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 46
            echo "            <tr>
               <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "Start", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true);
            echo "</td>
                 <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "Finish", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true);
            echo "</td>
                  <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "Capacity", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>
            <!--      <td><a class=\"btn btn-success\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierres", ["id" => twig_get_attribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" > modifier </a></td>
         <td> <a class=\"btn btn-danger\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerres", ["id" => twig_get_attribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo " \" >supprimer</a>  <td>
 
                </td> !-->
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterres");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/readres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 65,  160 => 62,  151 => 58,  141 => 53,  137 => 52,  132 => 50,  128 => 49,  124 => 48,  120 => 47,  117 => 46,  112 => 45,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}
{% block body %}

    <section class=\"hero-section\">
        <div class=\"hs-slider owl-carousel\">
            <div class=\"hs-item set-bg\" data-setbg=\"front/img/hero/hero-1.jpg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hs-item set-bg\" data-setbg=\"front/img/hero/hero-2.jpg\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h1>Package index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Choices</th>
             
            </tr>
        </thead>
        <tbody>
        {% for res  in reservation %}
            <tr>
               <td>{{ res.id }}</td>
                <td>{{ res.Start |date('Y-m-d')}}</td>
                 <td>{{ res.Finish |date('Y-m-d')}}</td>
                  <td>{{ res.Capacity }}</td>
                <td>
            <!--      <td><a class=\"btn btn-success\" href=\"{{path('modifierres',{ id:res.id}      ) }}\" > modifier </a></td>
         <td> <a class=\"btn btn-danger\" href=\"{{path('supprimerres',{ id:res.id}      ) }} \" >supprimer</a>  <td>
 
                </td> !-->
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('ajouterres') }}\">Create new</a>
{% endblock %}", "reservation/readres.html.twig", "C:\\Users\\Lenovo\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\reservation\\readres.html.twig");
    }
}
