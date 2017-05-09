<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8c863e7ffc968d51d4cbf96ab9b64049440ed94e667fbcdbf5c64d68a722d570 extends Twig_Template
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
        $__internal_3290a12d2760a96aa3de49fccf66451c12bf989333d34df31d04aafee117f6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3290a12d2760a96aa3de49fccf66451c12bf989333d34df31d04aafee117f6c6->enter($__internal_3290a12d2760a96aa3de49fccf66451c12bf989333d34df31d04aafee117f6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3290a12d2760a96aa3de49fccf66451c12bf989333d34df31d04aafee117f6c6->leave($__internal_3290a12d2760a96aa3de49fccf66451c12bf989333d34df31d04aafee117f6c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
