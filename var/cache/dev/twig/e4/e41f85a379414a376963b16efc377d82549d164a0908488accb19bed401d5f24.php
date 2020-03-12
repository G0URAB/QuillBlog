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

/* @app/vendor/doctrine/migrations/build-phar.sh */
class __TwigTemplate_bfd25696323bf553da31744a17c9f1f7cf14a1bb32b1f7bd39ee81fec7a38a32 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/build-phar.sh"));

        // line 1
        echo "#!/usr/bin/env bash

set -euf -o pipefail

./download-box.sh

function restorePlatform {
    composer config --unset platform
    mv -f composer.lock.back composer.lock || true
}

# lock PHP to minimum allowed version
composer config platform.php 7.1.0
cp composer.lock composer.lock.back || true
composer update

php box.phar compile -vv

trap restorePlatform exit
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/build-phar.sh";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#!/usr/bin/env bash

set -euf -o pipefail

./download-box.sh

function restorePlatform {
    composer config --unset platform
    mv -f composer.lock.back composer.lock || true
}

# lock PHP to minimum allowed version
composer config platform.php 7.1.0
cp composer.lock composer.lock.back || true
composer update

php box.phar compile -vv

trap restorePlatform exit
", "@app/vendor/doctrine/migrations/build-phar.sh", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\build-phar.sh");
    }
}
