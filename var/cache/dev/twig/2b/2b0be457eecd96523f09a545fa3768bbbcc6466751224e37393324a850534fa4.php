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

/* @app/vendor/ocramius/package-versions/composer.lock */
class __TwigTemplate_4214cf3fe3186ecedf9908c73e9d3be61eb346de1f72e9bb6bc8ff12c65427a9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/package-versions/composer.lock"));

        // line 1
        echo "{
    \"_readme\": [
        \"This file locks the dependencies of your project to a known state\",
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies\",
        \"This file is @generated automatically\"
    ],
    \"content-hash\": \"f205ab392e373519f76967590de4f5c3\",
    \"packages\": [],
    \"packages-dev\": [
        {
            \"name\": \"amphp/amp\",
            \"version\": \"v2.1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/amphp/amp.git\",
                \"reference\": \"f824f0df1da2cc042934fa267d7a227fff9276c9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/amphp/amp/zipball/f824f0df1da2cc042934fa267d7a227fff9276c9\",
                \"reference\": \"f824f0df1da2cc042934fa267d7a227fff9276c9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7\"
            },
            \"require-dev\": {
                \"amphp/php-cs-fixer-config\": \"dev-master\",
                \"amphp/phpunit-util\": \"^1\",
                \"ext-json\": \"*\",
                \"phpstan/phpstan\": \"^0.8.5\",
                \"phpunit/phpunit\": \"^6.0.9\",
                \"react/promise\": \"^2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Amp\\\\\": \"lib\"
                },
                \"files\": [
                    \"lib/functions.php\",
                    \"lib/Internal/functions.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Bob Weinand\",
                    \"email\": \"bobwei9@hotmail.com\"
                },
                {
                    \"name\": \"Niklas Keller\",
                    \"email\": \"me@kelunik.com\"
                },
                {
                    \"name\": \"Daniel Lowrey\",
                    \"email\": \"rdlowrey@php.net\"
                },
                {
                    \"name\": \"Aaron Piotrowski\",
                    \"email\": \"aaron@trowski.com\"
                }
            ],
            \"description\": \"A non-blocking concurrency framework for PHP applications.\",
            \"homepage\": \"http://amphp.org/amp\",
            \"keywords\": [
                \"async\",
                \"asynchronous\",
                \"awaitable\",
                \"concurrency\",
                \"event\",
                \"event-loop\",
                \"future\",
                \"non-blocking\",
                \"promise\"
            ],
            \"time\": \"2019-05-31T18:42:02+00:00\"
        },
        {
            \"name\": \"amphp/byte-stream\",
            \"version\": \"v1.6.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/amphp/byte-stream.git\",
                \"reference\": \"c75af3778b5511deb1d760e4709cade2dabc2295\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/amphp/byte-stream/zipball/c75af3778b5511deb1d760e4709cade2dabc2295\",
                \"reference\": \"c75af3778b5511deb1d760e4709cade2dabc2295\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"amphp/amp\": \"^2\"
            },
            \"require-dev\": {
                \"amphp/php-cs-fixer-config\": \"dev-master\",
                \"amphp/phpunit-util\": \"^1\",
                \"friendsofphp/php-cs-fixer\": \"^2.3\",
                \"infection/infection\": \"^0.9.3\",
                \"phpunit/phpunit\": \"^6\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Amp\\\\ByteStream\\\\\": \"lib\"
                },
                \"files\": [
                    \"lib/functions.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Niklas Keller\",
                    \"email\": \"me@kelunik.com\"
                },
                {
                    \"name\": \"Aaron Piotrowski\",
                    \"email\": \"aaron@trowski.com\"
                }
            ],
            \"description\": \"A stream abstraction to make working with non-blocking I/O simple.\",
            \"homepage\": \"http://amphp.org/byte-stream\",
            \"keywords\": [
                \"amp\",
                \"amphp\",
                \"async\",
                \"io\",
                \"non-blocking\",
                \"stream\"
            ],
            \"time\": \"2019-06-03T21:45:17+00:00\"
        },
        {
            \"name\": \"composer/ca-bundle\",
            \"version\": \"1.1.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/ca-bundle.git\",
                \"reference\": \"558f321c52faeb4828c03e7dc0cfe39a09e09a2d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/ca-bundle/zipball/558f321c52faeb4828c03e7dc0cfe39a09e09a2d\",
                \"reference\": \"558f321c52faeb4828c03e7dc0cfe39a09e09a2d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-openssl\": \"*\",
                \"ext-pcre\": \"*\",
                \"php\": \"^5.3.2 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.5\",
                \"psr/log\": \"^1.0\",
                \"symfony/process\": \"^2.5 || ^3.0 || ^4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\CaBundle\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                }
            ],
            \"description\": \"Lets you find a path to the system CA bundle, and includes a fallback to the Mozilla CA bundle.\",
            \"keywords\": [
                \"cabundle\",
                \"cacert\",
                \"certificate\",
                \"ssl\",
                \"tls\"
            ],
            \"time\": \"2019-01-28T09:30:10+00:00\"
        },
        {
            \"name\": \"composer/composer\",
            \"version\": \"1.8.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/composer.git\",
                \"reference\": \"19b5f66a0e233eb944f134df34091fe1c5dfcc11\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/composer/zipball/19b5f66a0e233eb944f134df34091fe1c5dfcc11\",
                \"reference\": \"19b5f66a0e233eb944f134df34091fe1c5dfcc11\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/ca-bundle\": \"^1.0\",
                \"composer/semver\": \"^1.0\",
                \"composer/spdx-licenses\": \"^1.2\",
                \"composer/xdebug-handler\": \"^1.1\",
                \"justinrainbow/json-schema\": \"^3.0 || ^4.0 || ^5.0\",
                \"php\": \"^5.3.2 || ^7.0\",
                \"psr/log\": \"^1.0\",
                \"seld/jsonlint\": \"^1.4\",
                \"seld/phar-utils\": \"^1.0\",
                \"symfony/console\": \"^2.7 || ^3.0 || ^4.0\",
                \"symfony/filesystem\": \"^2.7 || ^3.0 || ^4.0\",
                \"symfony/finder\": \"^2.7 || ^3.0 || ^4.0\",
                \"symfony/process\": \"^2.7 || ^3.0 || ^4.0\"
            },
            \"conflict\": {
                \"symfony/console\": \"2.8.38\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7\",
                \"phpunit/phpunit-mock-objects\": \"^2.3 || ^3.0\"
            },
            \"suggest\": {
                \"ext-openssl\": \"Enabling the openssl extension allows you to access https URLs for repositories and packages\",
                \"ext-zip\": \"Enabling the zip extension allows you to unzip archives\",
                \"ext-zlib\": \"Allow gzip compression of HTTP requests\"
            },
            \"bin\": [
                \"bin/composer\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\\": \"src/Composer\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nils Adermann\",
                    \"email\": \"naderman@naderman.de\",
                    \"homepage\": \"http://www.naderman.de\"
                },
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                }
            ],
            \"description\": \"Composer helps you declare, manage and install dependencies of PHP projects, ensuring you have the right stack everywhere.\",
            \"homepage\": \"https://getcomposer.org/\",
            \"keywords\": [
                \"autoload\",
                \"dependency\",
                \"package\"
            ],
            \"time\": \"2019-06-11T13:03:06+00:00\"
        },
        {
            \"name\": \"composer/semver\",
            \"version\": \"1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/semver.git\",
                \"reference\": \"46d9139568ccb8d9e7cdd4539cab7347568a5e2e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/semver/zipball/46d9139568ccb8d9e7cdd4539cab7347568a5e2e\",
                \"reference\": \"46d9139568ccb8d9e7cdd4539cab7347568a5e2e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.5 || ^5.0.5\",
                \"phpunit/phpunit-mock-objects\": \"2.3.0 || ^3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\Semver\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nils Adermann\",
                    \"email\": \"naderman@naderman.de\",
                    \"homepage\": \"http://www.naderman.de\"
                },
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                },
                {
                    \"name\": \"Rob Bast\",
                    \"email\": \"rob.bast@gmail.com\",
                    \"homepage\": \"http://robbast.nl\"
                }
            ],
            \"description\": \"Semver library that offers utilities, version constraint parsing and validation.\",
            \"keywords\": [
                \"semantic\",
                \"semver\",
                \"validation\",
                \"versioning\"
            ],
            \"time\": \"2019-03-19T17:25:45+00:00\"
        },
        {
            \"name\": \"composer/spdx-licenses\",
            \"version\": \"1.5.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/spdx-licenses.git\",
                \"reference\": \"a1aa51cf3ab838b83b0867b14e56fc20fbd55b3d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/spdx-licenses/zipball/a1aa51cf3ab838b83b0867b14e56fc20fbd55b3d\",
                \"reference\": \"a1aa51cf3ab838b83b0867b14e56fc20fbd55b3d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0 || ^8.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || 6.5 - 7\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\Spdx\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nils Adermann\",
                    \"email\": \"naderman@naderman.de\",
                    \"homepage\": \"http://www.naderman.de\"
                },
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                },
                {
                    \"name\": \"Rob Bast\",
                    \"email\": \"rob.bast@gmail.com\",
                    \"homepage\": \"http://robbast.nl\"
                }
            ],
            \"description\": \"SPDX licenses list and validation library.\",
            \"keywords\": [
                \"license\",
                \"spdx\",
                \"validator\"
            ],
            \"time\": \"2019-03-26T10:23:26+00:00\"
        },
        {
            \"name\": \"composer/xdebug-handler\",
            \"version\": \"1.3.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/xdebug-handler.git\",
                \"reference\": \"46867cbf8ca9fb8d60c506895449eb799db1184f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/xdebug-handler/zipball/46867cbf8ca9fb8d60c506895449eb799db1184f\",
                \"reference\": \"46867cbf8ca9fb8d60c506895449eb799db1184f\",
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
            \"time\": \"2019-05-27T17:52:04+00:00\"
        },
        {
            \"name\": \"dealerdirect/phpcodesniffer-composer-installer\",
            \"version\": \"v0.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Dealerdirect/phpcodesniffer-composer-installer.git\",
                \"reference\": \"e749410375ff6fb7a040a68878c656c2e610b132\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Dealerdirect/phpcodesniffer-composer-installer/zipball/e749410375ff6fb7a040a68878c656c2e610b132\",
                \"reference\": \"e749410375ff6fb7a040a68878c656c2e610b132\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0\",
                \"php\": \"^5.3|^7\",
                \"squizlabs/php_codesniffer\": \"^2|^3\"
            },
            \"require-dev\": {
                \"composer/composer\": \"*\",
                \"phpcompatibility/php-compatibility\": \"^9.0\",
                \"sensiolabs/security-checker\": \"^4.1.0\"
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
                    \"email\": \"franck.nijhof@dealerdirect.com\",
                    \"homepage\": \"http://www.frenck.nl\",
                    \"role\": \"Developer / IT Manager\"
                }
            ],
            \"description\": \"PHP_CodeSniffer Standards Composer Installer Plugin\",
            \"homepage\": \"http://www.dealerdirect.com\",
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
            \"time\": \"2018-10-26T13:21:45+00:00\"
        },
        {
            \"name\": \"doctrine/coding-standard\",
            \"version\": \"6.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/coding-standard.git\",
                \"reference\": \"d33f69eb98b25aa51ffe3a909f0ec77000af4701\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/coding-standard/zipball/d33f69eb98b25aa51ffe3a909f0ec77000af4701\",
                \"reference\": \"d33f69eb98b25aa51ffe3a909f0ec77000af4701\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.5.0\",
                \"php\": \"^7.1\",
                \"slevomat/coding-standard\": \"^5.0\",
                \"squizlabs/php_codesniffer\": \"^3.4.0\"
            },
            \"type\": \"phpcodesniffer-standard\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"6.0.x-dev\"
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
            \"description\": \"The Doctrine Coding Standard is a set of PHPCS rules applied to all Doctrine projects.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/coding-standard.html\",
            \"keywords\": [
                \"checks\",
                \"code\",
                \"coding\",
                \"cs\",
                \"doctrine\",
                \"rules\",
                \"sniffer\",
                \"sniffs\",
                \"standard\",
                \"style\"
            ],
            \"time\": \"2019-03-15T12:45:47+00:00\"
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
            \"name\": \"felixfbecker/advanced-json-rpc\",
            \"version\": \"v3.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/felixfbecker/php-advanced-json-rpc.git\",
                \"reference\": \"241c470695366e7b83672be04ea0e64d8085a551\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/felixfbecker/php-advanced-json-rpc/zipball/241c470695366e7b83672be04ea0e64d8085a551\",
                \"reference\": \"241c470695366e7b83672be04ea0e64d8085a551\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"netresearch/jsonmapper\": \"^1.0\",
                \"php\": \">=7.0\",
                \"phpdocumentor/reflection-docblock\": \"^4.0.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"AdvancedJsonRpc\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"ISC\"
            ],
            \"authors\": [
                {
                    \"name\": \"Felix Becker\",
                    \"email\": \"felix.b@outlook.com\"
                }
            ],
            \"description\": \"A more advanced JSONRPC implementation\",
            \"time\": \"2018-09-10T08:58:41+00:00\"
        },
        {
            \"name\": \"felixfbecker/language-server-protocol\",
            \"version\": \"v1.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/felixfbecker/php-language-server-protocol.git\",
                \"reference\": \"378801f6139bb74ac215d81cca1272af61df9a9f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/felixfbecker/php-language-server-protocol/zipball/378801f6139bb74ac215d81cca1272af61df9a9f\",
                \"reference\": \"378801f6139bb74ac215d81cca1272af61df9a9f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpstan/phpstan\": \"*\",
                \"phpunit/phpunit\": \"^6.3\",
                \"squizlabs/php_codesniffer\": \"^3.1\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"LanguageServerProtocol\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"ISC\"
            ],
            \"authors\": [
                {
                    \"name\": \"Felix Becker\",
                    \"email\": \"felix.b@outlook.com\"
                }
            ],
            \"description\": \"PHP classes for the Language Server Protocol\",
            \"keywords\": [
                \"language\",
                \"microsoft\",
                \"php\",
                \"server\"
            ],
            \"time\": \"2019-06-23T21:03:50+00:00\"
        },
        {
            \"name\": \"infection/infection\",
            \"version\": \"0.13.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/infection/infection.git\",
                \"reference\": \"f0f8327f5e60d1a7d8ab4ea01074c6250ab96f57\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/infection/infection/zipball/f0f8327f5e60d1a7d8ab4ea01074c6250ab96f57\",
                \"reference\": \"f0f8327f5e60d1a7d8ab4ea01074c6250ab96f57\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/xdebug-handler\": \"^1.3\",
                \"ext-dom\": \"*\",
                \"ext-json\": \"*\",
                \"ext-libxml\": \"*\",
                \"justinrainbow/json-schema\": \"^5.2\",
                \"nikic/php-parser\": \"^4.2.1\",
                \"ocramius/package-versions\": \"^1.2\",
                \"padraic/phar-updater\": \"^1.0.4\",
                \"php\": \"^7.1.3\",
                \"pimple/pimple\": \"^3.2\",
                \"sebastian/diff\": \"^1.4 || ^2.0 || ^3.0\",
                \"symfony/console\": \"^3.4 || ^4.0\",
                \"symfony/filesystem\": \"^3.4 || ^4.0\",
                \"symfony/finder\": \"^3.4 || ^4.0\",
                \"symfony/process\": \"^3.4 || ^4.0\",
                \"symfony/yaml\": \"^3.4 || ^4.0\",
                \"webmozart/assert\": \"^1.3\"
            },
            \"conflict\": {
                \"symfony/console\": \"=3.4.16 || =4.1.5\",
                \"symfony/process\": \"3.4.2\"
            },
            \"require-dev\": {
                \"helmich/phpunit-json-assert\": \"^2.1 || ^3.0\",
                \"phpunit/phpunit\": \"^7.5\"
            },
            \"bin\": [
                \"bin/infection\"
            ],
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Infection\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Maks Rafalko\",
                    \"email\": \"maks.rafalko@gmail.com\",
                    \"homepage\": \"https://twitter.com/maks_rafalko\"
                },
                {
                    \"name\": \"Gert de Pagter\",
                    \"homepage\": \"https://github.com/BackEndTea\"
                },
                {
                    \"name\": \"Théo FIDRY\",
                    \"email\": \"theo.fidry@gmail.com\",
                    \"homepage\": \"https://twitter.com/tfidry\"
                },
                {
                    \"name\": \"Oleg Zhulnev\",
                    \"homepage\": \"https://github.com/sidz\"
                },
                {
                    \"name\": \"Alexey Kopytko\",
                    \"email\": \"alexey@kopytko.com\",
                    \"homepage\": \"https://www.alexeykopytko.com\"
                }
            ],
            \"description\": \"Infection is a Mutation Testing framework for PHP. The mutation adequacy score can be used to measure the effectiveness of a test set in terms of its ability to detect faults.\",
            \"keywords\": [
                \"coverage\",
                \"mutant\",
                \"mutation framework\",
                \"mutation testing\",
                \"testing\",
                \"unit testing\"
            ],
            \"time\": \"2019-07-01T18:01:41+00:00\"
        },
        {
            \"name\": \"justinrainbow/json-schema\",
            \"version\": \"5.2.8\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/justinrainbow/json-schema.git\",
                \"reference\": \"dcb6e1006bb5fd1e392b4daa68932880f37550d4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/justinrainbow/json-schema/zipball/dcb6e1006bb5fd1e392b4daa68932880f37550d4\",
                \"reference\": \"dcb6e1006bb5fd1e392b4daa68932880f37550d4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"require-dev\": {
                \"friendsofphp/php-cs-fixer\": \"~2.2.20\",
                \"json-schema/json-schema-test-suite\": \"1.2.0\",
                \"phpunit/phpunit\": \"^4.8.35\"
            },
            \"bin\": [
                \"bin/validate-json\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"5.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"JsonSchema\\\\\": \"src/JsonSchema/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Bruno Prieto Reis\",
                    \"email\": \"bruno.p.reis@gmail.com\"
                },
                {
                    \"name\": \"Justin Rainbow\",
                    \"email\": \"justin.rainbow@gmail.com\"
                },
                {
                    \"name\": \"Igor Wiedler\",
                    \"email\": \"igor@wiedler.ch\"
                },
                {
                    \"name\": \"Robert Schönthal\",
                    \"email\": \"seroscho@googlemail.com\"
                }
            ],
            \"description\": \"A library to validate a json schema.\",
            \"homepage\": \"https://github.com/justinrainbow/json-schema\",
            \"keywords\": [
                \"json\",
                \"schema\"
            ],
            \"time\": \"2019-01-14T23:55:14+00:00\"
        },
        {
            \"name\": \"myclabs/deep-copy\",
            \"version\": \"1.9.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/myclabs/DeepCopy.git\",
                \"reference\": \"e6828efaba2c9b79f4499dae1d66ef8bfa7b2b72\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/myclabs/DeepCopy/zipball/e6828efaba2c9b79f4499dae1d66ef8bfa7b2b72\",
                \"reference\": \"e6828efaba2c9b79f4499dae1d66ef8bfa7b2b72\",
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
            \"time\": \"2019-04-07T13:18:21+00:00\"
        },
        {
            \"name\": \"netresearch/jsonmapper\",
            \"version\": \"v1.5.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/cweiske/jsonmapper.git\",
                \"reference\": \"047dafe26facbba1e997e9fb3b3c298562d75a0b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/cweiske/jsonmapper/zipball/047dafe26facbba1e997e9fb3b3c298562d75a0b\",
                \"reference\": \"047dafe26facbba1e997e9fb3b3c298562d75a0b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~4.8.35 || ~5.7 || ~6.4\",
                \"squizlabs/php_codesniffer\": \"~1.5\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"JsonMapper\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"OSL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"Christian Weiske\",
                    \"email\": \"cweiske@cweiske.de\",
                    \"homepage\": \"http://github.com/cweiske/jsonmapper/\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Map nested JSON structures onto PHP classes\",
            \"time\": \"2019-07-08T18:46:43+00:00\"
        },
        {
            \"name\": \"nikic/php-parser\",
            \"version\": \"v4.2.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nikic/PHP-Parser.git\",
                \"reference\": \"1bd73cc04c3843ad8d6b0bfc0956026a151fc420\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/1bd73cc04c3843ad8d6b0bfc0956026a151fc420\",
                \"reference\": \"1bd73cc04c3843ad8d6b0bfc0956026a151fc420\",
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
            \"time\": \"2019-05-25T20:07:01+00:00\"
        },
        {
            \"name\": \"openlss/lib-array2xml\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nullivex/lib-array2xml.git\",
                \"reference\": \"a91f18a8dfc69ffabe5f9b068bc39bb202c81d90\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nullivex/lib-array2xml/zipball/a91f18a8dfc69ffabe5f9b068bc39bb202c81d90\",
                \"reference\": \"a91f18a8dfc69ffabe5f9b068bc39bb202c81d90\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.2\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"LSS\": \"\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"Apache-2.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"Bryan Tong\",
                    \"email\": \"bryan@nullivex.com\",
                    \"homepage\": \"https://www.nullivex.com\"
                },
                {
                    \"name\": \"Tony Butler\",
                    \"email\": \"spudz76@gmail.com\",
                    \"homepage\": \"https://www.nullivex.com\"
                }
            ],
            \"description\": \"Array2XML conversion library credit to lalit.org\",
            \"homepage\": \"https://www.nullivex.com\",
            \"keywords\": [
                \"array\",
                \"array conversion\",
                \"xml\",
                \"xml conversion\"
            ],
            \"time\": \"2019-03-29T20:06:56+00:00\"
        },
        {
            \"name\": \"padraic/humbug_get_contents\",
            \"version\": \"1.1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/humbug/file_get_contents.git\",
                \"reference\": \"dcb086060c9dd6b2f51d8f7a895500307110b7a7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/humbug/file_get_contents/zipball/dcb086060c9dd6b2f51d8f7a895500307110b7a7\",
                \"reference\": \"dcb086060c9dd6b2f51d8f7a895500307110b7a7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/ca-bundle\": \"^1.0\",
                \"ext-openssl\": \"*\",
                \"php\": \"^5.3 || ^7.0 || ^7.1 || ^7.2\"
            },
            \"require-dev\": {
                \"bamarni/composer-bin-plugin\": \"^1.1\",
                \"mikey179/vfsstream\": \"^1.6\",
                \"phpunit/phpunit\": \"^4.8 || ^5.7 || ^6.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"bamarni-bin\": {
                    \"bin-links\": false
                },
                \"branch-alias\": {
                    \"dev-master\": \"2.0-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Humbug\\\\\": \"src/\"
                },
                \"files\": [
                    \"src/function.php\",
                    \"src/functions.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Pádraic Brady\",
                    \"email\": \"padraic.brady@gmail.com\",
                    \"homepage\": \"http://blog.astrumfutura.com\"
                },
                {
                    \"name\": \"Théo Fidry\",
                    \"email\": \"theo.fidry@gmail.com\"
                }
            ],
            \"description\": \"Secure wrapper for accessing HTTPS resources with file_get_contents for PHP 5.3+\",
            \"homepage\": \"https://github.com/padraic/file_get_contents\",
            \"keywords\": [
                \"download\",
                \"file_get_contents\",
                \"http\",
                \"https\",
                \"ssl\",
                \"tls\"
            ],
            \"time\": \"2018-02-12T18:47:17+00:00\"
        },
        {
            \"name\": \"padraic/phar-updater\",
            \"version\": \"v1.0.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/humbug/phar-updater.git\",
                \"reference\": \"d01d3b8f26e541ac9b9eeba1e18d005d852f7ff1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/humbug/phar-updater/zipball/d01d3b8f26e541ac9b9eeba1e18d005d852f7ff1\",
                \"reference\": \"d01d3b8f26e541ac9b9eeba1e18d005d852f7ff1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"padraic/humbug_get_contents\": \"^1.0\",
                \"php\": \">=5.3.3\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Humbug\\\\SelfUpdate\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Pádraic Brady\",
                    \"email\": \"padraic.brady@gmail.com\",
                    \"homepage\": \"http://blog.astrumfutura.com\"
                }
            ],
            \"description\": \"A thing to make PHAR self-updating easy and secure.\",
            \"keywords\": [
                \"humbug\",
                \"phar\",
                \"self-update\",
                \"update\"
            ],
            \"time\": \"2018-03-30T12:52:15+00:00\"
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
            \"version\": \"0.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpdoc-parser.git\",
                \"reference\": \"8c4ef2aefd9788238897b678a985e1d5c8df6db4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpdoc-parser/zipball/8c4ef2aefd9788238897b678a985e1d5c8df6db4\",
                \"reference\": \"8c4ef2aefd9788238897b678a985e1d5c8df6db4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.1\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"^3.5\",
                \"jakub-onderka/php-parallel-lint\": \"^0.9.2\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan\": \"^0.10\",
                \"phpunit/phpunit\": \"^6.3\",
                \"slevomat/coding-standard\": \"^4.7.2\",
                \"squizlabs/php_codesniffer\": \"^3.3.2\",
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
            \"time\": \"2019-06-07T19:13:52+00:00\"
        },
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"7.0.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"d471d0d2b529a67c6a722dd446c4ec90881ac315\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/d471d0d2b529a67c6a722dd446c4ec90881ac315\",
                \"reference\": \"d471d0d2b529a67c6a722dd446c4ec90881ac315\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.2\",
                \"phpunit/php-file-iterator\": \"^2.0.2\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-token-stream\": \"^3.0.2\",
                \"sebastian/code-unit-reverse-lookup\": \"^1.0.1\",
                \"sebastian/environment\": \"^4.2.2\",
                \"sebastian/version\": \"^2.0.1\",
                \"theseer/tokenizer\": \"^1.1.3\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^8.2.2\"
            },
            \"suggest\": {
                \"ext-xdebug\": \"^2.7.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"7.0-dev\"
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
            \"time\": \"2019-07-08T05:29:42+00:00\"
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
            \"version\": \"3.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-token-stream.git\",
                \"reference\": \"c4a66b97f040e3e20b3aa2a243230a1c3a9f7c8c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/c4a66b97f040e3e20b3aa2a243230a1c3a9f7c8c\",
                \"reference\": \"c4a66b97f040e3e20b3aa2a243230a1c3a9f7c8c\",
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
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Wrapper around PHP's tokenizer extension.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-token-stream/\",
            \"keywords\": [
                \"tokenizer\"
            ],
            \"time\": \"2019-07-08T05:24:54+00:00\"
        },
        {
            \"name\": \"phpunit/phpunit\",
            \"version\": \"8.2.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"c1b8534b3730f20f58600124129197bf1183dc92\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/c1b8534b3730f20f58600124129197bf1183dc92\",
                \"reference\": \"c1b8534b3730f20f58600124129197bf1183dc92\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.2.0\",
                \"ext-dom\": \"*\",
                \"ext-json\": \"*\",
                \"ext-libxml\": \"*\",
                \"ext-mbstring\": \"*\",
                \"ext-xml\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"myclabs/deep-copy\": \"^1.9.1\",
                \"phar-io/manifest\": \"^1.0.3\",
                \"phar-io/version\": \"^2.0.1\",
                \"php\": \"^7.2\",
                \"phpspec/prophecy\": \"^1.8.1\",
                \"phpunit/php-code-coverage\": \"^7.0.5\",
                \"phpunit/php-file-iterator\": \"^2.0.2\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-timer\": \"^2.1.2\",
                \"sebastian/comparator\": \"^3.0.2\",
                \"sebastian/diff\": \"^3.0.2\",
                \"sebastian/environment\": \"^4.2.2\",
                \"sebastian/exporter\": \"^3.1.0\",
                \"sebastian/global-state\": \"^3.0.0\",
                \"sebastian/object-enumerator\": \"^3.0.3\",
                \"sebastian/resource-operations\": \"^2.0.1\",
                \"sebastian/type\": \"^1.1.3\",
                \"sebastian/version\": \"^2.0.1\"
            },
            \"require-dev\": {
                \"ext-pdo\": \"*\"
            },
            \"suggest\": {
                \"ext-soap\": \"*\",
                \"ext-xdebug\": \"*\",
                \"phpunit/php-invoker\": \"^2.0.0\"
            },
            \"bin\": [
                \"phpunit\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"8.2-dev\"
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
            \"time\": \"2019-07-15T06:26:24+00:00\"
        },
        {
            \"name\": \"pimple/pimple\",
            \"version\": \"v3.2.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/silexphp/Pimple.git\",
                \"reference\": \"9e403941ef9d65d20cba7d54e29fe906db42cf32\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/silexphp/Pimple/zipball/9e403941ef9d65d20cba7d54e29fe906db42cf32\",
                \"reference\": \"9e403941ef9d65d20cba7d54e29fe906db42cf32\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\",
                \"psr/container\": \"^1.0\"
            },
            \"require-dev\": {
                \"symfony/phpunit-bridge\": \"^3.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.2.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Pimple\": \"src/\"
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
                }
            ],
            \"description\": \"Pimple, a simple Dependency Injection Container\",
            \"homepage\": \"http://pimple.sensiolabs.org\",
            \"keywords\": [
                \"container\",
                \"dependency injection\"
            ],
            \"time\": \"2018-01-21T07:42:36+00:00\"
        },
        {
            \"name\": \"psr/container\",
            \"version\": \"1.0.0\",
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
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
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
            ],
            \"time\": \"2017-02-14T16:28:37+00:00\"
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
            \"version\": \"3.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/exporter.git\",
                \"reference\": \"234199f4528de6d12aaa58b612e98f7d36adb937\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/exporter/zipball/234199f4528de6d12aaa58b612e98f7d36adb937\",
                \"reference\": \"234199f4528de6d12aaa58b612e98f7d36adb937\",
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
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                }
            ],
            \"description\": \"Provides the functionality to export PHP variables for visualization\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/exporter\",
            \"keywords\": [
                \"export\",
                \"exporter\"
            ],
            \"time\": \"2017-04-03T13:19:02+00:00\"
        },
        {
            \"name\": \"sebastian/global-state\",
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/global-state.git\",
                \"reference\": \"edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/global-state/zipball/edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4\",
                \"reference\": \"edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2\",
                \"sebastian/object-reflector\": \"^1.1.1\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"ext-dom\": \"*\",
                \"phpunit/phpunit\": \"^8.0\"
            },
            \"suggest\": {
                \"ext-uopz\": \"*\"
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
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Snapshotting of global state\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/global-state\",
            \"keywords\": [
                \"global state\"
            ],
            \"time\": \"2019-02-01T05:30:01+00:00\"
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
            \"name\": \"sebastian/type\",
            \"version\": \"1.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/type.git\",
                \"reference\": \"3aaaa15fa71d27650d62a948be022fe3b48541a3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/type/zipball/3aaaa15fa71d27650d62a948be022fe3b48541a3\",
                \"reference\": \"3aaaa15fa71d27650d62a948be022fe3b48541a3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^8.2\"
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
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Collection of value objects that represent the types of the PHP type system\",
            \"homepage\": \"https://github.com/sebastianbergmann/type\",
            \"time\": \"2019-07-02T08:10:15+00:00\"
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
            \"name\": \"seld/jsonlint\",
            \"version\": \"1.7.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Seldaek/jsonlint.git\",
                \"reference\": \"d15f59a67ff805a44c50ea0516d2341740f81a38\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Seldaek/jsonlint/zipball/d15f59a67ff805a44c50ea0516d2341740f81a38\",
                \"reference\": \"d15f59a67ff805a44c50ea0516d2341740f81a38\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.0\"
            },
            \"bin\": [
                \"bin/jsonlint\"
            ],
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Seld\\\\JsonLint\\\\\": \"src/Seld/JsonLint/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                }
            ],
            \"description\": \"JSON Linter\",
            \"keywords\": [
                \"json\",
                \"linter\",
                \"parser\",
                \"validator\"
            ],
            \"time\": \"2018-01-24T12:46:19+00:00\"
        },
        {
            \"name\": \"seld/phar-utils\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Seldaek/phar-utils.git\",
                \"reference\": \"7009b5139491975ef6486545a39f3e6dad5ac30a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Seldaek/phar-utils/zipball/7009b5139491975ef6486545a39f3e6dad5ac30a\",
                \"reference\": \"7009b5139491975ef6486545a39f3e6dad5ac30a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Seld\\\\PharUtils\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\"
                }
            ],
            \"description\": \"PHAR file format utilities, for when PHP phars you up\",
            \"keywords\": [
                \"phra\"
            ],
            \"time\": \"2015-10-13T18:44:15+00:00\"
        },
        {
            \"name\": \"slevomat/coding-standard\",
            \"version\": \"5.0.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/slevomat/coding-standard.git\",
                \"reference\": \"287ac3347c47918c0bf5e10335e36197ea10894c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/slevomat/coding-standard/zipball/287ac3347c47918c0bf5e10335e36197ea10894c\",
                \"reference\": \"287ac3347c47918c0bf5e10335e36197ea10894c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"phpstan/phpdoc-parser\": \"^0.3.1\",
                \"squizlabs/php_codesniffer\": \"^3.4.1\"
            },
            \"require-dev\": {
                \"jakub-onderka/php-parallel-lint\": \"1.0.0\",
                \"phing/phing\": \"2.16.1\",
                \"phpstan/phpstan\": \"0.11.4\",
                \"phpstan/phpstan-phpunit\": \"0.11\",
                \"phpstan/phpstan-strict-rules\": \"0.11\",
                \"phpunit/phpunit\": \"8.0.5\"
            },
            \"type\": \"phpcodesniffer-standard\",
            \"autoload\": {
                \"psr-4\": {
                    \"SlevomatCodingStandard\\\\\": \"SlevomatCodingStandard\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Slevomat Coding Standard for PHP_CodeSniffer complements Consistence Coding Standard by providing sniffs with additional checks.\",
            \"time\": \"2019-03-22T19:10:53+00:00\"
        },
        {
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"3.4.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\",
                \"reference\": \"b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\",
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
            \"homepage\": \"https://github.com/squizlabs/PHP_CodeSniffer\",
            \"keywords\": [
                \"phpcs\",
                \"standards\"
            ],
            \"time\": \"2019-04-10T23:49:02+00:00\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"b592b26a24265a35172d8a2094d8b10f22b7cc39\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/b592b26a24265a35172d8a2094d8b10f22b7cc39\",
                \"reference\": \"b592b26a24265a35172d8a2094d8b10f22b7cc39\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/polyfill-php73\": \"^1.8\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/event-dispatcher\": \"<4.3\",
                \"symfony/process\": \"<3.3\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"^4.3\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"^4.3\"
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-06-13T11:03:18+00:00\"
        },
        {
            \"name\": \"symfony/filesystem\",
            \"version\": \"v4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"b9896d034463ad6fd2bf17e2bf9418caecd6313d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/b9896d034463ad6fd2bf17e2bf9418caecd6313d\",
                \"reference\": \"b9896d034463ad6fd2bf17e2bf9418caecd6313d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
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
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-06-23T08:51:25+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"33c21f7d5d3dc8a140c282854a7e13aeb5d0f91a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/33c21f7d5d3dc8a140c282854a7e13aeb5d0f91a\",
                \"reference\": \"33c21f7d5d3dc8a140c282854a7e13aeb5d0f91a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-06-13T11:03:18+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.11.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"82ebae02209c21113908c229e9883c419720738a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/82ebae02209c21113908c229e9883c419720738a\",
                \"reference\": \"82ebae02209c21113908c229e9883c419720738a\",
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
                    \"dev-master\": \"1.11-dev\"
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
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                },
                {
                    \"name\": \"Gert de Pagter\",
                    \"email\": \"BackEndTea@gmail.com\"
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
            \"time\": \"2019-02-06T07:57:58+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.11.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"fe5e94c604826c35a32fa832f35bd036b6799609\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/fe5e94c604826c35a32fa832f35bd036b6799609\",
                \"reference\": \"fe5e94c604826c35a32fa832f35bd036b6799609\",
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
                    \"dev-master\": \"1.11-dev\"
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
            \"time\": \"2019-02-06T07:57:58+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php73\",
            \"version\": \"v1.11.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php73.git\",
                \"reference\": \"d1fb4abcc0c47be136208ad9d68bf59f1ee17abd\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php73/zipball/d1fb4abcc0c47be136208ad9d68bf59f1ee17abd\",
                \"reference\": \"d1fb4abcc0c47be136208ad9d68bf59f1ee17abd\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.11-dev\"
                }
            },
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
            ],
            \"time\": \"2019-02-06T07:57:58+00:00\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"856d35814cf287480465bb7a6c413bb7f5f5e69c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/856d35814cf287480465bb7a6c413bb7f5f5e69c\",
                \"reference\": \"856d35814cf287480465bb7a6c413bb7f5f5e69c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Process\\\\\": \"\"
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
            \"description\": \"Symfony Process Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-05-30T16:10:05+00:00\"
        },
        {
            \"name\": \"symfony/service-contracts\",
            \"version\": \"v1.1.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/service-contracts.git\",
                \"reference\": \"f391a00de78ec7ec8cf5cdcdae59ec7b883edb8d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/service-contracts/zipball/f391a00de78ec7ec8cf5cdcdae59ec7b883edb8d\",
                \"reference\": \"f391a00de78ec7ec8cf5cdcdae59ec7b883edb8d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/container\": \"^1.0\"
            },
            \"suggest\": {
                \"symfony/service-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
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
            ],
            \"time\": \"2019-06-13T11:15:36+00:00\"
        },
        {
            \"name\": \"symfony/yaml\",
            \"version\": \"v4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/yaml.git\",
                \"reference\": \"c60ecf5ba842324433b46f58dc7afc4487dbab99\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/yaml/zipball/c60ecf5ba842324433b46f58dc7afc4487dbab99\",
                \"reference\": \"c60ecf5ba842324433b46f58dc7afc4487dbab99\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"conflict\": {
                \"symfony/console\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/console\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/console\": \"For validating YAML files using the lint command\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
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
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-04-06T14:04:46+00:00\"
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
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"A small library for converting tokenized PHP source code into XML and potentially other formats\",
            \"time\": \"2019-06-13T22:48:21+00:00\"
        },
        {
            \"name\": \"vimeo/psalm\",
            \"version\": \"3.4.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/vimeo/psalm.git\",
                \"reference\": \"aa0efcf026e353ce2a4b66c4d3d81caebbf0966a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/vimeo/psalm/zipball/aa0efcf026e353ce2a4b66c4d3d81caebbf0966a\",
                \"reference\": \"aa0efcf026e353ce2a4b66c4d3d81caebbf0966a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"amphp/amp\": \"^2.1\",
                \"amphp/byte-stream\": \"^1.5\",
                \"composer/xdebug-handler\": \"^1.1\",
                \"felixfbecker/advanced-json-rpc\": \"^3.0.3\",
                \"felixfbecker/language-server-protocol\": \"^1.4\",
                \"netresearch/jsonmapper\": \"^1.0\",
                \"nikic/php-parser\": \"^4.2\",
                \"ocramius/package-versions\": \"^1.2\",
                \"openlss/lib-array2xml\": \"^1.0\",
                \"php\": \"^7.1\",
                \"sebastian/diff\": \"^3.0\",
                \"symfony/console\": \"^3.3||^4.0\",
                \"webmozart/glob\": \"^4.1\",
                \"webmozart/path-util\": \"^2.3\"
            },
            \"provide\": {
                \"psalm/psalm\": \"self.version\"
            },
            \"require-dev\": {
                \"bamarni/composer-bin-plugin\": \"^1.2\",
                \"friendsofphp/php-cs-fixer\": \"^2.15\",
                \"phpmyadmin/sql-parser\": \"^5.0\",
                \"phpunit/phpunit\": \"^7.5 || ^8.0\",
                \"psalm/plugin-phpunit\": \"^0.6\",
                \"slevomat/coding-standard\": \"^5.0\",
                \"squizlabs/php_codesniffer\": \"3.4.0\",
                \"symfony/process\": \"^4.3\"
            },
            \"suggest\": {
                \"ext-igbinary\": \"^2.0.5\"
            },
            \"bin\": [
                \"psalm\",
                \"psalter\",
                \"psalm-language-server\",
                \"psalm-plugin\",
                \"psalm-refactor\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.x-dev\",
                    \"dev-2.x\": \"2.x-dev\",
                    \"dev-1.x\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psalm\\\\Plugin\\\\\": \"src/Psalm/Plugin\",
                    \"Psalm\\\\\": \"src/Psalm\"
                },
                \"files\": [
                    \"src/functions.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Matthew Brown\"
                }
            ],
            \"description\": \"A static analysis tool for finding errors in PHP applications\",
            \"keywords\": [
                \"code\",
                \"inspection\",
                \"php\"
            ],
            \"time\": \"2019-07-09T11:39:03+00:00\"
        },
        {
            \"name\": \"webmozart/assert\",
            \"version\": \"1.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/assert.git\",
                \"reference\": \"83e253c8e0be5b0257b881e1827274667c5c17a9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/assert/zipball/83e253c8e0be5b0257b881e1827274667c5c17a9\",
                \"reference\": \"83e253c8e0be5b0257b881e1827274667c5c17a9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3 || ^7.0\",
                \"symfony/polyfill-ctype\": \"^1.8\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\",
                \"sebastian/version\": \"^1.0.1\"
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
            \"time\": \"2018-12-25T11:19:39+00:00\"
        },
        {
            \"name\": \"webmozart/glob\",
            \"version\": \"4.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/glob.git\",
                \"reference\": \"3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/glob/zipball/3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe\",
                \"reference\": \"3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3|^7.0\",
                \"webmozart/path-util\": \"^2.2\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\",
                \"sebastian/version\": \"^1.0.1\",
                \"symfony/filesystem\": \"^2.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Webmozart\\\\Glob\\\\\": \"src/\"
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
            \"description\": \"A PHP implementation of Ant's glob.\",
            \"time\": \"2015-12-29T11:14:33+00:00\"
        },
        {
            \"name\": \"webmozart/path-util\",
            \"version\": \"2.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/path-util.git\",
                \"reference\": \"d939f7edc24c9a1bb9c0dee5cb05d8e859490725\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/path-util/zipball/d939f7edc24c9a1bb9c0dee5cb05d8e859490725\",
                \"reference\": \"d939f7edc24c9a1bb9c0dee5cb05d8e859490725\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\",
                \"webmozart/assert\": \"~1.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\",
                \"sebastian/version\": \"^1.0.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Webmozart\\\\PathUtil\\\\\": \"src/\"
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
            \"description\": \"A robust cross-platform utility for normalizing, comparing and modifying file paths.\",
            \"time\": \"2015-12-17T08:42:14+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.3.0\",
        \"composer-plugin-api\": \"^1.0.0\"
    },
    \"platform-dev\": {
        \"ext-zip\": \"*\"
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/package-versions/composer.lock";
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
    \"content-hash\": \"f205ab392e373519f76967590de4f5c3\",
    \"packages\": [],
    \"packages-dev\": [
        {
            \"name\": \"amphp/amp\",
            \"version\": \"v2.1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/amphp/amp.git\",
                \"reference\": \"f824f0df1da2cc042934fa267d7a227fff9276c9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/amphp/amp/zipball/f824f0df1da2cc042934fa267d7a227fff9276c9\",
                \"reference\": \"f824f0df1da2cc042934fa267d7a227fff9276c9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7\"
            },
            \"require-dev\": {
                \"amphp/php-cs-fixer-config\": \"dev-master\",
                \"amphp/phpunit-util\": \"^1\",
                \"ext-json\": \"*\",
                \"phpstan/phpstan\": \"^0.8.5\",
                \"phpunit/phpunit\": \"^6.0.9\",
                \"react/promise\": \"^2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Amp\\\\\": \"lib\"
                },
                \"files\": [
                    \"lib/functions.php\",
                    \"lib/Internal/functions.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Bob Weinand\",
                    \"email\": \"bobwei9@hotmail.com\"
                },
                {
                    \"name\": \"Niklas Keller\",
                    \"email\": \"me@kelunik.com\"
                },
                {
                    \"name\": \"Daniel Lowrey\",
                    \"email\": \"rdlowrey@php.net\"
                },
                {
                    \"name\": \"Aaron Piotrowski\",
                    \"email\": \"aaron@trowski.com\"
                }
            ],
            \"description\": \"A non-blocking concurrency framework for PHP applications.\",
            \"homepage\": \"http://amphp.org/amp\",
            \"keywords\": [
                \"async\",
                \"asynchronous\",
                \"awaitable\",
                \"concurrency\",
                \"event\",
                \"event-loop\",
                \"future\",
                \"non-blocking\",
                \"promise\"
            ],
            \"time\": \"2019-05-31T18:42:02+00:00\"
        },
        {
            \"name\": \"amphp/byte-stream\",
            \"version\": \"v1.6.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/amphp/byte-stream.git\",
                \"reference\": \"c75af3778b5511deb1d760e4709cade2dabc2295\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/amphp/byte-stream/zipball/c75af3778b5511deb1d760e4709cade2dabc2295\",
                \"reference\": \"c75af3778b5511deb1d760e4709cade2dabc2295\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"amphp/amp\": \"^2\"
            },
            \"require-dev\": {
                \"amphp/php-cs-fixer-config\": \"dev-master\",
                \"amphp/phpunit-util\": \"^1\",
                \"friendsofphp/php-cs-fixer\": \"^2.3\",
                \"infection/infection\": \"^0.9.3\",
                \"phpunit/phpunit\": \"^6\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Amp\\\\ByteStream\\\\\": \"lib\"
                },
                \"files\": [
                    \"lib/functions.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Niklas Keller\",
                    \"email\": \"me@kelunik.com\"
                },
                {
                    \"name\": \"Aaron Piotrowski\",
                    \"email\": \"aaron@trowski.com\"
                }
            ],
            \"description\": \"A stream abstraction to make working with non-blocking I/O simple.\",
            \"homepage\": \"http://amphp.org/byte-stream\",
            \"keywords\": [
                \"amp\",
                \"amphp\",
                \"async\",
                \"io\",
                \"non-blocking\",
                \"stream\"
            ],
            \"time\": \"2019-06-03T21:45:17+00:00\"
        },
        {
            \"name\": \"composer/ca-bundle\",
            \"version\": \"1.1.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/ca-bundle.git\",
                \"reference\": \"558f321c52faeb4828c03e7dc0cfe39a09e09a2d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/ca-bundle/zipball/558f321c52faeb4828c03e7dc0cfe39a09e09a2d\",
                \"reference\": \"558f321c52faeb4828c03e7dc0cfe39a09e09a2d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-openssl\": \"*\",
                \"ext-pcre\": \"*\",
                \"php\": \"^5.3.2 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.5\",
                \"psr/log\": \"^1.0\",
                \"symfony/process\": \"^2.5 || ^3.0 || ^4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\CaBundle\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                }
            ],
            \"description\": \"Lets you find a path to the system CA bundle, and includes a fallback to the Mozilla CA bundle.\",
            \"keywords\": [
                \"cabundle\",
                \"cacert\",
                \"certificate\",
                \"ssl\",
                \"tls\"
            ],
            \"time\": \"2019-01-28T09:30:10+00:00\"
        },
        {
            \"name\": \"composer/composer\",
            \"version\": \"1.8.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/composer.git\",
                \"reference\": \"19b5f66a0e233eb944f134df34091fe1c5dfcc11\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/composer/zipball/19b5f66a0e233eb944f134df34091fe1c5dfcc11\",
                \"reference\": \"19b5f66a0e233eb944f134df34091fe1c5dfcc11\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/ca-bundle\": \"^1.0\",
                \"composer/semver\": \"^1.0\",
                \"composer/spdx-licenses\": \"^1.2\",
                \"composer/xdebug-handler\": \"^1.1\",
                \"justinrainbow/json-schema\": \"^3.0 || ^4.0 || ^5.0\",
                \"php\": \"^5.3.2 || ^7.0\",
                \"psr/log\": \"^1.0\",
                \"seld/jsonlint\": \"^1.4\",
                \"seld/phar-utils\": \"^1.0\",
                \"symfony/console\": \"^2.7 || ^3.0 || ^4.0\",
                \"symfony/filesystem\": \"^2.7 || ^3.0 || ^4.0\",
                \"symfony/finder\": \"^2.7 || ^3.0 || ^4.0\",
                \"symfony/process\": \"^2.7 || ^3.0 || ^4.0\"
            },
            \"conflict\": {
                \"symfony/console\": \"2.8.38\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7\",
                \"phpunit/phpunit-mock-objects\": \"^2.3 || ^3.0\"
            },
            \"suggest\": {
                \"ext-openssl\": \"Enabling the openssl extension allows you to access https URLs for repositories and packages\",
                \"ext-zip\": \"Enabling the zip extension allows you to unzip archives\",
                \"ext-zlib\": \"Allow gzip compression of HTTP requests\"
            },
            \"bin\": [
                \"bin/composer\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.8-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\\": \"src/Composer\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nils Adermann\",
                    \"email\": \"naderman@naderman.de\",
                    \"homepage\": \"http://www.naderman.de\"
                },
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                }
            ],
            \"description\": \"Composer helps you declare, manage and install dependencies of PHP projects, ensuring you have the right stack everywhere.\",
            \"homepage\": \"https://getcomposer.org/\",
            \"keywords\": [
                \"autoload\",
                \"dependency\",
                \"package\"
            ],
            \"time\": \"2019-06-11T13:03:06+00:00\"
        },
        {
            \"name\": \"composer/semver\",
            \"version\": \"1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/semver.git\",
                \"reference\": \"46d9139568ccb8d9e7cdd4539cab7347568a5e2e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/semver/zipball/46d9139568ccb8d9e7cdd4539cab7347568a5e2e\",
                \"reference\": \"46d9139568ccb8d9e7cdd4539cab7347568a5e2e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.5 || ^5.0.5\",
                \"phpunit/phpunit-mock-objects\": \"2.3.0 || ^3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\Semver\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nils Adermann\",
                    \"email\": \"naderman@naderman.de\",
                    \"homepage\": \"http://www.naderman.de\"
                },
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                },
                {
                    \"name\": \"Rob Bast\",
                    \"email\": \"rob.bast@gmail.com\",
                    \"homepage\": \"http://robbast.nl\"
                }
            ],
            \"description\": \"Semver library that offers utilities, version constraint parsing and validation.\",
            \"keywords\": [
                \"semantic\",
                \"semver\",
                \"validation\",
                \"versioning\"
            ],
            \"time\": \"2019-03-19T17:25:45+00:00\"
        },
        {
            \"name\": \"composer/spdx-licenses\",
            \"version\": \"1.5.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/spdx-licenses.git\",
                \"reference\": \"a1aa51cf3ab838b83b0867b14e56fc20fbd55b3d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/spdx-licenses/zipball/a1aa51cf3ab838b83b0867b14e56fc20fbd55b3d\",
                \"reference\": \"a1aa51cf3ab838b83b0867b14e56fc20fbd55b3d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0 || ^8.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || 6.5 - 7\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\Spdx\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nils Adermann\",
                    \"email\": \"naderman@naderman.de\",
                    \"homepage\": \"http://www.naderman.de\"
                },
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                },
                {
                    \"name\": \"Rob Bast\",
                    \"email\": \"rob.bast@gmail.com\",
                    \"homepage\": \"http://robbast.nl\"
                }
            ],
            \"description\": \"SPDX licenses list and validation library.\",
            \"keywords\": [
                \"license\",
                \"spdx\",
                \"validator\"
            ],
            \"time\": \"2019-03-26T10:23:26+00:00\"
        },
        {
            \"name\": \"composer/xdebug-handler\",
            \"version\": \"1.3.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/xdebug-handler.git\",
                \"reference\": \"46867cbf8ca9fb8d60c506895449eb799db1184f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/xdebug-handler/zipball/46867cbf8ca9fb8d60c506895449eb799db1184f\",
                \"reference\": \"46867cbf8ca9fb8d60c506895449eb799db1184f\",
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
            \"time\": \"2019-05-27T17:52:04+00:00\"
        },
        {
            \"name\": \"dealerdirect/phpcodesniffer-composer-installer\",
            \"version\": \"v0.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Dealerdirect/phpcodesniffer-composer-installer.git\",
                \"reference\": \"e749410375ff6fb7a040a68878c656c2e610b132\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Dealerdirect/phpcodesniffer-composer-installer/zipball/e749410375ff6fb7a040a68878c656c2e610b132\",
                \"reference\": \"e749410375ff6fb7a040a68878c656c2e610b132\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer-plugin-api\": \"^1.0\",
                \"php\": \"^5.3|^7\",
                \"squizlabs/php_codesniffer\": \"^2|^3\"
            },
            \"require-dev\": {
                \"composer/composer\": \"*\",
                \"phpcompatibility/php-compatibility\": \"^9.0\",
                \"sensiolabs/security-checker\": \"^4.1.0\"
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
                    \"email\": \"franck.nijhof@dealerdirect.com\",
                    \"homepage\": \"http://www.frenck.nl\",
                    \"role\": \"Developer / IT Manager\"
                }
            ],
            \"description\": \"PHP_CodeSniffer Standards Composer Installer Plugin\",
            \"homepage\": \"http://www.dealerdirect.com\",
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
            \"time\": \"2018-10-26T13:21:45+00:00\"
        },
        {
            \"name\": \"doctrine/coding-standard\",
            \"version\": \"6.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/coding-standard.git\",
                \"reference\": \"d33f69eb98b25aa51ffe3a909f0ec77000af4701\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/coding-standard/zipball/d33f69eb98b25aa51ffe3a909f0ec77000af4701\",
                \"reference\": \"d33f69eb98b25aa51ffe3a909f0ec77000af4701\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"dealerdirect/phpcodesniffer-composer-installer\": \"^0.5.0\",
                \"php\": \"^7.1\",
                \"slevomat/coding-standard\": \"^5.0\",
                \"squizlabs/php_codesniffer\": \"^3.4.0\"
            },
            \"type\": \"phpcodesniffer-standard\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"6.0.x-dev\"
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
            \"description\": \"The Doctrine Coding Standard is a set of PHPCS rules applied to all Doctrine projects.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/coding-standard.html\",
            \"keywords\": [
                \"checks\",
                \"code\",
                \"coding\",
                \"cs\",
                \"doctrine\",
                \"rules\",
                \"sniffer\",
                \"sniffs\",
                \"standard\",
                \"style\"
            ],
            \"time\": \"2019-03-15T12:45:47+00:00\"
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
            \"name\": \"felixfbecker/advanced-json-rpc\",
            \"version\": \"v3.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/felixfbecker/php-advanced-json-rpc.git\",
                \"reference\": \"241c470695366e7b83672be04ea0e64d8085a551\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/felixfbecker/php-advanced-json-rpc/zipball/241c470695366e7b83672be04ea0e64d8085a551\",
                \"reference\": \"241c470695366e7b83672be04ea0e64d8085a551\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"netresearch/jsonmapper\": \"^1.0\",
                \"php\": \">=7.0\",
                \"phpdocumentor/reflection-docblock\": \"^4.0.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"AdvancedJsonRpc\\\\\": \"lib/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"ISC\"
            ],
            \"authors\": [
                {
                    \"name\": \"Felix Becker\",
                    \"email\": \"felix.b@outlook.com\"
                }
            ],
            \"description\": \"A more advanced JSONRPC implementation\",
            \"time\": \"2018-09-10T08:58:41+00:00\"
        },
        {
            \"name\": \"felixfbecker/language-server-protocol\",
            \"version\": \"v1.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/felixfbecker/php-language-server-protocol.git\",
                \"reference\": \"378801f6139bb74ac215d81cca1272af61df9a9f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/felixfbecker/php-language-server-protocol/zipball/378801f6139bb74ac215d81cca1272af61df9a9f\",
                \"reference\": \"378801f6139bb74ac215d81cca1272af61df9a9f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\"
            },
            \"require-dev\": {
                \"phpstan/phpstan\": \"*\",
                \"phpunit/phpunit\": \"^6.3\",
                \"squizlabs/php_codesniffer\": \"^3.1\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"LanguageServerProtocol\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"ISC\"
            ],
            \"authors\": [
                {
                    \"name\": \"Felix Becker\",
                    \"email\": \"felix.b@outlook.com\"
                }
            ],
            \"description\": \"PHP classes for the Language Server Protocol\",
            \"keywords\": [
                \"language\",
                \"microsoft\",
                \"php\",
                \"server\"
            ],
            \"time\": \"2019-06-23T21:03:50+00:00\"
        },
        {
            \"name\": \"infection/infection\",
            \"version\": \"0.13.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/infection/infection.git\",
                \"reference\": \"f0f8327f5e60d1a7d8ab4ea01074c6250ab96f57\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/infection/infection/zipball/f0f8327f5e60d1a7d8ab4ea01074c6250ab96f57\",
                \"reference\": \"f0f8327f5e60d1a7d8ab4ea01074c6250ab96f57\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/xdebug-handler\": \"^1.3\",
                \"ext-dom\": \"*\",
                \"ext-json\": \"*\",
                \"ext-libxml\": \"*\",
                \"justinrainbow/json-schema\": \"^5.2\",
                \"nikic/php-parser\": \"^4.2.1\",
                \"ocramius/package-versions\": \"^1.2\",
                \"padraic/phar-updater\": \"^1.0.4\",
                \"php\": \"^7.1.3\",
                \"pimple/pimple\": \"^3.2\",
                \"sebastian/diff\": \"^1.4 || ^2.0 || ^3.0\",
                \"symfony/console\": \"^3.4 || ^4.0\",
                \"symfony/filesystem\": \"^3.4 || ^4.0\",
                \"symfony/finder\": \"^3.4 || ^4.0\",
                \"symfony/process\": \"^3.4 || ^4.0\",
                \"symfony/yaml\": \"^3.4 || ^4.0\",
                \"webmozart/assert\": \"^1.3\"
            },
            \"conflict\": {
                \"symfony/console\": \"=3.4.16 || =4.1.5\",
                \"symfony/process\": \"3.4.2\"
            },
            \"require-dev\": {
                \"helmich/phpunit-json-assert\": \"^2.1 || ^3.0\",
                \"phpunit/phpunit\": \"^7.5\"
            },
            \"bin\": [
                \"bin/infection\"
            ],
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Infection\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Maks Rafalko\",
                    \"email\": \"maks.rafalko@gmail.com\",
                    \"homepage\": \"https://twitter.com/maks_rafalko\"
                },
                {
                    \"name\": \"Gert de Pagter\",
                    \"homepage\": \"https://github.com/BackEndTea\"
                },
                {
                    \"name\": \"Théo FIDRY\",
                    \"email\": \"theo.fidry@gmail.com\",
                    \"homepage\": \"https://twitter.com/tfidry\"
                },
                {
                    \"name\": \"Oleg Zhulnev\",
                    \"homepage\": \"https://github.com/sidz\"
                },
                {
                    \"name\": \"Alexey Kopytko\",
                    \"email\": \"alexey@kopytko.com\",
                    \"homepage\": \"https://www.alexeykopytko.com\"
                }
            ],
            \"description\": \"Infection is a Mutation Testing framework for PHP. The mutation adequacy score can be used to measure the effectiveness of a test set in terms of its ability to detect faults.\",
            \"keywords\": [
                \"coverage\",
                \"mutant\",
                \"mutation framework\",
                \"mutation testing\",
                \"testing\",
                \"unit testing\"
            ],
            \"time\": \"2019-07-01T18:01:41+00:00\"
        },
        {
            \"name\": \"justinrainbow/json-schema\",
            \"version\": \"5.2.8\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/justinrainbow/json-schema.git\",
                \"reference\": \"dcb6e1006bb5fd1e392b4daa68932880f37550d4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/justinrainbow/json-schema/zipball/dcb6e1006bb5fd1e392b4daa68932880f37550d4\",
                \"reference\": \"dcb6e1006bb5fd1e392b4daa68932880f37550d4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"require-dev\": {
                \"friendsofphp/php-cs-fixer\": \"~2.2.20\",
                \"json-schema/json-schema-test-suite\": \"1.2.0\",
                \"phpunit/phpunit\": \"^4.8.35\"
            },
            \"bin\": [
                \"bin/validate-json\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"5.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"JsonSchema\\\\\": \"src/JsonSchema/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Bruno Prieto Reis\",
                    \"email\": \"bruno.p.reis@gmail.com\"
                },
                {
                    \"name\": \"Justin Rainbow\",
                    \"email\": \"justin.rainbow@gmail.com\"
                },
                {
                    \"name\": \"Igor Wiedler\",
                    \"email\": \"igor@wiedler.ch\"
                },
                {
                    \"name\": \"Robert Schönthal\",
                    \"email\": \"seroscho@googlemail.com\"
                }
            ],
            \"description\": \"A library to validate a json schema.\",
            \"homepage\": \"https://github.com/justinrainbow/json-schema\",
            \"keywords\": [
                \"json\",
                \"schema\"
            ],
            \"time\": \"2019-01-14T23:55:14+00:00\"
        },
        {
            \"name\": \"myclabs/deep-copy\",
            \"version\": \"1.9.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/myclabs/DeepCopy.git\",
                \"reference\": \"e6828efaba2c9b79f4499dae1d66ef8bfa7b2b72\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/myclabs/DeepCopy/zipball/e6828efaba2c9b79f4499dae1d66ef8bfa7b2b72\",
                \"reference\": \"e6828efaba2c9b79f4499dae1d66ef8bfa7b2b72\",
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
            \"time\": \"2019-04-07T13:18:21+00:00\"
        },
        {
            \"name\": \"netresearch/jsonmapper\",
            \"version\": \"v1.5.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/cweiske/jsonmapper.git\",
                \"reference\": \"047dafe26facbba1e997e9fb3b3c298562d75a0b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/cweiske/jsonmapper/zipball/047dafe26facbba1e997e9fb3b3c298562d75a0b\",
                \"reference\": \"047dafe26facbba1e997e9fb3b3c298562d75a0b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~4.8.35 || ~5.7 || ~6.4\",
                \"squizlabs/php_codesniffer\": \"~1.5\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"JsonMapper\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"OSL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"Christian Weiske\",
                    \"email\": \"cweiske@cweiske.de\",
                    \"homepage\": \"http://github.com/cweiske/jsonmapper/\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Map nested JSON structures onto PHP classes\",
            \"time\": \"2019-07-08T18:46:43+00:00\"
        },
        {
            \"name\": \"nikic/php-parser\",
            \"version\": \"v4.2.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nikic/PHP-Parser.git\",
                \"reference\": \"1bd73cc04c3843ad8d6b0bfc0956026a151fc420\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/1bd73cc04c3843ad8d6b0bfc0956026a151fc420\",
                \"reference\": \"1bd73cc04c3843ad8d6b0bfc0956026a151fc420\",
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
            \"time\": \"2019-05-25T20:07:01+00:00\"
        },
        {
            \"name\": \"openlss/lib-array2xml\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nullivex/lib-array2xml.git\",
                \"reference\": \"a91f18a8dfc69ffabe5f9b068bc39bb202c81d90\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nullivex/lib-array2xml/zipball/a91f18a8dfc69ffabe5f9b068bc39bb202c81d90\",
                \"reference\": \"a91f18a8dfc69ffabe5f9b068bc39bb202c81d90\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.2\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-0\": {
                    \"LSS\": \"\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"Apache-2.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"Bryan Tong\",
                    \"email\": \"bryan@nullivex.com\",
                    \"homepage\": \"https://www.nullivex.com\"
                },
                {
                    \"name\": \"Tony Butler\",
                    \"email\": \"spudz76@gmail.com\",
                    \"homepage\": \"https://www.nullivex.com\"
                }
            ],
            \"description\": \"Array2XML conversion library credit to lalit.org\",
            \"homepage\": \"https://www.nullivex.com\",
            \"keywords\": [
                \"array\",
                \"array conversion\",
                \"xml\",
                \"xml conversion\"
            ],
            \"time\": \"2019-03-29T20:06:56+00:00\"
        },
        {
            \"name\": \"padraic/humbug_get_contents\",
            \"version\": \"1.1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/humbug/file_get_contents.git\",
                \"reference\": \"dcb086060c9dd6b2f51d8f7a895500307110b7a7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/humbug/file_get_contents/zipball/dcb086060c9dd6b2f51d8f7a895500307110b7a7\",
                \"reference\": \"dcb086060c9dd6b2f51d8f7a895500307110b7a7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/ca-bundle\": \"^1.0\",
                \"ext-openssl\": \"*\",
                \"php\": \"^5.3 || ^7.0 || ^7.1 || ^7.2\"
            },
            \"require-dev\": {
                \"bamarni/composer-bin-plugin\": \"^1.1\",
                \"mikey179/vfsstream\": \"^1.6\",
                \"phpunit/phpunit\": \"^4.8 || ^5.7 || ^6.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"bamarni-bin\": {
                    \"bin-links\": false
                },
                \"branch-alias\": {
                    \"dev-master\": \"2.0-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Humbug\\\\\": \"src/\"
                },
                \"files\": [
                    \"src/function.php\",
                    \"src/functions.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Pádraic Brady\",
                    \"email\": \"padraic.brady@gmail.com\",
                    \"homepage\": \"http://blog.astrumfutura.com\"
                },
                {
                    \"name\": \"Théo Fidry\",
                    \"email\": \"theo.fidry@gmail.com\"
                }
            ],
            \"description\": \"Secure wrapper for accessing HTTPS resources with file_get_contents for PHP 5.3+\",
            \"homepage\": \"https://github.com/padraic/file_get_contents\",
            \"keywords\": [
                \"download\",
                \"file_get_contents\",
                \"http\",
                \"https\",
                \"ssl\",
                \"tls\"
            ],
            \"time\": \"2018-02-12T18:47:17+00:00\"
        },
        {
            \"name\": \"padraic/phar-updater\",
            \"version\": \"v1.0.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/humbug/phar-updater.git\",
                \"reference\": \"d01d3b8f26e541ac9b9eeba1e18d005d852f7ff1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/humbug/phar-updater/zipball/d01d3b8f26e541ac9b9eeba1e18d005d852f7ff1\",
                \"reference\": \"d01d3b8f26e541ac9b9eeba1e18d005d852f7ff1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"padraic/humbug_get_contents\": \"^1.0\",
                \"php\": \">=5.3.3\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~4.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Humbug\\\\SelfUpdate\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Pádraic Brady\",
                    \"email\": \"padraic.brady@gmail.com\",
                    \"homepage\": \"http://blog.astrumfutura.com\"
                }
            ],
            \"description\": \"A thing to make PHAR self-updating easy and secure.\",
            \"keywords\": [
                \"humbug\",
                \"phar\",
                \"self-update\",
                \"update\"
            ],
            \"time\": \"2018-03-30T12:52:15+00:00\"
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
            \"version\": \"0.3.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpdoc-parser.git\",
                \"reference\": \"8c4ef2aefd9788238897b678a985e1d5c8df6db4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpdoc-parser/zipball/8c4ef2aefd9788238897b678a985e1d5c8df6db4\",
                \"reference\": \"8c4ef2aefd9788238897b678a985e1d5c8df6db4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.1\"
            },
            \"require-dev\": {
                \"consistence/coding-standard\": \"^3.5\",
                \"jakub-onderka/php-parallel-lint\": \"^0.9.2\",
                \"phing/phing\": \"^2.16.0\",
                \"phpstan/phpstan\": \"^0.10\",
                \"phpunit/phpunit\": \"^6.3\",
                \"slevomat/coding-standard\": \"^4.7.2\",
                \"squizlabs/php_codesniffer\": \"^3.3.2\",
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
            \"time\": \"2019-06-07T19:13:52+00:00\"
        },
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"7.0.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"d471d0d2b529a67c6a722dd446c4ec90881ac315\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/d471d0d2b529a67c6a722dd446c4ec90881ac315\",
                \"reference\": \"d471d0d2b529a67c6a722dd446c4ec90881ac315\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.2\",
                \"phpunit/php-file-iterator\": \"^2.0.2\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-token-stream\": \"^3.0.2\",
                \"sebastian/code-unit-reverse-lookup\": \"^1.0.1\",
                \"sebastian/environment\": \"^4.2.2\",
                \"sebastian/version\": \"^2.0.1\",
                \"theseer/tokenizer\": \"^1.1.3\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^8.2.2\"
            },
            \"suggest\": {
                \"ext-xdebug\": \"^2.7.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"7.0-dev\"
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
            \"time\": \"2019-07-08T05:29:42+00:00\"
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
            \"version\": \"3.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-token-stream.git\",
                \"reference\": \"c4a66b97f040e3e20b3aa2a243230a1c3a9f7c8c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/c4a66b97f040e3e20b3aa2a243230a1c3a9f7c8c\",
                \"reference\": \"c4a66b97f040e3e20b3aa2a243230a1c3a9f7c8c\",
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
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Wrapper around PHP's tokenizer extension.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-token-stream/\",
            \"keywords\": [
                \"tokenizer\"
            ],
            \"time\": \"2019-07-08T05:24:54+00:00\"
        },
        {
            \"name\": \"phpunit/phpunit\",
            \"version\": \"8.2.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"c1b8534b3730f20f58600124129197bf1183dc92\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/c1b8534b3730f20f58600124129197bf1183dc92\",
                \"reference\": \"c1b8534b3730f20f58600124129197bf1183dc92\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.2.0\",
                \"ext-dom\": \"*\",
                \"ext-json\": \"*\",
                \"ext-libxml\": \"*\",
                \"ext-mbstring\": \"*\",
                \"ext-xml\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"myclabs/deep-copy\": \"^1.9.1\",
                \"phar-io/manifest\": \"^1.0.3\",
                \"phar-io/version\": \"^2.0.1\",
                \"php\": \"^7.2\",
                \"phpspec/prophecy\": \"^1.8.1\",
                \"phpunit/php-code-coverage\": \"^7.0.5\",
                \"phpunit/php-file-iterator\": \"^2.0.2\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-timer\": \"^2.1.2\",
                \"sebastian/comparator\": \"^3.0.2\",
                \"sebastian/diff\": \"^3.0.2\",
                \"sebastian/environment\": \"^4.2.2\",
                \"sebastian/exporter\": \"^3.1.0\",
                \"sebastian/global-state\": \"^3.0.0\",
                \"sebastian/object-enumerator\": \"^3.0.3\",
                \"sebastian/resource-operations\": \"^2.0.1\",
                \"sebastian/type\": \"^1.1.3\",
                \"sebastian/version\": \"^2.0.1\"
            },
            \"require-dev\": {
                \"ext-pdo\": \"*\"
            },
            \"suggest\": {
                \"ext-soap\": \"*\",
                \"ext-xdebug\": \"*\",
                \"phpunit/php-invoker\": \"^2.0.0\"
            },
            \"bin\": [
                \"phpunit\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"8.2-dev\"
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
            \"time\": \"2019-07-15T06:26:24+00:00\"
        },
        {
            \"name\": \"pimple/pimple\",
            \"version\": \"v3.2.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/silexphp/Pimple.git\",
                \"reference\": \"9e403941ef9d65d20cba7d54e29fe906db42cf32\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/silexphp/Pimple/zipball/9e403941ef9d65d20cba7d54e29fe906db42cf32\",
                \"reference\": \"9e403941ef9d65d20cba7d54e29fe906db42cf32\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\",
                \"psr/container\": \"^1.0\"
            },
            \"require-dev\": {
                \"symfony/phpunit-bridge\": \"^3.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.2.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Pimple\": \"src/\"
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
                }
            ],
            \"description\": \"Pimple, a simple Dependency Injection Container\",
            \"homepage\": \"http://pimple.sensiolabs.org\",
            \"keywords\": [
                \"container\",
                \"dependency injection\"
            ],
            \"time\": \"2018-01-21T07:42:36+00:00\"
        },
        {
            \"name\": \"psr/container\",
            \"version\": \"1.0.0\",
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
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
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
            ],
            \"time\": \"2017-02-14T16:28:37+00:00\"
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
            \"version\": \"3.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/exporter.git\",
                \"reference\": \"234199f4528de6d12aaa58b612e98f7d36adb937\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/exporter/zipball/234199f4528de6d12aaa58b612e98f7d36adb937\",
                \"reference\": \"234199f4528de6d12aaa58b612e98f7d36adb937\",
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
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                }
            ],
            \"description\": \"Provides the functionality to export PHP variables for visualization\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/exporter\",
            \"keywords\": [
                \"export\",
                \"exporter\"
            ],
            \"time\": \"2017-04-03T13:19:02+00:00\"
        },
        {
            \"name\": \"sebastian/global-state\",
            \"version\": \"3.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/global-state.git\",
                \"reference\": \"edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/global-state/zipball/edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4\",
                \"reference\": \"edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2\",
                \"sebastian/object-reflector\": \"^1.1.1\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"ext-dom\": \"*\",
                \"phpunit/phpunit\": \"^8.0\"
            },
            \"suggest\": {
                \"ext-uopz\": \"*\"
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
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                }
            ],
            \"description\": \"Snapshotting of global state\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/global-state\",
            \"keywords\": [
                \"global state\"
            ],
            \"time\": \"2019-02-01T05:30:01+00:00\"
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
            \"name\": \"sebastian/type\",
            \"version\": \"1.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/type.git\",
                \"reference\": \"3aaaa15fa71d27650d62a948be022fe3b48541a3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/type/zipball/3aaaa15fa71d27650d62a948be022fe3b48541a3\",
                \"reference\": \"3aaaa15fa71d27650d62a948be022fe3b48541a3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^8.2\"
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
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Collection of value objects that represent the types of the PHP type system\",
            \"homepage\": \"https://github.com/sebastianbergmann/type\",
            \"time\": \"2019-07-02T08:10:15+00:00\"
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
            \"name\": \"seld/jsonlint\",
            \"version\": \"1.7.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Seldaek/jsonlint.git\",
                \"reference\": \"d15f59a67ff805a44c50ea0516d2341740f81a38\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Seldaek/jsonlint/zipball/d15f59a67ff805a44c50ea0516d2341740f81a38\",
                \"reference\": \"d15f59a67ff805a44c50ea0516d2341740f81a38\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || ^6.0\"
            },
            \"bin\": [
                \"bin/jsonlint\"
            ],
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Seld\\\\JsonLint\\\\\": \"src/Seld/JsonLint/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                }
            ],
            \"description\": \"JSON Linter\",
            \"keywords\": [
                \"json\",
                \"linter\",
                \"parser\",
                \"validator\"
            ],
            \"time\": \"2018-01-24T12:46:19+00:00\"
        },
        {
            \"name\": \"seld/phar-utils\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/Seldaek/phar-utils.git\",
                \"reference\": \"7009b5139491975ef6486545a39f3e6dad5ac30a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/Seldaek/phar-utils/zipball/7009b5139491975ef6486545a39f3e6dad5ac30a\",
                \"reference\": \"7009b5139491975ef6486545a39f3e6dad5ac30a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Seld\\\\PharUtils\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\"
                }
            ],
            \"description\": \"PHAR file format utilities, for when PHP phars you up\",
            \"keywords\": [
                \"phra\"
            ],
            \"time\": \"2015-10-13T18:44:15+00:00\"
        },
        {
            \"name\": \"slevomat/coding-standard\",
            \"version\": \"5.0.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/slevomat/coding-standard.git\",
                \"reference\": \"287ac3347c47918c0bf5e10335e36197ea10894c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/slevomat/coding-standard/zipball/287ac3347c47918c0bf5e10335e36197ea10894c\",
                \"reference\": \"287ac3347c47918c0bf5e10335e36197ea10894c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1\",
                \"phpstan/phpdoc-parser\": \"^0.3.1\",
                \"squizlabs/php_codesniffer\": \"^3.4.1\"
            },
            \"require-dev\": {
                \"jakub-onderka/php-parallel-lint\": \"1.0.0\",
                \"phing/phing\": \"2.16.1\",
                \"phpstan/phpstan\": \"0.11.4\",
                \"phpstan/phpstan-phpunit\": \"0.11\",
                \"phpstan/phpstan-strict-rules\": \"0.11\",
                \"phpunit/phpunit\": \"8.0.5\"
            },
            \"type\": \"phpcodesniffer-standard\",
            \"autoload\": {
                \"psr-4\": {
                    \"SlevomatCodingStandard\\\\\": \"SlevomatCodingStandard\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Slevomat Coding Standard for PHP_CodeSniffer complements Consistence Coding Standard by providing sniffs with additional checks.\",
            \"time\": \"2019-03-22T19:10:53+00:00\"
        },
        {
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"3.4.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\",
                \"reference\": \"b8a7362af1cc1aadb5bd36c3defc4dda2cf5f0a8\",
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
            \"homepage\": \"https://github.com/squizlabs/PHP_CodeSniffer\",
            \"keywords\": [
                \"phpcs\",
                \"standards\"
            ],
            \"time\": \"2019-04-10T23:49:02+00:00\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"b592b26a24265a35172d8a2094d8b10f22b7cc39\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/b592b26a24265a35172d8a2094d8b10f22b7cc39\",
                \"reference\": \"b592b26a24265a35172d8a2094d8b10f22b7cc39\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/polyfill-php73\": \"^1.8\",
                \"symfony/service-contracts\": \"^1.1\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/event-dispatcher\": \"<4.3\",
                \"symfony/process\": \"<3.3\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.4|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"^4.3\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.4|~4.0\",
                \"symfony/var-dumper\": \"^4.3\"
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
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-06-13T11:03:18+00:00\"
        },
        {
            \"name\": \"symfony/filesystem\",
            \"version\": \"v4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"b9896d034463ad6fd2bf17e2bf9418caecd6313d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/b9896d034463ad6fd2bf17e2bf9418caecd6313d\",
                \"reference\": \"b9896d034463ad6fd2bf17e2bf9418caecd6313d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
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
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-06-23T08:51:25+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"33c21f7d5d3dc8a140c282854a7e13aeb5d0f91a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/33c21f7d5d3dc8a140c282854a7e13aeb5d0f91a\",
                \"reference\": \"33c21f7d5d3dc8a140c282854a7e13aeb5d0f91a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
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
            \"time\": \"2019-06-13T11:03:18+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.11.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"82ebae02209c21113908c229e9883c419720738a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/82ebae02209c21113908c229e9883c419720738a\",
                \"reference\": \"82ebae02209c21113908c229e9883c419720738a\",
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
                    \"dev-master\": \"1.11-dev\"
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
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                },
                {
                    \"name\": \"Gert de Pagter\",
                    \"email\": \"BackEndTea@gmail.com\"
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
            \"time\": \"2019-02-06T07:57:58+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.11.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"fe5e94c604826c35a32fa832f35bd036b6799609\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/fe5e94c604826c35a32fa832f35bd036b6799609\",
                \"reference\": \"fe5e94c604826c35a32fa832f35bd036b6799609\",
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
                    \"dev-master\": \"1.11-dev\"
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
            \"time\": \"2019-02-06T07:57:58+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php73\",
            \"version\": \"v1.11.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php73.git\",
                \"reference\": \"d1fb4abcc0c47be136208ad9d68bf59f1ee17abd\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php73/zipball/d1fb4abcc0c47be136208ad9d68bf59f1ee17abd\",
                \"reference\": \"d1fb4abcc0c47be136208ad9d68bf59f1ee17abd\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.11-dev\"
                }
            },
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
            ],
            \"time\": \"2019-02-06T07:57:58+00:00\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"856d35814cf287480465bb7a6c413bb7f5f5e69c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/856d35814cf287480465bb7a6c413bb7f5f5e69c\",
                \"reference\": \"856d35814cf287480465bb7a6c413bb7f5f5e69c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Process\\\\\": \"\"
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
            \"description\": \"Symfony Process Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-05-30T16:10:05+00:00\"
        },
        {
            \"name\": \"symfony/service-contracts\",
            \"version\": \"v1.1.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/service-contracts.git\",
                \"reference\": \"f391a00de78ec7ec8cf5cdcdae59ec7b883edb8d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/service-contracts/zipball/f391a00de78ec7ec8cf5cdcdae59ec7b883edb8d\",
                \"reference\": \"f391a00de78ec7ec8cf5cdcdae59ec7b883edb8d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"psr/container\": \"^1.0\"
            },
            \"suggest\": {
                \"symfony/service-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
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
            ],
            \"time\": \"2019-06-13T11:15:36+00:00\"
        },
        {
            \"name\": \"symfony/yaml\",
            \"version\": \"v4.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/yaml.git\",
                \"reference\": \"c60ecf5ba842324433b46f58dc7afc4487dbab99\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/yaml/zipball/c60ecf5ba842324433b46f58dc7afc4487dbab99\",
                \"reference\": \"c60ecf5ba842324433b46f58dc7afc4487dbab99\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1.3\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"conflict\": {
                \"symfony/console\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/console\": \"~3.4|~4.0\"
            },
            \"suggest\": {
                \"symfony/console\": \"For validating YAML files using the lint command\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.3-dev\"
                }
            },
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
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2019-04-06T14:04:46+00:00\"
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
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"A small library for converting tokenized PHP source code into XML and potentially other formats\",
            \"time\": \"2019-06-13T22:48:21+00:00\"
        },
        {
            \"name\": \"vimeo/psalm\",
            \"version\": \"3.4.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/vimeo/psalm.git\",
                \"reference\": \"aa0efcf026e353ce2a4b66c4d3d81caebbf0966a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/vimeo/psalm/zipball/aa0efcf026e353ce2a4b66c4d3d81caebbf0966a\",
                \"reference\": \"aa0efcf026e353ce2a4b66c4d3d81caebbf0966a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"amphp/amp\": \"^2.1\",
                \"amphp/byte-stream\": \"^1.5\",
                \"composer/xdebug-handler\": \"^1.1\",
                \"felixfbecker/advanced-json-rpc\": \"^3.0.3\",
                \"felixfbecker/language-server-protocol\": \"^1.4\",
                \"netresearch/jsonmapper\": \"^1.0\",
                \"nikic/php-parser\": \"^4.2\",
                \"ocramius/package-versions\": \"^1.2\",
                \"openlss/lib-array2xml\": \"^1.0\",
                \"php\": \"^7.1\",
                \"sebastian/diff\": \"^3.0\",
                \"symfony/console\": \"^3.3||^4.0\",
                \"webmozart/glob\": \"^4.1\",
                \"webmozart/path-util\": \"^2.3\"
            },
            \"provide\": {
                \"psalm/psalm\": \"self.version\"
            },
            \"require-dev\": {
                \"bamarni/composer-bin-plugin\": \"^1.2\",
                \"friendsofphp/php-cs-fixer\": \"^2.15\",
                \"phpmyadmin/sql-parser\": \"^5.0\",
                \"phpunit/phpunit\": \"^7.5 || ^8.0\",
                \"psalm/plugin-phpunit\": \"^0.6\",
                \"slevomat/coding-standard\": \"^5.0\",
                \"squizlabs/php_codesniffer\": \"3.4.0\",
                \"symfony/process\": \"^4.3\"
            },
            \"suggest\": {
                \"ext-igbinary\": \"^2.0.5\"
            },
            \"bin\": [
                \"psalm\",
                \"psalter\",
                \"psalm-language-server\",
                \"psalm-plugin\",
                \"psalm-refactor\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.x-dev\",
                    \"dev-2.x\": \"2.x-dev\",
                    \"dev-1.x\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psalm\\\\Plugin\\\\\": \"src/Psalm/Plugin\",
                    \"Psalm\\\\\": \"src/Psalm\"
                },
                \"files\": [
                    \"src/functions.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Matthew Brown\"
                }
            ],
            \"description\": \"A static analysis tool for finding errors in PHP applications\",
            \"keywords\": [
                \"code\",
                \"inspection\",
                \"php\"
            ],
            \"time\": \"2019-07-09T11:39:03+00:00\"
        },
        {
            \"name\": \"webmozart/assert\",
            \"version\": \"1.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/assert.git\",
                \"reference\": \"83e253c8e0be5b0257b881e1827274667c5c17a9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/assert/zipball/83e253c8e0be5b0257b881e1827274667c5c17a9\",
                \"reference\": \"83e253c8e0be5b0257b881e1827274667c5c17a9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3 || ^7.0\",
                \"symfony/polyfill-ctype\": \"^1.8\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\",
                \"sebastian/version\": \"^1.0.1\"
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
            \"time\": \"2018-12-25T11:19:39+00:00\"
        },
        {
            \"name\": \"webmozart/glob\",
            \"version\": \"4.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/glob.git\",
                \"reference\": \"3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/glob/zipball/3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe\",
                \"reference\": \"3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.3|^7.0\",
                \"webmozart/path-util\": \"^2.2\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\",
                \"sebastian/version\": \"^1.0.1\",
                \"symfony/filesystem\": \"^2.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Webmozart\\\\Glob\\\\\": \"src/\"
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
            \"description\": \"A PHP implementation of Ant's glob.\",
            \"time\": \"2015-12-29T11:14:33+00:00\"
        },
        {
            \"name\": \"webmozart/path-util\",
            \"version\": \"2.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozart/path-util.git\",
                \"reference\": \"d939f7edc24c9a1bb9c0dee5cb05d8e859490725\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozart/path-util/zipball/d939f7edc24c9a1bb9c0dee5cb05d8e859490725\",
                \"reference\": \"d939f7edc24c9a1bb9c0dee5cb05d8e859490725\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\",
                \"webmozart/assert\": \"~1.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.6\",
                \"sebastian/version\": \"^1.0.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Webmozart\\\\PathUtil\\\\\": \"src/\"
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
            \"description\": \"A robust cross-platform utility for normalizing, comparing and modifying file paths.\",
            \"time\": \"2015-12-17T08:42:14+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.3.0\",
        \"composer-plugin-api\": \"^1.0.0\"
    },
    \"platform-dev\": {
        \"ext-zip\": \"*\"
    }
}
", "@app/vendor/ocramius/package-versions/composer.lock", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\package-versions\\composer.lock");
    }
}
