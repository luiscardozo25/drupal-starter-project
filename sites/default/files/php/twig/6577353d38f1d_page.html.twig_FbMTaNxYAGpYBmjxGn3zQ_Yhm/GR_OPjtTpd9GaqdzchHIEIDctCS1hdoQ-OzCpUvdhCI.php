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

/* themes/contrib/revolt/templates/layout/page.html.twig */
class __TwigTemplate_ccec20df6241df8bd625f0231aa3e64f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "<div id=\"page\">

  ";
        // line 68
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 68))) {
            // line 69
            echo "    <div class=\"vt_header_top\">
      <div class=\"container\">
        ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 75
        echo "
  ";
        // line 76
        if ((($context["stickey_header"] ?? null) == "1")) {
            // line 77
            echo "    ";
            // line 78
            $context["header_classes"] = [0 => "vt-header", 1 => "stickey_header", 2 => ("background-" . $this->sandbox->ensureToStringAllowed(            // line 81
($context["header_background"] ?? null), 81, $this->source)), 3 =>             // line 82
($context["header_class"] ?? null)];
            // line 85
            echo "    ";
        } else {
            // line 86
            echo "      ";
            // line 87
            $context["header_classes"] = [0 => "vt-header", 1 => ("background-" . $this->sandbox->ensureToStringAllowed(            // line 89
($context["header_background"] ?? null), 89, $this->source)), 2 =>             // line 90
($context["header_class"] ?? null)];
            // line 93
            echo "  ";
        }
        // line 94
        echo "
  <header";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["header_classes"] ?? null)], "method", false, false, true, 95), 95, $this->source), "html", null, true);
        echo " id=\"vt_header\" role=\"header\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
    ";
        // line 96
        $this->displayBlock('head', $context, $blocks);
        // line 119
        echo "  </header>

  ";
        // line 121
        $this->displayBlock('content', $context, $blocks);
        // line 185
        echo "
  <footer class=\"site-footer\">
    ";
        // line 187
        $this->displayBlock('footer', $context, $blocks);
        // line 200
        echo "  </footer>

  <div id=\"back-top\">
    <a title=\"Go to Top\" href=\"#\"> ss<i class=\"fas fa-level-up-alt\"></i></a>
  </div>

</div>
";
    }

    // line 96
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "      ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 97))) {
            // line 98
            echo "        <div class=\"vt_header_bottom\">
          ";
            // line 99
            if ((($context["header_width"] ?? null) == "1")) {
                // line 100
                echo "            ";
                // line 101
                $context["header_wid"] = [0 => "container-full"];
                // line 105
                echo "            ";
            } else {
                // line 106
                echo "              ";
                // line 107
                $context["header_wid"] = [0 => "container"];
                // line 111
                echo "          ";
            }
            // line 112
            echo "          <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["header_wid"] ?? null)], "method", false, false, true, 112), "removeClass", [0 => ($context["header_classes"] ?? null)], "method", false, false, true, 112), 112, $this->source), "html", null, true);
            echo ">
            ";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 117
        echo "
    ";
    }

    // line 121
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_banner", [], "any", false, false, true, 122))) {
            // line 123
            echo "      <div class=\"vt_hero_banner\">
        ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero_banner", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        if (($context["is_front"] ?? null)) {
            // line 129
            echo "      ";
            if (($context["banner_display"] ?? null)) {
                // line 130
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("revolt/banner-lib"), "html", null, true);
                echo "
        <section class=\"home_hero_banner vt-flex vt-direction-column vt-justify-content-center\" style=\"background-image: url(";
                // line 131
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_path"] ?? null), 131, $this->source), "html", null, true);
                echo ");\">
          <div class=\"container\">
            <div class=\"vt-flex vt-direction-row vt-justify-content-";
                // line 133
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_align"] ?? null), 133, $this->source), "html", null, true);
                echo " \">
              <div class=\"banner_wraper ";
                // line 134
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_align"] ?? null), 134, $this->source), "html", null, true);
                echo "\">
                <h2 class=\"banner_title\">";
                // line 135
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_title"] ?? null), 135, $this->source), "html", null, true);
                echo "</h2>
                <div class=\"banner_dec\">";
                // line 136
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["banner_desc"] ?? null), "value", [], "any", false, false, true, 136), 136, $this->source));
                echo "</div>
                <a href=\"";
                // line 137
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_url"] ?? null), 137, $this->source), "html", null, true);
                echo "\" class=\"button button-success\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_url_title"] ?? null), 137, $this->source), "html", null, true);
                echo "</a>
              </div>
            </div>
          </div>
        </section>
      ";
            }
            // line 143
            echo "    ";
        }
        // line 144
        echo "
    <div id=\"main\" class=\"container\">
      ";
        // line 146
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
        echo "
      <div class=\"vt-row clearfix\">
        ";
        // line 148
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 148))) {
            // line 149
            echo "          <div class=\"sidebar_left vt-col-3\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 155
        echo "
        ";
        // line 157
        echo "        ";
        // line 158
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 159
($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 159) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 159))) ? ("vt-col-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 160
($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 160) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 160)))) ? ("vt-col-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 161
($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 161) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 161)))) ? ("vt-col-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 162
($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 162)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 162)))) ? ("vt-col-12") : (""))];
        // line 165
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 165))) {
            // line 166
            echo "          <main";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 166), 166, $this->source), "html", null, true);
            echo ">
            <section class=\"section\">
              <a href=\"#main-content\" id=\"main-content\" tabindex=\"-1\"></a>
              ";
            // line 169
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "
            </section>
          </main>
        ";
        }
        // line 173
        echo "
        ";
        // line 174
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 174))) {
            // line 175
            echo "          <div class=\"sidebar_right vt-col-3\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 177
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 181
        echo "
      </div>
    </div>
  ";
    }

    // line 187
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "      <div class=\"container\">
        <div class=\"vt-col-12\">
          <div class=\"vt-row\">
          ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 191)) {
            // line 192
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 196
        echo "        </div>
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/revolt/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 196,  310 => 193,  307 => 192,  305 => 191,  300 => 188,  296 => 187,  289 => 181,  282 => 177,  278 => 175,  276 => 174,  273 => 173,  266 => 169,  259 => 166,  256 => 165,  254 => 162,  253 => 161,  252 => 160,  251 => 159,  250 => 158,  248 => 157,  245 => 155,  238 => 151,  234 => 149,  232 => 148,  227 => 146,  223 => 144,  220 => 143,  209 => 137,  205 => 136,  201 => 135,  197 => 134,  193 => 133,  188 => 131,  183 => 130,  180 => 129,  178 => 128,  175 => 127,  169 => 124,  166 => 123,  163 => 122,  159 => 121,  154 => 117,  147 => 113,  142 => 112,  139 => 111,  137 => 107,  135 => 106,  132 => 105,  130 => 101,  128 => 100,  126 => 99,  123 => 98,  120 => 97,  116 => 96,  105 => 200,  103 => 187,  99 => 185,  97 => 121,  93 => 119,  91 => 96,  85 => 95,  82 => 94,  79 => 93,  77 => 90,  76 => 89,  75 => 87,  73 => 86,  70 => 85,  68 => 82,  67 => 81,  66 => 78,  64 => 77,  62 => 76,  59 => 75,  52 => 71,  48 => 69,  46 => 68,  42 => 66,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/revolt/templates/layout/page.html.twig", "/var/www/html/drupal/themes/contrib/revolt/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 68, "set" => 78, "block" => 96);
        static $filters = array("escape" => 71, "t" => 95, "raw" => 136);
        static $functions = array("attach_library" => 130);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['escape', 't', 'raw'],
                ['attach_library']
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
