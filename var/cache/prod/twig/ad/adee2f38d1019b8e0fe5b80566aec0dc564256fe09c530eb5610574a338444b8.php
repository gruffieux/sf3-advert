<?php

/* GbrfixPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_3a4ba3b06cdd51a92aba30a7345fcd17589faaeac3d40e9bb3172106e72c150b extends Twig_Template
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t
\t";
        // line 16
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t
\t";
        // line 19
        echo "\t";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array(), "any", true, true)) {
            // line 20
            echo "\t\t";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.date")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.title")) ? array() : array("label" => $_label_)));
        echo "
\t\t
\t\t";
        // line 28
        echo "\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'errors');
        echo "
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t";
        // line 32
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t
\t";
        // line 37
        echo "\t<div class=\"form-group\">
\t\t";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.desc")) ? array() : array("label" => $_label_)));
        echo "
\t\t
\t\t";
        // line 41
        echo "\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'errors');
        echo "
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t";
        // line 45
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.author")) ? array() : array("label" => $_label_)));
        echo "
\t\t
\t\t";
        // line 59
        echo "\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "author", array()), 'errors');
        echo "
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t";
        // line 63
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t
\t";
        // line 68
        echo "\t<div class=\"form-group\">
\t\t";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.email")) ? array() : array("label" => $_label_)));
        echo "
\t\t
\t\t";
        // line 72
        echo "\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
\t\t
\t\t<div class=\"col-sm-10\">
\t\t\t";
        // line 76
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t
\t";
        // line 81
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), "file", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.image")));
        echo "
\t
\t";
        // line 84
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categories", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("category.title", 2)));
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "published", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("advert.form.publish")));
            echo "
\t";
        }
        // line 92
        echo "\t
\t";
        // line 94
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t
\t";
        // line 97
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t
\t";
        // line 100
        echo "\t";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>

";
        // line 103
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cd60f16_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cd60f16_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cd60f16_category_1.js");
            // line 105
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "cd60f16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cd60f16") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cd60f16.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    // line 2
    public function block_scripts_header($context, array $blocks = array())
    {
        // line 3
        echo "\t<script src=\"//cdn.ckeditor.com/4.6.0/standard/ckeditor.js\"></script>
";
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
        return array (  228 => 3,  225 => 2,  209 => 105,  205 => 103,  198 => 100,  192 => 97,  186 => 94,  183 => 92,  177 => 90,  174 => 89,  168 => 86,  163 => 84,  157 => 81,  149 => 76,  142 => 72,  137 => 69,  134 => 68,  126 => 63,  119 => 59,  114 => 56,  111 => 55,  98 => 45,  91 => 41,  86 => 38,  83 => 37,  75 => 32,  68 => 28,  63 => 25,  60 => 24,  57 => 22,  51 => 20,  48 => 19,  42 => 16,  36 => 13,  33 => 11,  31 => 10,  25 => 6,  22 => 5,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GbrfixPlatformBundle:Advert:form.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
