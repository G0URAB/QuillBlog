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

/* @app/vendor/symfony/doctrine-bridge/Messenger/DoctrinePingConnectionMiddleware.php */
class __TwigTemplate_3cd40f5c46062b6fc01e37c8eb71af9b6e7988c384be47df762c9b46d4ce2a6f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrinePingConnectionMiddleware.php"));

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

use Doctrine\\ORM\\EntityManagerInterface;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Middleware\\StackInterface;
use Symfony\\Component\\Messenger\\Stamp\\ConsumedByWorkerStamp;

/**
 * Checks whether the connection is still open or reconnects otherwise.
 *
 * @author Fuong <insidestyles@gmail.com>
 */
class DoctrinePingConnectionMiddleware extends AbstractDoctrineMiddleware
{
    protected function handleForManager(EntityManagerInterface \$entityManager, Envelope \$envelope, StackInterface \$stack): Envelope
    {
        if (null !== \$envelope->last(ConsumedByWorkerStamp::class)) {
            \$this->pingConnection(\$entityManager);
        }

        return \$stack->next()->handle(\$envelope, \$stack);
    }

    private function pingConnection(EntityManagerInterface \$entityManager)
    {
        \$connection = \$entityManager->getConnection();

        if (!\$connection->ping()) {
            \$connection->close();
            \$connection->connect();
        }

        if (!\$entityManager->isOpen()) {
            \$this->managerRegistry->resetManager(\$this->entityManagerName);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrinePingConnectionMiddleware.php";
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

use Doctrine\\ORM\\EntityManagerInterface;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Middleware\\StackInterface;
use Symfony\\Component\\Messenger\\Stamp\\ConsumedByWorkerStamp;

/**
 * Checks whether the connection is still open or reconnects otherwise.
 *
 * @author Fuong <insidestyles@gmail.com>
 */
class DoctrinePingConnectionMiddleware extends AbstractDoctrineMiddleware
{
    protected function handleForManager(EntityManagerInterface \$entityManager, Envelope \$envelope, StackInterface \$stack): Envelope
    {
        if (null !== \$envelope->last(ConsumedByWorkerStamp::class)) {
            \$this->pingConnection(\$entityManager);
        }

        return \$stack->next()->handle(\$envelope, \$stack);
    }

    private function pingConnection(EntityManagerInterface \$entityManager)
    {
        \$connection = \$entityManager->getConnection();

        if (!\$connection->ping()) {
            \$connection->close();
            \$connection->connect();
        }

        if (!\$entityManager->isOpen()) {
            \$this->managerRegistry->resetManager(\$this->entityManagerName);
        }
    }
}
", "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrinePingConnectionMiddleware.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Messenger\\DoctrinePingConnectionMiddleware.php");
    }
}
