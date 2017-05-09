<?php

/* GbrfixPlatformBundle:Advert:listMarker.html.twig */
class __TwigTemplate_837feb02366d8b2b78138db77566c4972a02fe8d5a36876b5e5150f3a00b740e extends Twig_Template
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
        $__internal_e8aff8d7ac0f47ffce7acd58b8b8231d81bf11fa82cbb76dd4e04c6496bf301a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8aff8d7ac0f47ffce7acd58b8b8231d81bf11fa82cbb76dd4e04c6496bf301a->enter($__internal_e8aff8d7ac0f47ffce7acd58b8b8231d81bf11fa82cbb76dd4e04c6496bf301a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:listMarker.html.twig"));

        // line 2
        echo "
<p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("advert.total", $this->getAttribute((isset($context["listMarkers"]) ? $context["listMarkers"] : $this->getContext($context, "listMarkers")), "count", array())), "html", null, true);
        echo "</p>
\t
";
        // line 5
        if (((isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages")) > 0)) {
            // line 6
            echo "\t<ul>
\t\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listMarkers"]) ? $context["listMarkers"] : $this->getContext($context, "listMarkers")));
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
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 18
                echo "\t\t\t<li ";
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
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
        
        $__internal_e8aff8d7ac0f47ffce7acd58b8b8231d81bf11fa82cbb76dd4e04c6496bf301a->leave($__internal_e8aff8d7ac0f47ffce7acd58b8b8231d81bf11fa82cbb76dd4e04c6496bf301a_prof);

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
        return array (  90 => 22,  79 => 19,  72 => 18,  67 => 17,  62 => 13,  50 => 10,  42 => 9,  39 => 8,  35 => 7,  32 => 6,  30 => 5,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Cette vue n'hérite de personne. Elle est en électron libre. #}

<p>{{ 'advert.total'|transchoice(listMarkers.count) }}</p>
\t
{% if nbPages > 0 %}
\t<ul>
\t\t{% for marker in listMarkers %}
\t\t\t<li>
\t\t\t\t{% if marker.advert.image is not null %}<img src=\"{{ asset(marker.advert.image.webPath) }}\" height=\"28\" alt=\"{{ marker.advert.image.alt }}\" />{% endif %}
\t\t\t\t<a href=\"{{ path('gbrfix_platform_view', {'advert_id':marker.advert.id}) }}\">{{ marker.advert.title }}</a>
\t\t\t</li>
\t\t{% endfor %}
\t</ul>
\t
\t<ul class=\"pagination\">
\t\t{# On utilise la fonction range(a,b) qui créé un tableau de valeurs entre a et b #}
\t\t{% for p in range(1, nbPages) %}
\t\t\t<li {% if p==page %} class=\"active\"{% endif %}>
\t\t\t\t<a href=\"{{ path('gbrfix_platform_home', {'page':p}) }}\">{{ p }}</a>
\t\t\t</li>
\t\t{% endfor %}
\t</ul>
{% endif %}", "GbrfixPlatformBundle:Advert:listMarker.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/listMarker.html.twig");
    }
}
