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

/* @app/vendor/ocramius/package-versions/composer.json */
class __TwigTemplate_3dc757e9750d77c339fb07fbc5ac059f285a210b55bf683015316d5fd90393ad extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/package-versions/composer.json"));

        // line 1
        echo "{
    \"name\": \"ocramius/package-versions\",
    \"description\": \"Composer plugin that provides efficient querying for installed package versions (no runtime IO)\",
    \"type\": \"composer-plugin\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Marco Pivetta\",
            \"email\": \"ocramius@gmail.com\"
        }
    ],
    \"require\": {
        \"php\":                 \"^7.3.0\",
        \"composer-plugin-api\": \"^1.0.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\":          \"^8.2.5\",
        \"infection/infection\":      \"^0.13.4\",
        \"composer/composer\":        \"^1.8.6\",
        \"ext-zip\":                  \"*\",
        \"doctrine/coding-standard\": \"^6.0.0\",
        \"vimeo/psalm\":              \"^3.4.9\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"PackageVersions\\\\\": \"src/PackageVersions\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"PackageVersionsTest\\\\\": \"test/PackageVersionsTest\"
        }
    },
    \"extra\": {
        \"class\": \"PackageVersions\\\\Installer\",
        \"branch-alias\": {
            \"dev-master\": \"1.6.x-dev\"
        }
    },
    \"scripts\": {
        \"post-update-cmd\":  \"PackageVersions\\\\Installer::dumpVersionsClass\",
        \"post-install-cmd\": \"PackageVersions\\\\Installer::dumpVersionsClass\"
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/package-versions/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"ocramius/package-versions\",
    \"description\": \"Composer plugin that provides efficient querying for installed package versions (no runtime IO)\",
    \"type\": \"composer-plugin\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Marco Pivetta\",
            \"email\": \"ocramius@gmail.com\"
        }
    ],
    \"require\": {
        \"php\":                 \"^7.3.0\",
        \"composer-plugin-api\": \"^1.0.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\":          \"^8.2.5\",
        \"infection/infection\":      \"^0.13.4\",
        \"composer/composer\":        \"^1.8.6\",
        \"ext-zip\":                  \"*\",
        \"doctrine/coding-standard\": \"^6.0.0\",
        \"vimeo/psalm\":              \"^3.4.9\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"PackageVersions\\\\\": \"src/PackageVersions\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"PackageVersionsTest\\\\\": \"test/PackageVersionsTest\"
        }
    },
    \"extra\": {
        \"class\": \"PackageVersions\\\\Installer\",
        \"branch-alias\": {
            \"dev-master\": \"1.6.x-dev\"
        }
    },
    \"scripts\": {
        \"post-update-cmd\":  \"PackageVersions\\\\Installer::dumpVersionsClass\",
        \"post-install-cmd\": \"PackageVersions\\\\Installer::dumpVersionsClass\"
    }
}
", "@app/vendor/ocramius/package-versions/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\package-versions\\composer.json");
    }
}
