<?php

/* ::layout.html.twig */
class __TwigTemplate_3a473a8e4d82e158bab374d196ce6d4c62eb3d552c0d9aca7266ffa2b4fcdb74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'scripts_header' => array($this, 'block_scripts_header'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'scripts_footer' => array($this, 'block_scripts_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t
\t\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t
\t\t";
        // line 9
        $this->displayBlock('scripts_header', $context, $blocks);
        // line 13
        echo "\t\t
\t\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "\t\t
\t\t";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c8f1c5c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c8f1c5c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c8f1c5c_part_1_beta_1.css");
            // line 20
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
            // asset "c8f1c5c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c8f1c5c_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c8f1c5c_part_1_main_2.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        } else {
            // asset "c8f1c5c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c8f1c5c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c8f1c5c.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 22
        echo "\t</head>
\t
\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t\t<h1>Ma plate-forme d'annonces</h1>
\t\t\t\t<p>
\t\t\t\t\tProjet conçu par ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : null), "html", null, true);
        echo "
\t\t\t\t\tavec l'aide du bouqin Symfony3 d'OpenClassrooms.
\t\t\t\t</p>
\t\t\t\t<p><a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony\" target=\"_blank\">Participer au MOOC</a></p>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t\t";
        // line 37
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "\t\t\t\t\t\t<h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()))), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Mon profil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">Changer de mot de passe</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t\t\t<h2>Bienvenue !</h3>
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
            echo "\">J'ai oublié mon mot de passe</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t<h3>Les annonces</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_home");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 56
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_add");
            echo "\">Ajouter une annonce</a></li>
\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_markers");
        echo "\">Mes favoris</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gbrfix_platform_applications");
        echo "\">Mes postulations</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("GbrfixPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t\t";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<hr>
\t\t\t
\t\t\t<footer>
\t\t\t\t<p><a href=\"//github.com/gruffieux\" target=\"_blank\">";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : null), "html", null, true);
        echo "</a> © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
\t\t\t</footer>
\t\t</div>
\t\t
\t\t";
        // line 78
        $this->displayBlock('scripts_footer', $context, $blocks);
        // line 80
        echo "\t\t
\t</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "GbrFix Plateforme";
    }

    // line 9
    public function block_scripts_header($context, array $blocks = array())
    {
        // line 10
        echo "\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t\t";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t\t";
    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        // line 67
        echo "\t\t\t\t\t";
    }

    // line 78
    public function block_scripts_footer($context, array $blocks = array())
    {
        // line 79
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 79,  222 => 78,  218 => 67,  215 => 66,  210 => 15,  207 => 14,  201 => 10,  198 => 9,  192 => 7,  186 => 80,  184 => 78,  175 => 74,  167 => 68,  165 => 66,  159 => 63,  152 => 59,  147 => 58,  141 => 56,  139 => 55,  135 => 54,  131 => 52,  125 => 49,  121 => 48,  117 => 47,  113 => 45,  107 => 42,  103 => 41,  99 => 40,  93 => 38,  91 => 37,  80 => 29,  71 => 22,  51 => 20,  47 => 18,  44 => 17,  42 => 14,  39 => 13,  37 => 9,  32 => 7,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::layout.html.twig", "/home/gab/workspace/Symfony/app/Resources/views/layout.html.twig");
    }
}
