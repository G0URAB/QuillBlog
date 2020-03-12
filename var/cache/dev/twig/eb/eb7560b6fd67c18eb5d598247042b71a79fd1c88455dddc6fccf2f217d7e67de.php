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

/* @app/vendor/symfony/doctrine-bridge/Messenger/DoctrineTransactionMiddleware.php */
class __TwigTemplate_a3c42ae64a2a622efd55ca04e5fa757eb948a54973a292ed11e0d74e7ebe6b28 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrineTransactionMiddleware.php"));

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
use Symfony\\Component\\Messenger\\Exception\\HandlerFailedException;
use Symfony\\Component\\Messenger\\Middleware\\StackInterface;
use Symfony\\Component\\Messenger\\Stamp\\HandledStamp;

/**
 * Wraps all handlers in a single doctrine transaction.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class DoctrineTransactionMiddleware extends AbstractDoctrineMiddleware
{
    protected function handleForManager(EntityManagerInterface \$entityManager, Envelope \$envelope, StackInterface \$stack): Envelope
    {
        \$entityManager->getConnection()->beginTransaction();
        try {
            \$envelope = \$stack->next()->handle(\$envelope, \$stack);
            \$entityManager->flush();
            \$entityManager->getConnection()->commit();

            return \$envelope;
        } catch (\\Throwable \$exception) {
            \$entityManager->getConnection()->rollBack();

            if (\$exception instanceof HandlerFailedException) {
                // Remove all HandledStamp from the envelope so the retry will execute all handlers again.
                // When a handler fails, the queries of allegedly successful previous handlers just got rolled back.
                throw new HandlerFailedException(\$exception->getEnvelope()->withoutAll(HandledStamp::class), \$exception->getNestedExceptions());
            }

            throw \$exception;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrineTransactionMiddleware.php";
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
use Symfony\\Component\\Messenger\\Exception\\HandlerFailedException;
use Symfony\\Component\\Messenger\\Middleware\\StackInterface;
use Symfony\\Component\\Messenger\\Stamp\\HandledStamp;

/**
 * Wraps all handlers in a single doctrine transaction.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class DoctrineTransactionMiddleware extends AbstractDoctrineMiddleware
{
    protected function handleForManager(EntityManagerInterface \$entityManager, Envelope \$envelope, StackInterface \$stack): Envelope
    {
        \$entityManager->getConnection()->beginTransaction();
        try {
            \$envelope = \$stack->next()->handle(\$envelope, \$stack);
            \$entityManager->flush();
            \$entityManager->getConnection()->commit();

            return \$envelope;
        } catch (\\Throwable \$exception) {
            \$entityManager->getConnection()->rollBack();

            if (\$exception instanceof HandlerFailedException) {
                // Remove all HandledStamp from the envelope so the retry will execute all handlers again.
                // When a handler fails, the queries of allegedly successful previous handlers just got rolled back.
                throw new HandlerFailedException(\$exception->getEnvelope()->withoutAll(HandledStamp::class), \$exception->getNestedExceptions());
            }

            throw \$exception;
        }
    }
}
", "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrineTransactionMiddleware.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Messenger\\DoctrineTransactionMiddleware.php");
    }
}
