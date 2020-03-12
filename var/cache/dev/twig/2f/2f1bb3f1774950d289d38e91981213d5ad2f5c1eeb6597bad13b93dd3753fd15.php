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

/* @app/vendor/symfony/doctrine-bridge/Messenger/DoctrineCloseConnectionMiddleware.php */
class __TwigTemplate_7f7db0ef8ce7c6ed3e839fde6c9cfbe8c93134789665343c3cda2f1b0f7f8466 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrineCloseConnectionMiddleware.php"));

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
 * Closes connection and therefore saves number of connections.
 *
 * @author Fuong <insidestyles@gmail.com>
 */
class DoctrineCloseConnectionMiddleware extends AbstractDoctrineMiddleware
{
    protected function handleForManager(EntityManagerInterface \$entityManager, Envelope \$envelope, StackInterface \$stack): Envelope
    {
        try {
            \$connection = \$entityManager->getConnection();

            return \$stack->next()->handle(\$envelope, \$stack);
        } finally {
            if (null !== \$envelope->last(ConsumedByWorkerStamp::class)) {
                \$connection->close();
            }
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrineCloseConnectionMiddleware.php";
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
 * Closes connection and therefore saves number of connections.
 *
 * @author Fuong <insidestyles@gmail.com>
 */
class DoctrineCloseConnectionMiddleware extends AbstractDoctrineMiddleware
{
    protected function handleForManager(EntityManagerInterface \$entityManager, Envelope \$envelope, StackInterface \$stack): Envelope
    {
        try {
            \$connection = \$entityManager->getConnection();

            return \$stack->next()->handle(\$envelope, \$stack);
        } finally {
            if (null !== \$envelope->last(ConsumedByWorkerStamp::class)) {
                \$connection->close();
            }
        }
    }
}
", "@app/vendor/symfony/doctrine-bridge/Messenger/DoctrineCloseConnectionMiddleware.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Messenger\\DoctrineCloseConnectionMiddleware.php");
    }
}
