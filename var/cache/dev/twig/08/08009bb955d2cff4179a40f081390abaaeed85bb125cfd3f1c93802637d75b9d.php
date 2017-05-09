<?php

/* ::base.html.twig */
class __TwigTemplate_138f8ff07a5ae3b27579fcf823543aa51610bc11a9a590b103d6d31fa202d204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'scripts_footer' => array($this, 'block_scripts_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e3dfaccefdd782c13ad85b5c4f712a96fb7399c29adb0a37c5dc05c7e322e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3dfaccefdd782c13ad85b5c4f712a96fb7399c29adb0a37c5dc05c7e322e76->enter($__internal_9e3dfaccefdd782c13ad85b5c4f712a96fb7399c29adb0a37c5dc05c7e322e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('scripts_footer', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9e3dfaccefdd782c13ad85b5c4f712a96fb7399c29adb0a37c5dc05c7e322e76->leave($__internal_9e3dfaccefdd782c13ad85b5c4f712a96fb7399c29adb0a37c5dc05c7e322e76_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82581ec9e9dfc8891907d2a070fbb6e05205e7d4631faa5146b24f5ca781c937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82581ec9e9dfc8891907d2a070fbb6e05205e7d4631faa5146b24f5ca781c937->enter($__internal_82581ec9e9dfc8891907d2a070fbb6e05205e7d4631faa5146b24f5ca781c937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_82581ec9e9dfc8891907d2a070fbb6e05205e7d4631faa5146b24f5ca781c937->leave($__internal_82581ec9e9dfc8891907d2a070fbb6e05205e7d4631faa5146b24f5ca781c937_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a91fdedecfa9ba31d412c52eceab52a7c9badc3b06e65b0197b6b2a15107d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a91fdedecfa9ba31d412c52eceab52a7c9badc3b06e65b0197b6b2a15107d4a->enter($__internal_1a91fdedecfa9ba31d412c52eceab52a7c9badc3b06e65b0197b6b2a15107d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1a91fdedecfa9ba31d412c52eceab52a7c9badc3b06e65b0197b6b2a15107d4a->leave($__internal_1a91fdedecfa9ba31d412c52eceab52a7c9badc3b06e65b0197b6b2a15107d4a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_60506c03597a79ab4e045893cecf2268c32e9b0517d94d3c4295fee85b4f98ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60506c03597a79ab4e045893cecf2268c32e9b0517d94d3c4295fee85b4f98ac->enter($__internal_60506c03597a79ab4e045893cecf2268c32e9b0517d94d3c4295fee85b4f98ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60506c03597a79ab4e045893cecf2268c32e9b0517d94d3c4295fee85b4f98ac->leave($__internal_60506c03597a79ab4e045893cecf2268c32e9b0517d94d3c4295fee85b4f98ac_prof);

    }

    // line 11
    public function block_scripts_footer($context, array $blocks = array())
    {
        $__internal_e97c4c0da4e532486a381c88c9e61f562e8b84da8691b14bf24ea30dbe7e6dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97c4c0da4e532486a381c88c9e61f562e8b84da8691b14bf24ea30dbe7e6dbe->enter($__internal_e97c4c0da4e532486a381c88c9e61f562e8b84da8691b14bf24ea30dbe7e6dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts_footer"));

        
        $__internal_e97c4c0da4e532486a381c88c9e61f562e8b84da8691b14bf24ea30dbe7e6dbe->leave($__internal_e97c4c0da4e532486a381c88c9e61f562e8b84da8691b14bf24ea30dbe7e6dbe_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block scripts_footer %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/gab/workspace/Symfony/app/Resources/views/base.html.twig");
    }
}
