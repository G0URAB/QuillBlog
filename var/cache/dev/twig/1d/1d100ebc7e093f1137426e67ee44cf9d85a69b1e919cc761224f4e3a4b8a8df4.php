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

/* @app/vendor/symfony/error-handler/Resources/views/logs.html.php */
class __TwigTemplate_db34cfc934d9e224cbbed4e41cc62cfcc8568abaf9a5555a7629f4052fb2ecd4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/Resources/views/logs.html.php"));

        // line 1
        echo "<table class=\"logs\" data-filter-level=\"Emergency,Alert,Critical,Error,Warning,Notice,Info,Debug\" data-filters>
<?php \$channelIsDefined = isset(\$logs[0]['channel']); ?>
    <thead>
        <tr>
            <th data-filter=\"level\">Level</th>
            <?php if (\$channelIsDefined) { ?><th data-filter=\"channel\">Channel</th><?php } ?>
            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    <?php
    foreach (\$logs as \$log) {
        if (\$log['priority'] >= 400) {
            \$status = 'error';
        } elseif (\$log['priority'] >= 300) {
            \$status = 'warning';
        } else {
            \$severity = 0;
            if ((\$exception = \$log['context']['exception'] ?? null) instanceof \\ErrorException) {
                \$severity = \$exception->getSeverity();
            }
            \$status = E_DEPRECATED === \$severity || E_USER_DEPRECATED === \$severity ? 'warning' : 'normal';
        } ?>
        <tr class=\"status-<?= \$status; ?>\" data-filter-level=\"<?= strtolower(\$this->escape(\$log['priorityName'])); ?>\"<?php if (\$channelIsDefined) { ?> data-filter-channel=\"<?= \$this->escape(\$log['channel']); ?>\"<?php } ?>>
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\"><?= \$this->escape(\$log['priorityName']); ?></span>
                <span class=\"text-muted newline\"><?= date('H:i:s', \$log['timestamp']); ?></span>
            </td>
            <?php if (\$channelIsDefined) { ?>
            <td class=\"text-small text-bold nowrap\">
                <?= \$this->escape(\$log['channel']); ?>
            </td>
            <?php } ?>
            <td>
                <?= \$this->formatLogMessage(\$log['message'], \$log['context']); ?>
                <?php if (\$log['context']) { ?>
                <pre class=\"text-muted prewrap m-t-5\"><?= json_encode(\$log['context'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></pre>
                <?php } ?>
            </td>
        </tr>
    <?php
    } ?>
    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/Resources/views/logs.html.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"logs\" data-filter-level=\"Emergency,Alert,Critical,Error,Warning,Notice,Info,Debug\" data-filters>
<?php \$channelIsDefined = isset(\$logs[0]['channel']); ?>
    <thead>
        <tr>
            <th data-filter=\"level\">Level</th>
            <?php if (\$channelIsDefined) { ?><th data-filter=\"channel\">Channel</th><?php } ?>
            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    <?php
    foreach (\$logs as \$log) {
        if (\$log['priority'] >= 400) {
            \$status = 'error';
        } elseif (\$log['priority'] >= 300) {
            \$status = 'warning';
        } else {
            \$severity = 0;
            if ((\$exception = \$log['context']['exception'] ?? null) instanceof \\ErrorException) {
                \$severity = \$exception->getSeverity();
            }
            \$status = E_DEPRECATED === \$severity || E_USER_DEPRECATED === \$severity ? 'warning' : 'normal';
        } ?>
        <tr class=\"status-<?= \$status; ?>\" data-filter-level=\"<?= strtolower(\$this->escape(\$log['priorityName'])); ?>\"<?php if (\$channelIsDefined) { ?> data-filter-channel=\"<?= \$this->escape(\$log['channel']); ?>\"<?php } ?>>
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\"><?= \$this->escape(\$log['priorityName']); ?></span>
                <span class=\"text-muted newline\"><?= date('H:i:s', \$log['timestamp']); ?></span>
            </td>
            <?php if (\$channelIsDefined) { ?>
            <td class=\"text-small text-bold nowrap\">
                <?= \$this->escape(\$log['channel']); ?>
            </td>
            <?php } ?>
            <td>
                <?= \$this->formatLogMessage(\$log['message'], \$log['context']); ?>
                <?php if (\$log['context']) { ?>
                <pre class=\"text-muted prewrap m-t-5\"><?= json_encode(\$log['context'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></pre>
                <?php } ?>
            </td>
        </tr>
    <?php
    } ?>
    </tbody>
</table>
", "@app/vendor/symfony/error-handler/Resources/views/logs.html.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\Resources\\views\\logs.html.php");
    }
}
