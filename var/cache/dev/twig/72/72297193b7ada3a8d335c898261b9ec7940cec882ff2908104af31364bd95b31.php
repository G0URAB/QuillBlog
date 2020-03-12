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

/* @app/vendor/symfony/dependency-injection/Compiler/CheckArgumentsValidityPass.php */
class __TwigTemplate_47b370e0209887cef8bd5f30df64ea57e54a5dab52949589f7e58643f47861cb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/CheckArgumentsValidityPass.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * Checks if arguments of methods are properly configured.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CheckArgumentsValidityPass extends AbstractRecursivePass
{
    private \$throwExceptions;

    public function __construct(bool \$throwExceptions = true)
    {
        \$this->throwExceptions = \$throwExceptions;
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (!\$value instanceof Definition) {
            return parent::processValue(\$value, \$isRoot);
        }

        \$i = 0;
        foreach (\$value->getArguments() as \$k => \$v) {
            if (\$k !== \$i++) {
                if (!\\is_int(\$k)) {
                    \$msg = sprintf('Invalid constructor argument for service \"%s\": integer expected but found string \"%s\". Check your service definition.', \$this->currentId, \$k);
                    \$value->addError(\$msg);
                    if (\$this->throwExceptions) {
                        throw new RuntimeException(\$msg);
                    }

                    break;
                }

                \$msg = sprintf('Invalid constructor argument %d for service \"%s\": argument %d must be defined before. Check your service definition.', 1 + \$k, \$this->currentId, \$i);
                \$value->addError(\$msg);
                if (\$this->throwExceptions) {
                    throw new RuntimeException(\$msg);
                }
            }
        }

        foreach (\$value->getMethodCalls() as \$methodCall) {
            \$i = 0;
            foreach (\$methodCall[1] as \$k => \$v) {
                if (\$k !== \$i++) {
                    if (!\\is_int(\$k)) {
                        \$msg = sprintf('Invalid argument for method call \"%s\" of service \"%s\": integer expected but found string \"%s\". Check your service definition.', \$methodCall[0], \$this->currentId, \$k);
                        \$value->addError(\$msg);
                        if (\$this->throwExceptions) {
                            throw new RuntimeException(\$msg);
                        }

                        break;
                    }

                    \$msg = sprintf('Invalid argument %d for method call \"%s\" of service \"%s\": argument %d must be defined before. Check your service definition.', 1 + \$k, \$methodCall[0], \$this->currentId, \$i);
                    \$value->addError(\$msg);
                    if (\$this->throwExceptions) {
                        throw new RuntimeException(\$msg);
                    }
                }
            }
        }

        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/CheckArgumentsValidityPass.php";
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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * Checks if arguments of methods are properly configured.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CheckArgumentsValidityPass extends AbstractRecursivePass
{
    private \$throwExceptions;

    public function __construct(bool \$throwExceptions = true)
    {
        \$this->throwExceptions = \$throwExceptions;
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (!\$value instanceof Definition) {
            return parent::processValue(\$value, \$isRoot);
        }

        \$i = 0;
        foreach (\$value->getArguments() as \$k => \$v) {
            if (\$k !== \$i++) {
                if (!\\is_int(\$k)) {
                    \$msg = sprintf('Invalid constructor argument for service \"%s\": integer expected but found string \"%s\". Check your service definition.', \$this->currentId, \$k);
                    \$value->addError(\$msg);
                    if (\$this->throwExceptions) {
                        throw new RuntimeException(\$msg);
                    }

                    break;
                }

                \$msg = sprintf('Invalid constructor argument %d for service \"%s\": argument %d must be defined before. Check your service definition.', 1 + \$k, \$this->currentId, \$i);
                \$value->addError(\$msg);
                if (\$this->throwExceptions) {
                    throw new RuntimeException(\$msg);
                }
            }
        }

        foreach (\$value->getMethodCalls() as \$methodCall) {
            \$i = 0;
            foreach (\$methodCall[1] as \$k => \$v) {
                if (\$k !== \$i++) {
                    if (!\\is_int(\$k)) {
                        \$msg = sprintf('Invalid argument for method call \"%s\" of service \"%s\": integer expected but found string \"%s\". Check your service definition.', \$methodCall[0], \$this->currentId, \$k);
                        \$value->addError(\$msg);
                        if (\$this->throwExceptions) {
                            throw new RuntimeException(\$msg);
                        }

                        break;
                    }

                    \$msg = sprintf('Invalid argument %d for method call \"%s\" of service \"%s\": argument %d must be defined before. Check your service definition.', 1 + \$k, \$methodCall[0], \$this->currentId, \$i);
                    \$value->addError(\$msg);
                    if (\$this->throwExceptions) {
                        throw new RuntimeException(\$msg);
                    }
                }
            }
        }

        return null;
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/CheckArgumentsValidityPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\CheckArgumentsValidityPass.php");
    }
}
