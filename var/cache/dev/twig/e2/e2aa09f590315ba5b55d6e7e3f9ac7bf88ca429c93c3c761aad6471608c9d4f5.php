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

/* @app/vendor/symfony/doctrine-bridge/DependencyInjection/Security/UserProvider/EntityFactory.php */
class __TwigTemplate_27b43259606ad2e428b7c541cab92968a00daa8edccee92f5e32163a0a53cd20 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/DependencyInjection/Security/UserProvider/EntityFactory.php"));

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

namespace Symfony\\Bridge\\Doctrine\\DependencyInjection\\Security\\UserProvider;

use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\UserProvider\\UserProviderFactoryInterface;
use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * EntityFactory creates services for Doctrine user provider.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class EntityFactory implements UserProviderFactoryInterface
{
    private \$key;
    private \$providerId;

    public function __construct(string \$key, string \$providerId)
    {
        \$this->key = \$key;
        \$this->providerId = \$providerId;
    }

    public function create(ContainerBuilder \$container, string \$id, array \$config)
    {
        \$container
            ->setDefinition(\$id, new ChildDefinition(\$this->providerId))
            ->addArgument(\$config['class'])
            ->addArgument(\$config['property'])
            ->addArgument(\$config['manager_name'])
        ;
    }

    public function getKey()
    {
        return \$this->key;
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$node
            ->children()
                ->scalarNode('class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('property')->defaultNull()->end()
                ->scalarNode('manager_name')->defaultNull()->end()
            ->end()
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/DependencyInjection/Security/UserProvider/EntityFactory.php";
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

namespace Symfony\\Bridge\\Doctrine\\DependencyInjection\\Security\\UserProvider;

use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\UserProvider\\UserProviderFactoryInterface;
use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * EntityFactory creates services for Doctrine user provider.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class EntityFactory implements UserProviderFactoryInterface
{
    private \$key;
    private \$providerId;

    public function __construct(string \$key, string \$providerId)
    {
        \$this->key = \$key;
        \$this->providerId = \$providerId;
    }

    public function create(ContainerBuilder \$container, string \$id, array \$config)
    {
        \$container
            ->setDefinition(\$id, new ChildDefinition(\$this->providerId))
            ->addArgument(\$config['class'])
            ->addArgument(\$config['property'])
            ->addArgument(\$config['manager_name'])
        ;
    }

    public function getKey()
    {
        return \$this->key;
    }

    public function addConfiguration(NodeDefinition \$node)
    {
        \$node
            ->children()
                ->scalarNode('class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('property')->defaultNull()->end()
                ->scalarNode('manager_name')->defaultNull()->end()
            ->end()
        ;
    }
}
", "@app/vendor/symfony/doctrine-bridge/DependencyInjection/Security/UserProvider/EntityFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\DependencyInjection\\Security\\UserProvider\\EntityFactory.php");
    }
}
