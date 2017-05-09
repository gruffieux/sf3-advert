<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_fde3a8834ecedd5fd5f81e8133f99c333acab9b319eed83e45724ce9fa6543d0 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>Symfony - Erreur 404</title>
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    </head>
    <body>
    \t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"jumbotron\" align=\"center\">
\t\t\t\t<h1>Oups! La page n'a pas été trouvée</h1>
\t\t\t\t<img src=\"/symfony/404.jpg\" />
\t\t\t\t<h2>Le serveur a retourné le code \"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "\" et le texte \"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".</h2>
\t\t\t\t<p>Peut-être l'url indiquée est incorrect, veuillez vérifier et réessayer. Sinon désolé hein!</p>
\t\t\t</div>
\t\t</div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error404.html.twig", "/home/gab/workspace/Symfony/app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
