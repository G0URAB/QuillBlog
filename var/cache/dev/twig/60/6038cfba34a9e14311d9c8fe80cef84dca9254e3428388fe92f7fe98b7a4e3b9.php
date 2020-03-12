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

/* @app/vendor/symfony/error-handler/Resources/views/traces.html.php */
class __TwigTemplate_af28c68629331d1f93df3367e7e277aeb46e9229a2b08adb67163031d451487d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/Resources/views/traces.html.php"));

        // line 1
        echo "<div class=\"trace trace-as-html\" id=\"trace-box-<?= \$index; ?>\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-<?= \$index; ?>\" data-toggle-initial=\"<?= \$expand ? 'display' : ''; ?>\">
                <h3 class=\"trace-class\">
                    <span class=\"icon icon-close\"><?= \$this->include('assets/images/icon-minus-square-o.svg'); ?></span>
                    <span class=\"icon icon-open\"><?= \$this->include('assets/images/icon-plus-square-o.svg'); ?></span>

                    <span class=\"trace-namespace\">
                        <?= implode('\\\\', array_slice(explode('\\\\', \$exception['class']), 0, -1)); ?><?= count(explode('\\\\', \$exception['class'])) > 1 ? '\\\\' : ''; ?>
                    </span>
                    <?= (\$parts = explode('\\\\', \$exception['class'])) ? end(\$parts) : ''; ?>
                </h3>

                <?php if (\$exception['message'] && \$index > 1) { ?>
                    <p class=\"break-long-words trace-message\"><?= \$this->escape(\$exception['message']); ?></p>
                <?php } ?>
            </span>
        </div>

        <div id=\"trace-html-<?= \$index; ?>\" class=\"sf-toggle-content\">
        <?php
        \$isFirstUserCode = true;
        foreach (\$exception['trace'] as \$i => \$trace) {
            \$isVendorTrace = \$trace['file'] && (false !== mb_strpos(\$trace['file'], '/vendor/') || false !== mb_strpos(\$trace['file'], '/var/cache/'));
            \$displayCodeSnippet = \$isFirstUserCode && !\$isVendorTrace;
            if (\$displayCodeSnippet) {
                \$isFirstUserCode = false;
            } ?>
            <div class=\"trace-line <?= \$isVendorTrace ? 'trace-from-vendor' : ''; ?>\">
                <?= \$this->include('views/trace.html.php', [
                    'prefix' => \$index,
                    'i' => \$i,
                    'trace' => \$trace,
                    'style' => \$isVendorTrace ? 'compact' : (\$displayCodeSnippet ? 'expanded' : ''),
                ]); ?>
            </div>
            <?php
        } ?>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/Resources/views/traces.html.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"trace trace-as-html\" id=\"trace-box-<?= \$index; ?>\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-<?= \$index; ?>\" data-toggle-initial=\"<?= \$expand ? 'display' : ''; ?>\">
                <h3 class=\"trace-class\">
                    <span class=\"icon icon-close\"><?= \$this->include('assets/images/icon-minus-square-o.svg'); ?></span>
                    <span class=\"icon icon-open\"><?= \$this->include('assets/images/icon-plus-square-o.svg'); ?></span>

                    <span class=\"trace-namespace\">
                        <?= implode('\\\\', array_slice(explode('\\\\', \$exception['class']), 0, -1)); ?><?= count(explode('\\\\', \$exception['class'])) > 1 ? '\\\\' : ''; ?>
                    </span>
                    <?= (\$parts = explode('\\\\', \$exception['class'])) ? end(\$parts) : ''; ?>
                </h3>

                <?php if (\$exception['message'] && \$index > 1) { ?>
                    <p class=\"break-long-words trace-message\"><?= \$this->escape(\$exception['message']); ?></p>
                <?php } ?>
            </span>
        </div>

        <div id=\"trace-html-<?= \$index; ?>\" class=\"sf-toggle-content\">
        <?php
        \$isFirstUserCode = true;
        foreach (\$exception['trace'] as \$i => \$trace) {
            \$isVendorTrace = \$trace['file'] && (false !== mb_strpos(\$trace['file'], '/vendor/') || false !== mb_strpos(\$trace['file'], '/var/cache/'));
            \$displayCodeSnippet = \$isFirstUserCode && !\$isVendorTrace;
            if (\$displayCodeSnippet) {
                \$isFirstUserCode = false;
            } ?>
            <div class=\"trace-line <?= \$isVendorTrace ? 'trace-from-vendor' : ''; ?>\">
                <?= \$this->include('views/trace.html.php', [
                    'prefix' => \$index,
                    'i' => \$i,
                    'trace' => \$trace,
                    'style' => \$isVendorTrace ? 'compact' : (\$displayCodeSnippet ? 'expanded' : ''),
                ]); ?>
            </div>
            <?php
        } ?>
        </div>
    </div>
</div>
", "@app/vendor/symfony/error-handler/Resources/views/traces.html.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\Resources\\views\\traces.html.php");
    }
}
