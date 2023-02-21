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

/* blogadmin/addblogadmin.html.twig */
class __TwigTemplate_420143e16392caa91980a1dfab5bece3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogadmin/addblogadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogadmin/addblogadmin.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "blogadmin/addblogadmin.html.twig", 1);
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
              <h4 class=\"m-0 font-weight-bold text-primary\">ADD NEW BLOG</h4>
              </center>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
               ";
        // line 26
        echo " <div class=\"card o-hidden border-0 shadow-lg my-5\">
          <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
              <div class=\"col-lg-5 d-none d-lg-block bg-login-image\"></div>
              <div class=\"col-lg-6\">
                <div class=\"p-5\">
                  <div class=\"text-center\">
                    <h1 class=\"h4 text-gray-900 mb-4\">ADD YOUR NEW BLOG</h1>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'label', ["label" => "Sujet"]);
        echo " 
</td> 
<td> ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), 'widget');
        echo " 
 </td> 
 <tr>
 
<td> <th> ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 47, $this->source); })()), "nom", [], "any", false, false, false, 47), 'errors');
        echo " </th>
</td>  


</tr> 
<tr>

<td>  ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), 'label', ["label" => "description"]);
        echo " 
</td> 
<td> ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), 'widget');
        echo " 
 </td> 
 <tr>
<td> <th> ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59), 'errors');
        echo " </th>
</td> 

<tr>
<td>  ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63), 'label', ["label" => "Image"]);
        echo " 
</td> 
<td> ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 65, $this->source); })()), "image", [], "any", false, false, false, 65), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 67, $this->source); })()), "image", [], "any", false, false, false, 67), 'errors');
        echo " 
</td>
</tr> 

 </tr>
</table>
<br>
<center>
<button class=\"btn btn-success\" type=\"submit\"  > Save  </button>
</center>  
 ";
        // line 78
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 78, $this->source); })()), 'form_end');
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
        return "blogadmin/addblogadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 78,  162 => 67,  157 => 65,  152 => 63,  145 => 59,  139 => 56,  134 => 54,  124 => 47,  117 => 43,  112 => 41,  104 => 37,  92 => 26,  80 => 15,  68 => 3,  58 => 2,  35 => 1,);
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
              <h4 class=\"m-0 font-weight-bold text-primary\">ADD NEW BLOG</h4>
              </center>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
               {# hnee besh nekhdem khedmti  #}
 <div class=\"card o-hidden border-0 shadow-lg my-5\">
          <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
              <div class=\"col-lg-5 d-none d-lg-block bg-login-image\"></div>
              <div class=\"col-lg-6\">
                <div class=\"p-5\">
                  <div class=\"text-center\">
                    <h1 class=\"h4 text-gray-900 mb-4\">ADD YOUR NEW BLOG</h1>
                  </div>
                  {# <form class=\"user\"> #}
                  {{form_start(blog,{'attr': {'novalidate': 'novalidate'}} )}}
                    <table>
 <tr>

<td>  {{ form_label(blog.nom,\"Sujet\") }} 
</td> 
<td> {{ form_widget(blog.nom)}} 
 </td> 
 <tr>
 
<td> <th> {{ form_errors(blog.nom) }} </th>
</td>  


</tr> 
<tr>

<td>  {{ form_label(blog.description,\"description\") }} 
</td> 
<td> {{ form_widget(blog.description)}} 
 </td> 
 <tr>
<td> <th> {{ form_errors(blog.description) }} </th>
</td> 

<tr>
<td>  {{ form_label(blog.image,\"Image\") }} 
</td> 
<td> {{ form_widget(blog.image)}} 
 </td> 
<td>  {{ form_errors(blog.image) }} 
</td>
</tr> 

 </tr>
</table>
<br>
<center>
<button class=\"btn btn-success\" type=\"submit\"  > Save  </button>
</center>  
 {# {{ form_widget(blog.save)}}    #}
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
{% endblock %}
", "blogadmin/addblogadmin.html.twig", "C:\\Users\\EMNA\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\blogadmin\\addblogadmin.html.twig");
    }
}
