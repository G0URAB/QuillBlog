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

/* @app/vendor/symfony/dependency-injection/Exception/AutowiringFailedException.php */
class __TwigTemplate_b148590f2f36010ddc60c465df6ba56f45c57a0ecb74931f4822165d3edcb66d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Exception/AutowiringFailedException.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Exception;

/**
 * Thrown when a definition cannot be autowired.
 */
class AutowiringFailedException extends RuntimeException
{
    private \$serviceId;
    private \$messageCallback;

    public function __construct(string \$serviceId, \$message = '', int \$code = 0, \\Throwable \$previous = null)
    {
        \$this->serviceId = \$serviceId;

        if (\$message instanceof \\Closure && \\function_exists('xdebug_is_enabled') && xdebug_is_enabled()) {
            \$message = \$message();
        }

        if (!\$message instanceof \\Closure) {
            parent::__construct(\$message, \$code, \$previous);

            return;
        }

        \$this->messageCallback = \$message;
        parent::__construct('', \$code, \$previous);

        \$this->message = new class(\$this->message, \$this->messageCallback) {
            private \$message;
            private \$messageCallback;

            public function __construct(&\$message, &\$messageCallback)
            {
                \$this->message = &\$message;
                \$this->messageCallback = &\$messageCallback;
            }

            public function __toString(): string
            {
                \$messageCallback = \$this->messageCallback;
                \$this->messageCallback = null;

                try {
                    return \$this->message = \$messageCallback();
                } catch (\\Throwable \$e) {
                    return \$this->message = \$e->getMessage();
                }
            }
        };
    }

    public function getMessageCallback(): ?\\Closure
    {
        return \$this->messageCallback;
    }

    public function getServiceId()
    {
        return \$this->serviceId;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Exception/AutowiringFailedException.php";
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

namespace Symfony\\Component\\DependencyInjection\\Exception;

/**
 * Thrown when a definition cannot be autowired.
 */
class AutowiringFailedException extends RuntimeException
{
    private \$serviceId;
    private \$messageCallback;

    public function __construct(string \$serviceId, \$message = '', int \$code = 0, \\Throwable \$previous = null)
    {
        \$this->serviceId = \$serviceId;

        if (\$message instanceof \\Closure && \\function_exists('xdebug_is_enabled') && xdebug_is_enabled()) {
            \$message = \$message();
        }

        if (!\$message instanceof \\Closure) {
            parent::__construct(\$message, \$code, \$previous);

            return;
        }

        \$this->messageCallback = \$message;
        parent::__construct('', \$code, \$previous);

        \$this->message = new class(\$this->message, \$this->messageCallback) {
            private \$message;
            private \$messageCallback;

            public function __construct(&\$message, &\$messageCallback)
            {
                \$this->message = &\$message;
                \$this->messageCallback = &\$messageCallback;
            }

            public function __toString(): string
            {
                \$messageCallback = \$this->messageCallback;
                \$this->messageCallback = null;

                try {
                    return \$this->message = \$messageCallback();
                } catch (\\Throwable \$e) {
                    return \$this->message = \$e->getMessage();
                }
            }
        };
    }

    public function getMessageCallback(): ?\\Closure
    {
        return \$this->messageCallback;
    }

    public function getServiceId()
    {
        return \$this->serviceId;
    }
}
", "@app/vendor/symfony/dependency-injection/Exception/AutowiringFailedException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Exception\\AutowiringFailedException.php");
    }
}
