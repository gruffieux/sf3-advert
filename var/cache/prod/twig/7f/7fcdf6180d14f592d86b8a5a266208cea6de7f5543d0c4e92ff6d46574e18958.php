<?php

/* GbrfixPlatformBundle:Advert:application.html.twig */
class __TwigTemplate_11ccdef66c01391db7633c9c49ea1582276e6b63e5f1eaaa48516c0ede459b6f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Postulations"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mes postulations"), "html", null, true);
        echo "</h2>
\t
\t";
        // line 9
        echo twig_include($this->env, $context, "GbrfixPlatformBundle:Advert:list.html.twig", array("listAdverts" => (isset($context["listAdverts"]) ? $context["listAdverts"] : null)));
        echo "
\t
";
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
        return array (  48 => 9,  43 => 7,  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GbrfixPlatformBundle:Advert:application.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/application.html.twig");
    }
}
