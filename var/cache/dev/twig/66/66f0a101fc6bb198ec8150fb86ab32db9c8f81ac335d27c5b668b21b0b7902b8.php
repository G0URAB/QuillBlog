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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Exception/FileNotWritableException.php */
class __TwigTemplate_6d86ff6e4fa8b7aa51ba50eac1fcfcd26ddc000c83b3991a44a8cf76875c917c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Exception/FileNotWritableException.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Exception;

use UnexpectedValueException;

/**
 * Exception for non writable files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class FileNotWritableException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromInvalidMoveOperation(string \$fromPath, string \$toPath) : self
    {
        return new self(sprintf(
            'Could not move file \"%s\" to location \"%s\": '
            . 'either the source file is not readable, or the destination is not writable',
            \$fromPath,
            \$toPath
        ));
    }

    /**
     * @deprecated this method is unused, and will be removed in ProxyManager 3.0.0
     */
    public static function fromNonWritableLocation(\$path) : self
    {
        \$messages    = [];
        \$destination = realpath(\$path);

        if (! \$destination) {
            \$messages[] = 'path does not exist';
        }

        if (\$destination && ! is_file(\$destination)) {
            \$messages[] = 'exists and is not a file';
        }

        if (\$destination && ! is_writable(\$destination)) {
            \$messages[] = 'is not writable';
        }

        return new self(sprintf('Could not write to path \"%s\": %s', \$path, implode(', ', \$messages)));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Exception/FileNotWritableException.php";
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

use UnexpectedValueException;

/**
 * Exception for non writable files
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class FileNotWritableException extends UnexpectedValueException implements ExceptionInterface
{
    public static function fromInvalidMoveOperation(string \$fromPath, string \$toPath) : self
    {
        return new self(sprintf(
            'Could not move file \"%s\" to location \"%s\": '
            . 'either the source file is not readable, or the destination is not writable',
            \$fromPath,
            \$toPath
        ));
    }

    /**
     * @deprecated this method is unused, and will be removed in ProxyManager 3.0.0
     */
    public static function fromNonWritableLocation(\$path) : self
    {
        \$messages    = [];
        \$destination = realpath(\$path);

        if (! \$destination) {
            \$messages[] = 'path does not exist';
        }

        if (\$destination && ! is_file(\$destination)) {
            \$messages[] = 'exists and is not a file';
        }

        if (\$destination && ! is_writable(\$destination)) {
            \$messages[] = 'is not writable';
        }

        return new self(sprintf('Could not write to path \"%s\": %s', \$path, implode(', ', \$messages)));
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Exception/FileNotWritableException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Exception\\FileNotWritableException.php");
    }
}
