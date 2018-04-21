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
        $__internal_fa51896471e133e953698c61e92fc1fd55b3153bcfee4d60a6fc9ba366a93bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa51896471e133e953698c61e92fc1fd55b3153bcfee4d60a6fc9ba366a93bf4->enter($__internal_fa51896471e133e953698c61e92fc1fd55b3153bcfee4d60a6fc9ba366a93bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_fa51896471e133e953698c61e92fc1fd55b3153bcfee4d60a6fc9ba366a93bf4->leave($__internal_fa51896471e133e953698c61e92fc1fd55b3153bcfee4d60a6fc9ba366a93bf4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1be190ac358023096200bc2c2ec02f51557066af857d6da2fe3b7efbbb9f1266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be190ac358023096200bc2c2ec02f51557066af857d6da2fe3b7efbbb9f1266->enter($__internal_1be190ac358023096200bc2c2ec02f51557066af857d6da2fe3b7efbbb9f1266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1be190ac358023096200bc2c2ec02f51557066af857d6da2fe3b7efbbb9f1266->leave($__internal_1be190ac358023096200bc2c2ec02f51557066af857d6da2fe3b7efbbb9f1266_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e4e51e3dc4419adebbec3391be761c962c2267ac003ee8247d2719da7c18dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4e51e3dc4419adebbec3391be761c962c2267ac003ee8247d2719da7c18dd1->enter($__internal_2e4e51e3dc4419adebbec3391be761c962c2267ac003ee8247d2719da7c18dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "             <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/semantic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        
        $__internal_2e4e51e3dc4419adebbec3391be761c962c2267ac003ee8247d2719da7c18dd1->leave($__internal_2e4e51e3dc4419adebbec3391be761c962c2267ac003ee8247d2719da7c18dd1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c67ab353c0d5863f66f77148e911dae552b86bff78d5d37aa064a95e5c53c0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67ab353c0d5863f66f77148e911dae552b86bff78d5d37aa064a95e5c53c0f9->enter($__internal_c67ab353c0d5863f66f77148e911dae552b86bff78d5d37aa064a95e5c53c0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c67ab353c0d5863f66f77148e911dae552b86bff78d5d37aa064a95e5c53c0f9->leave($__internal_c67ab353c0d5863f66f77148e911dae552b86bff78d5d37aa064a95e5c53c0f9_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c96d2907c5d1fb96ef8e8317ef7b5e57bec9c0a2a784a855aa3685053738a122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96d2907c5d1fb96ef8e8317ef7b5e57bec9c0a2a784a855aa3685053738a122->enter($__internal_c96d2907c5d1fb96ef8e8317ef7b5e57bec9c0a2a784a855aa3685053738a122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/semantic.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c96d2907c5d1fb96ef8e8317ef7b5e57bec9c0a2a784a855aa3685053738a122->leave($__internal_c96d2907c5d1fb96ef8e8317ef7b5e57bec9c0a2a784a855aa3685053738a122_prof);

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
        return array (  104 => 14,  98 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 16,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
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
        {% block stylesheets %}
             <link href=\"{{ asset('dist/semantic.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('dist/semantic.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/CovoitSymf/app/Resources/views/base.html.twig");
    }
}
