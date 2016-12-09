<?php

/* HarasBundle::header.html.twig */
class __TwigTemplate_bc06d9db60579bedc87a7f830176373bd8849b08a1aa546ea47765f8e5d084c6 extends Twig_Template
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
        echo "<a class=\"nav\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "homepage"));
        echo "\"><img id=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["logo"] ?? null), "path", array())), "html", null, true);
        echo "\" alt=\"logo\"></a>
<div id=\"langues\">
    <ul>
        <li>
            <a class=\"fr\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("langChoice" => "fr", "name" => ($context["page"] ?? null))), "html", null, true);
        echo "\">
                Fr
            </a>
        </li>
        <p>|<p>
        <li>
            <a class=\"en\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("langChoice" => "en", "name" => ($context["page"] ?? null))), "html", null, true);
        echo "\">
                En
            </a>
        </li>
    </ul>
</div>
<div id=\"social\">
    <a href=\"#\"><img class=\"icone-social\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["facebook"] ?? null), "path", array())), "html", null, true);
        echo "\" alt=\"logo\"></a>
    <a href=\"#\"><img class=\"icone-social\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["twitter"] ?? null), "path", array())), "html", null, true);
        echo "\" alt=\"logo\"></a>
</div>
<div id=\"menu\">
    <ul>
        <li>
            <a class=\"nav accueil\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "homepage"));
        echo "\">
                ";
        // line 25
        echo twig_escape_filter($this->env, ($context["homeName"] ?? null), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a class=\"nav section1Link\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "section1"));
        echo "\">
                ";
        // line 30
        echo twig_escape_filter($this->env, ($context["section1Name"] ?? null), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a class=\"nav section2Link\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "section2"));
        echo "\">
                ";
        // line 35
        echo twig_escape_filter($this->env, ($context["section2Name"] ?? null), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a class=\"nav section3Link\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "section3"));
        echo "\">
                ";
        // line 40
        echo twig_escape_filter($this->env, ($context["section3Name"] ?? null), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a class=\"nav section4Link\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "section4"));
        echo "\">
                ";
        // line 45
        echo twig_escape_filter($this->env, ($context["section4Name"] ?? null), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a class=\"nav contact\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "contact"));
        echo "\">
                ";
        // line 50
        echo twig_escape_filter($this->env, ($context["contactName"] ?? null), "html", null, true);
        echo "
            </a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "HarasBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 50,  115 => 49,  108 => 45,  104 => 44,  97 => 40,  93 => 39,  86 => 35,  82 => 34,  75 => 30,  71 => 29,  64 => 25,  60 => 24,  52 => 19,  48 => 18,  38 => 11,  29 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HarasBundle::header.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/HarasBundle/Resources/views/header.html.twig");
    }
}
