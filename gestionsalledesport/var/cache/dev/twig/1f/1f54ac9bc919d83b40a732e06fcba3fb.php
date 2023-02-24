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

/* user/register.html.twig */
class __TwigTemplate_785a1a761758bfb6a231d8e51fc3a815 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "user/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div style=\"padding: 5rem; background: black\" class=\"mx-auto\"></div>
    <section class=\"hero-section\">
            <div class=\"hs-item set-bg\" data-setbg=\"front/img/hero/hero-2.jpg\">
                <div class=\"container p-5\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text ml-5\">
                                <h1 class=\"h1 mb-3 font-weight-normal text-white\">Inscription</h1>
                                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"form-group text-white\">
                                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), 'label');
        echo "
                                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 16
        echo "
                                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'errors');
        echo "
                                </div>
                                <div class=\"form-group text-white\">
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "plainPassword", [], "any", false, false, false, 20), 'label');
        echo "
                                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 22
        echo "
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "plainPassword", [], "any", false, false, false, 23), 'errors');
        echo "
                                </div>
                                <div class=\"form-group text-white\">
                                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'label');
        echo "
                                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 28
        echo "
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'errors');
        echo "
                                </div>
                                <div class=\"form-group text-white\">
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'label');
        echo "
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 34
        echo "
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'errors');
        echo "
                                </div>
                                <div class=\"form-group text-white\">
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "numero", [], "any", false, false, false, 38), 'label');
        echo "
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "numero", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 40
        echo "
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "numero", [], "any", false, false, false, 41), 'errors');
        echo "
                                </div>
                                <div class=\"form-group text-white\">
                                    <div class=\"row col-md-12\">
                                        <p class=\"col-md-7\">By checking the box you agree the </p>
                                        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terms");
        echo "\" class=\"col-md-3 text-primary\">Terms & conditions</a>
                                        <div class=\"col-md-2\">
                                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "agreeTerms", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 49
        echo "
                                        </div>
                                    </div>
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "agreeTerms", [], "any", false, false, false, 52), 'errors');
        echo "
                                </div>
                                <button type=\"submit\" class=\"btn btn-light mt-3\">Register</button>
                                ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 55,  172 => 52,  167 => 49,  165 => 48,  160 => 46,  152 => 41,  149 => 40,  147 => 39,  143 => 38,  137 => 35,  134 => 34,  132 => 33,  128 => 32,  122 => 29,  119 => 28,  117 => 27,  113 => 26,  107 => 23,  104 => 22,  102 => 21,  98 => 20,  92 => 17,  89 => 16,  87 => 15,  83 => 14,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block body %}
    <div style=\"padding: 5rem; background: black\" class=\"mx-auto\"></div>
    <section class=\"hero-section\">
            <div class=\"hs-item set-bg\" data-setbg=\"front/img/hero/hero-2.jpg\">
                <div class=\"container p-5\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text ml-5\">
                                <h1 class=\"h1 mb-3 font-weight-normal text-white\">Inscription</h1>
                                {{ form_start(registrationForm, {'attr':{'novalidate':'novalidate'}}) }}
                                <div class=\"form-group text-white\">
                                    {{ form_label(registrationForm.email) }}
                                    {{ form_widget(registrationForm.email, {
                                        'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(registrationForm.email) }}
                                </div>
                                <div class=\"form-group text-white\">
                                    {{ form_label(registrationForm.plainPassword) }}
                                    {{ form_widget(registrationForm.plainPassword, {
                                        'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(registrationForm.plainPassword) }}
                                </div>
                                <div class=\"form-group text-white\">
                                    {{ form_label(registrationForm.nom) }}
                                    {{ form_widget(registrationForm.nom, {
                                        'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(registrationForm.nom) }}
                                </div>
                                <div class=\"form-group text-white\">
                                    {{ form_label(registrationForm.prenom) }}
                                    {{ form_widget(registrationForm.prenom, {
                                        'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(registrationForm.prenom) }}
                                </div>
                                <div class=\"form-group text-white\">
                                    {{ form_label(registrationForm.numero) }}
                                    {{ form_widget(registrationForm.numero, {
                                        'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(registrationForm.numero) }}
                                </div>
                                <div class=\"form-group text-white\">
                                    <div class=\"row col-md-12\">
                                        <p class=\"col-md-7\">By checking the box you agree the </p>
                                        <a href=\"{{ path('app_terms') }}\" class=\"col-md-3 text-primary\">Terms & conditions</a>
                                        <div class=\"col-md-2\">
                                            {{ form_widget(registrationForm.agreeTerms, {
                                                'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    {{ form_errors(registrationForm.agreeTerms) }}
                                </div>
                                <button type=\"submit\" class=\"btn btn-light mt-3\">Register</button>
                                {{ form_end(registrationForm) }}
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
{% endblock %}
", "user/register.html.twig", "C:\\Users\\user\\Documents\\GitHub\\pi\\gestionsalledesport\\templates\\user\\register.html.twig");
    }
}
