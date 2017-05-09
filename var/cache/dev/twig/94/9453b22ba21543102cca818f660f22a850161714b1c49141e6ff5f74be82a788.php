<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f2ea993701f63f38cec88bb7b7926b9b423e1cedc1b25c66ac7b4639bce163f8 extends Twig_Template
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
        $__internal_895d86d99c8f67548cd525f20bf8a9dc6bb01ab2f2a2ee7e44513103cf5ec768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895d86d99c8f67548cd525f20bf8a9dc6bb01ab2f2a2ee7e44513103cf5ec768->enter($__internal_895d86d99c8f67548cd525f20bf8a9dc6bb01ab2f2a2ee7e44513103cf5ec768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_895d86d99c8f67548cd525f20bf8a9dc6bb01ab2f2a2ee7e44513103cf5ec768->leave($__internal_895d86d99c8f67548cd525f20bf8a9dc6bb01ab2f2a2ee7e44513103cf5ec768_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
