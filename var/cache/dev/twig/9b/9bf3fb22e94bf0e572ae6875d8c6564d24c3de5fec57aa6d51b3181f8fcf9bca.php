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

/* @app/vendor/symfony/error-handler/ThrowableUtils.php */
class __TwigTemplate_3d12d6443de193ff48c9007365373be8bae50da0a409f93df915ff41e1b8d466 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/ThrowableUtils.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\ErrorHandler;

/**
 * @internal
 */
class ThrowableUtils
{
    public static function getSeverity(\\Throwable \$throwable): int
    {
        if (\$throwable instanceof \\ErrorException) {
            return \$throwable->getSeverity();
        }

        if (\$throwable instanceof \\ParseError) {
            return E_PARSE;
        }

        if (\$throwable instanceof \\TypeError) {
            return E_RECOVERABLE_ERROR;
        }

        return E_ERROR;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/ThrowableUtils.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\ErrorHandler;

/**
 * @internal
 */
class ThrowableUtils
{
    public static function getSeverity(\\Throwable \$throwable): int
    {
        if (\$throwable instanceof \\ErrorException) {
            return \$throwable->getSeverity();
        }

        if (\$throwable instanceof \\ParseError) {
            return E_PARSE;
        }

        if (\$throwable instanceof \\TypeError) {
            return E_RECOVERABLE_ERROR;
        }

        return E_ERROR;
    }
}
", "@app/vendor/symfony/error-handler/ThrowableUtils.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\ThrowableUtils.php");
    }
}
