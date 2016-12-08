<?php

/* @PlateForme/fullcalendar/views/agenda-views.html.twig */
class __TwigTemplate_1275dd6596d7642841588b773f919139c91da980df227eff4af9834f9c08f5c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@PlateForme/layout.html.twig", "@PlateForme/fullcalendar/views/agenda-views.html.twig", 1);
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
        $__internal_0b9269a9955a3d068d70613b3d5a50269f571b043a5966171e3e056f1ba6baf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9269a9955a3d068d70613b3d5a50269f571b043a5966171e3e056f1ba6baf5->enter($__internal_0b9269a9955a3d068d70613b3d5a50269f571b043a5966171e3e056f1ba6baf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PlateForme/fullcalendar/views/agenda-views.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b9269a9955a3d068d70613b3d5a50269f571b043a5966171e3e056f1ba6baf5->leave($__internal_0b9269a9955a3d068d70613b3d5a50269f571b043a5966171e3e056f1ba6baf5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a91a628f9df237d3c0208a3317dc9e947e9f5fa66c70e49f6abdee19b66238e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91a628f9df237d3c0208a3317dc9e947e9f5fa66c70e49f6abdee19b66238e6->enter($__internal_a91a628f9df237d3c0208a3317dc9e947e9f5fa66c70e49f6abdee19b66238e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/styles/stylesheets/calendar/fullcalendar.print.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/styles/stylesheets/calendar/calendar_main.css"), "html", null, true);
        echo "\">
";
        
        $__internal_a91a628f9df237d3c0208a3317dc9e947e9f5fa66c70e49f6abdee19b66238e6->leave($__internal_a91a628f9df237d3c0208a3317dc9e947e9f5fa66c70e49f6abdee19b66238e6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6ceb1a76da6bc4afdd8db4077ac2b15aba8b812ad578141a44d2b11ef399051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ceb1a76da6bc4afdd8db4077ac2b15aba8b812ad578141a44d2b11ef399051->enter($__internal_a6ceb1a76da6bc4afdd8db4077ac2b15aba8b812ad578141a44d2b11ef399051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agenda_new");
        echo "\">Nouvelle évènement</a>
        </div>
        <div class=\"row\">
            <div class=\"col s12\"></div>
                <div id='calendar'></div>
            </div>
        </div>
    </div>
";
        
        $__internal_a6ceb1a76da6bc4afdd8db4077ac2b15aba8b812ad578141a44d2b11ef399051->leave($__internal_a6ceb1a76da6bc4afdd8db4077ac2b15aba8b812ad578141a44d2b11ef399051_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c9a1f0c683bdd02e52ebc0d7f621e14d3aa576f5e84ddb402a961a395f2789e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9a1f0c683bdd02e52ebc0d7f621e14d3aa576f5e84ddb402a961a395f2789e->enter($__internal_1c9a1f0c683bdd02e52ebc0d7f621e14d3aa576f5e84ddb402a961a395f2789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    <script>
        ";
        // line 23
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "        var role = 'admin';
        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 26
            echo "        var role = 'user';
        ";
        } else {
            // line 28
            echo "        var role = null;
        ";
        }
        // line 30
        echo "    </script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/calendar/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/calendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/calendar/calendar-events.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1c9a1f0c683bdd02e52ebc0d7f621e14d3aa576f5e84ddb402a961a395f2789e->leave($__internal_1c9a1f0c683bdd02e52ebc0d7f621e14d3aa576f5e84ddb402a961a395f2789e_prof);

    }

    public function getTemplateName()
    {
        return "@PlateForme/fullcalendar/views/agenda-views.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  112 => 32,  108 => 31,  105 => 30,  101 => 28,  97 => 26,  93 => 24,  91 => 23,  88 => 22,  82 => 21,  66 => 11,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/haras/styles/stylesheets/calendar/fullcalendar.print.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/haras/styles/stylesheets/calendar/calendar_main.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"\">
            <a href=\"{{ path('agenda_new') }}\">Nouvelle évènement</a>
        </div>
        <div class=\"row\">
            <div class=\"col s12\"></div>
                <div id='calendar'></div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        {% if is_granted('ROLE_ADMIN') %}
        var role = 'admin';
        {% elseif is_granted('ROLE_USER') %}
        var role = 'user';
        {% else %}
        var role = null;
        {% endif %}
    </script>
    <script src=\"{{ asset('bundles/haras/scripts/calendar/moment.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/haras/scripts/calendar/fullcalendar.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/haras/scripts/calendar/calendar-events.js') }}\"></script>
{% endblock %}

", "@PlateForme/fullcalendar/views/agenda-views.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/fullcalendar/views/agenda-views.html.twig");
    }
}
