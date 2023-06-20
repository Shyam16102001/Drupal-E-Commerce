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

/* modules/contrib/fivestar/templates/fivestar-summary.html.twig */
class __TwigTemplate_de9365f69d272fc613e26ed1b6532162 extends \Twig\Template
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
        // line 42
        $context["classes"] = [0 => "fivestar-summary", 1 => ("fivestar-summary-" . $this->sandbox->ensureToStringAllowed(($context["output_type"] ?? null), 42, $this->source))];
        // line 43
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">
  ";
        // line 44
        if (($context["user_rating"] ?? null)) {
            // line 45
            echo "    <span class=\"user-rating\">
      ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Your rating:"));
            echo " <span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_stars"] ?? null), 46, $this->source), "html", null, true);
            echo "</span>
    </span>
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if (($context["average_rating"] ?? null)) {
            // line 51
            echo "    <span class=\"average-rating\">
      ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Average:"));
            echo " <span";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["average_rating_microdata"] ?? null), 52, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["average_stars"] ?? null), 52, $this->source), "html", null, true);
            echo "</span>
    </span>
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        if ( !twig_test_empty(($context["votes"] ?? null))) {
            // line 57
            echo "    ";
            if ((($context["votes"] ?? null) == 0)) {
                // line 58
                echo "      <span class=\"empty\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No votes yet"));
                echo "</span>
    ";
            } else {
                // line 60
                echo "      <span class=\"total-votes\">
        ";
                // line 61
                $context["votes_suffix"] = (((($context["votes"] ?? null) > 1)) ? (t("votes")) : (t("vote")));
                // line 62
                echo "        ";
                if ((($context["user_rating"] ?? null) || ($context["average_rating"] ?? null))) {
                    // line 63
                    echo "          (<span";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rating_count_microdata"] ?? null), 63, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["votes"] ?? null), 63, $this->source), "html", null, true);
                    echo "</span> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["votes_suffix"] ?? null), 63, $this->source), "html", null, true);
                    echo ")
        ";
                } else {
                    // line 65
                    echo "          <span";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rating_count_microdata"] ?? null), 65, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["votes"] ?? null), 65, $this->source), "html", null, true);
                    echo "</span> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["votes_suffix"] ?? null), 65, $this->source), "html", null, true);
                    echo "
        ";
                }
                // line 67
                echo "      </span>
    ";
            }
            // line 69
            echo "  ";
        }
        // line 70
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/fivestar/templates/fivestar-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 70,  123 => 69,  119 => 67,  109 => 65,  99 => 63,  96 => 62,  94 => 61,  91 => 60,  85 => 58,  82 => 57,  80 => 56,  77 => 55,  67 => 52,  64 => 51,  62 => 50,  59 => 49,  51 => 46,  48 => 45,  46 => 44,  41 => 43,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/fivestar/templates/fivestar-summary.html.twig", "C:\\xampp\\htdocs\\store\\modules\\contrib\\fivestar\\templates\\fivestar-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 44);
        static $filters = array("escape" => 43, "t" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
                []
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
