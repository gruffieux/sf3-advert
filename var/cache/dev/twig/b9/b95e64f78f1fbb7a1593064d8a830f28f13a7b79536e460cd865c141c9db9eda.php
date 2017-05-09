<?php

/* GbrfixPlatformBundle:Advert:list.html.twig */
class __TwigTemplate_9771f4dc91d40a04ebd8c88397f5b8c62d7586ddb31ca9391c02945a74fcd889 extends Twig_Template
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
        $__internal_0cb6167d565b3ed33f426062ee2abd9ae225f01117db1296907482634cdce566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb6167d565b3ed33f426062ee2abd9ae225f01117db1296907482634cdce566->enter($__internal_0cb6167d565b3ed33f426062ee2abd9ae225f01117db1296907482634cdce566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:list.html.twig"));

        // line 2
        echo "
<p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("advert.total", $this->getAttribute((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")), "count", array())), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
            foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
                // line 8
                echo "\t\t\t<li>
\t\t\t\t";
                // line 9
                if ( !(null === $this->getAttribute($context["advert"], "image", array()))) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["advert"], "image", array()), "webPath", array())), "html", null, true);
                    echo "\" height=\"28\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "image", array()), "alt", array()), "html", null, true);
                    echo "\" />";
                }
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_view", array("advert_id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
                echo "</a>
\t\t\t\t";
                // line 11
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("advert.by", array("%author%" => $this->getAttribute($context["advert"], "author", array())), "messages");
                echo ",
\t\t\t\t";
                // line 12
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("advert.date", array("%date%" => twig_localized_date_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "full", "none")), "messages");
                // line 13
                echo "\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t</ul>
\t
\t<ul class=\"pagination\">
\t\t";
            // line 19
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 20
                echo "\t\t\t<li ";
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo " class=\"active\"";
                }
                echo ">
\t\t\t\t<a href=\"";
                // line 21
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
            // line 24
            echo "\t</ul>
";
        }
        
        $__internal_0cb6167d565b3ed33f426062ee2abd9ae225f01117db1296907482634cdce566->leave($__internal_0cb6167d565b3ed33f426062ee2abd9ae225f01117db1296907482634cdce566_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  87 => 21,  80 => 20,  75 => 19,  70 => 15,  63 => 13,  61 => 12,  57 => 11,  50 => 10,  42 => 9,  39 => 8,  35 => 7,  32 => 6,  30 => 5,  25 => 3,  22 => 2,);
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

<p>{{ 'advert.total'|transchoice(listAdverts.count) }}</p>
\t
{% if nbPages > 0 %}
\t<ul>
\t\t{% for advert in listAdverts %}
\t\t\t<li>
\t\t\t\t{% if advert.image is not null %}<img src=\"{{ asset(advert.image.webPath) }}\" height=\"28\" alt=\"{{ advert.image.alt }}\" />{% endif %}
\t\t\t\t<a href=\"{{ path('gbrfix_platform_view', {'advert_id':advert.id}) }}\">{{ advert.title }}</a>
\t\t\t\t{% trans with {'%author%': advert.author} %}advert.by{% endtrans %},
\t\t\t\t{% trans with {'%date%': advert.date|localizeddate('full', 'none')} %}advert.date{% endtrans %}
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
{% endif %}", "GbrfixPlatformBundle:Advert:list.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/list.html.twig");
    }
}
