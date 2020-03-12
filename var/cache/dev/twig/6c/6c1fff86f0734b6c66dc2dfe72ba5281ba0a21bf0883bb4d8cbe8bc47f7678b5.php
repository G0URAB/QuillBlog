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

/* @app/vendor/symfony/http-kernel/EventListener/DumpListener.php */
class __TwigTemplate_6055f845634f2c6161fcb264b6e814a2c420f773be644487659ce1590fe8816c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/EventListener/DumpListener.php"));

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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface;
use Symfony\\Component\\VarDumper\\Server\\Connection;
use Symfony\\Component\\VarDumper\\VarDumper;

/**
 * Configures dump() handler.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DumpListener implements EventSubscriberInterface
{
    private \$cloner;
    private \$dumper;
    private \$connection;

    public function __construct(ClonerInterface \$cloner, DataDumperInterface \$dumper, Connection \$connection = null)
    {
        \$this->cloner = \$cloner;
        \$this->dumper = \$dumper;
        \$this->connection = \$connection;
    }

    public function configure()
    {
        \$cloner = \$this->cloner;
        \$dumper = \$this->dumper;
        \$connection = \$this->connection;

        VarDumper::setHandler(static function (\$var) use (\$cloner, \$dumper, \$connection) {
            \$data = \$cloner->cloneVar(\$var);

            if (!\$connection || !\$connection->write(\$data)) {
                \$dumper->dump(\$data);
            }
        });
    }

    public static function getSubscribedEvents()
    {
        if (!class_exists(ConsoleEvents::class)) {
            return [];
        }

        // Register early to have a working dump() as early as possible
        return [ConsoleEvents::COMMAND => ['configure', 1024]];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/EventListener/DumpListener.php";
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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface;
use Symfony\\Component\\VarDumper\\Server\\Connection;
use Symfony\\Component\\VarDumper\\VarDumper;

/**
 * Configures dump() handler.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DumpListener implements EventSubscriberInterface
{
    private \$cloner;
    private \$dumper;
    private \$connection;

    public function __construct(ClonerInterface \$cloner, DataDumperInterface \$dumper, Connection \$connection = null)
    {
        \$this->cloner = \$cloner;
        \$this->dumper = \$dumper;
        \$this->connection = \$connection;
    }

    public function configure()
    {
        \$cloner = \$this->cloner;
        \$dumper = \$this->dumper;
        \$connection = \$this->connection;

        VarDumper::setHandler(static function (\$var) use (\$cloner, \$dumper, \$connection) {
            \$data = \$cloner->cloneVar(\$var);

            if (!\$connection || !\$connection->write(\$data)) {
                \$dumper->dump(\$data);
            }
        });
    }

    public static function getSubscribedEvents()
    {
        if (!class_exists(ConsoleEvents::class)) {
            return [];
        }

        // Register early to have a working dump() as early as possible
        return [ConsoleEvents::COMMAND => ['configure', 1024]];
    }
}
", "@app/vendor/symfony/http-kernel/EventListener/DumpListener.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\EventListener\\DumpListener.php");
    }
}
