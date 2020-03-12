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

/* @app/vendor/symfony/error-handler/Error/FatalError.php */
class __TwigTemplate_0cf3ffffeb2454deb62b3130973e983a11d0c8c7802b533abd5230822256983d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/error-handler/Error/FatalError.php"));

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

namespace Symfony\\Component\\ErrorHandler\\Error;

class FatalError extends \\Error
{
    private \$error;

    /**
     * {@inheritdoc}
     *
     * @param array \$error An array as returned by error_get_last()
     */
    public function __construct(string \$message, int \$code, array \$error, int \$traceOffset = null, bool \$traceArgs = true, array \$trace = null)
    {
        parent::__construct(\$message, \$code);

        \$this->error = \$error;

        if (null !== \$trace) {
            if (!\$traceArgs) {
                foreach (\$trace as &\$frame) {
                    unset(\$frame['args'], \$frame['this'], \$frame);
                }
            }
        } elseif (null !== \$traceOffset) {
            if (\\function_exists('xdebug_get_function_stack')) {
                \$trace = xdebug_get_function_stack();
                if (0 < \$traceOffset) {
                    array_splice(\$trace, -\$traceOffset);
                }

                foreach (\$trace as &\$frame) {
                    if (!isset(\$frame['type'])) {
                        // XDebug pre 2.1.1 doesn't currently set the call type key http://bugs.xdebug.org/view.php?id=695
                        if (isset(\$frame['class'])) {
                            \$frame['type'] = '::';
                        }
                    } elseif ('dynamic' === \$frame['type']) {
                        \$frame['type'] = '->';
                    } elseif ('static' === \$frame['type']) {
                        \$frame['type'] = '::';
                    }

                    // XDebug also has a different name for the parameters array
                    if (!\$traceArgs) {
                        unset(\$frame['params'], \$frame['args']);
                    } elseif (isset(\$frame['params']) && !isset(\$frame['args'])) {
                        \$frame['args'] = \$frame['params'];
                        unset(\$frame['params']);
                    }
                }

                unset(\$frame);
                \$trace = array_reverse(\$trace);
            } else {
                \$trace = [];
            }
        }

        foreach ([
            'file' => \$error['file'],
            'line' => \$error['line'],
            'trace' => \$trace,
        ] as \$property => \$value) {
            \$refl = new \\ReflectionProperty(\\Error::class, \$property);
            \$refl->setAccessible(true);
            \$refl->setValue(\$this, \$value);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getError(): array
    {
        return \$this->error;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/error-handler/Error/FatalError.php";
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

namespace Symfony\\Component\\ErrorHandler\\Error;

class FatalError extends \\Error
{
    private \$error;

    /**
     * {@inheritdoc}
     *
     * @param array \$error An array as returned by error_get_last()
     */
    public function __construct(string \$message, int \$code, array \$error, int \$traceOffset = null, bool \$traceArgs = true, array \$trace = null)
    {
        parent::__construct(\$message, \$code);

        \$this->error = \$error;

        if (null !== \$trace) {
            if (!\$traceArgs) {
                foreach (\$trace as &\$frame) {
                    unset(\$frame['args'], \$frame['this'], \$frame);
                }
            }
        } elseif (null !== \$traceOffset) {
            if (\\function_exists('xdebug_get_function_stack')) {
                \$trace = xdebug_get_function_stack();
                if (0 < \$traceOffset) {
                    array_splice(\$trace, -\$traceOffset);
                }

                foreach (\$trace as &\$frame) {
                    if (!isset(\$frame['type'])) {
                        // XDebug pre 2.1.1 doesn't currently set the call type key http://bugs.xdebug.org/view.php?id=695
                        if (isset(\$frame['class'])) {
                            \$frame['type'] = '::';
                        }
                    } elseif ('dynamic' === \$frame['type']) {
                        \$frame['type'] = '->';
                    } elseif ('static' === \$frame['type']) {
                        \$frame['type'] = '::';
                    }

                    // XDebug also has a different name for the parameters array
                    if (!\$traceArgs) {
                        unset(\$frame['params'], \$frame['args']);
                    } elseif (isset(\$frame['params']) && !isset(\$frame['args'])) {
                        \$frame['args'] = \$frame['params'];
                        unset(\$frame['params']);
                    }
                }

                unset(\$frame);
                \$trace = array_reverse(\$trace);
            } else {
                \$trace = [];
            }
        }

        foreach ([
            'file' => \$error['file'],
            'line' => \$error['line'],
            'trace' => \$trace,
        ] as \$property => \$value) {
            \$refl = new \\ReflectionProperty(\\Error::class, \$property);
            \$refl->setAccessible(true);
            \$refl->setValue(\$this, \$value);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getError(): array
    {
        return \$this->error;
    }
}
", "@app/vendor/symfony/error-handler/Error/FatalError.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\error-handler\\Error\\FatalError.php");
    }
}
