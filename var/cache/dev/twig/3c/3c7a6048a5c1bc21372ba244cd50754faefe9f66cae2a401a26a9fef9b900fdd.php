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

/* @app/vendor/symfony/http-kernel/Exception/ControllerDoesNotReturnResponseException.php */
class __TwigTemplate_47c502e143b90cee4e840c02409a08568a2e0c6cd11f5add523f54400599f644 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Exception/ControllerDoesNotReturnResponseException.php"));

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

namespace Symfony\\Component\\HttpKernel\\Exception;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class ControllerDoesNotReturnResponseException extends \\LogicException
{
    public function __construct(string \$message, callable \$controller, string \$file, int \$line)
    {
        parent::__construct(\$message);

        if (!\$controllerDefinition = \$this->parseControllerDefinition(\$controller)) {
            return;
        }

        \$this->file = \$controllerDefinition['file'];
        \$this->line = \$controllerDefinition['line'];
        \$r = new \\ReflectionProperty(\\Exception::class, 'trace');
        \$r->setAccessible(true);
        \$r->setValue(\$this, array_merge([
            [
                'line' => \$line,
                'file' => \$file,
            ],
        ], \$this->getTrace()));
    }

    private function parseControllerDefinition(callable \$controller): ?array
    {
        if (\\is_string(\$controller) && false !== strpos(\$controller, '::')) {
            \$controller = explode('::', \$controller);
        }

        if (\\is_array(\$controller)) {
            try {
                \$r = new \\ReflectionMethod(\$controller[0], \$controller[1]);

                return [
                    'file' => \$r->getFileName(),
                    'line' => \$r->getEndLine(),
                ];
            } catch (\\ReflectionException \$e) {
                return null;
            }
        }

        if (\$controller instanceof \\Closure) {
            \$r = new \\ReflectionFunction(\$controller);

            return [
                'file' => \$r->getFileName(),
                'line' => \$r->getEndLine(),
            ];
        }

        if (\\is_object(\$controller)) {
            \$r = new \\ReflectionClass(\$controller);

            try {
                \$line = \$r->getMethod('__invoke')->getEndLine();
            } catch (\\ReflectionException \$e) {
                \$line = \$r->getEndLine();
            }

            return [
                'file' => \$r->getFileName(),
                'line' => \$line,
            ];
        }

        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Exception/ControllerDoesNotReturnResponseException.php";
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

namespace Symfony\\Component\\HttpKernel\\Exception;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class ControllerDoesNotReturnResponseException extends \\LogicException
{
    public function __construct(string \$message, callable \$controller, string \$file, int \$line)
    {
        parent::__construct(\$message);

        if (!\$controllerDefinition = \$this->parseControllerDefinition(\$controller)) {
            return;
        }

        \$this->file = \$controllerDefinition['file'];
        \$this->line = \$controllerDefinition['line'];
        \$r = new \\ReflectionProperty(\\Exception::class, 'trace');
        \$r->setAccessible(true);
        \$r->setValue(\$this, array_merge([
            [
                'line' => \$line,
                'file' => \$file,
            ],
        ], \$this->getTrace()));
    }

    private function parseControllerDefinition(callable \$controller): ?array
    {
        if (\\is_string(\$controller) && false !== strpos(\$controller, '::')) {
            \$controller = explode('::', \$controller);
        }

        if (\\is_array(\$controller)) {
            try {
                \$r = new \\ReflectionMethod(\$controller[0], \$controller[1]);

                return [
                    'file' => \$r->getFileName(),
                    'line' => \$r->getEndLine(),
                ];
            } catch (\\ReflectionException \$e) {
                return null;
            }
        }

        if (\$controller instanceof \\Closure) {
            \$r = new \\ReflectionFunction(\$controller);

            return [
                'file' => \$r->getFileName(),
                'line' => \$r->getEndLine(),
            ];
        }

        if (\\is_object(\$controller)) {
            \$r = new \\ReflectionClass(\$controller);

            try {
                \$line = \$r->getMethod('__invoke')->getEndLine();
            } catch (\\ReflectionException \$e) {
                \$line = \$r->getEndLine();
            }

            return [
                'file' => \$r->getFileName(),
                'line' => \$line,
            ];
        }

        return null;
    }
}
", "@app/vendor/symfony/http-kernel/Exception/ControllerDoesNotReturnResponseException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Exception\\ControllerDoesNotReturnResponseException.php");
    }
}
