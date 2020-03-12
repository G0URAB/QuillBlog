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

/* @app/config/bootstrap.php */
class __TwigTemplate_d738fdfb7f18d8aa81ad8664a3ef66da594d205c5722b9556cd9f08153c73fba extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/config/bootstrap.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Dotenv\\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

// Load cached env vars if the .env.local.php file exists
// Run \"composer dump-env prod\" to create it (requires symfony/flex >=1.2)
if (is_array(\$env = @include dirname(__DIR__).'/.env.local.php') && (!isset(\$env['APP_ENV']) || (\$_SERVER['APP_ENV'] ?? \$_ENV['APP_ENV'] ?? \$env['APP_ENV']) === \$env['APP_ENV'])) {
    foreach (\$env as \$k => \$v) {
        \$_ENV[\$k] = \$_ENV[\$k] ?? (isset(\$_SERVER[\$k]) && 0 !== strpos(\$k, 'HTTP_') ? \$_SERVER[\$k] : \$v);
    }
} elseif (!class_exists(Dotenv::class)) {
    throw new RuntimeException('Please run \"composer require symfony/dotenv\" to load the \".env\" files configuring the application.');
} else {
    // load all the .env files
    (new Dotenv(false))->loadEnv(dirname(__DIR__).'/.env');
}

\$_SERVER += \$_ENV;
\$_SERVER['APP_ENV'] = \$_ENV['APP_ENV'] = (\$_SERVER['APP_ENV'] ?? \$_ENV['APP_ENV'] ?? null) ?: 'dev';
\$_SERVER['APP_DEBUG'] = \$_SERVER['APP_DEBUG'] ?? \$_ENV['APP_DEBUG'] ?? 'prod' !== \$_SERVER['APP_ENV'];
\$_SERVER['APP_DEBUG'] = \$_ENV['APP_DEBUG'] = (int) \$_SERVER['APP_DEBUG'] || filter_var(\$_SERVER['APP_DEBUG'], FILTER_VALIDATE_BOOLEAN) ? '1' : '0';
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/config/bootstrap.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\Dotenv\\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

// Load cached env vars if the .env.local.php file exists
// Run \"composer dump-env prod\" to create it (requires symfony/flex >=1.2)
if (is_array(\$env = @include dirname(__DIR__).'/.env.local.php') && (!isset(\$env['APP_ENV']) || (\$_SERVER['APP_ENV'] ?? \$_ENV['APP_ENV'] ?? \$env['APP_ENV']) === \$env['APP_ENV'])) {
    foreach (\$env as \$k => \$v) {
        \$_ENV[\$k] = \$_ENV[\$k] ?? (isset(\$_SERVER[\$k]) && 0 !== strpos(\$k, 'HTTP_') ? \$_SERVER[\$k] : \$v);
    }
} elseif (!class_exists(Dotenv::class)) {
    throw new RuntimeException('Please run \"composer require symfony/dotenv\" to load the \".env\" files configuring the application.');
} else {
    // load all the .env files
    (new Dotenv(false))->loadEnv(dirname(__DIR__).'/.env');
}

\$_SERVER += \$_ENV;
\$_SERVER['APP_ENV'] = \$_ENV['APP_ENV'] = (\$_SERVER['APP_ENV'] ?? \$_ENV['APP_ENV'] ?? null) ?: 'dev';
\$_SERVER['APP_DEBUG'] = \$_SERVER['APP_DEBUG'] ?? \$_ENV['APP_DEBUG'] ?? 'prod' !== \$_SERVER['APP_ENV'];
\$_SERVER['APP_DEBUG'] = \$_ENV['APP_DEBUG'] = (int) \$_SERVER['APP_DEBUG'] || filter_var(\$_SERVER['APP_DEBUG'], FILTER_VALIDATE_BOOLEAN) ? '1' : '0';
", "@app/config/bootstrap.php", "C:\\wamp64\\www\\QuillBlog\\config\\bootstrap.php");
    }
}
