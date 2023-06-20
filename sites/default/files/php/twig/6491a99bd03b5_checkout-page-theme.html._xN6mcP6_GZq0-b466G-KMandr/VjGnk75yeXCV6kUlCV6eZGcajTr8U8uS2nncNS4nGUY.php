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

/* modules/custom/checkout_page/templates/checkout-page-theme.html.twig */
class __TwigTemplate_2ef3431186398499aedaf7a5a43302a9 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("checkout_page/checkout_page-style"), "html", null, true);
        echo "

<div class=\"checkout\">
\t<h3>";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
        echo "</h3>
\t<div class=\"checkout-wrapper\">
\t\t<div class=\"checkout-left\">
\t\t\t<div class=\"user-details\">
\t\t\t\t<h4>Shipping Details</h4>
\t\t\t\t<hr>
\t\t\t\t";
        // line 10
        if ( !twig_test_empty(($context["address"] ?? null))) {
            // line 11
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["address"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "\t\t\t\t\t\t<div class=\"address-item\">
\t\t\t\t\t\t\t";
                // line 13
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 13), "given_name", [], "any", false, false, true, 13)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 13), "family_name", [], "any", false, false, true, 13)))) {
                    // line 14
                    echo "\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<strong>";
                    // line 15
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 15), "given_name", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                    // line 16
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 16), "family_name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                    echo "</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t\t\t\t";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 19), "address_line1", [], "any", false, false, true, 19)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 19), "address_line2", [], "any", false, false, true, 19)))) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t<p>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 20), "address_line1", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t,
\t\t\t\t\t\t\t\t\t";
                    // line 22
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 22), "address_line2", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t\t\t";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 24), "locality", [], "any", false, false, true, 24)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 24), "postal_code", [], "any", false, false, true, 24)))) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t<p>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 25), "locality", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t,
\t\t\t\t\t\t\t\t\t";
                    // line 27
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 27), "postal_code", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t";
        } else {
            // line 32
            echo "\t\t\t\t\t<p>No address found.</p>
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t</div>

\t\t\t<div class=\"delivery-method\">
\t\t\t\t<h4>Delivery Method</h4>
\t\t\t\t<hr>
\t\t\t\t<button class=\"delivery-option\" name=\"delivery-method\" value=\"one_day\">
\t\t\t\t\t<i class=\"fa-solid fa-truck-fast\"></i>
\t\t\t\t\tOne-Day
\t\t\t\t</button>
\t\t\t\t<button class=\"delivery-option active\" name=\"delivery-method\" value=\"express\">
\t\t\t\t\t<i class=\"fa-solid fa-motorcycle\"></i>
\t\t\t\t\tExpress
\t\t\t\t</button>
\t\t\t\t<button class=\"delivery-option\" name=\"delivery-method\" value=\"normal\">
\t\t\t\t\t<i class=\"fa-solid fa-person-hiking\"></i>
\t\t\t\t\tNormal
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"payment-method\">
\t\t\t\t<h4>Payment Method</h4>
\t\t\t\t<hr>
\t\t\t\t<button class=\"payment-option active\" name=\"payment-method\" value=\"wallet\" disabled>
\t\t\t\t\t<i class=\"fa-solid fa-wallet\"></i>
\t\t\t\t\tWallet
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"checkout-right\">
\t\t\t<div class=\"order-summary\">
\t\t\t\t<img src=\"http://localhost/store/sites/default/files/2023-06/pay_online.png\" alt=\"Payment\">
\t\t\t\t<hr>
\t\t\t\t";
        // line 68
        if ((($context["totalItems"] ?? null) == 1)) {
            // line 69
            echo "\t\t\t\t\t<h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["totalItems"] ?? null), 69, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\titem</h2>
\t\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t\t<h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["totalItems"] ?? null), 72, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\titems</h2>
\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t<div class=\"summary-item\">
\t\t\t\t\t<span>Subtotal:</span>
\t\t\t\t\t<span id=\"subtotal\">₹";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subTotal"] ?? null), 77, $this->source), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"summary-item\">
\t\t\t\t\t<span>Delivery Service:</span>
\t\t\t\t\t<span id=\"delivery_cost\">₹50</span>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<div class=\"summary-item\">
\t\t\t\t\t<h4>Total:</h4>
\t\t\t\t\t<span id=\"total\">₹";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["subTotal"] ?? null) + 50), "html", null, true);
        echo "
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<div class=\"summary-item wallet_balance\">
\t\t\t\t\t<span>Wallet Balance:</span>
\t\t\t\t\t<span id=\"balance\">₹";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["balance"] ?? null), 92, $this->source), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<button class=\"pay-button\" id=\"pay-now-button\">Pay Now
\t\t\t\t<i class=\"fa-solid fa-arrow-right\"></i>
\t\t\t</button>
\t\t</div>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/checkout_page/templates/checkout-page-theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 92,  189 => 86,  177 => 77,  173 => 75,  166 => 72,  159 => 69,  157 => 68,  121 => 34,  117 => 32,  114 => 31,  107 => 29,  102 => 27,  96 => 25,  93 => 24,  88 => 22,  82 => 20,  79 => 19,  73 => 16,  69 => 15,  66 => 14,  64 => 13,  61 => 12,  56 => 11,  54 => 10,  45 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/checkout_page/templates/checkout-page-theme.html.twig", "C:\\xampp\\htdocs\\store\\modules\\custom\\checkout_page\\templates\\checkout-page-theme.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "for" => 11);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
