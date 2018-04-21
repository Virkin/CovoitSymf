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
        $__internal_ec89e62eaa6328e7b7ec854c5cb34ddddb2218fe871d4c705ed3d1670084ee39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec89e62eaa6328e7b7ec854c5cb34ddddb2218fe871d4c705ed3d1670084ee39->enter($__internal_ec89e62eaa6328e7b7ec854c5cb34ddddb2218fe871d4c705ed3d1670084ee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec89e62eaa6328e7b7ec854c5cb34ddddb2218fe871d4c705ed3d1670084ee39->leave($__internal_ec89e62eaa6328e7b7ec854c5cb34ddddb2218fe871d4c705ed3d1670084ee39_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d76b841c0e4d3584212541c07fba957c53d07690a0556d2a748445c59d62ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d76b841c0e4d3584212541c07fba957c53d07690a0556d2a748445c59d62ea7->enter($__internal_2d76b841c0e4d3584212541c07fba957c53d07690a0556d2a748445c59d62ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d76b841c0e4d3584212541c07fba957c53d07690a0556d2a748445c59d62ea7->leave($__internal_2d76b841c0e4d3584212541c07fba957c53d07690a0556d2a748445c59d62ea7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cac21db84ebafde2d1174001cde4e0a50d10b4040db57dfc198533d7b4f54bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac21db84ebafde2d1174001cde4e0a50d10b4040db57dfc198533d7b4f54bd9->enter($__internal_cac21db84ebafde2d1174001cde4e0a50d10b4040db57dfc198533d7b4f54bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cac21db84ebafde2d1174001cde4e0a50d10b4040db57dfc198533d7b4f54bd9->leave($__internal_cac21db84ebafde2d1174001cde4e0a50d10b4040db57dfc198533d7b4f54bd9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca1f74aead8f284b80e987db0d2ee4dfcfa5685a6515370a07fa8f91306d2ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1f74aead8f284b80e987db0d2ee4dfcfa5685a6515370a07fa8f91306d2ae7->enter($__internal_ca1f74aead8f284b80e987db0d2ee4dfcfa5685a6515370a07fa8f91306d2ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ca1f74aead8f284b80e987db0d2ee4dfcfa5685a6515370a07fa8f91306d2ae7->leave($__internal_ca1f74aead8f284b80e987db0d2ee4dfcfa5685a6515370a07fa8f91306d2ae7_prof);

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
