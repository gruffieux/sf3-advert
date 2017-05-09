<?php

/* ::layout.html.twig */
class __TwigTemplate_4a6aeb0e0b50a0bfdeebade64cb9e02ba5024b65110307642db704d84381f097 extends Twig_Template
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
        $__internal_85419f5e568dcd9f38ac643b353f4ae2294a014adf932b18d8c7c6bb515a1797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85419f5e568dcd9f38ac643b353f4ae2294a014adf932b18d8c7c6bb515a1797->enter($__internal_85419f5e568dcd9f38ac643b353f4ae2294a014adf932b18d8c7c6bb515a1797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c8f1c5c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c8f1c5c_part_1_beta_1.css");
            // line 20
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
            // asset "c8f1c5c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c8f1c5c_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c8f1c5c_part_1_main_2.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        } else {
            // asset "c8f1c5c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c8f1c5c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c8f1c5c.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
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
        
        $__internal_85419f5e568dcd9f38ac643b353f4ae2294a014adf932b18d8c7c6bb515a1797->leave($__internal_85419f5e568dcd9f38ac643b353f4ae2294a014adf932b18d8c7c6bb515a1797_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_58892e44862e05736637adcdd6612c5d45f8cf01c74fe2e03a79d6d03a45cd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58892e44862e05736637adcdd6612c5d45f8cf01c74fe2e03a79d6d03a45cd2b->enter($__internal_58892e44862e05736637adcdd6612c5d45f8cf01c74fe2e03a79d6d03a45cd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GbrFix Plateforme";
        
        $__internal_58892e44862e05736637adcdd6612c5d45f8cf01c74fe2e03a79d6d03a45cd2b->leave($__internal_58892e44862e05736637adcdd6612c5d45f8cf01c74fe2e03a79d6d03a45cd2b_prof);

    }

    // line 9
    public function block_scripts_header($context, array $blocks = array())
    {
        $__internal_51731149ef935ac9b124eee0834782f4f7b9f78abc3557185a8beb654a9cb006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51731149ef935ac9b124eee0834782f4f7b9f78abc3557185a8beb654a9cb006->enter($__internal_51731149ef935ac9b124eee0834782f4f7b9f78abc3557185a8beb654a9cb006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts_header"));

        // line 10
        echo "\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t\t";
        
        $__internal_51731149ef935ac9b124eee0834782f4f7b9f78abc3557185a8beb654a9cb006->leave($__internal_51731149ef935ac9b124eee0834782f4f7b9f78abc3557185a8beb654a9cb006_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8d2350feb5a8037fc5849db7d7efce1105e4c984ff26f5bfa31315406aaabae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d2350feb5a8037fc5849db7d7efce1105e4c984ff26f5bfa31315406aaabae->enter($__internal_f8d2350feb5a8037fc5849db7d7efce1105e4c984ff26f5bfa31315406aaabae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "\t\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t\t";
        
        $__internal_f8d2350feb5a8037fc5849db7d7efce1105e4c984ff26f5bfa31315406aaabae->leave($__internal_f8d2350feb5a8037fc5849db7d7efce1105e4c984ff26f5bfa31315406aaabae_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_05512083df7276d2185a7a663c559de279d5f09735c5231821165fc5555d8e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05512083df7276d2185a7a663c559de279d5f09735c5231821165fc5555d8e9b->enter($__internal_05512083df7276d2185a7a663c559de279d5f09735c5231821165fc5555d8e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "\t\t\t\t\t";
        
        $__internal_05512083df7276d2185a7a663c559de279d5f09735c5231821165fc5555d8e9b->leave($__internal_05512083df7276d2185a7a663c559de279d5f09735c5231821165fc5555d8e9b_prof);

    }

    // line 78
    public function block_scripts_footer($context, array $blocks = array())
    {
        $__internal_47a3402104bdb1222c1082ec57c34de34ea585c4f8b77a4eb39baf52f7b1a9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a3402104bdb1222c1082ec57c34de34ea585c4f8b77a4eb39baf52f7b1a9cc->enter($__internal_47a3402104bdb1222c1082ec57c34de34ea585c4f8b77a4eb39baf52f7b1a9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts_footer"));

        // line 79
        echo "\t\t";
        
        $__internal_47a3402104bdb1222c1082ec57c34de34ea585c4f8b77a4eb39baf52f7b1a9cc->leave($__internal_47a3402104bdb1222c1082ec57c34de34ea585c4f8b77a4eb39baf52f7b1a9cc_prof);

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
        return array (  258 => 79,  252 => 78,  245 => 67,  239 => 66,  231 => 15,  225 => 14,  216 => 10,  210 => 9,  198 => 7,  189 => 80,  187 => 78,  178 => 74,  170 => 68,  168 => 66,  162 => 63,  155 => 59,  150 => 58,  144 => 56,  142 => 55,  138 => 54,  134 => 52,  128 => 49,  124 => 48,  120 => 47,  116 => 45,  110 => 42,  106 => 41,  102 => 40,  96 => 38,  94 => 37,  83 => 29,  74 => 22,  54 => 20,  50 => 18,  47 => 17,  45 => 14,  42 => 13,  40 => 9,  35 => 7,  27 => 1,);
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
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t
\t\t<title>{% block title %}GbrFix Plateforme{% endblock %}</title>
\t\t
\t\t{% block scripts_header %}
\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t\t{% endblock %}
\t\t
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t\t{% endblock %}
\t\t
\t\t{% stylesheets filter='cssrewrite, ?scssphp'
\t\t\t'bundles/gbrfixplatform/css/*' %}
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
\t\t{% endstylesheets %}
\t</head>
\t
\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t\t<h1>Ma plate-forme d'annonces</h1>
\t\t\t\t<p>
\t\t\t\t\tProjet conçu par {{ webmaster }}
\t\t\t\t\tavec l'aide du bouqin Symfony3 d'OpenClassrooms.
\t\t\t\t</p>
\t\t\t\t<p><a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony\" target=\"_blank\">Participer au MOOC</a></p>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\t\t\t\t<h2>{{ 'Hello'|trans({'%name%': app.user.username}) }}</h3>
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_profile_edit') }}\">Mon profil</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_change_password') }}\">Changer de mot de passe</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<h2>Bienvenue !</h3>
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_security_login') }}\">Connexion</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_registration_register') }}\">Inscription</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_resetting_request') }}\">J'ai oublié mon mot de passe</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<h3>Les annonces</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"{{ path('gbrfix_platform_home') }}\">Accueil</a></li>
\t\t\t\t\t\t{% if is_granted('ROLE_AUTEUR') %}
\t\t\t\t\t\t\t<li><a href=\"{{ path('gbrfix_platform_add') }}\">Ajouter une annonce</a></li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<li><a href=\"{{ path('gbrfix_platform_markers') }}\">Mes favoris</a></li>
\t\t\t\t\t\t<li><a href=\"{{ path('gbrfix_platform_applications') }}\">Mes postulations</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t\t{{ render(controller(\"GbrfixPlatformBundle:Advert:menu\", {'limit':3})) }}
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t\t{% block body %}
\t\t\t\t\t{% endblock %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<hr>
\t\t\t
\t\t\t<footer>
\t\t\t\t<p><a href=\"//github.com/gruffieux\" target=\"_blank\">{{ webmaster }}</a> © {{ 'now'|date('Y') }}</p>
\t\t\t</footer>
\t\t</div>
\t\t
\t\t{% block scripts_footer %}
\t\t{% endblock %}
\t\t
\t</body>
</html>", "::layout.html.twig", "/home/gab/workspace/Symfony/app/Resources/views/layout.html.twig");
    }
}
