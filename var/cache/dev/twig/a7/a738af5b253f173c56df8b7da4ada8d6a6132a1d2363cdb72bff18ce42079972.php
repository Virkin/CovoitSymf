<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c50b58b90fefad202ed5a3cb7a81300539d39ab911510716e811ef11064f785a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc82b4cdf05f122c0c600a6e1fd6e30d7f5c7d3c03d195f0f907a0c265b2f27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc82b4cdf05f122c0c600a6e1fd6e30d7f5c7d3c03d195f0f907a0c265b2f27e->enter($__internal_bc82b4cdf05f122c0c600a6e1fd6e30d7f5c7d3c03d195f0f907a0c265b2f27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc82b4cdf05f122c0c600a6e1fd6e30d7f5c7d3c03d195f0f907a0c265b2f27e->leave($__internal_bc82b4cdf05f122c0c600a6e1fd6e30d7f5c7d3c03d195f0f907a0c265b2f27e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2ca0fbec4ddb32b604a15c68a9807ae123883ce9d58590854b542accf34788f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ca0fbec4ddb32b604a15c68a9807ae123883ce9d58590854b542accf34788f->enter($__internal_a2ca0fbec4ddb32b604a15c68a9807ae123883ce9d58590854b542accf34788f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a2ca0fbec4ddb32b604a15c68a9807ae123883ce9d58590854b542accf34788f->leave($__internal_a2ca0fbec4ddb32b604a15c68a9807ae123883ce9d58590854b542accf34788f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01c18e0c553424c799ce14bf442c26f1fa46c3383dbf24f3a2553ed04c78860c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c18e0c553424c799ce14bf442c26f1fa46c3383dbf24f3a2553ed04c78860c->enter($__internal_01c18e0c553424c799ce14bf442c26f1fa46c3383dbf24f3a2553ed04c78860c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_01c18e0c553424c799ce14bf442c26f1fa46c3383dbf24f3a2553ed04c78860c->leave($__internal_01c18e0c553424c799ce14bf442c26f1fa46c3383dbf24f3a2553ed04c78860c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb5939c0d6bff31137bc64ff9ef7f6f88e1a50f751d2e6a6a452d95e56b5c228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5939c0d6bff31137bc64ff9ef7f6f88e1a50f751d2e6a6a452d95e56b5c228->enter($__internal_eb5939c0d6bff31137bc64ff9ef7f6f88e1a50f751d2e6a6a452d95e56b5c228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eb5939c0d6bff31137bc64ff9ef7f6f88e1a50f751d2e6a6a452d95e56b5c228->leave($__internal_eb5939c0d6bff31137bc64ff9ef7f6f88e1a50f751d2e6a6a452d95e56b5c228_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/CovoitSymf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
