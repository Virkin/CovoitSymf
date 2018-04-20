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
        $__internal_b85e3f33f1aff7007123c3f13502b81f4a34c60c6aa1bfe24602b3751a324e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85e3f33f1aff7007123c3f13502b81f4a34c60c6aa1bfe24602b3751a324e1b->enter($__internal_b85e3f33f1aff7007123c3f13502b81f4a34c60c6aa1bfe24602b3751a324e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b85e3f33f1aff7007123c3f13502b81f4a34c60c6aa1bfe24602b3751a324e1b->leave($__internal_b85e3f33f1aff7007123c3f13502b81f4a34c60c6aa1bfe24602b3751a324e1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18fdc25e09d0c4470ce641a13c5c70cc82216bbb21e6194cdc07bc20558530b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fdc25e09d0c4470ce641a13c5c70cc82216bbb21e6194cdc07bc20558530b7->enter($__internal_18fdc25e09d0c4470ce641a13c5c70cc82216bbb21e6194cdc07bc20558530b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18fdc25e09d0c4470ce641a13c5c70cc82216bbb21e6194cdc07bc20558530b7->leave($__internal_18fdc25e09d0c4470ce641a13c5c70cc82216bbb21e6194cdc07bc20558530b7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3214349b4202daf9d0bfefe3d6cbd0041ef3c8ce5ada603c12108325f322ddca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3214349b4202daf9d0bfefe3d6cbd0041ef3c8ce5ada603c12108325f322ddca->enter($__internal_3214349b4202daf9d0bfefe3d6cbd0041ef3c8ce5ada603c12108325f322ddca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3214349b4202daf9d0bfefe3d6cbd0041ef3c8ce5ada603c12108325f322ddca->leave($__internal_3214349b4202daf9d0bfefe3d6cbd0041ef3c8ce5ada603c12108325f322ddca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_924b246084ca0591fdadb129e336b916eee32115c6d791dfce1eaafcc607a4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924b246084ca0591fdadb129e336b916eee32115c6d791dfce1eaafcc607a4fb->enter($__internal_924b246084ca0591fdadb129e336b916eee32115c6d791dfce1eaafcc607a4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_924b246084ca0591fdadb129e336b916eee32115c6d791dfce1eaafcc607a4fb->leave($__internal_924b246084ca0591fdadb129e336b916eee32115c6d791dfce1eaafcc607a4fb_prof);

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
