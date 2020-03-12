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

/* @app/vendor/symfony/console/CommandLoader/FactoryCommandLoader.php */
class __TwigTemplate_a3a6f498d9a13200e373be1b0b674ead11e87e3e96e67f38e88baf80c5bbcd35 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/CommandLoader/FactoryCommandLoader.php"));

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

use Symfony\\Component\\Console\\Exception\\CommandNotFoundException;

/**
 * A simple command loader using factories to instantiate commands lazily.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class FactoryCommandLoader implements CommandLoaderInterface
{
    private \$factories;

    /**
     * @param callable[] \$factories Indexed by command names
     */
    public function __construct(array \$factories)
    {
        \$this->factories = \$factories;
    }

    /**
     * {@inheritdoc}
     */
    public function has(string \$name)
    {
        return isset(\$this->factories[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$name)
    {
        if (!isset(\$this->factories[\$name])) {
            throw new CommandNotFoundException(sprintf('Command \"%s\" does not exist.', \$name));
        }

        \$factory = \$this->factories[\$name];

        return \$factory();
    }

    /**
     * {@inheritdoc}
     */
    public function getNames()
    {
        return array_keys(\$this->factories);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/CommandLoader/FactoryCommandLoader.php";
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

use Symfony\\Component\\Console\\Exception\\CommandNotFoundException;

/**
 * A simple command loader using factories to instantiate commands lazily.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class FactoryCommandLoader implements CommandLoaderInterface
{
    private \$factories;

    /**
     * @param callable[] \$factories Indexed by command names
     */
    public function __construct(array \$factories)
    {
        \$this->factories = \$factories;
    }

    /**
     * {@inheritdoc}
     */
    public function has(string \$name)
    {
        return isset(\$this->factories[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$name)
    {
        if (!isset(\$this->factories[\$name])) {
            throw new CommandNotFoundException(sprintf('Command \"%s\" does not exist.', \$name));
        }

        \$factory = \$this->factories[\$name];

        return \$factory();
    }

    /**
     * {@inheritdoc}
     */
    public function getNames()
    {
        return array_keys(\$this->factories);
    }
}
", "@app/vendor/symfony/console/CommandLoader/FactoryCommandLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\CommandLoader\\FactoryCommandLoader.php");
    }
}
