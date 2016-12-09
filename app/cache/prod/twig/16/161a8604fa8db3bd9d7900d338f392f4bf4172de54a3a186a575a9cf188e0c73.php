<?php

/* HarasBundle::homepage.html.twig */
class __TwigTemplate_74de5e77144c1354ea6c2c091f655d3d3e8a5f378b0725d86459d4b666220469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Haras/base.html.twig", "HarasBundle::homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        if ((($context["mobile"] ?? null) == false)) {
            // line 6
            echo "    ";
            if ((($context["isVideo"] ?? null) == false)) {
                // line 7
                echo "    <body id=\"_homepage\" background=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["homepageBackground"] ?? null), "path", array())), "html", null, true);
                echo "\">
        <div id=\"homepage_wrapper\">
    ";
            } else {
                // line 10
                echo "    <body id=\"_homepage\">
        <div id=\"homepage_wrapper\">
            <video id=\"homepage_video\" autoplay loop muted>
                <source src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["homepageBackground"] ?? null), "path", array())), "html", null, true);
                echo "\" type='video/mp4'>
            </video>
    ";
            }
        } else {
            // line 17
            echo "    <body id=\"_homepage\" background=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["homepageBackgroundMobile"] ?? null), "path", array())), "html", null, true);
            echo "\">
        <div id=\"homepage_wrapper\">
";
        }
        // line 20
        echo "    <header id='_homepage_header'>
        ";
        // line 21
        $this->loadTemplate("HarasBundle::header.html.twig", "HarasBundle::homepage.html.twig", 21)->display($context);
        // line 22
        echo "    </header>

    <div id=\"homepage_corps\">
        <div id=\"homepage_contenu\">
            <!-- Contenu du div généré avec typed.js -->
            <h1 id=\"homepage_catchPhrase\"></h1>
            <div id=\"homepage_focus\">
                <a class=\"section1Link homepage_rubrique\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "section1"));
        echo "\">
                    <div class=\"focus-img-wrapper\">
                        <img class=\"homepage_rubrique_img\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["section1Image"] ?? null), "path", array())), "html", null, true);
        echo "\" alt=\"tourisme\">
                    </div>
                    <p class=\"homepage_rubrique_title\">
                        ";
        // line 34
        echo twig_escape_filter($this->env, ($context["section1Name"] ?? null), "html", null, true);
        echo "
                    </p>
                    <div class=\"focus-text-wrapper\">
                         <p class=\"homepage_rubrique_text\">
                            ";
        // line 38
        echo nl2br(twig_escape_filter($this->env, ($context["section1Text"] ?? null), "html", null, true));
        echo "
                        </p>
                    </div>
    
                </a>
                <a class=\"section2Link homepage_rubrique\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "section2"));
        echo "\">
                    <div class=\"focus-img-wrapper\">
                        <img class=\"homepage_rubrique_img\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["section2Image"] ?? null), "path", array())), "html", null, true);
        echo "\" alt=\"travail\">
                    </div>
                    <p class=\"homepage_rubrique_title\">
                        ";
        // line 48
        echo nl2br(twig_escape_filter($this->env, ($context["section2Name"] ?? null), "html", null, true));
        echo "
                    </p>
                    <div class=\"focus-text-wrapper\">
                        <p class=\"homepage_rubrique_text\">
                            ";
        // line 52
        echo nl2br(twig_escape_filter($this->env, ($context["section2Text"] ?? null), "html", null, true));
        echo "
                        </p>
                    </div>
                </a>
                <a class=\"section3Link homepage_rubrique\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "section3"));
        echo "\">
                    <div class=\"focus-img-wrapper\">
                        <img class=\"homepage_rubrique_img\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["section3Image"] ?? null), "path", array())), "html", null, true);
        echo "\" alt=\"ecologie\">
                    </div>
                    <p class=\"homepage_rubrique_title\">
                        ";
        // line 61
        echo twig_escape_filter($this->env, ($context["section3Name"] ?? null), "html", null, true);
        echo "
                    </p>
                    <div class=\"focus-text-wrapper\">
                         <p class=\"homepage_rubrique_text\">
                            ";
        // line 65
        echo nl2br(twig_escape_filter($this->env, ($context["section3Text"] ?? null), "html", null, true));
        echo "
                        </p>
                    </div>
                </a>
                <a class=\"section4Link homepage_rubrique\" href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("haras_get_page", array("name" => "section4"));
        echo "\">
                    <div class=\"focus-img-wrapper\">
                        <img class=\"homepage_rubrique_img\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["section4Image"] ?? null), "path", array())), "html", null, true);
        echo "\" alt=\"tourisme\">
                    </div>
                    <p class=\"homepage_rubrique_title\">
                        ";
        // line 74
        echo twig_escape_filter($this->env, ($context["section4Name"] ?? null), "html", null, true);
        echo "
                    </p>
                    <div class=\"focus-text-wrapper\">
                         <p class=\"homepage_rubrique_text\">
                            ";
        // line 78
        echo nl2br(twig_escape_filter($this->env, ($context["section4Text"] ?? null), "html", null, true));
        echo "
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <footer id=\"_homepage_footer\">
        ";
        // line 86
        $this->loadTemplate("HarasBundle::footer.html.twig", "HarasBundle::homepage.html.twig", 86)->display($context);
        // line 87
        echo "    </footer>
";
    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        // line 91
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/haras/scripts/typed.js"), "html", null, true);
        echo "\"></script>
    <script>
        // le temps est en ms
        \$(function typedFunction(){
            \$(\"#homepage_catchPhrase\").typed({
                strings: ['";
        // line 97
        echo twig_escape_filter($this->env, ($context["catchPhrase1"] ?? null), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["catchPhrase2"] ?? null), "html", null, true);
        echo "'],
                typeSpeed: 150,
                backSpeed: 50,
                backDelay: 5000
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "HarasBundle::homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 97,  200 => 92,  195 => 91,  192 => 90,  187 => 87,  185 => 86,  174 => 78,  167 => 74,  161 => 71,  156 => 69,  149 => 65,  142 => 61,  136 => 58,  131 => 56,  124 => 52,  117 => 48,  111 => 45,  106 => 43,  98 => 38,  91 => 34,  85 => 31,  80 => 29,  71 => 22,  69 => 21,  66 => 20,  59 => 17,  52 => 13,  47 => 10,  40 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HarasBundle::homepage.html.twig", "/Users/juliengrima/Sites/bleau_S2_2016_haras_metamorphose/src/HarasBundle/Resources/views/homepage.html.twig");
    }
}
