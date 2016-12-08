<?php

/* @PlateForme/layout.html.twig */
class __TwigTemplate_196fcef981784405e126b6e4d304d1385fbcf87f244f3ab6d588355c3ef99bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@PlateForme/Default/basePlateforme.html.twig", "@PlateForme/layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PlateForme/Default/basePlateforme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcc8f479bf188b1bd8c8a7aec1c5f3529b577093e3fbab142a924732d17e94aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc8f479bf188b1bd8c8a7aec1c5f3529b577093e3fbab142a924732d17e94aa->enter($__internal_dcc8f479bf188b1bd8c8a7aec1c5f3529b577093e3fbab142a924732d17e94aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PlateForme/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcc8f479bf188b1bd8c8a7aec1c5f3529b577093e3fbab142a924732d17e94aa->leave($__internal_dcc8f479bf188b1bd8c8a7aec1c5f3529b577093e3fbab142a924732d17e94aa_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c681cb770c4a0c552d2cc311c897f1380d3efc50bf00f8d3320ac6c684d24ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c681cb770c4a0c552d2cc311c897f1380d3efc50bf00f8d3320ac6c684d24ba4->enter($__internal_c681cb770c4a0c552d2cc311c897f1380d3efc50bf00f8d3320ac6c684d24ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "
    <p>JE SUIS UN HEADER</p>

";
        
        $__internal_c681cb770c4a0c552d2cc311c897f1380d3efc50bf00f8d3320ac6c684d24ba4->leave($__internal_c681cb770c4a0c552d2cc311c897f1380d3efc50bf00f8d3320ac6c684d24ba4_prof);

    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        $__internal_24fc6cc0eff02e3020d1be84f3d63d029b8517df8b67c4ef0effa641aba6a6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fc6cc0eff02e3020d1be84f3d63d029b8517df8b67c4ef0effa641aba6a6ef->enter($__internal_24fc6cc0eff02e3020d1be84f3d63d029b8517df8b67c4ef0effa641aba6a6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 10
        echo "
    <p>ET MOI UN FOOTER</p>

";
        
        $__internal_24fc6cc0eff02e3020d1be84f3d63d029b8517df8b67c4ef0effa641aba6a6ef->leave($__internal_24fc6cc0eff02e3020d1be84f3d63d029b8517df8b67c4ef0effa641aba6a6ef_prof);

    }

    public function getTemplateName()
    {
        return "@PlateForme/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@PlateForme/Default/basePlateforme.html.twig' %}

{% block header %}

    <p>JE SUIS UN HEADER</p>

{% endblock %}

{% block footer %}

    <p>ET MOI UN FOOTER</p>

{% endblock %}", "@PlateForme/layout.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/layout.html.twig");
    }
}
