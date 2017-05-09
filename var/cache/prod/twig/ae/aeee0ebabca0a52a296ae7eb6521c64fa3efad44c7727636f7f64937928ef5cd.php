<?php

/* GbrfixPlatformBundle:Application:form.html.twig */
class __TwigTemplate_a23b0f940db340440587aebfb4ba7e591217d2c18a0fa7ca0c4c98dd2199fe9a extends Twig_Template
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
        // line 2
        echo "
<h3>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("application.form"), "html", null, true);
        echo "</h3>

<div class=\"well\">
\t";
        // line 7
        echo "\t";
        // line 8
        echo "\t
\t";
        // line 10
        echo "\t";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t
\t";
        // line 13
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t
\t";
        // line 16
        echo "\t<div class=\"form-group\">
\t\t";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Votre message")) ? array() : array("label" => $_label_)));
        echo "
\t\t
\t\t";
        // line 20
        echo "\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'errors');
        echo "
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t";
        // line 24
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t";
        // line 29
        echo "\t";
        // line 30
        echo "    <ul id=\"doc-fields-list\" data-prototype=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "documents", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 32
            echo "        <li>
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["document"], "title", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["document"], "file", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </ul>
\t<a href=\"#\" id=\"add-document\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter un document"), "html", null, true);
        echo "</a>

\t";
        // line 41
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t
\t";
        // line 44
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t
\t";
        // line 47
        echo "\t";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>

<script type=\"text/javascript\">
    // keep track of how many email fields have been rendered
    var docCount = '";
        // line 52
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "documents", array())), "html", null, true);
        echo "';

    jQuery(document).ready(function() {
        jQuery('#add-document').click(function(e) {
            e.preventDefault();

            var docList = jQuery('#doc-fields-list');

            // grab the prototype template
            var newWidget = docList.attr('data-prototype');
            // replace the \"__name__\" used in the id and name of the prototype
            // with a number that's unique to your emails
            // end name attribute looks like name=\"contact[emails][2]\"
            newWidget = newWidget.replace(/__name__/g, docCount);
            docCount++;

            // create a new list element and add it to the list
            var newLi = jQuery('<li></li>').html(newWidget);
            newLi.appendTo(docList);
        });
    })
</script>";
    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Application:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 52,  115 => 47,  109 => 44,  103 => 41,  98 => 38,  95 => 37,  86 => 34,  82 => 33,  79 => 32,  75 => 31,  70 => 30,  68 => 29,  60 => 24,  53 => 20,  48 => 17,  45 => 16,  39 => 13,  33 => 10,  30 => 8,  28 => 7,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GbrfixPlatformBundle:Application:form.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Application/form.html.twig");
    }
}
