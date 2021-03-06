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

/* @app/vendor/symfony/dependency-injection/Compiler/ValidateEnvPlaceholdersPass.php */
class __TwigTemplate_d7e791a9ea537d545bcea8af53ad04c2e2f06d6938b554d03e8bcfe2018d49e4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/ValidateEnvPlaceholdersPass.php"));

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

use Symfony\\Component\\Config\\Definition\\BaseNode;
use Symfony\\Component\\Config\\Definition\\Processor;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\ConfigurationExtensionInterface;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;

/**
 * Validates environment variable placeholders used in extension configuration with dummy values.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class ValidateEnvPlaceholdersPass implements CompilerPassInterface
{
    private static \$typeFixtures = ['array' => [], 'bool' => false, 'float' => 0.0, 'int' => 0, 'string' => ''];

    private \$extensionConfig = [];

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->extensionConfig = [];

        if (!class_exists(BaseNode::class) || !\$extensions = \$container->getExtensions()) {
            return;
        }

        \$resolvingBag = \$container->getParameterBag();
        if (!\$resolvingBag instanceof EnvPlaceholderParameterBag) {
            return;
        }

        \$defaultBag = new ParameterBag(\$resolvingBag->all());
        \$envTypes = \$resolvingBag->getProvidedTypes();
        try {
            foreach (\$resolvingBag->getEnvPlaceholders() + \$resolvingBag->getUnusedEnvPlaceholders() as \$env => \$placeholders) {
                \$values = [];
                if (false === \$i = strpos(\$env, ':')) {
                    \$default = \$defaultBag->has(\"env(\$env)\") ? \$defaultBag->get(\"env(\$env)\") : self::\$typeFixtures['string'];
                    \$defaultType = null !== \$default ? self::getType(\$default) : 'string';
                    \$values[\$defaultType] = \$default;
                } else {
                    \$prefix = substr(\$env, 0, \$i);
                    foreach (\$envTypes[\$prefix] ?? ['string'] as \$type) {
                        \$values[\$type] = self::\$typeFixtures[\$type] ?? null;
                    }
                }
                foreach (\$placeholders as \$placeholder) {
                    BaseNode::setPlaceholder(\$placeholder, \$values);
                }
            }

            \$processor = new Processor();

            foreach (\$extensions as \$name => \$extension) {
                if (!\$extension instanceof ConfigurationExtensionInterface || !\$config = array_filter(\$container->getExtensionConfig(\$name))) {
                    // this extension has no semantic configuration or was not called
                    continue;
                }

                \$config = \$resolvingBag->resolveValue(\$config);

                if (null === \$configuration = \$extension->getConfiguration(\$config, \$container)) {
                    continue;
                }

                \$this->extensionConfig[\$name] = \$processor->processConfiguration(\$configuration, \$config);
            }
        } finally {
            BaseNode::resetPlaceholders();
        }

        \$resolvingBag->clearUnusedEnvPlaceholders();
    }

    /**
     * @internal
     */
    public function getExtensionConfig(): array
    {
        try {
            return \$this->extensionConfig;
        } finally {
            \$this->extensionConfig = [];
        }
    }

    private static function getType(\$value): string
    {
        switch (\$type = \\gettype(\$value)) {
            case 'boolean':
                return 'bool';
            case 'double':
                return 'float';
            case 'integer':
                return 'int';
        }

        return \$type;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/ValidateEnvPlaceholdersPass.php";
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

use Symfony\\Component\\Config\\Definition\\BaseNode;
use Symfony\\Component\\Config\\Definition\\Processor;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\ConfigurationExtensionInterface;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;

/**
 * Validates environment variable placeholders used in extension configuration with dummy values.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class ValidateEnvPlaceholdersPass implements CompilerPassInterface
{
    private static \$typeFixtures = ['array' => [], 'bool' => false, 'float' => 0.0, 'int' => 0, 'string' => ''];

    private \$extensionConfig = [];

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->extensionConfig = [];

        if (!class_exists(BaseNode::class) || !\$extensions = \$container->getExtensions()) {
            return;
        }

        \$resolvingBag = \$container->getParameterBag();
        if (!\$resolvingBag instanceof EnvPlaceholderParameterBag) {
            return;
        }

        \$defaultBag = new ParameterBag(\$resolvingBag->all());
        \$envTypes = \$resolvingBag->getProvidedTypes();
        try {
            foreach (\$resolvingBag->getEnvPlaceholders() + \$resolvingBag->getUnusedEnvPlaceholders() as \$env => \$placeholders) {
                \$values = [];
                if (false === \$i = strpos(\$env, ':')) {
                    \$default = \$defaultBag->has(\"env(\$env)\") ? \$defaultBag->get(\"env(\$env)\") : self::\$typeFixtures['string'];
                    \$defaultType = null !== \$default ? self::getType(\$default) : 'string';
                    \$values[\$defaultType] = \$default;
                } else {
                    \$prefix = substr(\$env, 0, \$i);
                    foreach (\$envTypes[\$prefix] ?? ['string'] as \$type) {
                        \$values[\$type] = self::\$typeFixtures[\$type] ?? null;
                    }
                }
                foreach (\$placeholders as \$placeholder) {
                    BaseNode::setPlaceholder(\$placeholder, \$values);
                }
            }

            \$processor = new Processor();

            foreach (\$extensions as \$name => \$extension) {
                if (!\$extension instanceof ConfigurationExtensionInterface || !\$config = array_filter(\$container->getExtensionConfig(\$name))) {
                    // this extension has no semantic configuration or was not called
                    continue;
                }

                \$config = \$resolvingBag->resolveValue(\$config);

                if (null === \$configuration = \$extension->getConfiguration(\$config, \$container)) {
                    continue;
                }

                \$this->extensionConfig[\$name] = \$processor->processConfiguration(\$configuration, \$config);
            }
        } finally {
            BaseNode::resetPlaceholders();
        }

        \$resolvingBag->clearUnusedEnvPlaceholders();
    }

    /**
     * @internal
     */
    public function getExtensionConfig(): array
    {
        try {
            return \$this->extensionConfig;
        } finally {
            \$this->extensionConfig = [];
        }
    }

    private static function getType(\$value): string
    {
        switch (\$type = \\gettype(\$value)) {
            case 'boolean':
                return 'bool';
            case 'double':
                return 'float';
            case 'integer':
                return 'int';
        }

        return \$type;
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/ValidateEnvPlaceholdersPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\ValidateEnvPlaceholdersPass.php");
    }
}
