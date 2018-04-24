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
        $__internal_8767a64fe3c53e87d0475b76fa34b4e92fabb5a47c705672e7a948788e8b7d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8767a64fe3c53e87d0475b76fa34b4e92fabb5a47c705672e7a948788e8b7d88->enter($__internal_8767a64fe3c53e87d0475b76fa34b4e92fabb5a47c705672e7a948788e8b7d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8767a64fe3c53e87d0475b76fa34b4e92fabb5a47c705672e7a948788e8b7d88->leave($__internal_8767a64fe3c53e87d0475b76fa34b4e92fabb5a47c705672e7a948788e8b7d88_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a79327398904d5b09147a2ed61bb374c192324bce8f402a4876b4f4426ddaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a79327398904d5b09147a2ed61bb374c192324bce8f402a4876b4f4426ddaab->enter($__internal_9a79327398904d5b09147a2ed61bb374c192324bce8f402a4876b4f4426ddaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9a79327398904d5b09147a2ed61bb374c192324bce8f402a4876b4f4426ddaab->leave($__internal_9a79327398904d5b09147a2ed61bb374c192324bce8f402a4876b4f4426ddaab_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_912247b7cc16bfccd924956333d8853ee47724a63a761dc243f5349d4fb9b201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912247b7cc16bfccd924956333d8853ee47724a63a761dc243f5349d4fb9b201->enter($__internal_912247b7cc16bfccd924956333d8853ee47724a63a761dc243f5349d4fb9b201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "             <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/semantic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        
        $__internal_912247b7cc16bfccd924956333d8853ee47724a63a761dc243f5349d4fb9b201->leave($__internal_912247b7cc16bfccd924956333d8853ee47724a63a761dc243f5349d4fb9b201_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_85dbdf2768abfde7d512a21d2cd1832bddd0bafb5add21b433cf2c4552c44883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dbdf2768abfde7d512a21d2cd1832bddd0bafb5add21b433cf2c4552c44883->enter($__internal_85dbdf2768abfde7d512a21d2cd1832bddd0bafb5add21b433cf2c4552c44883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_85dbdf2768abfde7d512a21d2cd1832bddd0bafb5add21b433cf2c4552c44883->leave($__internal_85dbdf2768abfde7d512a21d2cd1832bddd0bafb5add21b433cf2c4552c44883_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0ebdf9cf8ba3d36068b850cb5c4672ae1012d9bc07103dad5b4b0f9f07231ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ebdf9cf8ba3d36068b850cb5c4672ae1012d9bc07103dad5b4b0f9f07231ca->enter($__internal_c0ebdf9cf8ba3d36068b850cb5c4672ae1012d9bc07103dad5b4b0f9f07231ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0ebdf9cf8ba3d36068b850cb5c4672ae1012d9bc07103dad5b4b0f9f07231ca->leave($__internal_c0ebdf9cf8ba3d36068b850cb5c4672ae1012d9bc07103dad5b4b0f9f07231ca_prof);

    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c7b4754b441492899cee40744d992e9fd7bce7678bce7359f7e7e7a7c39f3e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b4754b441492899cee40744d992e9fd7bce7678bce7359f7e7e7a7c39f3e18->enter($__internal_c7b4754b441492899cee40744d992e9fd7bce7678bce7359f7e7e7a7c39f3e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_c7b4754b441492899cee40744d992e9fd7bce7678bce7359f7e7e7a7c39f3e18->leave($__internal_c7b4754b441492899cee40744d992e9fd7bce7678bce7359f7e7e7a7c39f3e18_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a6bff74db33b29022d13038e6fde70daad876b395519b4da5a84fd7f1dd632d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6bff74db33b29022d13038e6fde70daad876b395519b4da5a84fd7f1dd632d->enter($__internal_4a6bff74db33b29022d13038e6fde70daad876b395519b4da5a84fd7f1dd632d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/semantic.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\" integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\">
            </script>
        ";
        
        $__internal_4a6bff74db33b29022d13038e6fde70daad876b395519b4da5a84fd7f1dd632d->leave($__internal_4a6bff74db33b29022d13038e6fde70daad876b395519b4da5a84fd7f1dd632d_prof);

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
