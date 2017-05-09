<?php

/* GbrfixPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_08a03ff52e2898810dec052cd255e1c94821698b9296a277ad7258e1ac3ea0bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GbrfixPlatformBundle::layout.html.twig", "GbrfixPlatformBundle:Advert:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'platform_body' => array($this, 'block_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GbrfixPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95df578a9618adbf2f180a0961e619bdca4bf05fd987bc76f0cde27002ff8daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95df578a9618adbf2f180a0961e619bdca4bf05fd987bc76f0cde27002ff8daf->enter($__internal_95df578a9618adbf2f180a0961e619bdca4bf05fd987bc76f0cde27002ff8daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95df578a9618adbf2f180a0961e619bdca4bf05fd987bc76f0cde27002ff8daf->leave($__internal_95df578a9618adbf2f180a0961e619bdca4bf05fd987bc76f0cde27002ff8daf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ab877fd5238b120ffd9271f3dd7d26e570efef99ba48c32f27dfcc937da5bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab877fd5238b120ffd9271f3dd7d26e570efef99ba48c32f27dfcc937da5bab->enter($__internal_4ab877fd5238b120ffd9271f3dd7d26e570efef99ba48c32f27dfcc937da5bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_4ab877fd5238b120ffd9271f3dd7d26e570efef99ba48c32f27dfcc937da5bab->leave($__internal_4ab877fd5238b120ffd9271f3dd7d26e570efef99ba48c32f27dfcc937da5bab_prof);

    }

    // line 5
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_becb207ea45d87c80dca9caf3e85509bc41dc21b0beb2d06c2e48d506392e84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becb207ea45d87c80dca9caf3e85509bc41dc21b0beb2d06c2e48d506392e84c->enter($__internal_becb207ea45d87c80dca9caf3e85509bc41dc21b0beb2d06c2e48d506392e84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 6
        echo "
\t";
        // line 7
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 8
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\" width=\"100%\" />
\t";
        }
        // line 10
        echo "
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
\t<i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
\t
\t<div class=\"well\">
\t\t";
        // line 15
        if ($this->env->getExtension('Gbrfix\PlatformBundle\Service\AntispamExtension')->checkIfArgumentIsSpam($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()))) {
            // line 16
            echo "\t\t\t<font color=\"red\">SPAM---></font>
\t\t";
        }
        // line 18
        echo "\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
\t</div>
\t
\t";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["advertSkills"]) ? $context["advertSkills"] : $this->getContext($context, "advertSkills"))) > 2)) {
            // line 22
            echo "\t\t<div>
\t\t\tCette annonce requiert les compétences suivantes :
\t\t\t<ul>
\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["advertSkills"]) ? $context["advertSkills"] : $this->getContext($context, "advertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 26
                echo "\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 31
        echo "\t
\t";
        // line 32
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 33
            echo "\t\t<p>
\t\t\tCette annonce est parue dans les catégories suivantes :
\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 36
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_home", array("cat" => $this->getAttribute($context["category"], "name", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 38
                echo "\t\t\t\t</a>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t</p>
\t";
        }
        // line 42
        echo "\t
\t<div class=\"advert-application\">
\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applications"]) ? $context["applications"] : $this->getContext($context, "applications")));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 45
            echo "\t\t\t<i>Par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["application"], "user", array()), "username", array()), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["application"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</i>
\t\t\t<div class=\"well\">
\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "content", array()), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t</div>
\t
\t<p>
\t\t<a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t";
        // line 57
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 58
            echo "\t\t\t";
            if ((null === (isset($context["advertMarker"]) ? $context["advertMarker"] : $this->getContext($context, "advertMarker")))) {
                // line 59
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_mark", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-bookmark\"></i>
\t\t\t\t\tMarquer l'annonce
\t\t\t\t</a>
\t\t\t";
            } else {
                // line 64
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_unmark", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-bookmark\"></i>
\t\t\t\t\tEnlever le marqueur
\t\t\t\t</a>
\t\t\t";
            }
            // line 69
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_apply", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
\t\t\t\t<i class=\"glyphicon glyphicon-send\"></i>
\t\t\t\tPostuler
\t\t\t</a>
\t\t";
        }
        // line 74
        echo "\t\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODERATEUR")) {
            // line 75
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\tModifier l'annonce
\t\t\t</a>
\t\t";
        }
        // line 80
        echo "\t\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 81
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\tSupprimer l'annonce
\t\t\t</a>
\t\t";
        }
        // line 86
        echo "\t</p>
\t
";
        
        $__internal_becb207ea45d87c80dca9caf3e85509bc41dc21b0beb2d06c2e48d506392e84c->leave($__internal_becb207ea45d87c80dca9caf3e85509bc41dc21b0beb2d06c2e48d506392e84c_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 86,  261 => 81,  258 => 80,  249 => 75,  246 => 74,  237 => 69,  228 => 64,  219 => 59,  216 => 58,  214 => 57,  207 => 53,  202 => 50,  193 => 47,  185 => 45,  181 => 44,  177 => 42,  173 => 40,  158 => 38,  153 => 37,  148 => 36,  131 => 35,  127 => 33,  125 => 32,  122 => 31,  117 => 28,  106 => 26,  102 => 25,  97 => 22,  95 => 21,  88 => 18,  84 => 16,  82 => 15,  74 => 12,  70 => 11,  67 => 10,  59 => 8,  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"GbrfixPlatformBundle::layout.html.twig\" %}

{% block title %}Lecture d'une annonce - {{ parent() }}{% endblock %}

{% block platform_body %}

\t{% if advert.image is not null %}
\t\t<img src=\"{{ asset(advert.image.webPath) }}\" alt=\"{{ advert.image.alt }}\" width=\"100%\" />
\t{% endif %}

\t<h2>{{ advert.title }}</h2>
\t<i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>
\t
\t<div class=\"well\">
\t\t{% if checkIfSpam(advert.content) %}
\t\t\t<font color=\"red\">SPAM---></font>
\t\t{% endif %}
\t\t{{ advert.content }}
\t</div>
\t
\t{% if advertSkills|length>2 %}
\t\t<div>
\t\t\tCette annonce requiert les compétences suivantes :
\t\t\t<ul>
\t\t\t\t{% for advertSkill in advertSkills %}
\t\t\t\t\t<li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t{% endif %}
\t
\t{% if not advert.categories.empty %}
\t\t<p>
\t\t\tCette annonce est parue dans les catégories suivantes :
\t\t\t{% for category in advert.categories %}
\t\t\t\t<a href=\"{{ path('gbrfix_platform_home', {'cat': category.name}) }}\">
\t\t\t\t\t{{ category.name }}{% if not loop.last %}, {% endif %}
\t\t\t\t</a>
\t\t\t{% endfor %}
\t\t</p>
\t{% endif %}
\t
\t<div class=\"advert-application\">
\t\t{% for application in applications  %}
\t\t\t<i>Par {{ application.user.username }}, le {{ application.date|date('d/m/Y') }}</i>
\t\t\t<div class=\"well\">
\t\t\t\t{{ application.content }}
\t\t\t</div>
\t\t{% endfor %}
\t</div>
\t
\t<p>
\t\t<a href=\"{{ path('gbrfix_platform_home') }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t{% if is_granted('ROLE_USER') %}
\t\t\t{% if advertMarker is null %}
\t\t\t\t<a href=\"{{ path('gbrfix_platform_mark', {'id':advert.id}) }}\" class=\"btn btn-default\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-bookmark\"></i>
\t\t\t\t\tMarquer l'annonce
\t\t\t\t</a>
\t\t\t{% else %}
\t\t\t\t<a href=\"{{ path('gbrfix_platform_unmark', {'id':advert.id}) }}\" class=\"btn btn-default\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-bookmark\"></i>
\t\t\t\t\tEnlever le marqueur
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t\t<a href=\"{{ path('gbrfix_platform_apply', {'id':advert.id}) }}\" class=\"btn btn-default\">
\t\t\t\t<i class=\"glyphicon glyphicon-send\"></i>
\t\t\t\tPostuler
\t\t\t</a>
\t\t{% endif %}
\t\t{% if is_granted('ROLE_MODERATEUR') %}
\t\t\t<a href=\"{{ path('gbrfix_platform_edit', {'id':advert.id}) }}\" class=\"btn btn-default\">
\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\tModifier l'annonce
\t\t\t</a>
\t\t{% endif %}
\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<a href=\"{{ path('gbrfix_platform_delete', {'id':advert.id}) }}\" class=\"btn btn-danger\">
\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\tSupprimer l'annonce
\t\t\t</a>
\t\t{% endif %}
\t</p>
\t
{% endblock %}", "GbrfixPlatformBundle:Advert:view.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
