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

/* /Users/kekaiwang/Sites/jc_october/plugins/rainlab/blog/components/categories/default.htm */
class __TwigTemplate_0d97db70858ddb386bdc188a3686e94fab1073e7816e76a4db450b05bcbbbd4f extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categories", [], "any", false, false, false, 1)) > 0)) {
            // line 2
            echo "    <ul class=\"category-list\">
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->source,             // line 4
($context["__SELF__"] ?? null), "categories", [], "any", false, false, false, 4)            ;
            $context['__cms_partial_params']['currentCategorySlug'] = twig_get_attribute($this->env, $this->source,             // line 5
($context["__SELF__"] ?? null), "currentCategorySlug", [], "any", false, false, false, 5)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 3
($context["__SELF__"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "    </ul>
";
        } else {
            // line 9
            echo "    <p>No categories were found.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/kekaiwang/Sites/jc_october/plugins/rainlab/blog/components/categories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  51 => 7,  48 => 3,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.categories|length > 0 %}
    <ul class=\"category-list\">
        {% partial __SELF__ ~ \"::items\"
            categories = __SELF__.categories
            currentCategorySlug = __SELF__.currentCategorySlug
        %}
    </ul>
{% else %}
    <p>No categories were found.</p>
{% endif %}
", "/Users/kekaiwang/Sites/jc_october/plugins/rainlab/blog/components/categories/default.htm", "");
    }
}
