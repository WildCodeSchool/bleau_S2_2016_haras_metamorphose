<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_780b4ba60eec3a8554061530540f078b02627d9901ec572b30f603d983ba7160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_827be8f1914934695d93096dd761a2b0e6bf00682b3956c469f5b39c93c28a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827be8f1914934695d93096dd761a2b0e6bf00682b3956c469f5b39c93c28a15->enter($__internal_827be8f1914934695d93096dd761a2b0e6bf00682b3956c469f5b39c93c28a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_827be8f1914934695d93096dd761a2b0e6bf00682b3956c469f5b39c93c28a15->leave($__internal_827be8f1914934695d93096dd761a2b0e6bf00682b3956c469f5b39c93c28a15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f618d8d7728da17f908274b6d49e22a64f5d2615a2fa4a0e86d89944e610a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f618d8d7728da17f908274b6d49e22a64f5d2615a2fa4a0e86d89944e610a5c->enter($__internal_4f618d8d7728da17f908274b6d49e22a64f5d2615a2fa4a0e86d89944e610a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4f618d8d7728da17f908274b6d49e22a64f5d2615a2fa4a0e86d89944e610a5c->leave($__internal_4f618d8d7728da17f908274b6d49e22a64f5d2615a2fa4a0e86d89944e610a5c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2cbeef32f3f0c2451f5c9d2f8fda9002e4e3209f07e5438eec3b7bf4835ed633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbeef32f3f0c2451f5c9d2f8fda9002e4e3209f07e5438eec3b7bf4835ed633->enter($__internal_2cbeef32f3f0c2451f5c9d2f8fda9002e4e3209f07e5438eec3b7bf4835ed633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2cbeef32f3f0c2451f5c9d2f8fda9002e4e3209f07e5438eec3b7bf4835ed633->leave($__internal_2cbeef32f3f0c2451f5c9d2f8fda9002e4e3209f07e5438eec3b7bf4835ed633_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8259f137043568d2585299b9c228ef843a7996a325a197ba1d03706faabde3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8259f137043568d2585299b9c228ef843a7996a325a197ba1d03706faabde3ed->enter($__internal_8259f137043568d2585299b9c228ef843a7996a325a197ba1d03706faabde3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8259f137043568d2585299b9c228ef843a7996a325a197ba1d03706faabde3ed->leave($__internal_8259f137043568d2585299b9c228ef843a7996a325a197ba1d03706faabde3ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
