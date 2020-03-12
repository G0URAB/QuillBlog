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

/* @app/vendor/symfony/doctrine-bridge/Messenger/AbstractDoctrineMiddleware.php */
class __TwigTemplate_d8fd51e85ce5bd0af5fd151099c966c40185b0b85bef85ef9dedc39be47325c8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Messenger/AbstractDoctrineMiddleware.php"));

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
use Doctrine\\Persistence\\ManagerRegistry;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Exception\\UnrecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Middleware\\MiddlewareInterface;
use Symfony\\Component\\Messenger\\Middleware\\StackInterface;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 *
 * @internal
 */
abstract class AbstractDoctrineMiddleware implements MiddlewareInterface
{
    protected \$managerRegistry;
    protected \$entityManagerName;

    public function __construct(ManagerRegistry \$managerRegistry, string \$entityManagerName = null)
    {
        \$this->managerRegistry = \$managerRegistry;
        \$this->entityManagerName = \$entityManagerName;
    }

    final public function handle(Envelope \$envelope, StackInterface \$stack): Envelope
    {
        try {
            \$entityManager = \$this->managerRegistry->getManager(\$this->entityManagerName);
        } catch (\\InvalidArgumentException \$e) {
            throw new UnrecoverableMessageHandlingException(\$e->getMessage(), 0, \$e);
        }

        return \$this->handleForManager(\$entityManager, \$envelope, \$stack);
    }

    abstract protected function handleForManager(EntityManagerInterface \$entityManager, Envelope \$envelope, StackInterface \$stack): Envelope;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Messenger/AbstractDoctrineMiddleware.php";
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
use Doctrine\\Persistence\\ManagerRegistry;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Exception\\UnrecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Middleware\\MiddlewareInterface;
use Symfony\\Component\\Messenger\\Middleware\\StackInterface;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 *
 * @internal
 */
abstract class AbstractDoctrineMiddleware implements MiddlewareInterface
{
    protected \$managerRegistry;
    protected \$entityManagerName;

    public function __construct(ManagerRegistry \$managerRegistry, string \$entityManagerName = null)
    {
        \$this->managerRegistry = \$managerRegistry;
        \$this->entityManagerName = \$entityManagerName;
    }

    final public function handle(Envelope \$envelope, StackInterface \$stack): Envelope
    {
        try {
            \$entityManager = \$this->managerRegistry->getManager(\$this->entityManagerName);
        } catch (\\InvalidArgumentException \$e) {
            throw new UnrecoverableMessageHandlingException(\$e->getMessage(), 0, \$e);
        }

        return \$this->handleForManager(\$entityManager, \$envelope, \$stack);
    }

    abstract protected function handleForManager(EntityManagerInterface \$entityManager, Envelope \$envelope, StackInterface \$stack): Envelope;
}
", "@app/vendor/symfony/doctrine-bridge/Messenger/AbstractDoctrineMiddleware.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Messenger\\AbstractDoctrineMiddleware.php");
    }
}
