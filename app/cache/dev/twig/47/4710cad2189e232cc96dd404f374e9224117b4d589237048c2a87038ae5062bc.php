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
        $__internal_d5c1d5f9e2fd54d078ee038cbdd0f783769cc17e0ff70c9274dc7f154c8d97ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c1d5f9e2fd54d078ee038cbdd0f783769cc17e0ff70c9274dc7f154c8d97ed->enter($__internal_d5c1d5f9e2fd54d078ee038cbdd0f783769cc17e0ff70c9274dc7f154c8d97ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5c1d5f9e2fd54d078ee038cbdd0f783769cc17e0ff70c9274dc7f154c8d97ed->leave($__internal_d5c1d5f9e2fd54d078ee038cbdd0f783769cc17e0ff70c9274dc7f154c8d97ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5443fde4acb01fb0ff30f48e30dab509ece1a903940c87053f3e9128df946d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5443fde4acb01fb0ff30f48e30dab509ece1a903940c87053f3e9128df946d9c->enter($__internal_5443fde4acb01fb0ff30f48e30dab509ece1a903940c87053f3e9128df946d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5443fde4acb01fb0ff30f48e30dab509ece1a903940c87053f3e9128df946d9c->leave($__internal_5443fde4acb01fb0ff30f48e30dab509ece1a903940c87053f3e9128df946d9c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ae405af19847401ff264c97eca282d1a23bdce567b48ff0fc4957091a30b911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae405af19847401ff264c97eca282d1a23bdce567b48ff0fc4957091a30b911->enter($__internal_4ae405af19847401ff264c97eca282d1a23bdce567b48ff0fc4957091a30b911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4ae405af19847401ff264c97eca282d1a23bdce567b48ff0fc4957091a30b911->leave($__internal_4ae405af19847401ff264c97eca282d1a23bdce567b48ff0fc4957091a30b911_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffc7fb78eaa2ad62c9d909dea9ee08654cd98cd662d75791ae34e49411dcccd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc7fb78eaa2ad62c9d909dea9ee08654cd98cd662d75791ae34e49411dcccd9->enter($__internal_ffc7fb78eaa2ad62c9d909dea9ee08654cd98cd662d75791ae34e49411dcccd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ffc7fb78eaa2ad62c9d909dea9ee08654cd98cd662d75791ae34e49411dcccd9->leave($__internal_ffc7fb78eaa2ad62c9d909dea9ee08654cd98cd662d75791ae34e49411dcccd9_prof);

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
