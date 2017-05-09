<?php

/* GbrfixPlatformBundle:Advert:application.html.twig */
class __TwigTemplate_0090953ea73ec73bbb52e083109021dba1de47bb375dc5ecac87296047f1a334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GbrfixPlatformBundle::layout.html.twig", "GbrfixPlatformBundle:Advert:application.html.twig", 1);
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
        $__internal_1deb26115eb350e20409d5b708dd0a3c7ff6b1e8237b417149d70b6c2fceea10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1deb26115eb350e20409d5b708dd0a3c7ff6b1e8237b417149d70b6c2fceea10->enter($__internal_1deb26115eb350e20409d5b708dd0a3c7ff6b1e8237b417149d70b6c2fceea10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:application.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1deb26115eb350e20409d5b708dd0a3c7ff6b1e8237b417149d70b6c2fceea10->leave($__internal_1deb26115eb350e20409d5b708dd0a3c7ff6b1e8237b417149d70b6c2fceea10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2173077f79838b044638cc732ed6c3741f66cc4608bfd328ea3af395d44689ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2173077f79838b044638cc732ed6c3741f66cc4608bfd328ea3af395d44689ea->enter($__internal_2173077f79838b044638cc732ed6c3741f66cc4608bfd328ea3af395d44689ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Postulations"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_2173077f79838b044638cc732ed6c3741f66cc4608bfd328ea3af395d44689ea->leave($__internal_2173077f79838b044638cc732ed6c3741f66cc4608bfd328ea3af395d44689ea_prof);

    }

    // line 5
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_7ed99af689674a52050e0752568ec6a032978eef48eec2fd24298976b1d2fdcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed99af689674a52050e0752568ec6a032978eef48eec2fd24298976b1d2fdcb->enter($__internal_7ed99af689674a52050e0752568ec6a032978eef48eec2fd24298976b1d2fdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 6
        echo "
\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes postulations"), "html", null, true);
        echo "</h2>
\t
\t";
        // line 9
        echo twig_include($this->env, $context, "GbrfixPlatformBundle:Advert:list.html.twig", array("listAdverts" => (isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts"))));
        echo "
\t
";
        
        $__internal_7ed99af689674a52050e0752568ec6a032978eef48eec2fd24298976b1d2fdcb->leave($__internal_7ed99af689674a52050e0752568ec6a032978eef48eec2fd24298976b1d2fdcb_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:application.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  58 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
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

{% block title %}{{ 'Postulations'|trans }} - {{ parent() }}{% endblock %}

{% block platform_body %}

\t<h2>{{ 'Mes postulations'|trans }}</h2>
\t
\t{{ include('GbrfixPlatformBundle:Advert:list.html.twig', {'listAdverts': listAdverts}) }}
\t
{% endblock %}", "GbrfixPlatformBundle:Advert:application.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/application.html.twig");
    }
}
