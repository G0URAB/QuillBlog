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

/* @app/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php */
class __TwigTemplate_d9f9a4a3f46fc338349ff68367f1be1df3f7cbeea0514da11ebee9d894523a16 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php"));

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

namespace Symfony\\Component\\HttpKernel\\ControllerMetadata;

/**
 * Builds {@see ArgumentMetadata} objects based on the given Controller.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class ArgumentMetadataFactory implements ArgumentMetadataFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createArgumentMetadata(\$controller): array
    {
        \$arguments = [];

        if (\\is_array(\$controller)) {
            \$reflection = new \\ReflectionMethod(\$controller[0], \$controller[1]);
        } elseif (\\is_object(\$controller) && !\$controller instanceof \\Closure) {
            \$reflection = (new \\ReflectionObject(\$controller))->getMethod('__invoke');
        } else {
            \$reflection = new \\ReflectionFunction(\$controller);
        }

        foreach (\$reflection->getParameters() as \$param) {
            \$arguments[] = new ArgumentMetadata(\$param->getName(), \$this->getType(\$param, \$reflection), \$param->isVariadic(), \$param->isDefaultValueAvailable(), \$param->isDefaultValueAvailable() ? \$param->getDefaultValue() : null, \$param->allowsNull());
        }

        return \$arguments;
    }

    /**
     * Returns an associated type to the given parameter if available.
     */
    private function getType(\\ReflectionParameter \$parameter, \\ReflectionFunctionAbstract \$function): ?string
    {
        if (!\$type = \$parameter->getType()) {
            return null;
        }
        \$name = \$type->getName();

        if (\$function instanceof \\ReflectionMethod) {
            \$lcName = strtolower(\$name);
            switch (\$lcName) {
                case 'self':
                    return \$function->getDeclaringClass()->name;
                case 'parent':
                    return (\$parent = \$function->getDeclaringClass()->getParentClass()) ? \$parent->name : null;
            }
        }

        return \$name;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php";
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

namespace Symfony\\Component\\HttpKernel\\ControllerMetadata;

/**
 * Builds {@see ArgumentMetadata} objects based on the given Controller.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class ArgumentMetadataFactory implements ArgumentMetadataFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createArgumentMetadata(\$controller): array
    {
        \$arguments = [];

        if (\\is_array(\$controller)) {
            \$reflection = new \\ReflectionMethod(\$controller[0], \$controller[1]);
        } elseif (\\is_object(\$controller) && !\$controller instanceof \\Closure) {
            \$reflection = (new \\ReflectionObject(\$controller))->getMethod('__invoke');
        } else {
            \$reflection = new \\ReflectionFunction(\$controller);
        }

        foreach (\$reflection->getParameters() as \$param) {
            \$arguments[] = new ArgumentMetadata(\$param->getName(), \$this->getType(\$param, \$reflection), \$param->isVariadic(), \$param->isDefaultValueAvailable(), \$param->isDefaultValueAvailable() ? \$param->getDefaultValue() : null, \$param->allowsNull());
        }

        return \$arguments;
    }

    /**
     * Returns an associated type to the given parameter if available.
     */
    private function getType(\\ReflectionParameter \$parameter, \\ReflectionFunctionAbstract \$function): ?string
    {
        if (!\$type = \$parameter->getType()) {
            return null;
        }
        \$name = \$type->getName();

        if (\$function instanceof \\ReflectionMethod) {
            \$lcName = strtolower(\$name);
            switch (\$lcName) {
                case 'self':
                    return \$function->getDeclaringClass()->name;
                case 'parent':
                    return (\$parent = \$function->getDeclaringClass()->getParentClass()) ? \$parent->name : null;
            }
        }

        return \$name;
    }
}
", "@app/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactory.php");
    }
}
