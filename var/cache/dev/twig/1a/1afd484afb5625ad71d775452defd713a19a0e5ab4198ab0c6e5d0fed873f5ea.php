<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b7c44cb6e0c5ac6bd055945dc3b570179f7ce4bd94a7b461fe92749ac97365f8 extends Twig_Template
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
        $__internal_bc798e1c10dbfb8a039ad3c17803db6595fd6a60199b98ccd845b2dbf6b9a6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc798e1c10dbfb8a039ad3c17803db6595fd6a60199b98ccd845b2dbf6b9a6cd->enter($__internal_bc798e1c10dbfb8a039ad3c17803db6595fd6a60199b98ccd845b2dbf6b9a6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bc798e1c10dbfb8a039ad3c17803db6595fd6a60199b98ccd845b2dbf6b9a6cd->leave($__internal_bc798e1c10dbfb8a039ad3c17803db6595fd6a60199b98ccd845b2dbf6b9a6cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/gab/workspace/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
