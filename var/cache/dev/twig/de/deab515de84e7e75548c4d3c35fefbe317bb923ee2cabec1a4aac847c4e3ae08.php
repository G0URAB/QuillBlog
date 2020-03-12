<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @app/var/cache/dev/twig/d2/d28071de241bd3f26ffc6cb997eb8aaf719b7c2cfb58206957c43ea7fb300efe.php */
class __TwigTemplate_c8e4798ed560df90326edeeae8c0b2c156ce88bdaf78ba753e759f2449bd4717 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/var/cache/dev/twig/d2/d28071de241bd3f26ffc6cb997eb8aaf719b7c2cfb58206957c43ea7fb300efe.php"));

        // line 1
        echo "<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* @Framework/Form/week_widget.html.php */
class __TwigTemplate_7d7743b7ddb2fc9d6ac8f478c13f50d323eb900de69ccbd1ae7f3c6111eec3e5 extends Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/week_widget.html.php\"));

        // line 1
        echo \"<?php if (\\\$widget == 'single_text'): ?>
    <?php echo \\\$view['form']->block(\\\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \\\$vars = \\\$widget == 'text' ? ['attr' => ['size' => 1]] : [] ?>
    <div <?php echo \\\$view['form']->block(\\\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \\\$view['form']->widget(\\\$form['year'], \\\$vars);
            echo '-';
            echo \\\$view['form']->widget(\\\$form['week'], \\\$vars);
        ?>
    </div>
<?php endif ?>
\";
        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/week_widget.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php if (\\\$widget == 'single_text'): ?>
    <?php echo \\\$view['form']->block(\\\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \\\$vars = \\\$widget == 'text' ? ['attr' => ['size' => 1]] : [] ?>
    <div <?php echo \\\$view['form']->block(\\\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \\\$view['form']->widget(\\\$form['year'], \\\$vars);
            echo '-';
            echo \\\$view['form']->widget(\\\$form['week'], \\\$vars);
        ?>
    </div>
<?php endif ?>
\", \"@Framework/Form/week_widget.html.php\", \"C:\\\\wamp64\\\\www\\\\QuillBlog\\\\vendor\\\\symfony\\\\framework-bundle\\\\Resources\\\\views\\\\Form\\\\week_widget.html.php\");
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/var/cache/dev/twig/d2/d28071de241bd3f26ffc6cb997eb8aaf719b7c2cfb58206957c43ea7fb300efe.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* @Framework/Form/week_widget.html.php */
class __TwigTemplate_7d7743b7ddb2fc9d6ac8f478c13f50d323eb900de69ccbd1ae7f3c6111eec3e5 extends Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/week_widget.html.php\"));

        // line 1
        echo \"<?php if (\\\$widget == 'single_text'): ?>
    <?php echo \\\$view['form']->block(\\\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \\\$vars = \\\$widget == 'text' ? ['attr' => ['size' => 1]] : [] ?>
    <div <?php echo \\\$view['form']->block(\\\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \\\$view['form']->widget(\\\$form['year'], \\\$vars);
            echo '-';
            echo \\\$view['form']->widget(\\\$form['week'], \\\$vars);
        ?>
    </div>
<?php endif ?>
\";
        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/week_widget.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php if (\\\$widget == 'single_text'): ?>
    <?php echo \\\$view['form']->block(\\\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \\\$vars = \\\$widget == 'text' ? ['attr' => ['size' => 1]] : [] ?>
    <div <?php echo \\\$view['form']->block(\\\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \\\$view['form']->widget(\\\$form['year'], \\\$vars);
            echo '-';
            echo \\\$view['form']->widget(\\\$form['week'], \\\$vars);
        ?>
    </div>
<?php endif ?>
\", \"@Framework/Form/week_widget.html.php\", \"C:\\\\wamp64\\\\www\\\\QuillBlog\\\\vendor\\\\symfony\\\\framework-bundle\\\\Resources\\\\views\\\\Form\\\\week_widget.html.php\");
    }
}
", "@app/var/cache/dev/twig/d2/d28071de241bd3f26ffc6cb997eb8aaf719b7c2cfb58206957c43ea7fb300efe.php", "C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev\\twig\\d2\\d28071de241bd3f26ffc6cb997eb8aaf719b7c2cfb58206957c43ea7fb300efe.php");
    }
}
