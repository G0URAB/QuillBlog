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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Exception/InvalidProxyDirectoryException.php */
class __TwigTemplate_fdc14ef66b403636795bfe1659deeb641f8e8509cbc996199b3235bf27c34ff2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Exception/InvalidProxyDirectoryException.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Exception;

use InvalidArgumentException;

/**
 * Exception for invalid directories
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InvalidProxyDirectoryException extends InvalidArgumentException implements ExceptionInterface
{
    public static function proxyDirectoryNotFound(string \$directory) : self
    {
        return new self(sprintf('Provided directory \"%s\" does not exist', \$directory));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Exception/InvalidProxyDirectoryException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Exception;

use InvalidArgumentException;

/**
 * Exception for invalid directories
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InvalidProxyDirectoryException extends InvalidArgumentException implements ExceptionInterface
{
    public static function proxyDirectoryNotFound(string \$directory) : self
    {
        return new self(sprintf('Provided directory \"%s\" does not exist', \$directory));
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Exception/InvalidProxyDirectoryException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Exception\\InvalidProxyDirectoryException.php");
    }
}
