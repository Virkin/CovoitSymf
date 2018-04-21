<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_eaaa80eeabe74aaca027f8f607f0bbf5fefab20966cb0e7b2aaffe86f5201010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::Default/backOffice.html.twig", "BackOfficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle::Default/backOffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59e1a9c67b0f6bbb437af15cd1ea7902a3ecd6c5d82788225fd265f2ade6d580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e1a9c67b0f6bbb437af15cd1ea7902a3ecd6c5d82788225fd265f2ade6d580->enter($__internal_59e1a9c67b0f6bbb437af15cd1ea7902a3ecd6c5d82788225fd265f2ade6d580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59e1a9c67b0f6bbb437af15cd1ea7902a3ecd6c5d82788225fd265f2ade6d580->leave($__internal_59e1a9c67b0f6bbb437af15cd1ea7902a3ecd6c5d82788225fd265f2ade6d580_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_81201d8e3e761740b3c08c8b84748b6ad24458e5ab07b8d41a8c300d146b58b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81201d8e3e761740b3c08c8b84748b6ad24458e5ab07b8d41a8c300d146b58b2->enter($__internal_81201d8e3e761740b3c08c8b84748b6ad24458e5ab07b8d41a8c300d146b58b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_81201d8e3e761740b3c08c8b84748b6ad24458e5ab07b8d41a8c300d146b58b2->leave($__internal_81201d8e3e761740b3c08c8b84748b6ad24458e5ab07b8d41a8c300d146b58b2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0af1bc378f4beb92929973072ab6451ed0f6130c6d601af8e0da9f28e31c01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0af1bc378f4beb92929973072ab6451ed0f6130c6d601af8e0da9f28e31c01f->enter($__internal_d0af1bc378f4beb92929973072ab6451ed0f6130c6d601af8e0da9f28e31c01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t<div class=\"ui raised very padded text container segment\">
\t  <h2 class=\"ui header\">Bienvenue sur le Back Office</h2>
\t</div>

";
        
        $__internal_d0af1bc378f4beb92929973072ab6451ed0f6130c6d601af8e0da9f28e31c01f->leave($__internal_d0af1bc378f4beb92929973072ab6451ed0f6130c6d601af8e0da9f28e31c01f_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_814e08bc3ace04de2dd4e875fa4cb3f609840bbd9955e2569fecad25472ae985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814e08bc3ace04de2dd4e875fa4cb3f609840bbd9955e2569fecad25472ae985->enter($__internal_814e08bc3ace04de2dd4e875fa4cb3f609840bbd9955e2569fecad25472ae985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_814e08bc3ace04de2dd4e875fa4cb3f609840bbd9955e2569fecad25472ae985->leave($__internal_814e08bc3ace04de2dd4e875fa4cb3f609840bbd9955e2569fecad25472ae985_prof);

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
        return array (  76 => 16,  70 => 15,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackOfficeBundle::Default/backOffice.html.twig' %}

{% block header %}
\t{{ parent() }}
{% endblock %}

{% block body %}

\t<div class=\"ui raised very padded text container segment\">
\t  <h2 class=\"ui header\">Bienvenue sur le Back Office</h2>
\t</div>

{% endblock %}

{% block footer %}
\t{{ parent() }}
{% endblock %}", "BackOfficeBundle:Default:index.html.twig", "/var/www/html/CovoitSymf/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
