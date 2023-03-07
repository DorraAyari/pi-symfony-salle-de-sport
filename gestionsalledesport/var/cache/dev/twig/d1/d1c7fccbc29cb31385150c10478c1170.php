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

/* produit_admin/produit_adm.html.twig */
class __TwigTemplate_ab3391c0112392082037583ecd909d3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_admin/produit_adm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_admin/produit_adm.html.twig"));

        // line 1
        echo "

  <div class=\"container-fluid\">
        
          <!-- Page Heading -->
          ";
        // line 8
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
        // line 19
        echo "<div class=\"card o-hidden border-0 shadow-lg my-5\">
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
        // line 30
        echo "                  ";
        // line 66
        echo "<br>
";
        // line 69
        echo "              <hr>
                </div>
              </div>
            </div>
          </div>
        </div>








            
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produit_admin/produit_adm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 69,  76 => 66,  74 => 30,  62 => 19,  50 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

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
                  {# {{form_start(blog,{'attr': {'novalidate': 'novalidate'}} )}}
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
</table> #}
<br>
{# {{ form_widget(blog.save)}} 
{{form_end(blog)}} #}
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

      </div>", "produit_admin/produit_adm.html.twig", "C:\\Users\\AA\\PI1\\pi\\gestionsalledesport\\templates\\produit_admin\\produit_adm.html.twig");
    }
}
