<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_eaaa80eeabe74aaca027f8f607f0bbf5fefab20966cb0e7b2aaffe86f5201010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/backOffice.html.twig", "BackOfficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/backOffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dbd39ac06dcf8664b9686b3ce49ff00bb55051d9ae4c764b158a2c266ada912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbd39ac06dcf8664b9686b3ce49ff00bb55051d9ae4c764b158a2c266ada912->enter($__internal_4dbd39ac06dcf8664b9686b3ce49ff00bb55051d9ae4c764b158a2c266ada912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dbd39ac06dcf8664b9686b3ce49ff00bb55051d9ae4c764b158a2c266ada912->leave($__internal_4dbd39ac06dcf8664b9686b3ce49ff00bb55051d9ae4c764b158a2c266ada912_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_6d021361fc3e77d05e8ce0dd09d72ed95b1d74830bc99a1db9cf7b68bb348064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d021361fc3e77d05e8ce0dd09d72ed95b1d74830bc99a1db9cf7b68bb348064->enter($__internal_6d021361fc3e77d05e8ce0dd09d72ed95b1d74830bc99a1db9cf7b68bb348064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_6d021361fc3e77d05e8ce0dd09d72ed95b1d74830bc99a1db9cf7b68bb348064->leave($__internal_6d021361fc3e77d05e8ce0dd09d72ed95b1d74830bc99a1db9cf7b68bb348064_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6425737da0606be29f68cb95e2231dadca928ad9e840b0639525687e3ebfb89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6425737da0606be29f68cb95e2231dadca928ad9e840b0639525687e3ebfb89f->enter($__internal_6425737da0606be29f68cb95e2231dadca928ad9e840b0639525687e3ebfb89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"ui raised very padded text container segment\">
  <h2 class=\"ui header\">Bienvenue sur le Back Office</h2>
</div>

";
        
        $__internal_6425737da0606be29f68cb95e2231dadca928ad9e840b0639525687e3ebfb89f->leave($__internal_6425737da0606be29f68cb95e2231dadca928ad9e840b0639525687e3ebfb89f_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/backOffice.html.twig' %}

{% block header %}
\t{{ parent() }}
{% endblock %}

{% block body %}

<div class=\"ui raised very padded text container segment\">
  <h2 class=\"ui header\">Bienvenue sur le Back Office</h2>
</div>

{% endblock %}", "BackOfficeBundle:Default:index.html.twig", "/var/www/html/CovoitSymf/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
