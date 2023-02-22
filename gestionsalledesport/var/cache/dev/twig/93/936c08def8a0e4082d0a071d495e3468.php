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

/* coach/modifierS.html.twig */
class __TwigTemplate_49b041017e4e63530b34e328a7aff3fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/modifierS.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/modifierS.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "coach/modifierS.html.twig", 1);
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
        echo "   <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          ";
        // line 8
        echo "
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">Ajouter un coach</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">


 
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<table>
<tr>

<td>  ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'label', ["label" => "Nom"]);
        echo " 
</td> 
<td> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'errors');
        echo " 
</td> 

</tr> 
<tr>

<td>  ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), 'label', ["label" => "Description"]);
        echo " 
</td> 
<td> ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'errors');
        echo " 
</td> 
 <tr>
<td>  ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 40, $this->source); })()), "image", [], "any", false, false, false, 40), 'label', ["label" => "Photo"]);
        echo " 
</td> 
<td> ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 42, $this->source); })()), "image", [], "any", false, false, false, 42), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 44, $this->source); })()), "image", [], "any", false, false, false, 44), 'errors');
        echo " 
</td>
</tr>
</tr>
</table>
 ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 49, $this->source); })()), "save", [], "any", false, false, false, 49), 'widget');
        echo " 
";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 50, $this->source); })()), 'form_end');
        echo "

    </div>
  </div>
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
        return "coach/modifierS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  146 => 49,  138 => 44,  133 => 42,  128 => 40,  122 => 37,  117 => 35,  112 => 33,  103 => 27,  98 => 25,  93 => 23,  86 => 19,  73 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}
{% block body %}
   <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          {# <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
          <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target=\"_blank\" href=\"https://datatables.net\">official DataTables documentation</a>.</p> #}

          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">Ajouter un coach</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">


 
{{form_start(coach,{'attr': {'novalidate': 'novalidate'}} )}}
<table>
<tr>

<td>  {{ form_label(coach.nom,\"Nom\") }} 
</td> 
<td> {{ form_widget(coach.nom)}} 
 </td> 
<td>  {{ form_errors(coach.nom) }} 
</td> 

</tr> 
<tr>

<td>  {{ form_label(coach.description,\"Description\") }} 
</td> 
<td> {{ form_widget(coach.description)}} 
 </td> 
<td>  {{ form_errors(coach.description) }} 
</td> 
 <tr>
<td>  {{ form_label(coach.image,\"Photo\") }} 
</td> 
<td> {{ form_widget(coach.image)}} 
 </td> 
<td>  {{ form_errors(coach.image) }} 
</td>
</tr>
</tr>
</table>
 {{ form_widget(coach.save)}} 
{{form_end(coach)}}

    </div>
  </div>
  </div>
   </div>
              </div>
            </div>
          </div>
        </div>
  {% endblock %}

   ", "coach/modifierS.html.twig", "C:\\Users\\Lenovo\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\coach\\modifierS.html.twig");
    }
}
