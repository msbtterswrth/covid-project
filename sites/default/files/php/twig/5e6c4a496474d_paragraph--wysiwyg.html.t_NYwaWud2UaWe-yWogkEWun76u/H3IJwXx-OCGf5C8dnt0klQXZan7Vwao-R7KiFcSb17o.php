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

/* themes/base/templates/paragraphs/paragraph--wysiwyg.html.twig */
class __TwigTemplate_a58d26c525108c8c3b0158f32b3650cf02d88a6adbfbd67fbd824bb23e69fe4b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 1, "if" => 2, "set" => 3];
        $filters = ["escape" => 10];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set'],
                ['escape'],
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
        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo " ";
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_heading_size", []), "value", [])) {
            // line 3
            echo "    ";
            $context["heading"] = $this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_heading_size", []), "value", []);
        } else {
            // line 4
            echo "    
    ";
            // line 5
            $context["heading"] = "h2";
        }
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_background_color", []), "value", [])) {
            // line 8
            echo "    ";
            $context["bg"] = (" has-bg " . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_background_color", []), "value", [])));
        }
        // line 10
        echo "    <div class=\"text ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bg"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 11
        if ($this->getAttribute(($context["content"] ?? null), "field_title", [])) {
            // line 12
            echo "            <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
            echo "</";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo ">
        ";
        }
        // line 14
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_blurb", [])), "html", null, true);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/base/templates/paragraphs/paragraph--wysiwyg.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 14,  90 => 12,  88 => 11,  83 => 10,  79 => 8,  77 => 7,  74 => 5,  71 => 4,  67 => 3,  65 => 2,  62 => 1,  58 => 16,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/base/templates/paragraphs/paragraph--wysiwyg.html.twig", "/home/customer/www/covid19-project.org/public_html/themes/base/templates/paragraphs/paragraph--wysiwyg.html.twig");
    }
}
