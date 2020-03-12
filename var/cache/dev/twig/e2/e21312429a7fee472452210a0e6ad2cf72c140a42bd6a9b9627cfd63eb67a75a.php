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

/* @app/vendor/symfony/error-handler/Resources/views/exception_full.html.php */
class __TwigTemplate_89006fa44d9f42a7602f820aeb86a428f831aaf7d73a90a3b63eb697e2b44ea1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/Resources/views/exception_full.html.php"));

        // line 1
        echo "<!-- <?= \$_message = sprintf('%s (%d %s)', \$exceptionMessage, \$statusCode, \$statusText); ?> -->
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"<?= \$this->charset; ?>\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title><?= \$_message; ?></title>
        <link rel=\"icon\" type=\"image/png\" href=\"<?= \$this->include('assets/images/favicon.png.base64'); ?>\">
        <style><?= \$this->include('assets/css/exception.css'); ?></style>
        <style><?= \$this->include('assets/css/exception_full.css'); ?></style>
    </head>
    <body>
        <?php if (class_exists('Symfony\\Component\\HttpKernel\\Kernel')) { ?>
            <header>
                <div class=\"container\">
                    <h1 class=\"logo\"><?= \$this->include('assets/images/symfony-logo.svg'); ?> Symfony Exception</h1>

                    <div class=\"help-link\">
                        <a href=\"https://symfony.com/doc/<?= Symfony\\Component\\HttpKernel\\Kernel::VERSION; ?>/index.html\">
                            <span class=\"icon\"><?= \$this->include('assets/images/icon-book.svg'); ?></span>
                            <span class=\"hidden-xs-down\">Symfony</span> Docs
                        </a>
                    </div>

                    <div class=\"help-link\">
                        <a href=\"https://symfony.com/support\">
                            <span class=\"icon\"><?= \$this->include('assets/images/icon-support.svg'); ?></span>
                            <span class=\"hidden-xs-down\">Symfony</span> Support
                        </a>
                    </div>
                </div>
            </header>
        <?php } ?>

        <?= \$this->include('views/exception.html.php', \$context); ?>

        <script>
            <?= \$this->include('assets/js/exception.js'); ?>
        </script>
    </body>
</html>
<!-- <?= \$_message; ?> -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/Resources/views/exception_full.html.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <?= \$_message = sprintf('%s (%d %s)', \$exceptionMessage, \$statusCode, \$statusText); ?> -->
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"<?= \$this->charset; ?>\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title><?= \$_message; ?></title>
        <link rel=\"icon\" type=\"image/png\" href=\"<?= \$this->include('assets/images/favicon.png.base64'); ?>\">
        <style><?= \$this->include('assets/css/exception.css'); ?></style>
        <style><?= \$this->include('assets/css/exception_full.css'); ?></style>
    </head>
    <body>
        <?php if (class_exists('Symfony\\Component\\HttpKernel\\Kernel')) { ?>
            <header>
                <div class=\"container\">
                    <h1 class=\"logo\"><?= \$this->include('assets/images/symfony-logo.svg'); ?> Symfony Exception</h1>

                    <div class=\"help-link\">
                        <a href=\"https://symfony.com/doc/<?= Symfony\\Component\\HttpKernel\\Kernel::VERSION; ?>/index.html\">
                            <span class=\"icon\"><?= \$this->include('assets/images/icon-book.svg'); ?></span>
                            <span class=\"hidden-xs-down\">Symfony</span> Docs
                        </a>
                    </div>

                    <div class=\"help-link\">
                        <a href=\"https://symfony.com/support\">
                            <span class=\"icon\"><?= \$this->include('assets/images/icon-support.svg'); ?></span>
                            <span class=\"hidden-xs-down\">Symfony</span> Support
                        </a>
                    </div>
                </div>
            </header>
        <?php } ?>

        <?= \$this->include('views/exception.html.php', \$context); ?>

        <script>
            <?= \$this->include('assets/js/exception.js'); ?>
        </script>
    </body>
</html>
<!-- <?= \$_message; ?> -->
", "@app/vendor/symfony/error-handler/Resources/views/exception_full.html.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\Resources\\views\\exception_full.html.php");
    }
}
