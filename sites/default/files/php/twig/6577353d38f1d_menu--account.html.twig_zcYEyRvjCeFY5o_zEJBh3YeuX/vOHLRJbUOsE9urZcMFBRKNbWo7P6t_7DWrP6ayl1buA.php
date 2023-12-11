<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/revolt/templates/navigation/menu--account.html.twig */
class __TwigTemplate_818f680b9bc15846f1a7745df9492e23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo "
";
        // line 53
        echo "
";
        // line 54
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 55
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 55, $context, $this->getSourceContext()));
        echo "
    ";
    }

    // line 56
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 57
            echo "      ";
            $macros["menus"] = $this;
            // line 58
            echo "        ";
            if (($context["items"] ?? null)) {
                // line 59
                echo "          ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 60
                    echo "            ";
                    // line 61
                    $context["menu_class"] = [0 => "vt-user-account-menu", 1 => ("vt-user-menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 63
($context["menu_name"] ?? null), 63, $this->source)))];
                    // line 66
                    echo "            <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["menu_class"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo ">
          ";
                } else {
                    // line 68
                    echo "            <ul class=\"vt-submenu\">
          ";
                }
                // line 70
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 71
                    echo "            ";
                    // line 72
                    $context["classes"] = [0 => "vt-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 74
$context["item"], "is_expanded", [], "any", false, false, true, 74)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 75
$context["item"], "is_collapsed", [], "any", false, false, true, 75)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 76
$context["item"], "in_active_trail", [], "any", false, false, true, 76)) ? ("menu-item--active-trail") : (""))];
                    // line 79
                    echo "            <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 79), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 81
                    $context["link_classes"] = [0 => "vt-link", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 83
$context["item"], "in_active_trail", [], "any", false, false, true, 83)) ? ("active") : (""))];
                    // line 86
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 86), 86, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 86), 86, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    echo "
              ";
                    // line 87
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 87)) {
                        // line 88
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 88), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 88, $context, $this->getSourceContext()));
                        echo "
              ";
                    }
                    // line 90
                    echo "            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "          </ul>
        ";
            }
            // line 94
            echo "      ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/revolt/templates/navigation/menu--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 94,  139 => 92,  132 => 90,  126 => 88,  124 => 87,  119 => 86,  117 => 83,  116 => 81,  111 => 79,  109 => 76,  108 => 75,  107 => 74,  106 => 72,  104 => 71,  99 => 70,  95 => 68,  89 => 66,  87 => 63,  86 => 61,  84 => 60,  81 => 59,  78 => 58,  75 => 57,  59 => 56,  52 => 55,  50 => 54,  47 => 53,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/revolt/templates/navigation/menu--account.html.twig", "/var/www/html/drupal/themes/contrib/revolt/templates/navigation/menu--account.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 56, "if" => 58, "set" => 61, "for" => 70);
        static $filters = array("clean_class" => 63, "escape" => 66);
        static $functions = array("link" => 86);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['clean_class', 'escape'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
