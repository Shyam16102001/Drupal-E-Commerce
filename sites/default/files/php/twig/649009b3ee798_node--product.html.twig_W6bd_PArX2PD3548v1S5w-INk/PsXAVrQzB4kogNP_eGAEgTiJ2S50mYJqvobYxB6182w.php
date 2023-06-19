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

/* themes/custom_theme/templates/node--product.html.twig */
class __TwigTemplate_1e94ae7f58ec29b2aca7d07fa87e60cd extends \Twig\Template
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
        // line 1
        $context["current"] = ($context["user"] ?? null);
        // line 2
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 2, $this->source), "html", null, true);
        echo ">
\t<div class=\"product-container\">
\t\t<div class=\"product-image\">
\t\t\t";
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_image", [], "any", false, false, true, 5))) {
            // line 6
            echo "\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_product_image", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 8
            echo "\t\t\t\t<img src=\"https://cdn.dribbble.com/users/1247449/screenshots/3984840/no_img.png\" alt=\"Image not found\">
\t\t\t";
        }
        // line 10
        echo "\t\t</div>
\t\t<div class=\"product-details\">
\t\t\t<h2";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 12, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</h2>
\t\t\t";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_rating", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
\t\t\t<div class=\"product-category\">
\t\t\t\t";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_category", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"product-body\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</div>
\t\t\t<div class=\"product-price\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</div>

\t\t\t";
        // line 20
        if ((twig_in_filter("customer", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getroles", [], "method", false, false, true, 20)) || (twig_in_filter("vendor", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getroles", [], "method", false, false, true, 20)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "uid", [], "any", false, false, true, 20), "entity", [], "any", false, false, true, 20), "id", [], "any", false, false, true, 20) != twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 20))))) {
            // line 21
            echo "\t\t\t\t<div class=\"quantity-selector\">
\t\t\t\t\t<button class=\"quantity-decrease\" onclick=\"decreaseQuantity(";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo ")\">-</button>
\t\t\t\t\t<input type=\"text\" class=\"quantity-input\" id=\"quantity-input\" value=\"1\" readonly>
\t\t\t\t\t<button class=\"quantity-increase\" onclick=\"increaseQuantity(";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ", ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_availablity", [], "any", false, false, true, 24)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "value", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ")\">+</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"add-to-cart-button\">
\t\t\t\t\t<a href=\"/store/add-to-cart/";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "/1\" id=\"add-to-cart-link\" class=\"button\">Add to Cart</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 30
        echo "\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "uid", [], "any", false, false, true, 30), "entity", [], "any", false, false, true, 30), "id", [], "any", false, false, true, 30) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 30))) {
            // line 31
            echo "\t\t\t\t<div class=\"add-to-cart-button\">
\t\t\t\t\t<a href=\"";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.edit_form", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 32)]), "html", null, true);
            echo "\" class=\"button\">Edit</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 35
        echo "\t\t</div>
\t</div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom_theme/templates/node--product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 35,  119 => 32,  116 => 31,  113 => 30,  107 => 27,  99 => 24,  94 => 22,  91 => 21,  89 => 20,  84 => 18,  80 => 17,  75 => 15,  70 => 13,  64 => 12,  60 => 10,  56 => 8,  50 => 6,  48 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom_theme/templates/node--product.html.twig", "C:\\xampp\\htdocs\\store\\themes\\custom_theme\\templates\\node--product.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5);
        static $filters = array("escape" => 2);
        static $functions = array("path" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['path']
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
