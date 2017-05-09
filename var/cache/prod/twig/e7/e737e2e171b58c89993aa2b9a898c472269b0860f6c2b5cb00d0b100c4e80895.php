<?php

/* GbrfixPlatformBundle:Advert:apply.html.twig */
class __TwigTemplate_0b87b964317bcfb316c5d96e30bc27c5ae590ee62a13ab2b532fe6f713264998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GbrfixPlatformBundle::layout.html.twig", "GbrfixPlatformBundle:Advert:apply.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Postulation"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_platform_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Postuler à \"abc\""), "html", null, true);
        echo "</h2>
\t
\t";
        // line 9
        echo twig_include($this->env, $context, "GbrfixPlatformBundle:Application:form.html.twig");
        echo "
\t
\t<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.apply.warning"), "html", null, true);
        echo "</p>
\t
\t<p>
\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_view", array("advert_id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.back"), "html", null, true);
        echo "
\t\t</a>
\t</p>
\t
";
    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:apply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  59 => 14,  53 => 11,  48 => 9,  43 => 7,  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GbrfixPlatformBundle:Advert:apply.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/apply.html.twig");
    }
}