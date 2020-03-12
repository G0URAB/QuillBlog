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

/* @app/vendor/symfony/error-handler/Resources/views/traces_text.html.php */
class __TwigTemplate_76ab4732d44620a78d73d2c63e22b887dbdb6fcd3efda80bbc5d8084c62cec5b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/Resources/views/traces_text.html.php"));

        // line 1
        echo "<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-<?= \$index; ?>\" data-toggle-initial=\"<?= 1 === \$index ? 'display' : ''; ?>\">
                <h3 class=\"trace-class\">
                    <?php if (\$numExceptions > 1) { ?>
                        <span class=\"text-muted\">[<?= \$numExceptions - \$index + 1; ?>/<?= \$numExceptions; ?>]</span>
                    <?php } ?>
                    <?= (\$parts = explode('\\\\', \$exception['class'])) ? end(\$parts) : ''; ?>
                    <span class=\"icon icon-close\"><?= \$this->include('assets/images/icon-minus-square-o.svg'); ?></span>
                    <span class=\"icon icon-open\"><?= \$this->include('assets/images/icon-plus-square-o.svg'); ?></span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-<?= \$index; ?>\">
        <tr>
            <td>
                <?php if (\$exception['trace']) { ?>
                <pre class=\"stacktrace\">
<?php
                    echo \$this->escape(\$exception['class']).\":\\n\";
                    if (\$exception['message']) {
                        echo \$this->escape(\$exception['message']).\"\\n\";
                    }

                    foreach (\$exception['trace'] as \$trace) {
                        echo \"\\n  \";
                        if (\$trace['function']) {
                            echo \$this->escape('at '.\$trace['class'].\$trace['type'].\$trace['function']).'('.(isset(\$trace['args']) ? \$this->formatArgsAsText(\$trace['args']) : '').')';
                        }
                        if (\$trace['file'] && \$trace['line']) {
                            echo(\$trace['function'] ? \"\\n     (\" : 'at ').strtr(strip_tags(\$this->formatFile(\$trace['file'], \$trace['line'])), [' at line '.\$trace['line'] => '']).':'.\$trace['line'].(\$trace['function'] ? ')' : '');
                        }
                    }
?>
                </pre>
                <?php } ?>
            </td>
        </tr>
    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/Resources/views/traces_text.html.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-<?= \$index; ?>\" data-toggle-initial=\"<?= 1 === \$index ? 'display' : ''; ?>\">
                <h3 class=\"trace-class\">
                    <?php if (\$numExceptions > 1) { ?>
                        <span class=\"text-muted\">[<?= \$numExceptions - \$index + 1; ?>/<?= \$numExceptions; ?>]</span>
                    <?php } ?>
                    <?= (\$parts = explode('\\\\', \$exception['class'])) ? end(\$parts) : ''; ?>
                    <span class=\"icon icon-close\"><?= \$this->include('assets/images/icon-minus-square-o.svg'); ?></span>
                    <span class=\"icon icon-open\"><?= \$this->include('assets/images/icon-plus-square-o.svg'); ?></span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-<?= \$index; ?>\">
        <tr>
            <td>
                <?php if (\$exception['trace']) { ?>
                <pre class=\"stacktrace\">
<?php
                    echo \$this->escape(\$exception['class']).\":\\n\";
                    if (\$exception['message']) {
                        echo \$this->escape(\$exception['message']).\"\\n\";
                    }

                    foreach (\$exception['trace'] as \$trace) {
                        echo \"\\n  \";
                        if (\$trace['function']) {
                            echo \$this->escape('at '.\$trace['class'].\$trace['type'].\$trace['function']).'('.(isset(\$trace['args']) ? \$this->formatArgsAsText(\$trace['args']) : '').')';
                        }
                        if (\$trace['file'] && \$trace['line']) {
                            echo(\$trace['function'] ? \"\\n     (\" : 'at ').strtr(strip_tags(\$this->formatFile(\$trace['file'], \$trace['line'])), [' at line '.\$trace['line'] => '']).':'.\$trace['line'].(\$trace['function'] ? ')' : '');
                        }
                    }
?>
                </pre>
                <?php } ?>
            </td>
        </tr>
    </tbody>
</table>
", "@app/vendor/symfony/error-handler/Resources/views/traces_text.html.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\Resources\\views\\traces_text.html.php");
    }
}
