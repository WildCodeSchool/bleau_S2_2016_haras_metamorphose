<?php

/* @PlateForme/Default/basePlateforme.html.twig */
class __TwigTemplate_d3461e5185313471f09ff33583c1ec6f6a767e3c01af303f17e721346768c6b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3916ab6bc190b77916a5fb5d6ff47f4352d6f6543bf4ecc841bbad3d1b73184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3916ab6bc190b77916a5fb5d6ff47f4352d6f6543bf4ecc841bbad3d1b73184->enter($__internal_b3916ab6bc190b77916a5fb5d6ff47f4352d6f6543bf4ecc841bbad3d1b73184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PlateForme/Default/basePlateforme.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plateforme/images/icone-cheval.png"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/styles/stylesheets/calendar/fullcalendar.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/styles/stylesheets/style.css"), "html", null, true);
        echo "\">
       <style>
        ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "        </style>
    </head>
    <body>

        ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('footer', $context, $blocks);
        // line 22
        echo "
        ";
        // line 24
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

        ";
        // line 28
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/jquery-3.1.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/materialize.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 32
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "
        ";
        // line 35
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/main.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>

";
        
        $__internal_b3916ab6bc190b77916a5fb5d6ff47f4352d6f6543bf4ecc841bbad3d1b73184->leave($__internal_b3916ab6bc190b77916a5fb5d6ff47f4352d6f6543bf4ecc841bbad3d1b73184_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_115df1368550edd6834ba8e69dbf575fe6caaff792432ee75ff02bded3ec201f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115df1368550edd6834ba8e69dbf575fe6caaff792432ee75ff02bded3ec201f->enter($__internal_115df1368550edd6834ba8e69dbf575fe6caaff792432ee75ff02bded3ec201f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PLateforme du Haras de la métamorphose";
        
        $__internal_115df1368550edd6834ba8e69dbf575fe6caaff792432ee75ff02bded3ec201f->leave($__internal_115df1368550edd6834ba8e69dbf575fe6caaff792432ee75ff02bded3ec201f_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0e3237b4e43f30f124f6d912639b512e521da1278f29566084d9af367e77927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e3237b4e43f30f124f6d912639b512e521da1278f29566084d9af367e77927->enter($__internal_a0e3237b4e43f30f124f6d912639b512e521da1278f29566084d9af367e77927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 12
        echo "        ";
        
        $__internal_a0e3237b4e43f30f124f6d912639b512e521da1278f29566084d9af367e77927->leave($__internal_a0e3237b4e43f30f124f6d912639b512e521da1278f29566084d9af367e77927_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_6e53f466b35dc8c1f6c35e5901d4bddcae9ec3b9c0d8af98f667e186fcc61998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e53f466b35dc8c1f6c35e5901d4bddcae9ec3b9c0d8af98f667e186fcc61998->enter($__internal_6e53f466b35dc8c1f6c35e5901d4bddcae9ec3b9c0d8af98f667e186fcc61998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6e53f466b35dc8c1f6c35e5901d4bddcae9ec3b9c0d8af98f667e186fcc61998->leave($__internal_6e53f466b35dc8c1f6c35e5901d4bddcae9ec3b9c0d8af98f667e186fcc61998_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a3ae062ae39f981dea820928d3264b7a7ecc00c9e43f1c6717aeda40c03a914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3ae062ae39f981dea820928d3264b7a7ecc00c9e43f1c6717aeda40c03a914->enter($__internal_0a3ae062ae39f981dea820928d3264b7a7ecc00c9e43f1c6717aeda40c03a914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a3ae062ae39f981dea820928d3264b7a7ecc00c9e43f1c6717aeda40c03a914->leave($__internal_0a3ae062ae39f981dea820928d3264b7a7ecc00c9e43f1c6717aeda40c03a914_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3910b868d9e7a6f9d1b076bdb301cf22ad4fb9aeca33b16ff8a9e230ad27242d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3910b868d9e7a6f9d1b076bdb301cf22ad4fb9aeca33b16ff8a9e230ad27242d->enter($__internal_3910b868d9e7a6f9d1b076bdb301cf22ad4fb9aeca33b16ff8a9e230ad27242d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_3910b868d9e7a6f9d1b076bdb301cf22ad4fb9aeca33b16ff8a9e230ad27242d->leave($__internal_3910b868d9e7a6f9d1b076bdb301cf22ad4fb9aeca33b16ff8a9e230ad27242d_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ce695f27a6373ca83ad76225534dd93636a639132ee8ecf5d9205dd1a4a50ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce695f27a6373ca83ad76225534dd93636a639132ee8ecf5d9205dd1a4a50ca->enter($__internal_3ce695f27a6373ca83ad76225534dd93636a639132ee8ecf5d9205dd1a4a50ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ce695f27a6373ca83ad76225534dd93636a639132ee8ecf5d9205dd1a4a50ca->leave($__internal_3ce695f27a6373ca83ad76225534dd93636a639132ee8ecf5d9205dd1a4a50ca_prof);

    }

    public function getTemplateName()
    {
        return "@PlateForme/Default/basePlateforme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 32,  162 => 21,  151 => 19,  140 => 17,  133 => 12,  127 => 11,  115 => 5,  101 => 35,  98 => 33,  95 => 32,  90 => 29,  85 => 28,  80 => 25,  75 => 24,  72 => 22,  70 => 21,  67 => 20,  65 => 19,  62 => 18,  60 => 17,  54 => 13,  52 => 11,  47 => 9,  43 => 8,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}PLateforme du Haras de la métamorphose{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('bundles/plateforme/images/icone-cheval.png') }}\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/haras/styles/stylesheets/calendar/fullcalendar.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/haras/styles/stylesheets/style.css') }}\">
       <style>
        {% block head %}
        {% endblock %}
        </style>
    </head>
    <body>

        {% block header %}{% endblock %}

        {% block body %}{% endblock %}

        {% block footer %}{% endblock %}

        {# FOS JS ROUTING SCRIPT #}
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>

        {# APPEL DES SCRIPTS JS ORDRE Jquery/Materialize/Calendar/Main(en surcharge) #}
        <script src=\"{{ asset('bundles/haras/scripts/jquery-3.1.1.js') }}\"></script>
        <script src=\"{{ asset('bundles/haras/scripts/materialize.min.js') }}\"></script>

        {# APPEL DES JS DE FULLCALENDAR ET AUTRES PAGES #}
        {% block javascripts %}{% endblock %}

        {#SCRIPTS DE SURCHARGE#}
        <script src=\"{{ asset('bundles/haras/scripts/main.js') }}\"></script>

    </body>
</html>

", "@PlateForme/Default/basePlateforme.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/Default/basePlateforme.html.twig");
    }
}
