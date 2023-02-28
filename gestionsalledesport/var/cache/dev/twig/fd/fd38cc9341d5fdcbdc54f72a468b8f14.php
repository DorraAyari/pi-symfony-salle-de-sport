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

/* produit_admin/addproduitadmin.html.twig */
class __TwigTemplate_f122f70d81e5ffb3d57105ceca56a9b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_admin/addproduitadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_admin/addproduitadmin.html.twig"));

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
        // line 31
        echo "                  <table>
<tr>

<td>  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 34, $this->source); })()), "nom_produit", [], "any", false, false, false, 34), 'label', ["label" => "nom produit"]);
        echo " 
</td> 
<td> ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 36, $this->source); })()), "nom_produit", [], "any", false, false, false, 36), 'widget');
        echo " 
 </td> 
 <tr>
 
<td> <th> ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 40, $this->source); })()), "nom_produit", [], "any", false, false, false, 40), 'errors');
        echo " </th>
</td> 


</tr> 
<tr>

<td>  ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 47, $this->source); })()), "desc_produit", [], "any", false, false, false, 47), 'label', ["label" => "description"]);
        echo " 
</td> 
<td> ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 49, $this->source); })()), "desc_produit", [], "any", false, false, false, 49), 'widget');
        echo " 
 </td> 
 <tr>
<td> <th> ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 52, $this->source); })()), "desc_produit", [], "any", false, false, false, 52), 'errors');
        echo " </th>
</td> 

<tr>
<tr>

<td>  ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 58, $this->source); })()), "prix_produit", [], "any", false, false, false, 58), 'label', ["label" => "prix produit"]);
        echo " 
</td> 
<td> ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 60, $this->source); })()), "prix_produit", [], "any", false, false, false, 60), 'widget');
        echo " 
 </td> 
 <tr>
<td> <th> ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 63, $this->source); })()), "prix_produit", [], "any", false, false, false, 63), 'errors');
        echo " </th>
</td> 

<tr>
<td>  ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 67, $this->source); })()), "image", [], "any", false, false, false, 67), 'label', ["label" => "Image"]);
        echo " 
</td> 
<td> ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 69, $this->source); })()), "image", [], "any", false, false, false, 69), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 71, $this->source); })()), "image", [], "any", false, false, false, 71), 'errors');
        echo " 
</td>
</tr>

</tr>
</table>
<br>
";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 78, $this->source); })()), "save", [], "any", false, false, false, 78), 'widget');
        echo " 
";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 79, $this->source); })()), 'form_end');
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

      </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produit_admin/addproduitadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 79,  161 => 78,  151 => 71,  146 => 69,  141 => 67,  134 => 63,  128 => 60,  123 => 58,  114 => 52,  108 => 49,  103 => 47,  93 => 40,  86 => 36,  81 => 34,  76 => 31,  74 => 30,  62 => 19,  50 => 8,  43 => 1,);
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
                  {# {{form_start(blog,{'attr': {'novalidate': 'novalidate'}} )}}#}
                  <table>
<tr>

<td>  {{ form_label(produit.nom_produit,\"nom produit\") }} 
</td> 
<td> {{ form_widget(produit.nom_produit)}} 
 </td> 
 <tr>
 
<td> <th> {{ form_errors(produit.nom_produit) }} </th>
</td> 


</tr> 
<tr>

<td>  {{ form_label(produit.desc_produit,\"description\") }} 
</td> 
<td> {{ form_widget(produit.desc_produit)}} 
 </td> 
 <tr>
<td> <th> {{ form_errors(produit.desc_produit) }} </th>
</td> 

<tr>
<tr>

<td>  {{ form_label(produit.prix_produit,\"prix produit\") }} 
</td> 
<td> {{ form_widget(produit.prix_produit)}} 
 </td> 
 <tr>
<td> <th> {{ form_errors(produit.prix_produit) }} </th>
</td> 

<tr>
<td>  {{ form_label(produit.image,\"Image\") }} 
</td> 
<td> {{ form_widget(produit.image)}} 
 </td> 
<td>  {{ form_errors(produit.image) }} 
</td>
</tr>

</tr>
</table>
<br>
{{ form_widget(produit.save)}} 
{{form_end(produit)}}
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

      </div>", "produit_admin/addproduitadmin.html.twig", "C:\\Users\\AA\\PI1\\pi\\gestionsalledesport\\templates\\produit_admin\\addproduitadmin.html.twig");
    }
}
