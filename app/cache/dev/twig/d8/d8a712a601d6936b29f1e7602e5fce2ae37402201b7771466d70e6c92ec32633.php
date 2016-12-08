<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a8f8681e5fee7ddd7a20b7268a371cc23afee28e75ec6c01062c7a184421620a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d1085f96e556a6d76c8b3211d6a2b0f92c043fbc25e18023d3d13dd7a6992f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1085f96e556a6d76c8b3211d6a2b0f92c043fbc25e18023d3d13dd7a6992f0->enter($__internal_5d1085f96e556a6d76c8b3211d6a2b0f92c043fbc25e18023d3d13dd7a6992f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d1085f96e556a6d76c8b3211d6a2b0f92c043fbc25e18023d3d13dd7a6992f0->leave($__internal_5d1085f96e556a6d76c8b3211d6a2b0f92c043fbc25e18023d3d13dd7a6992f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2aa44b242bdb13568bed88dda0932306a7bc0d96e4eee787523cbf8d01b2fe3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa44b242bdb13568bed88dda0932306a7bc0d96e4eee787523cbf8d01b2fe3f->enter($__internal_2aa44b242bdb13568bed88dda0932306a7bc0d96e4eee787523cbf8d01b2fe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2aa44b242bdb13568bed88dda0932306a7bc0d96e4eee787523cbf8d01b2fe3f->leave($__internal_2aa44b242bdb13568bed88dda0932306a7bc0d96e4eee787523cbf8d01b2fe3f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b049d9451a0f198a4757198707bbe16b39ac5eb84db58f505170f988cf22e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b049d9451a0f198a4757198707bbe16b39ac5eb84db58f505170f988cf22e18->enter($__internal_7b049d9451a0f198a4757198707bbe16b39ac5eb84db58f505170f988cf22e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b049d9451a0f198a4757198707bbe16b39ac5eb84db58f505170f988cf22e18->leave($__internal_7b049d9451a0f198a4757198707bbe16b39ac5eb84db58f505170f988cf22e18_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_42a95f125f76c333e0c6cac5c4e59af11319026a4aa99e891f9257ea511508ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a95f125f76c333e0c6cac5c4e59af11319026a4aa99e891f9257ea511508ac->enter($__internal_42a95f125f76c333e0c6cac5c4e59af11319026a4aa99e891f9257ea511508ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_42a95f125f76c333e0c6cac5c4e59af11319026a4aa99e891f9257ea511508ac->leave($__internal_42a95f125f76c333e0c6cac5c4e59af11319026a4aa99e891f9257ea511508ac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
