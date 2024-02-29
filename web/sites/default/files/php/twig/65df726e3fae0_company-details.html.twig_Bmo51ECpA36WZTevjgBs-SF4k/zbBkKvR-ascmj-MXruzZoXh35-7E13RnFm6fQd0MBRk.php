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

/* modules/custom/technical_assessment/templates/company-details.html.twig */
class __TwigTemplate_310ee613a3a3c4cf6f84cd426121403d extends Template
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
        if (($context["data"] ?? null)) {
            // line 2
            echo "  <div>
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "      <div>
        <h2>";
                // line 5
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "company_name", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "</h2>
        <p>";
                // line 6
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "company_des", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "</p>
        ";
                // line 7
                if (twig_get_attribute($this->env, $this->source, $context["item"], "company_image", [], "any", false, false, true, 7)) {
                    // line 8
                    echo "          <img src=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "company_image", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "company_name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                    echo "\">
        ";
                }
                // line 10
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "company_url", [], "any", false, false, true, 10)) {
                    // line 11
                    echo "          <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "company_url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "company_url_title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    echo "</a>
        ";
                }
                // line 13
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  </div>
";
        } else {
            // line 17
            echo "  <p>No data available.</p>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["data"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/custom/technical_assessment/templates/company-details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  91 => 17,  87 => 15,  80 => 13,  72 => 11,  69 => 10,  61 => 8,  59 => 7,  55 => 6,  51 => 5,  48 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/technical_assessment/templates/company-details.html.twig", "C:\\xampp\\htdocs\\Elephant-in-the-Boardroom\\web\\modules\\custom\\technical_assessment\\templates\\company-details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 3);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
