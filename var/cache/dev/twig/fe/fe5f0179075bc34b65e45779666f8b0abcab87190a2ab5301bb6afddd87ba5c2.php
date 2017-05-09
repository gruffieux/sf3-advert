<?php

/* GbrfixPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_2910cc7c006193d1cc1d3c390e11e10ced673d98bb640f8418b63e2fdf803db7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'scripts_header' => array($this, 'block_scripts_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f47fc15020fd7c79a33037e259405e857d173f129ccc2d05269fbbb8f768e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f47fc15020fd7c79a33037e259405e857d173f129ccc2d05269fbbb8f768e50->enter($__internal_7f47fc15020fd7c79a33037e259405e857d173f129ccc2d05269fbbb8f768e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GbrfixPlatformBundle:Advert:form.html.twig"));

        // line 2
        $this->displayBlock('scripts_header', $context, $blocks);
        // line 5
        echo "
<h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form"), "html", null, true);
        echo "</h3>

<div class=\"well\">
\t";
        // line 10
        echo "\t";
        // line 11
        echo "\t
\t";
        // line 13
        echo "\t";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t
\t";
        // line 16
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t
\t";
        // line 19
        echo "\t";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array(), "any", true, true)) {
            // line 20
            echo "\t\t";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.date")));
            echo "
\t";
        }
        // line 22
        echo "\t
\t";
        // line 24
        echo "\t<div class=\"form-group\">
\t\t";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.title")) ? array() : array("label" => $_label_)));
        echo "
\t\t
\t\t";
        // line 28
        echo "\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t";
        // line 32
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t
\t";
        // line 37
        echo "\t<div class=\"form-group\">
\t\t";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.desc")) ? array() : array("label" => $_label_)));
        echo "
\t\t
\t\t";
        // line 41
        echo "\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t";
        // line 45
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t\t
\t\t<script>
\t\t\t// TODO: Trouver un moyen de charger cela dynamiquement
            //CKEDITOR.replace( 'gbrfix_platformbundle_advert[content]' );
        </script>
\t</div>
\t
\t";
        // line 55
        echo "\t<div class=\"form-group\">
\t\t";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.author")) ? array() : array("label" => $_label_)));
        echo "
\t\t
\t\t";
        // line 59
        echo "\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'errors');
        echo "
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t";
        // line 63
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t
\t";
        // line 68
        echo "\t<div class=\"form-group\">
\t\t";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.email")) ? array() : array("label" => $_label_)));
        echo "
\t\t
\t\t";
        // line 72
        echo "\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t";
        // line 76
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t
\t";
        // line 81
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.image")));
        echo "
\t
\t";
        // line 84
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("category.title", 2)));
        echo "
\t";
        // line 86
        echo "\t<a href=\"#\" id=\"add_category\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("category.add"), "html", null, true);
        echo "</a>
\t
\t";
        // line 89
        echo "\t";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "published", array(), "any", true, true)) {
            // line 90
            echo "\t\t";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.publish")));
            echo "
\t";
        }
        // line 92
        echo "\t
\t";
        // line 94
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t
\t";
        // line 97
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t
\t";
        // line 100
        echo "\t";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        // line 103
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cd60f16_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cd60f16_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/cd60f16_category_1.js");
            // line 105
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "cd60f16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cd60f16") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/cd60f16.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        
        $__internal_7f47fc15020fd7c79a33037e259405e857d173f129ccc2d05269fbbb8f768e50->leave($__internal_7f47fc15020fd7c79a33037e259405e857d173f129ccc2d05269fbbb8f768e50_prof);

    }

    // line 2
    public function block_scripts_header($context, array $blocks = array())
    {
        $__internal_f7ebc88e6ddeba0ca33701b60a36fef200a56027d7937621a05e43955ae1564f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ebc88e6ddeba0ca33701b60a36fef200a56027d7937621a05e43955ae1564f->enter($__internal_f7ebc88e6ddeba0ca33701b60a36fef200a56027d7937621a05e43955ae1564f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts_header"));

        // line 3
        echo "\t<script src=\"//cdn.ckeditor.com/4.6.0/standard/ckeditor.js\"></script>
";
        
        $__internal_f7ebc88e6ddeba0ca33701b60a36fef200a56027d7937621a05e43955ae1564f->leave($__internal_f7ebc88e6ddeba0ca33701b60a36fef200a56027d7937621a05e43955ae1564f_prof);

    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 3,  231 => 2,  212 => 105,  208 => 103,  201 => 100,  195 => 97,  189 => 94,  186 => 92,  180 => 90,  177 => 89,  171 => 86,  166 => 84,  160 => 81,  152 => 76,  145 => 72,  140 => 69,  137 => 68,  129 => 63,  122 => 59,  117 => 56,  114 => 55,  101 => 45,  94 => 41,  89 => 38,  86 => 37,  78 => 32,  71 => 28,  66 => 25,  63 => 24,  60 => 22,  54 => 20,  51 => 19,  45 => 16,  39 => 13,  36 => 11,  34 => 10,  28 => 6,  25 => 5,  23 => 2,);
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
{% block scripts_header %}
\t<script src=\"//cdn.ckeditor.com/4.6.0/standard/ckeditor.js\"></script>
{% endblock %}

<h3>{{ 'advert.form'|trans }}</h3>

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
\t{# Génération du label + error + widget sur une ligne #}
\t{% if form.date is defined %}
\t\t{{ form_row(form.date, {'label': 'advert.form.date'|trans}) }}
\t{% endif %}
\t
\t{# Génération manuelle et éclatée #}
\t<div class=\"form-group\">
\t\t{{ form_label(form.title, 'advert.form.title'|trans, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t\t
\t\t{# Affichage des erreurs pour ce champ #}
\t\t{{ form_errors(form.title) }}
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t{# Génération du champ #}
\t\t\t{{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
\t\t</div>
\t</div>
\t
\t{# Génération manuelle et éclatée #}
\t<div class=\"form-group\">
\t\t{{ form_label(form.content, 'advert.form.desc'|trans, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t\t
\t\t{# Affichage des erreurs pour ce champ #}
\t\t{{ form_errors(form.content) }}
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t{# Génération du champ #}
\t\t\t{{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
\t\t</div>
\t\t
\t\t<script>
\t\t\t// TODO: Trouver un moyen de charger cela dynamiquement
            //CKEDITOR.replace( 'gbrfix_platformbundle_advert[content]' );
        </script>
\t</div>
\t
\t{# Génération manuelle et éclatée #}
\t<div class=\"form-group\">
\t\t{{ form_label(form.author, 'advert.form.author'|trans, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t\t
\t\t{# Affichage des erreurs pour ce champ #}
\t\t{{ form_errors(form.author) }}
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t{# Génération du champ #}
\t\t\t{{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}
\t\t</div>
\t</div>
\t
\t{# Génération manuelle et éclatée #}
\t<div class=\"form-group\">
\t\t{{ form_label(form.email, 'advert.form.email'|trans, {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t\t
\t\t{# Affichage des erreurs pour ce champ #}
\t\t{{ form_errors(form.email) }}
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t{# Génération du champ #}
\t\t\t{{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
\t\t</div>
\t</div>
\t
\t{# Génération du label + error + widget sur une ligne #}
\t{{ form_row(form.image.file, {'label': 'advert.form.image'|trans}) }}
\t
\t{# Génération du label + error + widget sur une ligne #}
\t{{ form_row(form.categories, {'label': 'category.title'|transchoice(2)}) }}
\t{# TODO: Créer un moyen différent d'ajouter les catégories #}
\t<a href=\"#\" id=\"add_category\" class=\"btn btn-default\">{{ 'category.add'|trans }}</a>
\t
\t{# Génération du label + error + widget sur une ligne #}
\t{% if form.published is defined %}
\t\t{{ form_row(form.published, {'label': 'advert.form.publish'|trans}) }}
\t{% endif %}
\t
\t{# Pour le bouton submit, pas de label ni d'erreur #}
\t{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
\t
\t{# Génération auto des champs pas encore écrits. Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony) #}
\t{{ form_rest(form) }}
\t
\t{# Balise fermante du formulaire #}
\t{{ form_end(form) }}
</div>

{% javascripts filter='?jsqueeze'
\t'bundles/gbrfixplatform/js/category.js' %}
\t<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
{% endjavascripts %}
", "GbrfixPlatformBundle:Advert:form.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
