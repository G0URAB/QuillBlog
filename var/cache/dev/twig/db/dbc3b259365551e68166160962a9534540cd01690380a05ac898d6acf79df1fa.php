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

/* @app/vendor/symfony/doctrine-bridge/Messenger/DoctrineClearEntityManagerWorkerSubscriber.php */
class __TwigTemplate_23bebbcd68fdf94fb518d24b603d91a18a65244c963322e152c8b94c294f18e6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrineClearEntityManagerWorkerSubscriber.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Messenger;

use Doctrine\\Persistence\\ManagerRegistry;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Messenger\\Event\\WorkerMessageFailedEvent;
use Symfony\\Component\\Messenger\\Event\\WorkerMessageHandledEvent;

/**
 * Clears entity managers between messages being handled to avoid outdated data.
 *
 * @author Ryan Weaver <ryan@symfonycasts.com>
 */
class DoctrineClearEntityManagerWorkerSubscriber implements EventSubscriberInterface
{
    private \$managerRegistry;

    public function __construct(ManagerRegistry \$managerRegistry)
    {
        \$this->managerRegistry = \$managerRegistry;
    }

    public function onWorkerMessageHandled()
    {
        \$this->clearEntityManagers();
    }

    public function onWorkerMessageFailed()
    {
        \$this->clearEntityManagers();
    }

    public static function getSubscribedEvents()
    {
        yield WorkerMessageHandledEvent::class => 'onWorkerMessageHandled';
        yield WorkerMessageFailedEvent::class => 'onWorkerMessageFailed';
    }

    private function clearEntityManagers()
    {
        foreach (\$this->managerRegistry->getManagers() as \$manager) {
            \$manager->clear();
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrineClearEntityManagerWorkerSubscriber.php";
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

namespace Symfony\\Bridge\\Doctrine\\Messenger;

use Doctrine\\Persistence\\ManagerRegistry;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Messenger\\Event\\WorkerMessageFailedEvent;
use Symfony\\Component\\Messenger\\Event\\WorkerMessageHandledEvent;

/**
 * Clears entity managers between messages being handled to avoid outdated data.
 *
 * @author Ryan Weaver <ryan@symfonycasts.com>
 */
class DoctrineClearEntityManagerWorkerSubscriber implements EventSubscriberInterface
{
    private \$managerRegistry;

    public function __construct(ManagerRegistry \$managerRegistry)
    {
        \$this->managerRegistry = \$managerRegistry;
    }

    public function onWorkerMessageHandled()
    {
        \$this->clearEntityManagers();
    }

    public function onWorkerMessageFailed()
    {
        \$this->clearEntityManagers();
    }

    public static function getSubscribedEvents()
    {
        yield WorkerMessageHandledEvent::class => 'onWorkerMessageHandled';
        yield WorkerMessageFailedEvent::class => 'onWorkerMessageFailed';
    }

    private function clearEntityManagers()
    {
        foreach (\$this->managerRegistry->getManagers() as \$manager) {
            \$manager->clear();
        }
    }
}
", "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrineClearEntityManagerWorkerSubscriber.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Messenger\\DoctrineClearEntityManagerWorkerSubscriber.php");
    }
}
