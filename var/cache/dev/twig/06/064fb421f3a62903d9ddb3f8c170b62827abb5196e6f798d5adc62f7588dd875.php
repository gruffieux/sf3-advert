<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_91b4a4542693a2338457f0f810b3415f9bf2149adafcdd6e21f6e389a170cc28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6a3226cc3a124ecacb456dc316ae2d62082ce65b482653521d2d5e5caeaa7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a3226cc3a124ecacb456dc316ae2d62082ce65b482653521d2d5e5caeaa7f9->enter($__internal_b6a3226cc3a124ecacb456dc316ae2d62082ce65b482653521d2d5e5caeaa7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6a3226cc3a124ecacb456dc316ae2d62082ce65b482653521d2d5e5caeaa7f9->leave($__internal_b6a3226cc3a124ecacb456dc316ae2d62082ce65b482653521d2d5e5caeaa7f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19d439bd8fdf9c598c714a43e72a45e05233c3e7d19f6d5e6c1a80fbf5666666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d439bd8fdf9c598c714a43e72a45e05233c3e7d19f6d5e6c1a80fbf5666666->enter($__internal_19d439bd8fdf9c598c714a43e72a45e05233c3e7d19f6d5e6c1a80fbf5666666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_19d439bd8fdf9c598c714a43e72a45e05233c3e7d19f6d5e6c1a80fbf5666666->leave($__internal_19d439bd8fdf9c598c714a43e72a45e05233c3e7d19f6d5e6c1a80fbf5666666_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/gab/workspace/Symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
