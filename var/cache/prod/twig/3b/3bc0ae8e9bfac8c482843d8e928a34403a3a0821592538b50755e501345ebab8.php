<?php

/* GbrfixPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_6f0d76d6cc369ee4fa042521edc5c3897e4ccc504ab1bd0f64e326ca958da846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GbrfixPlatformBundle::layout.html.twig", "GbrfixPlatformBundle:Advert:view.html.twig", 1);
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
        echo "Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_platform_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
        // line 7
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "image", array()))) {
            // line 8
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "image", array()), "alt", array()), "html", null, true);
            echo "\" width=\"100%\" />
\t";
        }
        // line 10
        echo "
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "title", array()), "html", null, true);
        echo "</h2>
\t<i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
\t
\t<div class=\"well\">
\t\t";
        // line 15
        if ($this->env->getExtension('Gbrfix\PlatformBundle\Service\AntispamExtension')->checkIfArgumentIsSpam($this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "content", array()))) {
            // line 16
            echo "\t\t\t<font color=\"red\">SPAM---></font>
\t\t";
        }
        // line 18
        echo "\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "content", array()), "html", null, true);
        echo "
\t</div>
\t
\t";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["advertSkills"]) ? $context["advertSkills"] : null)) > 2)) {
            // line 22
            echo "\t\t<div>
\t\t\tCette annonce requiert les compétences suivantes :
\t\t\t<ul>
\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["advertSkills"]) ? $context["advertSkills"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 26
                echo "\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 31
        echo "\t
\t";
        // line 32
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "categories", array()), "empty", array())) {
            // line 33
            echo "\t\t<p>
\t\t\tCette annonce est parue dans les catégories suivantes :
\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 36
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_home", array("cat" => $this->getAttribute($context["category"], "name", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 38
                echo "\t\t\t\t</a>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t</p>
\t";
        }
        // line 42
        echo "\t
\t<div class=\"advert-application\">
\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applications"]) ? $context["applications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 45
            echo "\t\t\t<i>Par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["application"], "user", array()), "username", array()), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["application"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</i>
\t\t\t<div class=\"well\">
\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "content", array()), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t</div>
\t
\t<p>
\t\t<a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t";
        // line 57
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 58
            echo "\t\t\t";
            if ((null === (isset($context["advertMarker"]) ? $context["advertMarker"] : null))) {
                // line 59
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_mark", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-bookmark\"></i>
\t\t\t\t\tMarquer l'annonce
\t\t\t\t</a>
\t\t\t";
            } else {
                // line 64
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_unmark", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-bookmark\"></i>
\t\t\t\t\tEnlever le marqueur
\t\t\t\t</a>
\t\t\t";
            }
            // line 69
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_apply", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
\t\t\t\t<i class=\"glyphicon glyphicon-send\"></i>
\t\t\t\tPostuler
\t\t\t</a>
\t\t";
        }
        // line 74
        echo "\t\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODERATEUR")) {
            // line 75
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
\t\t\t\t<i class=\"glyphicon glyphicon-edit\"></i>
\t\t\t\tModifier l'annonce
\t\t\t</a>
\t\t";
        }
        // line 80
        echo "\t\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 81
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\t\tSupprimer l'annonce
\t\t\t</a>
\t\t";
        }
        // line 86
        echo "\t</p>
\t
";
    }

    public function getTemplateName()
    {
        return "GbrfixPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 86,  246 => 81,  243 => 80,  234 => 75,  231 => 74,  222 => 69,  213 => 64,  204 => 59,  201 => 58,  199 => 57,  192 => 53,  187 => 50,  178 => 47,  170 => 45,  166 => 44,  162 => 42,  158 => 40,  143 => 38,  138 => 37,  133 => 36,  116 => 35,  112 => 33,  110 => 32,  107 => 31,  102 => 28,  91 => 26,  87 => 25,  82 => 22,  80 => 21,  73 => 18,  69 => 16,  67 => 15,  59 => 12,  55 => 11,  52 => 10,  44 => 8,  42 => 7,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GbrfixPlatformBundle:Advert:view.html.twig", "/home/gab/workspace/Symfony/src/Gbrfix/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
