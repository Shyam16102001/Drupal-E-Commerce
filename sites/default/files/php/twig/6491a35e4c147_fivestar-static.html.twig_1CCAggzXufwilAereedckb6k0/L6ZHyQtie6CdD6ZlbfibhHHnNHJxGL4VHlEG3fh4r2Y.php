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

/* modules/contrib/fivestar/templates/fivestar-static.html.twig */
class __TwigTemplate_4c528d9dc82c2ed5999ed4c8773d2d32 extends \Twig\Template
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
        // line 22
        echo "<div class=\"fivestar-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "\">
  <div class=\"fivestar-widget-static fivestar-widget-static-";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vote_type"] ?? null), 23, $this->source), "html", null, true);
        echo " fivestar-widget-static-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["stars"] ?? null), 23, $this->source), "html", null, true);
        echo " clearfix\">
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stars_data"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["n"] => $context["data"]) {
            // line 25
            echo "      ";
            $context["zebra_class"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 25) % 2 != 0)) ? ("star-odd") : ("star-even"));
            // line 26
            echo "      ";
            $context["first_item_class"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 26)) ? (" star-first") : (""));
            // line 27
            echo "      ";
            $context["last_item_class"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 27)) ? (" star-last") : (""));
            // line 28
            echo "      <div class=\"star star-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["n"], 28, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["zebra_class"] ?? null), 28, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["first_item_class"] ?? null), 28, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["last_item_class"] ?? null), 28, $this->source), "html", null, true);
            echo "\">
        ";
            // line 30
            echo "        ";
            $context["rating_item_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute([]);
            // line 31
            echo "        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["data"], "percent", [], "any", false, false, true, 31))) {
                // line 32
                echo "          ";
                $context["rating_item_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rating_item_attributes"] ?? null), "addClass", [0 => "on"], "method", false, false, true, 32), "setAttribute", [0 => "style", 1 => (("width:" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "percent", [], "any", false, false, true, 32), 32, $this->source)) . "%")], "method", false, false, true, 32);
                // line 33
                echo "        ";
            } elseif ((($context["rating"] ?? null) >= twig_get_attribute($this->env, $this->source, $context["data"], "star_value", [], "any", false, false, true, 33))) {
                // line 34
                echo "          ";
                $context["rating_item_attributes"] = twig_get_attribute($this->env, $this->source, ($context["rating_item_attributes"] ?? null), "addClass", [0 => "on"], "method", false, false, true, 34);
                // line 35
                echo "        ";
            } else {
                // line 36
                echo "          ";
                $context["rating_item_attributes"] = twig_get_attribute($this->env, $this->source, ($context["rating_item_attributes"] ?? null), "addClass", [0 => "off"], "method", false, false, true, 36);
                // line 37
                echo "        ";
            }
            // line 38
            echo "
        <span";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rating_item_attributes"] ?? null), 39, $this->source), "html", null, true);
            echo ">
          ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 40) == 1)) {
                // line 41
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["numeric_rating"] ?? null), 41, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 43
            echo "        </span>
      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['n'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/fivestar/templates/fivestar-static.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 46,  124 => 43,  118 => 41,  116 => 40,  112 => 39,  109 => 38,  106 => 37,  103 => 36,  100 => 35,  97 => 34,  94 => 33,  91 => 32,  88 => 31,  85 => 30,  76 => 28,  73 => 27,  70 => 26,  67 => 25,  50 => 24,  44 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/fivestar/templates/fivestar-static.html.twig", "C:\\xampp\\htdocs\\store\\modules\\contrib\\fivestar\\templates\\fivestar-static.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 24, "set" => 25, "if" => 31);
        static $filters = array("escape" => 22);
        static $functions = array("create_attribute" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape'],
                ['create_attribute']
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
