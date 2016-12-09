<?php

/* page/index.html.twig */
class __TwigTemplate_236b57c6287f487df4d1c6e081baaecbe8c7b711f8e4a42519b461deca45218c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "page/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"_admin\">
        ";
        // line 5
        $this->loadTemplate("HarasBundle::nav_admin.html.twig", "page/index.html.twig", 5)->display($context);
        // line 6
        echo "        <div class=\"container\">
            <div class=\"cadre\">
                <div class=\"row\">
                    <h1 class=\"admin_title\">Which page do you want to modify ?</h1>
                    <div class=\"admin_button col m12\">
                        <a class=\"waves-effect waves-light btn\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("name" => "homepage"));
        echo "\">
                            <input type=\"submit\" value=\"Homepage\"/>
                        </a>
                    </div>
                    <div class=\"row\">
                        <div class=\"admin_button col m3\">
                            <a class=\"waves-effect waves-light btn\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("name" => "section1"));
        echo "\">
                                <input type=\"submit\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["section1Name"] ?? null), "html", null, true);
        echo "\"/>
                            </a>
                        </div>

                        <div class=\"admin_button col m3\">
                            <a class=\"waves-effect waves-light btn\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("name" => "section2"));
        echo "\">
                                <input type=\"submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["section2Name"] ?? null), "html", null, true);
        echo "\"/>
                            </a>
                        </div>
                        <div class=\"admin_button col m3\">
                            <a class=\"waves-effect waves-light btn\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("name" => "section3"));
        echo "\">
                                <input type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["section3Name"] ?? null), "html", null, true);
        echo "\"/>
                            </a>
                        </div>

                        <div class=\"admin_button col m3\">
                            <a class=\"waves-effect waves-light btn\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("name" => "section4"));
        echo "\">
                                <input type=\"submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["section4Name"] ?? null), "html", null, true);
        echo "\"/>
                            </a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"admin_button col m12\">
                            <a class=\"waves-effect waves-light btn\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("name" => "contact"));
        echo "\">
                                <input type=\"submit\" value=\"Contact\"/>
                            </a>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"admin_button col m6\">
                            <a class=\"waves-effect waves-light btn\" href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("name" => "header"));
        echo "\">
                                <input type=\"submit\" value=\"Header\"/>
                            </a>
                        </div>

                        <div class=\"admin_button col m6\">
                            <a class=\"waves-effect waves-light btn\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_show", array("name" => "footer"));
        echo "\">
                                <input type=\"submit\" value=\"Footer\"/>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  110 => 48,  100 => 41,  91 => 35,  87 => 34,  79 => 29,  75 => 28,  68 => 24,  64 => 23,  56 => 18,  52 => 17,  43 => 11,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page/index.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/app/Resources/views/page/index.html.twig");
    }
}
