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

/* @app/vendor/symfony/framework-bundle/Test/BrowserKitAssertionsTrait.php */
class __TwigTemplate_f58c355dbc3410270f20acaa35ec3e9be36d56bc64b8a2a784fadbc975c7ec6f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Test/BrowserKitAssertionsTrait.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use PHPUnit\\Framework\\Constraint\\LogicalAnd;
use PHPUnit\\Framework\\Constraint\\LogicalNot;
use Symfony\\Component\\BrowserKit\\AbstractBrowser;
use Symfony\\Component\\BrowserKit\\Test\\Constraint as BrowserKitConstraint;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Test\\Constraint as ResponseConstraint;

/**
 * Ideas borrowed from Laravel Dusk's assertions.
 *
 * @see https://laravel.com/docs/5.7/dusk#available-assertions
 */
trait BrowserKitAssertionsTrait
{
    public static function assertResponseIsSuccessful(string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new ResponseConstraint\\ResponseIsSuccessful(), \$message);
    }

    public static function assertResponseStatusCodeSame(int \$expectedCode, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new ResponseConstraint\\ResponseStatusCodeSame(\$expectedCode), \$message);
    }

    public static function assertResponseRedirects(string \$expectedLocation = null, int \$expectedCode = null, string \$message = ''): void
    {
        \$constraint = new ResponseConstraint\\ResponseIsRedirected();
        if (\$expectedLocation) {
            \$constraint = LogicalAnd::fromConstraints(\$constraint, new ResponseConstraint\\ResponseHeaderSame('Location', \$expectedLocation));
        }
        if (\$expectedCode) {
            \$constraint = LogicalAnd::fromConstraints(\$constraint, new ResponseConstraint\\ResponseStatusCodeSame(\$expectedCode));
        }

        self::assertThat(self::getResponse(), \$constraint, \$message);
    }

    public static function assertResponseHasHeader(string \$headerName, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new ResponseConstraint\\ResponseHasHeader(\$headerName), \$message);
    }

    public static function assertResponseNotHasHeader(string \$headerName, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new LogicalNot(new ResponseConstraint\\ResponseHasHeader(\$headerName)), \$message);
    }

    public static function assertResponseHeaderSame(string \$headerName, string \$expectedValue, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new ResponseConstraint\\ResponseHeaderSame(\$headerName, \$expectedValue), \$message);
    }

    public static function assertResponseHeaderNotSame(string \$headerName, string \$expectedValue, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new LogicalNot(new ResponseConstraint\\ResponseHeaderSame(\$headerName, \$expectedValue)), \$message);
    }

    public static function assertResponseHasCookie(string \$name, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new ResponseConstraint\\ResponseHasCookie(\$name, \$path, \$domain), \$message);
    }

    public static function assertResponseNotHasCookie(string \$name, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new LogicalNot(new ResponseConstraint\\ResponseHasCookie(\$name, \$path, \$domain)), \$message);
    }

    public static function assertResponseCookieValueSame(string \$name, string \$expectedValue, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), LogicalAnd::fromConstraints(
            new ResponseConstraint\\ResponseHasCookie(\$name, \$path, \$domain),
            new ResponseConstraint\\ResponseCookieValueSame(\$name, \$expectedValue, \$path, \$domain)
        ), \$message);
    }

    public static function assertBrowserHasCookie(string \$name, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getClient(), new BrowserKitConstraint\\BrowserHasCookie(\$name, \$path, \$domain), \$message);
    }

    public static function assertBrowserNotHasCookie(string \$name, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getClient(), new LogicalNot(new BrowserKitConstraint\\BrowserHasCookie(\$name, \$path, \$domain)), \$message);
    }

    public static function assertBrowserCookieValueSame(string \$name, string \$expectedValue, bool \$raw = false, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getClient(), LogicalAnd::fromConstraints(
            new BrowserKitConstraint\\BrowserHasCookie(\$name, \$path, \$domain),
            new BrowserKitConstraint\\BrowserCookieValueSame(\$name, \$expectedValue, \$raw, \$path, \$domain)
        ), \$message);
    }

    public static function assertRequestAttributeValueSame(string \$name, string \$expectedValue, string \$message = ''): void
    {
        self::assertThat(self::getRequest(), new ResponseConstraint\\RequestAttributeValueSame(\$name, \$expectedValue), \$message);
    }

    public static function assertRouteSame(\$expectedRoute, array \$parameters = [], string \$message = ''): void
    {
        \$constraint = new ResponseConstraint\\RequestAttributeValueSame('_route', \$expectedRoute);
        \$constraints = [];
        foreach (\$parameters as \$key => \$value) {
            \$constraints[] = new ResponseConstraint\\RequestAttributeValueSame(\$key, \$value);
        }
        if (\$constraints) {
            \$constraint = LogicalAnd::fromConstraints(\$constraint, ...\$constraints);
        }

        self::assertThat(self::getRequest(), \$constraint, \$message);
    }

    private static function getClient(AbstractBrowser \$newClient = null): ?AbstractBrowser
    {
        static \$client;

        if (0 < \\func_num_args()) {
            return \$client = \$newClient;
        }

        if (!\$client instanceof AbstractBrowser) {
            static::fail(sprintf('A client must be set to make assertions on it. Did you forget to call \"%s::createClient()\"?', __CLASS__));
        }

        return \$client;
    }

    private static function getResponse(): Response
    {
        if (!\$response = self::getClient()->getResponse()) {
            static::fail('A client must have an HTTP Response to make assertions. Did you forget to make an HTTP request?');
        }

        return \$response;
    }

    private static function getRequest(): Request
    {
        if (!\$request = self::getClient()->getRequest()) {
            static::fail('A client must have an HTTP Request to make assertions. Did you forget to make an HTTP request?');
        }

        return \$request;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Test/BrowserKitAssertionsTrait.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use PHPUnit\\Framework\\Constraint\\LogicalAnd;
use PHPUnit\\Framework\\Constraint\\LogicalNot;
use Symfony\\Component\\BrowserKit\\AbstractBrowser;
use Symfony\\Component\\BrowserKit\\Test\\Constraint as BrowserKitConstraint;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Test\\Constraint as ResponseConstraint;

/**
 * Ideas borrowed from Laravel Dusk's assertions.
 *
 * @see https://laravel.com/docs/5.7/dusk#available-assertions
 */
trait BrowserKitAssertionsTrait
{
    public static function assertResponseIsSuccessful(string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new ResponseConstraint\\ResponseIsSuccessful(), \$message);
    }

    public static function assertResponseStatusCodeSame(int \$expectedCode, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new ResponseConstraint\\ResponseStatusCodeSame(\$expectedCode), \$message);
    }

    public static function assertResponseRedirects(string \$expectedLocation = null, int \$expectedCode = null, string \$message = ''): void
    {
        \$constraint = new ResponseConstraint\\ResponseIsRedirected();
        if (\$expectedLocation) {
            \$constraint = LogicalAnd::fromConstraints(\$constraint, new ResponseConstraint\\ResponseHeaderSame('Location', \$expectedLocation));
        }
        if (\$expectedCode) {
            \$constraint = LogicalAnd::fromConstraints(\$constraint, new ResponseConstraint\\ResponseStatusCodeSame(\$expectedCode));
        }

        self::assertThat(self::getResponse(), \$constraint, \$message);
    }

    public static function assertResponseHasHeader(string \$headerName, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new ResponseConstraint\\ResponseHasHeader(\$headerName), \$message);
    }

    public static function assertResponseNotHasHeader(string \$headerName, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new LogicalNot(new ResponseConstraint\\ResponseHasHeader(\$headerName)), \$message);
    }

    public static function assertResponseHeaderSame(string \$headerName, string \$expectedValue, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new ResponseConstraint\\ResponseHeaderSame(\$headerName, \$expectedValue), \$message);
    }

    public static function assertResponseHeaderNotSame(string \$headerName, string \$expectedValue, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new LogicalNot(new ResponseConstraint\\ResponseHeaderSame(\$headerName, \$expectedValue)), \$message);
    }

    public static function assertResponseHasCookie(string \$name, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new ResponseConstraint\\ResponseHasCookie(\$name, \$path, \$domain), \$message);
    }

    public static function assertResponseNotHasCookie(string \$name, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), new LogicalNot(new ResponseConstraint\\ResponseHasCookie(\$name, \$path, \$domain)), \$message);
    }

    public static function assertResponseCookieValueSame(string \$name, string \$expectedValue, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getResponse(), LogicalAnd::fromConstraints(
            new ResponseConstraint\\ResponseHasCookie(\$name, \$path, \$domain),
            new ResponseConstraint\\ResponseCookieValueSame(\$name, \$expectedValue, \$path, \$domain)
        ), \$message);
    }

    public static function assertBrowserHasCookie(string \$name, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getClient(), new BrowserKitConstraint\\BrowserHasCookie(\$name, \$path, \$domain), \$message);
    }

    public static function assertBrowserNotHasCookie(string \$name, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getClient(), new LogicalNot(new BrowserKitConstraint\\BrowserHasCookie(\$name, \$path, \$domain)), \$message);
    }

    public static function assertBrowserCookieValueSame(string \$name, string \$expectedValue, bool \$raw = false, string \$path = '/', string \$domain = null, string \$message = ''): void
    {
        self::assertThat(self::getClient(), LogicalAnd::fromConstraints(
            new BrowserKitConstraint\\BrowserHasCookie(\$name, \$path, \$domain),
            new BrowserKitConstraint\\BrowserCookieValueSame(\$name, \$expectedValue, \$raw, \$path, \$domain)
        ), \$message);
    }

    public static function assertRequestAttributeValueSame(string \$name, string \$expectedValue, string \$message = ''): void
    {
        self::assertThat(self::getRequest(), new ResponseConstraint\\RequestAttributeValueSame(\$name, \$expectedValue), \$message);
    }

    public static function assertRouteSame(\$expectedRoute, array \$parameters = [], string \$message = ''): void
    {
        \$constraint = new ResponseConstraint\\RequestAttributeValueSame('_route', \$expectedRoute);
        \$constraints = [];
        foreach (\$parameters as \$key => \$value) {
            \$constraints[] = new ResponseConstraint\\RequestAttributeValueSame(\$key, \$value);
        }
        if (\$constraints) {
            \$constraint = LogicalAnd::fromConstraints(\$constraint, ...\$constraints);
        }

        self::assertThat(self::getRequest(), \$constraint, \$message);
    }

    private static function getClient(AbstractBrowser \$newClient = null): ?AbstractBrowser
    {
        static \$client;

        if (0 < \\func_num_args()) {
            return \$client = \$newClient;
        }

        if (!\$client instanceof AbstractBrowser) {
            static::fail(sprintf('A client must be set to make assertions on it. Did you forget to call \"%s::createClient()\"?', __CLASS__));
        }

        return \$client;
    }

    private static function getResponse(): Response
    {
        if (!\$response = self::getClient()->getResponse()) {
            static::fail('A client must have an HTTP Response to make assertions. Did you forget to make an HTTP request?');
        }

        return \$response;
    }

    private static function getRequest(): Request
    {
        if (!\$request = self::getClient()->getRequest()) {
            static::fail('A client must have an HTTP Request to make assertions. Did you forget to make an HTTP request?');
        }

        return \$request;
    }
}
", "@app/vendor/symfony/framework-bundle/Test/BrowserKitAssertionsTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Test\\BrowserKitAssertionsTrait.php");
    }
}
