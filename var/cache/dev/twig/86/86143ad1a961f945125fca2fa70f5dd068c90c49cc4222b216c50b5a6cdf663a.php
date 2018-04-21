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
        $__internal_43961a8f1633f47fcedd4d48a44ddbb9ae25b55bbfaeba6dea6f0d1c3ea3c04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43961a8f1633f47fcedd4d48a44ddbb9ae25b55bbfaeba6dea6f0d1c3ea3c04f->enter($__internal_43961a8f1633f47fcedd4d48a44ddbb9ae25b55bbfaeba6dea6f0d1c3ea3c04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_43961a8f1633f47fcedd4d48a44ddbb9ae25b55bbfaeba6dea6f0d1c3ea3c04f->leave($__internal_43961a8f1633f47fcedd4d48a44ddbb9ae25b55bbfaeba6dea6f0d1c3ea3c04f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bde3becb9ca2a2c68dc0117b34e73beccba7174ab55f7caaf38e10560ab72088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde3becb9ca2a2c68dc0117b34e73beccba7174ab55f7caaf38e10560ab72088->enter($__internal_bde3becb9ca2a2c68dc0117b34e73beccba7174ab55f7caaf38e10560ab72088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bde3becb9ca2a2c68dc0117b34e73beccba7174ab55f7caaf38e10560ab72088->leave($__internal_bde3becb9ca2a2c68dc0117b34e73beccba7174ab55f7caaf38e10560ab72088_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a23d7325a95bd192c08d5f594d1c1ba8b8854647623e632681f97a8ade23419f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23d7325a95bd192c08d5f594d1c1ba8b8854647623e632681f97a8ade23419f->enter($__internal_a23d7325a95bd192c08d5f594d1c1ba8b8854647623e632681f97a8ade23419f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "             <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/semantic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        
        $__internal_a23d7325a95bd192c08d5f594d1c1ba8b8854647623e632681f97a8ade23419f->leave($__internal_a23d7325a95bd192c08d5f594d1c1ba8b8854647623e632681f97a8ade23419f_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_de52153da3f7e400d64cde9876887a2e1b28d48acf7388acfa4e791623767914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de52153da3f7e400d64cde9876887a2e1b28d48acf7388acfa4e791623767914->enter($__internal_de52153da3f7e400d64cde9876887a2e1b28d48acf7388acfa4e791623767914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_de52153da3f7e400d64cde9876887a2e1b28d48acf7388acfa4e791623767914->leave($__internal_de52153da3f7e400d64cde9876887a2e1b28d48acf7388acfa4e791623767914_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4acbc7d0b58328c917ac08a3f3e531fbcde0670fb1242629774bfd70a8a60534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acbc7d0b58328c917ac08a3f3e531fbcde0670fb1242629774bfd70a8a60534->enter($__internal_4acbc7d0b58328c917ac08a3f3e531fbcde0670fb1242629774bfd70a8a60534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4acbc7d0b58328c917ac08a3f3e531fbcde0670fb1242629774bfd70a8a60534->leave($__internal_4acbc7d0b58328c917ac08a3f3e531fbcde0670fb1242629774bfd70a8a60534_prof);

    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bfdfd79a324bf18b15fc13648328af55e2a4e95881b18c54ecc8996ef8e7d4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdfd79a324bf18b15fc13648328af55e2a4e95881b18c54ecc8996ef8e7d4fa->enter($__internal_bfdfd79a324bf18b15fc13648328af55e2a4e95881b18c54ecc8996ef8e7d4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_bfdfd79a324bf18b15fc13648328af55e2a4e95881b18c54ecc8996ef8e7d4fa->leave($__internal_bfdfd79a324bf18b15fc13648328af55e2a4e95881b18c54ecc8996ef8e7d4fa_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_497e844079a2a948f0d77c76fdf7cd41daa30bce1caa1e5f4ff0d82cd71ba970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497e844079a2a948f0d77c76fdf7cd41daa30bce1caa1e5f4ff0d82cd71ba970->enter($__internal_497e844079a2a948f0d77c76fdf7cd41daa30bce1caa1e5f4ff0d82cd71ba970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/semantic.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\" integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\">
            </script>
        ";
        
        $__internal_497e844079a2a948f0d77c76fdf7cd41daa30bce1caa1e5f4ff0d82cd71ba970->leave($__internal_497e844079a2a948f0d77c76fdf7cd41daa30bce1caa1e5f4ff0d82cd71ba970_prof);

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
