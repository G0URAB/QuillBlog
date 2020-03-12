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

/* @app/vendor/composer/installed.json */
class __TwigTemplate_edadbe25bc5defe682adeaff617ed44af58a88aaeabc196070f9181079781d1f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/composer/installed.json"));

        // line 1
        echo "[
    {
        \"name\": \"doctrine/annotations\",
        \"version\": \"v1.8.0\",
        \"version_normalized\": \"1.8.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/annotations.git\",
            \"reference\": \"904dca4eb10715b92569fbcd79e201d5c349b6bc\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/904dca4eb10715b92569fbcd79e201d5c349b6bc\",
            \"reference\": \"904dca4eb10715b92569fbcd79e201d5c349b6bc\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/lexer\": \"1.*\",
            \"php\": \"^7.1\"
        },
        \"require-dev\": {
            \"doctrine/cache\": \"1.*\",
            \"phpunit/phpunit\": \"^7.5\"
        },
        \"time\": \"2019-10-01T18:55:10+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.7.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\Annotations\\\\\": \"lib/Doctrine/Common/Annotations\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            }
        ],
        \"description\": \"Docblock Annotations Parser\",
        \"homepage\": \"http://www.doctrine-project.org\",
        \"keywords\": [
            \"annotations\",
            \"docblock\",
            \"parser\"
        ]
    },
    {
        \"name\": \"doctrine/cache\",
        \"version\": \"1.10.0\",
        \"version_normalized\": \"1.10.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/cache.git\",
            \"reference\": \"382e7f4db9a12dc6c19431743a2b096041bcdd62\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/382e7f4db9a12dc6c19431743a2b096041bcdd62\",
            \"reference\": \"382e7f4db9a12dc6c19431743a2b096041bcdd62\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"~7.1\"
        },
        \"conflict\": {
            \"doctrine/common\": \">2.2,<2.4\"
        },
        \"require-dev\": {
            \"alcaeus/mongo-php-adapter\": \"^1.1\",
            \"doctrine/coding-standard\": \"^6.0\",
            \"mongodb/mongodb\": \"^1.1\",
            \"phpunit/phpunit\": \"^7.0\",
            \"predis/predis\": \"~1.0\"
        },
        \"suggest\": {
            \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
        },
        \"time\": \"2019-11-29T15:36:20+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.9.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\Cache\\\\\": \"lib/Doctrine/Common/Cache\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            }
        ],
        \"description\": \"PHP Doctrine Cache library is a popular cache implementation that supports many different drivers such as redis, memcache, apc, mongodb and others.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/cache.html\",
        \"keywords\": [
            \"abstraction\",
            \"apcu\",
            \"cache\",
            \"caching\",
            \"couchdb\",
            \"memcached\",
            \"php\",
            \"redis\",
            \"xcache\"
        ]
    },
    {
        \"name\": \"doctrine/collections\",
        \"version\": \"1.6.4\",
        \"version_normalized\": \"1.6.4.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/collections.git\",
            \"reference\": \"6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/collections/zipball/6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7\",
            \"reference\": \"6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1.3\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"phpstan/phpstan-shim\": \"^0.9.2\",
            \"phpunit/phpunit\": \"^7.0\",
            \"vimeo/psalm\": \"^3.2.2\"
        },
        \"time\": \"2019-11-13T13:07:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.6.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\Collections\\\\\": \"lib/Doctrine/Common/Collections\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            }
        ],
        \"description\": \"PHP Doctrine Collections library that adds additional functionality on top of PHP arrays.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/collections.html\",
        \"keywords\": [
            \"array\",
            \"collections\",
            \"iterators\",
            \"php\"
        ]
    },
    {
        \"name\": \"doctrine/common\",
        \"version\": \"2.12.0\",
        \"version_normalized\": \"2.12.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/common.git\",
            \"reference\": \"2053eafdf60c2172ee1373d1b9289ba1db7f1fc6\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/common/zipball/2053eafdf60c2172ee1373d1b9289ba1db7f1fc6\",
            \"reference\": \"2053eafdf60c2172ee1373d1b9289ba1db7f1fc6\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/annotations\": \"^1.0\",
            \"doctrine/cache\": \"^1.0\",
            \"doctrine/collections\": \"^1.0\",
            \"doctrine/event-manager\": \"^1.0\",
            \"doctrine/inflector\": \"^1.0\",
            \"doctrine/lexer\": \"^1.0\",
            \"doctrine/persistence\": \"^1.1\",
            \"doctrine/reflection\": \"^1.0\",
            \"php\": \"^7.1\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^1.0\",
            \"phpstan/phpstan\": \"^0.11\",
            \"phpstan/phpstan-phpunit\": \"^0.11\",
            \"phpunit/phpunit\": \"^7.0\",
            \"squizlabs/php_codesniffer\": \"^3.0\",
            \"symfony/phpunit-bridge\": \"^4.0.5\"
        },
        \"time\": \"2020-01-10T15:49:25+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.11.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            },
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"PHP Doctrine Common project is a library that provides additional functionality that other Doctrine projects depend on such as better reflection support, persistence interfaces, proxies, event system and much more.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/common.html\",
        \"keywords\": [
            \"common\",
            \"doctrine\",
            \"php\"
        ]
    },
    {
        \"name\": \"doctrine/dbal\",
        \"version\": \"v2.10.1\",
        \"version_normalized\": \"2.10.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/dbal.git\",
            \"reference\": \"c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/dbal/zipball/c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8\",
            \"reference\": \"c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/cache\": \"^1.0\",
            \"doctrine/event-manager\": \"^1.0\",
            \"ext-pdo\": \"*\",
            \"php\": \"^7.2\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"jetbrains/phpstorm-stubs\": \"^2019.1\",
            \"phpstan/phpstan\": \"^0.11.3\",
            \"phpunit/phpunit\": \"^8.4.1\",
            \"symfony/console\": \"^2.0.5|^3.0|^4.0|^5.0\"
        },
        \"suggest\": {
            \"symfony/console\": \"For helpful console commands such as SQL execution and import of files.\"
        },
        \"time\": \"2020-01-04T12:56:21+00:00\",
        \"bin\": [
            \"bin/doctrine-dbal\"
        ],
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.10.x-dev\",
                \"dev-develop\": \"3.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\DBAL\\\\\": \"lib/Doctrine/DBAL\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            }
        ],
        \"description\": \"Powerful PHP database abstraction layer (DBAL) with many features for database schema introspection and management.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/dbal.html\",
        \"keywords\": [
            \"abstraction\",
            \"database\",
            \"db2\",
            \"dbal\",
            \"mariadb\",
            \"mssql\",
            \"mysql\",
            \"oci8\",
            \"oracle\",
            \"pdo\",
            \"pgsql\",
            \"postgresql\",
            \"queryobject\",
            \"sasql\",
            \"sql\",
            \"sqlanywhere\",
            \"sqlite\",
            \"sqlserver\",
            \"sqlsrv\"
        ]
    },
    {
        \"name\": \"doctrine/doctrine-bundle\",
        \"version\": \"2.0.7\",
        \"version_normalized\": \"2.0.7.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/DoctrineBundle.git\",
            \"reference\": \"6926771140ee87a823c3b2c72602de9dda4490d3\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/DoctrineBundle/zipball/6926771140ee87a823c3b2c72602de9dda4490d3\",
            \"reference\": \"6926771140ee87a823c3b2c72602de9dda4490d3\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/dbal\": \"^2.9.0\",
            \"doctrine/persistence\": \"^1.3.3\",
            \"jdorn/sql-formatter\": \"^1.2.16\",
            \"php\": \"^7.1\",
            \"symfony/cache\": \"^4.3.3|^5.0\",
            \"symfony/config\": \"^4.3.3|^5.0\",
            \"symfony/console\": \"^3.4.30|^4.3.3|^5.0\",
            \"symfony/dependency-injection\": \"^4.3.3|^5.0\",
            \"symfony/doctrine-bridge\": \"^4.3.7|^5.0\",
            \"symfony/framework-bundle\": \"^3.4.30|^4.3.3|^5.0\",
            \"symfony/service-contracts\": \"^1.1.1|^2.0\"
        },
        \"conflict\": {
            \"doctrine/orm\": \"<2.6\",
            \"twig/twig\": \"<1.34|>=2.0,<2.4\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"doctrine/orm\": \"^2.6\",
            \"ocramius/proxy-manager\": \"^2.1\",
            \"phpunit/phpunit\": \"^7.5\",
            \"symfony/phpunit-bridge\": \"^4.2\",
            \"symfony/property-info\": \"^4.3.3|^5.0\",
            \"symfony/proxy-manager-bridge\": \"^3.4|^4.3.3|^5.0\",
            \"symfony/twig-bridge\": \"^3.4.30|^4.3.3|^5.0\",
            \"symfony/validator\": \"^3.4.30|^4.3.3|^5.0\",
            \"symfony/web-profiler-bundle\": \"^3.4.30|^4.3.3|^5.0\",
            \"symfony/yaml\": \"^3.4.30|^4.3.3|^5.0\",
            \"twig/twig\": \"^1.34|^2.12\"
        },
        \"suggest\": {
            \"doctrine/orm\": \"The Doctrine ORM integration is optional in the bundle.\",
            \"symfony/web-profiler-bundle\": \"To use the data collector.\"
        },
        \"time\": \"2020-01-18T11:56:15+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Bundle\\\\DoctrineBundle\\\\\": \"\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"http://symfony.com/contributors\"
            },
            {
                \"name\": \"Doctrine Project\",
                \"homepage\": \"http://www.doctrine-project.org/\"
            }
        ],
        \"description\": \"Symfony DoctrineBundle\",
        \"homepage\": \"http://www.doctrine-project.org\",
        \"keywords\": [
            \"database\",
            \"dbal\",
            \"orm\",
            \"persistence\"
        ]
    },
    {
        \"name\": \"doctrine/doctrine-migrations-bundle\",
        \"version\": \"2.1.2\",
        \"version_normalized\": \"2.1.2.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/DoctrineMigrationsBundle.git\",
            \"reference\": \"856437e8de96a70233e1f0cc2352fc8dd15a899d\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/DoctrineMigrationsBundle/zipball/856437e8de96a70233e1f0cc2352fc8dd15a899d\",
            \"reference\": \"856437e8de96a70233e1f0cc2352fc8dd15a899d\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/doctrine-bundle\": \"~1.0|~2.0\",
            \"doctrine/migrations\": \"^2.2\",
            \"php\": \"^7.1\",
            \"symfony/framework-bundle\": \"~3.4|~4.0|~5.0\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^5.0\",
            \"mikey179/vfsstream\": \"^1.6\",
            \"phpstan/phpstan\": \"^0.9.2\",
            \"phpstan/phpstan-strict-rules\": \"^0.9\",
            \"phpunit/phpunit\": \"^6.4|^7.0\"
        },
        \"time\": \"2019-11-13T12:57:41+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.1.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Doctrine Project\",
                \"homepage\": \"http://www.doctrine-project.org\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"http://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony DoctrineMigrationsBundle\",
        \"homepage\": \"https://www.doctrine-project.org\",
        \"keywords\": [
            \"dbal\",
            \"migrations\",
            \"schema\"
        ]
    },
    {
        \"name\": \"doctrine/event-manager\",
        \"version\": \"1.1.0\",
        \"version_normalized\": \"1.1.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/event-manager.git\",
            \"reference\": \"629572819973f13486371cb611386eb17851e85c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/event-manager/zipball/629572819973f13486371cb611386eb17851e85c\",
            \"reference\": \"629572819973f13486371cb611386eb17851e85c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1\"
        },
        \"conflict\": {
            \"doctrine/common\": \"<2.9@dev\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"phpunit/phpunit\": \"^7.0\"
        },
        \"time\": \"2019-11-10T09:48:07+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            },
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"The Doctrine Event Manager is a simple PHP event system that was built to be used with the various Doctrine projects.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/event-manager.html\",
        \"keywords\": [
            \"event\",
            \"event dispatcher\",
            \"event manager\",
            \"event system\",
            \"events\"
        ]
    },
    {
        \"name\": \"doctrine/inflector\",
        \"version\": \"1.3.1\",
        \"version_normalized\": \"1.3.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/inflector.git\",
            \"reference\": \"ec3a55242203ffa6a4b27c58176da97ff0a7aec1\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/inflector/zipball/ec3a55242203ffa6a4b27c58176da97ff0a7aec1\",
            \"reference\": \"ec3a55242203ffa6a4b27c58176da97ff0a7aec1\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1\"
        },
        \"require-dev\": {
            \"phpunit/phpunit\": \"^6.2\"
        },
        \"time\": \"2019-10-30T19:59:35+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.3.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\Inflector\\\\\": \"lib/Doctrine/Common/Inflector\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            }
        ],
        \"description\": \"Common String Manipulations with regard to casing and singular/plural rules.\",
        \"homepage\": \"http://www.doctrine-project.org\",
        \"keywords\": [
            \"inflection\",
            \"pluralize\",
            \"singularize\",
            \"string\"
        ]
    },
    {
        \"name\": \"doctrine/instantiator\",
        \"version\": \"1.3.0\",
        \"version_normalized\": \"1.3.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/instantiator.git\",
            \"reference\": \"ae466f726242e637cebdd526a7d991b9433bacf1\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/instantiator/zipball/ae466f726242e637cebdd526a7d991b9433bacf1\",
            \"reference\": \"ae466f726242e637cebdd526a7d991b9433bacf1\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"ext-pdo\": \"*\",
            \"ext-phar\": \"*\",
            \"phpbench/phpbench\": \"^0.13\",
            \"phpstan/phpstan-phpunit\": \"^0.11\",
            \"phpstan/phpstan-shim\": \"^0.11\",
            \"phpunit/phpunit\": \"^7.0\"
        },
        \"time\": \"2019-10-21T16:45:58+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.2.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Instantiator\\\\\": \"src/Doctrine/Instantiator/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\",
                \"homepage\": \"http://ocramius.github.com/\"
            }
        ],
        \"description\": \"A small, lightweight utility to instantiate objects in PHP without invoking their constructors\",
        \"homepage\": \"https://www.doctrine-project.org/projects/instantiator.html\",
        \"keywords\": [
            \"constructor\",
            \"instantiate\"
        ]
    },
    {
        \"name\": \"doctrine/lexer\",
        \"version\": \"1.2.0\",
        \"version_normalized\": \"1.2.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/lexer.git\",
            \"reference\": \"5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6\",
            \"reference\": \"5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"phpstan/phpstan\": \"^0.11.8\",
            \"phpunit/phpunit\": \"^8.2\"
        },
        \"time\": \"2019-10-30T14:39:59+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.2.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/Doctrine/Common/Lexer\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            }
        ],
        \"description\": \"PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/lexer.html\",
        \"keywords\": [
            \"annotations\",
            \"docblock\",
            \"lexer\",
            \"parser\",
            \"php\"
        ]
    },
    {
        \"name\": \"doctrine/migrations\",
        \"version\": \"2.2.1\",
        \"version_normalized\": \"2.2.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/migrations.git\",
            \"reference\": \"a3987131febeb0e9acb3c47ab0df0af004588934\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/migrations/zipball/a3987131febeb0e9acb3c47ab0df0af004588934\",
            \"reference\": \"a3987131febeb0e9acb3c47ab0df0af004588934\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/dbal\": \"^2.9\",
            \"ocramius/package-versions\": \"^1.3\",
            \"ocramius/proxy-manager\": \"^2.0.2\",
            \"php\": \"^7.1\",
            \"symfony/console\": \"^3.4||^4.0||^5.0\",
            \"symfony/stopwatch\": \"^3.4||^4.0||^5.0\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"doctrine/orm\": \"^2.6\",
            \"ext-pdo_sqlite\": \"*\",
            \"jdorn/sql-formatter\": \"^1.1\",
            \"mikey179/vfsstream\": \"^1.6\",
            \"phpstan/phpstan\": \"^0.10\",
            \"phpstan/phpstan-deprecation-rules\": \"^0.10\",
            \"phpstan/phpstan-phpunit\": \"^0.10\",
            \"phpstan/phpstan-strict-rules\": \"^0.10\",
            \"phpunit/phpunit\": \"^7.0\",
            \"symfony/process\": \"^3.4||^4.0||^5.0\",
            \"symfony/yaml\": \"^3.4||^4.0||^5.0\"
        },
        \"suggest\": {
            \"jdorn/sql-formatter\": \"Allows to generate formatted SQL with the diff command.\",
            \"symfony/yaml\": \"Allows the use of yaml for migration configuration files.\"
        },
        \"time\": \"2019-12-04T06:09:14+00:00\",
        \"bin\": [
            \"bin/doctrine-migrations\"
        ],
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.2.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Migrations\\\\\": \"lib/Doctrine/Migrations\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Michael Simonson\",
                \"email\": \"contact@mikesimonson.com\"
            }
        ],
        \"description\": \"PHP Doctrine Migrations project offer additional functionality on top of the database abstraction layer (DBAL) for versioning your database schema and easily deploying changes to it. It is a very easy to use and a powerful tool.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/migrations.html\",
        \"keywords\": [
            \"database\",
            \"dbal\",
            \"migrations\",
            \"php\"
        ]
    },
    {
        \"name\": \"doctrine/orm\",
        \"version\": \"v2.7.1\",
        \"version_normalized\": \"2.7.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/orm.git\",
            \"reference\": \"445796af0e873d9bd04f2502d322a7d5009b6846\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/orm/zipball/445796af0e873d9bd04f2502d322a7d5009b6846\",
            \"reference\": \"445796af0e873d9bd04f2502d322a7d5009b6846\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/annotations\": \"^1.8\",
            \"doctrine/cache\": \"^1.9.1\",
            \"doctrine/collections\": \"^1.5\",
            \"doctrine/common\": \"^2.11\",
            \"doctrine/dbal\": \"^2.9.3\",
            \"doctrine/event-manager\": \"^1.1\",
            \"doctrine/instantiator\": \"^1.3\",
            \"doctrine/persistence\": \"^1.2\",
            \"ext-pdo\": \"*\",
            \"ocramius/package-versions\": \"^1.2\",
            \"php\": \"^7.1\",
            \"symfony/console\": \"^3.0|^4.0|^5.0\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^5.0\",
            \"phpunit/phpunit\": \"^7.5\",
            \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
        },
        \"suggest\": {
            \"symfony/yaml\": \"If you want to use YAML Metadata Mapping Driver\"
        },
        \"time\": \"2020-02-15T14:35:56+00:00\",
        \"bin\": [
            \"bin/doctrine\"
        ],
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.7.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\ORM\\\\\": \"lib/Doctrine/ORM\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"Object-Relational-Mapper for PHP\",
        \"homepage\": \"https://www.doctrine-project.org/projects/orm.html\",
        \"keywords\": [
            \"database\",
            \"orm\"
        ]
    },
    {
        \"name\": \"doctrine/persistence\",
        \"version\": \"1.3.6\",
        \"version_normalized\": \"1.3.6.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/persistence.git\",
            \"reference\": \"5dd3ac5eebef2d0b074daa4440bb18f93132dee4\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/persistence/zipball/5dd3ac5eebef2d0b074daa4440bb18f93132dee4\",
            \"reference\": \"5dd3ac5eebef2d0b074daa4440bb18f93132dee4\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/annotations\": \"^1.0\",
            \"doctrine/cache\": \"^1.0\",
            \"doctrine/collections\": \"^1.0\",
            \"doctrine/event-manager\": \"^1.0\",
            \"doctrine/reflection\": \"^1.1\",
            \"php\": \"^7.1\"
        },
        \"conflict\": {
            \"doctrine/common\": \"<2.10@dev\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"phpstan/phpstan\": \"^0.11\",
            \"phpunit/phpunit\": \"^7.0\"
        },
        \"time\": \"2020-01-16T22:06:23+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.3.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\",
                \"Doctrine\\\\Persistence\\\\\": \"lib/Doctrine/Persistence\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            },
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"The Doctrine Persistence project is a set of shared interfaces and functionality that the different Doctrine object mappers share.\",
        \"homepage\": \"https://doctrine-project.org/projects/persistence.html\",
        \"keywords\": [
            \"mapper\",
            \"object\",
            \"odm\",
            \"orm\",
            \"persistence\"
        ]
    },
    {
        \"name\": \"doctrine/reflection\",
        \"version\": \"v1.1.0\",
        \"version_normalized\": \"1.1.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/reflection.git\",
            \"reference\": \"bc420ead87fdfe08c03ecc3549db603a45b06d4c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/reflection/zipball/bc420ead87fdfe08c03ecc3549db603a45b06d4c\",
            \"reference\": \"bc420ead87fdfe08c03ecc3549db603a45b06d4c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/annotations\": \"^1.0\",
            \"ext-tokenizer\": \"*\",
            \"php\": \"^7.1\"
        },
        \"conflict\": {
            \"doctrine/common\": \"<2.9\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^5.0\",
            \"doctrine/common\": \"^2.10\",
            \"phpstan/phpstan\": \"^0.11.0\",
            \"phpstan/phpstan-phpunit\": \"^0.11.0\",
            \"phpunit/phpunit\": \"^7.0\"
        },
        \"time\": \"2020-01-08T19:53:19+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            },
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"The Doctrine Reflection project is a simple library used by the various Doctrine projects which adds some additional functionality on top of the reflection functionality that comes with PHP. It allows you to get the reflection information about classes, methods and properties statically.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/reflection.html\",
        \"keywords\": [
            \"reflection\",
            \"static\"
        ]
    },
    {
        \"name\": \"jdorn/sql-formatter\",
        \"version\": \"v1.2.17\",
        \"version_normalized\": \"1.2.17.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/jdorn/sql-formatter.git\",
            \"reference\": \"64990d96e0959dff8e059dfcdc1af130728d92bc\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/jdorn/sql-formatter/zipball/64990d96e0959dff8e059dfcdc1af130728d92bc\",
            \"reference\": \"64990d96e0959dff8e059dfcdc1af130728d92bc\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.2.4\"
        },
        \"require-dev\": {
            \"phpunit/phpunit\": \"3.7.*\"
        },
        \"time\": \"2014-01-12T16:20:24+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.3.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"classmap\": [
                \"lib\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Jeremy Dorn\",
                \"email\": \"jeremy@jeremydorn.com\",
                \"homepage\": \"http://jeremydorn.com/\"
            }
        ],
        \"description\": \"a PHP SQL highlighting library\",
        \"homepage\": \"https://github.com/jdorn/sql-formatter/\",
        \"keywords\": [
            \"highlight\",
            \"sql\"
        ]
    },
    {
        \"name\": \"nikic/php-parser\",
        \"version\": \"v4.3.0\",
        \"version_normalized\": \"4.3.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/nikic/PHP-Parser.git\",
            \"reference\": \"9a9981c347c5c49d6dfe5cf826bb882b824080dc\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/9a9981c347c5c49d6dfe5cf826bb882b824080dc\",
            \"reference\": \"9a9981c347c5c49d6dfe5cf826bb882b824080dc\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"ext-tokenizer\": \"*\",
            \"php\": \">=7.0\"
        },
        \"require-dev\": {
            \"ircmaxell/php-yacc\": \"0.0.5\",
            \"phpunit/phpunit\": \"^6.5 || ^7.0 || ^8.0\"
        },
        \"time\": \"2019-11-08T13:50:10+00:00\",
        \"bin\": [
            \"bin/php-parse\"
        ],
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"4.3-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"PhpParser\\\\\": \"lib/PhpParser\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"BSD-3-Clause\"
        ],
        \"authors\": [
            {
                \"name\": \"Nikita Popov\"
            }
        ],
        \"description\": \"A PHP parser written in PHP\",
        \"keywords\": [
            \"parser\",
            \"php\"
        ]
    },
    {
        \"name\": \"ocramius/package-versions\",
        \"version\": \"1.5.1\",
        \"version_normalized\": \"1.5.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/Ocramius/PackageVersions.git\",
            \"reference\": \"1d32342b8c1eb27353c8887c366147b4c2da673c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/Ocramius/PackageVersions/zipball/1d32342b8c1eb27353c8887c366147b4c2da673c\",
            \"reference\": \"1d32342b8c1eb27353c8887c366147b4c2da673c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"composer-plugin-api\": \"^1.0.0\",
            \"php\": \"^7.3.0\"
        },
        \"require-dev\": {
            \"composer/composer\": \"^1.8.6\",
            \"doctrine/coding-standard\": \"^6.0.0\",
            \"ext-zip\": \"*\",
            \"infection/infection\": \"^0.13.4\",
            \"phpunit/phpunit\": \"^8.2.5\",
            \"vimeo/psalm\": \"^3.4.9\"
        },
        \"time\": \"2019-07-17T15:49:50+00:00\",
        \"type\": \"composer-plugin\",
        \"extra\": {
            \"class\": \"PackageVersions\\\\Installer\",
            \"branch-alias\": {
                \"dev-master\": \"1.6.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"PackageVersions\\\\\": \"src/PackageVersions\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"Composer plugin that provides efficient querying for installed package versions (no runtime IO)\"
    },
    {
        \"name\": \"ocramius/proxy-manager\",
        \"version\": \"2.2.3\",
        \"version_normalized\": \"2.2.3.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/Ocramius/ProxyManager.git\",
            \"reference\": \"4d154742e31c35137d5374c998e8f86b54db2e2f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/Ocramius/ProxyManager/zipball/4d154742e31c35137d5374c998e8f86b54db2e2f\",
            \"reference\": \"4d154742e31c35137d5374c998e8f86b54db2e2f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"ocramius/package-versions\": \"^1.1.3\",
            \"php\": \"^7.2.0\",
            \"zendframework/zend-code\": \"^3.3.0\"
        },
        \"require-dev\": {
            \"couscous/couscous\": \"^1.6.1\",
            \"ext-phar\": \"*\",
            \"humbug/humbug\": \"1.0.0-RC.0@RC\",
            \"nikic/php-parser\": \"^3.1.1\",
            \"padraic/phpunit-accelerator\": \"dev-master@DEV\",
            \"phpbench/phpbench\": \"^0.12.2\",
            \"phpstan/phpstan\": \"dev-master#856eb10a81c1d27c701a83f167dc870fd8f4236a as 0.9.999\",
            \"phpstan/phpstan-phpunit\": \"dev-master#5629c0a1f4a9c417cb1077cf6693ad9753895761\",
            \"phpunit/phpunit\": \"^6.4.3\",
            \"squizlabs/php_codesniffer\": \"^2.9.1\"
        },
        \"suggest\": {
            \"ocramius/generated-hydrator\": \"To have very fast object to array to object conversion for ghost objects\",
            \"zendframework/zend-json\": \"To have the JsonRpc adapter (Remote Object feature)\",
            \"zendframework/zend-soap\": \"To have the Soap adapter (Remote Object feature)\",
            \"zendframework/zend-xmlrpc\": \"To have the XmlRpc adapter (Remote Object feature)\"
        },
        \"time\": \"2019-08-10T08:37:15+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"3.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-0\": {
                \"ProxyManager\\\\\": \"src\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\",
                \"homepage\": \"http://ocramius.github.io/\"
            }
        ],
        \"description\": \"A library providing utilities to generate, instantiate and generally operate with Object Proxies\",
        \"homepage\": \"https://github.com/Ocramius/ProxyManager\",
        \"keywords\": [
            \"aop\",
            \"lazy loading\",
            \"proxy\",
            \"proxy pattern\",
            \"service proxies\"
        ]
    },
    {
        \"name\": \"psr/cache\",
        \"version\": \"1.0.1\",
        \"version_normalized\": \"1.0.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/php-fig/cache.git\",
            \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/php-fig/cache/zipball/d11b50ad223250cf17b86e38383413f5a6764bf8\",
            \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.0\"
        },
        \"time\": \"2016-08-06T20:24:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Psr\\\\Cache\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"PHP-FIG\",
                \"homepage\": \"http://www.php-fig.org/\"
            }
        ],
        \"description\": \"Common interface for caching libraries\",
        \"keywords\": [
            \"cache\",
            \"psr\",
            \"psr-6\"
        ]
    },
    {
        \"name\": \"psr/container\",
        \"version\": \"1.0.0\",
        \"version_normalized\": \"1.0.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/php-fig/container.git\",
            \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/php-fig/container/zipball/b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
            \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.0\"
        },
        \"time\": \"2017-02-14T16:28:37+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Psr\\\\Container\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"PHP-FIG\",
                \"homepage\": \"http://www.php-fig.org/\"
            }
        ],
        \"description\": \"Common Container Interface (PHP FIG PSR-11)\",
        \"homepage\": \"https://github.com/php-fig/container\",
        \"keywords\": [
            \"PSR-11\",
            \"container\",
            \"container-interface\",
            \"container-interop\",
            \"psr\"
        ]
    },
    {
        \"name\": \"psr/event-dispatcher\",
        \"version\": \"1.0.0\",
        \"version_normalized\": \"1.0.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/php-fig/event-dispatcher.git\",
            \"reference\": \"dbefd12671e8a14ec7f180cab83036ed26714bb0\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/php-fig/event-dispatcher/zipball/dbefd12671e8a14ec7f180cab83036ed26714bb0\",
            \"reference\": \"dbefd12671e8a14ec7f180cab83036ed26714bb0\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=7.2.0\"
        },
        \"time\": \"2019-01-08T18:20:26+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Psr\\\\EventDispatcher\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"PHP-FIG\",
                \"homepage\": \"http://www.php-fig.org/\"
            }
        ],
        \"description\": \"Standard interfaces for event handling.\",
        \"keywords\": [
            \"events\",
            \"psr\",
            \"psr-14\"
        ]
    },
    {
        \"name\": \"psr/log\",
        \"version\": \"1.1.2\",
        \"version_normalized\": \"1.1.2.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/php-fig/log.git\",
            \"reference\": \"446d54b4cb6bf489fc9d75f55843658e6f25d801\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/php-fig/log/zipball/446d54b4cb6bf489fc9d75f55843658e6f25d801\",
            \"reference\": \"446d54b4cb6bf489fc9d75f55843658e6f25d801\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.0\"
        },
        \"time\": \"2019-11-01T11:05:21+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.1.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Psr\\\\Log\\\\\": \"Psr/Log/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"PHP-FIG\",
                \"homepage\": \"http://www.php-fig.org/\"
            }
        ],
        \"description\": \"Common interface for logging libraries\",
        \"homepage\": \"https://github.com/php-fig/log\",
        \"keywords\": [
            \"log\",
            \"psr\",
            \"psr-3\"
        ]
    },
    {
        \"name\": \"symfony/asset\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/asset.git\",
            \"reference\": \"b9d7f8609849c71e79a0702fdaa453c1329b0c2c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/asset/zipball/b9d7f8609849c71e79a0702fdaa453c1329b0c2c\",
            \"reference\": \"b9d7f8609849c71e79a0702fdaa453c1329b0c2c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"require-dev\": {
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/http-kernel\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"symfony/http-foundation\": \"\"
        },
        \"time\": \"2020-02-24T15:05:31+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Asset\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Asset Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/cache\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/cache.git\",
            \"reference\": \"c6255e419e8592dab7de6e29b014ae9e8926989a\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/cache/zipball/c6255e419e8592dab7de6e29b014ae9e8926989a\",
            \"reference\": \"c6255e419e8592dab7de6e29b014ae9e8926989a\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/cache\": \"~1.0\",
            \"psr/log\": \"~1.0\",
            \"symfony/cache-contracts\": \"^1.1.7|^2\",
            \"symfony/service-contracts\": \"^1.1|^2\",
            \"symfony/var-exporter\": \"^4.4|^5.0\"
        },
        \"conflict\": {
            \"doctrine/dbal\": \"<2.5\",
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/http-kernel\": \"<4.4\",
            \"symfony/var-dumper\": \"<4.4\"
        },
        \"provide\": {
            \"psr/cache-implementation\": \"1.0\",
            \"psr/simple-cache-implementation\": \"1.0\",
            \"symfony/cache-implementation\": \"1.0\"
        },
        \"require-dev\": {
            \"cache/integration-tests\": \"dev-master\",
            \"doctrine/cache\": \"~1.6\",
            \"doctrine/dbal\": \"~2.5\",
            \"predis/predis\": \"~1.1\",
            \"psr/simple-cache\": \"^1.0\",
            \"symfony/config\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/var-dumper\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-24T15:05:31+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Cache\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Cache component with PSR-6, PSR-16, and tags\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"caching\",
            \"psr6\"
        ]
    },
    {
        \"name\": \"symfony/cache-contracts\",
        \"version\": \"v2.0.1\",
        \"version_normalized\": \"2.0.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/cache-contracts.git\",
            \"reference\": \"23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/cache-contracts/zipball/23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16\",
            \"reference\": \"23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/cache\": \"^1.0\"
        },
        \"suggest\": {
            \"symfony/cache-implementation\": \"\"
        },
        \"time\": \"2019-11-18T17:27:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Contracts\\\\Cache\\\\\": \"\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Generic abstractions related to caching\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"abstractions\",
            \"contracts\",
            \"decoupling\",
            \"interfaces\",
            \"interoperability\",
            \"standards\"
        ]
    },
    {
        \"name\": \"symfony/config\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/config.git\",
            \"reference\": \"938905f46df484b2aeae9016fd658aed577cdceb\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/config/zipball/938905f46df484b2aeae9016fd658aed577cdceb\",
            \"reference\": \"938905f46df484b2aeae9016fd658aed577cdceb\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/filesystem\": \"^4.4|^5.0\",
            \"symfony/polyfill-ctype\": \"~1.8\"
        },
        \"conflict\": {
            \"symfony/finder\": \"<4.4\"
        },
        \"require-dev\": {
            \"symfony/event-dispatcher\": \"^4.4|^5.0\",
            \"symfony/finder\": \"^4.4|^5.0\",
            \"symfony/messenger\": \"^4.4|^5.0\",
            \"symfony/service-contracts\": \"^1.1|^2\",
            \"symfony/yaml\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"symfony/yaml\": \"To use the yaml reference dumper\"
        },
        \"time\": \"2020-02-04T09:41:09+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Config\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Config Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/console\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/console.git\",
            \"reference\": \"d29e2d36941de13600c399e393a60b8cfe59ac49\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/console/zipball/d29e2d36941de13600c399e393a60b8cfe59ac49\",
            \"reference\": \"d29e2d36941de13600c399e393a60b8cfe59ac49\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-mbstring\": \"~1.0\",
            \"symfony/polyfill-php73\": \"^1.8\",
            \"symfony/service-contracts\": \"^1.1|^2\"
        },
        \"conflict\": {
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/event-dispatcher\": \"<4.4\",
            \"symfony/lock\": \"<4.4\",
            \"symfony/process\": \"<4.4\"
        },
        \"provide\": {
            \"psr/log-implementation\": \"1.0\"
        },
        \"require-dev\": {
            \"psr/log\": \"~1.0\",
            \"symfony/config\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/event-dispatcher\": \"^4.4|^5.0\",
            \"symfony/lock\": \"^4.4|^5.0\",
            \"symfony/process\": \"^4.4|^5.0\",
            \"symfony/var-dumper\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"psr/log\": \"For using the console logger\",
            \"symfony/event-dispatcher\": \"\",
            \"symfony/lock\": \"\",
            \"symfony/process\": \"\"
        },
        \"time\": \"2020-02-24T15:05:31+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Console\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Console Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/dependency-injection\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/dependency-injection.git\",
            \"reference\": \"3575004a9b0d51ead83473ec90121045b3a0b56f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/dependency-injection/zipball/3575004a9b0d51ead83473ec90121045b3a0b56f\",
            \"reference\": \"3575004a9b0d51ead83473ec90121045b3a0b56f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/container\": \"^1.0\",
            \"symfony/service-contracts\": \"^1.1.6|^2\"
        },
        \"conflict\": {
            \"symfony/config\": \"<5.0\",
            \"symfony/finder\": \"<4.4\",
            \"symfony/proxy-manager-bridge\": \"<4.4\",
            \"symfony/yaml\": \"<4.4\"
        },
        \"provide\": {
            \"psr/container-implementation\": \"1.0\",
            \"symfony/service-implementation\": \"1.0\"
        },
        \"require-dev\": {
            \"symfony/config\": \"^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/yaml\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"symfony/config\": \"\",
            \"symfony/expression-language\": \"For using expressions in service container configuration\",
            \"symfony/finder\": \"For using double-star glob patterns or when GLOB_BRACE portability is required\",
            \"symfony/proxy-manager-bridge\": \"Generate service proxies to lazy load them\",
            \"symfony/yaml\": \"\"
        },
        \"time\": \"2020-02-24T15:05:31+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\DependencyInjection\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony DependencyInjection Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/doctrine-bridge\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/doctrine-bridge.git\",
            \"reference\": \"671f9afc0294e1a2fa5661fc5b8e53dd0ec85b7b\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/doctrine-bridge/zipball/671f9afc0294e1a2fa5661fc5b8e53dd0ec85b7b\",
            \"reference\": \"671f9afc0294e1a2fa5661fc5b8e53dd0ec85b7b\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/event-manager\": \"~1.0\",
            \"doctrine/persistence\": \"^1.3\",
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-ctype\": \"~1.8\",
            \"symfony/polyfill-mbstring\": \"~1.0\",
            \"symfony/service-contracts\": \"^1.1|^2\"
        },
        \"conflict\": {
            \"phpunit/phpunit\": \"<5.4.3\",
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/form\": \"<5\",
            \"symfony/http-kernel\": \"<5\",
            \"symfony/messenger\": \"<4.4\",
            \"symfony/property-info\": \"<5\",
            \"symfony/security-bundle\": \"<5\",
            \"symfony/security-core\": \"<5\",
            \"symfony/validator\": \"<5.0.2\"
        },
        \"require-dev\": {
            \"doctrine/annotations\": \"~1.7\",
            \"doctrine/cache\": \"~1.6\",
            \"doctrine/collections\": \"~1.0\",
            \"doctrine/data-fixtures\": \"1.0.*\",
            \"doctrine/dbal\": \"~2.4\",
            \"doctrine/orm\": \"^2.6.3\",
            \"doctrine/reflection\": \"~1.0\",
            \"symfony/config\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/form\": \"^5.0\",
            \"symfony/http-kernel\": \"^5.0\",
            \"symfony/messenger\": \"^4.4|^5.0\",
            \"symfony/property-access\": \"^4.4|^5.0\",
            \"symfony/property-info\": \"^5.0\",
            \"symfony/proxy-manager-bridge\": \"^4.4|^5.0\",
            \"symfony/security-core\": \"^5.0\",
            \"symfony/stopwatch\": \"^4.4|^5.0\",
            \"symfony/translation\": \"^4.4|^5.0\",
            \"symfony/validator\": \"^5.0.2\",
            \"symfony/var-dumper\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"doctrine/data-fixtures\": \"\",
            \"doctrine/dbal\": \"\",
            \"doctrine/orm\": \"\",
            \"symfony/form\": \"\",
            \"symfony/property-info\": \"\",
            \"symfony/validator\": \"\"
        },
        \"time\": \"2020-02-25T14:24:11+00:00\",
        \"type\": \"symfony-bridge\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Bridge\\\\Doctrine\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Doctrine Bridge\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/dotenv\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/dotenv.git\",
            \"reference\": \"48c8fdda51e5b24d031ce8ec221caa186337e36f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/dotenv/zipball/48c8fdda51e5b24d031ce8ec221caa186337e36f\",
            \"reference\": \"48c8fdda51e5b24d031ce8ec221caa186337e36f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"require-dev\": {
            \"symfony/process\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-29T10:07:09+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Dotenv\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Registers environment variables from a .env file\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"dotenv\",
            \"env\",
            \"environment\"
        ]
    },
    {
        \"name\": \"symfony/error-handler\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/error-handler.git\",
            \"reference\": \"24a938d9913f42d006ee1ca0164ea1f29c1067ec\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/error-handler/zipball/24a938d9913f42d006ee1ca0164ea1f29c1067ec\",
            \"reference\": \"24a938d9913f42d006ee1ca0164ea1f29c1067ec\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/log\": \"^1.0\",
            \"symfony/var-dumper\": \"^4.4|^5.0\"
        },
        \"require-dev\": {
            \"symfony/http-kernel\": \"^4.4|^5.0\",
            \"symfony/serializer\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-29T10:07:09+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\ErrorHandler\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony ErrorHandler Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/event-dispatcher\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/event-dispatcher.git\",
            \"reference\": \"b45ad88b253c5a9702ce218e201d89c85d148cea\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/b45ad88b253c5a9702ce218e201d89c85d148cea\",
            \"reference\": \"b45ad88b253c5a9702ce218e201d89c85d148cea\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/event-dispatcher-contracts\": \"^2\"
        },
        \"conflict\": {
            \"symfony/dependency-injection\": \"<4.4\"
        },
        \"provide\": {
            \"psr/event-dispatcher-implementation\": \"1.0\",
            \"symfony/event-dispatcher-implementation\": \"2.0\"
        },
        \"require-dev\": {
            \"psr/log\": \"~1.0\",
            \"symfony/config\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/service-contracts\": \"^1.1|^2\",
            \"symfony/stopwatch\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"symfony/dependency-injection\": \"\",
            \"symfony/http-kernel\": \"\"
        },
        \"time\": \"2020-02-22T20:09:08+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\EventDispatcher\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony EventDispatcher Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/event-dispatcher-contracts\",
        \"version\": \"v2.0.1\",
        \"version_normalized\": \"2.0.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/event-dispatcher-contracts.git\",
            \"reference\": \"af23c2584d4577d54661c434446fb8fbed6025dd\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/af23c2584d4577d54661c434446fb8fbed6025dd\",
            \"reference\": \"af23c2584d4577d54661c434446fb8fbed6025dd\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/event-dispatcher\": \"^1\"
        },
        \"suggest\": {
            \"symfony/event-dispatcher-implementation\": \"\"
        },
        \"time\": \"2019-11-18T17:27:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Contracts\\\\EventDispatcher\\\\\": \"\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Generic abstractions related to dispatching event\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"abstractions\",
            \"contracts\",
            \"decoupling\",
            \"interfaces\",
            \"interoperability\",
            \"standards\"
        ]
    },
    {
        \"name\": \"symfony/filesystem\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/filesystem.git\",
            \"reference\": \"3afadc0f57cd74f86379d073e694b0f2cda2a88c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/3afadc0f57cd74f86379d073e694b0f2cda2a88c\",
            \"reference\": \"3afadc0f57cd74f86379d073e694b0f2cda2a88c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-ctype\": \"~1.8\"
        },
        \"time\": \"2020-01-21T08:40:24+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Filesystem\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Filesystem Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/finder\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/finder.git\",
            \"reference\": \"6251f201187ca9d66f6b099d3de65d279e971138\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/finder/zipball/6251f201187ca9d66f6b099d3de65d279e971138\",
            \"reference\": \"6251f201187ca9d66f6b099d3de65d279e971138\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"time\": \"2020-02-14T07:43:07+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Finder\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Finder Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/flex\",
        \"version\": \"v1.6.2\",
        \"version_normalized\": \"1.6.2.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/flex.git\",
            \"reference\": \"e4f5a2653ca503782a31486198bd1dd1c9a47f83\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/flex/zipball/e4f5a2653ca503782a31486198bd1dd1c9a47f83\",
            \"reference\": \"e4f5a2653ca503782a31486198bd1dd1c9a47f83\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"composer-plugin-api\": \"^1.0\",
            \"php\": \"^7.0\"
        },
        \"require-dev\": {
            \"composer/composer\": \"^1.0.2\",
            \"symfony/dotenv\": \"^3.4|^4.0|^5.0\",
            \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8|^5.0\",
            \"symfony/process\": \"^2.7|^3.0|^4.0|^5.0\"
        },
        \"time\": \"2020-01-30T12:06:45+00:00\",
        \"type\": \"composer-plugin\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.5-dev\"
            },
            \"class\": \"Symfony\\\\Flex\\\\Flex\"
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Flex\\\\\": \"src\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien.potencier@gmail.com\"
            }
        ],
        \"description\": \"Composer plugin for Symfony\"
    },
    {
        \"name\": \"symfony/framework-bundle\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/framework-bundle.git\",
            \"reference\": \"fc6a0059fedaaf15efc66b64b7a3cedaa4b1edf4\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/framework-bundle/zipball/fc6a0059fedaaf15efc66b64b7a3cedaa4b1edf4\",
            \"reference\": \"fc6a0059fedaaf15efc66b64b7a3cedaa4b1edf4\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"ext-xml\": \"*\",
            \"php\": \"^7.2.5\",
            \"symfony/cache\": \"^4.4|^5.0\",
            \"symfony/config\": \"^5.0\",
            \"symfony/dependency-injection\": \"^5.0.1\",
            \"symfony/error-handler\": \"^4.4.1|^5.0.1\",
            \"symfony/filesystem\": \"^4.4|^5.0\",
            \"symfony/finder\": \"^4.4|^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/http-kernel\": \"^5.0\",
            \"symfony/polyfill-mbstring\": \"~1.0\",
            \"symfony/routing\": \"^5.0\"
        },
        \"conflict\": {
            \"doctrine/persistence\": \"<1.3\",
            \"phpdocumentor/reflection-docblock\": \"<3.0\",
            \"phpdocumentor/type-resolver\": \"<0.2.1\",
            \"phpunit/phpunit\": \"<5.4.3\",
            \"symfony/asset\": \"<4.4\",
            \"symfony/browser-kit\": \"<4.4\",
            \"symfony/console\": \"<4.4\",
            \"symfony/dom-crawler\": \"<4.4\",
            \"symfony/dotenv\": \"<4.4\",
            \"symfony/form\": \"<4.4\",
            \"symfony/http-client\": \"<4.4\",
            \"symfony/lock\": \"<4.4\",
            \"symfony/mailer\": \"<4.4\",
            \"symfony/messenger\": \"<4.4\",
            \"symfony/mime\": \"<4.4\",
            \"symfony/property-info\": \"<4.4\",
            \"symfony/serializer\": \"<4.4\",
            \"symfony/stopwatch\": \"<4.4\",
            \"symfony/translation\": \"<5.0\",
            \"symfony/twig-bridge\": \"<4.4\",
            \"symfony/twig-bundle\": \"<4.4\",
            \"symfony/validator\": \"<4.4\",
            \"symfony/web-profiler-bundle\": \"<4.4\",
            \"symfony/workflow\": \"<4.4\"
        },
        \"require-dev\": {
            \"doctrine/annotations\": \"~1.7\",
            \"doctrine/cache\": \"~1.0\",
            \"paragonie/sodium_compat\": \"^1.8\",
            \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
            \"symfony/asset\": \"^4.4|^5.0\",
            \"symfony/browser-kit\": \"^4.4|^5.0\",
            \"symfony/console\": \"^4.4|^5.0\",
            \"symfony/css-selector\": \"^4.4|^5.0\",
            \"symfony/dom-crawler\": \"^4.4|^5.0\",
            \"symfony/dotenv\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/form\": \"^4.4|^5.0\",
            \"symfony/http-client\": \"^4.4|^5.0\",
            \"symfony/lock\": \"^4.4|^5.0\",
            \"symfony/mailer\": \"^4.4|^5.0\",
            \"symfony/messenger\": \"^4.4|^5.0\",
            \"symfony/mime\": \"^4.4|^5.0\",
            \"symfony/polyfill-intl-icu\": \"~1.0\",
            \"symfony/process\": \"^4.4|^5.0\",
            \"symfony/property-info\": \"^4.4|^5.0\",
            \"symfony/security-csrf\": \"^4.4|^5.0\",
            \"symfony/security-http\": \"^4.4|^5.0\",
            \"symfony/serializer\": \"^4.4|^5.0\",
            \"symfony/stopwatch\": \"^4.4|^5.0\",
            \"symfony/string\": \"~5.0.0\",
            \"symfony/translation\": \"^5.0\",
            \"symfony/twig-bundle\": \"^4.4|^5.0\",
            \"symfony/validator\": \"^4.4|^5.0\",
            \"symfony/web-link\": \"^4.4|^5.0\",
            \"symfony/workflow\": \"^4.4|^5.0\",
            \"symfony/yaml\": \"^4.4|^5.0\",
            \"twig/twig\": \"^2.10|^3.0\"
        },
        \"suggest\": {
            \"ext-apcu\": \"For best performance of the system caches\",
            \"symfony/console\": \"For using the console commands\",
            \"symfony/form\": \"For using forms\",
            \"symfony/property-info\": \"For using the property_info service\",
            \"symfony/serializer\": \"For using the serializer service\",
            \"symfony/validator\": \"For using validation\",
            \"symfony/web-link\": \"For using web links, features such as preloading, prefetching or prerendering\",
            \"symfony/yaml\": \"For using the debug:config and lint:yaml commands\"
        },
        \"time\": \"2020-02-29T10:07:09+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony FrameworkBundle\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/http-foundation\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/http-foundation.git\",
            \"reference\": \"6f9c2ba72f4295d7ce6cf9f79dbb18036291d335\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/http-foundation/zipball/6f9c2ba72f4295d7ce6cf9f79dbb18036291d335\",
            \"reference\": \"6f9c2ba72f4295d7ce6cf9f79dbb18036291d335\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/mime\": \"^4.4|^5.0\",
            \"symfony/polyfill-mbstring\": \"~1.1\"
        },
        \"require-dev\": {
            \"predis/predis\": \"~1.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-14T07:43:07+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\HttpFoundation\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony HttpFoundation Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/http-kernel\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/http-kernel.git\",
            \"reference\": \"021d7d54e080405678f2d8c54cb31d0bb03b4520\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/http-kernel/zipball/021d7d54e080405678f2d8c54cb31d0bb03b4520\",
            \"reference\": \"021d7d54e080405678f2d8c54cb31d0bb03b4520\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/log\": \"~1.0\",
            \"symfony/error-handler\": \"^4.4|^5.0\",
            \"symfony/event-dispatcher\": \"^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/polyfill-ctype\": \"^1.8\",
            \"symfony/polyfill-php73\": \"^1.9\"
        },
        \"conflict\": {
            \"symfony/browser-kit\": \"<4.4\",
            \"symfony/cache\": \"<5.0\",
            \"symfony/config\": \"<5.0\",
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/doctrine-bridge\": \"<5.0\",
            \"symfony/form\": \"<5.0\",
            \"symfony/http-client\": \"<5.0\",
            \"symfony/mailer\": \"<5.0\",
            \"symfony/messenger\": \"<5.0\",
            \"symfony/translation\": \"<5.0\",
            \"symfony/twig-bridge\": \"<5.0\",
            \"symfony/validator\": \"<5.0\",
            \"twig/twig\": \"<2.4\"
        },
        \"provide\": {
            \"psr/log-implementation\": \"1.0\"
        },
        \"require-dev\": {
            \"psr/cache\": \"~1.0\",
            \"symfony/browser-kit\": \"^4.4|^5.0\",
            \"symfony/config\": \"^5.0\",
            \"symfony/console\": \"^4.4|^5.0\",
            \"symfony/css-selector\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/dom-crawler\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/finder\": \"^4.4|^5.0\",
            \"symfony/process\": \"^4.4|^5.0\",
            \"symfony/routing\": \"^4.4|^5.0\",
            \"symfony/stopwatch\": \"^4.4|^5.0\",
            \"symfony/translation\": \"^4.4|^5.0\",
            \"symfony/translation-contracts\": \"^1.1|^2\",
            \"twig/twig\": \"^2.4|^3.0\"
        },
        \"suggest\": {
            \"symfony/browser-kit\": \"\",
            \"symfony/config\": \"\",
            \"symfony/console\": \"\",
            \"symfony/dependency-injection\": \"\"
        },
        \"time\": \"2020-02-29T10:41:30+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\HttpKernel\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony HttpKernel Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/maker-bundle\",
        \"version\": \"v1.14.6\",
        \"version_normalized\": \"1.14.6.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/maker-bundle.git\",
            \"reference\": \"bc4df88792fbaaeb275167101dc714218475db5f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/maker-bundle/zipball/bc4df88792fbaaeb275167101dc714218475db5f\",
            \"reference\": \"bc4df88792fbaaeb275167101dc714218475db5f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/inflector\": \"^1.2\",
            \"nikic/php-parser\": \"^4.0\",
            \"php\": \"^7.0.8\",
            \"symfony/config\": \"^3.4|^4.0|^5.0\",
            \"symfony/console\": \"^3.4|^4.0|^5.0\",
            \"symfony/dependency-injection\": \"^3.4|^4.0|^5.0\",
            \"symfony/filesystem\": \"^3.4|^4.0|^5.0\",
            \"symfony/finder\": \"^3.4|^4.0|^5.0\",
            \"symfony/framework-bundle\": \"^3.4|^4.0|^5.0\",
            \"symfony/http-kernel\": \"^3.4|^4.0|^5.0\"
        },
        \"require-dev\": {
            \"doctrine/doctrine-bundle\": \"^1.8|^2.0\",
            \"doctrine/orm\": \"^2.3\",
            \"friendsofphp/php-cs-fixer\": \"^2.8\",
            \"friendsoftwig/twigcs\": \"^3.1.2\",
            \"symfony/http-client\": \"^4.3|^5.0\",
            \"symfony/phpunit-bridge\": \"^4.3|^5.0\",
            \"symfony/process\": \"^3.4|^4.0|^5.0\",
            \"symfony/security-core\": \"^3.4|^4.0|^5.0\",
            \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
        },
        \"time\": \"2020-03-04T13:57:29+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Bundle\\\\MakerBundle\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Maker helps you create empty commands, controllers, form classes, tests and more so you can forget about writing boilerplate code.\",
        \"homepage\": \"https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html\",
        \"keywords\": [
            \"code generator\",
            \"generator\",
            \"scaffold\",
            \"scaffolding\"
        ]
    },
    {
        \"name\": \"symfony/mime\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/mime.git\",
            \"reference\": \"9b3e5b5e58c56bbd76628c952d2b78556d305f3c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/mime/zipball/9b3e5b5e58c56bbd76628c952d2b78556d305f3c\",
            \"reference\": \"9b3e5b5e58c56bbd76628c952d2b78556d305f3c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-intl-idn\": \"^1.10\",
            \"symfony/polyfill-mbstring\": \"^1.0\"
        },
        \"conflict\": {
            \"symfony/mailer\": \"<4.4\"
        },
        \"require-dev\": {
            \"egulias/email-validator\": \"^2.1.10\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-04T09:41:09+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Mime\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"A library to manipulate MIME messages\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"mime\",
            \"mime-type\"
        ]
    },
    {
        \"name\": \"symfony/orm-pack\",
        \"version\": \"v1.0.8\",
        \"version_normalized\": \"1.0.8.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/orm-pack.git\",
            \"reference\": \"c9bcc08102061f406dc908192c0f33524a675666\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/orm-pack/zipball/c9bcc08102061f406dc908192c0f33524a675666\",
            \"reference\": \"c9bcc08102061f406dc908192c0f33524a675666\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/doctrine-bundle\": \"*\",
            \"doctrine/doctrine-migrations-bundle\": \"*\",
            \"doctrine/orm\": \"*\"
        },
        \"time\": \"2020-02-10T18:03:48+00:00\",
        \"type\": \"symfony-pack\",
        \"installation-source\": \"dist\",
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"description\": \"A pack for the Doctrine ORM\"
    },
    {
        \"name\": \"symfony/polyfill-intl-idn\",
        \"version\": \"v1.14.0\",
        \"version_normalized\": \"1.14.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/polyfill-intl-idn.git\",
            \"reference\": \"6842f1a39cf7d580655688069a03dd7cd83d244a\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/polyfill-intl-idn/zipball/6842f1a39cf7d580655688069a03dd7cd83d244a\",
            \"reference\": \"6842f1a39cf7d580655688069a03dd7cd83d244a\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.3\",
            \"symfony/polyfill-mbstring\": \"^1.3\",
            \"symfony/polyfill-php72\": \"^1.10\"
        },
        \"suggest\": {
            \"ext-intl\": \"For best performance\"
        },
        \"time\": \"2020-01-17T12:01:36+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.14-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Polyfill\\\\Intl\\\\Idn\\\\\": \"\"
            },
            \"files\": [
                \"bootstrap.php\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Laurent Bassin\",
                \"email\": \"laurent@bassin.info\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"compatibility\",
            \"idn\",
            \"intl\",
            \"polyfill\",
            \"portable\",
            \"shim\"
        ]
    },
    {
        \"name\": \"symfony/polyfill-mbstring\",
        \"version\": \"v1.14.0\",
        \"version_normalized\": \"1.14.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
            \"reference\": \"34094cfa9abe1f0f14f48f490772db7a775559f2\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/34094cfa9abe1f0f14f48f490772db7a775559f2\",
            \"reference\": \"34094cfa9abe1f0f14f48f490772db7a775559f2\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.3\"
        },
        \"suggest\": {
            \"ext-mbstring\": \"For best performance\"
        },
        \"time\": \"2020-01-13T11:15:53+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.14-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Polyfill\\\\Mbstring\\\\\": \"\"
            },
            \"files\": [
                \"bootstrap.php\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony polyfill for the Mbstring extension\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"compatibility\",
            \"mbstring\",
            \"polyfill\",
            \"portable\",
            \"shim\"
        ]
    },
    {
        \"name\": \"symfony/polyfill-php73\",
        \"version\": \"v1.14.0\",
        \"version_normalized\": \"1.14.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/polyfill-php73.git\",
            \"reference\": \"5e66a0fa1070bf46bec4bea7962d285108edd675\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/polyfill-php73/zipball/5e66a0fa1070bf46bec4bea7962d285108edd675\",
            \"reference\": \"5e66a0fa1070bf46bec4bea7962d285108edd675\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.3\"
        },
        \"time\": \"2020-01-13T11:15:53+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.14-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Polyfill\\\\Php73\\\\\": \"\"
            },
            \"files\": [
                \"bootstrap.php\"
            ],
            \"classmap\": [
                \"Resources/stubs\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"compatibility\",
            \"polyfill\",
            \"portable\",
            \"shim\"
        ]
    },
    {
        \"name\": \"symfony/routing\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/routing.git\",
            \"reference\": \"d6ca39fd05c1902bf34d724ba06fb8044a0b46de\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/routing/zipball/d6ca39fd05c1902bf34d724ba06fb8044a0b46de\",
            \"reference\": \"d6ca39fd05c1902bf34d724ba06fb8044a0b46de\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"conflict\": {
            \"symfony/config\": \"<5.0\",
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/yaml\": \"<4.4\"
        },
        \"require-dev\": {
            \"doctrine/annotations\": \"~1.2\",
            \"psr/log\": \"~1.0\",
            \"symfony/config\": \"^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/yaml\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"doctrine/annotations\": \"For using the annotation loader\",
            \"symfony/config\": \"For using the all-in-one router or any loader\",
            \"symfony/expression-language\": \"For using expression matching\",
            \"symfony/http-foundation\": \"For using a Symfony Request object\",
            \"symfony/yaml\": \"For using the YAML loader\"
        },
        \"time\": \"2020-02-25T14:24:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Routing\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Routing Component\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"router\",
            \"routing\",
            \"uri\",
            \"url\"
        ]
    },
    {
        \"name\": \"symfony/service-contracts\",
        \"version\": \"v2.0.1\",
        \"version_normalized\": \"2.0.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/service-contracts.git\",
            \"reference\": \"144c5e51266b281231e947b51223ba14acf1a749\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/service-contracts/zipball/144c5e51266b281231e947b51223ba14acf1a749\",
            \"reference\": \"144c5e51266b281231e947b51223ba14acf1a749\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/container\": \"^1.0\"
        },
        \"suggest\": {
            \"symfony/service-implementation\": \"\"
        },
        \"time\": \"2019-11-18T17:27:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Contracts\\\\Service\\\\\": \"\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Generic abstractions related to writing services\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"abstractions\",
            \"contracts\",
            \"decoupling\",
            \"interfaces\",
            \"interoperability\",
            \"standards\"
        ]
    },
    {
        \"name\": \"symfony/stopwatch\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/stopwatch.git\",
            \"reference\": \"5d9add8034135b9a5f7b101d1e42c797e7f053e4\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/5d9add8034135b9a5f7b101d1e42c797e7f053e4\",
            \"reference\": \"5d9add8034135b9a5f7b101d1e42c797e7f053e4\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/service-contracts\": \"^1.0|^2\"
        },
        \"time\": \"2020-01-04T14:08:26+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Stopwatch\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Stopwatch Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/translation-contracts\",
        \"version\": \"v2.0.1\",
        \"version_normalized\": \"2.0.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/translation-contracts.git\",
            \"reference\": \"8cc682ac458d75557203b2f2f14b0b92e1c744ed\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/translation-contracts/zipball/8cc682ac458d75557203b2f2f14b0b92e1c744ed\",
            \"reference\": \"8cc682ac458d75557203b2f2f14b0b92e1c744ed\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"suggest\": {
            \"symfony/translation-implementation\": \"\"
        },
        \"time\": \"2019-11-18T17:27:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Contracts\\\\Translation\\\\\": \"\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Generic abstractions related to translation\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"abstractions\",
            \"contracts\",
            \"decoupling\",
            \"interfaces\",
            \"interoperability\",
            \"standards\"
        ]
    },
    {
        \"name\": \"symfony/twig-bridge\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/twig-bridge.git\",
            \"reference\": \"737eeafbd04bf057c9495327c5d2669be7b79ba9\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/twig-bridge/zipball/737eeafbd04bf057c9495327c5d2669be7b79ba9\",
            \"reference\": \"737eeafbd04bf057c9495327c5d2669be7b79ba9\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/translation-contracts\": \"^1.1|^2\",
            \"twig/twig\": \"^2.10|^3.0\"
        },
        \"conflict\": {
            \"symfony/console\": \"<4.4\",
            \"symfony/form\": \"<5.0\",
            \"symfony/http-foundation\": \"<4.4\",
            \"symfony/http-kernel\": \"<4.4\",
            \"symfony/translation\": \"<5.0\",
            \"symfony/workflow\": \"<4.4\"
        },
        \"require-dev\": {
            \"egulias/email-validator\": \"^2.1.10\",
            \"symfony/asset\": \"^4.4|^5.0\",
            \"symfony/console\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/finder\": \"^4.4|^5.0\",
            \"symfony/form\": \"^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/http-kernel\": \"^4.4|^5.0\",
            \"symfony/mime\": \"^4.4|^5.0\",
            \"symfony/polyfill-intl-icu\": \"~1.0\",
            \"symfony/routing\": \"^4.4|^5.0\",
            \"symfony/security-acl\": \"^2.8|^3.0\",
            \"symfony/security-core\": \"^4.4|^5.0\",
            \"symfony/security-csrf\": \"^4.4|^5.0\",
            \"symfony/security-http\": \"^4.4|^5.0\",
            \"symfony/stopwatch\": \"^4.4|^5.0\",
            \"symfony/translation\": \"^5.0\",
            \"symfony/web-link\": \"^4.4|^5.0\",
            \"symfony/workflow\": \"^4.4|^5.0\",
            \"symfony/yaml\": \"^4.4|^5.0\",
            \"twig/cssinliner-extra\": \"^2.12\",
            \"twig/inky-extra\": \"^2.12\",
            \"twig/markdown-extra\": \"^2.12\"
        },
        \"suggest\": {
            \"symfony/asset\": \"For using the AssetExtension\",
            \"symfony/expression-language\": \"For using the ExpressionExtension\",
            \"symfony/finder\": \"\",
            \"symfony/form\": \"For using the FormExtension\",
            \"symfony/http-kernel\": \"For using the HttpKernelExtension\",
            \"symfony/routing\": \"For using the RoutingExtension\",
            \"symfony/security-core\": \"For using the SecurityExtension\",
            \"symfony/security-csrf\": \"For using the CsrfExtension\",
            \"symfony/security-http\": \"For using the LogoutUrlExtension\",
            \"symfony/stopwatch\": \"For using the StopwatchExtension\",
            \"symfony/translation\": \"For using the TranslationExtension\",
            \"symfony/var-dumper\": \"For using the DumpExtension\",
            \"symfony/web-link\": \"For using the WebLinkExtension\",
            \"symfony/yaml\": \"For using the YamlExtension\"
        },
        \"time\": \"2020-02-24T15:05:31+00:00\",
        \"type\": \"symfony-bridge\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Bridge\\\\Twig\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Twig Bridge\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/twig-bundle\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/twig-bundle.git\",
            \"reference\": \"7a3e2b4fc7969168d5502aa551404c500aa79891\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/twig-bundle/zipball/7a3e2b4fc7969168d5502aa551404c500aa79891\",
            \"reference\": \"7a3e2b4fc7969168d5502aa551404c500aa79891\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/config\": \"^4.4|^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/http-kernel\": \"^5.0\",
            \"symfony/polyfill-ctype\": \"~1.8\",
            \"symfony/twig-bridge\": \"^5.0\",
            \"twig/twig\": \"^2.10|^3.0\"
        },
        \"conflict\": {
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/framework-bundle\": \"<5.0\",
            \"symfony/translation\": \"<5.0\"
        },
        \"require-dev\": {
            \"doctrine/annotations\": \"~1.7\",
            \"doctrine/cache\": \"~1.0\",
            \"symfony/asset\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/finder\": \"^4.4|^5.0\",
            \"symfony/form\": \"^4.4|^5.0\",
            \"symfony/framework-bundle\": \"^5.0\",
            \"symfony/routing\": \"^4.4|^5.0\",
            \"symfony/stopwatch\": \"^4.4|^5.0\",
            \"symfony/translation\": \"^5.0\",
            \"symfony/web-link\": \"^4.4|^5.0\",
            \"symfony/yaml\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-04T09:47:34+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Bundle\\\\TwigBundle\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony TwigBundle\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/twig-pack\",
        \"version\": \"v1.0.0\",
        \"version_normalized\": \"1.0.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/twig-pack.git\",
            \"reference\": \"8b278ea4b61fba7c051f172aacae6d87ef4be0e0\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/twig-pack/zipball/8b278ea4b61fba7c051f172aacae6d87ef4be0e0\",
            \"reference\": \"8b278ea4b61fba7c051f172aacae6d87ef4be0e0\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.0\",
            \"symfony/twig-bundle\": \"*\",
            \"twig/extra-bundle\": \"^2.12|^3.0\",
            \"twig/twig\": \"^2.12|^3.0\"
        },
        \"time\": \"2019-10-17T05:44:22+00:00\",
        \"type\": \"symfony-pack\",
        \"installation-source\": \"dist\",
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"description\": \"A Twig pack for Symfony projects\"
    },
    {
        \"name\": \"symfony/var-dumper\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/var-dumper.git\",
            \"reference\": \"3a37aeb1132d1035536d3d6aa9cb06c2ff9355e9\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/var-dumper/zipball/3a37aeb1132d1035536d3d6aa9cb06c2ff9355e9\",
            \"reference\": \"3a37aeb1132d1035536d3d6aa9cb06c2ff9355e9\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-mbstring\": \"~1.0\"
        },
        \"conflict\": {
            \"phpunit/phpunit\": \"<5.4.3\",
            \"symfony/console\": \"<4.4\"
        },
        \"require-dev\": {
            \"ext-iconv\": \"*\",
            \"symfony/console\": \"^4.4|^5.0\",
            \"symfony/process\": \"^4.4|^5.0\",
            \"twig/twig\": \"^2.4|^3.0\"
        },
        \"suggest\": {
            \"ext-iconv\": \"To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).\",
            \"ext-intl\": \"To show region name in time zone dump\",
            \"symfony/console\": \"To use the ServerDumpCommand and/or the bin/var-dump-server script\"
        },
        \"time\": \"2020-02-26T22:30:10+00:00\",
        \"bin\": [
            \"Resources/bin/var-dump-server\"
        ],
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"files\": [
                \"Resources/functions/dump.php\"
            ],
            \"psr-4\": {
                \"Symfony\\\\Component\\\\VarDumper\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony mechanism for exploring and dumping PHP variables\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"debug\",
            \"dump\"
        ]
    },
    {
        \"name\": \"symfony/var-exporter\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/var-exporter.git\",
            \"reference\": \"30779a25c736b4290449eaedefe4196c1d060378\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/var-exporter/zipball/30779a25c736b4290449eaedefe4196c1d060378\",
            \"reference\": \"30779a25c736b4290449eaedefe4196c1d060378\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"require-dev\": {
            \"symfony/var-dumper\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-04T09:47:34+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\VarExporter\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"A blend of var_export() + serialize() to turn any serializable data structure to plain PHP code\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"clone\",
            \"construct\",
            \"export\",
            \"hydrate\",
            \"instantiate\",
            \"serialize\"
        ]
    },
    {
        \"name\": \"symfony/yaml\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/yaml.git\",
            \"reference\": \"a4b613d7e44f62941adff5a802cff70adee57d3f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/yaml/zipball/a4b613d7e44f62941adff5a802cff70adee57d3f\",
            \"reference\": \"a4b613d7e44f62941adff5a802cff70adee57d3f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-ctype\": \"~1.8\"
        },
        \"conflict\": {
            \"symfony/console\": \"<4.4\"
        },
        \"require-dev\": {
            \"symfony/console\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"symfony/console\": \"For validating YAML files using the lint command\"
        },
        \"time\": \"2020-02-03T13:51:17+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Yaml\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Yaml Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"twig/extra-bundle\",
        \"version\": \"v3.0.3\",
        \"version_normalized\": \"3.0.3.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/twigphp/twig-extra-bundle.git\",
            \"reference\": \"6eaf1637abe6b68518e7e0949ebb84e55770d5c6\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/twigphp/twig-extra-bundle/zipball/6eaf1637abe6b68518e7e0949ebb84e55770d5c6\",
            \"reference\": \"6eaf1637abe6b68518e7e0949ebb84e55770d5c6\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1.3\",
            \"symfony/framework-bundle\": \"^4.3|^5.0\",
            \"symfony/twig-bundle\": \"^4.3|^5.0\",
            \"twig/twig\": \"^2.4|^3.0\"
        },
        \"require-dev\": {
            \"twig/cssinliner-extra\": \"^2.12|^3.0\",
            \"twig/html-extra\": \"^2.12|^3.0\",
            \"twig/inky-extra\": \"^2.12|^3.0\",
            \"twig/intl-extra\": \"^2.12|^3.0\",
            \"twig/markdown-extra\": \"^2.12|^3.0\"
        },
        \"time\": \"2020-01-01T17:11:09+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"3.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Twig\\\\Extra\\\\TwigExtraBundle\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\",
                \"homepage\": \"http://fabien.potencier.org\",
                \"role\": \"Lead Developer\"
            }
        ],
        \"description\": \"A Symfony bundle for extra Twig extensions\",
        \"homepage\": \"https://twig.symfony.com\",
        \"keywords\": [
            \"bundle\",
            \"extra\",
            \"twig\"
        ]
    },
    {
        \"name\": \"twig/twig\",
        \"version\": \"v3.0.3\",
        \"version_normalized\": \"3.0.3.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/twigphp/Twig.git\",
            \"reference\": \"3b88ccd180a6b61ebb517aea3b1a8906762a1dc2\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/twigphp/Twig/zipball/3b88ccd180a6b61ebb517aea3b1a8906762a1dc2\",
            \"reference\": \"3b88ccd180a6b61ebb517aea3b1a8906762a1dc2\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-ctype\": \"^1.8\",
            \"symfony/polyfill-mbstring\": \"^1.3\"
        },
        \"require-dev\": {
            \"psr/container\": \"^1.0\",
            \"symfony/phpunit-bridge\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-11T15:33:47+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"3.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Twig\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"BSD-3-Clause\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\",
                \"homepage\": \"http://fabien.potencier.org\",
                \"role\": \"Lead Developer\"
            },
            {
                \"name\": \"Twig Team\",
                \"role\": \"Contributors\"
            },
            {
                \"name\": \"Armin Ronacher\",
                \"email\": \"armin.ronacher@active-4.com\",
                \"role\": \"Project Founder\"
            }
        ],
        \"description\": \"Twig, the flexible, fast, and secure template language for PHP\",
        \"homepage\": \"https://twig.symfony.com\",
        \"keywords\": [
            \"templating\"
        ]
    },
    {
        \"name\": \"zendframework/zend-code\",
        \"version\": \"3.4.1\",
        \"version_normalized\": \"3.4.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/zendframework/zend-code.git\",
            \"reference\": \"268040548f92c2bfcba164421c1add2ba43abaaa\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/zendframework/zend-code/zipball/268040548f92c2bfcba164421c1add2ba43abaaa\",
            \"reference\": \"268040548f92c2bfcba164421c1add2ba43abaaa\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1\",
            \"zendframework/zend-eventmanager\": \"^2.6 || ^3.0\"
        },
        \"conflict\": {
            \"phpspec/prophecy\": \"<1.9.0\"
        },
        \"require-dev\": {
            \"doctrine/annotations\": \"^1.7\",
            \"ext-phar\": \"*\",
            \"phpunit/phpunit\": \"^7.5.16 || ^8.4\",
            \"zendframework/zend-coding-standard\": \"^1.0\",
            \"zendframework/zend-stdlib\": \"^2.7 || ^3.0\"
        },
        \"suggest\": {
            \"doctrine/annotations\": \"Doctrine\\\\Common\\\\Annotations >=1.0 for annotation features\",
            \"zendframework/zend-stdlib\": \"Zend\\\\Stdlib component\"
        },
        \"time\": \"2019-12-10T19:21:15+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"3.4.x-dev\",
                \"dev-develop\": \"3.5.x-dev\",
                \"dev-dev-4.0\": \"4.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Zend\\\\Code\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"BSD-3-Clause\"
        ],
        \"description\": \"Extensions to the PHP Reflection API, static code scanning, and code generation\",
        \"keywords\": [
            \"ZendFramework\",
            \"code\",
            \"zf\"
        ],
        \"abandoned\": \"laminas/laminas-code\"
    },
    {
        \"name\": \"zendframework/zend-eventmanager\",
        \"version\": \"3.2.1\",
        \"version_normalized\": \"3.2.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/zendframework/zend-eventmanager.git\",
            \"reference\": \"a5e2583a211f73604691586b8406ff7296a946dd\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/zendframework/zend-eventmanager/zipball/a5e2583a211f73604691586b8406ff7296a946dd\",
            \"reference\": \"a5e2583a211f73604691586b8406ff7296a946dd\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^5.6 || ^7.0\"
        },
        \"require-dev\": {
            \"athletic/athletic\": \"^0.1\",
            \"container-interop/container-interop\": \"^1.1.0\",
            \"phpunit/phpunit\": \"^5.7.27 || ^6.5.8 || ^7.1.2\",
            \"zendframework/zend-coding-standard\": \"~1.0.0\",
            \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0\"
        },
        \"suggest\": {
            \"container-interop/container-interop\": \"^1.1.0, to use the lazy listeners feature\",
            \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0, to use the FilterChain feature\"
        },
        \"time\": \"2018-04-25T15:33:34+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"3.2-dev\",
                \"dev-develop\": \"3.3-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Zend\\\\EventManager\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"BSD-3-Clause\"
        ],
        \"description\": \"Trigger and listen to events within a PHP application\",
        \"homepage\": \"https://github.com/zendframework/zend-eventmanager\",
        \"keywords\": [
            \"event\",
            \"eventmanager\",
            \"events\",
            \"zf2\"
        ],
        \"abandoned\": \"laminas/laminas-eventmanager\"
    }
]
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/composer/installed.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("[
    {
        \"name\": \"doctrine/annotations\",
        \"version\": \"v1.8.0\",
        \"version_normalized\": \"1.8.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/annotations.git\",
            \"reference\": \"904dca4eb10715b92569fbcd79e201d5c349b6bc\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/904dca4eb10715b92569fbcd79e201d5c349b6bc\",
            \"reference\": \"904dca4eb10715b92569fbcd79e201d5c349b6bc\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/lexer\": \"1.*\",
            \"php\": \"^7.1\"
        },
        \"require-dev\": {
            \"doctrine/cache\": \"1.*\",
            \"phpunit/phpunit\": \"^7.5\"
        },
        \"time\": \"2019-10-01T18:55:10+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.7.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\Annotations\\\\\": \"lib/Doctrine/Common/Annotations\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            }
        ],
        \"description\": \"Docblock Annotations Parser\",
        \"homepage\": \"http://www.doctrine-project.org\",
        \"keywords\": [
            \"annotations\",
            \"docblock\",
            \"parser\"
        ]
    },
    {
        \"name\": \"doctrine/cache\",
        \"version\": \"1.10.0\",
        \"version_normalized\": \"1.10.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/cache.git\",
            \"reference\": \"382e7f4db9a12dc6c19431743a2b096041bcdd62\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/382e7f4db9a12dc6c19431743a2b096041bcdd62\",
            \"reference\": \"382e7f4db9a12dc6c19431743a2b096041bcdd62\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"~7.1\"
        },
        \"conflict\": {
            \"doctrine/common\": \">2.2,<2.4\"
        },
        \"require-dev\": {
            \"alcaeus/mongo-php-adapter\": \"^1.1\",
            \"doctrine/coding-standard\": \"^6.0\",
            \"mongodb/mongodb\": \"^1.1\",
            \"phpunit/phpunit\": \"^7.0\",
            \"predis/predis\": \"~1.0\"
        },
        \"suggest\": {
            \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
        },
        \"time\": \"2019-11-29T15:36:20+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.9.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\Cache\\\\\": \"lib/Doctrine/Common/Cache\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            }
        ],
        \"description\": \"PHP Doctrine Cache library is a popular cache implementation that supports many different drivers such as redis, memcache, apc, mongodb and others.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/cache.html\",
        \"keywords\": [
            \"abstraction\",
            \"apcu\",
            \"cache\",
            \"caching\",
            \"couchdb\",
            \"memcached\",
            \"php\",
            \"redis\",
            \"xcache\"
        ]
    },
    {
        \"name\": \"doctrine/collections\",
        \"version\": \"1.6.4\",
        \"version_normalized\": \"1.6.4.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/collections.git\",
            \"reference\": \"6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/collections/zipball/6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7\",
            \"reference\": \"6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1.3\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"phpstan/phpstan-shim\": \"^0.9.2\",
            \"phpunit/phpunit\": \"^7.0\",
            \"vimeo/psalm\": \"^3.2.2\"
        },
        \"time\": \"2019-11-13T13:07:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.6.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\Collections\\\\\": \"lib/Doctrine/Common/Collections\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            }
        ],
        \"description\": \"PHP Doctrine Collections library that adds additional functionality on top of PHP arrays.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/collections.html\",
        \"keywords\": [
            \"array\",
            \"collections\",
            \"iterators\",
            \"php\"
        ]
    },
    {
        \"name\": \"doctrine/common\",
        \"version\": \"2.12.0\",
        \"version_normalized\": \"2.12.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/common.git\",
            \"reference\": \"2053eafdf60c2172ee1373d1b9289ba1db7f1fc6\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/common/zipball/2053eafdf60c2172ee1373d1b9289ba1db7f1fc6\",
            \"reference\": \"2053eafdf60c2172ee1373d1b9289ba1db7f1fc6\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/annotations\": \"^1.0\",
            \"doctrine/cache\": \"^1.0\",
            \"doctrine/collections\": \"^1.0\",
            \"doctrine/event-manager\": \"^1.0\",
            \"doctrine/inflector\": \"^1.0\",
            \"doctrine/lexer\": \"^1.0\",
            \"doctrine/persistence\": \"^1.1\",
            \"doctrine/reflection\": \"^1.0\",
            \"php\": \"^7.1\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^1.0\",
            \"phpstan/phpstan\": \"^0.11\",
            \"phpstan/phpstan-phpunit\": \"^0.11\",
            \"phpunit/phpunit\": \"^7.0\",
            \"squizlabs/php_codesniffer\": \"^3.0\",
            \"symfony/phpunit-bridge\": \"^4.0.5\"
        },
        \"time\": \"2020-01-10T15:49:25+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.11.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            },
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"PHP Doctrine Common project is a library that provides additional functionality that other Doctrine projects depend on such as better reflection support, persistence interfaces, proxies, event system and much more.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/common.html\",
        \"keywords\": [
            \"common\",
            \"doctrine\",
            \"php\"
        ]
    },
    {
        \"name\": \"doctrine/dbal\",
        \"version\": \"v2.10.1\",
        \"version_normalized\": \"2.10.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/dbal.git\",
            \"reference\": \"c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/dbal/zipball/c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8\",
            \"reference\": \"c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/cache\": \"^1.0\",
            \"doctrine/event-manager\": \"^1.0\",
            \"ext-pdo\": \"*\",
            \"php\": \"^7.2\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"jetbrains/phpstorm-stubs\": \"^2019.1\",
            \"phpstan/phpstan\": \"^0.11.3\",
            \"phpunit/phpunit\": \"^8.4.1\",
            \"symfony/console\": \"^2.0.5|^3.0|^4.0|^5.0\"
        },
        \"suggest\": {
            \"symfony/console\": \"For helpful console commands such as SQL execution and import of files.\"
        },
        \"time\": \"2020-01-04T12:56:21+00:00\",
        \"bin\": [
            \"bin/doctrine-dbal\"
        ],
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.10.x-dev\",
                \"dev-develop\": \"3.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\DBAL\\\\\": \"lib/Doctrine/DBAL\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            }
        ],
        \"description\": \"Powerful PHP database abstraction layer (DBAL) with many features for database schema introspection and management.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/dbal.html\",
        \"keywords\": [
            \"abstraction\",
            \"database\",
            \"db2\",
            \"dbal\",
            \"mariadb\",
            \"mssql\",
            \"mysql\",
            \"oci8\",
            \"oracle\",
            \"pdo\",
            \"pgsql\",
            \"postgresql\",
            \"queryobject\",
            \"sasql\",
            \"sql\",
            \"sqlanywhere\",
            \"sqlite\",
            \"sqlserver\",
            \"sqlsrv\"
        ]
    },
    {
        \"name\": \"doctrine/doctrine-bundle\",
        \"version\": \"2.0.7\",
        \"version_normalized\": \"2.0.7.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/DoctrineBundle.git\",
            \"reference\": \"6926771140ee87a823c3b2c72602de9dda4490d3\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/DoctrineBundle/zipball/6926771140ee87a823c3b2c72602de9dda4490d3\",
            \"reference\": \"6926771140ee87a823c3b2c72602de9dda4490d3\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/dbal\": \"^2.9.0\",
            \"doctrine/persistence\": \"^1.3.3\",
            \"jdorn/sql-formatter\": \"^1.2.16\",
            \"php\": \"^7.1\",
            \"symfony/cache\": \"^4.3.3|^5.0\",
            \"symfony/config\": \"^4.3.3|^5.0\",
            \"symfony/console\": \"^3.4.30|^4.3.3|^5.0\",
            \"symfony/dependency-injection\": \"^4.3.3|^5.0\",
            \"symfony/doctrine-bridge\": \"^4.3.7|^5.0\",
            \"symfony/framework-bundle\": \"^3.4.30|^4.3.3|^5.0\",
            \"symfony/service-contracts\": \"^1.1.1|^2.0\"
        },
        \"conflict\": {
            \"doctrine/orm\": \"<2.6\",
            \"twig/twig\": \"<1.34|>=2.0,<2.4\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"doctrine/orm\": \"^2.6\",
            \"ocramius/proxy-manager\": \"^2.1\",
            \"phpunit/phpunit\": \"^7.5\",
            \"symfony/phpunit-bridge\": \"^4.2\",
            \"symfony/property-info\": \"^4.3.3|^5.0\",
            \"symfony/proxy-manager-bridge\": \"^3.4|^4.3.3|^5.0\",
            \"symfony/twig-bridge\": \"^3.4.30|^4.3.3|^5.0\",
            \"symfony/validator\": \"^3.4.30|^4.3.3|^5.0\",
            \"symfony/web-profiler-bundle\": \"^3.4.30|^4.3.3|^5.0\",
            \"symfony/yaml\": \"^3.4.30|^4.3.3|^5.0\",
            \"twig/twig\": \"^1.34|^2.12\"
        },
        \"suggest\": {
            \"doctrine/orm\": \"The Doctrine ORM integration is optional in the bundle.\",
            \"symfony/web-profiler-bundle\": \"To use the data collector.\"
        },
        \"time\": \"2020-01-18T11:56:15+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Bundle\\\\DoctrineBundle\\\\\": \"\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"http://symfony.com/contributors\"
            },
            {
                \"name\": \"Doctrine Project\",
                \"homepage\": \"http://www.doctrine-project.org/\"
            }
        ],
        \"description\": \"Symfony DoctrineBundle\",
        \"homepage\": \"http://www.doctrine-project.org\",
        \"keywords\": [
            \"database\",
            \"dbal\",
            \"orm\",
            \"persistence\"
        ]
    },
    {
        \"name\": \"doctrine/doctrine-migrations-bundle\",
        \"version\": \"2.1.2\",
        \"version_normalized\": \"2.1.2.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/DoctrineMigrationsBundle.git\",
            \"reference\": \"856437e8de96a70233e1f0cc2352fc8dd15a899d\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/DoctrineMigrationsBundle/zipball/856437e8de96a70233e1f0cc2352fc8dd15a899d\",
            \"reference\": \"856437e8de96a70233e1f0cc2352fc8dd15a899d\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/doctrine-bundle\": \"~1.0|~2.0\",
            \"doctrine/migrations\": \"^2.2\",
            \"php\": \"^7.1\",
            \"symfony/framework-bundle\": \"~3.4|~4.0|~5.0\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^5.0\",
            \"mikey179/vfsstream\": \"^1.6\",
            \"phpstan/phpstan\": \"^0.9.2\",
            \"phpstan/phpstan-strict-rules\": \"^0.9\",
            \"phpunit/phpunit\": \"^6.4|^7.0\"
        },
        \"time\": \"2019-11-13T12:57:41+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.1.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Doctrine Project\",
                \"homepage\": \"http://www.doctrine-project.org\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"http://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony DoctrineMigrationsBundle\",
        \"homepage\": \"https://www.doctrine-project.org\",
        \"keywords\": [
            \"dbal\",
            \"migrations\",
            \"schema\"
        ]
    },
    {
        \"name\": \"doctrine/event-manager\",
        \"version\": \"1.1.0\",
        \"version_normalized\": \"1.1.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/event-manager.git\",
            \"reference\": \"629572819973f13486371cb611386eb17851e85c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/event-manager/zipball/629572819973f13486371cb611386eb17851e85c\",
            \"reference\": \"629572819973f13486371cb611386eb17851e85c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1\"
        },
        \"conflict\": {
            \"doctrine/common\": \"<2.9@dev\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"phpunit/phpunit\": \"^7.0\"
        },
        \"time\": \"2019-11-10T09:48:07+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            },
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"The Doctrine Event Manager is a simple PHP event system that was built to be used with the various Doctrine projects.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/event-manager.html\",
        \"keywords\": [
            \"event\",
            \"event dispatcher\",
            \"event manager\",
            \"event system\",
            \"events\"
        ]
    },
    {
        \"name\": \"doctrine/inflector\",
        \"version\": \"1.3.1\",
        \"version_normalized\": \"1.3.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/inflector.git\",
            \"reference\": \"ec3a55242203ffa6a4b27c58176da97ff0a7aec1\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/inflector/zipball/ec3a55242203ffa6a4b27c58176da97ff0a7aec1\",
            \"reference\": \"ec3a55242203ffa6a4b27c58176da97ff0a7aec1\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1\"
        },
        \"require-dev\": {
            \"phpunit/phpunit\": \"^6.2\"
        },
        \"time\": \"2019-10-30T19:59:35+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.3.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\Inflector\\\\\": \"lib/Doctrine/Common/Inflector\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            }
        ],
        \"description\": \"Common String Manipulations with regard to casing and singular/plural rules.\",
        \"homepage\": \"http://www.doctrine-project.org\",
        \"keywords\": [
            \"inflection\",
            \"pluralize\",
            \"singularize\",
            \"string\"
        ]
    },
    {
        \"name\": \"doctrine/instantiator\",
        \"version\": \"1.3.0\",
        \"version_normalized\": \"1.3.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/instantiator.git\",
            \"reference\": \"ae466f726242e637cebdd526a7d991b9433bacf1\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/instantiator/zipball/ae466f726242e637cebdd526a7d991b9433bacf1\",
            \"reference\": \"ae466f726242e637cebdd526a7d991b9433bacf1\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"ext-pdo\": \"*\",
            \"ext-phar\": \"*\",
            \"phpbench/phpbench\": \"^0.13\",
            \"phpstan/phpstan-phpunit\": \"^0.11\",
            \"phpstan/phpstan-shim\": \"^0.11\",
            \"phpunit/phpunit\": \"^7.0\"
        },
        \"time\": \"2019-10-21T16:45:58+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.2.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Instantiator\\\\\": \"src/Doctrine/Instantiator/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\",
                \"homepage\": \"http://ocramius.github.com/\"
            }
        ],
        \"description\": \"A small, lightweight utility to instantiate objects in PHP without invoking their constructors\",
        \"homepage\": \"https://www.doctrine-project.org/projects/instantiator.html\",
        \"keywords\": [
            \"constructor\",
            \"instantiate\"
        ]
    },
    {
        \"name\": \"doctrine/lexer\",
        \"version\": \"1.2.0\",
        \"version_normalized\": \"1.2.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/lexer.git\",
            \"reference\": \"5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6\",
            \"reference\": \"5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"phpstan/phpstan\": \"^0.11.8\",
            \"phpunit/phpunit\": \"^8.2\"
        },
        \"time\": \"2019-10-30T14:39:59+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.2.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/Doctrine/Common/Lexer\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            }
        ],
        \"description\": \"PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/lexer.html\",
        \"keywords\": [
            \"annotations\",
            \"docblock\",
            \"lexer\",
            \"parser\",
            \"php\"
        ]
    },
    {
        \"name\": \"doctrine/migrations\",
        \"version\": \"2.2.1\",
        \"version_normalized\": \"2.2.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/migrations.git\",
            \"reference\": \"a3987131febeb0e9acb3c47ab0df0af004588934\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/migrations/zipball/a3987131febeb0e9acb3c47ab0df0af004588934\",
            \"reference\": \"a3987131febeb0e9acb3c47ab0df0af004588934\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/dbal\": \"^2.9\",
            \"ocramius/package-versions\": \"^1.3\",
            \"ocramius/proxy-manager\": \"^2.0.2\",
            \"php\": \"^7.1\",
            \"symfony/console\": \"^3.4||^4.0||^5.0\",
            \"symfony/stopwatch\": \"^3.4||^4.0||^5.0\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"doctrine/orm\": \"^2.6\",
            \"ext-pdo_sqlite\": \"*\",
            \"jdorn/sql-formatter\": \"^1.1\",
            \"mikey179/vfsstream\": \"^1.6\",
            \"phpstan/phpstan\": \"^0.10\",
            \"phpstan/phpstan-deprecation-rules\": \"^0.10\",
            \"phpstan/phpstan-phpunit\": \"^0.10\",
            \"phpstan/phpstan-strict-rules\": \"^0.10\",
            \"phpunit/phpunit\": \"^7.0\",
            \"symfony/process\": \"^3.4||^4.0||^5.0\",
            \"symfony/yaml\": \"^3.4||^4.0||^5.0\"
        },
        \"suggest\": {
            \"jdorn/sql-formatter\": \"Allows to generate formatted SQL with the diff command.\",
            \"symfony/yaml\": \"Allows the use of yaml for migration configuration files.\"
        },
        \"time\": \"2019-12-04T06:09:14+00:00\",
        \"bin\": [
            \"bin/doctrine-migrations\"
        ],
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.2.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Migrations\\\\\": \"lib/Doctrine/Migrations\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Michael Simonson\",
                \"email\": \"contact@mikesimonson.com\"
            }
        ],
        \"description\": \"PHP Doctrine Migrations project offer additional functionality on top of the database abstraction layer (DBAL) for versioning your database schema and easily deploying changes to it. It is a very easy to use and a powerful tool.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/migrations.html\",
        \"keywords\": [
            \"database\",
            \"dbal\",
            \"migrations\",
            \"php\"
        ]
    },
    {
        \"name\": \"doctrine/orm\",
        \"version\": \"v2.7.1\",
        \"version_normalized\": \"2.7.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/orm.git\",
            \"reference\": \"445796af0e873d9bd04f2502d322a7d5009b6846\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/orm/zipball/445796af0e873d9bd04f2502d322a7d5009b6846\",
            \"reference\": \"445796af0e873d9bd04f2502d322a7d5009b6846\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/annotations\": \"^1.8\",
            \"doctrine/cache\": \"^1.9.1\",
            \"doctrine/collections\": \"^1.5\",
            \"doctrine/common\": \"^2.11\",
            \"doctrine/dbal\": \"^2.9.3\",
            \"doctrine/event-manager\": \"^1.1\",
            \"doctrine/instantiator\": \"^1.3\",
            \"doctrine/persistence\": \"^1.2\",
            \"ext-pdo\": \"*\",
            \"ocramius/package-versions\": \"^1.2\",
            \"php\": \"^7.1\",
            \"symfony/console\": \"^3.0|^4.0|^5.0\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^5.0\",
            \"phpunit/phpunit\": \"^7.5\",
            \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
        },
        \"suggest\": {
            \"symfony/yaml\": \"If you want to use YAML Metadata Mapping Driver\"
        },
        \"time\": \"2020-02-15T14:35:56+00:00\",
        \"bin\": [
            \"bin/doctrine\"
        ],
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.7.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\ORM\\\\\": \"lib/Doctrine/ORM\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"Object-Relational-Mapper for PHP\",
        \"homepage\": \"https://www.doctrine-project.org/projects/orm.html\",
        \"keywords\": [
            \"database\",
            \"orm\"
        ]
    },
    {
        \"name\": \"doctrine/persistence\",
        \"version\": \"1.3.6\",
        \"version_normalized\": \"1.3.6.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/persistence.git\",
            \"reference\": \"5dd3ac5eebef2d0b074daa4440bb18f93132dee4\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/persistence/zipball/5dd3ac5eebef2d0b074daa4440bb18f93132dee4\",
            \"reference\": \"5dd3ac5eebef2d0b074daa4440bb18f93132dee4\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/annotations\": \"^1.0\",
            \"doctrine/cache\": \"^1.0\",
            \"doctrine/collections\": \"^1.0\",
            \"doctrine/event-manager\": \"^1.0\",
            \"doctrine/reflection\": \"^1.1\",
            \"php\": \"^7.1\"
        },
        \"conflict\": {
            \"doctrine/common\": \"<2.10@dev\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^6.0\",
            \"phpstan/phpstan\": \"^0.11\",
            \"phpunit/phpunit\": \"^7.0\"
        },
        \"time\": \"2020-01-16T22:06:23+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.3.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\",
                \"Doctrine\\\\Persistence\\\\\": \"lib/Doctrine/Persistence\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            },
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"The Doctrine Persistence project is a set of shared interfaces and functionality that the different Doctrine object mappers share.\",
        \"homepage\": \"https://doctrine-project.org/projects/persistence.html\",
        \"keywords\": [
            \"mapper\",
            \"object\",
            \"odm\",
            \"orm\",
            \"persistence\"
        ]
    },
    {
        \"name\": \"doctrine/reflection\",
        \"version\": \"v1.1.0\",
        \"version_normalized\": \"1.1.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/doctrine/reflection.git\",
            \"reference\": \"bc420ead87fdfe08c03ecc3549db603a45b06d4c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/doctrine/reflection/zipball/bc420ead87fdfe08c03ecc3549db603a45b06d4c\",
            \"reference\": \"bc420ead87fdfe08c03ecc3549db603a45b06d4c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/annotations\": \"^1.0\",
            \"ext-tokenizer\": \"*\",
            \"php\": \"^7.1\"
        },
        \"conflict\": {
            \"doctrine/common\": \"<2.9\"
        },
        \"require-dev\": {
            \"doctrine/coding-standard\": \"^5.0\",
            \"doctrine/common\": \"^2.10\",
            \"phpstan/phpstan\": \"^0.11.0\",
            \"phpstan/phpstan-phpunit\": \"^0.11.0\",
            \"phpunit/phpunit\": \"^7.0\"
        },
        \"time\": \"2020-01-08T19:53:19+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Guilherme Blanco\",
                \"email\": \"guilhermeblanco@gmail.com\"
            },
            {
                \"name\": \"Roman Borschel\",
                \"email\": \"roman@code-factory.org\"
            },
            {
                \"name\": \"Benjamin Eberlei\",
                \"email\": \"kontakt@beberlei.de\"
            },
            {
                \"name\": \"Jonathan Wage\",
                \"email\": \"jonwage@gmail.com\"
            },
            {
                \"name\": \"Johannes Schmitt\",
                \"email\": \"schmittjoh@gmail.com\"
            },
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"The Doctrine Reflection project is a simple library used by the various Doctrine projects which adds some additional functionality on top of the reflection functionality that comes with PHP. It allows you to get the reflection information about classes, methods and properties statically.\",
        \"homepage\": \"https://www.doctrine-project.org/projects/reflection.html\",
        \"keywords\": [
            \"reflection\",
            \"static\"
        ]
    },
    {
        \"name\": \"jdorn/sql-formatter\",
        \"version\": \"v1.2.17\",
        \"version_normalized\": \"1.2.17.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/jdorn/sql-formatter.git\",
            \"reference\": \"64990d96e0959dff8e059dfcdc1af130728d92bc\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/jdorn/sql-formatter/zipball/64990d96e0959dff8e059dfcdc1af130728d92bc\",
            \"reference\": \"64990d96e0959dff8e059dfcdc1af130728d92bc\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.2.4\"
        },
        \"require-dev\": {
            \"phpunit/phpunit\": \"3.7.*\"
        },
        \"time\": \"2014-01-12T16:20:24+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.3.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"classmap\": [
                \"lib\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Jeremy Dorn\",
                \"email\": \"jeremy@jeremydorn.com\",
                \"homepage\": \"http://jeremydorn.com/\"
            }
        ],
        \"description\": \"a PHP SQL highlighting library\",
        \"homepage\": \"https://github.com/jdorn/sql-formatter/\",
        \"keywords\": [
            \"highlight\",
            \"sql\"
        ]
    },
    {
        \"name\": \"nikic/php-parser\",
        \"version\": \"v4.3.0\",
        \"version_normalized\": \"4.3.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/nikic/PHP-Parser.git\",
            \"reference\": \"9a9981c347c5c49d6dfe5cf826bb882b824080dc\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/9a9981c347c5c49d6dfe5cf826bb882b824080dc\",
            \"reference\": \"9a9981c347c5c49d6dfe5cf826bb882b824080dc\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"ext-tokenizer\": \"*\",
            \"php\": \">=7.0\"
        },
        \"require-dev\": {
            \"ircmaxell/php-yacc\": \"0.0.5\",
            \"phpunit/phpunit\": \"^6.5 || ^7.0 || ^8.0\"
        },
        \"time\": \"2019-11-08T13:50:10+00:00\",
        \"bin\": [
            \"bin/php-parse\"
        ],
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"4.3-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"PhpParser\\\\\": \"lib/PhpParser\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"BSD-3-Clause\"
        ],
        \"authors\": [
            {
                \"name\": \"Nikita Popov\"
            }
        ],
        \"description\": \"A PHP parser written in PHP\",
        \"keywords\": [
            \"parser\",
            \"php\"
        ]
    },
    {
        \"name\": \"ocramius/package-versions\",
        \"version\": \"1.5.1\",
        \"version_normalized\": \"1.5.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/Ocramius/PackageVersions.git\",
            \"reference\": \"1d32342b8c1eb27353c8887c366147b4c2da673c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/Ocramius/PackageVersions/zipball/1d32342b8c1eb27353c8887c366147b4c2da673c\",
            \"reference\": \"1d32342b8c1eb27353c8887c366147b4c2da673c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"composer-plugin-api\": \"^1.0.0\",
            \"php\": \"^7.3.0\"
        },
        \"require-dev\": {
            \"composer/composer\": \"^1.8.6\",
            \"doctrine/coding-standard\": \"^6.0.0\",
            \"ext-zip\": \"*\",
            \"infection/infection\": \"^0.13.4\",
            \"phpunit/phpunit\": \"^8.2.5\",
            \"vimeo/psalm\": \"^3.4.9\"
        },
        \"time\": \"2019-07-17T15:49:50+00:00\",
        \"type\": \"composer-plugin\",
        \"extra\": {
            \"class\": \"PackageVersions\\\\Installer\",
            \"branch-alias\": {
                \"dev-master\": \"1.6.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"PackageVersions\\\\\": \"src/PackageVersions\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\"
            }
        ],
        \"description\": \"Composer plugin that provides efficient querying for installed package versions (no runtime IO)\"
    },
    {
        \"name\": \"ocramius/proxy-manager\",
        \"version\": \"2.2.3\",
        \"version_normalized\": \"2.2.3.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/Ocramius/ProxyManager.git\",
            \"reference\": \"4d154742e31c35137d5374c998e8f86b54db2e2f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/Ocramius/ProxyManager/zipball/4d154742e31c35137d5374c998e8f86b54db2e2f\",
            \"reference\": \"4d154742e31c35137d5374c998e8f86b54db2e2f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"ocramius/package-versions\": \"^1.1.3\",
            \"php\": \"^7.2.0\",
            \"zendframework/zend-code\": \"^3.3.0\"
        },
        \"require-dev\": {
            \"couscous/couscous\": \"^1.6.1\",
            \"ext-phar\": \"*\",
            \"humbug/humbug\": \"1.0.0-RC.0@RC\",
            \"nikic/php-parser\": \"^3.1.1\",
            \"padraic/phpunit-accelerator\": \"dev-master@DEV\",
            \"phpbench/phpbench\": \"^0.12.2\",
            \"phpstan/phpstan\": \"dev-master#856eb10a81c1d27c701a83f167dc870fd8f4236a as 0.9.999\",
            \"phpstan/phpstan-phpunit\": \"dev-master#5629c0a1f4a9c417cb1077cf6693ad9753895761\",
            \"phpunit/phpunit\": \"^6.4.3\",
            \"squizlabs/php_codesniffer\": \"^2.9.1\"
        },
        \"suggest\": {
            \"ocramius/generated-hydrator\": \"To have very fast object to array to object conversion for ghost objects\",
            \"zendframework/zend-json\": \"To have the JsonRpc adapter (Remote Object feature)\",
            \"zendframework/zend-soap\": \"To have the Soap adapter (Remote Object feature)\",
            \"zendframework/zend-xmlrpc\": \"To have the XmlRpc adapter (Remote Object feature)\"
        },
        \"time\": \"2019-08-10T08:37:15+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"3.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-0\": {
                \"ProxyManager\\\\\": \"src\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Marco Pivetta\",
                \"email\": \"ocramius@gmail.com\",
                \"homepage\": \"http://ocramius.github.io/\"
            }
        ],
        \"description\": \"A library providing utilities to generate, instantiate and generally operate with Object Proxies\",
        \"homepage\": \"https://github.com/Ocramius/ProxyManager\",
        \"keywords\": [
            \"aop\",
            \"lazy loading\",
            \"proxy\",
            \"proxy pattern\",
            \"service proxies\"
        ]
    },
    {
        \"name\": \"psr/cache\",
        \"version\": \"1.0.1\",
        \"version_normalized\": \"1.0.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/php-fig/cache.git\",
            \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/php-fig/cache/zipball/d11b50ad223250cf17b86e38383413f5a6764bf8\",
            \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.0\"
        },
        \"time\": \"2016-08-06T20:24:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Psr\\\\Cache\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"PHP-FIG\",
                \"homepage\": \"http://www.php-fig.org/\"
            }
        ],
        \"description\": \"Common interface for caching libraries\",
        \"keywords\": [
            \"cache\",
            \"psr\",
            \"psr-6\"
        ]
    },
    {
        \"name\": \"psr/container\",
        \"version\": \"1.0.0\",
        \"version_normalized\": \"1.0.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/php-fig/container.git\",
            \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/php-fig/container/zipball/b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
            \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.0\"
        },
        \"time\": \"2017-02-14T16:28:37+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Psr\\\\Container\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"PHP-FIG\",
                \"homepage\": \"http://www.php-fig.org/\"
            }
        ],
        \"description\": \"Common Container Interface (PHP FIG PSR-11)\",
        \"homepage\": \"https://github.com/php-fig/container\",
        \"keywords\": [
            \"PSR-11\",
            \"container\",
            \"container-interface\",
            \"container-interop\",
            \"psr\"
        ]
    },
    {
        \"name\": \"psr/event-dispatcher\",
        \"version\": \"1.0.0\",
        \"version_normalized\": \"1.0.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/php-fig/event-dispatcher.git\",
            \"reference\": \"dbefd12671e8a14ec7f180cab83036ed26714bb0\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/php-fig/event-dispatcher/zipball/dbefd12671e8a14ec7f180cab83036ed26714bb0\",
            \"reference\": \"dbefd12671e8a14ec7f180cab83036ed26714bb0\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=7.2.0\"
        },
        \"time\": \"2019-01-08T18:20:26+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Psr\\\\EventDispatcher\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"PHP-FIG\",
                \"homepage\": \"http://www.php-fig.org/\"
            }
        ],
        \"description\": \"Standard interfaces for event handling.\",
        \"keywords\": [
            \"events\",
            \"psr\",
            \"psr-14\"
        ]
    },
    {
        \"name\": \"psr/log\",
        \"version\": \"1.1.2\",
        \"version_normalized\": \"1.1.2.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/php-fig/log.git\",
            \"reference\": \"446d54b4cb6bf489fc9d75f55843658e6f25d801\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/php-fig/log/zipball/446d54b4cb6bf489fc9d75f55843658e6f25d801\",
            \"reference\": \"446d54b4cb6bf489fc9d75f55843658e6f25d801\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.0\"
        },
        \"time\": \"2019-11-01T11:05:21+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.1.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Psr\\\\Log\\\\\": \"Psr/Log/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"PHP-FIG\",
                \"homepage\": \"http://www.php-fig.org/\"
            }
        ],
        \"description\": \"Common interface for logging libraries\",
        \"homepage\": \"https://github.com/php-fig/log\",
        \"keywords\": [
            \"log\",
            \"psr\",
            \"psr-3\"
        ]
    },
    {
        \"name\": \"symfony/asset\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/asset.git\",
            \"reference\": \"b9d7f8609849c71e79a0702fdaa453c1329b0c2c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/asset/zipball/b9d7f8609849c71e79a0702fdaa453c1329b0c2c\",
            \"reference\": \"b9d7f8609849c71e79a0702fdaa453c1329b0c2c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"require-dev\": {
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/http-kernel\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"symfony/http-foundation\": \"\"
        },
        \"time\": \"2020-02-24T15:05:31+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Asset\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Asset Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/cache\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/cache.git\",
            \"reference\": \"c6255e419e8592dab7de6e29b014ae9e8926989a\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/cache/zipball/c6255e419e8592dab7de6e29b014ae9e8926989a\",
            \"reference\": \"c6255e419e8592dab7de6e29b014ae9e8926989a\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/cache\": \"~1.0\",
            \"psr/log\": \"~1.0\",
            \"symfony/cache-contracts\": \"^1.1.7|^2\",
            \"symfony/service-contracts\": \"^1.1|^2\",
            \"symfony/var-exporter\": \"^4.4|^5.0\"
        },
        \"conflict\": {
            \"doctrine/dbal\": \"<2.5\",
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/http-kernel\": \"<4.4\",
            \"symfony/var-dumper\": \"<4.4\"
        },
        \"provide\": {
            \"psr/cache-implementation\": \"1.0\",
            \"psr/simple-cache-implementation\": \"1.0\",
            \"symfony/cache-implementation\": \"1.0\"
        },
        \"require-dev\": {
            \"cache/integration-tests\": \"dev-master\",
            \"doctrine/cache\": \"~1.6\",
            \"doctrine/dbal\": \"~2.5\",
            \"predis/predis\": \"~1.1\",
            \"psr/simple-cache\": \"^1.0\",
            \"symfony/config\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/var-dumper\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-24T15:05:31+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Cache\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Cache component with PSR-6, PSR-16, and tags\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"caching\",
            \"psr6\"
        ]
    },
    {
        \"name\": \"symfony/cache-contracts\",
        \"version\": \"v2.0.1\",
        \"version_normalized\": \"2.0.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/cache-contracts.git\",
            \"reference\": \"23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/cache-contracts/zipball/23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16\",
            \"reference\": \"23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/cache\": \"^1.0\"
        },
        \"suggest\": {
            \"symfony/cache-implementation\": \"\"
        },
        \"time\": \"2019-11-18T17:27:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Contracts\\\\Cache\\\\\": \"\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Generic abstractions related to caching\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"abstractions\",
            \"contracts\",
            \"decoupling\",
            \"interfaces\",
            \"interoperability\",
            \"standards\"
        ]
    },
    {
        \"name\": \"symfony/config\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/config.git\",
            \"reference\": \"938905f46df484b2aeae9016fd658aed577cdceb\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/config/zipball/938905f46df484b2aeae9016fd658aed577cdceb\",
            \"reference\": \"938905f46df484b2aeae9016fd658aed577cdceb\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/filesystem\": \"^4.4|^5.0\",
            \"symfony/polyfill-ctype\": \"~1.8\"
        },
        \"conflict\": {
            \"symfony/finder\": \"<4.4\"
        },
        \"require-dev\": {
            \"symfony/event-dispatcher\": \"^4.4|^5.0\",
            \"symfony/finder\": \"^4.4|^5.0\",
            \"symfony/messenger\": \"^4.4|^5.0\",
            \"symfony/service-contracts\": \"^1.1|^2\",
            \"symfony/yaml\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"symfony/yaml\": \"To use the yaml reference dumper\"
        },
        \"time\": \"2020-02-04T09:41:09+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Config\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Config Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/console\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/console.git\",
            \"reference\": \"d29e2d36941de13600c399e393a60b8cfe59ac49\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/console/zipball/d29e2d36941de13600c399e393a60b8cfe59ac49\",
            \"reference\": \"d29e2d36941de13600c399e393a60b8cfe59ac49\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-mbstring\": \"~1.0\",
            \"symfony/polyfill-php73\": \"^1.8\",
            \"symfony/service-contracts\": \"^1.1|^2\"
        },
        \"conflict\": {
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/event-dispatcher\": \"<4.4\",
            \"symfony/lock\": \"<4.4\",
            \"symfony/process\": \"<4.4\"
        },
        \"provide\": {
            \"psr/log-implementation\": \"1.0\"
        },
        \"require-dev\": {
            \"psr/log\": \"~1.0\",
            \"symfony/config\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/event-dispatcher\": \"^4.4|^5.0\",
            \"symfony/lock\": \"^4.4|^5.0\",
            \"symfony/process\": \"^4.4|^5.0\",
            \"symfony/var-dumper\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"psr/log\": \"For using the console logger\",
            \"symfony/event-dispatcher\": \"\",
            \"symfony/lock\": \"\",
            \"symfony/process\": \"\"
        },
        \"time\": \"2020-02-24T15:05:31+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Console\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Console Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/dependency-injection\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/dependency-injection.git\",
            \"reference\": \"3575004a9b0d51ead83473ec90121045b3a0b56f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/dependency-injection/zipball/3575004a9b0d51ead83473ec90121045b3a0b56f\",
            \"reference\": \"3575004a9b0d51ead83473ec90121045b3a0b56f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/container\": \"^1.0\",
            \"symfony/service-contracts\": \"^1.1.6|^2\"
        },
        \"conflict\": {
            \"symfony/config\": \"<5.0\",
            \"symfony/finder\": \"<4.4\",
            \"symfony/proxy-manager-bridge\": \"<4.4\",
            \"symfony/yaml\": \"<4.4\"
        },
        \"provide\": {
            \"psr/container-implementation\": \"1.0\",
            \"symfony/service-implementation\": \"1.0\"
        },
        \"require-dev\": {
            \"symfony/config\": \"^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/yaml\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"symfony/config\": \"\",
            \"symfony/expression-language\": \"For using expressions in service container configuration\",
            \"symfony/finder\": \"For using double-star glob patterns or when GLOB_BRACE portability is required\",
            \"symfony/proxy-manager-bridge\": \"Generate service proxies to lazy load them\",
            \"symfony/yaml\": \"\"
        },
        \"time\": \"2020-02-24T15:05:31+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\DependencyInjection\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony DependencyInjection Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/doctrine-bridge\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/doctrine-bridge.git\",
            \"reference\": \"671f9afc0294e1a2fa5661fc5b8e53dd0ec85b7b\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/doctrine-bridge/zipball/671f9afc0294e1a2fa5661fc5b8e53dd0ec85b7b\",
            \"reference\": \"671f9afc0294e1a2fa5661fc5b8e53dd0ec85b7b\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/event-manager\": \"~1.0\",
            \"doctrine/persistence\": \"^1.3\",
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-ctype\": \"~1.8\",
            \"symfony/polyfill-mbstring\": \"~1.0\",
            \"symfony/service-contracts\": \"^1.1|^2\"
        },
        \"conflict\": {
            \"phpunit/phpunit\": \"<5.4.3\",
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/form\": \"<5\",
            \"symfony/http-kernel\": \"<5\",
            \"symfony/messenger\": \"<4.4\",
            \"symfony/property-info\": \"<5\",
            \"symfony/security-bundle\": \"<5\",
            \"symfony/security-core\": \"<5\",
            \"symfony/validator\": \"<5.0.2\"
        },
        \"require-dev\": {
            \"doctrine/annotations\": \"~1.7\",
            \"doctrine/cache\": \"~1.6\",
            \"doctrine/collections\": \"~1.0\",
            \"doctrine/data-fixtures\": \"1.0.*\",
            \"doctrine/dbal\": \"~2.4\",
            \"doctrine/orm\": \"^2.6.3\",
            \"doctrine/reflection\": \"~1.0\",
            \"symfony/config\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/form\": \"^5.0\",
            \"symfony/http-kernel\": \"^5.0\",
            \"symfony/messenger\": \"^4.4|^5.0\",
            \"symfony/property-access\": \"^4.4|^5.0\",
            \"symfony/property-info\": \"^5.0\",
            \"symfony/proxy-manager-bridge\": \"^4.4|^5.0\",
            \"symfony/security-core\": \"^5.0\",
            \"symfony/stopwatch\": \"^4.4|^5.0\",
            \"symfony/translation\": \"^4.4|^5.0\",
            \"symfony/validator\": \"^5.0.2\",
            \"symfony/var-dumper\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"doctrine/data-fixtures\": \"\",
            \"doctrine/dbal\": \"\",
            \"doctrine/orm\": \"\",
            \"symfony/form\": \"\",
            \"symfony/property-info\": \"\",
            \"symfony/validator\": \"\"
        },
        \"time\": \"2020-02-25T14:24:11+00:00\",
        \"type\": \"symfony-bridge\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Bridge\\\\Doctrine\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Doctrine Bridge\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/dotenv\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/dotenv.git\",
            \"reference\": \"48c8fdda51e5b24d031ce8ec221caa186337e36f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/dotenv/zipball/48c8fdda51e5b24d031ce8ec221caa186337e36f\",
            \"reference\": \"48c8fdda51e5b24d031ce8ec221caa186337e36f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"require-dev\": {
            \"symfony/process\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-29T10:07:09+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Dotenv\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Registers environment variables from a .env file\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"dotenv\",
            \"env\",
            \"environment\"
        ]
    },
    {
        \"name\": \"symfony/error-handler\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/error-handler.git\",
            \"reference\": \"24a938d9913f42d006ee1ca0164ea1f29c1067ec\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/error-handler/zipball/24a938d9913f42d006ee1ca0164ea1f29c1067ec\",
            \"reference\": \"24a938d9913f42d006ee1ca0164ea1f29c1067ec\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/log\": \"^1.0\",
            \"symfony/var-dumper\": \"^4.4|^5.0\"
        },
        \"require-dev\": {
            \"symfony/http-kernel\": \"^4.4|^5.0\",
            \"symfony/serializer\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-29T10:07:09+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\ErrorHandler\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony ErrorHandler Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/event-dispatcher\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/event-dispatcher.git\",
            \"reference\": \"b45ad88b253c5a9702ce218e201d89c85d148cea\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/b45ad88b253c5a9702ce218e201d89c85d148cea\",
            \"reference\": \"b45ad88b253c5a9702ce218e201d89c85d148cea\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/event-dispatcher-contracts\": \"^2\"
        },
        \"conflict\": {
            \"symfony/dependency-injection\": \"<4.4\"
        },
        \"provide\": {
            \"psr/event-dispatcher-implementation\": \"1.0\",
            \"symfony/event-dispatcher-implementation\": \"2.0\"
        },
        \"require-dev\": {
            \"psr/log\": \"~1.0\",
            \"symfony/config\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/service-contracts\": \"^1.1|^2\",
            \"symfony/stopwatch\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"symfony/dependency-injection\": \"\",
            \"symfony/http-kernel\": \"\"
        },
        \"time\": \"2020-02-22T20:09:08+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\EventDispatcher\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony EventDispatcher Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/event-dispatcher-contracts\",
        \"version\": \"v2.0.1\",
        \"version_normalized\": \"2.0.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/event-dispatcher-contracts.git\",
            \"reference\": \"af23c2584d4577d54661c434446fb8fbed6025dd\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/af23c2584d4577d54661c434446fb8fbed6025dd\",
            \"reference\": \"af23c2584d4577d54661c434446fb8fbed6025dd\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/event-dispatcher\": \"^1\"
        },
        \"suggest\": {
            \"symfony/event-dispatcher-implementation\": \"\"
        },
        \"time\": \"2019-11-18T17:27:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Contracts\\\\EventDispatcher\\\\\": \"\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Generic abstractions related to dispatching event\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"abstractions\",
            \"contracts\",
            \"decoupling\",
            \"interfaces\",
            \"interoperability\",
            \"standards\"
        ]
    },
    {
        \"name\": \"symfony/filesystem\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/filesystem.git\",
            \"reference\": \"3afadc0f57cd74f86379d073e694b0f2cda2a88c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/3afadc0f57cd74f86379d073e694b0f2cda2a88c\",
            \"reference\": \"3afadc0f57cd74f86379d073e694b0f2cda2a88c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-ctype\": \"~1.8\"
        },
        \"time\": \"2020-01-21T08:40:24+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Filesystem\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Filesystem Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/finder\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/finder.git\",
            \"reference\": \"6251f201187ca9d66f6b099d3de65d279e971138\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/finder/zipball/6251f201187ca9d66f6b099d3de65d279e971138\",
            \"reference\": \"6251f201187ca9d66f6b099d3de65d279e971138\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"time\": \"2020-02-14T07:43:07+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Finder\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Finder Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/flex\",
        \"version\": \"v1.6.2\",
        \"version_normalized\": \"1.6.2.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/flex.git\",
            \"reference\": \"e4f5a2653ca503782a31486198bd1dd1c9a47f83\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/flex/zipball/e4f5a2653ca503782a31486198bd1dd1c9a47f83\",
            \"reference\": \"e4f5a2653ca503782a31486198bd1dd1c9a47f83\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"composer-plugin-api\": \"^1.0\",
            \"php\": \"^7.0\"
        },
        \"require-dev\": {
            \"composer/composer\": \"^1.0.2\",
            \"symfony/dotenv\": \"^3.4|^4.0|^5.0\",
            \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8|^5.0\",
            \"symfony/process\": \"^2.7|^3.0|^4.0|^5.0\"
        },
        \"time\": \"2020-01-30T12:06:45+00:00\",
        \"type\": \"composer-plugin\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.5-dev\"
            },
            \"class\": \"Symfony\\\\Flex\\\\Flex\"
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Flex\\\\\": \"src\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien.potencier@gmail.com\"
            }
        ],
        \"description\": \"Composer plugin for Symfony\"
    },
    {
        \"name\": \"symfony/framework-bundle\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/framework-bundle.git\",
            \"reference\": \"fc6a0059fedaaf15efc66b64b7a3cedaa4b1edf4\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/framework-bundle/zipball/fc6a0059fedaaf15efc66b64b7a3cedaa4b1edf4\",
            \"reference\": \"fc6a0059fedaaf15efc66b64b7a3cedaa4b1edf4\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"ext-xml\": \"*\",
            \"php\": \"^7.2.5\",
            \"symfony/cache\": \"^4.4|^5.0\",
            \"symfony/config\": \"^5.0\",
            \"symfony/dependency-injection\": \"^5.0.1\",
            \"symfony/error-handler\": \"^4.4.1|^5.0.1\",
            \"symfony/filesystem\": \"^4.4|^5.0\",
            \"symfony/finder\": \"^4.4|^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/http-kernel\": \"^5.0\",
            \"symfony/polyfill-mbstring\": \"~1.0\",
            \"symfony/routing\": \"^5.0\"
        },
        \"conflict\": {
            \"doctrine/persistence\": \"<1.3\",
            \"phpdocumentor/reflection-docblock\": \"<3.0\",
            \"phpdocumentor/type-resolver\": \"<0.2.1\",
            \"phpunit/phpunit\": \"<5.4.3\",
            \"symfony/asset\": \"<4.4\",
            \"symfony/browser-kit\": \"<4.4\",
            \"symfony/console\": \"<4.4\",
            \"symfony/dom-crawler\": \"<4.4\",
            \"symfony/dotenv\": \"<4.4\",
            \"symfony/form\": \"<4.4\",
            \"symfony/http-client\": \"<4.4\",
            \"symfony/lock\": \"<4.4\",
            \"symfony/mailer\": \"<4.4\",
            \"symfony/messenger\": \"<4.4\",
            \"symfony/mime\": \"<4.4\",
            \"symfony/property-info\": \"<4.4\",
            \"symfony/serializer\": \"<4.4\",
            \"symfony/stopwatch\": \"<4.4\",
            \"symfony/translation\": \"<5.0\",
            \"symfony/twig-bridge\": \"<4.4\",
            \"symfony/twig-bundle\": \"<4.4\",
            \"symfony/validator\": \"<4.4\",
            \"symfony/web-profiler-bundle\": \"<4.4\",
            \"symfony/workflow\": \"<4.4\"
        },
        \"require-dev\": {
            \"doctrine/annotations\": \"~1.7\",
            \"doctrine/cache\": \"~1.0\",
            \"paragonie/sodium_compat\": \"^1.8\",
            \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
            \"symfony/asset\": \"^4.4|^5.0\",
            \"symfony/browser-kit\": \"^4.4|^5.0\",
            \"symfony/console\": \"^4.4|^5.0\",
            \"symfony/css-selector\": \"^4.4|^5.0\",
            \"symfony/dom-crawler\": \"^4.4|^5.0\",
            \"symfony/dotenv\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/form\": \"^4.4|^5.0\",
            \"symfony/http-client\": \"^4.4|^5.0\",
            \"symfony/lock\": \"^4.4|^5.0\",
            \"symfony/mailer\": \"^4.4|^5.0\",
            \"symfony/messenger\": \"^4.4|^5.0\",
            \"symfony/mime\": \"^4.4|^5.0\",
            \"symfony/polyfill-intl-icu\": \"~1.0\",
            \"symfony/process\": \"^4.4|^5.0\",
            \"symfony/property-info\": \"^4.4|^5.0\",
            \"symfony/security-csrf\": \"^4.4|^5.0\",
            \"symfony/security-http\": \"^4.4|^5.0\",
            \"symfony/serializer\": \"^4.4|^5.0\",
            \"symfony/stopwatch\": \"^4.4|^5.0\",
            \"symfony/string\": \"~5.0.0\",
            \"symfony/translation\": \"^5.0\",
            \"symfony/twig-bundle\": \"^4.4|^5.0\",
            \"symfony/validator\": \"^4.4|^5.0\",
            \"symfony/web-link\": \"^4.4|^5.0\",
            \"symfony/workflow\": \"^4.4|^5.0\",
            \"symfony/yaml\": \"^4.4|^5.0\",
            \"twig/twig\": \"^2.10|^3.0\"
        },
        \"suggest\": {
            \"ext-apcu\": \"For best performance of the system caches\",
            \"symfony/console\": \"For using the console commands\",
            \"symfony/form\": \"For using forms\",
            \"symfony/property-info\": \"For using the property_info service\",
            \"symfony/serializer\": \"For using the serializer service\",
            \"symfony/validator\": \"For using validation\",
            \"symfony/web-link\": \"For using web links, features such as preloading, prefetching or prerendering\",
            \"symfony/yaml\": \"For using the debug:config and lint:yaml commands\"
        },
        \"time\": \"2020-02-29T10:07:09+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony FrameworkBundle\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/http-foundation\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/http-foundation.git\",
            \"reference\": \"6f9c2ba72f4295d7ce6cf9f79dbb18036291d335\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/http-foundation/zipball/6f9c2ba72f4295d7ce6cf9f79dbb18036291d335\",
            \"reference\": \"6f9c2ba72f4295d7ce6cf9f79dbb18036291d335\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/mime\": \"^4.4|^5.0\",
            \"symfony/polyfill-mbstring\": \"~1.1\"
        },
        \"require-dev\": {
            \"predis/predis\": \"~1.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-14T07:43:07+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\HttpFoundation\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony HttpFoundation Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/http-kernel\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/http-kernel.git\",
            \"reference\": \"021d7d54e080405678f2d8c54cb31d0bb03b4520\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/http-kernel/zipball/021d7d54e080405678f2d8c54cb31d0bb03b4520\",
            \"reference\": \"021d7d54e080405678f2d8c54cb31d0bb03b4520\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/log\": \"~1.0\",
            \"symfony/error-handler\": \"^4.4|^5.0\",
            \"symfony/event-dispatcher\": \"^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/polyfill-ctype\": \"^1.8\",
            \"symfony/polyfill-php73\": \"^1.9\"
        },
        \"conflict\": {
            \"symfony/browser-kit\": \"<4.4\",
            \"symfony/cache\": \"<5.0\",
            \"symfony/config\": \"<5.0\",
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/doctrine-bridge\": \"<5.0\",
            \"symfony/form\": \"<5.0\",
            \"symfony/http-client\": \"<5.0\",
            \"symfony/mailer\": \"<5.0\",
            \"symfony/messenger\": \"<5.0\",
            \"symfony/translation\": \"<5.0\",
            \"symfony/twig-bridge\": \"<5.0\",
            \"symfony/validator\": \"<5.0\",
            \"twig/twig\": \"<2.4\"
        },
        \"provide\": {
            \"psr/log-implementation\": \"1.0\"
        },
        \"require-dev\": {
            \"psr/cache\": \"~1.0\",
            \"symfony/browser-kit\": \"^4.4|^5.0\",
            \"symfony/config\": \"^5.0\",
            \"symfony/console\": \"^4.4|^5.0\",
            \"symfony/css-selector\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/dom-crawler\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/finder\": \"^4.4|^5.0\",
            \"symfony/process\": \"^4.4|^5.0\",
            \"symfony/routing\": \"^4.4|^5.0\",
            \"symfony/stopwatch\": \"^4.4|^5.0\",
            \"symfony/translation\": \"^4.4|^5.0\",
            \"symfony/translation-contracts\": \"^1.1|^2\",
            \"twig/twig\": \"^2.4|^3.0\"
        },
        \"suggest\": {
            \"symfony/browser-kit\": \"\",
            \"symfony/config\": \"\",
            \"symfony/console\": \"\",
            \"symfony/dependency-injection\": \"\"
        },
        \"time\": \"2020-02-29T10:41:30+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\HttpKernel\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony HttpKernel Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/maker-bundle\",
        \"version\": \"v1.14.6\",
        \"version_normalized\": \"1.14.6.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/maker-bundle.git\",
            \"reference\": \"bc4df88792fbaaeb275167101dc714218475db5f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/maker-bundle/zipball/bc4df88792fbaaeb275167101dc714218475db5f\",
            \"reference\": \"bc4df88792fbaaeb275167101dc714218475db5f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/inflector\": \"^1.2\",
            \"nikic/php-parser\": \"^4.0\",
            \"php\": \"^7.0.8\",
            \"symfony/config\": \"^3.4|^4.0|^5.0\",
            \"symfony/console\": \"^3.4|^4.0|^5.0\",
            \"symfony/dependency-injection\": \"^3.4|^4.0|^5.0\",
            \"symfony/filesystem\": \"^3.4|^4.0|^5.0\",
            \"symfony/finder\": \"^3.4|^4.0|^5.0\",
            \"symfony/framework-bundle\": \"^3.4|^4.0|^5.0\",
            \"symfony/http-kernel\": \"^3.4|^4.0|^5.0\"
        },
        \"require-dev\": {
            \"doctrine/doctrine-bundle\": \"^1.8|^2.0\",
            \"doctrine/orm\": \"^2.3\",
            \"friendsofphp/php-cs-fixer\": \"^2.8\",
            \"friendsoftwig/twigcs\": \"^3.1.2\",
            \"symfony/http-client\": \"^4.3|^5.0\",
            \"symfony/phpunit-bridge\": \"^4.3|^5.0\",
            \"symfony/process\": \"^3.4|^4.0|^5.0\",
            \"symfony/security-core\": \"^3.4|^4.0|^5.0\",
            \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
        },
        \"time\": \"2020-03-04T13:57:29+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Bundle\\\\MakerBundle\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Maker helps you create empty commands, controllers, form classes, tests and more so you can forget about writing boilerplate code.\",
        \"homepage\": \"https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html\",
        \"keywords\": [
            \"code generator\",
            \"generator\",
            \"scaffold\",
            \"scaffolding\"
        ]
    },
    {
        \"name\": \"symfony/mime\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/mime.git\",
            \"reference\": \"9b3e5b5e58c56bbd76628c952d2b78556d305f3c\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/mime/zipball/9b3e5b5e58c56bbd76628c952d2b78556d305f3c\",
            \"reference\": \"9b3e5b5e58c56bbd76628c952d2b78556d305f3c\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-intl-idn\": \"^1.10\",
            \"symfony/polyfill-mbstring\": \"^1.0\"
        },
        \"conflict\": {
            \"symfony/mailer\": \"<4.4\"
        },
        \"require-dev\": {
            \"egulias/email-validator\": \"^2.1.10\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-04T09:41:09+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Mime\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"A library to manipulate MIME messages\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"mime\",
            \"mime-type\"
        ]
    },
    {
        \"name\": \"symfony/orm-pack\",
        \"version\": \"v1.0.8\",
        \"version_normalized\": \"1.0.8.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/orm-pack.git\",
            \"reference\": \"c9bcc08102061f406dc908192c0f33524a675666\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/orm-pack/zipball/c9bcc08102061f406dc908192c0f33524a675666\",
            \"reference\": \"c9bcc08102061f406dc908192c0f33524a675666\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"doctrine/doctrine-bundle\": \"*\",
            \"doctrine/doctrine-migrations-bundle\": \"*\",
            \"doctrine/orm\": \"*\"
        },
        \"time\": \"2020-02-10T18:03:48+00:00\",
        \"type\": \"symfony-pack\",
        \"installation-source\": \"dist\",
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"description\": \"A pack for the Doctrine ORM\"
    },
    {
        \"name\": \"symfony/polyfill-intl-idn\",
        \"version\": \"v1.14.0\",
        \"version_normalized\": \"1.14.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/polyfill-intl-idn.git\",
            \"reference\": \"6842f1a39cf7d580655688069a03dd7cd83d244a\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/polyfill-intl-idn/zipball/6842f1a39cf7d580655688069a03dd7cd83d244a\",
            \"reference\": \"6842f1a39cf7d580655688069a03dd7cd83d244a\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.3\",
            \"symfony/polyfill-mbstring\": \"^1.3\",
            \"symfony/polyfill-php72\": \"^1.10\"
        },
        \"suggest\": {
            \"ext-intl\": \"For best performance\"
        },
        \"time\": \"2020-01-17T12:01:36+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.14-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Polyfill\\\\Intl\\\\Idn\\\\\": \"\"
            },
            \"files\": [
                \"bootstrap.php\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Laurent Bassin\",
                \"email\": \"laurent@bassin.info\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"compatibility\",
            \"idn\",
            \"intl\",
            \"polyfill\",
            \"portable\",
            \"shim\"
        ]
    },
    {
        \"name\": \"symfony/polyfill-mbstring\",
        \"version\": \"v1.14.0\",
        \"version_normalized\": \"1.14.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
            \"reference\": \"34094cfa9abe1f0f14f48f490772db7a775559f2\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/34094cfa9abe1f0f14f48f490772db7a775559f2\",
            \"reference\": \"34094cfa9abe1f0f14f48f490772db7a775559f2\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.3\"
        },
        \"suggest\": {
            \"ext-mbstring\": \"For best performance\"
        },
        \"time\": \"2020-01-13T11:15:53+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.14-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Polyfill\\\\Mbstring\\\\\": \"\"
            },
            \"files\": [
                \"bootstrap.php\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony polyfill for the Mbstring extension\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"compatibility\",
            \"mbstring\",
            \"polyfill\",
            \"portable\",
            \"shim\"
        ]
    },
    {
        \"name\": \"symfony/polyfill-php73\",
        \"version\": \"v1.14.0\",
        \"version_normalized\": \"1.14.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/polyfill-php73.git\",
            \"reference\": \"5e66a0fa1070bf46bec4bea7962d285108edd675\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/polyfill-php73/zipball/5e66a0fa1070bf46bec4bea7962d285108edd675\",
            \"reference\": \"5e66a0fa1070bf46bec4bea7962d285108edd675\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \">=5.3.3\"
        },
        \"time\": \"2020-01-13T11:15:53+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"1.14-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Polyfill\\\\Php73\\\\\": \"\"
            },
            \"files\": [
                \"bootstrap.php\"
            ],
            \"classmap\": [
                \"Resources/stubs\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"compatibility\",
            \"polyfill\",
            \"portable\",
            \"shim\"
        ]
    },
    {
        \"name\": \"symfony/routing\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/routing.git\",
            \"reference\": \"d6ca39fd05c1902bf34d724ba06fb8044a0b46de\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/routing/zipball/d6ca39fd05c1902bf34d724ba06fb8044a0b46de\",
            \"reference\": \"d6ca39fd05c1902bf34d724ba06fb8044a0b46de\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"conflict\": {
            \"symfony/config\": \"<5.0\",
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/yaml\": \"<4.4\"
        },
        \"require-dev\": {
            \"doctrine/annotations\": \"~1.2\",
            \"psr/log\": \"~1.0\",
            \"symfony/config\": \"^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/yaml\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"doctrine/annotations\": \"For using the annotation loader\",
            \"symfony/config\": \"For using the all-in-one router or any loader\",
            \"symfony/expression-language\": \"For using expression matching\",
            \"symfony/http-foundation\": \"For using a Symfony Request object\",
            \"symfony/yaml\": \"For using the YAML loader\"
        },
        \"time\": \"2020-02-25T14:24:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Routing\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Routing Component\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"router\",
            \"routing\",
            \"uri\",
            \"url\"
        ]
    },
    {
        \"name\": \"symfony/service-contracts\",
        \"version\": \"v2.0.1\",
        \"version_normalized\": \"2.0.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/service-contracts.git\",
            \"reference\": \"144c5e51266b281231e947b51223ba14acf1a749\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/service-contracts/zipball/144c5e51266b281231e947b51223ba14acf1a749\",
            \"reference\": \"144c5e51266b281231e947b51223ba14acf1a749\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"psr/container\": \"^1.0\"
        },
        \"suggest\": {
            \"symfony/service-implementation\": \"\"
        },
        \"time\": \"2019-11-18T17:27:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Contracts\\\\Service\\\\\": \"\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Generic abstractions related to writing services\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"abstractions\",
            \"contracts\",
            \"decoupling\",
            \"interfaces\",
            \"interoperability\",
            \"standards\"
        ]
    },
    {
        \"name\": \"symfony/stopwatch\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/stopwatch.git\",
            \"reference\": \"5d9add8034135b9a5f7b101d1e42c797e7f053e4\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/5d9add8034135b9a5f7b101d1e42c797e7f053e4\",
            \"reference\": \"5d9add8034135b9a5f7b101d1e42c797e7f053e4\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/service-contracts\": \"^1.0|^2\"
        },
        \"time\": \"2020-01-04T14:08:26+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Stopwatch\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Stopwatch Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/translation-contracts\",
        \"version\": \"v2.0.1\",
        \"version_normalized\": \"2.0.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/translation-contracts.git\",
            \"reference\": \"8cc682ac458d75557203b2f2f14b0b92e1c744ed\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/translation-contracts/zipball/8cc682ac458d75557203b2f2f14b0b92e1c744ed\",
            \"reference\": \"8cc682ac458d75557203b2f2f14b0b92e1c744ed\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"suggest\": {
            \"symfony/translation-implementation\": \"\"
        },
        \"time\": \"2019-11-18T17:27:11+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"2.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Contracts\\\\Translation\\\\\": \"\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Generic abstractions related to translation\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"abstractions\",
            \"contracts\",
            \"decoupling\",
            \"interfaces\",
            \"interoperability\",
            \"standards\"
        ]
    },
    {
        \"name\": \"symfony/twig-bridge\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/twig-bridge.git\",
            \"reference\": \"737eeafbd04bf057c9495327c5d2669be7b79ba9\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/twig-bridge/zipball/737eeafbd04bf057c9495327c5d2669be7b79ba9\",
            \"reference\": \"737eeafbd04bf057c9495327c5d2669be7b79ba9\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/translation-contracts\": \"^1.1|^2\",
            \"twig/twig\": \"^2.10|^3.0\"
        },
        \"conflict\": {
            \"symfony/console\": \"<4.4\",
            \"symfony/form\": \"<5.0\",
            \"symfony/http-foundation\": \"<4.4\",
            \"symfony/http-kernel\": \"<4.4\",
            \"symfony/translation\": \"<5.0\",
            \"symfony/workflow\": \"<4.4\"
        },
        \"require-dev\": {
            \"egulias/email-validator\": \"^2.1.10\",
            \"symfony/asset\": \"^4.4|^5.0\",
            \"symfony/console\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/finder\": \"^4.4|^5.0\",
            \"symfony/form\": \"^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/http-kernel\": \"^4.4|^5.0\",
            \"symfony/mime\": \"^4.4|^5.0\",
            \"symfony/polyfill-intl-icu\": \"~1.0\",
            \"symfony/routing\": \"^4.4|^5.0\",
            \"symfony/security-acl\": \"^2.8|^3.0\",
            \"symfony/security-core\": \"^4.4|^5.0\",
            \"symfony/security-csrf\": \"^4.4|^5.0\",
            \"symfony/security-http\": \"^4.4|^5.0\",
            \"symfony/stopwatch\": \"^4.4|^5.0\",
            \"symfony/translation\": \"^5.0\",
            \"symfony/web-link\": \"^4.4|^5.0\",
            \"symfony/workflow\": \"^4.4|^5.0\",
            \"symfony/yaml\": \"^4.4|^5.0\",
            \"twig/cssinliner-extra\": \"^2.12\",
            \"twig/inky-extra\": \"^2.12\",
            \"twig/markdown-extra\": \"^2.12\"
        },
        \"suggest\": {
            \"symfony/asset\": \"For using the AssetExtension\",
            \"symfony/expression-language\": \"For using the ExpressionExtension\",
            \"symfony/finder\": \"\",
            \"symfony/form\": \"For using the FormExtension\",
            \"symfony/http-kernel\": \"For using the HttpKernelExtension\",
            \"symfony/routing\": \"For using the RoutingExtension\",
            \"symfony/security-core\": \"For using the SecurityExtension\",
            \"symfony/security-csrf\": \"For using the CsrfExtension\",
            \"symfony/security-http\": \"For using the LogoutUrlExtension\",
            \"symfony/stopwatch\": \"For using the StopwatchExtension\",
            \"symfony/translation\": \"For using the TranslationExtension\",
            \"symfony/var-dumper\": \"For using the DumpExtension\",
            \"symfony/web-link\": \"For using the WebLinkExtension\",
            \"symfony/yaml\": \"For using the YamlExtension\"
        },
        \"time\": \"2020-02-24T15:05:31+00:00\",
        \"type\": \"symfony-bridge\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Bridge\\\\Twig\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Twig Bridge\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/twig-bundle\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/twig-bundle.git\",
            \"reference\": \"7a3e2b4fc7969168d5502aa551404c500aa79891\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/twig-bundle/zipball/7a3e2b4fc7969168d5502aa551404c500aa79891\",
            \"reference\": \"7a3e2b4fc7969168d5502aa551404c500aa79891\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/config\": \"^4.4|^5.0\",
            \"symfony/http-foundation\": \"^4.4|^5.0\",
            \"symfony/http-kernel\": \"^5.0\",
            \"symfony/polyfill-ctype\": \"~1.8\",
            \"symfony/twig-bridge\": \"^5.0\",
            \"twig/twig\": \"^2.10|^3.0\"
        },
        \"conflict\": {
            \"symfony/dependency-injection\": \"<4.4\",
            \"symfony/framework-bundle\": \"<5.0\",
            \"symfony/translation\": \"<5.0\"
        },
        \"require-dev\": {
            \"doctrine/annotations\": \"~1.7\",
            \"doctrine/cache\": \"~1.0\",
            \"symfony/asset\": \"^4.4|^5.0\",
            \"symfony/dependency-injection\": \"^4.4|^5.0\",
            \"symfony/expression-language\": \"^4.4|^5.0\",
            \"symfony/finder\": \"^4.4|^5.0\",
            \"symfony/form\": \"^4.4|^5.0\",
            \"symfony/framework-bundle\": \"^5.0\",
            \"symfony/routing\": \"^4.4|^5.0\",
            \"symfony/stopwatch\": \"^4.4|^5.0\",
            \"symfony/translation\": \"^5.0\",
            \"symfony/web-link\": \"^4.4|^5.0\",
            \"symfony/yaml\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-04T09:47:34+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Bundle\\\\TwigBundle\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony TwigBundle\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"symfony/twig-pack\",
        \"version\": \"v1.0.0\",
        \"version_normalized\": \"1.0.0.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/twig-pack.git\",
            \"reference\": \"8b278ea4b61fba7c051f172aacae6d87ef4be0e0\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/twig-pack/zipball/8b278ea4b61fba7c051f172aacae6d87ef4be0e0\",
            \"reference\": \"8b278ea4b61fba7c051f172aacae6d87ef4be0e0\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.0\",
            \"symfony/twig-bundle\": \"*\",
            \"twig/extra-bundle\": \"^2.12|^3.0\",
            \"twig/twig\": \"^2.12|^3.0\"
        },
        \"time\": \"2019-10-17T05:44:22+00:00\",
        \"type\": \"symfony-pack\",
        \"installation-source\": \"dist\",
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"description\": \"A Twig pack for Symfony projects\"
    },
    {
        \"name\": \"symfony/var-dumper\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/var-dumper.git\",
            \"reference\": \"3a37aeb1132d1035536d3d6aa9cb06c2ff9355e9\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/var-dumper/zipball/3a37aeb1132d1035536d3d6aa9cb06c2ff9355e9\",
            \"reference\": \"3a37aeb1132d1035536d3d6aa9cb06c2ff9355e9\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-mbstring\": \"~1.0\"
        },
        \"conflict\": {
            \"phpunit/phpunit\": \"<5.4.3\",
            \"symfony/console\": \"<4.4\"
        },
        \"require-dev\": {
            \"ext-iconv\": \"*\",
            \"symfony/console\": \"^4.4|^5.0\",
            \"symfony/process\": \"^4.4|^5.0\",
            \"twig/twig\": \"^2.4|^3.0\"
        },
        \"suggest\": {
            \"ext-iconv\": \"To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).\",
            \"ext-intl\": \"To show region name in time zone dump\",
            \"symfony/console\": \"To use the ServerDumpCommand and/or the bin/var-dump-server script\"
        },
        \"time\": \"2020-02-26T22:30:10+00:00\",
        \"bin\": [
            \"Resources/bin/var-dump-server\"
        ],
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"files\": [
                \"Resources/functions/dump.php\"
            ],
            \"psr-4\": {
                \"Symfony\\\\Component\\\\VarDumper\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony mechanism for exploring and dumping PHP variables\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"debug\",
            \"dump\"
        ]
    },
    {
        \"name\": \"symfony/var-exporter\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/var-exporter.git\",
            \"reference\": \"30779a25c736b4290449eaedefe4196c1d060378\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/var-exporter/zipball/30779a25c736b4290449eaedefe4196c1d060378\",
            \"reference\": \"30779a25c736b4290449eaedefe4196c1d060378\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\"
        },
        \"require-dev\": {
            \"symfony/var-dumper\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-04T09:47:34+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\VarExporter\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Nicolas Grekas\",
                \"email\": \"p@tchwork.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"A blend of var_export() + serialize() to turn any serializable data structure to plain PHP code\",
        \"homepage\": \"https://symfony.com\",
        \"keywords\": [
            \"clone\",
            \"construct\",
            \"export\",
            \"hydrate\",
            \"instantiate\",
            \"serialize\"
        ]
    },
    {
        \"name\": \"symfony/yaml\",
        \"version\": \"v5.0.5\",
        \"version_normalized\": \"5.0.5.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/symfony/yaml.git\",
            \"reference\": \"a4b613d7e44f62941adff5a802cff70adee57d3f\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/symfony/yaml/zipball/a4b613d7e44f62941adff5a802cff70adee57d3f\",
            \"reference\": \"a4b613d7e44f62941adff5a802cff70adee57d3f\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-ctype\": \"~1.8\"
        },
        \"conflict\": {
            \"symfony/console\": \"<4.4\"
        },
        \"require-dev\": {
            \"symfony/console\": \"^4.4|^5.0\"
        },
        \"suggest\": {
            \"symfony/console\": \"For validating YAML files using the lint command\"
        },
        \"time\": \"2020-02-03T13:51:17+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"5.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Symfony\\\\Component\\\\Yaml\\\\\": \"\"
            },
            \"exclude-from-classmap\": [
                \"/Tests/\"
            ]
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\"
            },
            {
                \"name\": \"Symfony Community\",
                \"homepage\": \"https://symfony.com/contributors\"
            }
        ],
        \"description\": \"Symfony Yaml Component\",
        \"homepage\": \"https://symfony.com\"
    },
    {
        \"name\": \"twig/extra-bundle\",
        \"version\": \"v3.0.3\",
        \"version_normalized\": \"3.0.3.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/twigphp/twig-extra-bundle.git\",
            \"reference\": \"6eaf1637abe6b68518e7e0949ebb84e55770d5c6\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/twigphp/twig-extra-bundle/zipball/6eaf1637abe6b68518e7e0949ebb84e55770d5c6\",
            \"reference\": \"6eaf1637abe6b68518e7e0949ebb84e55770d5c6\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1.3\",
            \"symfony/framework-bundle\": \"^4.3|^5.0\",
            \"symfony/twig-bundle\": \"^4.3|^5.0\",
            \"twig/twig\": \"^2.4|^3.0\"
        },
        \"require-dev\": {
            \"twig/cssinliner-extra\": \"^2.12|^3.0\",
            \"twig/html-extra\": \"^2.12|^3.0\",
            \"twig/inky-extra\": \"^2.12|^3.0\",
            \"twig/intl-extra\": \"^2.12|^3.0\",
            \"twig/markdown-extra\": \"^2.12|^3.0\"
        },
        \"time\": \"2020-01-01T17:11:09+00:00\",
        \"type\": \"symfony-bundle\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"3.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Twig\\\\Extra\\\\TwigExtraBundle\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"MIT\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\",
                \"homepage\": \"http://fabien.potencier.org\",
                \"role\": \"Lead Developer\"
            }
        ],
        \"description\": \"A Symfony bundle for extra Twig extensions\",
        \"homepage\": \"https://twig.symfony.com\",
        \"keywords\": [
            \"bundle\",
            \"extra\",
            \"twig\"
        ]
    },
    {
        \"name\": \"twig/twig\",
        \"version\": \"v3.0.3\",
        \"version_normalized\": \"3.0.3.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/twigphp/Twig.git\",
            \"reference\": \"3b88ccd180a6b61ebb517aea3b1a8906762a1dc2\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/twigphp/Twig/zipball/3b88ccd180a6b61ebb517aea3b1a8906762a1dc2\",
            \"reference\": \"3b88ccd180a6b61ebb517aea3b1a8906762a1dc2\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.2.5\",
            \"symfony/polyfill-ctype\": \"^1.8\",
            \"symfony/polyfill-mbstring\": \"^1.3\"
        },
        \"require-dev\": {
            \"psr/container\": \"^1.0\",
            \"symfony/phpunit-bridge\": \"^4.4|^5.0\"
        },
        \"time\": \"2020-02-11T15:33:47+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"3.0-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Twig\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"BSD-3-Clause\"
        ],
        \"authors\": [
            {
                \"name\": \"Fabien Potencier\",
                \"email\": \"fabien@symfony.com\",
                \"homepage\": \"http://fabien.potencier.org\",
                \"role\": \"Lead Developer\"
            },
            {
                \"name\": \"Twig Team\",
                \"role\": \"Contributors\"
            },
            {
                \"name\": \"Armin Ronacher\",
                \"email\": \"armin.ronacher@active-4.com\",
                \"role\": \"Project Founder\"
            }
        ],
        \"description\": \"Twig, the flexible, fast, and secure template language for PHP\",
        \"homepage\": \"https://twig.symfony.com\",
        \"keywords\": [
            \"templating\"
        ]
    },
    {
        \"name\": \"zendframework/zend-code\",
        \"version\": \"3.4.1\",
        \"version_normalized\": \"3.4.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/zendframework/zend-code.git\",
            \"reference\": \"268040548f92c2bfcba164421c1add2ba43abaaa\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/zendframework/zend-code/zipball/268040548f92c2bfcba164421c1add2ba43abaaa\",
            \"reference\": \"268040548f92c2bfcba164421c1add2ba43abaaa\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^7.1\",
            \"zendframework/zend-eventmanager\": \"^2.6 || ^3.0\"
        },
        \"conflict\": {
            \"phpspec/prophecy\": \"<1.9.0\"
        },
        \"require-dev\": {
            \"doctrine/annotations\": \"^1.7\",
            \"ext-phar\": \"*\",
            \"phpunit/phpunit\": \"^7.5.16 || ^8.4\",
            \"zendframework/zend-coding-standard\": \"^1.0\",
            \"zendframework/zend-stdlib\": \"^2.7 || ^3.0\"
        },
        \"suggest\": {
            \"doctrine/annotations\": \"Doctrine\\\\Common\\\\Annotations >=1.0 for annotation features\",
            \"zendframework/zend-stdlib\": \"Zend\\\\Stdlib component\"
        },
        \"time\": \"2019-12-10T19:21:15+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"3.4.x-dev\",
                \"dev-develop\": \"3.5.x-dev\",
                \"dev-dev-4.0\": \"4.0.x-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Zend\\\\Code\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"BSD-3-Clause\"
        ],
        \"description\": \"Extensions to the PHP Reflection API, static code scanning, and code generation\",
        \"keywords\": [
            \"ZendFramework\",
            \"code\",
            \"zf\"
        ],
        \"abandoned\": \"laminas/laminas-code\"
    },
    {
        \"name\": \"zendframework/zend-eventmanager\",
        \"version\": \"3.2.1\",
        \"version_normalized\": \"3.2.1.0\",
        \"source\": {
            \"type\": \"git\",
            \"url\": \"https://github.com/zendframework/zend-eventmanager.git\",
            \"reference\": \"a5e2583a211f73604691586b8406ff7296a946dd\"
        },
        \"dist\": {
            \"type\": \"zip\",
            \"url\": \"https://api.github.com/repos/zendframework/zend-eventmanager/zipball/a5e2583a211f73604691586b8406ff7296a946dd\",
            \"reference\": \"a5e2583a211f73604691586b8406ff7296a946dd\",
            \"shasum\": \"\"
        },
        \"require\": {
            \"php\": \"^5.6 || ^7.0\"
        },
        \"require-dev\": {
            \"athletic/athletic\": \"^0.1\",
            \"container-interop/container-interop\": \"^1.1.0\",
            \"phpunit/phpunit\": \"^5.7.27 || ^6.5.8 || ^7.1.2\",
            \"zendframework/zend-coding-standard\": \"~1.0.0\",
            \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0\"
        },
        \"suggest\": {
            \"container-interop/container-interop\": \"^1.1.0, to use the lazy listeners feature\",
            \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0, to use the FilterChain feature\"
        },
        \"time\": \"2018-04-25T15:33:34+00:00\",
        \"type\": \"library\",
        \"extra\": {
            \"branch-alias\": {
                \"dev-master\": \"3.2-dev\",
                \"dev-develop\": \"3.3-dev\"
            }
        },
        \"installation-source\": \"dist\",
        \"autoload\": {
            \"psr-4\": {
                \"Zend\\\\EventManager\\\\\": \"src/\"
            }
        },
        \"notification-url\": \"https://packagist.org/downloads/\",
        \"license\": [
            \"BSD-3-Clause\"
        ],
        \"description\": \"Trigger and listen to events within a PHP application\",
        \"homepage\": \"https://github.com/zendframework/zend-eventmanager\",
        \"keywords\": [
            \"event\",
            \"eventmanager\",
            \"events\",
            \"zf2\"
        ],
        \"abandoned\": \"laminas/laminas-eventmanager\"
    }
]
", "@app/vendor/composer/installed.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\composer\\installed.json");
    }
}
