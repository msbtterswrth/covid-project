<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/base/templates/page.html.twig */
class __TwigTemplate_9d1a89f592b6d9e469e1ccafa745a95bf2e400ad64922b6792a8c1c86e28b10b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 14, "set" => 53];
        $filters = ["escape" => 12, "render" => 53, "trim" => 54, "striptags" => 54];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'render', 'trim', 'striptags'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 12
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrap"] ?? null)), "html", null, true);
        echo ">
<a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 14
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 15
            echo "    <section class=\"header\" role=\"header\" aria-label=\"Header\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
            </div>
        </div>
    </section>
";
        }
        // line 22
        echo " 
";
        // line 23
        if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
            // line 24
            echo "    <section class=\"navigation\" role=\"navigation\" aria-label=\"Navigation\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
            echo "
            </div>
        </div>
    </section>
";
        }
        // line 31
        echo " 
";
        // line 32
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 33
            echo "    <section class=\"banner\" role=\"banner\" aria-label=\"Banner\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                ";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
            </div>
        </div>
    </section>
";
        }
        // line 40
        echo " 
";
        // line 41
        if ($this->getAttribute(($context["page"] ?? null), "top", [])) {
            // line 42
            echo "    <section class=\"top\" role=\"complimentary\" aria-label=\"Featured Top Content\" id=\"featured\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top", [])), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    </section>
";
        }
        // line 51
        echo " 
<section class=\"main\" role=\"main\" aria-label=\"Main Content\">
     ";
        // line 53
        $context["contentTop"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])));
        // line 54
        echo "     ";
        if ( !twig_test_empty(twig_trim_filter(strip_tags(($context["contentTop"] ?? null), "<div><img><ul><a>")))) {
            // line 55
            echo "        <section class=\"content-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        ";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
        </section>
    ";
        }
        // line 65
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 66
            echo "        <section class=\"content\" aria-label=\"Content\">
            <div class=\"container\">
                <div class=\"row\">
                     ";
            // line 69
            if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
                echo " 
                        
                        <div class=\"col-xs-12 col-sm-8\">
                            <div class=\"main\">
                                ";
                // line 73
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-4 col-md-3 pull-right\">
                            <div class=\"sidebar\">
                                ";
                // line 78
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
                echo "
                            </div>
                        </div>
                    ";
            } else {
                // line 81
                echo " 
                        <div class=\"col-xs-12\">
                            <div class=\"main\">
                                ";
                // line 84
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 87
            echo "                
                </div>
            </div>
        </section>
    ";
        }
        // line 91
        echo " 
    ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 93
            echo "        <section class=\"content-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
                </div>
            </div>
        </section>
    ";
        }
        // line 100
        echo " 
</section>
";
        // line 102
        if ($this->getAttribute(($context["page"] ?? null), "bottom", [])) {
            // line 103
            echo "    <section class=\"bottom\" role=\"complimentary\" aria-label=\"Bottom Content\">
        <div class=\"container\">
            ";
            // line 105
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom", [])), "html", null, true);
            echo "
        </div>
    </section>
";
        }
        // line 108
        echo " 
";
        // line 109
        if ($this->getAttribute(($context["page"] ?? null), "feature", [])) {
            // line 110
            echo "    <section class=\"feature\" role=\"complimentary\" aria-label=\"Featured Bottom Content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                ";
            // line 113
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature", [])), "html", null, true);
            echo "
            </div>
        </div>
    </section>
";
        }
        // line 117
        echo " 
";
        // line 118
        if (($this->getAttribute(($context["page"] ?? null), "footer", []) || $this->getAttribute(($context["page"] ?? null), "copyright", []))) {
            // line 119
            echo "    <section class=\"footer\" role=\"complimentary\" aria-label=\"Footer Content\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 122
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
            </div>
            <div class=\"row\">
                ";
            // line 125
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "copyright", [])), "html", null, true);
            echo "
            </div>
        </div>
    </section>
";
        }
        // line 130
        echo "</div>
";
        // line 131
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", [])) {
            // line 132
            echo "    <section class=\"offcanvas\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                ";
            // line 135
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "offcanvas", [])), "html", null, true);
            echo "
            </div>
        </div>
    </section>
";
        }
        // line 139
        echo " ";
    }

    public function getTemplateName()
    {
        return "themes/base/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 139,  291 => 135,  286 => 132,  284 => 131,  281 => 130,  273 => 125,  267 => 122,  262 => 119,  260 => 118,  257 => 117,  249 => 113,  244 => 110,  242 => 109,  239 => 108,  232 => 105,  228 => 103,  226 => 102,  222 => 100,  214 => 96,  209 => 93,  207 => 92,  204 => 91,  197 => 87,  190 => 84,  185 => 81,  178 => 78,  170 => 73,  163 => 69,  158 => 66,  155 => 65,  146 => 59,  140 => 55,  137 => 54,  135 => 53,  131 => 51,  122 => 46,  116 => 42,  114 => 41,  111 => 40,  103 => 36,  98 => 33,  96 => 32,  93 => 31,  85 => 27,  80 => 24,  78 => 23,  75 => 22,  67 => 18,  62 => 15,  60 => 14,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/base/templates/page.html.twig", "/home/customer/www/covid19-project.org/public_html/themes/base/templates/page.html.twig");
    }
}
