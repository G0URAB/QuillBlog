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

/* @app/vendor/symfony/error-handler/Resources/views/exception.html.php */
class __TwigTemplate_f596fd365398d3b683ae18f5125efa86002b780e2e811c827033269acbbc16f6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/Resources/views/exception.html.php"));

        // line 1
        echo "<div class=\"exception-summary <?= !\$exceptionMessage ? 'exception-without-message' : ''; ?>\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                <?php foreach (array_reverse(\$exception->getAllPrevious(), true) as \$index => \$previousException) { ?>
                    <a href=\"#trace-box-<?= \$index + 2; ?>\"><?= \$this->abbrClass(\$previousException->getClass()); ?></a>
                    <span class=\"icon\"><?= \$this->include('assets/images/chevron-right.svg'); ?></span>
                <?php } ?>
                <a href=\"#trace-box-1\"><?= \$this->abbrClass(\$exception->getClass()); ?></a>
            </h2>
            <h2 class=\"exception-http\">
                HTTP <?= \$statusCode; ?> <small><?= \$statusText; ?></small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message<?= mb_strlen(\$exceptionMessage) > 180 ? ' long' : ''; ?>\"><?= \$this->formatFileFromText(nl2br(\$exceptionMessage)); ?></h1>

            <div class=\"exception-illustration hidden-xs-down\">
                <?= \$this->include('assets/images/symfony-ghost.svg.php'); ?>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <?php
            \$exceptionAsArray = \$exception->toArray();
            \$exceptionWithUserCode = [];
            \$exceptionAsArrayCount = count(\$exceptionAsArray);
            \$last = count(\$exceptionAsArray) - 1;
            foreach (\$exceptionAsArray as \$i => \$e) {
                foreach (\$e['trace'] as \$trace) {
                    if (\$trace['file'] && false === mb_strpos(\$trace['file'], '/vendor/') && false === mb_strpos(\$trace['file'], '/var/cache/') && \$i < \$last) {
                        \$exceptionWithUserCode[] = \$i;
                    }
                }
            }
            ?>
            <h3 class=\"tab-title\">
                <?php if (\$exceptionAsArrayCount > 1) { ?>
                    Exceptions <span class=\"badge\"><?= \$exceptionAsArrayCount; ?></span>
                <?php } else { ?>
                    Exception
                <?php } ?>
            </h3>

            <div class=\"tab-content\">
                <?php
                foreach (\$exceptionAsArray as \$i => \$e) {
                    echo \$this->include('views/traces.html.php', [
                        'exception' => \$e,
                        'index' => \$i + 1,
                        'expand' => in_array(\$i, \$exceptionWithUserCode, true) || ([] === \$exceptionWithUserCode && 0 === \$i),
                    ]);
                }
                ?>
            </div>
        </div>

        <?php if (\$logger) { ?>
        <div class=\"tab <?= !\$logger->getLogs() ? 'disabled' : ''; ?>\">
            <h3 class=\"tab-title\">
                Logs
                <?php if (\$logger->countErrors()) { ?><span class=\"badge status-error\"><?= \$logger->countErrors(); ?></span><?php } ?>
            </h3>

            <div class=\"tab-content\">
                <?php if (\$logger->getLogs()) { ?>
                    <?= \$this->include('views/logs.html.php', ['logs' => \$logger->getLogs()]); ?>
                <?php } else { ?>
                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                <?php if (\$exceptionAsArrayCount > 1) { ?>
                    Stack Traces <span class=\"badge\"><?= \$exceptionAsArrayCount; ?></span>
                <?php } else { ?>
                    Stack Trace
                <?php } ?>
            </h3>

            <div class=\"tab-content\">
                <?php
                foreach (\$exceptionAsArray as \$i => \$e) {
                    echo \$this->include('views/traces_text.html.php', [
                        'exception' => \$e,
                        'index' => \$i + 1,
                        'numExceptions' => \$exceptionAsArrayCount,
                    ]);
                }
                ?>
            </div>
        </div>

        <?php if (\$currentContent) { ?>
        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                <?= \$currentContent; ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/Resources/views/exception.html.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"exception-summary <?= !\$exceptionMessage ? 'exception-without-message' : ''; ?>\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                <?php foreach (array_reverse(\$exception->getAllPrevious(), true) as \$index => \$previousException) { ?>
                    <a href=\"#trace-box-<?= \$index + 2; ?>\"><?= \$this->abbrClass(\$previousException->getClass()); ?></a>
                    <span class=\"icon\"><?= \$this->include('assets/images/chevron-right.svg'); ?></span>
                <?php } ?>
                <a href=\"#trace-box-1\"><?= \$this->abbrClass(\$exception->getClass()); ?></a>
            </h2>
            <h2 class=\"exception-http\">
                HTTP <?= \$statusCode; ?> <small><?= \$statusText; ?></small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message<?= mb_strlen(\$exceptionMessage) > 180 ? ' long' : ''; ?>\"><?= \$this->formatFileFromText(nl2br(\$exceptionMessage)); ?></h1>

            <div class=\"exception-illustration hidden-xs-down\">
                <?= \$this->include('assets/images/symfony-ghost.svg.php'); ?>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <?php
            \$exceptionAsArray = \$exception->toArray();
            \$exceptionWithUserCode = [];
            \$exceptionAsArrayCount = count(\$exceptionAsArray);
            \$last = count(\$exceptionAsArray) - 1;
            foreach (\$exceptionAsArray as \$i => \$e) {
                foreach (\$e['trace'] as \$trace) {
                    if (\$trace['file'] && false === mb_strpos(\$trace['file'], '/vendor/') && false === mb_strpos(\$trace['file'], '/var/cache/') && \$i < \$last) {
                        \$exceptionWithUserCode[] = \$i;
                    }
                }
            }
            ?>
            <h3 class=\"tab-title\">
                <?php if (\$exceptionAsArrayCount > 1) { ?>
                    Exceptions <span class=\"badge\"><?= \$exceptionAsArrayCount; ?></span>
                <?php } else { ?>
                    Exception
                <?php } ?>
            </h3>

            <div class=\"tab-content\">
                <?php
                foreach (\$exceptionAsArray as \$i => \$e) {
                    echo \$this->include('views/traces.html.php', [
                        'exception' => \$e,
                        'index' => \$i + 1,
                        'expand' => in_array(\$i, \$exceptionWithUserCode, true) || ([] === \$exceptionWithUserCode && 0 === \$i),
                    ]);
                }
                ?>
            </div>
        </div>

        <?php if (\$logger) { ?>
        <div class=\"tab <?= !\$logger->getLogs() ? 'disabled' : ''; ?>\">
            <h3 class=\"tab-title\">
                Logs
                <?php if (\$logger->countErrors()) { ?><span class=\"badge status-error\"><?= \$logger->countErrors(); ?></span><?php } ?>
            </h3>

            <div class=\"tab-content\">
                <?php if (\$logger->getLogs()) { ?>
                    <?= \$this->include('views/logs.html.php', ['logs' => \$logger->getLogs()]); ?>
                <?php } else { ?>
                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                <?php if (\$exceptionAsArrayCount > 1) { ?>
                    Stack Traces <span class=\"badge\"><?= \$exceptionAsArrayCount; ?></span>
                <?php } else { ?>
                    Stack Trace
                <?php } ?>
            </h3>

            <div class=\"tab-content\">
                <?php
                foreach (\$exceptionAsArray as \$i => \$e) {
                    echo \$this->include('views/traces_text.html.php', [
                        'exception' => \$e,
                        'index' => \$i + 1,
                        'numExceptions' => \$exceptionAsArrayCount,
                    ]);
                }
                ?>
            </div>
        </div>

        <?php if (\$currentContent) { ?>
        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                <?= \$currentContent; ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
", "@app/vendor/symfony/error-handler/Resources/views/exception.html.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\Resources\\views\\exception.html.php");
    }
}
