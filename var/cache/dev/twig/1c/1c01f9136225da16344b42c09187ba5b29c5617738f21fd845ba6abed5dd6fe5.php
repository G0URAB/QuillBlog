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

/* @app/vendor/symfony/doctrine-bridge/Test/DoctrineTestHelper.php */
class __TwigTemplate_45db528edf7bcb1a651b2c1bc5fdc83f1b2e69dd875eedcb25ca69bf63d4a313 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Test/DoctrineTestHelper.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Test;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use Doctrine\\Common\\Cache\\ArrayCache;
use Doctrine\\ORM\\Configuration;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver;
use Doctrine\\ORM\\Mapping\\Driver\\XmlDriver;
use Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain;
use Doctrine\\Persistence\\Mapping\\Driver\\SymfonyFileLocator;
use PHPUnit\\Framework\\TestCase;

/**
 * Provides utility functions needed in tests.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DoctrineTestHelper
{
    /**
     * Returns an entity manager for testing.
     *
     * @return EntityManager
     */
    public static function createTestEntityManager(Configuration \$config = null)
    {
        if (!\\extension_loaded('pdo_sqlite')) {
            TestCase::markTestSkipped('Extension pdo_sqlite is required.');
        }

        if (null === \$config) {
            \$config = self::createTestConfiguration();
        }

        \$params = [
            'driver' => 'pdo_sqlite',
            'memory' => true,
        ];

        return EntityManager::create(\$params, \$config);
    }

    /**
     * @return Configuration
     */
    public static function createTestConfiguration()
    {
        \$config = new Configuration();
        \$config->setEntityNamespaces(['SymfonyTestsDoctrine' => 'Symfony\\Bridge\\Doctrine\\Tests\\Fixtures']);
        \$config->setAutoGenerateProxyClasses(true);
        \$config->setProxyDir(sys_get_temp_dir());
        \$config->setProxyNamespace('SymfonyTests\\Doctrine');
        \$config->setMetadataDriverImpl(new AnnotationDriver(new AnnotationReader()));
        \$config->setQueryCacheImpl(new ArrayCache());
        \$config->setMetadataCacheImpl(new ArrayCache());

        return \$config;
    }

    /**
     * @return Configuration
     */
    public static function createTestConfigurationWithXmlLoader()
    {
        \$config = static::createTestConfiguration();

        \$driverChain = new MappingDriverChain();
        \$driverChain->addDriver(
            new XmlDriver(
                new SymfonyFileLocator(
                    [__DIR__.'/../Tests/Resources/orm' => 'Symfony\\\\Bridge\\\\Doctrine\\\\Tests\\\\Fixtures'], '.orm.xml'
                )
            ),
            'Symfony\\\\Bridge\\\\Doctrine\\\\Tests\\\\Fixtures'
        );

        \$config->setMetadataDriverImpl(\$driverChain);

        return \$config;
    }

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Test/DoctrineTestHelper.php";
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

namespace Symfony\\Bridge\\Doctrine\\Test;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use Doctrine\\Common\\Cache\\ArrayCache;
use Doctrine\\ORM\\Configuration;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver;
use Doctrine\\ORM\\Mapping\\Driver\\XmlDriver;
use Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain;
use Doctrine\\Persistence\\Mapping\\Driver\\SymfonyFileLocator;
use PHPUnit\\Framework\\TestCase;

/**
 * Provides utility functions needed in tests.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DoctrineTestHelper
{
    /**
     * Returns an entity manager for testing.
     *
     * @return EntityManager
     */
    public static function createTestEntityManager(Configuration \$config = null)
    {
        if (!\\extension_loaded('pdo_sqlite')) {
            TestCase::markTestSkipped('Extension pdo_sqlite is required.');
        }

        if (null === \$config) {
            \$config = self::createTestConfiguration();
        }

        \$params = [
            'driver' => 'pdo_sqlite',
            'memory' => true,
        ];

        return EntityManager::create(\$params, \$config);
    }

    /**
     * @return Configuration
     */
    public static function createTestConfiguration()
    {
        \$config = new Configuration();
        \$config->setEntityNamespaces(['SymfonyTestsDoctrine' => 'Symfony\\Bridge\\Doctrine\\Tests\\Fixtures']);
        \$config->setAutoGenerateProxyClasses(true);
        \$config->setProxyDir(sys_get_temp_dir());
        \$config->setProxyNamespace('SymfonyTests\\Doctrine');
        \$config->setMetadataDriverImpl(new AnnotationDriver(new AnnotationReader()));
        \$config->setQueryCacheImpl(new ArrayCache());
        \$config->setMetadataCacheImpl(new ArrayCache());

        return \$config;
    }

    /**
     * @return Configuration
     */
    public static function createTestConfigurationWithXmlLoader()
    {
        \$config = static::createTestConfiguration();

        \$driverChain = new MappingDriverChain();
        \$driverChain->addDriver(
            new XmlDriver(
                new SymfonyFileLocator(
                    [__DIR__.'/../Tests/Resources/orm' => 'Symfony\\\\Bridge\\\\Doctrine\\\\Tests\\\\Fixtures'], '.orm.xml'
                )
            ),
            'Symfony\\\\Bridge\\\\Doctrine\\\\Tests\\\\Fixtures'
        );

        \$config->setMetadataDriverImpl(\$driverChain);

        return \$config;
    }

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
", "@app/vendor/symfony/doctrine-bridge/Test/DoctrineTestHelper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Test\\DoctrineTestHelper.php");
    }
}
