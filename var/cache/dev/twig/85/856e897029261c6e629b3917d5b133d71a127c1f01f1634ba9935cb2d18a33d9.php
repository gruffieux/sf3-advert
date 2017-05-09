<?php

/* GbrfixPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_08fae2b76a187a4a73f8c2fa113ef989ea01fcc273b8525b1956de2a51af9c2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GbrfixPlatformBundle::layout.html.twig", "GbrfixPlatformBundle:Advert:delete.html.twig", 1);
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
        $__internal_19d514f70c7f58d57b238228ca86545bb2e9924ca0266c8e1947e4ce2463566a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d514f70c7f58d57b238228ca86545bb2e9924ca0266c8e1947e4ce2463566a->enter($__internal_19d514f70c7f58d57b238228ca86545bb2e9924ca0266c8e1947e4ce2463566a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19d514f70c7f58d57b238228ca86545bb2e9924ca0266c8e1947e4ce2463566a->leave($__internal_19d514f70c7f58d57b238228ca86545bb2e9924ca0266c8e1947e4ce2463566a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccece72f402ba33f0f034280d9afd98032fe816ba25567d86fd27df4bfc2121f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccece72f402ba33f0f034280d9afd98032fe816ba25567d86fd27df4bfc2121f->enter($__internal_ccece72f402ba33f0f034280d9afd98032fe816ba25567d86fd27df4bfc2121f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_ccece72f402ba33f0f034280d9afd98032fe816ba25567d86fd27df4bfc2121f->leave($__internal_ccece72f402ba33f0f034280d9afd98032fe816ba25567d86fd27df4bfc2121f_prof);

    }

    // line 5
    public function block_platform_body($context, array $blocks = array())
    {
        $__internal_e5e4b756e52fda368b2a1c4a96d8a99d52801e2811b33eb58d21896d8bd49fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e4b756e52fda368b2a1c4a96d8a99d52801e2811b33eb58d21896d8bd49fcb->enter($__internal_e5e4b756e52fda368b2a1c4a96d8a99d52801e2811b33eb58d21896d8bd49fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "platform_body"));

        // line 6
        echo "
\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.delete.title"), "html", null, true);
        echo "</h2>
\t
\t<p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.delete.confirm", array("%title%" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()))), "html", null, true);
        echo "</p>
\t
\t";
        // line 12
        echo "\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_view", array("advert_id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.back"), "html", null, true);
        echo "
\t\t</a>
\t\t<input type=\"submit\" value=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", array(), "messages");
        echo "\" class=\"btn btn-danger\" />
\t\t";
        // line 19
        echo "\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t</form>
\t
";
        
        $__internal_e5e4b756e52fda368b2a1c4a96d8a99d52801e2811b33eb58d21896d8bd49fcb->leave($__internal_e5e4b756e52fda368b2a1c4a96d8a99d52801e2811b33eb58d21896d8bd49fcb_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  83 => 17,  78 => 15,  73 => 13,  68 => 12,  63 => 9,  58 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
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

{% block title %}{{ 'Delete'|trans }} - {{ parent() }}{% endblock %}

{% block platform_body %}

\t<h2>{{ 'advert.delete.title'|trans }}</h2>
\t
\t<p>{{ 'advert.delete.confirm'|trans({'%title%': advert.title}) }}</p>
\t
\t{# On met l'id de l'annonce dans la route de l'action du formulaire #}
\t<form action=\"{{ path('gbrfix_platform_delete', {'id':advert.id}) }}\" method=\"post\">
\t\t<a href=\"{{ path('gbrfix_platform_view', {'advert_id':advert.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t{{ 'advert.back'|trans }}
\t\t</a>
\t\t<input type=\"submit\" value=\"{% trans %}Delete{% endtrans %}\" class=\"btn btn-danger\" />
\t\t{# Ceci pour générer le champs CSRF #}
\t\t{{ form_rest(form) }}
\t</form>
\t
{% endblock %}", "GbrfixPlatformBundle:Advert:delete.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
