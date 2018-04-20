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
        $__internal_210f2e7370fb73d68d1105ddf68d13cfc6656c0bd2c8fa9386434792b772f817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210f2e7370fb73d68d1105ddf68d13cfc6656c0bd2c8fa9386434792b772f817->enter($__internal_210f2e7370fb73d68d1105ddf68d13cfc6656c0bd2c8fa9386434792b772f817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_210f2e7370fb73d68d1105ddf68d13cfc6656c0bd2c8fa9386434792b772f817->leave($__internal_210f2e7370fb73d68d1105ddf68d13cfc6656c0bd2c8fa9386434792b772f817_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c13b3518df3b2dee0ce5049f099fc8d4870e003dbe3d043ddb2eed6e3b68a2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13b3518df3b2dee0ce5049f099fc8d4870e003dbe3d043ddb2eed6e3b68a2b6->enter($__internal_c13b3518df3b2dee0ce5049f099fc8d4870e003dbe3d043ddb2eed6e3b68a2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c13b3518df3b2dee0ce5049f099fc8d4870e003dbe3d043ddb2eed6e3b68a2b6->leave($__internal_c13b3518df3b2dee0ce5049f099fc8d4870e003dbe3d043ddb2eed6e3b68a2b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_100f4fa8ae92e33febddaa1403619825dfd2936aedd86e0f1c3ead85308a4812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100f4fa8ae92e33febddaa1403619825dfd2936aedd86e0f1c3ead85308a4812->enter($__internal_100f4fa8ae92e33febddaa1403619825dfd2936aedd86e0f1c3ead85308a4812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_100f4fa8ae92e33febddaa1403619825dfd2936aedd86e0f1c3ead85308a4812->leave($__internal_100f4fa8ae92e33febddaa1403619825dfd2936aedd86e0f1c3ead85308a4812_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c5a128f9ec899bffed7ada90d1c4e2a453960e52e29bd3f471ec13020183dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5a128f9ec899bffed7ada90d1c4e2a453960e52e29bd3f471ec13020183dfb->enter($__internal_4c5a128f9ec899bffed7ada90d1c4e2a453960e52e29bd3f471ec13020183dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4c5a128f9ec899bffed7ada90d1c4e2a453960e52e29bd3f471ec13020183dfb->leave($__internal_4c5a128f9ec899bffed7ada90d1c4e2a453960e52e29bd3f471ec13020183dfb_prof);

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
