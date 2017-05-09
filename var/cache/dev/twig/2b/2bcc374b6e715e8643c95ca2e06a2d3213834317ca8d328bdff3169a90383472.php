<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b7f833803c4f3509201c1e6be72d27c8f0fa910022f8a5a8e6c48d9dc1e2411d extends Twig_Template
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
        $__internal_2e69eb30bb77837d6ec853ac370bf687381f99eb2863fadbfe135b23449a7319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e69eb30bb77837d6ec853ac370bf687381f99eb2863fadbfe135b23449a7319->enter($__internal_2e69eb30bb77837d6ec853ac370bf687381f99eb2863fadbfe135b23449a7319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2e69eb30bb77837d6ec853ac370bf687381f99eb2863fadbfe135b23449a7319->leave($__internal_2e69eb30bb77837d6ec853ac370bf687381f99eb2863fadbfe135b23449a7319_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
