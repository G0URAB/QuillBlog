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

/* @app/symfony.lock */
class __TwigTemplate_1fa9b7b80a295c6e83f9a768bbbfd37b8da5d9116b6f54b47de23c9fb5a371de extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/symfony.lock"));

        // line 1
        echo "{
    \"doctrine/annotations\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"a2759dd6123694c8d901d0ec80006e044c2e6457\"
        },
        \"files\": [
            \"./config/routes/annotations.yaml\"
        ]
    },
    \"doctrine/cache\": {
        \"version\": \"1.10.0\"
    },
    \"doctrine/collections\": {
        \"version\": \"1.6.4\"
    },
    \"doctrine/common\": {
        \"version\": \"2.12.0\"
    },
    \"doctrine/dbal\": {
        \"version\": \"v2.10.1\"
    },
    \"doctrine/doctrine-bundle\": {
        \"version\": \"2.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"2.0\",
            \"ref\": \"a9f2463b9f73efe74482f831f03a204a41328555\"
        },
        \"files\": [
            \"./config/packages/doctrine.yaml\",
            \"./config/packages/prod/doctrine.yaml\",
            \"./src/Entity/.gitignore\",
            \"./src/Repository/.gitignore\"
        ]
    },
    \"doctrine/doctrine-migrations-bundle\": {
        \"version\": \"1.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.2\",
            \"ref\": \"c1431086fec31f17fbcfe6d6d7e92059458facc1\"
        },
        \"files\": [
            \"./config/packages/doctrine_migrations.yaml\",
            \"./src/Migrations/.gitignore\"
        ]
    },
    \"doctrine/event-manager\": {
        \"version\": \"1.1.0\"
    },
    \"doctrine/inflector\": {
        \"version\": \"1.3.1\"
    },
    \"doctrine/instantiator\": {
        \"version\": \"1.3.0\"
    },
    \"doctrine/lexer\": {
        \"version\": \"1.2.0\"
    },
    \"doctrine/migrations\": {
        \"version\": \"2.2.1\"
    },
    \"doctrine/orm\": {
        \"version\": \"v2.7.1\"
    },
    \"doctrine/persistence\": {
        \"version\": \"1.3.6\"
    },
    \"doctrine/reflection\": {
        \"version\": \"v1.1.0\"
    },
    \"jdorn/sql-formatter\": {
        \"version\": \"v1.2.17\"
    },
    \"nikic/php-parser\": {
        \"version\": \"v4.3.0\"
    },
    \"ocramius/package-versions\": {
        \"version\": \"1.5.1\"
    },
    \"ocramius/proxy-manager\": {
        \"version\": \"2.2.3\"
    },
    \"php\": {
        \"version\": \"7.3\"
    },
    \"psr/cache\": {
        \"version\": \"1.0.1\"
    },
    \"psr/container\": {
        \"version\": \"1.0.0\"
    },
    \"psr/event-dispatcher\": {
        \"version\": \"1.0.0\"
    },
    \"psr/log\": {
        \"version\": \"1.1.2\"
    },
    \"symfony/asset\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/cache\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/cache-contracts\": {
        \"version\": \"v2.0.1\"
    },
    \"symfony/config\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/console\": {
        \"version\": \"4.4\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.4\",
            \"ref\": \"ea8c0eda34fda57e7d5cd8cbd889e2a387e3472c\"
        },
        \"files\": [
            \"./bin/console\",
            \"./config/bootstrap.php\"
        ]
    },
    \"symfony/dependency-injection\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/doctrine-bridge\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/dotenv\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/error-handler\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/event-dispatcher\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/event-dispatcher-contracts\": {
        \"version\": \"v2.0.1\"
    },
    \"symfony/filesystem\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/finder\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/flex\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"c0eeb50665f0f77226616b6038a9b06c03752d8e\"
        },
        \"files\": [
            \"./.env\"
        ]
    },
    \"symfony/framework-bundle\": {
        \"version\": \"4.4\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.4\",
            \"ref\": \"23ecaccc551fe2f74baf613811ae529eb07762fa\"
        },
        \"files\": [
            \"./config/bootstrap.php\",
            \"./config/packages/cache.yaml\",
            \"./config/packages/framework.yaml\",
            \"./config/packages/test/framework.yaml\",
            \"./config/routes/dev/framework.yaml\",
            \"./config/services.yaml\",
            \"./public/index.php\",
            \"./src/Controller/.gitignore\",
            \"./src/Kernel.php\"
        ]
    },
    \"symfony/http-foundation\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/http-kernel\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/maker-bundle\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"fadbfe33303a76e25cb63401050439aa9b1a9c7f\"
        }
    },
    \"symfony/mime\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/orm-pack\": {
        \"version\": \"v1.0.8\"
    },
    \"symfony/polyfill-intl-idn\": {
        \"version\": \"v1.14.0\"
    },
    \"symfony/polyfill-mbstring\": {
        \"version\": \"v1.14.0\"
    },
    \"symfony/polyfill-php73\": {
        \"version\": \"v1.14.0\"
    },
    \"symfony/routing\": {
        \"version\": \"4.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.2\",
            \"ref\": \"683dcb08707ba8d41b7e34adb0344bfd68d248a7\"
        },
        \"files\": [
            \"./config/packages/prod/routing.yaml\",
            \"./config/packages/routing.yaml\",
            \"./config/routes.yaml\"
        ]
    },
    \"symfony/service-contracts\": {
        \"version\": \"v2.0.1\"
    },
    \"symfony/stopwatch\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/translation-contracts\": {
        \"version\": \"v2.0.1\"
    },
    \"symfony/twig-bridge\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/twig-bundle\": {
        \"version\": \"5.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"5.0\",
            \"ref\": \"fab9149bbaa4d5eca054ed93f9e1b66cc500895d\"
        },
        \"files\": [
            \"./config/packages/test/twig.yaml\",
            \"./config/packages/twig.yaml\",
            \"./templates/base.html.twig\"
        ]
    },
    \"symfony/twig-pack\": {
        \"version\": \"v1.0.0\"
    },
    \"symfony/var-dumper\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/var-exporter\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/yaml\": {
        \"version\": \"v5.0.5\"
    },
    \"twig/extra-bundle\": {
        \"version\": \"v3.0.3\"
    },
    \"twig/twig\": {
        \"version\": \"v3.0.3\"
    },
    \"zendframework/zend-code\": {
        \"version\": \"3.4.1\"
    },
    \"zendframework/zend-eventmanager\": {
        \"version\": \"3.2.1\"
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/symfony.lock";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"doctrine/annotations\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"a2759dd6123694c8d901d0ec80006e044c2e6457\"
        },
        \"files\": [
            \"./config/routes/annotations.yaml\"
        ]
    },
    \"doctrine/cache\": {
        \"version\": \"1.10.0\"
    },
    \"doctrine/collections\": {
        \"version\": \"1.6.4\"
    },
    \"doctrine/common\": {
        \"version\": \"2.12.0\"
    },
    \"doctrine/dbal\": {
        \"version\": \"v2.10.1\"
    },
    \"doctrine/doctrine-bundle\": {
        \"version\": \"2.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"2.0\",
            \"ref\": \"a9f2463b9f73efe74482f831f03a204a41328555\"
        },
        \"files\": [
            \"./config/packages/doctrine.yaml\",
            \"./config/packages/prod/doctrine.yaml\",
            \"./src/Entity/.gitignore\",
            \"./src/Repository/.gitignore\"
        ]
    },
    \"doctrine/doctrine-migrations-bundle\": {
        \"version\": \"1.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.2\",
            \"ref\": \"c1431086fec31f17fbcfe6d6d7e92059458facc1\"
        },
        \"files\": [
            \"./config/packages/doctrine_migrations.yaml\",
            \"./src/Migrations/.gitignore\"
        ]
    },
    \"doctrine/event-manager\": {
        \"version\": \"1.1.0\"
    },
    \"doctrine/inflector\": {
        \"version\": \"1.3.1\"
    },
    \"doctrine/instantiator\": {
        \"version\": \"1.3.0\"
    },
    \"doctrine/lexer\": {
        \"version\": \"1.2.0\"
    },
    \"doctrine/migrations\": {
        \"version\": \"2.2.1\"
    },
    \"doctrine/orm\": {
        \"version\": \"v2.7.1\"
    },
    \"doctrine/persistence\": {
        \"version\": \"1.3.6\"
    },
    \"doctrine/reflection\": {
        \"version\": \"v1.1.0\"
    },
    \"jdorn/sql-formatter\": {
        \"version\": \"v1.2.17\"
    },
    \"nikic/php-parser\": {
        \"version\": \"v4.3.0\"
    },
    \"ocramius/package-versions\": {
        \"version\": \"1.5.1\"
    },
    \"ocramius/proxy-manager\": {
        \"version\": \"2.2.3\"
    },
    \"php\": {
        \"version\": \"7.3\"
    },
    \"psr/cache\": {
        \"version\": \"1.0.1\"
    },
    \"psr/container\": {
        \"version\": \"1.0.0\"
    },
    \"psr/event-dispatcher\": {
        \"version\": \"1.0.0\"
    },
    \"psr/log\": {
        \"version\": \"1.1.2\"
    },
    \"symfony/asset\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/cache\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/cache-contracts\": {
        \"version\": \"v2.0.1\"
    },
    \"symfony/config\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/console\": {
        \"version\": \"4.4\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.4\",
            \"ref\": \"ea8c0eda34fda57e7d5cd8cbd889e2a387e3472c\"
        },
        \"files\": [
            \"./bin/console\",
            \"./config/bootstrap.php\"
        ]
    },
    \"symfony/dependency-injection\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/doctrine-bridge\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/dotenv\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/error-handler\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/event-dispatcher\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/event-dispatcher-contracts\": {
        \"version\": \"v2.0.1\"
    },
    \"symfony/filesystem\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/finder\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/flex\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"c0eeb50665f0f77226616b6038a9b06c03752d8e\"
        },
        \"files\": [
            \"./.env\"
        ]
    },
    \"symfony/framework-bundle\": {
        \"version\": \"4.4\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.4\",
            \"ref\": \"23ecaccc551fe2f74baf613811ae529eb07762fa\"
        },
        \"files\": [
            \"./config/bootstrap.php\",
            \"./config/packages/cache.yaml\",
            \"./config/packages/framework.yaml\",
            \"./config/packages/test/framework.yaml\",
            \"./config/routes/dev/framework.yaml\",
            \"./config/services.yaml\",
            \"./public/index.php\",
            \"./src/Controller/.gitignore\",
            \"./src/Kernel.php\"
        ]
    },
    \"symfony/http-foundation\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/http-kernel\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/maker-bundle\": {
        \"version\": \"1.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"1.0\",
            \"ref\": \"fadbfe33303a76e25cb63401050439aa9b1a9c7f\"
        }
    },
    \"symfony/mime\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/orm-pack\": {
        \"version\": \"v1.0.8\"
    },
    \"symfony/polyfill-intl-idn\": {
        \"version\": \"v1.14.0\"
    },
    \"symfony/polyfill-mbstring\": {
        \"version\": \"v1.14.0\"
    },
    \"symfony/polyfill-php73\": {
        \"version\": \"v1.14.0\"
    },
    \"symfony/routing\": {
        \"version\": \"4.2\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"4.2\",
            \"ref\": \"683dcb08707ba8d41b7e34adb0344bfd68d248a7\"
        },
        \"files\": [
            \"./config/packages/prod/routing.yaml\",
            \"./config/packages/routing.yaml\",
            \"./config/routes.yaml\"
        ]
    },
    \"symfony/service-contracts\": {
        \"version\": \"v2.0.1\"
    },
    \"symfony/stopwatch\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/translation-contracts\": {
        \"version\": \"v2.0.1\"
    },
    \"symfony/twig-bridge\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/twig-bundle\": {
        \"version\": \"5.0\",
        \"recipe\": {
            \"repo\": \"github.com/symfony/recipes\",
            \"branch\": \"master\",
            \"version\": \"5.0\",
            \"ref\": \"fab9149bbaa4d5eca054ed93f9e1b66cc500895d\"
        },
        \"files\": [
            \"./config/packages/test/twig.yaml\",
            \"./config/packages/twig.yaml\",
            \"./templates/base.html.twig\"
        ]
    },
    \"symfony/twig-pack\": {
        \"version\": \"v1.0.0\"
    },
    \"symfony/var-dumper\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/var-exporter\": {
        \"version\": \"v5.0.5\"
    },
    \"symfony/yaml\": {
        \"version\": \"v5.0.5\"
    },
    \"twig/extra-bundle\": {
        \"version\": \"v3.0.3\"
    },
    \"twig/twig\": {
        \"version\": \"v3.0.3\"
    },
    \"zendframework/zend-code\": {
        \"version\": \"3.4.1\"
    },
    \"zendframework/zend-eventmanager\": {
        \"version\": \"3.2.1\"
    }
}
", "@app/symfony.lock", "C:\\wamp64\\www\\QuillBlog\\symfony.lock");
    }
}
