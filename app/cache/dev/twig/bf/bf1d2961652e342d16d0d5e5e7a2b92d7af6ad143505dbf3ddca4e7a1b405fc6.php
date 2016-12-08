<?php

/* @User/Security/login_content.html.twig */
class __TwigTemplate_c8a7879944783dad634933f19ad3ac7a0fb4150951a5e8d96c84b06bdb0bc7e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PlateFormeBundle:Default:basePlateforme.html.twig", "@User/Security/login_content.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PlateFormeBundle:Default:basePlateforme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cca9229c25c831f8193e096b39799be710b543a475694c1ff724a43097473317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca9229c25c831f8193e096b39799be710b543a475694c1ff724a43097473317->enter($__internal_cca9229c25c831f8193e096b39799be710b543a475694c1ff724a43097473317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cca9229c25c831f8193e096b39799be710b543a475694c1ff724a43097473317->leave($__internal_cca9229c25c831f8193e096b39799be710b543a475694c1ff724a43097473317_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1ff96c8d9357b536ddbcfa167750d1f4cb7ff5495422d96096e2343ef28317d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ff96c8d9357b536ddbcfa167750d1f4cb7ff5495422d96096e2343ef28317d->enter($__internal_d1ff96c8d9357b536ddbcfa167750d1f4cb7ff5495422d96096e2343ef28317d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <br>
    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plate_forme_homepage");
        echo "\">Retour accueil</a>

    ";
        // line 9
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 10
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "
<body id=\"_admin\">
<div class=\"container\">
    <div class=\"cadre\">
        <div class=\"row\">
            <h1 class=\"admin_title\">Se connecter</h1>
                <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    ";
        // line 19
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 20
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    ";
        }
        // line 22
        echo "
                    <label for=\"username\">Nom utilisateur</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                    <label for=\"password\">Mot de passe</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">Se souvenir de moi</label>

                    <div class=\"row\">
                        <div class=\"admin_button col m12\">
                            <input class=\"waves-effect waves-light btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
        echo " \"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
";
        
        $__internal_d1ff96c8d9357b536ddbcfa167750d1f4cb7ff5495422d96096e2343ef28317d->leave($__internal_d1ff96c8d9357b536ddbcfa167750d1f4cb7ff5495422d96096e2343ef28317d_prof);

    }

    public function getTemplateName()
    {
        return "@User/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 34,  81 => 24,  77 => 22,  71 => 20,  69 => 19,  65 => 18,  57 => 12,  51 => 10,  49 => 9,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'PlateFormeBundle:Default:basePlateforme.html.twig' %}


{% block body %}

    <br>
    <a href=\"{{ path('plate_forme_homepage') }}\">Retour accueil</a>

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

<body id=\"_admin\">
<div class=\"container\">
    <div class=\"cadre\">
        <div class=\"row\">
            <h1 class=\"admin_title\">Se connecter</h1>
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}

                    <label for=\"username\">Nom utilisateur</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

                    <label for=\"password\">Mot de passe</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">Se souvenir de moi</label>

                    <div class=\"row\">
                        <div class=\"admin_button col m12\">
                            <input class=\"waves-effect waves-light btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Login'|trans }} \"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
{% endblock %}
", "@User/Security/login_content.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/UserBundle/Resources/views/Security/login_content.html.twig");
    }
}
