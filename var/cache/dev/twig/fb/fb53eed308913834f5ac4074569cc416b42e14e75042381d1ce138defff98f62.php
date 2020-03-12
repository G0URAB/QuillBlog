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

/* @app/vendor/symfony/framework-bundle/EventListener/SuggestMissingPackageSubscriber.php */
class __TwigTemplate_c9d48959c666771bd123d4c1cffad0e1305c311cb4d62bd1e745b494d1c45f3d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/EventListener/SuggestMissingPackageSubscriber.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\EventListener;

use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Exception\\CommandNotFoundException;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * Suggests a package, that should be installed (via composer),
 * if the package is missing, and the input command namespace can be mapped to a Symfony bundle.
 *
 * @author Przemysław Bogusz <przemyslaw.bogusz@tubotax.pl>
 *
 * @internal
 */
final class SuggestMissingPackageSubscriber implements EventSubscriberInterface
{
    private const PACKAGES = [
        'doctrine' => [
            'fixtures' => ['DoctrineFixturesBundle', 'doctrine/doctrine-fixtures-bundle --dev'],
            'mongodb' => ['DoctrineMongoDBBundle', 'doctrine/mongodb-odm-bundle'],
            '_default' => ['Doctrine ORM', 'symfony/orm-pack'],
        ],
        'generate' => [
            '_default' => ['SensioGeneratorBundle', 'sensio/generator-bundle'],
        ],
        'make' => [
            '_default' => ['MakerBundle', 'symfony/maker-bundle --dev'],
        ],
        'server' => [
            'dump' => ['Debug Bundle', 'symfony/debug-bundle --dev'],
            '_default' => ['WebServerBundle', 'symfony/web-server-bundle --dev'],
        ],
    ];

    public function onConsoleError(ConsoleErrorEvent \$event): void
    {
        if (!\$event->getError() instanceof CommandNotFoundException) {
            return;
        }

        [\$namespace, \$command] = explode(':', \$event->getInput()->getFirstArgument()) + [1 => ''];

        if (!isset(self::PACKAGES[\$namespace])) {
            return;
        }

        if (isset(self::PACKAGES[\$namespace][\$command])) {
            \$suggestion = self::PACKAGES[\$namespace][\$command];
            \$exact = true;
        } else {
            \$suggestion = self::PACKAGES[\$namespace]['_default'];
            \$exact = false;
        }

        \$error = \$event->getError();

        if (\$error->getAlternatives() && !\$exact) {
            return;
        }

        \$message = sprintf(\"%s\\n\\nYou may be looking for a command provided by the \\\"%s\\\" which is currently not installed. Try running \\\"composer require %s\\\".\", \$error->getMessage(), \$suggestion[0], \$suggestion[1]);
        \$event->setError(new CommandNotFoundException(\$message));
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ConsoleEvents::ERROR => ['onConsoleError', 0],
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/EventListener/SuggestMissingPackageSubscriber.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\EventListener;

use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Exception\\CommandNotFoundException;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * Suggests a package, that should be installed (via composer),
 * if the package is missing, and the input command namespace can be mapped to a Symfony bundle.
 *
 * @author Przemysław Bogusz <przemyslaw.bogusz@tubotax.pl>
 *
 * @internal
 */
final class SuggestMissingPackageSubscriber implements EventSubscriberInterface
{
    private const PACKAGES = [
        'doctrine' => [
            'fixtures' => ['DoctrineFixturesBundle', 'doctrine/doctrine-fixtures-bundle --dev'],
            'mongodb' => ['DoctrineMongoDBBundle', 'doctrine/mongodb-odm-bundle'],
            '_default' => ['Doctrine ORM', 'symfony/orm-pack'],
        ],
        'generate' => [
            '_default' => ['SensioGeneratorBundle', 'sensio/generator-bundle'],
        ],
        'make' => [
            '_default' => ['MakerBundle', 'symfony/maker-bundle --dev'],
        ],
        'server' => [
            'dump' => ['Debug Bundle', 'symfony/debug-bundle --dev'],
            '_default' => ['WebServerBundle', 'symfony/web-server-bundle --dev'],
        ],
    ];

    public function onConsoleError(ConsoleErrorEvent \$event): void
    {
        if (!\$event->getError() instanceof CommandNotFoundException) {
            return;
        }

        [\$namespace, \$command] = explode(':', \$event->getInput()->getFirstArgument()) + [1 => ''];

        if (!isset(self::PACKAGES[\$namespace])) {
            return;
        }

        if (isset(self::PACKAGES[\$namespace][\$command])) {
            \$suggestion = self::PACKAGES[\$namespace][\$command];
            \$exact = true;
        } else {
            \$suggestion = self::PACKAGES[\$namespace]['_default'];
            \$exact = false;
        }

        \$error = \$event->getError();

        if (\$error->getAlternatives() && !\$exact) {
            return;
        }

        \$message = sprintf(\"%s\\n\\nYou may be looking for a command provided by the \\\"%s\\\" which is currently not installed. Try running \\\"composer require %s\\\".\", \$error->getMessage(), \$suggestion[0], \$suggestion[1]);
        \$event->setError(new CommandNotFoundException(\$message));
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ConsoleEvents::ERROR => ['onConsoleError', 0],
        ];
    }
}
", "@app/vendor/symfony/framework-bundle/EventListener/SuggestMissingPackageSubscriber.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\EventListener\\SuggestMissingPackageSubscriber.php");
    }
}
