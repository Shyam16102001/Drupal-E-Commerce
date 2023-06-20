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

/* modules/custom/cart/templates/cart-theme.html.twig */
class __TwigTemplate_966a63308d34b29cc072044bf748caea extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cart/cart-style"), "html", null, true);
        echo "
<h3>Shopping Cart</h3>
<div class=\"cart-page\">
\t";
        // line 4
        if ( !twig_test_empty(($context["products"] ?? null))) {
            // line 5
            echo "\t\t<div class=\"left-side\">
\t\t\t<div class=\"products-section\">
\t\t\t\t<table class=\"cart-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Product Details</th>
\t\t\t\t\t\t\t<th>Quantity</th>
\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t<th>Final Price</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 17
            $context["totalItems"] = 0;
            // line 18
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                echo "\t\t\t\t\t\t\t";
                $context["totalItems"] = (($context["totalItems"] ?? null) + twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, true, 19));
                // line 20
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"/store/node/";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "\" class=\"product-detail-link\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-detail\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-container\">";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"cart-title\">";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "product_title", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"quantity-button\" onclick=\"editQuantity(";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo ")\">
\t\t\t\t\t\t\t\t\t\t";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<button class=\"remove-button\" data-product-id=\"";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "\" onclick=\"removeFromCart(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo ")\">Remove</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"price\">₹
\t\t\t\t\t\t\t\t\t";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"total-price\">₹ ";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, true, 38) * twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, true, 38))), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"right-side\">
\t\t\t<div class=\"order-summary\">
\t\t\t\t<h3>Order Summary</h3>
\t\t\t\t<br>
\t\t\t\t<div>
\t\t\t\t\t<p>Total Items:
\t\t\t\t\t\t<span id=\"total-items\">";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["totalItems"] ?? null), 51, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t</p>
\t\t\t\t\t<p>Total Cost: ₹<span id=\"total-cost\"></span>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t\t<div>
\t\t\t\t\t<button class=\"checkout-button\" onclick=\"redirectToCheckout()\">Checkout</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 63
            echo "\t\t<div class=\"empty-cart\">
\t\t\t<img src=\"http://localhost/store/sites/default/files/2023-06/empty_cart.png\" alt=\"No Product Found\" data-align=\"center\">
\t\t\t<p>Your cart is empty.</p>
\t\t\t<a href=\"/store\">Click here to continue shopping</a>
\t\t</div>
\t";
        }
        // line 69
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/cart/templates/cart-theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 69,  150 => 63,  135 => 51,  123 => 41,  114 => 38,  110 => 37,  102 => 34,  96 => 31,  92 => 30,  84 => 25,  80 => 24,  75 => 22,  71 => 20,  68 => 19,  63 => 18,  61 => 17,  47 => 5,  45 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/cart/templates/cart-theme.html.twig", "C:\\xampp\\htdocs\\store\\modules\\custom\\cart\\templates\\cart-theme.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 17, "for" => 18);
        static $filters = array("escape" => 1, "format" => 38);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'format'],
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
