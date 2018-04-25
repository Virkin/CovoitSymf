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
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90b5afd3d28d2dfa5a01a3db14ff37d57bcb00164c0edfe39ff33c0ef5f52690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b5afd3d28d2dfa5a01a3db14ff37d57bcb00164c0edfe39ff33c0ef5f52690->enter($__internal_90b5afd3d28d2dfa5a01a3db14ff37d57bcb00164c0edfe39ff33c0ef5f52690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_90b5afd3d28d2dfa5a01a3db14ff37d57bcb00164c0edfe39ff33c0ef5f52690->leave($__internal_90b5afd3d28d2dfa5a01a3db14ff37d57bcb00164c0edfe39ff33c0ef5f52690_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d551d3d721e38466053c3f808b25b3b60d1425a493a5ffc26bd3cb2275b4971a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d551d3d721e38466053c3f808b25b3b60d1425a493a5ffc26bd3cb2275b4971a->enter($__internal_d551d3d721e38466053c3f808b25b3b60d1425a493a5ffc26bd3cb2275b4971a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d551d3d721e38466053c3f808b25b3b60d1425a493a5ffc26bd3cb2275b4971a->leave($__internal_d551d3d721e38466053c3f808b25b3b60d1425a493a5ffc26bd3cb2275b4971a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_861d362619be580d575facb1848b06a73e2eacd28ee095188230799fb69cd57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861d362619be580d575facb1848b06a73e2eacd28ee095188230799fb69cd57b->enter($__internal_861d362619be580d575facb1848b06a73e2eacd28ee095188230799fb69cd57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "             <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/semantic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        
        $__internal_861d362619be580d575facb1848b06a73e2eacd28ee095188230799fb69cd57b->leave($__internal_861d362619be580d575facb1848b06a73e2eacd28ee095188230799fb69cd57b_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_6406fba17f23033d0d924dc38f5c67af85cbdcf3621061dd273195e6cba10880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6406fba17f23033d0d924dc38f5c67af85cbdcf3621061dd273195e6cba10880->enter($__internal_6406fba17f23033d0d924dc38f5c67af85cbdcf3621061dd273195e6cba10880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6406fba17f23033d0d924dc38f5c67af85cbdcf3621061dd273195e6cba10880->leave($__internal_6406fba17f23033d0d924dc38f5c67af85cbdcf3621061dd273195e6cba10880_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f73b5a0e3f88bab060aeee7be7dce2797719f88dc33160e998a0f20e18f1de6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73b5a0e3f88bab060aeee7be7dce2797719f88dc33160e998a0f20e18f1de6d->enter($__internal_f73b5a0e3f88bab060aeee7be7dce2797719f88dc33160e998a0f20e18f1de6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f73b5a0e3f88bab060aeee7be7dce2797719f88dc33160e998a0f20e18f1de6d->leave($__internal_f73b5a0e3f88bab060aeee7be7dce2797719f88dc33160e998a0f20e18f1de6d_prof);

    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4ef1b5b6145557fc3c6ee8a5a25f29a24873d3a042dbf4fc20cbe0958556c1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef1b5b6145557fc3c6ee8a5a25f29a24873d3a042dbf4fc20cbe0958556c1ba->enter($__internal_4ef1b5b6145557fc3c6ee8a5a25f29a24873d3a042dbf4fc20cbe0958556c1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_4ef1b5b6145557fc3c6ee8a5a25f29a24873d3a042dbf4fc20cbe0958556c1ba->leave($__internal_4ef1b5b6145557fc3c6ee8a5a25f29a24873d3a042dbf4fc20cbe0958556c1ba_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32b293160631c47c55bc0451c0e44a1625da2c3ff3927d19c92a41fefc2b60d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b293160631c47c55bc0451c0e44a1625da2c3ff3927d19c92a41fefc2b60d7->enter($__internal_32b293160631c47c55bc0451c0e44a1625da2c3ff3927d19c92a41fefc2b60d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/semantic.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\" integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\">
            </script>
        ";
        
        $__internal_32b293160631c47c55bc0451c0e44a1625da2c3ff3927d19c92a41fefc2b60d7->leave($__internal_32b293160631c47c55bc0451c0e44a1625da2c3ff3927d19c92a41fefc2b60d7_prof);

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
        return array (  134 => 16,  128 => 15,  117 => 14,  106 => 13,  95 => 12,  85 => 7,  79 => 6,  67 => 5,  58 => 20,  55 => 15,  52 => 14,  49 => 13,  47 => 12,  40 => 9,  38 => 6,  34 => 5,  28 => 1,);
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
        {% block header %}{% endblock %}
        {% block body %}{% endblock %}
        {% block footer %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('dist/semantic.js') }}\"></script>
            <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\" integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\">
            </script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/CovoitSymf/app/Resources/views/base.html.twig");
    }
}
