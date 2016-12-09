<?php

/* HarasBundle::nav_admin.html.twig */
class __TwigTemplate_92a4257c798756bb340261d1269fb2a2cfc2a20e42d76dbe5269d9bf8aaef342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<nav class=\"nav\">
    <div class=\"nav-wrapper\">
        <ul>
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_index", array("name" => "homepage"));
        echo "\">Index</a></li>
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "homepage"));
        echo "\">Homepage</a></li>
            <li><a class=\"background-color: blue\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </a>

            </li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "HarasBundle::nav_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HarasBundle::nav_admin.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/HarasBundle/Resources/views/nav_admin.html.twig");
    }
}
