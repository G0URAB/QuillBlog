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

/* @app/vendor/symfony/dependency-injection/Compiler/Compiler.php */
class __TwigTemplate_07a7af40ad06eedbf7b27a27f1e1b3679121c2acde7dcaa019c785d9b218bae0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/Compiler.php"));

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
use Symfony\\Component\\DependencyInjection\\Exception\\EnvParameterException;

/**
 * This class is used to remove circular dependencies between individual passes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class Compiler
{
    private \$passConfig;
    private \$log = [];
    private \$serviceReferenceGraph;

    public function __construct()
    {
        \$this->passConfig = new PassConfig();
        \$this->serviceReferenceGraph = new ServiceReferenceGraph();
    }

    /**
     * Returns the PassConfig.
     *
     * @return PassConfig The PassConfig instance
     */
    public function getPassConfig()
    {
        return \$this->passConfig;
    }

    /**
     * Returns the ServiceReferenceGraph.
     *
     * @return ServiceReferenceGraph The ServiceReferenceGraph instance
     */
    public function getServiceReferenceGraph()
    {
        return \$this->serviceReferenceGraph;
    }

    /**
     * Adds a pass to the PassConfig.
     */
    public function addPass(CompilerPassInterface \$pass, string \$type = PassConfig::TYPE_BEFORE_OPTIMIZATION, int \$priority = 0)
    {
        \$this->passConfig->addPass(\$pass, \$type, \$priority);
    }

    /**
     * @final
     */
    public function log(CompilerPassInterface \$pass, string \$message)
    {
        if (false !== strpos(\$message, \"\\n\")) {
            \$message = str_replace(\"\\n\", \"\\n\".\\get_class(\$pass).': ', trim(\$message));
        }

        \$this->log[] = \\get_class(\$pass).': '.\$message;
    }

    /**
     * Returns the log.
     *
     * @return array Log array
     */
    public function getLog()
    {
        return \$this->log;
    }

    /**
     * Run the Compiler and process all Passes.
     */
    public function compile(ContainerBuilder \$container)
    {
        try {
            foreach (\$this->passConfig->getPasses() as \$pass) {
                \$pass->process(\$container);
            }
        } catch (\\Exception \$e) {
            \$usedEnvs = [];
            \$prev = \$e;

            do {
                \$msg = \$prev->getMessage();

                if (\$msg !== \$resolvedMsg = \$container->resolveEnvPlaceholders(\$msg, null, \$usedEnvs)) {
                    \$r = new \\ReflectionProperty(\$prev, 'message');
                    \$r->setAccessible(true);
                    \$r->setValue(\$prev, \$resolvedMsg);
                }
            } while (\$prev = \$prev->getPrevious());

            if (\$usedEnvs) {
                \$e = new EnvParameterException(\$usedEnvs, \$e);
            }

            throw \$e;
        } finally {
            \$this->getServiceReferenceGraph()->clear();
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/Compiler.php";
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
use Symfony\\Component\\DependencyInjection\\Exception\\EnvParameterException;

/**
 * This class is used to remove circular dependencies between individual passes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class Compiler
{
    private \$passConfig;
    private \$log = [];
    private \$serviceReferenceGraph;

    public function __construct()
    {
        \$this->passConfig = new PassConfig();
        \$this->serviceReferenceGraph = new ServiceReferenceGraph();
    }

    /**
     * Returns the PassConfig.
     *
     * @return PassConfig The PassConfig instance
     */
    public function getPassConfig()
    {
        return \$this->passConfig;
    }

    /**
     * Returns the ServiceReferenceGraph.
     *
     * @return ServiceReferenceGraph The ServiceReferenceGraph instance
     */
    public function getServiceReferenceGraph()
    {
        return \$this->serviceReferenceGraph;
    }

    /**
     * Adds a pass to the PassConfig.
     */
    public function addPass(CompilerPassInterface \$pass, string \$type = PassConfig::TYPE_BEFORE_OPTIMIZATION, int \$priority = 0)
    {
        \$this->passConfig->addPass(\$pass, \$type, \$priority);
    }

    /**
     * @final
     */
    public function log(CompilerPassInterface \$pass, string \$message)
    {
        if (false !== strpos(\$message, \"\\n\")) {
            \$message = str_replace(\"\\n\", \"\\n\".\\get_class(\$pass).': ', trim(\$message));
        }

        \$this->log[] = \\get_class(\$pass).': '.\$message;
    }

    /**
     * Returns the log.
     *
     * @return array Log array
     */
    public function getLog()
    {
        return \$this->log;
    }

    /**
     * Run the Compiler and process all Passes.
     */
    public function compile(ContainerBuilder \$container)
    {
        try {
            foreach (\$this->passConfig->getPasses() as \$pass) {
                \$pass->process(\$container);
            }
        } catch (\\Exception \$e) {
            \$usedEnvs = [];
            \$prev = \$e;

            do {
                \$msg = \$prev->getMessage();

                if (\$msg !== \$resolvedMsg = \$container->resolveEnvPlaceholders(\$msg, null, \$usedEnvs)) {
                    \$r = new \\ReflectionProperty(\$prev, 'message');
                    \$r->setAccessible(true);
                    \$r->setValue(\$prev, \$resolvedMsg);
                }
            } while (\$prev = \$prev->getPrevious());

            if (\$usedEnvs) {
                \$e = new EnvParameterException(\$usedEnvs, \$e);
            }

            throw \$e;
        } finally {
            \$this->getServiceReferenceGraph()->clear();
        }
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/Compiler.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\Compiler.php");
    }
}
