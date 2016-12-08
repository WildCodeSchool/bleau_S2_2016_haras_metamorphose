<?php

/* page/show.html.twig */
class __TwigTemplate_539b6d6e92bbfb043fa4e6769ac4abfe01a19f777e7e5fa67e99909d32adf54c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "page/show.html.twig", 1);
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
        $this->loadTemplate("HarasBundle::nav_admin.html.twig", "page/show.html.twig", 5)->display($context);
        // line 6
        echo "        <div class=\"container\">
            <div class=\"cadre\">
                <div class=\"row\">
                    <h1 class=\"admin_title\">";
        // line 9
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["page"] ?? null), "name", array())), "html", null, true);
        echo "</h1>
                    ";
        // line 10
        if (preg_match("{^section}", $this->getAttribute(($context["page"] ?? null), "name", array()))) {
            // line 11
            echo "\t\t\t\t\t\t<hr>
                        <div class=\"row\">
                            <div class=\"admin_button col m12\">
                                <a class=\"waves-effect waves-light btn\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_select", array("name" => $this->getAttribute(($context["page"] ?? null), "name", array()))), "html", null, true);
            echo "\">
                                    Add article to ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "name", array()), "html", null, true);
            echo "
                                </a>
                            </div>
                        </div>
                        <table>
                            <thead>
                            <tr>
                                <th>Name of articles</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "articles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 28
                echo "                                <tr>
                                    <td>
                                        ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("article" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">Edit</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            </tbody>
                        </table>
                    ";
        }
        // line 40
        echo "                    ";
        if ( !twig_test_empty($this->getAttribute(($context["page"] ?? null), "texts", array()))) {
            // line 41
            echo "\t\t\t\t\t\t<hr>
                        <table>
                            <thead>
                            <tr>
                                <th>Name of texts</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "texts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 51
                echo "                                <tr>
                                    <td>
                                        ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "name", array()), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("text_edit", array("page" => $this->getAttribute(($context["page"] ?? null), "id", array()), "text" => $this->getAttribute($context["text"], "id", array()))), "html", null, true);
                echo "\">Edit</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                            </tbody>
                        </table>
                    ";
        }
        // line 63
        echo "                    ";
        if ( !twig_test_empty($this->getAttribute(($context["page"] ?? null), "medias", array()))) {
            // line 64
            echo "                        <hr>
                        <table>
                            <thead>
                            <tr>
                                <th>Name of medias</th>
                                <th>Media</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "medias", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 75
                echo "                                    <tr>
                                        <td>
                                            <p>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "name", array()), "html", null, true);
                echo "</p>
                                        </td>
                                        <td>
                                            ";
                // line 80
                if ((($this->getAttribute($context["media"], "name", array()) == "homepageBackground") && (($context["video"] ?? null) == true))) {
                    // line 81
                    echo "                                                <video class=\"admin_img\" id=\"index_video\" autoplay loop muted>
                                                    <source src=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["media"], "path", array())), "html", null, true);
                    echo "\" type='video/mp4'>
                                                </video>
                                            ";
                } else {
                    // line 85
                    echo "                                                <img class=\"admin_img\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["media"], "path", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "alt", array()), "html", null, true);
                    echo "\">
                                            ";
                }
                // line 87
                echo "                                        </td>
                                        <td>
                                            <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_edit", array("id" => $this->getAttribute($context["media"], "id", array()))), "html", null, true);
                echo "\">Edit</a>
                                        </td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                            </tbody>
                        </table>
                    ";
        }
        // line 96
        echo "                    <hr>
                    <a class=\"admin_button col m12\" href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_index");
        echo "\">
                        <div class=\"waves-effect waves-light btn\">
                            Return to index
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "page/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 97,  210 => 96,  205 => 93,  195 => 89,  191 => 87,  183 => 85,  177 => 82,  174 => 81,  172 => 80,  166 => 77,  162 => 75,  158 => 74,  146 => 64,  143 => 63,  138 => 60,  128 => 56,  122 => 53,  118 => 51,  114 => 50,  103 => 41,  100 => 40,  95 => 37,  85 => 33,  79 => 30,  75 => 28,  71 => 27,  56 => 15,  52 => 14,  47 => 11,  45 => 10,  41 => 9,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page/show.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/app/Resources/views/page/show.html.twig");
    }
}
