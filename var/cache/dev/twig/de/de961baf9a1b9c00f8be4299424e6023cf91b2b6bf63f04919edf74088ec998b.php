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

/* @app/vendor/doctrine/common/composer.lock */
class __TwigTemplate_104a4345e2cdda813bd78c1a3a0d8974bbad023dcc2c16bf15990ea255d6ef25 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/common/composer.lock"));

        // line 1
        echo "{
    \"_readme\": [
        \"This file locks the dependencies of your project to a known state\",
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies\",
        \"This file is @generated automatically\"
    ],
    \"content-hash\": \"40bcfe4c5277cdfa06868ad21fd26d85\",
    \"packages\": [
        {
            \"name\": \"doctrine/annotations\",
            \"version\": \"v1.6.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/annotations.git\",
                \"reference\": \"c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\",
                \"reference\": \"c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"1.*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"1.*\",
                \"phpunit/phpunit\": \"^6.4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.6.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            ],
            \"time\": \"2017-12-06T07:11:42+00:00\"
        },
        {
            \"name\": \"doctrine/cache\",
            \"version\": \"v1.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/cache.git\",
                \"reference\": \"d768d58baee9a4862ca783840eca1b9add7a7f57\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/d768d58baee9a4862ca783840eca1b9add7a7f57\",
                \"reference\": \"d768d58baee9a4862ca783840eca1b9add7a7f57\",
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
                \"doctrine/coding-standard\": \"^4.0\",
                \"mongodb/mongodb\": \"^1.1\",
                \"phpunit/phpunit\": \"^7.0\",
                \"predis/predis\": \"~1.0\"
            },
            \"suggest\": {
                \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            \"description\": \"Caching library offering an object-oriented API for many cache backends\",
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2018-08-21T18:01:43+00:00\"
        },
        {
            \"name\": \"doctrine/collections\",
            \"version\": \"v1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/collections.git\",
                \"reference\": \"a01ee38fcd999f34d9bfbcee59dbda5105449cbf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/collections/zipball/a01ee38fcd999f34d9bfbcee59dbda5105449cbf\",
                \"reference\": \"a01ee38fcd999f34d9bfbcee59dbda5105449cbf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"~0.1@dev\",
                \"phpunit/phpunit\": \"^5.7\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Doctrine\\\\Common\\\\Collections\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            \"description\": \"Collections Abstraction library\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"array\",
                \"collections\",
                \"iterator\"
            ],
            \"time\": \"2017-07-22T10:37:32+00:00\"
        },
        {
            \"name\": \"doctrine/event-manager\",
            \"version\": \"v1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/event-manager.git\",
                \"reference\": \"a520bc093a0170feeb6b14e9d83f3a14452e64b3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/event-manager/zipball/a520bc093a0170feeb6b14e9d83f3a14452e64b3\",
                \"reference\": \"a520bc093a0170feeb6b14e9d83f3a14452e64b3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \"<2.9@dev\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            \"description\": \"Doctrine Event Manager component\",
            \"homepage\": \"https://www.doctrine-project.org/projects/event-manager.html\",
            \"keywords\": [
                \"event\",
                \"eventdispatcher\",
                \"eventmanager\"
            ],
            \"time\": \"2018-06-11T11:59:03+00:00\"
        },
        {
            \"name\": \"doctrine/inflector\",
            \"version\": \"v1.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/inflector.git\",
                \"reference\": \"5527a48b7313d15261292c149e55e26eae771b0a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/inflector/zipball/5527a48b7313d15261292c149e55e26eae771b0a\",
                \"reference\": \"5527a48b7313d15261292c149e55e26eae771b0a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            ],
            \"time\": \"2018-01-09T20:05:19+00:00\"
        },
        {
            \"name\": \"doctrine/lexer\",
            \"version\": \"v1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"83893c552fd2045dd78aef794c31e694c37c0b8c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/83893c552fd2045dd78aef794c31e694c37c0b8c\",
                \"reference\": \"83893c552fd2045dd78aef794c31e694c37c0b8c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Base library for a lexer that can be used in Top-Down, Recursive Descent Parsers.\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"lexer\",
                \"parser\"
            ],
            \"time\": \"2014-09-09T13:34:57+00:00\"
        },
        {
            \"name\": \"doctrine/persistence\",
            \"version\": \"v1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/persistence.git\",
                \"reference\": \"c0f1c17602afc18b4cbd8e1c8125f264c9cf7d38\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/persistence/zipball/c0f1c17602afc18b4cbd8e1c8125f264c9cf7d38\",
                \"reference\": \"c0f1c17602afc18b4cbd8e1c8125f264c9cf7d38\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"doctrine/reflection\": \"^1.0\",
                \"php\": \"^7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \"<2.10@dev\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"phpstan/phpstan\": \"^0.8\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            ],
            \"time\": \"2018-11-21T00:33:13+00:00\"
        },
        {
            \"name\": \"doctrine/reflection\",
            \"version\": \"v1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/reflection.git\",
                \"reference\": \"02538d3f95e88eb397a5f86274deb2c6175c2ab6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/reflection/zipball/02538d3f95e88eb397a5f86274deb2c6175c2ab6\",
                \"reference\": \"02538d3f95e88eb397a5f86274deb2c6175c2ab6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"ext-tokenizer\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"doctrine/common\": \"^2.8\",
                \"phpstan/phpstan\": \"^0.9.2\",
                \"phpstan/phpstan-phpunit\": \"^0.9.4\",
                \"phpunit/phpunit\": \"^7.0\",
                \"squizlabs/php_codesniffer\": \"^3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            \"description\": \"Doctrine Reflection component\",
            \"homepage\": \"https://www.doctrine-project.org/projects/reflection.html\",
            \"keywords\": [
                \"reflection\"
            ],
            \"time\": \"2018-06-14T14:45:07+00:00\"
        }
    ],
    \"packages-dev\": [
        {
            \"name\": \"composer/xdebug-handler\",
            \"version\": \"1.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/xdebug-handler.git\",
                \"reference\": \"d17708133b6c276d6e42ef887a877866b909d892\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/xdebug-handler/zipball/d17708133b6c276d6e42ef887a877866b909d892\",
                \"reference\": \"d17708133b6c276d6e42ef887a877866b909d892\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0\",
                \"psr/log\": \"^1.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.5\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\XdebugHandler\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"John Stevenson\",
                    \"email\": \"john-stevenson@blueyonder.co.uk\"
                }
            ],
            \"description\": \"Restarts a process without xdebug.\",
            \"keywords\": [
                \"Xdebug\",
                \"performance\"
            ],
            \"time\": \"2019-01-28T20:25:53+00:00\"
        },
        {
            \"name\": \"dealerdirect/phpcodesniffer-composer-installer\",
            \"version\": \"v0.4.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Dealerdirect/phpcodesniffer-composer-installer.git\",
                \"reference\": \"2e41850d5f7797cbb1af7b030d245b3b24e63a08\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Dealerdirect/phpcodesniffer-composer-installer/zipball/2e41850d5f7797cbb1af7b030d245b3b24e63a08\",
                \"reference\": \"2e41850d5f7797cbb1af7b030d245b3b24e63a08\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0\",
                \"php\": \"^5.3|^7\",
                \"squizlabs/php_codesniffer\": \"*\"
            },
            \"require-dev\": {
                \"composer/composer\": \"*\",
                \"wimg/php-compatibility\": \"^8.0\"
            },
            \"suggest\": {
                \"dealerdirect/qa-tools\": \"All the PHP QA tools you'll need\"
            },
            \"type\": \"composer-plugin\",
            \"extra\": {
                \"class\": \"Dealerdirect\\\\Composer\\\\Plugin\\\\Installers\\\\PHPCodeSniffer\\\\Plugin\"
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Dealerdirect\\\\Composer\\\\Plugin\\\\Installers\\\\PHPCodeSniffer\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Franck Nijhof\",
                    \"email\": \"f.nijhof@dealerdirect.nl\",
                    \"homepage\": \"http://workingatdealerdirect.eu\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"PHP_CodeSniffer Standards Composer Installer Plugin\",
            \"homepage\": \"http://workingatdealerdirect.eu\",
            \"keywords\": [
                \"PHPCodeSniffer\",
                \"PHP_CodeSniffer\",
                \"code quality\",
                \"codesniffer\",
                \"composer\",
                \"installer\",
                \"phpcs\",
                \"plugin\",
                \"qa\",
                \"quality\",
                \"standard\",
                \"standards\",
                \"style guide\",
                \"stylecheck\",
                \"tests\"
            ],
            \"time\": \"2017-12-06T16:27:17+00:00\"
        },
        {
            \"name\": \"doctrine/coding-standard\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/coding-standard.git\",
                \"reference\": \"d0af8acc36d69f315d550eef78a9607bba24a6da\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/coding-standard/zipball/d0af8acc36d69f315d550eef78a9607bba24a6da\",
                \"reference\": \"d0af8acc36d69f315d550eef78a9607bba24a6da\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.4.2\",
                \"php\": \"^7.1\",
                \"squizlabs/php_codesniffer\": \"~3.0\"
            },
            \"type\": \"phpcodesniffer-standard\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Sniffs\\\\\": \"lib/Doctrine/Sniffs\"
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
                    \"name\": \"Steve Müller\",
                    \"email\": \"st.mueller@dzh-online.de\"
                }
            ],
            \"description\": \"Doctrine Coding Standard\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"code\",
                \"coding\",
                \"cs\",
                \"doctrine\",
                \"sniffer\",
                \"standard\",
                \"style\"
            ],
            \"time\": \"2017-08-20T01:30:16+00:00\"
        },
        {
            \"name\": \"doctrine/instantiator\",
            \"version\": \"1.2.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/instantiator.git\",
                \"reference\": \"a2c590166b2133a4633738648b6b064edae0814a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/instantiator/zipball/a2c590166b2133a4633738648b6b064edae0814a\",
                \"reference\": \"a2c590166b2133a4633738648b6b064edae0814a\",
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
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.2.x-dev\"
                }
            },
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
            ],
            \"time\": \"2019-03-17T17:37:11+00:00\"
        },
        {
            \"name\": \"jean85/pretty-package-versions\",
            \"version\": \"1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Jean85/pretty-package-versions.git\",
                \"reference\": \"75c7effcf3f77501d0e0caa75111aff4daa0dd48\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Jean85/pretty-package-versions/zipball/75c7effcf3f77501d0e0caa75111aff4daa0dd48\",
                \"reference\": \"75c7effcf3f77501d0e0caa75111aff4daa0dd48\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ocramius/package-versions\": \"^1.2.0\",
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Jean85\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Alessandro Lai\",
                    \"email\": \"alessandro.lai85@gmail.com\"
                }
            ],
            \"description\": \"A wrapper for ocramius/package-versions to get pretty versions strings\",
            \"keywords\": [
                \"composer\",
                \"package\",
                \"release\",
                \"versions\"
            ],
            \"time\": \"2018-06-13T13:22:40+00:00\"
        },
        {
            \"name\": \"myclabs/deep-copy\",
            \"version\": \"1.9.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/myclabs/DeepCopy.git\",
                \"reference\": \"007c053ae6f31bba39dfa19a7726f56e9763bbea\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/myclabs/DeepCopy/zipball/007c053ae6f31bba39dfa19a7726f56e9763bbea\",
                \"reference\": \"007c053ae6f31bba39dfa19a7726f56e9763bbea\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"replace\": {
                \"myclabs/deep-copy\": \"self.version\"
            },
            \"require-dev\": {
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/common\": \"^2.6\",
                \"phpunit/phpunit\": \"^7.1\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"DeepCopy\\\\\": \"src/DeepCopy/\"
                },
                \"files\": [
                    \"src/DeepCopy/deep_copy.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Create deep copies (clones) of your objects\",
            \"keywords\": [
                \"clone\",
                \"copy\",
                \"duplicate\",
                \"object\",
                \"object graph\"
            ],
            \"time\": \"2019-08-09T12:45:53+00:00\"
        },
        {
            \"name\": \"nette/bootstrap\",
            \"version\": \"v2.4.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/bootstrap.git\",
                \"reference\": \"268816e3f1bb7426c3a4ceec2bd38a036b532543\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/bootstrap/zipball/268816e3f1bb7426c3a4ceec2bd38a036b532543\",
                \"reference\": \"268816e3f1bb7426c3a4ceec2bd38a036b532543\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/di\": \"~2.4.7\",
                \"nette/utils\": \"~2.4\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"latte/latte\": \"~2.2\",
                \"nette/application\": \"~2.3\",
                \"nette/caching\": \"~2.3\",
                \"nette/database\": \"~2.3\",
                \"nette/forms\": \"~2.3\",
                \"nette/http\": \"~2.4.0\",
                \"nette/mail\": \"~2.3\",
                \"nette/robot-loader\": \"^2.4.2 || ^3.0\",
                \"nette/safe-stream\": \"~2.2\",
                \"nette/security\": \"~2.3\",
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.4.1\"
            },
            \"suggest\": {
                \"nette/robot-loader\": \"to use Configurator::createRobotLoader()\",
                \"tracy/tracy\": \"to use Configurator::enableTracy()\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"? Nette Bootstrap: the simple way to configure and bootstrap your Nette application.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"bootstrapping\",
                \"configurator\",
                \"nette\"
            ],
            \"time\": \"2018-05-17T12:52:20+00:00\"
        },
        {
            \"name\": \"nette/di\",
            \"version\": \"v2.4.15\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/di.git\",
                \"reference\": \"d0561b8f77e8ef2ed6d83328860e16c81a5a8649\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/di/zipball/d0561b8f77e8ef2ed6d83328860e16c81a5a8649\",
                \"reference\": \"d0561b8f77e8ef2ed6d83328860e16c81a5a8649\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"nette/neon\": \"^2.3.3 || ~3.0.0\",
                \"nette/php-generator\": \"^2.6.1 || ^3.0.0\",
                \"nette/utils\": \"^2.5.0 || ~3.0.0\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/bootstrap\": \"<2.4\",
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"? Nette Dependency Injection Container: Flexible, compiled and full-featured DIC with perfectly usable autowiring and support for all new PHP 7.1 features.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"compiled\",
                \"di\",
                \"dic\",
                \"factory\",
                \"ioc\",
                \"nette\",
                \"static\"
            ],
            \"time\": \"2019-01-30T13:26:05+00:00\"
        },
        {
            \"name\": \"nette/finder\",
            \"version\": \"v2.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/finder.git\",
                \"reference\": \"6be1b83ea68ac558aff189d640abe242e0306fe2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/finder/zipball/6be1b83ea68ac558aff189d640abe242e0306fe2\",
                \"reference\": \"6be1b83ea68ac558aff189d640abe242e0306fe2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/utils\": \"^2.4 || ~3.0.0\",
                \"php\": \">=7.1\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.5-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🔍 Nette Finder: find files and directories with an intuitive API.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"filesystem\",
                \"glob\",
                \"iterator\",
                \"nette\"
            ],
            \"time\": \"2019-02-28T18:13:25+00:00\"
        },
        {
            \"name\": \"nette/neon\",
            \"version\": \"v3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/neon.git\",
                \"reference\": \"cbff32059cbdd8720deccf9e9eace6ee516f02eb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/neon/zipball/cbff32059cbdd8720deccf9e9eace6ee516f02eb\",
                \"reference\": \"cbff32059cbdd8720deccf9e9eace6ee516f02eb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-iconv\": \"*\",
                \"ext-json\": \"*\",
                \"php\": \">=7.0\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🍸 Nette NEON: encodes and decodes NEON file format.\",
            \"homepage\": \"http://ne-on.org\",
            \"keywords\": [
                \"export\",
                \"import\",
                \"neon\",
                \"nette\",
                \"yaml\"
            ],
            \"time\": \"2019-02-05T21:30:40+00:00\"
        },
        {
            \"name\": \"nette/php-generator\",
            \"version\": \"v3.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/php-generator.git\",
                \"reference\": \"9de4e093a130f7a1bd175198799ebc0efbac6924\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/php-generator/zipball/9de4e093a130f7a1bd175198799ebc0efbac6924\",
                \"reference\": \"9de4e093a130f7a1bd175198799ebc0efbac6924\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/utils\": \"^2.4.2 || ~3.0.0\",
                \"php\": \">=7.1\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.2-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"? Nette PHP Generator: generates neat PHP code for you. Supports new PHP 7.3 features.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"code\",
                \"nette\",
                \"php\",
                \"scaffolding\"
            ],
            \"time\": \"2018-11-27T19:00:14+00:00\"
        },
        {
            \"name\": \"nette/robot-loader\",
            \"version\": \"v3.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/robot-loader.git\",
                \"reference\": \"3e8d75d6d976e191bdf46752ca40a286671219d2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/robot-loader/zipball/3e8d75d6d976e191bdf46752ca40a286671219d2\",
                \"reference\": \"3e8d75d6d976e191bdf46752ca40a286671219d2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"nette/finder\": \"^2.3 || ^3.0\",
                \"nette/utils\": \"^2.4 || ^3.0\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"? Nette RobotLoader: high performance and comfortable autoloader that will search and autoload classes within your application.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"autoload\",
                \"class\",
                \"interface\",
                \"nette\",
                \"trait\"
            ],
            \"time\": \"2019-03-01T20:23:02+00:00\"
        },
        {
            \"name\": \"nette/utils\",
            \"version\": \"v2.5.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/utils.git\",
                \"reference\": \"17b9f76f2abd0c943adfb556e56f2165460b15ce\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/utils/zipball/17b9f76f2abd0c943adfb556e56f2165460b15ce\",
                \"reference\": \"17b9f76f2abd0c943adfb556e56f2165460b15ce\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"suggest\": {
                \"ext-gd\": \"to use Image\",
                \"ext-iconv\": \"to use Strings::webalize() and toAscii()\",
                \"ext-intl\": \"for script transliteration in Strings::webalize() and toAscii()\",
                \"ext-json\": \"to use Nette\\\\Utils\\\\Json\",
                \"ext-mbstring\": \"to use Strings::lower() etc...\",
                \"ext-xml\": \"to use Strings::length() etc. when mbstring is not available\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.5-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ],
                \"files\": [
                    \"src/loader.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"? Nette Utils: lightweight utilities for string & array manipulation, image handling, safe JSON encoding/decoding, validation, slug or strong password generating etc.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"array\",
                \"core\",
                \"datetime\",
                \"images\",
                \"json\",
                \"nette\",
                \"paginator\",
                \"password\",
                \"slugify\",
                \"string\",
                \"unicode\",
                \"utf-8\",
                \"utility\",
                \"validation\"
            ],
            \"time\": \"2018-09-18T10:22:16+00:00\"
        },
        {
            \"name\": \"nikic/php-parser\",
            \"version\": \"v4.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nikic/PHP-Parser.git\",
                \"reference\": \"5221f49a608808c1e4d436df32884cbc1b821ac0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/5221f49a608808c1e4d436df32884cbc1b821ac0\",
                \"reference\": \"5221f49a608808c1e4d436df32884cbc1b821ac0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \">=7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.5 || ^7.0\"
            },
            \"bin\": [
                \"bin/php-parse\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
                }
            },
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
            ],
            \"time\": \"2019-02-16T20:54:15+00:00\"
        },
        {
            \"name\": \"ocramius/package-versions\",
            \"version\": \"1.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Ocramius/PackageVersions.git\",
                \"reference\": \"a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Ocramius/PackageVersions/zipball/a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\",
                \"reference\": \"a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0.0\",
                \"php\": \"^7.1.0\"
            },
            \"require-dev\": {
                \"composer/composer\": \"^1.6.3\",
                \"doctrine/coding-standard\": \"^5.0.1\",
                \"ext-zip\": \"*\",
                \"infection/infection\": \"^0.7.1\",
                \"phpunit/phpunit\": \"^7.0.0\"
            },
            \"type\": \"composer-plugin\",
            \"extra\": {
                \"class\": \"PackageVersions\\\\Installer\",
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
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
            \"description\": \"Composer plugin that provides efficient querying for installed package versions (no runtime IO)\",
            \"time\": \"2019-02-21T12:16:21+00:00\"
        },
        {
            \"name\": \"phar-io/manifest\",
            \"version\": \"1.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/manifest.git\",
                \"reference\": \"7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/manifest/zipball/7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\",
                \"reference\": \"7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-phar\": \"*\",
                \"phar-io/version\": \"^2.0\",
                \"php\": \"^5.6 || ^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Heuer\",
                    \"email\": \"sebastian@phpeople.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Component for reading phar.io manifest information from a PHP Archive (PHAR)\",
            \"time\": \"2018-07-08T19:23:20+00:00\"
        },
        {
            \"name\": \"phar-io/version\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/version.git\",
                \"reference\": \"45a2ec53a73c70ce41d55cedef9063630abaf1b6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/version/zipball/45a2ec53a73c70ce41d55cedef9063630abaf1b6\",
                \"reference\": \"45a2ec53a73c70ce41d55cedef9063630abaf1b6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Heuer\",
                    \"email\": \"sebastian@phpeople.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Library for handling version information and constraints\",
            \"time\": \"2018-07-08T19:19:57+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-common\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionCommon.git\",
                \"reference\": \"21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionCommon/zipball/21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\",
                \"reference\": \"21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.5\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jaap van Otterdijk\",
                    \"email\": \"opensource@ijaap.nl\"
                }
            ],
            \"description\": \"Common reflection classes used by phpdocumentor to reflect the code structure\",
            \"homepage\": \"http://www.phpdoc.org\",
            \"keywords\": [
                \"FQSEN\",
                \"phpDocumentor\",
                \"phpdoc\",
                \"reflection\",
                \"static analysis\"
            ],
            \"time\": \"2017-09-11T18:02:19+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-docblock\",
            \"version\": \"4.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionDocBlock.git\",
                \"reference\": \"bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\",
                \"reference\": \"bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"phpdocumentor/reflection-common\": \"^1.0.0\",
                \"phpdocumentor/type-resolver\": \"^0.4.0\",
                \"webmozart/assert\": \"^1.0\"
            },
            \"require-dev\": {
                \"doctrine/instantiator\": \"~1.0.5\",
                \"mockery/mockery\": \"^1.0\",
                \"phpunit/phpunit\": \"^6.4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Mike van Riel\",
                    \"email\": \"me@mikevanriel.com\"
                }
            ],
            \"description\": \"With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.\",
            \"time\": \"2019-04-30T17:48:53+00:00\"
        },
        {
            \"name\": \"phpdocumentor/type-resolver\",
            \"version\": \"0.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/TypeResolver.git\",
                \"reference\": \"9c977708995954784726e25d0cd1dddf4e65b0f7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/TypeResolver/zipball/9c977708995954784726e25d0cd1dddf4e65b0f7\",
                \"reference\": \"9c977708995954784726e25d0cd1dddf4e65b0f7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5 || ^7.0\",
                \"phpdocumentor/reflection-common\": \"^1.0\"
            },
            \"require-dev\": {
                \"mockery/mockery\": \"^0.9.4\",
                \"phpunit/phpunit\": \"^5.2||^4.8.24\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Mike van Riel\",
                    \"email\": \"me@mikevanriel.com\"
                }
            ],
            \"time\": \"2017-07-14T14:27:02+00:00\"
        },
        {
            \"name\": \"phpspec/prophecy\",
            \"version\": \"1.8.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpspec/prophecy.git\",
                \"reference\": \"1927e75f4ed19131ec9bcc3b002e07fb1173ee76\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpspec/prophecy/zipball/1927e75f4ed19131ec9bcc3b002e07fb1173ee76\",
                \"reference\": \"1927e75f4ed19131ec9bcc3b002e07fb1173ee76\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.0.2\",
                \"php\": \"^5.3|^7.0\",
                \"phpdocumentor/reflection-docblock\": \"^2.0|^3.0.2|^4.0\",
                \"sebastian/comparator\": \"^1.1|^2.0|^3.0\",
                \"sebastian/recursion-context\": \"^1.0|^2.0|^3.0\"
            },
            \"require-dev\": {
                \"phpspec/phpspec\": \"^2.5|^3.2\",
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.5 || ^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Prophecy\\\\\": \"src/Prophecy\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Konstantin Kudryashov\",
                    \"email\": \"ever.zet@gmail.com\",
                    \"homepage\": \"http://everzet.com\"
                },
                {
                    \"name\": \"Marcello Duarte\",
                    \"email\": \"marcello.duarte@gmail.com\"
                }
            ],
            \"description\": \"Highly opinionated mocking framework for PHP 5.3+\",
            \"homepage\": \"https://github.com/phpspec/prophecy\",
            \"keywords\": [
                \"Double\",
                \"Dummy\",
                \"fake\",
                \"mock\",
                \"spy\",
                \"stub\"
            ],
            \"time\": \"2019-06-13T12:50:23+00:00\"
        },
        {
            \"name\": \"phpstan/phpdoc-parser\",
            \"version\": \"0.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpdoc-parser.git\",
                \"reference\": \"2cc49f47c69b023eaf05b48e6529389893b13d74\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpdoc-parser/zipball/2cc49f47c69b023eaf05b48e6529389893b13d74\",
                \"reference\": \"2cc49f47c69b023eaf05b48e6529389893b13d74\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.1\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"^2.0.0\",
                \"jakub-onderka/php-parallel-lint\": \"^0.9.2\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan\": \"^0.10\",
                \"phpunit/phpunit\": \"^6.3\",
                \"slevomat/coding-standard\": \"^3.3.0\",
                \"symfony/process\": \"^3.4 || ^4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\PhpDocParser\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PHPDoc parser with support for nullable, intersection and generic types\",
            \"time\": \"2019-01-14T12:26:23+00:00\"
        },
        {
            \"name\": \"phpstan/phpstan\",
            \"version\": \"0.11.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpstan.git\",
                \"reference\": \"e4644b4a8fd393c346f1137305fb2f76a7dc20a7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpstan/zipball/e4644b4a8fd393c346f1137305fb2f76a7dc20a7\",
                \"reference\": \"e4644b4a8fd393c346f1137305fb2f76a7dc20a7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/xdebug-handler\": \"^1.3.0\",
                \"jean85/pretty-package-versions\": \"^1.0.3\",
                \"nette/bootstrap\": \"^2.4 || ^3.0\",
                \"nette/di\": \"^2.4.7 || ^3.0\",
                \"nette/robot-loader\": \"^3.0.1\",
                \"nette/utils\": \"^2.4.5 || ^3.0\",
                \"nikic/php-parser\": \"^4.0.2\",
                \"php\": \"~7.1\",
                \"phpstan/phpdoc-parser\": \"^0.3\",
                \"symfony/console\": \"~3.2 || ~4.0\",
                \"symfony/finder\": \"~3.2 || ~4.0\"
            },
            \"conflict\": {
                \"symfony/console\": \"3.4.16 || 4.1.5\"
            },
            \"require-dev\": {
                \"brianium/paratest\": \"^2.0\",
                \"consistence/coding-standard\": \"^3.5\",
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.4.4\",
                \"ext-intl\": \"*\",
                \"ext-mysqli\": \"*\",
                \"ext-soap\": \"*\",
                \"ext-zip\": \"*\",
                \"jakub-onderka/php-parallel-lint\": \"^1.0\",
                \"localheinz/composer-normalize\": \"^1.1.0\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan-deprecation-rules\": \"^0.11\",
                \"phpstan/phpstan-php-parser\": \"^0.11\",
                \"phpstan/phpstan-phpunit\": \"^0.11\",
                \"phpstan/phpstan-strict-rules\": \"^0.11\",
                \"phpunit/phpunit\": \"^7.0\",
                \"slevomat/coding-standard\": \"^4.7.2\",
                \"squizlabs/php_codesniffer\": \"^3.3.2\"
            },
            \"bin\": [
                \"bin/phpstan\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.11-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\\": [
                        \"src/\",
                        \"build/PHPStan\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PHPStan - PHP Static Analysis Tool\",
            \"time\": \"2019-03-10T16:25:30+00:00\"
        },
        {
            \"name\": \"phpstan/phpstan-phpunit\",
            \"version\": \"0.11\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpstan-phpunit.git\",
                \"reference\": \"70c22d44b96a21a4952fc13021a5a63cc83f5c81\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpstan-phpunit/zipball/70c22d44b96a21a4952fc13021a5a63cc83f5c81\",
                \"reference\": \"70c22d44b96a21a4952fc13021a5a63cc83f5c81\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nikic/php-parser\": \"^4.0\",
                \"php\": \"~7.1\",
                \"phpstan/phpdoc-parser\": \"^0.3\",
                \"phpstan/phpstan\": \"^0.11\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<7.0\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"^3.0.1\",
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.4.4\",
                \"jakub-onderka/php-parallel-lint\": \"^1.0\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan-strict-rules\": \"^0.11\",
                \"phpunit/phpunit\": \"^7.0\",
                \"satooshi/php-coveralls\": \"^1.0\",
                \"slevomat/coding-standard\": \"^4.5.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.11-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PHPUnit extensions and rules for PHPStan\",
            \"time\": \"2018-12-22T14:05:04+00:00\"
        },
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"6.1.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\",
                \"reference\": \"807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.1\",
                \"phpunit/php-file-iterator\": \"^2.0\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-token-stream\": \"^3.0\",
                \"sebastian/code-unit-reverse-lookup\": \"^1.0.1\",
                \"sebastian/environment\": \"^3.1 || ^4.0\",
                \"sebastian/version\": \"^2.0.1\",
                \"theseer/tokenizer\": \"^1.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"suggest\": {
                \"ext-xdebug\": \"^2.6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"6.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Library that provides collection, processing, and rendering functionality for PHP code coverage information.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-code-coverage\",
            \"keywords\": [
                \"coverage\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2018-10-31T16:06:48+00:00\"
        },
        {
            \"name\": \"phpunit/php-file-iterator\",
            \"version\": \"2.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-file-iterator.git\",
                \"reference\": \"050bedf145a257b1ff02746c31894800e5122946\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/050bedf145a257b1ff02746c31894800e5122946\",
                \"reference\": \"050bedf145a257b1ff02746c31894800e5122946\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"FilterIterator implementation that filters files based on a list of suffixes.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-file-iterator/\",
            \"keywords\": [
                \"filesystem\",
                \"iterator\"
            ],
            \"time\": \"2018-09-13T20:33:42+00:00\"
        },
        {
            \"name\": \"phpunit/php-text-template\",
            \"version\": \"1.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-text-template.git\",
                \"reference\": \"31f8b717e51d9a2afca6c9f046f5d69fc27c8686\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/31f8b717e51d9a2afca6c9f046f5d69fc27c8686\",
                \"reference\": \"31f8b717e51d9a2afca6c9f046f5d69fc27c8686\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Simple template engine.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-text-template/\",
            \"keywords\": [
                \"template\"
            ],
            \"time\": \"2015-06-21T13:50:34+00:00\"
        },
        {
            \"name\": \"phpunit/php-timer\",
            \"version\": \"2.1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-timer.git\",
                \"reference\": \"1038454804406b0b5f5f520358e78c1c2f71501e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-timer/zipball/1038454804406b0b5f5f520358e78c1c2f71501e\",
                \"reference\": \"1038454804406b0b5f5f520358e78c1c2f71501e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Utility class for timing\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-timer/\",
            \"keywords\": [
                \"timer\"
            ],
            \"time\": \"2019-06-07T04:22:29+00:00\"
        },
        {
            \"name\": \"phpunit/php-token-stream\",
            \"version\": \"3.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-token-stream.git\",
                \"reference\": \"e899757bb3df5ff6e95089132f32cd59aac2220a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/e899757bb3df5ff6e95089132f32cd59aac2220a\",
                \"reference\": \"e899757bb3df5ff6e95089132f32cd59aac2220a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Wrapper around PHP's tokenizer extension.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-token-stream/\",
            \"keywords\": [
                \"tokenizer\"
            ],
            \"time\": \"2019-07-25T05:29:42+00:00\"
        },
        {
            \"name\": \"phpunit/phpunit\",
            \"version\": \"7.5.15\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"d79c053d972856b8b941bb233e39dc521a5093f0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/d79c053d972856b8b941bb233e39dc521a5093f0\",
                \"reference\": \"d79c053d972856b8b941bb233e39dc521a5093f0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.1\",
                \"ext-dom\": \"*\",
                \"ext-json\": \"*\",
                \"ext-libxml\": \"*\",
                \"ext-mbstring\": \"*\",
                \"ext-xml\": \"*\",
                \"myclabs/deep-copy\": \"^1.7\",
                \"phar-io/manifest\": \"^1.0.2\",
                \"phar-io/version\": \"^2.0\",
                \"php\": \"^7.1\",
                \"phpspec/prophecy\": \"^1.7\",
                \"phpunit/php-code-coverage\": \"^6.0.7\",
                \"phpunit/php-file-iterator\": \"^2.0.1\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-timer\": \"^2.1\",
                \"sebastian/comparator\": \"^3.0\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/environment\": \"^4.0\",
                \"sebastian/exporter\": \"^3.1\",
                \"sebastian/global-state\": \"^2.0\",
                \"sebastian/object-enumerator\": \"^3.0.3\",
                \"sebastian/resource-operations\": \"^2.0\",
                \"sebastian/version\": \"^2.0.1\"
            },
            \"conflict\": {
                \"phpunit/phpunit-mock-objects\": \"*\"
            },
            \"require-dev\": {
                \"ext-pdo\": \"*\"
            },
            \"suggest\": {
                \"ext-soap\": \"*\",
                \"ext-xdebug\": \"*\",
                \"phpunit/php-invoker\": \"^2.0\"
            },
            \"bin\": [
                \"phpunit\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"7.5-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"The PHP Unit Testing framework.\",
            \"homepage\": \"https://phpunit.de/\",
            \"keywords\": [
                \"phpunit\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2019-08-21T07:05:16+00:00\"
        },
        {
            \"name\": \"psr/log\",
            \"version\": \"1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/log.git\",
                \"reference\": \"6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/log/zipball/6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd\",
                \"reference\": \"6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
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
            ],
            \"time\": \"2018-11-20T15:27:04+00:00\"
        },
        {
            \"name\": \"sebastian/code-unit-reverse-lookup\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup.git\",
                \"reference\": \"4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/code-unit-reverse-lookup/zipball/4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\",
                \"reference\": \"4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^5.7 || ^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Looks up which function or method a line of code belongs to\",
            \"homepage\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup/\",
            \"time\": \"2017-03-04T06:30:41+00:00\"
        },
        {
            \"name\": \"sebastian/comparator\",
            \"version\": \"3.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/comparator.git\",
                \"reference\": \"5de4fc177adf9bce8df98d8d141a7559d7ccf6da\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/comparator/zipball/5de4fc177adf9bce8df98d8d141a7559d7ccf6da\",
                \"reference\": \"5de4fc177adf9bce8df98d8d141a7559d7ccf6da\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/exporter\": \"^3.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@2bepublished.at\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides the functionality to compare PHP values for equality\",
            \"homepage\": \"https://github.com/sebastianbergmann/comparator\",
            \"keywords\": [
                \"comparator\",
                \"compare\",
                \"equality\"
            ],
            \"time\": \"2018-07-12T15:12:46+00:00\"
        },
        {
            \"name\": \"sebastian/diff\",
            \"version\": \"3.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/diff.git\",
                \"reference\": \"720fcc7e9b5cf384ea68d9d930d480907a0c1a29\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/diff/zipball/720fcc7e9b5cf384ea68d9d930d480907a0c1a29\",
                \"reference\": \"720fcc7e9b5cf384ea68d9d930d480907a0c1a29\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.5 || ^8.0\",
                \"symfony/process\": \"^2 || ^3.3 || ^4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Kore Nordmann\",
                    \"email\": \"mail@kore-nordmann.de\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Diff implementation\",
            \"homepage\": \"https://github.com/sebastianbergmann/diff\",
            \"keywords\": [
                \"diff\",
                \"udiff\",
                \"unidiff\",
                \"unified diff\"
            ],
            \"time\": \"2019-02-04T06:01:07+00:00\"
        },
        {
            \"name\": \"sebastian/environment\",
            \"version\": \"4.2.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/environment.git\",
                \"reference\": \"f2a2c8e1c97c11ace607a7a667d73d47c19fe404\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/environment/zipball/f2a2c8e1c97c11ace607a7a667d73d47c19fe404\",
                \"reference\": \"f2a2c8e1c97c11ace607a7a667d73d47c19fe404\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.5\"
            },
            \"suggest\": {
                \"ext-posix\": \"*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides functionality to handle HHVM/PHP environments\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/environment\",
            \"keywords\": [
                \"Xdebug\",
                \"environment\",
                \"hhvm\"
            ],
            \"time\": \"2019-05-05T09:05:15+00:00\"
        },
        {
            \"name\": \"sebastian/exporter\",
            \"version\": \"3.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/exporter.git\",
                \"reference\": \"06a9a5947f47b3029d76118eb5c22802e5869687\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/exporter/zipball/06a9a5947f47b3029d76118eb5c22802e5869687\",
                \"reference\": \"06a9a5947f47b3029d76118eb5c22802e5869687\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"ext-mbstring\": \"*\",
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                },
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                }
            ],
            \"description\": \"Provides the functionality to export PHP variables for visualization\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/exporter\",
            \"keywords\": [
                \"export\",
                \"exporter\"
            ],
            \"time\": \"2019-08-11T12:43:14+00:00\"
        },
        {
            \"name\": \"sebastian/global-state\",
            \"version\": \"2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/global-state.git\",
                \"reference\": \"e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/global-state/zipball/e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\",
                \"reference\": \"e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"suggest\": {
                \"ext-uopz\": \"*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Snapshotting of global state\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/global-state\",
            \"keywords\": [
                \"global state\"
            ],
            \"time\": \"2017-04-27T15:39:26+00:00\"
        },
        {
            \"name\": \"sebastian/object-enumerator\",
            \"version\": \"3.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/object-enumerator.git\",
                \"reference\": \"7cfd9e65d11ffb5af41198476395774d4c8a84c5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/object-enumerator/zipball/7cfd9e65d11ffb5af41198476395774d4c8a84c5\",
                \"reference\": \"7cfd9e65d11ffb5af41198476395774d4c8a84c5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"sebastian/object-reflector\": \"^1.1.1\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Traverses array structures and object graphs to enumerate all referenced objects\",
            \"homepage\": \"https://github.com/sebastianbergmann/object-enumerator/\",
            \"time\": \"2017-08-03T12:35:26+00:00\"
        },
        {
            \"name\": \"sebastian/object-reflector\",
            \"version\": \"1.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/object-reflector.git\",
                \"reference\": \"773f97c67f28de00d397be301821b06708fca0be\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/object-reflector/zipball/773f97c67f28de00d397be301821b06708fca0be\",
                \"reference\": \"773f97c67f28de00d397be301821b06708fca0be\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Allows reflection of object attributes, including inherited and non-public ones\",
            \"homepage\": \"https://github.com/sebastianbergmann/object-reflector/\",
            \"time\": \"2017-03-29T09:07:27+00:00\"
        },
        {
            \"name\": \"sebastian/recursion-context\",
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/recursion-context.git\",
                \"reference\": \"5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/recursion-context/zipball/5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\",
                \"reference\": \"5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                }
            ],
            \"description\": \"Provides functionality to recursively process PHP variables\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/recursion-context\",
            \"time\": \"2017-03-03T06:23:57+00:00\"
        },
        {
            \"name\": \"sebastian/resource-operations\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/resource-operations.git\",
                \"reference\": \"4d7a795d35b889bf80a0cc04e08d77cedfa917a9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/resource-operations/zipball/4d7a795d35b889bf80a0cc04e08d77cedfa917a9\",
                \"reference\": \"4d7a795d35b889bf80a0cc04e08d77cedfa917a9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides a list of PHP built-in functions that operate on resources\",
            \"homepage\": \"https://www.github.com/sebastianbergmann/resource-operations\",
            \"time\": \"2018-10-04T04:07:39+00:00\"
        },
        {
            \"name\": \"sebastian/version\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/version.git\",
                \"reference\": \"99732be0ddb3361e16ad77b68ba41efc8e979019\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/version/zipball/99732be0ddb3361e16ad77b68ba41efc8e979019\",
                \"reference\": \"99732be0ddb3361e16ad77b68ba41efc8e979019\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Library that helps with managing the version number of Git-hosted PHP projects\",
            \"homepage\": \"https://github.com/sebastianbergmann/version\",
            \"time\": \"2016-10-03T07:35:21+00:00\"
        },
        {
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"3.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"379deb987e26c7cd103a7b387aea178baec96e48\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/379deb987e26c7cd103a7b387aea178baec96e48\",
                \"reference\": \"379deb987e26c7cd103a7b387aea178baec96e48\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-simplexml\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \">=5.4.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.0 || ^5.0 || ^6.0 || ^7.0\"
            },
            \"bin\": [
                \"bin/phpcs\",
                \"bin/phpcbf\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.x-dev\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Greg Sherwood\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.\",
            \"homepage\": \"http://www.squizlabs.com/php-codesniffer\",
            \"keywords\": [
                \"phpcs\",
                \"standards\"
            ],
            \"time\": \"2018-12-19T23:57:18+00:00\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v4.2.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"9dc2299a016497f9ee620be94524e6c0af0280a9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/9dc2299a016497f9ee620be94524e6c0af0280a9\",
                \"reference\": \"9dc2299a016497f9ee620be94524e6c0af0280a9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/contracts\": \"^1.0\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/process\": \"<3.3\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"~3.4|~4.0\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"psr/log\": \"For using the console logger\",
                \"symfony/event-dispatcher\": \"\",
                \"symfony/lock\": \"\",
                \"symfony/process\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
                }
            },
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
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-02-23T15:17:42+00:00\"
        },
        {
            \"name\": \"symfony/contracts\",
            \"version\": \"v1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/contracts.git\",
                \"reference\": \"1aa7ab2429c3d594dd70689604b5cf7421254cdf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/contracts/zipball/1aa7ab2429c3d594dd70689604b5cf7421254cdf\",
                \"reference\": \"1aa7ab2429c3d594dd70689604b5cf7421254cdf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"require-dev\": {
                \"psr/cache\": \"^1.0\",
                \"psr/container\": \"^1.0\"
            },
            \"suggest\": {
                \"psr/cache\": \"When using the Cache contracts\",
                \"psr/container\": \"When using the Service contracts\",
                \"symfony/cache-contracts-implementation\": \"\",
                \"symfony/service-contracts-implementation\": \"\",
                \"symfony/translation-contracts-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"**/Tests/\"
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
            \"description\": \"A set of abstractions extracted out of the Symfony components\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2018-12-05T08:06:11+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v4.2.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"267b7002c1b70ea80db0833c3afe05f0fbde580a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/267b7002c1b70ea80db0833c3afe05f0fbde580a\",
                \"reference\": \"267b7002c1b70ea80db0833c3afe05f0fbde580a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
                }
            },
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
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-02-23T15:42:05+00:00\"
        },
        {
            \"name\": \"symfony/phpunit-bridge\",
            \"version\": \"v4.2.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/phpunit-bridge.git\",
                \"reference\": \"2cc651a38fcb831a405c14fcb76fcb00320e7ee8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/phpunit-bridge/zipball/2cc651a38fcb831a405c14fcb76fcb00320e7ee8\",
                \"reference\": \"2cc651a38fcb831a405c14fcb76fcb00320e7ee8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\"
            },
            \"suggest\": {
                \"symfony/debug\": \"For tracking deprecated interfaces usages at runtime with DebugClassLoader\"
            },
            \"bin\": [
                \"bin/simple-phpunit\"
            ],
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
                },
                \"thanks\": {
                    \"name\": \"phpunit/phpunit\",
                    \"url\": \"https://github.com/sebastianbergmann/phpunit\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"bootstrap.php\"
                ],
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\PhpUnit\\\\\": \"\"
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
            \"description\": \"Symfony PHPUnit Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-02-18T06:49:49+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"550ebaac289296ce228a706d0867afc34687e3f4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/550ebaac289296ce228a706d0867afc34687e3f4\",
                \"reference\": \"550ebaac289296ce228a706d0867afc34687e3f4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-ctype\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.12-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Ctype\\\\\": \"\"
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
                    \"name\": \"Gert de Pagter\",
                    \"email\": \"BackEndTea@gmail.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill for ctype functions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"ctype\",
                \"polyfill\",
                \"portable\"
            ],
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.10.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"c79c051f5b3a46be09205c73b80b346e4153e494\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/c79c051f5b3a46be09205c73b80b346e4153e494\",
                \"reference\": \"c79c051f5b3a46be09205c73b80b346e4153e494\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-mbstring\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.9-dev\"
                }
            },
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
            ],
            \"time\": \"2018-09-21T13:07:52+00:00\"
        },
        {
            \"name\": \"theseer/tokenizer\",
            \"version\": \"1.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/theseer/tokenizer.git\",
                \"reference\": \"11336f6f84e16a720dae9d8e6ed5019efa85a0f9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/theseer/tokenizer/zipball/11336f6f84e16a720dae9d8e6ed5019efa85a0f9\",
                \"reference\": \"11336f6f84e16a720dae9d8e6ed5019efa85a0f9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"role\": \"Developer\",
                    \"email\": \"arne@blankerts.de\"
                }
            ],
            \"description\": \"A small library for converting tokenized PHP source code into XML and potentially other formats\",
            \"time\": \"2019-06-13T22:48:21+00:00\"
        },
        {
            \"name\": \"webmozart/assert\",
            \"version\": \"1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/assert.git\",
                \"reference\": \"88e6d84706d09a236046d686bbea96f07b3a34f4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/assert/zipball/88e6d84706d09a236046d686bbea96f07b3a34f4\",
                \"reference\": \"88e6d84706d09a236046d686bbea96f07b3a34f4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3 || ^7.0\",
                \"symfony/polyfill-ctype\": \"^1.8\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.36 || ^7.5.13\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Webmozart\\\\Assert\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                }
            ],
            \"description\": \"Assertions to validate method input/output with nice error messages.\",
            \"keywords\": [
                \"assert\",
                \"check\",
                \"validate\"
            ],
            \"time\": \"2019-08-24T08:43:50+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.1\"
    },
    \"platform-dev\": []
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/common/composer.lock";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"_readme\": [
        \"This file locks the dependencies of your project to a known state\",
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies\",
        \"This file is @generated automatically\"
    ],
    \"content-hash\": \"40bcfe4c5277cdfa06868ad21fd26d85\",
    \"packages\": [
        {
            \"name\": \"doctrine/annotations\",
            \"version\": \"v1.6.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/annotations.git\",
                \"reference\": \"c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\",
                \"reference\": \"c7f2050c68a9ab0bdb0f98567ec08d80ea7d24d5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"1.*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"1.*\",
                \"phpunit/phpunit\": \"^6.4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.6.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            ],
            \"time\": \"2017-12-06T07:11:42+00:00\"
        },
        {
            \"name\": \"doctrine/cache\",
            \"version\": \"v1.8.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/cache.git\",
                \"reference\": \"d768d58baee9a4862ca783840eca1b9add7a7f57\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/d768d58baee9a4862ca783840eca1b9add7a7f57\",
                \"reference\": \"d768d58baee9a4862ca783840eca1b9add7a7f57\",
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
                \"doctrine/coding-standard\": \"^4.0\",
                \"mongodb/mongodb\": \"^1.1\",
                \"phpunit/phpunit\": \"^7.0\",
                \"predis/predis\": \"~1.0\"
            },
            \"suggest\": {
                \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            \"description\": \"Caching library offering an object-oriented API for many cache backends\",
            \"homepage\": \"https://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2018-08-21T18:01:43+00:00\"
        },
        {
            \"name\": \"doctrine/collections\",
            \"version\": \"v1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/collections.git\",
                \"reference\": \"a01ee38fcd999f34d9bfbcee59dbda5105449cbf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/collections/zipball/a01ee38fcd999f34d9bfbcee59dbda5105449cbf\",
                \"reference\": \"a01ee38fcd999f34d9bfbcee59dbda5105449cbf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"~0.1@dev\",
                \"phpunit/phpunit\": \"^5.7\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Doctrine\\\\Common\\\\Collections\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            \"description\": \"Collections Abstraction library\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"array\",
                \"collections\",
                \"iterator\"
            ],
            \"time\": \"2017-07-22T10:37:32+00:00\"
        },
        {
            \"name\": \"doctrine/event-manager\",
            \"version\": \"v1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/event-manager.git\",
                \"reference\": \"a520bc093a0170feeb6b14e9d83f3a14452e64b3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/event-manager/zipball/a520bc093a0170feeb6b14e9d83f3a14452e64b3\",
                \"reference\": \"a520bc093a0170feeb6b14e9d83f3a14452e64b3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \"<2.9@dev\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            \"description\": \"Doctrine Event Manager component\",
            \"homepage\": \"https://www.doctrine-project.org/projects/event-manager.html\",
            \"keywords\": [
                \"event\",
                \"eventdispatcher\",
                \"eventmanager\"
            ],
            \"time\": \"2018-06-11T11:59:03+00:00\"
        },
        {
            \"name\": \"doctrine/inflector\",
            \"version\": \"v1.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/inflector.git\",
                \"reference\": \"5527a48b7313d15261292c149e55e26eae771b0a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/inflector/zipball/5527a48b7313d15261292c149e55e26eae771b0a\",
                \"reference\": \"5527a48b7313d15261292c149e55e26eae771b0a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            ],
            \"time\": \"2018-01-09T20:05:19+00:00\"
        },
        {
            \"name\": \"doctrine/lexer\",
            \"version\": \"v1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"83893c552fd2045dd78aef794c31e694c37c0b8c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/83893c552fd2045dd78aef794c31e694c37c0b8c\",
                \"reference\": \"83893c552fd2045dd78aef794c31e694c37c0b8c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Base library for a lexer that can be used in Top-Down, Recursive Descent Parsers.\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"lexer\",
                \"parser\"
            ],
            \"time\": \"2014-09-09T13:34:57+00:00\"
        },
        {
            \"name\": \"doctrine/persistence\",
            \"version\": \"v1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/persistence.git\",
                \"reference\": \"c0f1c17602afc18b4cbd8e1c8125f264c9cf7d38\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/persistence/zipball/c0f1c17602afc18b4cbd8e1c8125f264c9cf7d38\",
                \"reference\": \"c0f1c17602afc18b4cbd8e1c8125f264c9cf7d38\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"doctrine/cache\": \"^1.0\",
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/event-manager\": \"^1.0\",
                \"doctrine/reflection\": \"^1.0\",
                \"php\": \"^7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \"<2.10@dev\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^5.0\",
                \"phpstan/phpstan\": \"^0.8\",
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            ],
            \"time\": \"2018-11-21T00:33:13+00:00\"
        },
        {
            \"name\": \"doctrine/reflection\",
            \"version\": \"v1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/reflection.git\",
                \"reference\": \"02538d3f95e88eb397a5f86274deb2c6175c2ab6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/reflection/zipball/02538d3f95e88eb397a5f86274deb2c6175c2ab6\",
                \"reference\": \"02538d3f95e88eb397a5f86274deb2c6175c2ab6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/annotations\": \"^1.0\",
                \"ext-tokenizer\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^4.0\",
                \"doctrine/common\": \"^2.8\",
                \"phpstan/phpstan\": \"^0.9.2\",
                \"phpstan/phpstan-phpunit\": \"^0.9.4\",
                \"phpunit/phpunit\": \"^7.0\",
                \"squizlabs/php_codesniffer\": \"^3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            \"description\": \"Doctrine Reflection component\",
            \"homepage\": \"https://www.doctrine-project.org/projects/reflection.html\",
            \"keywords\": [
                \"reflection\"
            ],
            \"time\": \"2018-06-14T14:45:07+00:00\"
        }
    ],
    \"packages-dev\": [
        {
            \"name\": \"composer/xdebug-handler\",
            \"version\": \"1.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/xdebug-handler.git\",
                \"reference\": \"d17708133b6c276d6e42ef887a877866b909d892\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/xdebug-handler/zipball/d17708133b6c276d6e42ef887a877866b909d892\",
                \"reference\": \"d17708133b6c276d6e42ef887a877866b909d892\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0\",
                \"psr/log\": \"^1.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.5\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\XdebugHandler\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"John Stevenson\",
                    \"email\": \"john-stevenson@blueyonder.co.uk\"
                }
            ],
            \"description\": \"Restarts a process without xdebug.\",
            \"keywords\": [
                \"Xdebug\",
                \"performance\"
            ],
            \"time\": \"2019-01-28T20:25:53+00:00\"
        },
        {
            \"name\": \"dealerdirect/phpcodesniffer-composer-installer\",
            \"version\": \"v0.4.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Dealerdirect/phpcodesniffer-composer-installer.git\",
                \"reference\": \"2e41850d5f7797cbb1af7b030d245b3b24e63a08\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Dealerdirect/phpcodesniffer-composer-installer/zipball/2e41850d5f7797cbb1af7b030d245b3b24e63a08\",
                \"reference\": \"2e41850d5f7797cbb1af7b030d245b3b24e63a08\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0\",
                \"php\": \"^5.3|^7\",
                \"squizlabs/php_codesniffer\": \"*\"
            },
            \"require-dev\": {
                \"composer/composer\": \"*\",
                \"wimg/php-compatibility\": \"^8.0\"
            },
            \"suggest\": {
                \"dealerdirect/qa-tools\": \"All the PHP QA tools you'll need\"
            },
            \"type\": \"composer-plugin\",
            \"extra\": {
                \"class\": \"Dealerdirect\\\\Composer\\\\Plugin\\\\Installers\\\\PHPCodeSniffer\\\\Plugin\"
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Dealerdirect\\\\Composer\\\\Plugin\\\\Installers\\\\PHPCodeSniffer\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Franck Nijhof\",
                    \"email\": \"f.nijhof@dealerdirect.nl\",
                    \"homepage\": \"http://workingatdealerdirect.eu\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"PHP_CodeSniffer Standards Composer Installer Plugin\",
            \"homepage\": \"http://workingatdealerdirect.eu\",
            \"keywords\": [
                \"PHPCodeSniffer\",
                \"PHP_CodeSniffer\",
                \"code quality\",
                \"codesniffer\",
                \"composer\",
                \"installer\",
                \"phpcs\",
                \"plugin\",
                \"qa\",
                \"quality\",
                \"standard\",
                \"standards\",
                \"style guide\",
                \"stylecheck\",
                \"tests\"
            ],
            \"time\": \"2017-12-06T16:27:17+00:00\"
        },
        {
            \"name\": \"doctrine/coding-standard\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/coding-standard.git\",
                \"reference\": \"d0af8acc36d69f315d550eef78a9607bba24a6da\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/coding-standard/zipball/d0af8acc36d69f315d550eef78a9607bba24a6da\",
                \"reference\": \"d0af8acc36d69f315d550eef78a9607bba24a6da\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.4.2\",
                \"php\": \"^7.1\",
                \"squizlabs/php_codesniffer\": \"~3.0\"
            },
            \"type\": \"phpcodesniffer-standard\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Sniffs\\\\\": \"lib/Doctrine/Sniffs\"
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
                    \"name\": \"Steve Müller\",
                    \"email\": \"st.mueller@dzh-online.de\"
                }
            ],
            \"description\": \"Doctrine Coding Standard\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"code\",
                \"coding\",
                \"cs\",
                \"doctrine\",
                \"sniffer\",
                \"standard\",
                \"style\"
            ],
            \"time\": \"2017-08-20T01:30:16+00:00\"
        },
        {
            \"name\": \"doctrine/instantiator\",
            \"version\": \"1.2.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/instantiator.git\",
                \"reference\": \"a2c590166b2133a4633738648b6b064edae0814a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/instantiator/zipball/a2c590166b2133a4633738648b6b064edae0814a\",
                \"reference\": \"a2c590166b2133a4633738648b6b064edae0814a\",
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
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.2.x-dev\"
                }
            },
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
            ],
            \"time\": \"2019-03-17T17:37:11+00:00\"
        },
        {
            \"name\": \"jean85/pretty-package-versions\",
            \"version\": \"1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Jean85/pretty-package-versions.git\",
                \"reference\": \"75c7effcf3f77501d0e0caa75111aff4daa0dd48\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Jean85/pretty-package-versions/zipball/75c7effcf3f77501d0e0caa75111aff4daa0dd48\",
                \"reference\": \"75c7effcf3f77501d0e0caa75111aff4daa0dd48\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ocramius/package-versions\": \"^1.2.0\",
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Jean85\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Alessandro Lai\",
                    \"email\": \"alessandro.lai85@gmail.com\"
                }
            ],
            \"description\": \"A wrapper for ocramius/package-versions to get pretty versions strings\",
            \"keywords\": [
                \"composer\",
                \"package\",
                \"release\",
                \"versions\"
            ],
            \"time\": \"2018-06-13T13:22:40+00:00\"
        },
        {
            \"name\": \"myclabs/deep-copy\",
            \"version\": \"1.9.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/myclabs/DeepCopy.git\",
                \"reference\": \"007c053ae6f31bba39dfa19a7726f56e9763bbea\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/myclabs/DeepCopy/zipball/007c053ae6f31bba39dfa19a7726f56e9763bbea\",
                \"reference\": \"007c053ae6f31bba39dfa19a7726f56e9763bbea\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"replace\": {
                \"myclabs/deep-copy\": \"self.version\"
            },
            \"require-dev\": {
                \"doctrine/collections\": \"^1.0\",
                \"doctrine/common\": \"^2.6\",
                \"phpunit/phpunit\": \"^7.1\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"DeepCopy\\\\\": \"src/DeepCopy/\"
                },
                \"files\": [
                    \"src/DeepCopy/deep_copy.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Create deep copies (clones) of your objects\",
            \"keywords\": [
                \"clone\",
                \"copy\",
                \"duplicate\",
                \"object\",
                \"object graph\"
            ],
            \"time\": \"2019-08-09T12:45:53+00:00\"
        },
        {
            \"name\": \"nette/bootstrap\",
            \"version\": \"v2.4.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/bootstrap.git\",
                \"reference\": \"268816e3f1bb7426c3a4ceec2bd38a036b532543\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/bootstrap/zipball/268816e3f1bb7426c3a4ceec2bd38a036b532543\",
                \"reference\": \"268816e3f1bb7426c3a4ceec2bd38a036b532543\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/di\": \"~2.4.7\",
                \"nette/utils\": \"~2.4\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"latte/latte\": \"~2.2\",
                \"nette/application\": \"~2.3\",
                \"nette/caching\": \"~2.3\",
                \"nette/database\": \"~2.3\",
                \"nette/forms\": \"~2.3\",
                \"nette/http\": \"~2.4.0\",
                \"nette/mail\": \"~2.3\",
                \"nette/robot-loader\": \"^2.4.2 || ^3.0\",
                \"nette/safe-stream\": \"~2.2\",
                \"nette/security\": \"~2.3\",
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.4.1\"
            },
            \"suggest\": {
                \"nette/robot-loader\": \"to use Configurator::createRobotLoader()\",
                \"tracy/tracy\": \"to use Configurator::enableTracy()\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"? Nette Bootstrap: the simple way to configure and bootstrap your Nette application.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"bootstrapping\",
                \"configurator\",
                \"nette\"
            ],
            \"time\": \"2018-05-17T12:52:20+00:00\"
        },
        {
            \"name\": \"nette/di\",
            \"version\": \"v2.4.15\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/di.git\",
                \"reference\": \"d0561b8f77e8ef2ed6d83328860e16c81a5a8649\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/di/zipball/d0561b8f77e8ef2ed6d83328860e16c81a5a8649\",
                \"reference\": \"d0561b8f77e8ef2ed6d83328860e16c81a5a8649\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"nette/neon\": \"^2.3.3 || ~3.0.0\",
                \"nette/php-generator\": \"^2.6.1 || ^3.0.0\",
                \"nette/utils\": \"^2.5.0 || ~3.0.0\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/bootstrap\": \"<2.4\",
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"? Nette Dependency Injection Container: Flexible, compiled and full-featured DIC with perfectly usable autowiring and support for all new PHP 7.1 features.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"compiled\",
                \"di\",
                \"dic\",
                \"factory\",
                \"ioc\",
                \"nette\",
                \"static\"
            ],
            \"time\": \"2019-01-30T13:26:05+00:00\"
        },
        {
            \"name\": \"nette/finder\",
            \"version\": \"v2.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/finder.git\",
                \"reference\": \"6be1b83ea68ac558aff189d640abe242e0306fe2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/finder/zipball/6be1b83ea68ac558aff189d640abe242e0306fe2\",
                \"reference\": \"6be1b83ea68ac558aff189d640abe242e0306fe2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/utils\": \"^2.4 || ~3.0.0\",
                \"php\": \">=7.1\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.5-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🔍 Nette Finder: find files and directories with an intuitive API.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"filesystem\",
                \"glob\",
                \"iterator\",
                \"nette\"
            ],
            \"time\": \"2019-02-28T18:13:25+00:00\"
        },
        {
            \"name\": \"nette/neon\",
            \"version\": \"v3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/neon.git\",
                \"reference\": \"cbff32059cbdd8720deccf9e9eace6ee516f02eb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/neon/zipball/cbff32059cbdd8720deccf9e9eace6ee516f02eb\",
                \"reference\": \"cbff32059cbdd8720deccf9e9eace6ee516f02eb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-iconv\": \"*\",
                \"ext-json\": \"*\",
                \"php\": \">=7.0\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"🍸 Nette NEON: encodes and decodes NEON file format.\",
            \"homepage\": \"http://ne-on.org\",
            \"keywords\": [
                \"export\",
                \"import\",
                \"neon\",
                \"nette\",
                \"yaml\"
            ],
            \"time\": \"2019-02-05T21:30:40+00:00\"
        },
        {
            \"name\": \"nette/php-generator\",
            \"version\": \"v3.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/php-generator.git\",
                \"reference\": \"9de4e093a130f7a1bd175198799ebc0efbac6924\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/php-generator/zipball/9de4e093a130f7a1bd175198799ebc0efbac6924\",
                \"reference\": \"9de4e093a130f7a1bd175198799ebc0efbac6924\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nette/utils\": \"^2.4.2 || ~3.0.0\",
                \"php\": \">=7.1\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.2-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"? Nette PHP Generator: generates neat PHP code for you. Supports new PHP 7.3 features.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"code\",
                \"nette\",
                \"php\",
                \"scaffolding\"
            ],
            \"time\": \"2018-11-27T19:00:14+00:00\"
        },
        {
            \"name\": \"nette/robot-loader\",
            \"version\": \"v3.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/robot-loader.git\",
                \"reference\": \"3e8d75d6d976e191bdf46752ca40a286671219d2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/robot-loader/zipball/3e8d75d6d976e191bdf46752ca40a286671219d2\",
                \"reference\": \"3e8d75d6d976e191bdf46752ca40a286671219d2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"nette/finder\": \"^2.3 || ^3.0\",
                \"nette/utils\": \"^2.4 || ^3.0\",
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"^2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"? Nette RobotLoader: high performance and comfortable autoloader that will search and autoload classes within your application.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"autoload\",
                \"class\",
                \"interface\",
                \"nette\",
                \"trait\"
            ],
            \"time\": \"2019-03-01T20:23:02+00:00\"
        },
        {
            \"name\": \"nette/utils\",
            \"version\": \"v2.5.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nette/utils.git\",
                \"reference\": \"17b9f76f2abd0c943adfb556e56f2165460b15ce\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nette/utils/zipball/17b9f76f2abd0c943adfb556e56f2165460b15ce\",
                \"reference\": \"17b9f76f2abd0c943adfb556e56f2165460b15ce\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6.0\"
            },
            \"conflict\": {
                \"nette/nette\": \"<2.2\"
            },
            \"require-dev\": {
                \"nette/tester\": \"~2.0\",
                \"tracy/tracy\": \"^2.3\"
            },
            \"suggest\": {
                \"ext-gd\": \"to use Image\",
                \"ext-iconv\": \"to use Strings::webalize() and toAscii()\",
                \"ext-intl\": \"for script transliteration in Strings::webalize() and toAscii()\",
                \"ext-json\": \"to use Nette\\\\Utils\\\\Json\",
                \"ext-mbstring\": \"to use Strings::lower() etc...\",
                \"ext-xml\": \"to use Strings::length() etc. when mbstring is not available\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.5-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ],
                \"files\": [
                    \"src/loader.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\",
                \"GPL-2.0\",
                \"GPL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"David Grudl\",
                    \"homepage\": \"https://davidgrudl.com\"
                },
                {
                    \"name\": \"Nette Community\",
                    \"homepage\": \"https://nette.org/contributors\"
                }
            ],
            \"description\": \"? Nette Utils: lightweight utilities for string & array manipulation, image handling, safe JSON encoding/decoding, validation, slug or strong password generating etc.\",
            \"homepage\": \"https://nette.org\",
            \"keywords\": [
                \"array\",
                \"core\",
                \"datetime\",
                \"images\",
                \"json\",
                \"nette\",
                \"paginator\",
                \"password\",
                \"slugify\",
                \"string\",
                \"unicode\",
                \"utf-8\",
                \"utility\",
                \"validation\"
            ],
            \"time\": \"2018-09-18T10:22:16+00:00\"
        },
        {
            \"name\": \"nikic/php-parser\",
            \"version\": \"v4.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nikic/PHP-Parser.git\",
                \"reference\": \"5221f49a608808c1e4d436df32884cbc1b821ac0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/5221f49a608808c1e4d436df32884cbc1b821ac0\",
                \"reference\": \"5221f49a608808c1e4d436df32884cbc1b821ac0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \">=7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.5 || ^7.0\"
            },
            \"bin\": [
                \"bin/php-parse\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
                }
            },
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
            ],
            \"time\": \"2019-02-16T20:54:15+00:00\"
        },
        {
            \"name\": \"ocramius/package-versions\",
            \"version\": \"1.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Ocramius/PackageVersions.git\",
                \"reference\": \"a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Ocramius/PackageVersions/zipball/a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\",
                \"reference\": \"a4d4b60d0e60da2487bd21a2c6ac089f85570dbb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0.0\",
                \"php\": \"^7.1.0\"
            },
            \"require-dev\": {
                \"composer/composer\": \"^1.6.3\",
                \"doctrine/coding-standard\": \"^5.0.1\",
                \"ext-zip\": \"*\",
                \"infection/infection\": \"^0.7.1\",
                \"phpunit/phpunit\": \"^7.0.0\"
            },
            \"type\": \"composer-plugin\",
            \"extra\": {
                \"class\": \"PackageVersions\\\\Installer\",
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
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
            \"description\": \"Composer plugin that provides efficient querying for installed package versions (no runtime IO)\",
            \"time\": \"2019-02-21T12:16:21+00:00\"
        },
        {
            \"name\": \"phar-io/manifest\",
            \"version\": \"1.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/manifest.git\",
                \"reference\": \"7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/manifest/zipball/7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\",
                \"reference\": \"7761fcacf03b4d4f16e7ccb606d4879ca431fcf4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-phar\": \"*\",
                \"phar-io/version\": \"^2.0\",
                \"php\": \"^5.6 || ^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Heuer\",
                    \"email\": \"sebastian@phpeople.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Component for reading phar.io manifest information from a PHP Archive (PHAR)\",
            \"time\": \"2018-07-08T19:23:20+00:00\"
        },
        {
            \"name\": \"phar-io/version\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/version.git\",
                \"reference\": \"45a2ec53a73c70ce41d55cedef9063630abaf1b6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/version/zipball/45a2ec53a73c70ce41d55cedef9063630abaf1b6\",
                \"reference\": \"45a2ec53a73c70ce41d55cedef9063630abaf1b6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Heuer\",
                    \"email\": \"sebastian@phpeople.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Library for handling version information and constraints\",
            \"time\": \"2018-07-08T19:19:57+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-common\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionCommon.git\",
                \"reference\": \"21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionCommon/zipball/21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\",
                \"reference\": \"21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.5\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jaap van Otterdijk\",
                    \"email\": \"opensource@ijaap.nl\"
                }
            ],
            \"description\": \"Common reflection classes used by phpdocumentor to reflect the code structure\",
            \"homepage\": \"http://www.phpdoc.org\",
            \"keywords\": [
                \"FQSEN\",
                \"phpDocumentor\",
                \"phpdoc\",
                \"reflection\",
                \"static analysis\"
            ],
            \"time\": \"2017-09-11T18:02:19+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-docblock\",
            \"version\": \"4.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionDocBlock.git\",
                \"reference\": \"bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\",
                \"reference\": \"bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"phpdocumentor/reflection-common\": \"^1.0.0\",
                \"phpdocumentor/type-resolver\": \"^0.4.0\",
                \"webmozart/assert\": \"^1.0\"
            },
            \"require-dev\": {
                \"doctrine/instantiator\": \"~1.0.5\",
                \"mockery/mockery\": \"^1.0\",
                \"phpunit/phpunit\": \"^6.4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Mike van Riel\",
                    \"email\": \"me@mikevanriel.com\"
                }
            ],
            \"description\": \"With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.\",
            \"time\": \"2019-04-30T17:48:53+00:00\"
        },
        {
            \"name\": \"phpdocumentor/type-resolver\",
            \"version\": \"0.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/TypeResolver.git\",
                \"reference\": \"9c977708995954784726e25d0cd1dddf4e65b0f7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/TypeResolver/zipball/9c977708995954784726e25d0cd1dddf4e65b0f7\",
                \"reference\": \"9c977708995954784726e25d0cd1dddf4e65b0f7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5 || ^7.0\",
                \"phpdocumentor/reflection-common\": \"^1.0\"
            },
            \"require-dev\": {
                \"mockery/mockery\": \"^0.9.4\",
                \"phpunit/phpunit\": \"^5.2||^4.8.24\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Mike van Riel\",
                    \"email\": \"me@mikevanriel.com\"
                }
            ],
            \"time\": \"2017-07-14T14:27:02+00:00\"
        },
        {
            \"name\": \"phpspec/prophecy\",
            \"version\": \"1.8.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpspec/prophecy.git\",
                \"reference\": \"1927e75f4ed19131ec9bcc3b002e07fb1173ee76\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpspec/prophecy/zipball/1927e75f4ed19131ec9bcc3b002e07fb1173ee76\",
                \"reference\": \"1927e75f4ed19131ec9bcc3b002e07fb1173ee76\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.0.2\",
                \"php\": \"^5.3|^7.0\",
                \"phpdocumentor/reflection-docblock\": \"^2.0|^3.0.2|^4.0\",
                \"sebastian/comparator\": \"^1.1|^2.0|^3.0\",
                \"sebastian/recursion-context\": \"^1.0|^2.0|^3.0\"
            },
            \"require-dev\": {
                \"phpspec/phpspec\": \"^2.5|^3.2\",
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.5 || ^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Prophecy\\\\\": \"src/Prophecy\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Konstantin Kudryashov\",
                    \"email\": \"ever.zet@gmail.com\",
                    \"homepage\": \"http://everzet.com\"
                },
                {
                    \"name\": \"Marcello Duarte\",
                    \"email\": \"marcello.duarte@gmail.com\"
                }
            ],
            \"description\": \"Highly opinionated mocking framework for PHP 5.3+\",
            \"homepage\": \"https://github.com/phpspec/prophecy\",
            \"keywords\": [
                \"Double\",
                \"Dummy\",
                \"fake\",
                \"mock\",
                \"spy\",
                \"stub\"
            ],
            \"time\": \"2019-06-13T12:50:23+00:00\"
        },
        {
            \"name\": \"phpstan/phpdoc-parser\",
            \"version\": \"0.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpdoc-parser.git\",
                \"reference\": \"2cc49f47c69b023eaf05b48e6529389893b13d74\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpdoc-parser/zipball/2cc49f47c69b023eaf05b48e6529389893b13d74\",
                \"reference\": \"2cc49f47c69b023eaf05b48e6529389893b13d74\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.1\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"^2.0.0\",
                \"jakub-onderka/php-parallel-lint\": \"^0.9.2\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan\": \"^0.10\",
                \"phpunit/phpunit\": \"^6.3\",
                \"slevomat/coding-standard\": \"^3.3.0\",
                \"symfony/process\": \"^3.4 || ^4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\PhpDocParser\\\\\": [
                        \"src/\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PHPDoc parser with support for nullable, intersection and generic types\",
            \"time\": \"2019-01-14T12:26:23+00:00\"
        },
        {
            \"name\": \"phpstan/phpstan\",
            \"version\": \"0.11.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpstan.git\",
                \"reference\": \"e4644b4a8fd393c346f1137305fb2f76a7dc20a7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpstan/zipball/e4644b4a8fd393c346f1137305fb2f76a7dc20a7\",
                \"reference\": \"e4644b4a8fd393c346f1137305fb2f76a7dc20a7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/xdebug-handler\": \"^1.3.0\",
                \"jean85/pretty-package-versions\": \"^1.0.3\",
                \"nette/bootstrap\": \"^2.4 || ^3.0\",
                \"nette/di\": \"^2.4.7 || ^3.0\",
                \"nette/robot-loader\": \"^3.0.1\",
                \"nette/utils\": \"^2.4.5 || ^3.0\",
                \"nikic/php-parser\": \"^4.0.2\",
                \"php\": \"~7.1\",
                \"phpstan/phpdoc-parser\": \"^0.3\",
                \"symfony/console\": \"~3.2 || ~4.0\",
                \"symfony/finder\": \"~3.2 || ~4.0\"
            },
            \"conflict\": {
                \"symfony/console\": \"3.4.16 || 4.1.5\"
            },
            \"require-dev\": {
                \"brianium/paratest\": \"^2.0\",
                \"consistence/coding-standard\": \"^3.5\",
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.4.4\",
                \"ext-intl\": \"*\",
                \"ext-mysqli\": \"*\",
                \"ext-soap\": \"*\",
                \"ext-zip\": \"*\",
                \"jakub-onderka/php-parallel-lint\": \"^1.0\",
                \"localheinz/composer-normalize\": \"^1.1.0\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan-deprecation-rules\": \"^0.11\",
                \"phpstan/phpstan-php-parser\": \"^0.11\",
                \"phpstan/phpstan-phpunit\": \"^0.11\",
                \"phpstan/phpstan-strict-rules\": \"^0.11\",
                \"phpunit/phpunit\": \"^7.0\",
                \"slevomat/coding-standard\": \"^4.7.2\",
                \"squizlabs/php_codesniffer\": \"^3.3.2\"
            },
            \"bin\": [
                \"bin/phpstan\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.11-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\\": [
                        \"src/\",
                        \"build/PHPStan\"
                    ]
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PHPStan - PHP Static Analysis Tool\",
            \"time\": \"2019-03-10T16:25:30+00:00\"
        },
        {
            \"name\": \"phpstan/phpstan-phpunit\",
            \"version\": \"0.11\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpstan-phpunit.git\",
                \"reference\": \"70c22d44b96a21a4952fc13021a5a63cc83f5c81\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpstan-phpunit/zipball/70c22d44b96a21a4952fc13021a5a63cc83f5c81\",
                \"reference\": \"70c22d44b96a21a4952fc13021a5a63cc83f5c81\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nikic/php-parser\": \"^4.0\",
                \"php\": \"~7.1\",
                \"phpstan/phpdoc-parser\": \"^0.3\",
                \"phpstan/phpstan\": \"^0.11\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<7.0\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"^3.0.1\",
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.4.4\",
                \"jakub-onderka/php-parallel-lint\": \"^1.0\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan-strict-rules\": \"^0.11\",
                \"phpunit/phpunit\": \"^7.0\",
                \"satooshi/php-coveralls\": \"^1.0\",
                \"slevomat/coding-standard\": \"^4.5.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"0.11-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PHPStan\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PHPUnit extensions and rules for PHPStan\",
            \"time\": \"2018-12-22T14:05:04+00:00\"
        },
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"6.1.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\",
                \"reference\": \"807e6013b00af69b6c5d9ceb4282d0393dbb9d8d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.1\",
                \"phpunit/php-file-iterator\": \"^2.0\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-token-stream\": \"^3.0\",
                \"sebastian/code-unit-reverse-lookup\": \"^1.0.1\",
                \"sebastian/environment\": \"^3.1 || ^4.0\",
                \"sebastian/version\": \"^2.0.1\",
                \"theseer/tokenizer\": \"^1.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"suggest\": {
                \"ext-xdebug\": \"^2.6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"6.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Library that provides collection, processing, and rendering functionality for PHP code coverage information.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-code-coverage\",
            \"keywords\": [
                \"coverage\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2018-10-31T16:06:48+00:00\"
        },
        {
            \"name\": \"phpunit/php-file-iterator\",
            \"version\": \"2.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-file-iterator.git\",
                \"reference\": \"050bedf145a257b1ff02746c31894800e5122946\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/050bedf145a257b1ff02746c31894800e5122946\",
                \"reference\": \"050bedf145a257b1ff02746c31894800e5122946\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"FilterIterator implementation that filters files based on a list of suffixes.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-file-iterator/\",
            \"keywords\": [
                \"filesystem\",
                \"iterator\"
            ],
            \"time\": \"2018-09-13T20:33:42+00:00\"
        },
        {
            \"name\": \"phpunit/php-text-template\",
            \"version\": \"1.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-text-template.git\",
                \"reference\": \"31f8b717e51d9a2afca6c9f046f5d69fc27c8686\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/31f8b717e51d9a2afca6c9f046f5d69fc27c8686\",
                \"reference\": \"31f8b717e51d9a2afca6c9f046f5d69fc27c8686\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Simple template engine.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-text-template/\",
            \"keywords\": [
                \"template\"
            ],
            \"time\": \"2015-06-21T13:50:34+00:00\"
        },
        {
            \"name\": \"phpunit/php-timer\",
            \"version\": \"2.1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-timer.git\",
                \"reference\": \"1038454804406b0b5f5f520358e78c1c2f71501e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-timer/zipball/1038454804406b0b5f5f520358e78c1c2f71501e\",
                \"reference\": \"1038454804406b0b5f5f520358e78c1c2f71501e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Utility class for timing\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-timer/\",
            \"keywords\": [
                \"timer\"
            ],
            \"time\": \"2019-06-07T04:22:29+00:00\"
        },
        {
            \"name\": \"phpunit/php-token-stream\",
            \"version\": \"3.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-token-stream.git\",
                \"reference\": \"e899757bb3df5ff6e95089132f32cd59aac2220a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/e899757bb3df5ff6e95089132f32cd59aac2220a\",
                \"reference\": \"e899757bb3df5ff6e95089132f32cd59aac2220a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Wrapper around PHP's tokenizer extension.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-token-stream/\",
            \"keywords\": [
                \"tokenizer\"
            ],
            \"time\": \"2019-07-25T05:29:42+00:00\"
        },
        {
            \"name\": \"phpunit/phpunit\",
            \"version\": \"7.5.15\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"d79c053d972856b8b941bb233e39dc521a5093f0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/d79c053d972856b8b941bb233e39dc521a5093f0\",
                \"reference\": \"d79c053d972856b8b941bb233e39dc521a5093f0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.1\",
                \"ext-dom\": \"*\",
                \"ext-json\": \"*\",
                \"ext-libxml\": \"*\",
                \"ext-mbstring\": \"*\",
                \"ext-xml\": \"*\",
                \"myclabs/deep-copy\": \"^1.7\",
                \"phar-io/manifest\": \"^1.0.2\",
                \"phar-io/version\": \"^2.0\",
                \"php\": \"^7.1\",
                \"phpspec/prophecy\": \"^1.7\",
                \"phpunit/php-code-coverage\": \"^6.0.7\",
                \"phpunit/php-file-iterator\": \"^2.0.1\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-timer\": \"^2.1\",
                \"sebastian/comparator\": \"^3.0\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/environment\": \"^4.0\",
                \"sebastian/exporter\": \"^3.1\",
                \"sebastian/global-state\": \"^2.0\",
                \"sebastian/object-enumerator\": \"^3.0.3\",
                \"sebastian/resource-operations\": \"^2.0\",
                \"sebastian/version\": \"^2.0.1\"
            },
            \"conflict\": {
                \"phpunit/phpunit-mock-objects\": \"*\"
            },
            \"require-dev\": {
                \"ext-pdo\": \"*\"
            },
            \"suggest\": {
                \"ext-soap\": \"*\",
                \"ext-xdebug\": \"*\",
                \"phpunit/php-invoker\": \"^2.0\"
            },
            \"bin\": [
                \"phpunit\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"7.5-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"The PHP Unit Testing framework.\",
            \"homepage\": \"https://phpunit.de/\",
            \"keywords\": [
                \"phpunit\",
                \"testing\",
                \"xunit\"
            ],
            \"time\": \"2019-08-21T07:05:16+00:00\"
        },
        {
            \"name\": \"psr/log\",
            \"version\": \"1.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/log.git\",
                \"reference\": \"6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/log/zipball/6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd\",
                \"reference\": \"6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
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
            ],
            \"time\": \"2018-11-20T15:27:04+00:00\"
        },
        {
            \"name\": \"sebastian/code-unit-reverse-lookup\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup.git\",
                \"reference\": \"4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/code-unit-reverse-lookup/zipball/4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\",
                \"reference\": \"4419fcdb5eabb9caa61a27c7a1db532a6b55dd18\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^5.7 || ^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Looks up which function or method a line of code belongs to\",
            \"homepage\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup/\",
            \"time\": \"2017-03-04T06:30:41+00:00\"
        },
        {
            \"name\": \"sebastian/comparator\",
            \"version\": \"3.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/comparator.git\",
                \"reference\": \"5de4fc177adf9bce8df98d8d141a7559d7ccf6da\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/comparator/zipball/5de4fc177adf9bce8df98d8d141a7559d7ccf6da\",
                \"reference\": \"5de4fc177adf9bce8df98d8d141a7559d7ccf6da\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/exporter\": \"^3.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@2bepublished.at\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides the functionality to compare PHP values for equality\",
            \"homepage\": \"https://github.com/sebastianbergmann/comparator\",
            \"keywords\": [
                \"comparator\",
                \"compare\",
                \"equality\"
            ],
            \"time\": \"2018-07-12T15:12:46+00:00\"
        },
        {
            \"name\": \"sebastian/diff\",
            \"version\": \"3.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/diff.git\",
                \"reference\": \"720fcc7e9b5cf384ea68d9d930d480907a0c1a29\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/diff/zipball/720fcc7e9b5cf384ea68d9d930d480907a0c1a29\",
                \"reference\": \"720fcc7e9b5cf384ea68d9d930d480907a0c1a29\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.5 || ^8.0\",
                \"symfony/process\": \"^2 || ^3.3 || ^4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Kore Nordmann\",
                    \"email\": \"mail@kore-nordmann.de\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Diff implementation\",
            \"homepage\": \"https://github.com/sebastianbergmann/diff\",
            \"keywords\": [
                \"diff\",
                \"udiff\",
                \"unidiff\",
                \"unified diff\"
            ],
            \"time\": \"2019-02-04T06:01:07+00:00\"
        },
        {
            \"name\": \"sebastian/environment\",
            \"version\": \"4.2.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/environment.git\",
                \"reference\": \"f2a2c8e1c97c11ace607a7a667d73d47c19fe404\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/environment/zipball/f2a2c8e1c97c11ace607a7a667d73d47c19fe404\",
                \"reference\": \"f2a2c8e1c97c11ace607a7a667d73d47c19fe404\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.5\"
            },
            \"suggest\": {
                \"ext-posix\": \"*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides functionality to handle HHVM/PHP environments\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/environment\",
            \"keywords\": [
                \"Xdebug\",
                \"environment\",
                \"hhvm\"
            ],
            \"time\": \"2019-05-05T09:05:15+00:00\"
        },
        {
            \"name\": \"sebastian/exporter\",
            \"version\": \"3.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/exporter.git\",
                \"reference\": \"06a9a5947f47b3029d76118eb5c22802e5869687\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/exporter/zipball/06a9a5947f47b3029d76118eb5c22802e5869687\",
                \"reference\": \"06a9a5947f47b3029d76118eb5c22802e5869687\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"ext-mbstring\": \"*\",
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                },
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                }
            ],
            \"description\": \"Provides the functionality to export PHP variables for visualization\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/exporter\",
            \"keywords\": [
                \"export\",
                \"exporter\"
            ],
            \"time\": \"2019-08-11T12:43:14+00:00\"
        },
        {
            \"name\": \"sebastian/global-state\",
            \"version\": \"2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/global-state.git\",
                \"reference\": \"e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/global-state/zipball/e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\",
                \"reference\": \"e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"suggest\": {
                \"ext-uopz\": \"*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Snapshotting of global state\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/global-state\",
            \"keywords\": [
                \"global state\"
            ],
            \"time\": \"2017-04-27T15:39:26+00:00\"
        },
        {
            \"name\": \"sebastian/object-enumerator\",
            \"version\": \"3.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/object-enumerator.git\",
                \"reference\": \"7cfd9e65d11ffb5af41198476395774d4c8a84c5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/object-enumerator/zipball/7cfd9e65d11ffb5af41198476395774d4c8a84c5\",
                \"reference\": \"7cfd9e65d11ffb5af41198476395774d4c8a84c5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"sebastian/object-reflector\": \"^1.1.1\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Traverses array structures and object graphs to enumerate all referenced objects\",
            \"homepage\": \"https://github.com/sebastianbergmann/object-enumerator/\",
            \"time\": \"2017-08-03T12:35:26+00:00\"
        },
        {
            \"name\": \"sebastian/object-reflector\",
            \"version\": \"1.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/object-reflector.git\",
                \"reference\": \"773f97c67f28de00d397be301821b06708fca0be\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/object-reflector/zipball/773f97c67f28de00d397be301821b06708fca0be\",
                \"reference\": \"773f97c67f28de00d397be301821b06708fca0be\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Allows reflection of object attributes, including inherited and non-public ones\",
            \"homepage\": \"https://github.com/sebastianbergmann/object-reflector/\",
            \"time\": \"2017-03-29T09:07:27+00:00\"
        },
        {
            \"name\": \"sebastian/recursion-context\",
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/recursion-context.git\",
                \"reference\": \"5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/recursion-context/zipball/5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\",
                \"reference\": \"5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                }
            ],
            \"description\": \"Provides functionality to recursively process PHP variables\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/recursion-context\",
            \"time\": \"2017-03-03T06:23:57+00:00\"
        },
        {
            \"name\": \"sebastian/resource-operations\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/resource-operations.git\",
                \"reference\": \"4d7a795d35b889bf80a0cc04e08d77cedfa917a9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/resource-operations/zipball/4d7a795d35b889bf80a0cc04e08d77cedfa917a9\",
                \"reference\": \"4d7a795d35b889bf80a0cc04e08d77cedfa917a9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Provides a list of PHP built-in functions that operate on resources\",
            \"homepage\": \"https://www.github.com/sebastianbergmann/resource-operations\",
            \"time\": \"2018-10-04T04:07:39+00:00\"
        },
        {
            \"name\": \"sebastian/version\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/version.git\",
                \"reference\": \"99732be0ddb3361e16ad77b68ba41efc8e979019\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/version/zipball/99732be0ddb3361e16ad77b68ba41efc8e979019\",
                \"reference\": \"99732be0ddb3361e16ad77b68ba41efc8e979019\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Library that helps with managing the version number of Git-hosted PHP projects\",
            \"homepage\": \"https://github.com/sebastianbergmann/version\",
            \"time\": \"2016-10-03T07:35:21+00:00\"
        },
        {
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"3.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"379deb987e26c7cd103a7b387aea178baec96e48\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/379deb987e26c7cd103a7b387aea178baec96e48\",
                \"reference\": \"379deb987e26c7cd103a7b387aea178baec96e48\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-simplexml\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \">=5.4.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.0 || ^5.0 || ^6.0 || ^7.0\"
            },
            \"bin\": [
                \"bin/phpcs\",
                \"bin/phpcbf\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.x-dev\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Greg Sherwood\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.\",
            \"homepage\": \"http://www.squizlabs.com/php-codesniffer\",
            \"keywords\": [
                \"phpcs\",
                \"standards\"
            ],
            \"time\": \"2018-12-19T23:57:18+00:00\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v4.2.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"9dc2299a016497f9ee620be94524e6c0af0280a9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/9dc2299a016497f9ee620be94524e6c0af0280a9\",
                \"reference\": \"9dc2299a016497f9ee620be94524e6c0af0280a9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/contracts\": \"^1.0\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/process\": \"<3.3\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"~3.4|~4.0\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"psr/log\": \"For using the console logger\",
                \"symfony/event-dispatcher\": \"\",
                \"symfony/lock\": \"\",
                \"symfony/process\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
                }
            },
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
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-02-23T15:17:42+00:00\"
        },
        {
            \"name\": \"symfony/contracts\",
            \"version\": \"v1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/contracts.git\",
                \"reference\": \"1aa7ab2429c3d594dd70689604b5cf7421254cdf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/contracts/zipball/1aa7ab2429c3d594dd70689604b5cf7421254cdf\",
                \"reference\": \"1aa7ab2429c3d594dd70689604b5cf7421254cdf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"require-dev\": {
                \"psr/cache\": \"^1.0\",
                \"psr/container\": \"^1.0\"
            },
            \"suggest\": {
                \"psr/cache\": \"When using the Cache contracts\",
                \"psr/container\": \"When using the Service contracts\",
                \"symfony/cache-contracts-implementation\": \"\",
                \"symfony/service-contracts-implementation\": \"\",
                \"symfony/translation-contracts-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"**/Tests/\"
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
            \"description\": \"A set of abstractions extracted out of the Symfony components\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"time\": \"2018-12-05T08:06:11+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v4.2.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"267b7002c1b70ea80db0833c3afe05f0fbde580a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/267b7002c1b70ea80db0833c3afe05f0fbde580a\",
                \"reference\": \"267b7002c1b70ea80db0833c3afe05f0fbde580a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
                }
            },
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
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-02-23T15:42:05+00:00\"
        },
        {
            \"name\": \"symfony/phpunit-bridge\",
            \"version\": \"v4.2.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/phpunit-bridge.git\",
                \"reference\": \"2cc651a38fcb831a405c14fcb76fcb00320e7ee8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/phpunit-bridge/zipball/2cc651a38fcb831a405c14fcb76fcb00320e7ee8\",
                \"reference\": \"2cc651a38fcb831a405c14fcb76fcb00320e7ee8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"conflict\": {
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\"
            },
            \"suggest\": {
                \"symfony/debug\": \"For tracking deprecated interfaces usages at runtime with DebugClassLoader\"
            },
            \"bin\": [
                \"bin/simple-phpunit\"
            ],
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
                },
                \"thanks\": {
                    \"name\": \"phpunit/phpunit\",
                    \"url\": \"https://github.com/sebastianbergmann/phpunit\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"bootstrap.php\"
                ],
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\PhpUnit\\\\\": \"\"
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
            \"description\": \"Symfony PHPUnit Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-02-18T06:49:49+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.12.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"550ebaac289296ce228a706d0867afc34687e3f4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/550ebaac289296ce228a706d0867afc34687e3f4\",
                \"reference\": \"550ebaac289296ce228a706d0867afc34687e3f4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-ctype\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.12-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Ctype\\\\\": \"\"
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
                    \"name\": \"Gert de Pagter\",
                    \"email\": \"BackEndTea@gmail.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill for ctype functions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"ctype\",
                \"polyfill\",
                \"portable\"
            ],
            \"time\": \"2019-08-06T08:03:45+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.10.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"c79c051f5b3a46be09205c73b80b346e4153e494\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/c79c051f5b3a46be09205c73b80b346e4153e494\",
                \"reference\": \"c79c051f5b3a46be09205c73b80b346e4153e494\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-mbstring\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.9-dev\"
                }
            },
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
            ],
            \"time\": \"2018-09-21T13:07:52+00:00\"
        },
        {
            \"name\": \"theseer/tokenizer\",
            \"version\": \"1.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/theseer/tokenizer.git\",
                \"reference\": \"11336f6f84e16a720dae9d8e6ed5019efa85a0f9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/theseer/tokenizer/zipball/11336f6f84e16a720dae9d8e6ed5019efa85a0f9\",
                \"reference\": \"11336f6f84e16a720dae9d8e6ed5019efa85a0f9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Arne Blankerts\",
                    \"role\": \"Developer\",
                    \"email\": \"arne@blankerts.de\"
                }
            ],
            \"description\": \"A small library for converting tokenized PHP source code into XML and potentially other formats\",
            \"time\": \"2019-06-13T22:48:21+00:00\"
        },
        {
            \"name\": \"webmozart/assert\",
            \"version\": \"1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/assert.git\",
                \"reference\": \"88e6d84706d09a236046d686bbea96f07b3a34f4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/assert/zipball/88e6d84706d09a236046d686bbea96f07b3a34f4\",
                \"reference\": \"88e6d84706d09a236046d686bbea96f07b3a34f4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3 || ^7.0\",
                \"symfony/polyfill-ctype\": \"^1.8\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.36 || ^7.5.13\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Webmozart\\\\Assert\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                }
            ],
            \"description\": \"Assertions to validate method input/output with nice error messages.\",
            \"keywords\": [
                \"assert\",
                \"check\",
                \"validate\"
            ],
            \"time\": \"2019-08-24T08:43:50+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.1\"
    },
    \"platform-dev\": []
}
", "@app/vendor/doctrine/common/composer.lock", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\common\\composer.lock");
    }
}
