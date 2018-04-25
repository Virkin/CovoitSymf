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
        $__internal_e3c3721f17562d937a8e0f85024575cc042374be432daa9be1110adecb2af919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c3721f17562d937a8e0f85024575cc042374be432daa9be1110adecb2af919->enter($__internal_e3c3721f17562d937a8e0f85024575cc042374be432daa9be1110adecb2af919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3c3721f17562d937a8e0f85024575cc042374be432daa9be1110adecb2af919->leave($__internal_e3c3721f17562d937a8e0f85024575cc042374be432daa9be1110adecb2af919_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_73edbcf95947c323cb69e29feab35a2f27c037f23c8fcbb6fbffef53f43d25e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73edbcf95947c323cb69e29feab35a2f27c037f23c8fcbb6fbffef53f43d25e3->enter($__internal_73edbcf95947c323cb69e29feab35a2f27c037f23c8fcbb6fbffef53f43d25e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_73edbcf95947c323cb69e29feab35a2f27c037f23c8fcbb6fbffef53f43d25e3->leave($__internal_73edbcf95947c323cb69e29feab35a2f27c037f23c8fcbb6fbffef53f43d25e3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2388721d69efd5b6918983d8cfd28afac564b576942e997ca83c383f08d7e777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2388721d69efd5b6918983d8cfd28afac564b576942e997ca83c383f08d7e777->enter($__internal_2388721d69efd5b6918983d8cfd28afac564b576942e997ca83c383f08d7e777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t<div class=\"ui raised very padded text container segment\">
\t  <h2 class=\"ui header\">Bienvenue sur le Back Office</h2>
\t</div>

";
        
        $__internal_2388721d69efd5b6918983d8cfd28afac564b576942e997ca83c383f08d7e777->leave($__internal_2388721d69efd5b6918983d8cfd28afac564b576942e997ca83c383f08d7e777_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3f22a05550ae4db43b36ea55edd9e3032f7042e2a2fab6fd17bc845562445f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f22a05550ae4db43b36ea55edd9e3032f7042e2a2fab6fd17bc845562445f18->enter($__internal_3f22a05550ae4db43b36ea55edd9e3032f7042e2a2fab6fd17bc845562445f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_3f22a05550ae4db43b36ea55edd9e3032f7042e2a2fab6fd17bc845562445f18->leave($__internal_3f22a05550ae4db43b36ea55edd9e3032f7042e2a2fab6fd17bc845562445f18_prof);

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
