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

/* member/edit.html.twig */
class __TwigTemplate_5bf29b5a21ea8ea8b5964b7fda7f2f37 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "member/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "member/edit.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "member/edit.html.twig", 1);
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
        echo "   <section class=\"breadcrumb-section set-bg\" data-setbg=\"front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Packs</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <span>Packs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<table>

<tr>

<td>  ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 23, $this->source); })()), "Name", [], "any", false, false, false, 23), 'label', ["label" => "Nom"]);
        echo " 
</td> 
<td> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 25, $this->source); })()), "Name", [], "any", false, false, false, 25), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 27, $this->source); })()), "Name", [], "any", false, false, false, 27), 'errors');
        echo " 
</td> 

</tr> 
<tr><tr>

<td>  ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 33, $this->source); })()), "Surname", [], "any", false, false, false, 33), 'label', ["label" => "Surname"]);
        echo " 
</td> 
<td> ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 35, $this->source); })()), "Surname", [], "any", false, false, false, 35), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 37, $this->source); })()), "Surname", [], "any", false, false, false, 37), 'errors');
        echo " 
</td> 

</tr> 
<tr>

<tr>

<td>  ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 45, $this->source); })()), "age", [], "any", false, false, false, 45), 'label', ["label" => "Age"]);
        echo " 
</td> 
<td> ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 47, $this->source); })()), "age", [], "any", false, false, false, 47), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 49, $this->source); })()), "age", [], "any", false, false, false, 49), 'errors');
        echo " 
</td> 

</tr> 
<tr>

<td>  ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'label', ["label" => "Email"]);
        echo " 
</td> 
<td> ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), 'errors');
        echo " 
</td> 
 <tr>
<td>  ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 62, $this->source); })()), "Telnumber", [], "any", false, false, false, 62), 'label', ["label" => "Telnumber"]);
        echo " 
</td> 
<td> ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 64, $this->source); })()), "Telnumber", [], "any", false, false, false, 64), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 66, $this->source); })()), "Telnumber", [], "any", false, false, false, 66), 'errors');
        echo " 
</td>
</tr>
</tr>
 <tr>
<td>  ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 71, $this->source); })()), "Pack", [], "any", false, false, false, 71), 'label', ["label" => "Pack"]);
        echo " 
</td> 
<td> ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 73, $this->source); })()), "Pack", [], "any", false, false, false, 73), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 75, $this->source); })()), "Pack", [], "any", false, false, false, 75), 'errors');
        echo " 
</td>
</tr>
</tr>
</table>
 ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 80, $this->source); })()), "save", [], "any", false, false, false, 80), 'widget');
        echo " 
";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 81, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "member/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 81,  204 => 80,  196 => 75,  191 => 73,  186 => 71,  178 => 66,  173 => 64,  168 => 62,  162 => 59,  157 => 57,  152 => 55,  143 => 49,  138 => 47,  133 => 45,  122 => 37,  117 => 35,  112 => 33,  103 => 27,  98 => 25,  93 => 23,  85 => 18,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}
{% block body %}
   <section class=\"breadcrumb-section set-bg\" data-setbg=\"front/img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Packs</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <span>Packs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{form_start(member,{'attr': {'novalidate': 'novalidate'}} )}}
<table>

<tr>

<td>  {{ form_label(member.Name,\"Nom\") }} 
</td> 
<td> {{ form_widget(member.Name)}} 
 </td> 
<td>  {{ form_errors(member.Name) }} 
</td> 

</tr> 
<tr><tr>

<td>  {{ form_label(member.Surname,\"Surname\") }} 
</td> 
<td> {{ form_widget(member.Surname)}} 
 </td> 
<td>  {{ form_errors(member.Surname) }} 
</td> 

</tr> 
<tr>

<tr>

<td>  {{ form_label(member.age,\"Age\") }} 
</td> 
<td> {{ form_widget(member.age)}} 
 </td> 
<td>  {{ form_errors(member.age) }} 
</td> 

</tr> 
<tr>

<td>  {{ form_label(member.email,\"Email\") }} 
</td> 
<td> {{ form_widget(member.email)}} 
 </td> 
<td>  {{ form_errors(member.email) }} 
</td> 
 <tr>
<td>  {{ form_label(member.Telnumber,\"Telnumber\") }} 
</td> 
<td> {{ form_widget(member.Telnumber)}} 
 </td> 
<td>  {{ form_errors(member.Telnumber) }} 
</td>
</tr>
</tr>
 <tr>
<td>  {{ form_label(member.Pack,\"Pack\") }} 
</td> 
<td> {{ form_widget(member.Pack)}} 
 </td> 
<td>  {{ form_errors(member.Pack) }} 
</td>
</tr>
</tr>
</table>
 {{ form_widget(member.save)}} 
{{form_end(member)}}


{% endblock  %}", "member/edit.html.twig", "C:\\Users\\EMNA\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\member\\edit.html.twig");
    }
}
