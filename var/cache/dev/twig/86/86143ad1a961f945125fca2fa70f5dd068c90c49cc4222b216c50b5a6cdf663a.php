<?php

/* base.html.twig */
class __TwigTemplate_77c51220cf31d7ac57fc65a1ec9e4ee23cc8dac78584c00e1abdd1da5cd4bdb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d110cdcfce13718bc792162e84074ca6c1ce1efe397412b3514678a4384b5381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d110cdcfce13718bc792162e84074ca6c1ce1efe397412b3514678a4384b5381->enter($__internal_d110cdcfce13718bc792162e84074ca6c1ce1efe397412b3514678a4384b5381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d110cdcfce13718bc792162e84074ca6c1ce1efe397412b3514678a4384b5381->leave($__internal_d110cdcfce13718bc792162e84074ca6c1ce1efe397412b3514678a4384b5381_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f059ea4be0b47c701bb743b7f9c4af9973bcb131b21022c6b2efe1363511121e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f059ea4be0b47c701bb743b7f9c4af9973bcb131b21022c6b2efe1363511121e->enter($__internal_f059ea4be0b47c701bb743b7f9c4af9973bcb131b21022c6b2efe1363511121e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f059ea4be0b47c701bb743b7f9c4af9973bcb131b21022c6b2efe1363511121e->leave($__internal_f059ea4be0b47c701bb743b7f9c4af9973bcb131b21022c6b2efe1363511121e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18368227eadc7d00a74f74e5a9187a25239a555a46a593f2ca69aa0bcefbf7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18368227eadc7d00a74f74e5a9187a25239a555a46a593f2ca69aa0bcefbf7d7->enter($__internal_18368227eadc7d00a74f74e5a9187a25239a555a46a593f2ca69aa0bcefbf7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18368227eadc7d00a74f74e5a9187a25239a555a46a593f2ca69aa0bcefbf7d7->leave($__internal_18368227eadc7d00a74f74e5a9187a25239a555a46a593f2ca69aa0bcefbf7d7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1641d2c54fe2dff4dcfb8aca5d94ad91f0224759e6ad48d6a8353d8dda9fe2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1641d2c54fe2dff4dcfb8aca5d94ad91f0224759e6ad48d6a8353d8dda9fe2c9->enter($__internal_1641d2c54fe2dff4dcfb8aca5d94ad91f0224759e6ad48d6a8353d8dda9fe2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1641d2c54fe2dff4dcfb8aca5d94ad91f0224759e6ad48d6a8353d8dda9fe2c9->leave($__internal_1641d2c54fe2dff4dcfb8aca5d94ad91f0224759e6ad48d6a8353d8dda9fe2c9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_277b4e10573b90ee269a2997084324cf6ae3a0e79fa6d2636a855d40eed3e4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277b4e10573b90ee269a2997084324cf6ae3a0e79fa6d2636a855d40eed3e4d3->enter($__internal_277b4e10573b90ee269a2997084324cf6ae3a0e79fa6d2636a855d40eed3e4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_277b4e10573b90ee269a2997084324cf6ae3a0e79fa6d2636a855d40eed3e4d3->leave($__internal_277b4e10573b90ee269a2997084324cf6ae3a0e79fa6d2636a855d40eed3e4d3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/CovoitSymf/app/Resources/views/base.html.twig");
    }
}
