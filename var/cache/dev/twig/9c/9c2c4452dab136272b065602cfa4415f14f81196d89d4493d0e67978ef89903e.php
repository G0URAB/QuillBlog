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

/* @app/vendor/symfony/dependency-injection/Compiler/AutowireRequiredMethodsPass.php */
class __TwigTemplate_830a8a308071a260382c4bcf0946bfab87e474cefabef97a09cc0b615f5245e2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/AutowireRequiredMethodsPass.php"));

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

/**
 * Looks for definitions with autowiring enabled and registers their corresponding \"@required\" methods as setters.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AutowireRequiredMethodsPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        \$value = parent::processValue(\$value, \$isRoot);

        if (!\$value instanceof Definition || !\$value->isAutowired() || \$value->isAbstract() || !\$value->getClass()) {
            return \$value;
        }
        if (!\$reflectionClass = \$this->container->getReflectionClass(\$value->getClass(), false)) {
            return \$value;
        }

        \$alreadyCalledMethods = [];
        \$withers = [];

        foreach (\$value->getMethodCalls() as list(\$method)) {
            \$alreadyCalledMethods[strtolower(\$method)] = true;
        }

        foreach (\$reflectionClass->getMethods() as \$reflectionMethod) {
            \$r = \$reflectionMethod;

            if (\$r->isConstructor() || isset(\$alreadyCalledMethods[strtolower(\$r->name)])) {
                continue;
            }

            while (true) {
                if (false !== \$doc = \$r->getDocComment()) {
                    if (false !== stripos(\$doc, '@required') && preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+@required(?:\\s|\\*/\$)#i', \$doc)) {
                        if (preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+@return\\s++static[\\s\\*]#i', \$doc)) {
                            \$withers[] = [\$reflectionMethod->name, [], true];
                        } else {
                            \$value->addMethodCall(\$reflectionMethod->name, []);
                        }
                        break;
                    }
                    if (false === stripos(\$doc, '@inheritdoc') || !preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+(?:\\{@inheritdoc\\}|@inheritdoc)(?:\\s|\\*/\$)#i', \$doc)) {
                        break;
                    }
                }
                try {
                    \$r = \$r->getPrototype();
                } catch (\\ReflectionException \$e) {
                    break; // method has no prototype
                }
            }
        }

        if (\$withers) {
            // Prepend withers to prevent creating circular loops
            \$setters = \$value->getMethodCalls();
            \$value->setMethodCalls(\$withers);
            foreach (\$setters as \$call) {
                \$value->addMethodCall(\$call[0], \$call[1], \$call[2] ?? false);
            }
        }

        return \$value;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/AutowireRequiredMethodsPass.php";
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

/**
 * Looks for definitions with autowiring enabled and registers their corresponding \"@required\" methods as setters.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AutowireRequiredMethodsPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        \$value = parent::processValue(\$value, \$isRoot);

        if (!\$value instanceof Definition || !\$value->isAutowired() || \$value->isAbstract() || !\$value->getClass()) {
            return \$value;
        }
        if (!\$reflectionClass = \$this->container->getReflectionClass(\$value->getClass(), false)) {
            return \$value;
        }

        \$alreadyCalledMethods = [];
        \$withers = [];

        foreach (\$value->getMethodCalls() as list(\$method)) {
            \$alreadyCalledMethods[strtolower(\$method)] = true;
        }

        foreach (\$reflectionClass->getMethods() as \$reflectionMethod) {
            \$r = \$reflectionMethod;

            if (\$r->isConstructor() || isset(\$alreadyCalledMethods[strtolower(\$r->name)])) {
                continue;
            }

            while (true) {
                if (false !== \$doc = \$r->getDocComment()) {
                    if (false !== stripos(\$doc, '@required') && preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+@required(?:\\s|\\*/\$)#i', \$doc)) {
                        if (preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+@return\\s++static[\\s\\*]#i', \$doc)) {
                            \$withers[] = [\$reflectionMethod->name, [], true];
                        } else {
                            \$value->addMethodCall(\$reflectionMethod->name, []);
                        }
                        break;
                    }
                    if (false === stripos(\$doc, '@inheritdoc') || !preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+(?:\\{@inheritdoc\\}|@inheritdoc)(?:\\s|\\*/\$)#i', \$doc)) {
                        break;
                    }
                }
                try {
                    \$r = \$r->getPrototype();
                } catch (\\ReflectionException \$e) {
                    break; // method has no prototype
                }
            }
        }

        if (\$withers) {
            // Prepend withers to prevent creating circular loops
            \$setters = \$value->getMethodCalls();
            \$value->setMethodCalls(\$withers);
            foreach (\$setters as \$call) {
                \$value->addMethodCall(\$call[0], \$call[1], \$call[2] ?? false);
            }
        }

        return \$value;
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/AutowireRequiredMethodsPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\AutowireRequiredMethodsPass.php");
    }
}
