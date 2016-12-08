<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1b5cf69bd4135eb9c6ed339beb275c927eb3aaed1846f44709877740f8ade090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ae6f606d15f8c957843fe24c5b2f76c0aad09c18d2106c0c86cd4cfd24ae44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae6f606d15f8c957843fe24c5b2f76c0aad09c18d2106c0c86cd4cfd24ae44a->enter($__internal_7ae6f606d15f8c957843fe24c5b2f76c0aad09c18d2106c0c86cd4cfd24ae44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae6f606d15f8c957843fe24c5b2f76c0aad09c18d2106c0c86cd4cfd24ae44a->leave($__internal_7ae6f606d15f8c957843fe24c5b2f76c0aad09c18d2106c0c86cd4cfd24ae44a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2aaa6a4f903b8195deb30e3ab036c822766e21b8a0d1d30951b924e3556af48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aaa6a4f903b8195deb30e3ab036c822766e21b8a0d1d30951b924e3556af48d->enter($__internal_2aaa6a4f903b8195deb30e3ab036c822766e21b8a0d1d30951b924e3556af48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@User/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2aaa6a4f903b8195deb30e3ab036c822766e21b8a0d1d30951b924e3556af48d->leave($__internal_2aaa6a4f903b8195deb30e3ab036c822766e21b8a0d1d30951b924e3556af48d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@User/Security/login_content.html.twig') }}
{% endblock fos_user_content %}

", "FOSUserBundle:Security:login.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
