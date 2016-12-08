<?php

/* @PlateForme/fullcalendar/views/background-events.html.twig */
class __TwigTemplate_04e50d9e7468f15246e70ffb86a9480c902ea7c52cce6d964e1a00335f264f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@PlateForme/layout.html.twig", "@PlateForme/fullcalendar/views/background-events.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PlateForme/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dec3c0f701875feefd73d6654f0f96940e472e327631582baf438facc853d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dec3c0f701875feefd73d6654f0f96940e472e327631582baf438facc853d39->enter($__internal_5dec3c0f701875feefd73d6654f0f96940e472e327631582baf438facc853d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PlateForme/fullcalendar/views/background-events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dec3c0f701875feefd73d6654f0f96940e472e327631582baf438facc853d39->leave($__internal_5dec3c0f701875feefd73d6654f0f96940e472e327631582baf438facc853d39_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a621312828f8e1e55e16f36b077d717f49663eccd6a06a2d159d9d06642daab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a621312828f8e1e55e16f36b077d717f49663eccd6a06a2d159d9d06642daab->enter($__internal_3a621312828f8e1e55e16f36b077d717f49663eccd6a06a2d159d9d06642daab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/styles/stylesheets/calendar/fullcalendar.print.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/styles/stylesheets/calendar/calendar_main.css"), "html", null, true);
        echo "\">
";
        
        $__internal_3a621312828f8e1e55e16f36b077d717f49663eccd6a06a2d159d9d06642daab->leave($__internal_3a621312828f8e1e55e16f36b077d717f49663eccd6a06a2d159d9d06642daab_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_db88e5ef79d961ce66dc2b129b4acece5322bd833b8eef14f4eeb6984f85b8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db88e5ef79d961ce66dc2b129b4acece5322bd833b8eef14f4eeb6984f85b8df->enter($__internal_db88e5ef79d961ce66dc2b129b4acece5322bd833b8eef14f4eeb6984f85b8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12\"></div>
\t            <div id='calendar'></div>
            </div>
        </div>
    </div>
";
        
        $__internal_db88e5ef79d961ce66dc2b129b4acece5322bd833b8eef14f4eeb6984f85b8df->leave($__internal_db88e5ef79d961ce66dc2b129b4acece5322bd833b8eef14f4eeb6984f85b8df_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a43001999a64f6c42a907ade99c533982a7769dadc955ecb24a26951eaee4cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43001999a64f6c42a907ade99c533982a7769dadc955ecb24a26951eaee4cd0->enter($__internal_a43001999a64f6c42a907ade99c533982a7769dadc955ecb24a26951eaee4cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/calendar/moment.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/calendar/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/calendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/calendar/calendar-events.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a43001999a64f6c42a907ade99c533982a7769dadc955ecb24a26951eaee4cd0->leave($__internal_a43001999a64f6c42a907ade99c533982a7769dadc955ecb24a26951eaee4cd0_prof);

    }

    public function getTemplateName()
    {
        return "@PlateForme/fullcalendar/views/background-events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  91 => 21,  87 => 20,  82 => 19,  76 => 18,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
\t<link rel=\"stylesheet\" href=\"{{ asset('bundles/haras/styles/stylesheets/calendar/fullcalendar.print.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('bundles/haras/styles/stylesheets/calendar/calendar_main.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12\"></div>
\t            <div id='calendar'></div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
\t<script src=\"{{ asset('bundles/haras/scripts/calendar/moment.min.js') }}\"></script>
\t<script src=\"{{ asset('bundles/haras/scripts/calendar/jquery.min.js') }}\"></script>
\t<script src=\"{{ asset('bundles/haras/scripts/calendar/fullcalendar.min.js') }}\"></script>
\t<script src=\"{{ asset('bundles/haras/scripts/calendar/calendar-events.js') }}\"></script>
{% endblock %}
", "@PlateForme/fullcalendar/views/background-events.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/fullcalendar/views/background-events.html.twig");
    }
}
