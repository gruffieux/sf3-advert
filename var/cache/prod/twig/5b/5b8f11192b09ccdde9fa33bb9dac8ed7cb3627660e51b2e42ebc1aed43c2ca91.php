<?php

/* GbrfixPlatformBundle:Advert:listMarker.html.twig */
class __TwigTemplate_a16bbd36b4ccb06d63839f4085cde52fa19f3635d72443e4a6c2ae419c74c24f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("advert.total", $this->getAttribute((isset($context["listMarkers"]) ? $context["listMarkers"] : null), "count", array())), "html", null, true);
        echo "</p>
\t
";
        // line 5
        if (((isset($context["nbPages"]) ? $context["nbPages"] : null) > 0)) {
            // line 6
            echo "\t<ul>
\t\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listMarkers"]) ? $context["listMarkers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["marker"]) {
                // line 8
                echo "\t\t\t<li>
\t\t\t\t";
                // line 9
                if ( !(null === $this->getAttribute($this->getAttribute($context["marker"], "advert", array()), "image", array()))) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["marker"], "advert", array()), "image", array()), "webPath", array())), "html", null, true);
                    echo "\" height=\"28\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["marker"], "advert", array()), "image", array()), "alt", array()), "html", null, true);
                    echo "\" />";
                }
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_view", array("advert_id" => $this->getAttribute($this->getAttribute($context["marker"], "advert", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["marker"], "advert", array()), "title", array()), "html", null, true);
                echo "</a>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t</ul>
\t
\t<ul class=\"pagination\">
\t\t";
            // line 17
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 18
                echo "\t\t\t<li ";
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : null))) {
                    echo " class=\"active\"";
                }
                echo ">
\t\t\t\t<a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_home", array("page" => $context["p"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:listMarker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  76 => 19,  69 => 18,  64 => 17,  59 => 13,  47 => 10,  39 => 9,  36 => 8,  32 => 7,  29 => 6,  27 => 5,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GbrfixPlatformBundle:Advert:listMarker.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/listMarker.html.twig");
    }
}
