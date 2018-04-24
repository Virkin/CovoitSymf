<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ec4440d4f37be42ba9041611387133e96d6a6a19b2937f0ba61d3ead1fe266b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5694f1fa53b2206674da26de41b26cdce3859934944b4b97d7fba922c4b4a860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5694f1fa53b2206674da26de41b26cdce3859934944b4b97d7fba922c4b4a860->enter($__internal_5694f1fa53b2206674da26de41b26cdce3859934944b4b97d7fba922c4b4a860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5694f1fa53b2206674da26de41b26cdce3859934944b4b97d7fba922c4b4a860->leave($__internal_5694f1fa53b2206674da26de41b26cdce3859934944b4b97d7fba922c4b4a860_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e1083e52388e9eb2300901c523333647a0944f8abfa1661e96ef7f11c57bd70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1083e52388e9eb2300901c523333647a0944f8abfa1661e96ef7f11c57bd70b->enter($__internal_e1083e52388e9eb2300901c523333647a0944f8abfa1661e96ef7f11c57bd70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e1083e52388e9eb2300901c523333647a0944f8abfa1661e96ef7f11c57bd70b->leave($__internal_e1083e52388e9eb2300901c523333647a0944f8abfa1661e96ef7f11c57bd70b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_152e32f1323e17acc4942c53996edc8bf92837da9c69bec6f876dd67a041c9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152e32f1323e17acc4942c53996edc8bf92837da9c69bec6f876dd67a041c9e5->enter($__internal_152e32f1323e17acc4942c53996edc8bf92837da9c69bec6f876dd67a041c9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_152e32f1323e17acc4942c53996edc8bf92837da9c69bec6f876dd67a041c9e5->leave($__internal_152e32f1323e17acc4942c53996edc8bf92837da9c69bec6f876dd67a041c9e5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52a4930087fef82155d50c28c43afed74f8d5b3dbc4087aa9dbec0f75f85738f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a4930087fef82155d50c28c43afed74f8d5b3dbc4087aa9dbec0f75f85738f->enter($__internal_52a4930087fef82155d50c28c43afed74f8d5b3dbc4087aa9dbec0f75f85738f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52a4930087fef82155d50c28c43afed74f8d5b3dbc4087aa9dbec0f75f85738f->leave($__internal_52a4930087fef82155d50c28c43afed74f8d5b3dbc4087aa9dbec0f75f85738f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/CovoitSymf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
