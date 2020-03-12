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

/* @app/vendor/doctrine/common/phpstan.neon.dist */
class __TwigTemplate_44c7cd3a72f094014c73278854079f3193e05e1ccdee00923a8f914bdfdba354 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/common/phpstan.neon.dist"));

        // line 1
        echo "parameters:
    level: 3
    paths:
        - %currentWorkingDirectory%/lib
        - %currentWorkingDirectory%/tests
    autoload_directories:
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/ClassLoaderTest
    excludes_analyse:
        - %currentWorkingDirectory%/lib/vendor/doctrine-build-common
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/InvalidReturnTypeClass.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/InvalidTypeHintClass.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/SerializedClass.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/VariadicTypeHintClass.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicTypedPropertiesTest.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/LazyLoadableObjectWithTypedProperties.php
    ignoreErrors:
        - '#Access to an undefined property Doctrine\\\\Common\\\\Proxy\\\\Proxy::\\\$publicField#'
        -
            message: '#^Result of method Doctrine\\\\Tests\\\\Common\\\\Proxy\\\\LazyLoadableObjectWithVoid::(adding|incrementing)AndReturningVoid\\(\\) \\(void\\) is used\\.\$#'
            path: '%currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicVoidReturnTypeTest.php'
        -
            message: '#^Property Doctrine\\\\Tests\\\\Common\\\\Proxy\\\\ProxyLogicTest::\\\$initializerCallbackMock \\(callable&PHPUnit\\\\Framework\\\\MockObject\\\\MockObject\\) does not accept PHPUnit\\\\Framework\\\\MockObject\\\\MockObject&stdClass\\.\$#'
            path: '%currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicTest.php'
        -
            message: '#^Call to an undefined method PHPUnit\\\\Framework\\\\MockObject\\\\MockObject(&stdClass)?::(load|getName)\\(\\)\\.\$#'
            path: '%currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicTest.php'
        -
            message: '#^Access to an undefined property Doctrine\\\\Common\\\\Proxy\\\\Proxy&Doctrine\\\\Tests\\\\Common\\\\Proxy\\\\LazyLoadableObject::\\\$non_existing_property\\.\$#'
            path: '%currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicTest.php'
        -
            message: '#^Property Doctrine\\\\Tests\\\\Common\\\\Proxy\\\\ProxyLogicVoidReturnTypeTest::\\\$initializerCallbackMock \\(callable&PHPUnit\\\\Framework\\\\MockObject\\\\MockObject\\) does not accept PHPUnit\\\\Framework\\\\MockObject\\\\MockObject&stdClass\\.\$#'
            path: '%currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicVoidReturnTypeTest.php'

includes:
    - vendor/phpstan/phpstan-phpunit/extension.neon
    - vendor/phpstan/phpstan-phpunit/rules.neon
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/common/phpstan.neon.dist";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("parameters:
    level: 3
    paths:
        - %currentWorkingDirectory%/lib
        - %currentWorkingDirectory%/tests
    autoload_directories:
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/ClassLoaderTest
    excludes_analyse:
        - %currentWorkingDirectory%/lib/vendor/doctrine-build-common
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/InvalidReturnTypeClass.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/InvalidTypeHintClass.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/SerializedClass.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/VariadicTypeHintClass.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicTypedPropertiesTest.php
        - %currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/LazyLoadableObjectWithTypedProperties.php
    ignoreErrors:
        - '#Access to an undefined property Doctrine\\\\Common\\\\Proxy\\\\Proxy::\\\$publicField#'
        -
            message: '#^Result of method Doctrine\\\\Tests\\\\Common\\\\Proxy\\\\LazyLoadableObjectWithVoid::(adding|incrementing)AndReturningVoid\\(\\) \\(void\\) is used\\.\$#'
            path: '%currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicVoidReturnTypeTest.php'
        -
            message: '#^Property Doctrine\\\\Tests\\\\Common\\\\Proxy\\\\ProxyLogicTest::\\\$initializerCallbackMock \\(callable&PHPUnit\\\\Framework\\\\MockObject\\\\MockObject\\) does not accept PHPUnit\\\\Framework\\\\MockObject\\\\MockObject&stdClass\\.\$#'
            path: '%currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicTest.php'
        -
            message: '#^Call to an undefined method PHPUnit\\\\Framework\\\\MockObject\\\\MockObject(&stdClass)?::(load|getName)\\(\\)\\.\$#'
            path: '%currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicTest.php'
        -
            message: '#^Access to an undefined property Doctrine\\\\Common\\\\Proxy\\\\Proxy&Doctrine\\\\Tests\\\\Common\\\\Proxy\\\\LazyLoadableObject::\\\$non_existing_property\\.\$#'
            path: '%currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicTest.php'
        -
            message: '#^Property Doctrine\\\\Tests\\\\Common\\\\Proxy\\\\ProxyLogicVoidReturnTypeTest::\\\$initializerCallbackMock \\(callable&PHPUnit\\\\Framework\\\\MockObject\\\\MockObject\\) does not accept PHPUnit\\\\Framework\\\\MockObject\\\\MockObject&stdClass\\.\$#'
            path: '%currentWorkingDirectory%/tests/Doctrine/Tests/Common/Proxy/ProxyLogicVoidReturnTypeTest.php'

includes:
    - vendor/phpstan/phpstan-phpunit/extension.neon
    - vendor/phpstan/phpstan-phpunit/rules.neon
", "@app/vendor/doctrine/common/phpstan.neon.dist", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\common\\phpstan.neon.dist");
    }
}
