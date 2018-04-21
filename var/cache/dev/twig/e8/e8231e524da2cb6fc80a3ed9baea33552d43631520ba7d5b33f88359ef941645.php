<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_eaaa80eeabe74aaca027f8f607f0bbf5fefab20966cb0e7b2aaffe86f5201010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BackOfficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62f1a7ec8e9ddb77c35faa9735cdd2596d4a0a651b56f9648ff27c803ab522db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f1a7ec8e9ddb77c35faa9735cdd2596d4a0a651b56f9648ff27c803ab522db->enter($__internal_62f1a7ec8e9ddb77c35faa9735cdd2596d4a0a651b56f9648ff27c803ab522db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62f1a7ec8e9ddb77c35faa9735cdd2596d4a0a651b56f9648ff27c803ab522db->leave($__internal_62f1a7ec8e9ddb77c35faa9735cdd2596d4a0a651b56f9648ff27c803ab522db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a5bc1dc39277ad7febb01a49c5a9a51225efe3a2e4e81902fa137e4caafd608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5bc1dc39277ad7febb01a49c5a9a51225efe3a2e4e81902fa137e4caafd608->enter($__internal_7a5bc1dc39277ad7febb01a49c5a9a51225efe3a2e4e81902fa137e4caafd608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"ui buttons\">
  <button class=\"ui button\">Cancel</button>
  <div class=\"or\"></div>
  <button class=\"ui positive button\">Save</button>
</div>

";
        
        $__internal_7a5bc1dc39277ad7febb01a49c5a9a51225efe3a2e4e81902fa137e4caafd608->leave($__internal_7a5bc1dc39277ad7febb01a49c5a9a51225efe3a2e4e81902fa137e4caafd608_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"ui buttons\">
  <button class=\"ui button\">Cancel</button>
  <div class=\"or\"></div>
  <button class=\"ui positive button\">Save</button>
</div>

{% endblock %}
", "BackOfficeBundle:Default:index.html.twig", "/var/www/html/CovoitSymf/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
