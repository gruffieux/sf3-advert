<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4f8d920f75486f16f5b285edc32d2a792a201f7329e35e31b56e3e85a7bee1a9 extends Twig_Template
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
        $__internal_cac390f193d609380c40034628e9fcb6d67364455a6c9b0ebea5dba3a22c8ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac390f193d609380c40034628e9fcb6d67364455a6c9b0ebea5dba3a22c8ee0->enter($__internal_cac390f193d609380c40034628e9fcb6d67364455a6c9b0ebea5dba3a22c8ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cac390f193d609380c40034628e9fcb6d67364455a6c9b0ebea5dba3a22c8ee0->leave($__internal_cac390f193d609380c40034628e9fcb6d67364455a6c9b0ebea5dba3a22c8ee0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
