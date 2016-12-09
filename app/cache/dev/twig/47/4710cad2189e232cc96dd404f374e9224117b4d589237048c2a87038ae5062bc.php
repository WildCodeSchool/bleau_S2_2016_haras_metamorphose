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
        $__internal_4f7ffb1b4f9e19b9eb588854bb0bd649d36e7074f7e34e4fabc0e7de45850f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7ffb1b4f9e19b9eb588854bb0bd649d36e7074f7e34e4fabc0e7de45850f71->enter($__internal_4f7ffb1b4f9e19b9eb588854bb0bd649d36e7074f7e34e4fabc0e7de45850f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f7ffb1b4f9e19b9eb588854bb0bd649d36e7074f7e34e4fabc0e7de45850f71->leave($__internal_4f7ffb1b4f9e19b9eb588854bb0bd649d36e7074f7e34e4fabc0e7de45850f71_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a1c31de0eb8c670bafdc50bec7d0bc98d838135d3ff2df752e48b75d005a39f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c31de0eb8c670bafdc50bec7d0bc98d838135d3ff2df752e48b75d005a39f6->enter($__internal_a1c31de0eb8c670bafdc50bec7d0bc98d838135d3ff2df752e48b75d005a39f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a1c31de0eb8c670bafdc50bec7d0bc98d838135d3ff2df752e48b75d005a39f6->leave($__internal_a1c31de0eb8c670bafdc50bec7d0bc98d838135d3ff2df752e48b75d005a39f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0680c4760a543815f568518a9713c277008400f13e8ca824221ef459f60851f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0680c4760a543815f568518a9713c277008400f13e8ca824221ef459f60851f3->enter($__internal_0680c4760a543815f568518a9713c277008400f13e8ca824221ef459f60851f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0680c4760a543815f568518a9713c277008400f13e8ca824221ef459f60851f3->leave($__internal_0680c4760a543815f568518a9713c277008400f13e8ca824221ef459f60851f3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18d01d967e6f9bb8098eeabe8281de5061d6f9868f7f0b49034230b9c33adcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d01d967e6f9bb8098eeabe8281de5061d6f9868f7f0b49034230b9c33adcca->enter($__internal_18d01d967e6f9bb8098eeabe8281de5061d6f9868f7f0b49034230b9c33adcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_18d01d967e6f9bb8098eeabe8281de5061d6f9868f7f0b49034230b9c33adcca->leave($__internal_18d01d967e6f9bb8098eeabe8281de5061d6f9868f7f0b49034230b9c33adcca_prof);

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
