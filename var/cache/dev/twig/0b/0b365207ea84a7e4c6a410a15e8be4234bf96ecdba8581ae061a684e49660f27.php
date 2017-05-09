<?php

/* GbrfixUserBundle::layout.html.twig */
class __TwigTemplate_fd32b6f9edad1a244ffb65204850b73cce0189a306906ccaf319555d4302b53a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GbrfixUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f7c21ff66fcdab6938639dd94334dac6949bf58232fa37ba89d02345cdaa96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7c21ff66fcdab6938639dd94334dac6949bf58232fa37ba89d02345cdaa96e->enter($__internal_4f7c21ff66fcdab6938639dd94334dac6949bf58232fa37ba89d02345cdaa96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f7c21ff66fcdab6938639dd94334dac6949bf58232fa37ba89d02345cdaa96e->leave($__internal_4f7c21ff66fcdab6938639dd94334dac6949bf58232fa37ba89d02345cdaa96e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bd2cef0b176fab53a7def27cfff910e720624b1205b332060aafdca0e1e150e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd2cef0b176fab53a7def27cfff910e720624b1205b332060aafdca0e1e150e->enter($__internal_7bd2cef0b176fab53a7def27cfff910e720624b1205b332060aafdca0e1e150e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        // line 5
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 6
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "\t\t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t
\t<hr>
\t
\t";
        // line 16
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "\t
";
        
        $__internal_7bd2cef0b176fab53a7def27cfff910e720624b1205b332060aafdca0e1e150e->leave($__internal_7bd2cef0b176fab53a7def27cfff910e720624b1205b332060aafdca0e1e150e_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd8702313873c833dc6a57a0a87e178b33e28340e4cdfd0c512cc02450878589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8702313873c833dc6a57a0a87e178b33e28340e4cdfd0c512cc02450878589->enter($__internal_fd8702313873c833dc6a57a0a87e178b33e28340e4cdfd0c512cc02450878589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "\t";
        
        $__internal_fd8702313873c833dc6a57a0a87e178b33e28340e4cdfd0c512cc02450878589->leave($__internal_fd8702313873c833dc6a57a0a87e178b33e28340e4cdfd0c512cc02450878589_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 17,  89 => 16,  81 => 18,  78 => 16,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  43 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block body %}
\t{# On affiche les messages flash que définissent les contrôleurs du bundle FOS #}
\t{% for key, messages in app.session.flashbag.all() %}
\t\t{% for message in messages %}
\t\t\t<div class=\"alert alert-{{ key }}\">
\t\t\t\t{{ message|trans({}, 'FOSUserBundle') }}
\t\t\t</div>
\t\t{% endfor %}
\t{% endfor %}
\t
\t<hr>
\t
\t{# Bloc pour les autres vues du bundle FOS #}
\t{% block fos_user_content %}
\t{% endblock fos_user_content %}
\t
{% endblock %}", "GbrfixUserBundle::layout.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/UserBundle/Resources/views/layout.html.twig");
    }
}
