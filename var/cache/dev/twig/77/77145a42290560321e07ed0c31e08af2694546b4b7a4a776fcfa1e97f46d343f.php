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

/* @app/vendor/symfony/http-kernel/Exception/ServiceUnavailableHttpException.php */
class __TwigTemplate_e0b372737d5a7247ad07bec35aeffaffc09db79cc9301408cb43f13e966c05d6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Exception/ServiceUnavailableHttpException.php"));

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

namespace Symfony\\Component\\HttpKernel\\Exception;

/**
 * @author Ben Ramsey <ben@benramsey.com>
 */
class ServiceUnavailableHttpException extends HttpException
{
    /**
     * @param int|string \$retryAfter The number of seconds or HTTP-date after which the request may be retried
     * @param string     \$message    The internal exception message
     * @param \\Throwable \$previous   The previous exception
     * @param int        \$code       The internal exception code
     */
    public function __construct(\$retryAfter = null, string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        if (\$retryAfter) {
            \$headers['Retry-After'] = \$retryAfter;
        }

        parent::__construct(503, \$message, \$previous, \$headers, \$code);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Exception/ServiceUnavailableHttpException.php";
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

namespace Symfony\\Component\\HttpKernel\\Exception;

/**
 * @author Ben Ramsey <ben@benramsey.com>
 */
class ServiceUnavailableHttpException extends HttpException
{
    /**
     * @param int|string \$retryAfter The number of seconds or HTTP-date after which the request may be retried
     * @param string     \$message    The internal exception message
     * @param \\Throwable \$previous   The previous exception
     * @param int        \$code       The internal exception code
     */
    public function __construct(\$retryAfter = null, string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        if (\$retryAfter) {
            \$headers['Retry-After'] = \$retryAfter;
        }

        parent::__construct(503, \$message, \$previous, \$headers, \$code);
    }
}
", "@app/vendor/symfony/http-kernel/Exception/ServiceUnavailableHttpException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Exception\\ServiceUnavailableHttpException.php");
    }
}
