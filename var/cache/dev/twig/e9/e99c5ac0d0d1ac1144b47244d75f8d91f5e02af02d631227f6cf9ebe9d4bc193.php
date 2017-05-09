<?php

/* GbrfixPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_5f53a6141fba20787cda43213575cf7bc60a959b24c9b7bf816ef6bcab4fbb61 extends Twig_Template
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
        $__internal_e4ec5b32ef14c8e7bb5afdbac59f8bdc634a19bdefc7de2b099663682fad1fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ec5b32ef14c8e7bb5afdbac59f8bdc634a19bdefc7de2b099663682fad1fcd->enter($__internal_e4ec5b32ef14c8e7bb5afdbac59f8bdc634a19bdefc7de2b099663682fad1fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
<ul class=\"nav nav-pills nav-stacked\">
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 5
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_view", array("advert_id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
\t\t\t</a>
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
";
        
        $__internal_e4ec5b32ef14c8e7bb5afdbac59f8bdc634a19bdefc7de2b099663682fad1fcd->leave($__internal_e4ec5b32ef14c8e7bb5afdbac59f8bdc634a19bdefc7de2b099663682fad1fcd_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  37 => 7,  33 => 6,  30 => 5,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Cette vue n'hérite de personne. Elle est indépendante. #}

<ul class=\"nav nav-pills nav-stacked\">
\t{% for advert in listAdverts %}
\t\t<li>
\t\t\t<a href=\"{{ path('gbrfix_platform_view', {'advert_id':advert.id}) }}\">
\t\t\t\t{{ advert.title }}
\t\t\t</a>
\t\t</li>
\t{% endfor %}
</ul>
", "GbrfixPlatformBundle:Advert:menu.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
