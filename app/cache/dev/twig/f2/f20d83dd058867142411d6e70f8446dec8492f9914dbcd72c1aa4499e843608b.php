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
        $__internal_83ab3411d775b2d2ae5c1e19927e1042c4639b2ddf85680946b477ccd19cff84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ab3411d775b2d2ae5c1e19927e1042c4639b2ddf85680946b477ccd19cff84->enter($__internal_83ab3411d775b2d2ae5c1e19927e1042c4639b2ddf85680946b477ccd19cff84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PlateFormeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83ab3411d775b2d2ae5c1e19927e1042c4639b2ddf85680946b477ccd19cff84->leave($__internal_83ab3411d775b2d2ae5c1e19927e1042c4639b2ddf85680946b477ccd19cff84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d508e1fdda990b6dc9aedb9770a4cfb0cf2e0c14eaa348c09a3b489a2f43d579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d508e1fdda990b6dc9aedb9770a4cfb0cf2e0c14eaa348c09a3b489a2f43d579->enter($__internal_d508e1fdda990b6dc9aedb9770a4cfb0cf2e0c14eaa348c09a3b489a2f43d579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <p>VOS GUEULES .... SANS MOI VOUS TENEZ PAS !!!</p><br>


    <div class=\"profil\">

            ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Voir mon profil</a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Créer un compte</a><br>
            ";
        }
        // line 16
        echo "
        ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "            ";
            // line 19
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"> | Se deconnecter</a><br>
        ";
        } else {
            // line 21
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Se connecter</a>
        ";
        }
        // line 23
        echo "    </div><br>

    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agenda");
        echo "\">MON CALENDRIER</a>

";
        
        $__internal_d508e1fdda990b6dc9aedb9770a4cfb0cf2e0c14eaa348c09a3b489a2f43d579->leave($__internal_d508e1fdda990b6dc9aedb9770a4cfb0cf2e0c14eaa348c09a3b489a2f43d579_prof);

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
        return array (  89 => 25,  85 => 23,  79 => 21,  73 => 19,  71 => 18,  69 => 17,  66 => 16,  60 => 14,  55 => 12,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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

    <p>VOS GUEULES .... SANS MOI VOUS TENEZ PAS !!!</p><br>


    <div class=\"profil\">

            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_profile_show') }}\">Voir mon profil</a>
            {% else %}
                <a href=\"{{ path('fos_user_registration_register') }}\">Créer un compte</a><br>
            {% endif %}

        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {#{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
            <a href=\"{{ path('fos_user_security_logout') }}\"> | Se deconnecter</a><br>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a>
        {% endif %}
    </div><br>

    <a href=\"{{ path('agenda') }}\">MON CALENDRIER</a>

{% endblock %}", "PlateFormeBundle:Default:index.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/PlateFormeBundle/Resources/views/Default/index.html.twig");
    }
}
