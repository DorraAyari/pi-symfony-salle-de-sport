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

/* package/ajouterp.html.twig */
class __TwigTemplate_6086c7a8684001cc755833f2c70fab55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/ajouterp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package/ajouterp.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "package/ajouterp.html.twig", 1);
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
        echo " <!-- Hero Section Begin -->
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
    <!-- Hero Section End -->
   <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          ";
        // line 40
        echo "
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">Ajouter un package</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">


 
";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 51, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<table>
<tr>

<td>  ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 55, $this->source); })()), "choices", [], "any", false, false, false, 55), 'label', ["label" => "choices"]);
        echo " 
</td> 
<td> ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 57, $this->source); })()), "choices", [], "any", false, false, false, 57), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 59, $this->source); })()), "choices", [], "any", false, false, false, 59), 'errors');
        echo " 
</td> 

</tr> 


</table>
 ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 66, $this->source); })()), "save", [], "any", false, false, false, 66), 'widget');
        echo " 
";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 67, $this->source); })()), 'form_end');
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
        return "package/ajouterp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 67,  145 => 66,  135 => 59,  130 => 57,  125 => 55,  118 => 51,  105 => 40,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}
{% block body %}
 <!-- Hero Section Begin -->
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
    <!-- Hero Section End -->
   <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          {# <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
          <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target=\"_blank\" href=\"https://datatables.net\">official DataTables documentation</a>.</p> #}

          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h4 class=\"m-0 font-weight-bold text-primary\">Ajouter un package</h4>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">


 
{{form_start(package,{'attr': {'novalidate': 'novalidate'}} )}}
<table>
<tr>

<td>  {{ form_label(package.choices,\"choices\") }} 
</td> 
<td> {{ form_widget(package.choices)}} 
 </td> 
<td>  {{ form_errors(package.choices) }} 
</td> 

</tr> 


</table>
 {{ form_widget(package.save)}} 
{{form_end(package)}}

    </div>
  </div>
  </div>
   </div>
              </div>
            </div>
          </div>
        </div>
  {% endblock %}

   ", "package/ajouterp.html.twig", "C:\\Users\\Lenovo\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\package\\ajouterp.html.twig");
    }
}
