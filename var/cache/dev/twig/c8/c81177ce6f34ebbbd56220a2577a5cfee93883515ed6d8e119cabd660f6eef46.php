<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_66f011a6fa4099561edf7d0e0362d8c9813031671d7cfc2d86a82dfa1c192118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c828f71ed0433ed478e0e9bc400a784735a03808930a0220b3a9245ab8f7b381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c828f71ed0433ed478e0e9bc400a784735a03808930a0220b3a9245ab8f7b381->enter($__internal_c828f71ed0433ed478e0e9bc400a784735a03808930a0220b3a9245ab8f7b381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c828f71ed0433ed478e0e9bc400a784735a03808930a0220b3a9245ab8f7b381->leave($__internal_c828f71ed0433ed478e0e9bc400a784735a03808930a0220b3a9245ab8f7b381_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_76b2a04e314458e45ab9b2952d226108001c45c40edea5b75e130c770357c5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b2a04e314458e45ab9b2952d226108001c45c40edea5b75e130c770357c5da->enter($__internal_76b2a04e314458e45ab9b2952d226108001c45c40edea5b75e130c770357c5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_76b2a04e314458e45ab9b2952d226108001c45c40edea5b75e130c770357c5da->leave($__internal_76b2a04e314458e45ab9b2952d226108001c45c40edea5b75e130c770357c5da_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_523160a281e12e8b5c5436dc671eee3c7eb5a9bee256fdbc85abcbef99a80884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523160a281e12e8b5c5436dc671eee3c7eb5a9bee256fdbc85abcbef99a80884->enter($__internal_523160a281e12e8b5c5436dc671eee3c7eb5a9bee256fdbc85abcbef99a80884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_523160a281e12e8b5c5436dc671eee3c7eb5a9bee256fdbc85abcbef99a80884->leave($__internal_523160a281e12e8b5c5436dc671eee3c7eb5a9bee256fdbc85abcbef99a80884_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_69dd80bed24f8f80e4f68677bf8e43f061d8474fefca3732f7de76f691785b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69dd80bed24f8f80e4f68677bf8e43f061d8474fefca3732f7de76f691785b7e->enter($__internal_69dd80bed24f8f80e4f68677bf8e43f061d8474fefca3732f7de76f691785b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_69dd80bed24f8f80e4f68677bf8e43f061d8474fefca3732f7de76f691785b7e->leave($__internal_69dd80bed24f8f80e4f68677bf8e43f061d8474fefca3732f7de76f691785b7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
