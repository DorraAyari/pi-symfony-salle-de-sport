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

/* blogadmin/updateblogadmin.html.twig */
class __TwigTemplate_e3631a925fccf12c6d0d4dc683c3d7df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogadmin/updateblogadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogadmin/updateblogadmin.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "blogadmin/updateblogadmin.html.twig", 1);
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



        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          ";
        // line 15
        echo "
          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
            <center>
              <h4 class=\"m-0 font-weight-bold text-primary\">UPDATE BLOG</h4>
              </center>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
               ";
        // line 26
        echo "<div class=\"card o-hidden border-0 shadow-lg my-5\">
          <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
              <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
              <div class=\"col-lg-6\">
                <div class=\"p-5\">
                  <div class=\"text-center\">
                    <h1 class=\"h4 text-gray-900 mb-4\">UPDATE YOUR BLOG</h1>
                  </div>
                  ";
        // line 37
        echo "                  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 37, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <table>
<tr>

<td>  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'label', ["label" => "nom"]);
        echo " 
</td> 
<td> ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), 'errors');
        echo " 
</td> 

</tr> 
<tr>

<td>  ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'label', ["label" => "description"]);
        echo " 
</td> 
<td> ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), 'errors');
        echo " 
</td> 
<td>  
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 58, $this->source); })()), "image", [], "any", false, false, false, 58), 'row');
        echo "
</td> 

</tr>
</table>
<br>
<center>
<button class=\"btn btn-success\" type=\"submit\"  > Update  </button>
</center>
";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
              <hr>
                </div>
              </div>
            </div>
          </div>
        </div>








            
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blogadmin/updateblogadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 67,  147 => 58,  141 => 55,  136 => 53,  131 => 51,  122 => 45,  117 => 43,  112 => 41,  104 => 37,  92 => 26,  80 => 15,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}
{% block body %}




        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          {# <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
          <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target=\"_blank\" href=\"https://datatables.net\">official DataTables documentation</a>.</p> #}

          <!-- DataTales Example -->
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
            <center>
              <h4 class=\"m-0 font-weight-bold text-primary\">UPDATE BLOG</h4>
              </center>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
               {# hnee besh nekhdem khedmti  #}
<div class=\"card o-hidden border-0 shadow-lg my-5\">
          <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
              <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
              <div class=\"col-lg-6\">
                <div class=\"p-5\">
                  <div class=\"text-center\">
                    <h1 class=\"h4 text-gray-900 mb-4\">UPDATE YOUR BLOG</h1>
                  </div>
                  {# <form class=\"user\"> #}
                  {{form_start(blog,{'attr': {'novalidate': 'novalidate'}} )}}
                    <table>
<tr>

<td>  {{ form_label(blog.nom,\"nom\") }} 
</td> 
<td> {{ form_widget(blog.nom)}} 
 </td> 
<td>  {{ form_errors(blog.nom) }} 
</td> 

</tr> 
<tr>

<td>  {{ form_label(blog.description,\"description\") }} 
</td> 
<td> {{ form_widget(blog.description)}} 
 </td> 
<td>  {{ form_errors(blog.description) }} 
</td> 
<td>  
        {{ form_row(blog.image) }}
</td> 

</tr>
</table>
<br>
<center>
<button class=\"btn btn-success\" type=\"submit\"  > Update  </button>
</center>
{{form_end(blog)}}
              <hr>
                </div>
              </div>
            </div>
          </div>
        </div>








            
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
{% endblock %}", "blogadmin/updateblogadmin.html.twig", "C:\\Users\\EMNA\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\blogadmin\\updateblogadmin.html.twig");
    }
}
