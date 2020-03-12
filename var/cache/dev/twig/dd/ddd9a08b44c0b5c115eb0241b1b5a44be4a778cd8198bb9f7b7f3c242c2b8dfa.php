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

/* @app/vendor/symfony/http-foundation/RequestMatcher.php */
class __TwigTemplate_9d08592b5d908d59f3bd0919c7d9d8edd6a4771349318a32fd05b56f4466adc7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/RequestMatcher.php"));

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

namespace Symfony\\Component\\HttpFoundation;

/**
 * RequestMatcher compares a pre-defined set of checks against a Request instance.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RequestMatcher implements RequestMatcherInterface
{
    /**
     * @var string|null
     */
    private \$path;

    /**
     * @var string|null
     */
    private \$host;

    /**
     * @var int|null
     */
    private \$port;

    /**
     * @var string[]
     */
    private \$methods = [];

    /**
     * @var string[]
     */
    private \$ips = [];

    /**
     * @var array
     */
    private \$attributes = [];

    /**
     * @var string[]
     */
    private \$schemes = [];

    /**
     * @param string|string[]|null \$methods
     * @param string|string[]|null \$ips
     * @param string|string[]|null \$schemes
     */
    public function __construct(string \$path = null, string \$host = null, \$methods = null, \$ips = null, array \$attributes = [], \$schemes = null, int \$port = null)
    {
        \$this->matchPath(\$path);
        \$this->matchHost(\$host);
        \$this->matchMethod(\$methods);
        \$this->matchIps(\$ips);
        \$this->matchScheme(\$schemes);
        \$this->matchPort(\$port);

        foreach (\$attributes as \$k => \$v) {
            \$this->matchAttribute(\$k, \$v);
        }
    }

    /**
     * Adds a check for the HTTP scheme.
     *
     * @param string|string[]|null \$scheme An HTTP scheme or an array of HTTP schemes
     */
    public function matchScheme(\$scheme)
    {
        \$this->schemes = null !== \$scheme ? array_map('strtolower', (array) \$scheme) : [];
    }

    /**
     * Adds a check for the URL host name.
     */
    public function matchHost(?string \$regexp)
    {
        \$this->host = \$regexp;
    }

    /**
     * Adds a check for the the URL port.
     *
     * @param int|null \$port The port number to connect to
     */
    public function matchPort(?int \$port)
    {
        \$this->port = \$port;
    }

    /**
     * Adds a check for the URL path info.
     */
    public function matchPath(?string \$regexp)
    {
        \$this->path = \$regexp;
    }

    /**
     * Adds a check for the client IP.
     *
     * @param string \$ip A specific IP address or a range specified using IP/netmask like 192.168.1.0/24
     */
    public function matchIp(string \$ip)
    {
        \$this->matchIps(\$ip);
    }

    /**
     * Adds a check for the client IP.
     *
     * @param string|string[]|null \$ips A specific IP address or a range specified using IP/netmask like 192.168.1.0/24
     */
    public function matchIps(\$ips)
    {
        \$this->ips = null !== \$ips ? (array) \$ips : [];
    }

    /**
     * Adds a check for the HTTP method.
     *
     * @param string|string[]|null \$method An HTTP method or an array of HTTP methods
     */
    public function matchMethod(\$method)
    {
        \$this->methods = null !== \$method ? array_map('strtoupper', (array) \$method) : [];
    }

    /**
     * Adds a check for request attribute.
     */
    public function matchAttribute(string \$key, string \$regexp)
    {
        \$this->attributes[\$key] = \$regexp;
    }

    /**
     * {@inheritdoc}
     */
    public function matches(Request \$request)
    {
        if (\$this->schemes && !\\in_array(\$request->getScheme(), \$this->schemes, true)) {
            return false;
        }

        if (\$this->methods && !\\in_array(\$request->getMethod(), \$this->methods, true)) {
            return false;
        }

        foreach (\$this->attributes as \$key => \$pattern) {
            if (!preg_match('{'.\$pattern.'}', \$request->attributes->get(\$key))) {
                return false;
            }
        }

        if (null !== \$this->path && !preg_match('{'.\$this->path.'}', rawurldecode(\$request->getPathInfo()))) {
            return false;
        }

        if (null !== \$this->host && !preg_match('{'.\$this->host.'}i', \$request->getHost())) {
            return false;
        }

        if (null !== \$this->port && 0 < \$this->port && \$request->getPort() !== \$this->port) {
            return false;
        }

        if (IpUtils::checkIp(\$request->getClientIp(), \$this->ips)) {
            return true;
        }

        // Note to future implementors: add additional checks above the
        // foreach above or else your check might not be run!
        return 0 === \\count(\$this->ips);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/RequestMatcher.php";
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

namespace Symfony\\Component\\HttpFoundation;

/**
 * RequestMatcher compares a pre-defined set of checks against a Request instance.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RequestMatcher implements RequestMatcherInterface
{
    /**
     * @var string|null
     */
    private \$path;

    /**
     * @var string|null
     */
    private \$host;

    /**
     * @var int|null
     */
    private \$port;

    /**
     * @var string[]
     */
    private \$methods = [];

    /**
     * @var string[]
     */
    private \$ips = [];

    /**
     * @var array
     */
    private \$attributes = [];

    /**
     * @var string[]
     */
    private \$schemes = [];

    /**
     * @param string|string[]|null \$methods
     * @param string|string[]|null \$ips
     * @param string|string[]|null \$schemes
     */
    public function __construct(string \$path = null, string \$host = null, \$methods = null, \$ips = null, array \$attributes = [], \$schemes = null, int \$port = null)
    {
        \$this->matchPath(\$path);
        \$this->matchHost(\$host);
        \$this->matchMethod(\$methods);
        \$this->matchIps(\$ips);
        \$this->matchScheme(\$schemes);
        \$this->matchPort(\$port);

        foreach (\$attributes as \$k => \$v) {
            \$this->matchAttribute(\$k, \$v);
        }
    }

    /**
     * Adds a check for the HTTP scheme.
     *
     * @param string|string[]|null \$scheme An HTTP scheme or an array of HTTP schemes
     */
    public function matchScheme(\$scheme)
    {
        \$this->schemes = null !== \$scheme ? array_map('strtolower', (array) \$scheme) : [];
    }

    /**
     * Adds a check for the URL host name.
     */
    public function matchHost(?string \$regexp)
    {
        \$this->host = \$regexp;
    }

    /**
     * Adds a check for the the URL port.
     *
     * @param int|null \$port The port number to connect to
     */
    public function matchPort(?int \$port)
    {
        \$this->port = \$port;
    }

    /**
     * Adds a check for the URL path info.
     */
    public function matchPath(?string \$regexp)
    {
        \$this->path = \$regexp;
    }

    /**
     * Adds a check for the client IP.
     *
     * @param string \$ip A specific IP address or a range specified using IP/netmask like 192.168.1.0/24
     */
    public function matchIp(string \$ip)
    {
        \$this->matchIps(\$ip);
    }

    /**
     * Adds a check for the client IP.
     *
     * @param string|string[]|null \$ips A specific IP address or a range specified using IP/netmask like 192.168.1.0/24
     */
    public function matchIps(\$ips)
    {
        \$this->ips = null !== \$ips ? (array) \$ips : [];
    }

    /**
     * Adds a check for the HTTP method.
     *
     * @param string|string[]|null \$method An HTTP method or an array of HTTP methods
     */
    public function matchMethod(\$method)
    {
        \$this->methods = null !== \$method ? array_map('strtoupper', (array) \$method) : [];
    }

    /**
     * Adds a check for request attribute.
     */
    public function matchAttribute(string \$key, string \$regexp)
    {
        \$this->attributes[\$key] = \$regexp;
    }

    /**
     * {@inheritdoc}
     */
    public function matches(Request \$request)
    {
        if (\$this->schemes && !\\in_array(\$request->getScheme(), \$this->schemes, true)) {
            return false;
        }

        if (\$this->methods && !\\in_array(\$request->getMethod(), \$this->methods, true)) {
            return false;
        }

        foreach (\$this->attributes as \$key => \$pattern) {
            if (!preg_match('{'.\$pattern.'}', \$request->attributes->get(\$key))) {
                return false;
            }
        }

        if (null !== \$this->path && !preg_match('{'.\$this->path.'}', rawurldecode(\$request->getPathInfo()))) {
            return false;
        }

        if (null !== \$this->host && !preg_match('{'.\$this->host.'}i', \$request->getHost())) {
            return false;
        }

        if (null !== \$this->port && 0 < \$this->port && \$request->getPort() !== \$this->port) {
            return false;
        }

        if (IpUtils::checkIp(\$request->getClientIp(), \$this->ips)) {
            return true;
        }

        // Note to future implementors: add additional checks above the
        // foreach above or else your check might not be run!
        return 0 === \\count(\$this->ips);
    }
}
", "@app/vendor/symfony/http-foundation/RequestMatcher.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\RequestMatcher.php");
    }
}
