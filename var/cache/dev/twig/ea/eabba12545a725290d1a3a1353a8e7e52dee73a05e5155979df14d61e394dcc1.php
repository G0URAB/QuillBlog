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

/* @app/vendor/doctrine/doctrine-bundle/Registry.php */
class __TwigTemplate_1f68c4006e562792552703d65381bc355e9152ec5891667710bd437b49926a35 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/Registry.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\ORMException;
use ProxyManager\\Proxy\\LazyLoadingInterface;
use Psr\\Container\\ContainerInterface;
use Symfony\\Bridge\\Doctrine\\ManagerRegistry;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * References all Doctrine connections and entity managers in a given Container.
 */
class Registry extends ManagerRegistry implements ResetInterface
{
    /**
     * @param string[] \$connections
     * @param string[] \$entityManagers
     * @param string   \$defaultConnection
     * @param string   \$defaultEntityManager
     */
    public function __construct(ContainerInterface \$container, array \$connections, array \$entityManagers, \$defaultConnection, \$defaultEntityManager)
    {
        \$this->container = \$container;

        parent::__construct('ORM', \$connections, \$entityManagers, \$defaultConnection, \$defaultEntityManager, 'Doctrine\\ORM\\Proxy\\Proxy');
    }

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered entity managers.
     *
     * @see Configuration::getEntityNamespace
     *
     * @param string \$alias The alias
     *
     * @return string The full namespace
     */
    public function getAliasNamespace(\$alias)
    {
        foreach (array_keys(\$this->getManagers()) as \$name) {
            try {
                return \$this->getManager(\$name)->getConfiguration()->getEntityNamespace(\$alias);
            } catch (ORMException \$e) {
            }
        }

        throw ORMException::unknownEntityNamespace(\$alias);
    }

    public function reset() : void
    {
        foreach (\$this->getManagerNames() as \$managerName => \$serviceId) {
            \$this->resetOrClearManager(\$managerName, \$serviceId);
        }
    }

    private function resetOrClearManager(string \$managerName, string \$serviceId) : void
    {
        if (! \$this->container->initialized(\$serviceId)) {
            return;
        }

        \$manager = \$this->container->get(\$serviceId);

        assert(\$manager instanceof EntityManagerInterface);

        if (! \$manager instanceof LazyLoadingInterface || \$manager->isOpen()) {
            \$manager->clear();

            return;
        }

        \$this->resetManager(\$managerName);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/Registry.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\ORMException;
use ProxyManager\\Proxy\\LazyLoadingInterface;
use Psr\\Container\\ContainerInterface;
use Symfony\\Bridge\\Doctrine\\ManagerRegistry;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * References all Doctrine connections and entity managers in a given Container.
 */
class Registry extends ManagerRegistry implements ResetInterface
{
    /**
     * @param string[] \$connections
     * @param string[] \$entityManagers
     * @param string   \$defaultConnection
     * @param string   \$defaultEntityManager
     */
    public function __construct(ContainerInterface \$container, array \$connections, array \$entityManagers, \$defaultConnection, \$defaultEntityManager)
    {
        \$this->container = \$container;

        parent::__construct('ORM', \$connections, \$entityManagers, \$defaultConnection, \$defaultEntityManager, 'Doctrine\\ORM\\Proxy\\Proxy');
    }

    /**
     * Resolves a registered namespace alias to the full namespace.
     *
     * This method looks for the alias in all registered entity managers.
     *
     * @see Configuration::getEntityNamespace
     *
     * @param string \$alias The alias
     *
     * @return string The full namespace
     */
    public function getAliasNamespace(\$alias)
    {
        foreach (array_keys(\$this->getManagers()) as \$name) {
            try {
                return \$this->getManager(\$name)->getConfiguration()->getEntityNamespace(\$alias);
            } catch (ORMException \$e) {
            }
        }

        throw ORMException::unknownEntityNamespace(\$alias);
    }

    public function reset() : void
    {
        foreach (\$this->getManagerNames() as \$managerName => \$serviceId) {
            \$this->resetOrClearManager(\$managerName, \$serviceId);
        }
    }

    private function resetOrClearManager(string \$managerName, string \$serviceId) : void
    {
        if (! \$this->container->initialized(\$serviceId)) {
            return;
        }

        \$manager = \$this->container->get(\$serviceId);

        assert(\$manager instanceof EntityManagerInterface);

        if (! \$manager instanceof LazyLoadingInterface || \$manager->isOpen()) {
            \$manager->clear();

            return;
        }

        \$this->resetManager(\$managerName);
    }
}
", "@app/vendor/doctrine/doctrine-bundle/Registry.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\Registry.php");
    }
}
