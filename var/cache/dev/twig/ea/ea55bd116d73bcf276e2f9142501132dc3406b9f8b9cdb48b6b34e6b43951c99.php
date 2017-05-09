<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_2251e97c4e7705798029bca6a98a1f80c521f7189ee5e5dc9a4253b7211b30a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0434d8d656bb118487c0e95b1f808d0a48f6351973a4f0c4a44a9e6e417a257a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0434d8d656bb118487c0e95b1f808d0a48f6351973a4f0c4a44a9e6e417a257a->enter($__internal_0434d8d656bb118487c0e95b1f808d0a48f6351973a4f0c4a44a9e6e417a257a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_0434d8d656bb118487c0e95b1f808d0a48f6351973a4f0c4a44a9e6e417a257a->leave($__internal_0434d8d656bb118487c0e95b1f808d0a48f6351973a4f0c4a44a9e6e417a257a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d94d77f28fd68ff14bd12a5a883cd7b17e1f713d42411fe4aeb49b83422874dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94d77f28fd68ff14bd12a5a883cd7b17e1f713d42411fe4aeb49b83422874dd->enter($__internal_d94d77f28fd68ff14bd12a5a883cd7b17e1f713d42411fe4aeb49b83422874dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_d94d77f28fd68ff14bd12a5a883cd7b17e1f713d42411fe4aeb49b83422874dd->leave($__internal_d94d77f28fd68ff14bd12a5a883cd7b17e1f713d42411fe4aeb49b83422874dd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a8899c70139ffc2d138e87b026a038cb7e6cb835114f0768775a12a6acd5369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8899c70139ffc2d138e87b026a038cb7e6cb835114f0768775a12a6acd5369->enter($__internal_7a8899c70139ffc2d138e87b026a038cb7e6cb835114f0768775a12a6acd5369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_7a8899c70139ffc2d138e87b026a038cb7e6cb835114f0768775a12a6acd5369->leave($__internal_7a8899c70139ffc2d138e87b026a038cb7e6cb835114f0768775a12a6acd5369_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_36c020c84f94a1bde1def85ebdc770a7483f2aadb6b81fd81e9fa921d4c82abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c020c84f94a1bde1def85ebdc770a7483f2aadb6b81fd81e9fa921d4c82abc->enter($__internal_36c020c84f94a1bde1def85ebdc770a7483f2aadb6b81fd81e9fa921d4c82abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_36c020c84f94a1bde1def85ebdc770a7483f2aadb6b81fd81e9fa921d4c82abc->leave($__internal_36c020c84f94a1bde1def85ebdc770a7483f2aadb6b81fd81e9fa921d4c82abc_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbf1e2a0cfff495583ae7fed1a1325cc13e94adbd615fa663aaadc3b5d99481c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf1e2a0cfff495583ae7fed1a1325cc13e94adbd615fa663aaadc3b5d99481c->enter($__internal_fbf1e2a0cfff495583ae7fed1a1325cc13e94adbd615fa663aaadc3b5d99481c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_fbf1e2a0cfff495583ae7fed1a1325cc13e94adbd615fa663aaadc3b5d99481c->leave($__internal_fbf1e2a0cfff495583ae7fed1a1325cc13e94adbd615fa663aaadc3b5d99481c_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/home/gab/workspace/Symfony/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
