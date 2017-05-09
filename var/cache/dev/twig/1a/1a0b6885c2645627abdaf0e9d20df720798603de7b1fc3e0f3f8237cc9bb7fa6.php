<?php

/* GbrfixPlatformBundle:Application:form.html.twig */
class __TwigTemplate_608a71b6ce986ce14186ce00a29706067bea0cc024673cccfbf301dec3df190a extends Twig_Template
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
        $__internal_f59a2d36c0475edb0bc6943405d28b289d1ee6a44033fa9abaa1ee2a3d1ab0ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59a2d36c0475edb0bc6943405d28b289d1ee6a44033fa9abaa1ee2a3d1ab0ae->enter($__internal_f59a2d36c0475edb0bc6943405d28b289d1ee6a44033fa9abaa1ee2a3d1ab0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Application:form.html.twig"));

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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t
\t";
        // line 13
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t
\t";
        // line 16
        echo "\t<div class=\"form-group\">
\t\t";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Votre message")) ? array() : array("label" => $_label_)));
        echo "
\t\t
\t\t";
        // line 20
        echo "\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t";
        // line 24
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t";
        // line 29
        echo "\t";
        // line 30
        echo "    <ul id=\"doc-fields-list\" data-prototype=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "documents", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "documents", array()));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t
\t";
        // line 44
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t
\t";
        // line 47
        echo "\t";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<script type=\"text/javascript\">
    // keep track of how many email fields have been rendered
    var docCount = '";
        // line 52
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "documents", array())), "html", null, true);
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
        
        $__internal_f59a2d36c0475edb0bc6943405d28b289d1ee6a44033fa9abaa1ee2a3d1ab0ae->leave($__internal_f59a2d36c0475edb0bc6943405d28b289d1ee6a44033fa9abaa1ee2a3d1ab0ae_prof);

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
        return array (  127 => 52,  118 => 47,  112 => 44,  106 => 41,  101 => 38,  98 => 37,  89 => 34,  85 => 33,  82 => 32,  78 => 31,  73 => 30,  71 => 29,  63 => 24,  56 => 20,  51 => 17,  48 => 16,  42 => 13,  36 => 10,  33 => 8,  31 => 7,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Cette vue n'hérite de personne. Elle est en électron libre. #}

<h3>{{ 'application.form'|trans }}</h3>

<div class=\"well\">
\t{# Formulaire par défault #}
\t{# form(form) #}
\t
\t{# Balise ouvrante du formulaire #}
\t{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
\t
\t{# Les erreurs générales du formulaire #}
\t{{ form_errors(form) }}
\t
\t{# Génération manuelle et éclatée #}
\t<div class=\"form-group\">
\t\t{{ form_label(form.content, 'Votre message'|trans, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t\t
\t\t{# Affichage des erreurs pour ce champ #}
\t\t{{ form_errors(form.content) }}
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t{# Génération du champ #}
\t\t\t{{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
\t\t</div>
\t</div>

\t{# Génération du label + error + widget sur une ligne #}
\t{# store the prototype on the data-prototype attribute #}
    <ul id=\"doc-fields-list\" data-prototype=\"{{ form_widget(form.documents.vars.prototype)|e }}\">
    {% for document in form.documents %}
        <li>
            {{ form_widget(document.title, {'attr': {'class': 'form-control'}}) }}
            {{ form_widget(document.file, {'attr': {'class': 'form-control'}}) }}
        </li>
    {% endfor %}
    </ul>
\t<a href=\"#\" id=\"add-document\">{{ 'Ajouter un document'|trans }}</a>

\t{# Pour le bouton submit, pas de label ni d'erreur #}
\t{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
\t
\t{# Génération auto des champs pas encore écrits. Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony) #}
\t{{ form_rest(form) }}
\t
\t{# Balise fermante du formulaire #}
\t{{ form_end(form) }}
</div>

<script type=\"text/javascript\">
    // keep track of how many email fields have been rendered
    var docCount = '{{ form.documents|length }}';

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
</script>", "GbrfixPlatformBundle:Application:form.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Application/form.html.twig");
    }
}
