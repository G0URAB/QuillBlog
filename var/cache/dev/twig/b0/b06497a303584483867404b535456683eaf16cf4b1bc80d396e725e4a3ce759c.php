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

/* @app/vendor/symfony/error-handler/ErrorRenderer/CliErrorRenderer.php */
class __TwigTemplate_b6a2a1fb5445c7991dd1f4bf133a206fca986dab5e19f2491a80cf91a87a5bb9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/ErrorRenderer/CliErrorRenderer.php"));

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

namespace Symfony\\Component\\ErrorHandler\\ErrorRenderer;

use Symfony\\Component\\ErrorHandler\\Exception\\FlattenException;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CliErrorRenderer implements ErrorRendererInterface
{
    /**
     * {@inheritdoc}
     */
    public function render(\\Throwable \$exception): FlattenException
    {
        \$cloner = new VarCloner();
        \$dumper = new class() extends CliDumper {
            protected function supportsColors(): bool
            {
                \$outputStream = \$this->outputStream;
                \$this->outputStream = fopen('php://stdout', 'w');

                try {
                    return parent::supportsColors();
                } finally {
                    \$this->outputStream = \$outputStream;
                }
            }
        };

        return FlattenException::createFromThrowable(\$exception)
            ->setAsString(\$dumper->dump(\$cloner->cloneVar(\$exception), true));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/ErrorRenderer/CliErrorRenderer.php";
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

namespace Symfony\\Component\\ErrorHandler\\ErrorRenderer;

use Symfony\\Component\\ErrorHandler\\Exception\\FlattenException;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CliErrorRenderer implements ErrorRendererInterface
{
    /**
     * {@inheritdoc}
     */
    public function render(\\Throwable \$exception): FlattenException
    {
        \$cloner = new VarCloner();
        \$dumper = new class() extends CliDumper {
            protected function supportsColors(): bool
            {
                \$outputStream = \$this->outputStream;
                \$this->outputStream = fopen('php://stdout', 'w');

                try {
                    return parent::supportsColors();
                } finally {
                    \$this->outputStream = \$outputStream;
                }
            }
        };

        return FlattenException::createFromThrowable(\$exception)
            ->setAsString(\$dumper->dump(\$cloner->cloneVar(\$exception), true));
    }
}
", "@app/vendor/symfony/error-handler/ErrorRenderer/CliErrorRenderer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\ErrorRenderer\\CliErrorRenderer.php");
    }
}
