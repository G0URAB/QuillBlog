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

/* @app/vendor/symfony/yaml/Exception/ParseException.php */
class __TwigTemplate_7f83a29175e1cb1989a154308f48f784c3ab091e49e26bb7cb2d396553534bc0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/yaml/Exception/ParseException.php"));

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

namespace Symfony\\Component\\Yaml\\Exception;

/**
 * Exception class thrown when an error occurs during parsing.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParseException extends RuntimeException
{
    private \$parsedFile;
    private \$parsedLine;
    private \$snippet;
    private \$rawMessage;

    /**
     * @param string          \$message    The error message
     * @param int             \$parsedLine The line where the error occurred
     * @param string|null     \$snippet    The snippet of code near the problem
     * @param string|null     \$parsedFile The file name where the error occurred
     * @param \\Exception|null \$previous   The previous exception
     */
    public function __construct(string \$message, int \$parsedLine = -1, string \$snippet = null, string \$parsedFile = null, \\Throwable \$previous = null)
    {
        \$this->parsedFile = \$parsedFile;
        \$this->parsedLine = \$parsedLine;
        \$this->snippet = \$snippet;
        \$this->rawMessage = \$message;

        \$this->updateRepr();

        parent::__construct(\$this->message, 0, \$previous);
    }

    /**
     * Gets the snippet of code near the error.
     *
     * @return string The snippet of code
     */
    public function getSnippet()
    {
        return \$this->snippet;
    }

    /**
     * Sets the snippet of code near the error.
     */
    public function setSnippet(string \$snippet)
    {
        \$this->snippet = \$snippet;

        \$this->updateRepr();
    }

    /**
     * Gets the filename where the error occurred.
     *
     * This method returns null if a string is parsed.
     *
     * @return string The filename
     */
    public function getParsedFile()
    {
        return \$this->parsedFile;
    }

    /**
     * Sets the filename where the error occurred.
     */
    public function setParsedFile(string \$parsedFile)
    {
        \$this->parsedFile = \$parsedFile;

        \$this->updateRepr();
    }

    /**
     * Gets the line where the error occurred.
     *
     * @return int The file line
     */
    public function getParsedLine()
    {
        return \$this->parsedLine;
    }

    /**
     * Sets the line where the error occurred.
     */
    public function setParsedLine(int \$parsedLine)
    {
        \$this->parsedLine = \$parsedLine;

        \$this->updateRepr();
    }

    private function updateRepr()
    {
        \$this->message = \$this->rawMessage;

        \$dot = false;
        if ('.' === substr(\$this->message, -1)) {
            \$this->message = substr(\$this->message, 0, -1);
            \$dot = true;
        }

        if (null !== \$this->parsedFile) {
            \$this->message .= sprintf(' in %s', json_encode(\$this->parsedFile, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        }

        if (\$this->parsedLine >= 0) {
            \$this->message .= sprintf(' at line %d', \$this->parsedLine);
        }

        if (\$this->snippet) {
            \$this->message .= sprintf(' (near \"%s\")', \$this->snippet);
        }

        if (\$dot) {
            \$this->message .= '.';
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/yaml/Exception/ParseException.php";
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

namespace Symfony\\Component\\Yaml\\Exception;

/**
 * Exception class thrown when an error occurs during parsing.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParseException extends RuntimeException
{
    private \$parsedFile;
    private \$parsedLine;
    private \$snippet;
    private \$rawMessage;

    /**
     * @param string          \$message    The error message
     * @param int             \$parsedLine The line where the error occurred
     * @param string|null     \$snippet    The snippet of code near the problem
     * @param string|null     \$parsedFile The file name where the error occurred
     * @param \\Exception|null \$previous   The previous exception
     */
    public function __construct(string \$message, int \$parsedLine = -1, string \$snippet = null, string \$parsedFile = null, \\Throwable \$previous = null)
    {
        \$this->parsedFile = \$parsedFile;
        \$this->parsedLine = \$parsedLine;
        \$this->snippet = \$snippet;
        \$this->rawMessage = \$message;

        \$this->updateRepr();

        parent::__construct(\$this->message, 0, \$previous);
    }

    /**
     * Gets the snippet of code near the error.
     *
     * @return string The snippet of code
     */
    public function getSnippet()
    {
        return \$this->snippet;
    }

    /**
     * Sets the snippet of code near the error.
     */
    public function setSnippet(string \$snippet)
    {
        \$this->snippet = \$snippet;

        \$this->updateRepr();
    }

    /**
     * Gets the filename where the error occurred.
     *
     * This method returns null if a string is parsed.
     *
     * @return string The filename
     */
    public function getParsedFile()
    {
        return \$this->parsedFile;
    }

    /**
     * Sets the filename where the error occurred.
     */
    public function setParsedFile(string \$parsedFile)
    {
        \$this->parsedFile = \$parsedFile;

        \$this->updateRepr();
    }

    /**
     * Gets the line where the error occurred.
     *
     * @return int The file line
     */
    public function getParsedLine()
    {
        return \$this->parsedLine;
    }

    /**
     * Sets the line where the error occurred.
     */
    public function setParsedLine(int \$parsedLine)
    {
        \$this->parsedLine = \$parsedLine;

        \$this->updateRepr();
    }

    private function updateRepr()
    {
        \$this->message = \$this->rawMessage;

        \$dot = false;
        if ('.' === substr(\$this->message, -1)) {
            \$this->message = substr(\$this->message, 0, -1);
            \$dot = true;
        }

        if (null !== \$this->parsedFile) {
            \$this->message .= sprintf(' in %s', json_encode(\$this->parsedFile, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        }

        if (\$this->parsedLine >= 0) {
            \$this->message .= sprintf(' at line %d', \$this->parsedLine);
        }

        if (\$this->snippet) {
            \$this->message .= sprintf(' (near \"%s\")', \$this->snippet);
        }

        if (\$dot) {
            \$this->message .= '.';
        }
    }
}
", "@app/vendor/symfony/yaml/Exception/ParseException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\yaml\\Exception\\ParseException.php");
    }
}
