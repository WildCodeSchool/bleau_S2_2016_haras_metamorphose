<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_9be22b368acb636881493ad5c6df26342e6b3ea47ba1e87a9d1cd7183c391c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f5be6de90b71a4ae4f96a14637c7e3d697e60a2db23188f29991d00a3c38207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5be6de90b71a4ae4f96a14637c7e3d697e60a2db23188f29991d00a3c38207->enter($__internal_5f5be6de90b71a4ae4f96a14637c7e3d697e60a2db23188f29991d00a3c38207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f5be6de90b71a4ae4f96a14637c7e3d697e60a2db23188f29991d00a3c38207->leave($__internal_5f5be6de90b71a4ae4f96a14637c7e3d697e60a2db23188f29991d00a3c38207_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da49e8d51fe039c8849ee4ca0c27235e338fbdf83222db48ee133abea26f9917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da49e8d51fe039c8849ee4ca0c27235e338fbdf83222db48ee133abea26f9917->enter($__internal_da49e8d51fe039c8849ee4ca0c27235e338fbdf83222db48ee133abea26f9917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container register\">
";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "    </div>
";
        
        $__internal_da49e8d51fe039c8849ee4ca0c27235e338fbdf83222db48ee133abea26f9917->leave($__internal_da49e8d51fe039c8849ee4ca0c27235e338fbdf83222db48ee133abea26f9917_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fde323f85638d606495b3af563e45293241d7d420d8a1993e82af1f9ab099851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde323f85638d606495b3af563e45293241d7d420d8a1993e82af1f9ab099851->enter($__internal_fde323f85638d606495b3af563e45293241d7d420d8a1993e82af1f9ab099851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 6)->display($context);
        
        $__internal_fde323f85638d606495b3af563e45293241d7d420d8a1993e82af1f9ab099851->leave($__internal_fde323f85638d606495b3af563e45293241d7d420d8a1993e82af1f9ab099851_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  54 => 5,  46 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"container register\">
{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
    </div>
{% endblock %}", "UserBundle:Registration:register.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
