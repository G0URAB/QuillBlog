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

/* @app/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php */
class __TwigTemplate_eb65f3905a3c701a753dff5a5fc25d2ac20ba1c85db37c3b5710059a6dfe833a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php"));

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

namespace Symfony\\Component\\Console\\CommandLoader;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Console\\Exception\\CommandNotFoundException;

/**
 * Loads commands from a PSR-11 container.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class ContainerCommandLoader implements CommandLoaderInterface
{
    private \$container;
    private \$commandMap;

    /**
     * @param array \$commandMap An array with command names as keys and service ids as values
     */
    public function __construct(ContainerInterface \$container, array \$commandMap)
    {
        \$this->container = \$container;
        \$this->commandMap = \$commandMap;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$name)
    {
        if (!\$this->has(\$name)) {
            throw new CommandNotFoundException(sprintf('Command \"%s\" does not exist.', \$name));
        }

        return \$this->container->get(\$this->commandMap[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function has(string \$name)
    {
        return isset(\$this->commandMap[\$name]) && \$this->container->has(\$this->commandMap[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getNames()
    {
        return array_keys(\$this->commandMap);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php";
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

namespace Symfony\\Component\\Console\\CommandLoader;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Console\\Exception\\CommandNotFoundException;

/**
 * Loads commands from a PSR-11 container.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class ContainerCommandLoader implements CommandLoaderInterface
{
    private \$container;
    private \$commandMap;

    /**
     * @param array \$commandMap An array with command names as keys and service ids as values
     */
    public function __construct(ContainerInterface \$container, array \$commandMap)
    {
        \$this->container = \$container;
        \$this->commandMap = \$commandMap;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$name)
    {
        if (!\$this->has(\$name)) {
            throw new CommandNotFoundException(sprintf('Command \"%s\" does not exist.', \$name));
        }

        return \$this->container->get(\$this->commandMap[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function has(string \$name)
    {
        return isset(\$this->commandMap[\$name]) && \$this->container->has(\$this->commandMap[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function getNames()
    {
        return array_keys(\$this->commandMap);
    }
}
", "@app/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\CommandLoader\\ContainerCommandLoader.php");
    }
}
