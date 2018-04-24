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
        $__internal_af67ecf09613ea17ecbbfe9182dfa7e6b03c8bb0eddc186f4ee5d804ca17a861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af67ecf09613ea17ecbbfe9182dfa7e6b03c8bb0eddc186f4ee5d804ca17a861->enter($__internal_af67ecf09613ea17ecbbfe9182dfa7e6b03c8bb0eddc186f4ee5d804ca17a861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af67ecf09613ea17ecbbfe9182dfa7e6b03c8bb0eddc186f4ee5d804ca17a861->leave($__internal_af67ecf09613ea17ecbbfe9182dfa7e6b03c8bb0eddc186f4ee5d804ca17a861_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_a6951a3ffcfbc4a891e95f4da34eed7aafa37e2afa99736cc3d27c0a685f369a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6951a3ffcfbc4a891e95f4da34eed7aafa37e2afa99736cc3d27c0a685f369a->enter($__internal_a6951a3ffcfbc4a891e95f4da34eed7aafa37e2afa99736cc3d27c0a685f369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_a6951a3ffcfbc4a891e95f4da34eed7aafa37e2afa99736cc3d27c0a685f369a->leave($__internal_a6951a3ffcfbc4a891e95f4da34eed7aafa37e2afa99736cc3d27c0a685f369a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_943bd175e33b21d4d9c2785e6496972a64b6bee455484baa95dc56b3dc1c3fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943bd175e33b21d4d9c2785e6496972a64b6bee455484baa95dc56b3dc1c3fd9->enter($__internal_943bd175e33b21d4d9c2785e6496972a64b6bee455484baa95dc56b3dc1c3fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t<div class=\"ui raised very padded text container segment\">
\t  <h2 class=\"ui header\">Bienvenue sur le Back Office</h2>
\t</div>

";
        
        $__internal_943bd175e33b21d4d9c2785e6496972a64b6bee455484baa95dc56b3dc1c3fd9->leave($__internal_943bd175e33b21d4d9c2785e6496972a64b6bee455484baa95dc56b3dc1c3fd9_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6d13649df8976ea8dfe1a16088f49348f769b7004f936a852a6742b7ae3d28ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d13649df8976ea8dfe1a16088f49348f769b7004f936a852a6742b7ae3d28ac->enter($__internal_6d13649df8976ea8dfe1a16088f49348f769b7004f936a852a6742b7ae3d28ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_6d13649df8976ea8dfe1a16088f49348f769b7004f936a852a6742b7ae3d28ac->leave($__internal_6d13649df8976ea8dfe1a16088f49348f769b7004f936a852a6742b7ae3d28ac_prof);

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
