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

/* @app/vendor/symfony/error-handler/Resources/views/trace.html.php */
class __TwigTemplate_2d45a8dcd67697d613d09de86b07555300d4a566d7e72d3c6d71cf91d4fe6166 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/Resources/views/trace.html.php"));

        // line 1
        echo "<div class=\"trace-line-header break-long-words <?= \$trace['file'] ? 'sf-toggle' : ''; ?>\" data-toggle-selector=\"#trace-html-<?= \$prefix; ?>-<?= \$i; ?>\" data-toggle-initial=\"<?= 'expanded' === \$style ? 'display' : ''; ?>\">
    <?php if (\$trace['file']) { ?>
        <span class=\"icon icon-close\"><?= \$this->include('assets/images/icon-minus-square.svg'); ?></span>
        <span class=\"icon icon-open\"><?= \$this->include('assets/images/icon-plus-square.svg'); ?></span>
    <?php } ?>

    <?php if ('compact' !== \$style && \$trace['function']) { ?>
        <span class=\"trace-class\"><?= \$this->abbrClass(\$trace['class']); ?></span><?php if (\$trace['type']) { ?><span class=\"trace-type\"><?= \$trace['type']; ?></span><?php } ?><span class=\"trace-method\"><?= \$trace['function']; ?></span><?php if (isset(\$trace['args'])) { ?><span class=\"trace-arguments\">(<?= \$this->formatArgs(\$trace['args']); ?>)</span><?php } ?>
    <?php } ?>

    <?php if (\$trace['file']) { ?>
        <?php
        \$lineNumber = \$trace['line'] ?: 1;
        \$fileLink = \$this->getFileLink(\$trace['file'], \$lineNumber);
        \$filePath = strtr(strip_tags(\$this->formatFile(\$trace['file'], \$lineNumber)), [' at line '.\$lineNumber => '']);
        \$filePathParts = explode(DIRECTORY_SEPARATOR, \$filePath);
        ?>
        <span class=\"block trace-file-path\">
            in
            <a href=\"<?= \$fileLink; ?>\">
                <?= implode(\\DIRECTORY_SEPARATOR, array_slice(\$filePathParts, 0, -1)).\\DIRECTORY_SEPARATOR; ?><strong><?= end(\$filePathParts); ?></strong>
            </a>
            <?php if ('compact' === \$style && \$trace['function']) { ?>
                <span class=\"trace-type\"><?= \$trace['type']; ?></span>
                <span class=\"trace-method\"><?= \$trace['function']; ?></span>
            <?php } ?>
            (line <?= \$lineNumber; ?>)
        </span>
    <?php } ?>
</div>
<?php if (\$trace['file']) { ?>
    <div id=\"trace-html-<?= \$prefix.'-'.\$i; ?>\" class=\"trace-code sf-toggle-content\">
        <?= strtr(\$this->fileExcerpt(\$trace['file'], \$trace['line'], 5), [
            '#DD0000' => 'var(--highlight-string)',
            '#007700' => 'var(--highlight-keyword)',
            '#0000BB' => 'var(--highlight-default)',
            '#FF8000' => 'var(--highlight-comment)',
        ]); ?>
    </div>
<?php } ?>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/Resources/views/trace.html.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"trace-line-header break-long-words <?= \$trace['file'] ? 'sf-toggle' : ''; ?>\" data-toggle-selector=\"#trace-html-<?= \$prefix; ?>-<?= \$i; ?>\" data-toggle-initial=\"<?= 'expanded' === \$style ? 'display' : ''; ?>\">
    <?php if (\$trace['file']) { ?>
        <span class=\"icon icon-close\"><?= \$this->include('assets/images/icon-minus-square.svg'); ?></span>
        <span class=\"icon icon-open\"><?= \$this->include('assets/images/icon-plus-square.svg'); ?></span>
    <?php } ?>

    <?php if ('compact' !== \$style && \$trace['function']) { ?>
        <span class=\"trace-class\"><?= \$this->abbrClass(\$trace['class']); ?></span><?php if (\$trace['type']) { ?><span class=\"trace-type\"><?= \$trace['type']; ?></span><?php } ?><span class=\"trace-method\"><?= \$trace['function']; ?></span><?php if (isset(\$trace['args'])) { ?><span class=\"trace-arguments\">(<?= \$this->formatArgs(\$trace['args']); ?>)</span><?php } ?>
    <?php } ?>

    <?php if (\$trace['file']) { ?>
        <?php
        \$lineNumber = \$trace['line'] ?: 1;
        \$fileLink = \$this->getFileLink(\$trace['file'], \$lineNumber);
        \$filePath = strtr(strip_tags(\$this->formatFile(\$trace['file'], \$lineNumber)), [' at line '.\$lineNumber => '']);
        \$filePathParts = explode(DIRECTORY_SEPARATOR, \$filePath);
        ?>
        <span class=\"block trace-file-path\">
            in
            <a href=\"<?= \$fileLink; ?>\">
                <?= implode(\\DIRECTORY_SEPARATOR, array_slice(\$filePathParts, 0, -1)).\\DIRECTORY_SEPARATOR; ?><strong><?= end(\$filePathParts); ?></strong>
            </a>
            <?php if ('compact' === \$style && \$trace['function']) { ?>
                <span class=\"trace-type\"><?= \$trace['type']; ?></span>
                <span class=\"trace-method\"><?= \$trace['function']; ?></span>
            <?php } ?>
            (line <?= \$lineNumber; ?>)
        </span>
    <?php } ?>
</div>
<?php if (\$trace['file']) { ?>
    <div id=\"trace-html-<?= \$prefix.'-'.\$i; ?>\" class=\"trace-code sf-toggle-content\">
        <?= strtr(\$this->fileExcerpt(\$trace['file'], \$trace['line'], 5), [
            '#DD0000' => 'var(--highlight-string)',
            '#007700' => 'var(--highlight-keyword)',
            '#0000BB' => 'var(--highlight-default)',
            '#FF8000' => 'var(--highlight-comment)',
        ]); ?>
    </div>
<?php } ?>
", "@app/vendor/symfony/error-handler/Resources/views/trace.html.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\Resources\\views\\trace.html.php");
    }
}
