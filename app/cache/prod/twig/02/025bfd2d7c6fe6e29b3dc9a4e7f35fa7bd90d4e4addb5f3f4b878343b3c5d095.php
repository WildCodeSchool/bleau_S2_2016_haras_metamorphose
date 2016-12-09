<?php

/* HarasBundle::template.html.twig */
class __TwigTemplate_92af41ffde14987577453713463f6887b8620379d1ca76c868cbc9604ac9744a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Haras/base.html.twig", "HarasBundle::template.html.twig", 1);
        $this->blocks = array(
            'materialize' => array($this, 'block_materialize'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Haras/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_materialize($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css\">
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"_template\" class=\"";
        echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
        echo "\">
    <header id=\"_template_header\">
        ";
        // line 10
        $this->loadTemplate("HarasBundle::header.html.twig", "HarasBundle::template.html.twig", 10)->display($context);
        // line 11
        echo "    </header>
    <div class=\"row grey lighten-3 page-content\">
        <div class=\"central-block col s12 m10 offset-m1 l8 offset-l2 white\">
            <h1 class=\"title center\">";
        // line 14
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "</h1>
            <div class=\"articles\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 17
            echo "                    <div class=\"article-block row center\">
                    ";
            // line 18
            if (array_key_exists("article", $context)) {
                // line 19
                echo "                        <div class=\"article article-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 20
                if (($this->getAttribute($context["article"], "structure", array()) == "imageRight")) {
                    // line 21
                    echo "                            <div class='imageRight'>
                                <img class=\"media image-right right\" src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(twig_first($this->env, $this->getAttribute($context["article"], "medias", array())), "path", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["article"], "medias", array())), "alt", array()), "html", null, true);
                    echo "\"/>
                                <h2>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "</h2>
                                <p class=\"content text-left\">
                                    ";
                    // line 25
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true));
                    echo "
                                </p>
                            </div>
                        ";
                } elseif (($this->getAttribute(                // line 28
$context["article"], "structure", array()) == "imageLeft")) {
                    // line 29
                    echo "                            <div class='imageLeft'>
                                <img class=\"media image-left left\" src=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(twig_first($this->env, $this->getAttribute($context["article"], "medias", array())), "path", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["article"], "medias", array())), "alt", array()), "html", null, true);
                    echo "\"/>
                                <h2>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "</h2>
                                <p class=\"content text-right\">
                                    ";
                    // line 33
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true));
                    echo "
                                </p>
                            </div>
                        ";
                } elseif (($this->getAttribute(                // line 36
$context["article"], "structure", array()) == "video")) {
                    // line 37
                    echo "                                <h2 class=\"col s12\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "</h2>
                                <video src=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "medias", array()), 0, array(), "array"), "path", array())), "html", null, true);
                    echo "\" controls class=\"col s12 m8 offset-m2\">
                                    Your browser doesn't support html5 video
                                </video>
                                <p class=\"content text-video col s12 m10 offset-m1\">
                                    ";
                    // line 42
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true));
                    echo "
                                </p>
                            </div>
                        ";
                } elseif (($this->getAttribute(                // line 45
$context["article"], "structure", array()) == "slider")) {
                    // line 46
                    echo "                            <div class=\"slider\">
                                <ul class=\"medias slides\">
                                ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "medias", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                        // line 49
                        echo "                                    <li class=\"slide\">
                                        <img src=\"";
                        // line 50
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["media"], "path", array())), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "alt", array()), "html", null, true);
                        echo "\">
                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "                                </ul>
                            </div>
                        ";
                }
                // line 56
                echo "                        </div>  <!--  End of .article-id  -->
                    ";
            }
            // line 58
            echo "                    </div>\t<!--  End of article-block  -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </div>  <!-- End of articles -->
            <div class=\"row paginationNav\">
                <ul class=\" col s12 m8 offset-m2 l4 offset-l4 center ";
        // line 62
        echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
        echo "\">
                    <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => ($context["page"] ?? null), "pageNb" => (($context["pageNb"] ?? null) - 1))), "html", null, true);
        echo "\"><< ";
        echo twig_escape_filter($this->env, ($context["navPrev"] ?? null), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => ($context["page"] ?? null), "pageNb" => 1)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["navFirst"] ?? null), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => ($context["page"] ?? null), "pageNb" => (($context["pageNb"] ?? null) + 1))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["navNext"] ?? null), "html", null, true);
        echo " >></a></li>
                </ul>
            </div> <!-- End of page-nav -->
        </div>  <!-- End of central-block -->
    </div> <!-- End of row grey lighten-3 -->
    <footer id=\"_template_footer\">
        ";
        // line 71
        $this->loadTemplate("HarasBundle::footer.html.twig", "HarasBundle::template.html.twig", 71)->display($context);
        // line 72
        echo "    </footer>
<div/> <!-- End of id=\"_template\" class=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
        echo "\" -->
";
    }

    public function getTemplateName()
    {
        return "HarasBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 73,  209 => 72,  207 => 71,  196 => 65,  190 => 64,  184 => 63,  180 => 62,  176 => 60,  169 => 58,  165 => 56,  160 => 53,  149 => 50,  146 => 49,  142 => 48,  138 => 46,  136 => 45,  130 => 42,  123 => 38,  118 => 37,  116 => 36,  110 => 33,  105 => 31,  99 => 30,  96 => 29,  94 => 28,  88 => 25,  83 => 23,  77 => 22,  74 => 21,  72 => 20,  67 => 19,  65 => 18,  62 => 17,  58 => 16,  53 => 14,  48 => 11,  46 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HarasBundle::template.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/HarasBundle/Resources/views/template.html.twig");
    }
}
