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

/* /Users/kekaiwang/Sites/jc_october/plugins/rainlab/blog/components/rssfeed/default.htm */
class __TwigTemplate_ae1f28adf689e598053f5a78095de69b0860bec13fe31fb591d6eea456b429c5 extends \Twig\Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">
    <channel>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "meta_title", [], "any", false, false, false, 4)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "meta_title", [], "any", false, false, false, 4)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4))), "html", null, true);
        echo "</title>
        <link>";
        // line 5
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "</link>
        <description>";
        // line 6
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "description", [], "any", false, false, false, 6))), "html", null, true);
        echo "</description>
        <atom:link href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["rssLink"] ?? null), "html", null, true);
        echo "\" rel=\"self\" type=\"application/rss+xml\" />
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "        <item>
            <title>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</title>
            <link>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 11), "html", null, true);
            echo "</link>
            <guid>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 12), "html", null, true);
            echo "</guid>
            <pubDate>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 13), "toRfc2822String", [], "any", false, false, false, 13), "html", null, true);
            echo "</pubDate>
            <description>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 14), "html", null, true);
            echo "</description>
        </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "/Users/kekaiwang/Sites/jc_october/plugins/rainlab/blog/components/rssfeed/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">
    <channel>
        <title>{{ this.page.meta_title ?: this.page.title }}</title>
        <link>{{ link }}</link>
        <description>{{ this.page.meta_description ?: this.page.description }}</description>
        <atom:link href=\"{{ rssLink }}\" rel=\"self\" type=\"application/rss+xml\" />
        {% for post in posts %}
        <item>
            <title>{{ post.title }}</title>
            <link>{{ post.url }}</link>
            <guid>{{ post.url }}</guid>
            <pubDate>{{ post.published_at.toRfc2822String }}</pubDate>
            <description>{{ post.summary }}</description>
        </item>
        {% endfor %}
    </channel>
</rss>
", "/Users/kekaiwang/Sites/jc_october/plugins/rainlab/blog/components/rssfeed/default.htm", "");
    }
}
