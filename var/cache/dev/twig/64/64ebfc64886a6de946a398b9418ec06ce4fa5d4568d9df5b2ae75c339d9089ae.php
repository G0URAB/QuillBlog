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

/* @app/vendor/symfony/console/Helper/HelperSet.php */
class __TwigTemplate_22ac810fe915804c7ab34f111b2e8cf5e5ad18a3715055d089e3009f3d639bac extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Helper/HelperSet.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * HelperSet represents a set of helpers to be used with a command.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HelperSet implements \\IteratorAggregate
{
    /**
     * @var Helper[]
     */
    private \$helpers = [];
    private \$command;

    /**
     * @param Helper[] \$helpers An array of helper
     */
    public function __construct(array \$helpers = [])
    {
        foreach (\$helpers as \$alias => \$helper) {
            \$this->set(\$helper, \\is_int(\$alias) ? null : \$alias);
        }
    }

    public function set(HelperInterface \$helper, string \$alias = null)
    {
        \$this->helpers[\$helper->getName()] = \$helper;
        if (null !== \$alias) {
            \$this->helpers[\$alias] = \$helper;
        }

        \$helper->setHelperSet(\$this);
    }

    /**
     * Returns true if the helper if defined.
     *
     * @return bool true if the helper is defined, false otherwise
     */
    public function has(string \$name)
    {
        return isset(\$this->helpers[\$name]);
    }

    /**
     * Gets a helper value.
     *
     * @return HelperInterface The helper instance
     *
     * @throws InvalidArgumentException if the helper is not defined
     */
    public function get(string \$name)
    {
        if (!\$this->has(\$name)) {
            throw new InvalidArgumentException(sprintf('The helper \"%s\" is not defined.', \$name));
        }

        return \$this->helpers[\$name];
    }

    public function setCommand(Command \$command = null)
    {
        \$this->command = \$command;
    }

    /**
     * Gets the command associated with this helper set.
     *
     * @return Command A Command instance
     */
    public function getCommand()
    {
        return \$this->command;
    }

    /**
     * @return Helper[]
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->helpers);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Helper/HelperSet.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * HelperSet represents a set of helpers to be used with a command.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HelperSet implements \\IteratorAggregate
{
    /**
     * @var Helper[]
     */
    private \$helpers = [];
    private \$command;

    /**
     * @param Helper[] \$helpers An array of helper
     */
    public function __construct(array \$helpers = [])
    {
        foreach (\$helpers as \$alias => \$helper) {
            \$this->set(\$helper, \\is_int(\$alias) ? null : \$alias);
        }
    }

    public function set(HelperInterface \$helper, string \$alias = null)
    {
        \$this->helpers[\$helper->getName()] = \$helper;
        if (null !== \$alias) {
            \$this->helpers[\$alias] = \$helper;
        }

        \$helper->setHelperSet(\$this);
    }

    /**
     * Returns true if the helper if defined.
     *
     * @return bool true if the helper is defined, false otherwise
     */
    public function has(string \$name)
    {
        return isset(\$this->helpers[\$name]);
    }

    /**
     * Gets a helper value.
     *
     * @return HelperInterface The helper instance
     *
     * @throws InvalidArgumentException if the helper is not defined
     */
    public function get(string \$name)
    {
        if (!\$this->has(\$name)) {
            throw new InvalidArgumentException(sprintf('The helper \"%s\" is not defined.', \$name));
        }

        return \$this->helpers[\$name];
    }

    public function setCommand(Command \$command = null)
    {
        \$this->command = \$command;
    }

    /**
     * Gets the command associated with this helper set.
     *
     * @return Command A Command instance
     */
    public function getCommand()
    {
        return \$this->command;
    }

    /**
     * @return Helper[]
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->helpers);
    }
}
", "@app/vendor/symfony/console/Helper/HelperSet.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Helper\\HelperSet.php");
    }
}
