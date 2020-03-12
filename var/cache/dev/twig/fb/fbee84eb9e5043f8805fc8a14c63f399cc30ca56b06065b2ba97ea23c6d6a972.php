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

/* @app/vendor/symfony/var-dumper/Server/Connection.php */
class __TwigTemplate_af2a31cb95095438a35222719002b5234a149413b6ef4b39d928b652959c5b37 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Server/Connection.php"));

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

namespace Symfony\\Component\\VarDumper\\Server;

use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface;

/**
 * Forwards serialized Data clones to a server.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class Connection
{
    private \$host;
    private \$contextProviders;
    private \$socket;

    /**
     * @param string                     \$host             The server host
     * @param ContextProviderInterface[] \$contextProviders Context providers indexed by context name
     */
    public function __construct(string \$host, array \$contextProviders = [])
    {
        if (false === strpos(\$host, '://')) {
            \$host = 'tcp://'.\$host;
        }

        \$this->host = \$host;
        \$this->contextProviders = \$contextProviders;
    }

    public function getContextProviders(): array
    {
        return \$this->contextProviders;
    }

    public function write(Data \$data): bool
    {
        \$socketIsFresh = !\$this->socket;
        if (!\$this->socket = \$this->socket ?: \$this->createSocket()) {
            return false;
        }

        \$context = ['timestamp' => microtime(true)];
        foreach (\$this->contextProviders as \$name => \$provider) {
            \$context[\$name] = \$provider->getContext();
        }
        \$context = array_filter(\$context);
        \$encodedPayload = base64_encode(serialize([\$data, \$context])).\"\\n\";

        set_error_handler([self::class, 'nullErrorHandler']);
        try {
            if (-1 !== stream_socket_sendto(\$this->socket, \$encodedPayload)) {
                return true;
            }
            if (!\$socketIsFresh) {
                stream_socket_shutdown(\$this->socket, STREAM_SHUT_RDWR);
                fclose(\$this->socket);
                \$this->socket = \$this->createSocket();
            }
            if (-1 !== stream_socket_sendto(\$this->socket, \$encodedPayload)) {
                return true;
            }
        } finally {
            restore_error_handler();
        }

        return false;
    }

    private static function nullErrorHandler(\$t, \$m)
    {
        // no-op
    }

    private function createSocket()
    {
        set_error_handler([self::class, 'nullErrorHandler']);
        try {
            return stream_socket_client(\$this->host, \$errno, \$errstr, 3, STREAM_CLIENT_CONNECT | STREAM_CLIENT_ASYNC_CONNECT);
        } finally {
            restore_error_handler();
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Server/Connection.php";
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

namespace Symfony\\Component\\VarDumper\\Server;

use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface;

/**
 * Forwards serialized Data clones to a server.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class Connection
{
    private \$host;
    private \$contextProviders;
    private \$socket;

    /**
     * @param string                     \$host             The server host
     * @param ContextProviderInterface[] \$contextProviders Context providers indexed by context name
     */
    public function __construct(string \$host, array \$contextProviders = [])
    {
        if (false === strpos(\$host, '://')) {
            \$host = 'tcp://'.\$host;
        }

        \$this->host = \$host;
        \$this->contextProviders = \$contextProviders;
    }

    public function getContextProviders(): array
    {
        return \$this->contextProviders;
    }

    public function write(Data \$data): bool
    {
        \$socketIsFresh = !\$this->socket;
        if (!\$this->socket = \$this->socket ?: \$this->createSocket()) {
            return false;
        }

        \$context = ['timestamp' => microtime(true)];
        foreach (\$this->contextProviders as \$name => \$provider) {
            \$context[\$name] = \$provider->getContext();
        }
        \$context = array_filter(\$context);
        \$encodedPayload = base64_encode(serialize([\$data, \$context])).\"\\n\";

        set_error_handler([self::class, 'nullErrorHandler']);
        try {
            if (-1 !== stream_socket_sendto(\$this->socket, \$encodedPayload)) {
                return true;
            }
            if (!\$socketIsFresh) {
                stream_socket_shutdown(\$this->socket, STREAM_SHUT_RDWR);
                fclose(\$this->socket);
                \$this->socket = \$this->createSocket();
            }
            if (-1 !== stream_socket_sendto(\$this->socket, \$encodedPayload)) {
                return true;
            }
        } finally {
            restore_error_handler();
        }

        return false;
    }

    private static function nullErrorHandler(\$t, \$m)
    {
        // no-op
    }

    private function createSocket()
    {
        set_error_handler([self::class, 'nullErrorHandler']);
        try {
            return stream_socket_client(\$this->host, \$errno, \$errstr, 3, STREAM_CLIENT_CONNECT | STREAM_CLIENT_ASYNC_CONNECT);
        } finally {
            restore_error_handler();
        }
    }
}
", "@app/vendor/symfony/var-dumper/Server/Connection.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Server\\Connection.php");
    }
}
