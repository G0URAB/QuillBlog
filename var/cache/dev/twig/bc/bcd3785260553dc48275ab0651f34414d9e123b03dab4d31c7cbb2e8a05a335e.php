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

/* @app/vendor/symfony/dependency-injection/Compiler/ResolveFactoryClassPass.php */
class __TwigTemplate_c264bb4f5449b23c12ef4ca7978e22b8d6c852a0f89d7efcbe9185d752ef5757 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/ResolveFactoryClassPass.php"));

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
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ResolveFactoryClassPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (\$value instanceof Definition && \\is_array(\$factory = \$value->getFactory()) && null === \$factory[0]) {
            if (null === \$class = \$value->getClass()) {
                throw new RuntimeException(sprintf('The \"%s\" service is defined to be created by a factory, but is missing the factory class. Did you forget to define the factory or service class?', \$this->currentId));
            }

            \$factory[0] = \$class;
            \$value->setFactory(\$factory);
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/ResolveFactoryClassPass.php";
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
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ResolveFactoryClassPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (\$value instanceof Definition && \\is_array(\$factory = \$value->getFactory()) && null === \$factory[0]) {
            if (null === \$class = \$value->getClass()) {
                throw new RuntimeException(sprintf('The \"%s\" service is defined to be created by a factory, but is missing the factory class. Did you forget to define the factory or service class?', \$this->currentId));
            }

            \$factory[0] = \$class;
            \$value->setFactory(\$factory);
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/ResolveFactoryClassPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\ResolveFactoryClassPass.php");
    }
}
