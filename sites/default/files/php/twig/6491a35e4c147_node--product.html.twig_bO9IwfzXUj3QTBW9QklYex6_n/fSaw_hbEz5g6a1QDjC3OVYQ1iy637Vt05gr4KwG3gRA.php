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
class __TwigTemplate_c1009f5312913ab807d0b8e29288756b extends \Twig\Template
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
\t\t\t<div class=\"product-rating\">
\t\t\t\t";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_rating", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"product-category\">
\t\t\t\t";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_category", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"product-body\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</div>
\t\t\t<div class=\"product-price\">";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</div>

\t\t\t";
        // line 22
        if ((twig_in_filter("customer", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getroles", [], "method", false, false, true, 22)) || (twig_in_filter("vendor", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getroles", [], "method", false, false, true, 22)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "uid", [], "any", false, false, true, 22), "entity", [], "any", false, false, true, 22), "id", [], "any", false, false, true, 22) != twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 22))))) {
            // line 23
            echo "\t\t\t\t<div class=\"quantity-selector\">
\t\t\t\t\t<button class=\"quantity-decrease\" onclick=\"decreaseQuantity(";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ")\">-</button>
\t\t\t\t\t<input type=\"text\" class=\"quantity-input\" id=\"quantity-input\" value=\"1\" readonly>
\t\t\t\t\t<button class=\"quantity-increase\" onclick=\"increaseQuantity(";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo ", ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_availablity", [], "any", false, false, true, 26)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "value", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo ")\">+</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"add-to-cart-button\">
\t\t\t\t\t<a href=\"/store/add-to-cart/";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "/1\" id=\"add-to-cart-link\" class=\"button\">Add to Cart</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 32
        echo "\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "uid", [], "any", false, false, true, 32), "entity", [], "any", false, false, true, 32), "id", [], "any", false, false, true, 32) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 32))) {
            // line 33
            echo "\t\t\t\t<div class=\"add-to-cart-button\">
\t\t\t\t\t<a href=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.edit_form", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 34)]), "html", null, true);
            echo "\" class=\"button\">Edit</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 37
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
        return array (  127 => 37,  121 => 34,  118 => 33,  115 => 32,  109 => 29,  101 => 26,  96 => 24,  93 => 23,  91 => 22,  86 => 20,  82 => 19,  77 => 17,  71 => 14,  64 => 12,  60 => 10,  56 => 8,  50 => 6,  48 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom_theme/templates/node--product.html.twig", "C:\\xampp\\htdocs\\store\\themes\\custom_theme\\templates\\node--product.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5);
        static $filters = array("escape" => 2);
        static $functions = array("path" => 34);

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
