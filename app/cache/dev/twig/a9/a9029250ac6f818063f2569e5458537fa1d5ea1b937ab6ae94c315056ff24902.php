<?php

/* agenda/new.html.twig */
class __TwigTemplate_363c5aa42a91d249cfacafd5fffa349f3bbae3be778d43d3e657b06d0ef5ebf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agenda/new.html.twig", 1);
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
        $__internal_37be4cfddb453a7d79df4dcaa09d9188e91ca3113f3621bbec0872b2e90d474d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37be4cfddb453a7d79df4dcaa09d9188e91ca3113f3621bbec0872b2e90d474d->enter($__internal_37be4cfddb453a7d79df4dcaa09d9188e91ca3113f3621bbec0872b2e90d474d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agenda/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37be4cfddb453a7d79df4dcaa09d9188e91ca3113f3621bbec0872b2e90d474d->leave($__internal_37be4cfddb453a7d79df4dcaa09d9188e91ca3113f3621bbec0872b2e90d474d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_acd5966ccbd91f5f74d177376c83652cb48027064d9a1741cf798fadd8df085e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd5966ccbd91f5f74d177376c83652cb48027064d9a1741cf798fadd8df085e->enter($__internal_acd5966ccbd91f5f74d177376c83652cb48027064d9a1741cf798fadd8df085e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Agenda creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agenda_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_acd5966ccbd91f5f74d177376c83652cb48027064d9a1741cf798fadd8df085e->leave($__internal_acd5966ccbd91f5f74d177376c83652cb48027064d9a1741cf798fadd8df085e_prof);

    }

    public function getTemplateName()
    {
        return "agenda/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Agenda creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('agenda_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "agenda/new.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/app/Resources/views/agenda/new.html.twig");
    }
}
