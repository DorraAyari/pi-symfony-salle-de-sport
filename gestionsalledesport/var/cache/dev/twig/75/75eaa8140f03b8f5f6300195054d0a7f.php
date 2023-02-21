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

/* member/new.html.twig */
class __TwigTemplate_8ac0930c1cd8dbdab7ddfbe737cc5a60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "member/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "member/new.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "member/new.html.twig", 1);
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
        echo "    <section class=\"breadcrumb-section set-bg\" data-setbg=\"front/img/breadcrumb-bg.jpg\">
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
           
 
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<table>

<tr>

<td>  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 27, $this->source); })()), "Name", [], "any", false, false, false, 27), 'label', ["label" => "Nom"]);
        echo " 
</td> 
<td> ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 29, $this->source); })()), "Name", [], "any", false, false, false, 29), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 31, $this->source); })()), "Name", [], "any", false, false, false, 31), 'errors');
        echo " 
</td> 

</tr> 
<tr><tr>

<td>  ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 37, $this->source); })()), "Surname", [], "any", false, false, false, 37), 'label', ["label" => "Surname"]);
        echo " 
</td> 
<td> ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 39, $this->source); })()), "Surname", [], "any", false, false, false, 39), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 41, $this->source); })()), "Surname", [], "any", false, false, false, 41), 'errors');
        echo " 
</td> 

</tr> 
<tr>

<tr>

<td>  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 49, $this->source); })()), "age", [], "any", false, false, false, 49), 'label', ["label" => "Age"]);
        echo " 
</td> 
<td> ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 51, $this->source); })()), "age", [], "any", false, false, false, 51), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 53, $this->source); })()), "age", [], "any", false, false, false, 53), 'errors');
        echo " 
</td> 

</tr> 
<tr>

<td>  ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), 'label', ["label" => "Email"]);
        echo " 
</td> 
<td> ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), 'errors');
        echo " 
</td> 
 <tr>
<td>  ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 66, $this->source); })()), "Telnumber", [], "any", false, false, false, 66), 'label', ["label" => "Telnumber"]);
        echo " 
</td> 
<td> ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 68, $this->source); })()), "Telnumber", [], "any", false, false, false, 68), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 70, $this->source); })()), "Telnumber", [], "any", false, false, false, 70), 'errors');
        echo " 
</td>
</tr>
</tr>
 <tr>
<td>  ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 75, $this->source); })()), "Pack", [], "any", false, false, false, 75), 'label', ["label" => "Pack"]);
        echo " 
</td> 
<td> ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 77, $this->source); })()), "Pack", [], "any", false, false, false, 77), 'widget');
        echo " 
 </td> 
<td>  ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 79, $this->source); })()), "Pack", [], "any", false, false, false, 79), 'errors');
        echo " 
</td>
</tr>
</tr>
</table>
 ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 84, $this->source); })()), "save", [], "any", false, false, false, 84), 'widget');
        echo " 
";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "member/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 85,  208 => 84,  200 => 79,  195 => 77,  190 => 75,  182 => 70,  177 => 68,  172 => 66,  166 => 63,  161 => 61,  156 => 59,  147 => 53,  142 => 51,  137 => 49,  126 => 41,  121 => 39,  116 => 37,  107 => 31,  102 => 29,  97 => 27,  89 => 22,  68 => 3,  58 => 2,  35 => 1,);
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
</div>
</div>
{% endblock %}", "member/new.html.twig", "C:\\Users\\EMNA\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\member\\new.html.twig");
    }
}
