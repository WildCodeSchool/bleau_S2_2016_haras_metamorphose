<?php

/* HarasBundle::footer.html.twig */
class __TwigTemplate_a445929469ab011acc1f775177b5d1d7142ced7ca197e01f4bdeb4637035de35 extends Twig_Template
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
        echo "\t<div class=\"footer-top wrapper row\">
\t\t<div class=\"footer-left col offset-l1 l6 offset-m1 m6 offset-s1 s6\">
\t\t\t<h1>
\t\t\t\t";
        // line 4
        echo twig_escape_filter($this->env, ($context["footerTitle1"] ?? null), "html", null, true);
        echo "
\t\t\t</h1>
\t\t\t<div class=\"footer-scroll\">
\t\t\t\t<p>";
        // line 7
        echo nl2br(twig_escape_filter($this->env, ($context["footerContent1"] ?? null), "html", null, true));
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-right offset-l1 l6 offset-m1 m6 offset-s1 s6\">
\t\t\t<h1>
\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, ($context["footerTitle2"] ?? null), "html", null, true);
        echo "
\t\t\t</h1>
\t\t\t<div class=\"footer-scroll\">
\t\t\t\t<p>";
        // line 15
        echo nl2br(twig_escape_filter($this->env, ($context["footerContent2"] ?? null), "html", null, true));
        echo "</p>
\t\t\t</div>

\t\t</div>
\t</div>
\t<div id=\"footer-bottom\">
\t\t<div id=\"copyright\">
\t\t\t<p><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">©</a> 2016 Haras de la Métamorphose</p>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "HarasBundle::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  44 => 15,  38 => 12,  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HarasBundle::footer.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/HarasBundle/Resources/views/footer.html.twig");
    }
}
