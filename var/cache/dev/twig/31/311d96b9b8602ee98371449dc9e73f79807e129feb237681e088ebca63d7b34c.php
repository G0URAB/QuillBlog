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

/* @app/public/index.php */
class __TwigTemplate_448b7c0eac7c7f9ef71bcf2bb99e98d2d84680e92e735e7136222c1fd1f828c4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/public/index.php"));

        // line 1
        echo "<?php

use App\\Kernel;
use Symfony\\Component\\ErrorHandler\\Debug;
use Symfony\\Component\\HttpFoundation\\Request;

require dirname(__DIR__).'/config/bootstrap.php';

if (\$_SERVER['APP_DEBUG']) {
    umask(0000);

    Debug::enable();
}

if (\$trustedProxies = \$_SERVER['TRUSTED_PROXIES'] ?? \$_ENV['TRUSTED_PROXIES'] ?? false) {
    Request::setTrustedProxies(explode(',', \$trustedProxies), Request::HEADER_X_FORWARDED_ALL ^ Request::HEADER_X_FORWARDED_HOST);
}

if (\$trustedHosts = \$_SERVER['TRUSTED_HOSTS'] ?? \$_ENV['TRUSTED_HOSTS'] ?? false) {
    Request::setTrustedHosts([\$trustedHosts]);
}

\$kernel = new Kernel(\$_SERVER['APP_ENV'], (bool) \$_SERVER['APP_DEBUG']);
\$request = Request::createFromGlobals();
\$response = \$kernel->handle(\$request);
\$response->send();
\$kernel->terminate(\$request, \$response);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/public/index.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use App\\Kernel;
use Symfony\\Component\\ErrorHandler\\Debug;
use Symfony\\Component\\HttpFoundation\\Request;

require dirname(__DIR__).'/config/bootstrap.php';

if (\$_SERVER['APP_DEBUG']) {
    umask(0000);

    Debug::enable();
}

if (\$trustedProxies = \$_SERVER['TRUSTED_PROXIES'] ?? \$_ENV['TRUSTED_PROXIES'] ?? false) {
    Request::setTrustedProxies(explode(',', \$trustedProxies), Request::HEADER_X_FORWARDED_ALL ^ Request::HEADER_X_FORWARDED_HOST);
}

if (\$trustedHosts = \$_SERVER['TRUSTED_HOSTS'] ?? \$_ENV['TRUSTED_HOSTS'] ?? false) {
    Request::setTrustedHosts([\$trustedHosts]);
}

\$kernel = new Kernel(\$_SERVER['APP_ENV'], (bool) \$_SERVER['APP_DEBUG']);
\$request = Request::createFromGlobals();
\$response = \$kernel->handle(\$request);
\$response->send();
\$kernel->terminate(\$request, \$response);
", "@app/public/index.php", "C:\\wamp64\\www\\QuillBlog\\public\\index.php");
    }
}
