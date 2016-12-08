<?php

/* PlateFormeBundle:Default:index.html.twig */
class __TwigTemplate_3286ce0d250fb42ccaab3c88356b718d3269cf2f01ed6b5f5606cb5a280290a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@PlateForme/layout.html.twig", "PlateFormeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PlateForme/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da083178a09e1a589e7c45060eb4857b2d11cc4a8a6454d683d6e8762303b101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da083178a09e1a589e7c45060eb4857b2d11cc4a8a6454d683d6e8762303b101->enter($__internal_da083178a09e1a589e7c45060eb4857b2d11cc4a8a6454d683d6e8762303b101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PlateFormeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da083178a09e1a589e7c45060eb4857b2d11cc4a8a6454d683d6e8762303b101->leave($__internal_da083178a09e1a589e7c45060eb4857b2d11cc4a8a6454d683d6e8762303b101_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ec5c8c297322782807d06cdcf3198d2532b9117a33d6eb82b81fc382f0f2fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec5c8c297322782807d06cdcf3198d2532b9117a33d6eb82b81fc382f0f2fcd->enter($__internal_9ec5c8c297322782807d06cdcf3198d2532b9117a33d6eb82b81fc382f0f2fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <p>VOS GUEULES .... SANS MOI VOUS TENEZ PAS !!!</p>

    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agenda");
        echo "\">MON CALENDRIER</a>

";
        
        $__internal_9ec5c8c297322782807d06cdcf3198d2532b9117a33d6eb82b81fc382f0f2fcd->leave($__internal_9ec5c8c297322782807d06cdcf3198d2532b9117a33d6eb82b81fc382f0f2fcd_prof);

    }

    public function getTemplateName()
    {
        return "PlateFormeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@PlateForme/layout.html.twig' %}

{% block body %}

    <p>VOS GUEULES .... SANS MOI VOUS TENEZ PAS !!!</p>

    <a href=\"{{ path('agenda') }}\">MON CALENDRIER</a>

{% endblock %}", "PlateFormeBundle:Default:index.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/Default/index.html.twig");
    }
}
