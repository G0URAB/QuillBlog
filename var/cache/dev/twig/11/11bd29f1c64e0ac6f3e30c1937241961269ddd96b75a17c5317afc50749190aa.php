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

/* @app/vendor/symfony/dependency-injection/Compiler/RegisterEnvVarProcessorsPass.php */
class __TwigTemplate_31b2d78471e9a3707ba01f47b8231b0b0f56db0b2968a048e985756860b63aa8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/RegisterEnvVarProcessorsPass.php"));

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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\EnvVarProcessor;
use Symfony\\Component\\DependencyInjection\\EnvVarProcessorInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Creates the container.env_var_processors_locator service.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RegisterEnvVarProcessorsPass implements CompilerPassInterface
{
    private static \$allowedTypes = ['array', 'bool', 'float', 'int', 'string'];

    public function process(ContainerBuilder \$container)
    {
        \$bag = \$container->getParameterBag();
        \$types = [];
        \$processors = [];
        foreach (\$container->findTaggedServiceIds('container.env_var_processor') as \$id => \$tags) {
            if (!\$r = \$container->getReflectionClass(\$class = \$container->getDefinition(\$id)->getClass())) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$id));
            } elseif (!\$r->isSubclassOf(EnvVarProcessorInterface::class)) {
                throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$id, EnvVarProcessorInterface::class));
            }
            foreach (\$class::getProvidedTypes() as \$prefix => \$type) {
                \$processors[\$prefix] = new Reference(\$id);
                \$types[\$prefix] = self::validateProvidedTypes(\$type, \$class);
            }
        }

        if (\$bag instanceof EnvPlaceholderParameterBag) {
            foreach (EnvVarProcessor::getProvidedTypes() as \$prefix => \$type) {
                if (!isset(\$types[\$prefix])) {
                    \$types[\$prefix] = self::validateProvidedTypes(\$type, EnvVarProcessor::class);
                }
            }
            \$bag->setProvidedTypes(\$types);
        }

        if (\$processors) {
            \$container->setAlias('container.env_var_processors_locator', (string) ServiceLocatorTagPass::register(\$container, \$processors))
                ->setPublic(true)
            ;
        }
    }

    private static function validateProvidedTypes(string \$types, string \$class): array
    {
        \$types = explode('|', \$types);

        foreach (\$types as \$type) {
            if (!\\in_array(\$type, self::\$allowedTypes)) {
                throw new InvalidArgumentException(sprintf('Invalid type \"%s\" returned by \"%s::getProvidedTypes()\", expected one of \"%s\".', \$type, \$class, implode('\", \"', self::\$allowedTypes)));
            }
        }

        return \$types;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/RegisterEnvVarProcessorsPass.php";
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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\EnvVarProcessor;
use Symfony\\Component\\DependencyInjection\\EnvVarProcessorInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Creates the container.env_var_processors_locator service.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RegisterEnvVarProcessorsPass implements CompilerPassInterface
{
    private static \$allowedTypes = ['array', 'bool', 'float', 'int', 'string'];

    public function process(ContainerBuilder \$container)
    {
        \$bag = \$container->getParameterBag();
        \$types = [];
        \$processors = [];
        foreach (\$container->findTaggedServiceIds('container.env_var_processor') as \$id => \$tags) {
            if (!\$r = \$container->getReflectionClass(\$class = \$container->getDefinition(\$id)->getClass())) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$id));
            } elseif (!\$r->isSubclassOf(EnvVarProcessorInterface::class)) {
                throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$id, EnvVarProcessorInterface::class));
            }
            foreach (\$class::getProvidedTypes() as \$prefix => \$type) {
                \$processors[\$prefix] = new Reference(\$id);
                \$types[\$prefix] = self::validateProvidedTypes(\$type, \$class);
            }
        }

        if (\$bag instanceof EnvPlaceholderParameterBag) {
            foreach (EnvVarProcessor::getProvidedTypes() as \$prefix => \$type) {
                if (!isset(\$types[\$prefix])) {
                    \$types[\$prefix] = self::validateProvidedTypes(\$type, EnvVarProcessor::class);
                }
            }
            \$bag->setProvidedTypes(\$types);
        }

        if (\$processors) {
            \$container->setAlias('container.env_var_processors_locator', (string) ServiceLocatorTagPass::register(\$container, \$processors))
                ->setPublic(true)
            ;
        }
    }

    private static function validateProvidedTypes(string \$types, string \$class): array
    {
        \$types = explode('|', \$types);

        foreach (\$types as \$type) {
            if (!\\in_array(\$type, self::\$allowedTypes)) {
                throw new InvalidArgumentException(sprintf('Invalid type \"%s\" returned by \"%s::getProvidedTypes()\", expected one of \"%s\".', \$type, \$class, implode('\", \"', self::\$allowedTypes)));
            }
        }

        return \$types;
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/RegisterEnvVarProcessorsPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\RegisterEnvVarProcessorsPass.php");
    }
}
