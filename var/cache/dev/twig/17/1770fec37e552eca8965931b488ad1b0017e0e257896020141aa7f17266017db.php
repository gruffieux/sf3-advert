<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a42b50f8a949563cf19198277bc02a51ea9a8ccf6f08cc1af526e3dfb0e7dc74 extends Twig_Template
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
        $__internal_2e3cb9c40e36e0db0476d72974d61e7b450e6b2f5f4b7d3cd6ec91aea205d610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3cb9c40e36e0db0476d72974d61e7b450e6b2f5f4b7d3cd6ec91aea205d610->enter($__internal_2e3cb9c40e36e0db0476d72974d61e7b450e6b2f5f4b7d3cd6ec91aea205d610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2e3cb9c40e36e0db0476d72974d61e7b450e6b2f5f4b7d3cd6ec91aea205d610->leave($__internal_2e3cb9c40e36e0db0476d72974d61e7b450e6b2f5f4b7d3cd6ec91aea205d610_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
