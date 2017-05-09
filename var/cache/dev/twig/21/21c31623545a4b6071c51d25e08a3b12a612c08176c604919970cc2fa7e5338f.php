<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_886d888225fc89fc7bc7112fef5f69fac1a2ac47a6b62b64446694d6d5bd6b44 extends Twig_Template
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
        $__internal_d0ab5faa46ab9027f8d1103d1d6419be58b8021c7336907e71ed4e20d2c99a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ab5faa46ab9027f8d1103d1d6419be58b8021c7336907e71ed4e20d2c99a77->enter($__internal_d0ab5faa46ab9027f8d1103d1d6419be58b8021c7336907e71ed4e20d2c99a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d0ab5faa46ab9027f8d1103d1d6419be58b8021c7336907e71ed4e20d2c99a77->leave($__internal_d0ab5faa46ab9027f8d1103d1d6419be58b8021c7336907e71ed4e20d2c99a77_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_89a047ee1f0e545421c1b893b35bcd6cfe414ef9b958a73c56cb8ee5e60b8ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a047ee1f0e545421c1b893b35bcd6cfe414ef9b958a73c56cb8ee5e60b8ba3->enter($__internal_89a047ee1f0e545421c1b893b35bcd6cfe414ef9b958a73c56cb8ee5e60b8ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_89a047ee1f0e545421c1b893b35bcd6cfe414ef9b958a73c56cb8ee5e60b8ba3->leave($__internal_89a047ee1f0e545421c1b893b35bcd6cfe414ef9b958a73c56cb8ee5e60b8ba3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7ab905da60b39035f654ff8dd067baabb1311f5e5fd8d9850cdae134fbb1ce36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab905da60b39035f654ff8dd067baabb1311f5e5fd8d9850cdae134fbb1ce36->enter($__internal_7ab905da60b39035f654ff8dd067baabb1311f5e5fd8d9850cdae134fbb1ce36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7ab905da60b39035f654ff8dd067baabb1311f5e5fd8d9850cdae134fbb1ce36->leave($__internal_7ab905da60b39035f654ff8dd067baabb1311f5e5fd8d9850cdae134fbb1ce36_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_082993a06ab6dbc12727abc5198087f07720a37db49c2d086c28ee67bb3bdc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082993a06ab6dbc12727abc5198087f07720a37db49c2d086c28ee67bb3bdc04->enter($__internal_082993a06ab6dbc12727abc5198087f07720a37db49c2d086c28ee67bb3bdc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_082993a06ab6dbc12727abc5198087f07720a37db49c2d086c28ee67bb3bdc04->leave($__internal_082993a06ab6dbc12727abc5198087f07720a37db49c2d086c28ee67bb3bdc04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
