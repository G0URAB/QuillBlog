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

/* @app/vendor/symfony/mime/FileBinaryMimeTypeGuesser.php */
class __TwigTemplate_77cc2183934ef673ddd4ae6a00d6fa638de83154a1002c58e6ee1fd389c1598d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/FileBinaryMimeTypeGuesser.php"));

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

namespace Symfony\\Component\\Mime;

use Symfony\\Component\\Mime\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Mime\\Exception\\LogicException;

/**
 * Guesses the MIME type with the binary \"file\" (only available on *nix).
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileBinaryMimeTypeGuesser implements MimeTypeGuesserInterface
{
    private \$cmd;

    /**
     * The \$cmd pattern must contain a \"%s\" string that will be replaced
     * with the file name to guess.
     *
     * The command output must start with the MIME type of the file.
     *
     * @param string \$cmd The command to run to get the MIME type of a file
     */
    public function __construct(string \$cmd = 'file -b --mime -- %s 2>/dev/null')
    {
        \$this->cmd = \$cmd;
    }

    /**
     * {@inheritdoc}
     */
    public function isGuesserSupported(): bool
    {
        static \$supported = null;

        if (null !== \$supported) {
            return \$supported;
        }

        if ('\\\\' === \\DIRECTORY_SEPARATOR || !\\function_exists('passthru') || !\\function_exists('escapeshellarg')) {
            return \$supported = false;
        }

        ob_start();
        passthru('command -v file', \$exitStatus);
        \$binPath = trim(ob_get_clean());

        return \$supported = 0 === \$exitStatus && '' !== \$binPath;
    }

    /**
     * {@inheritdoc}
     */
    public function guessMimeType(string \$path): ?string
    {
        if (!is_file(\$path) || !is_readable(\$path)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" file does not exist or is not readable.', \$path));
        }

        if (!\$this->isGuesserSupported()) {
            throw new LogicException(sprintf('The \"%s\" guesser is not supported.', __CLASS__));
        }

        ob_start();

        // need to use --mime instead of -i. see #6641
        passthru(sprintf(\$this->cmd, escapeshellarg((0 === strpos(\$path, '-') ? './' : '').\$path)), \$return);
        if (\$return > 0) {
            ob_end_clean();

            return null;
        }

        \$type = trim(ob_get_clean());

        if (!preg_match('#^([a-z0-9\\-]+/[a-z0-9\\-\\+\\.]+)#i', \$type, \$match)) {
            // it's not a type, but an error message
            return null;
        }

        return \$match[1];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/FileBinaryMimeTypeGuesser.php";
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

namespace Symfony\\Component\\Mime;

use Symfony\\Component\\Mime\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Mime\\Exception\\LogicException;

/**
 * Guesses the MIME type with the binary \"file\" (only available on *nix).
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileBinaryMimeTypeGuesser implements MimeTypeGuesserInterface
{
    private \$cmd;

    /**
     * The \$cmd pattern must contain a \"%s\" string that will be replaced
     * with the file name to guess.
     *
     * The command output must start with the MIME type of the file.
     *
     * @param string \$cmd The command to run to get the MIME type of a file
     */
    public function __construct(string \$cmd = 'file -b --mime -- %s 2>/dev/null')
    {
        \$this->cmd = \$cmd;
    }

    /**
     * {@inheritdoc}
     */
    public function isGuesserSupported(): bool
    {
        static \$supported = null;

        if (null !== \$supported) {
            return \$supported;
        }

        if ('\\\\' === \\DIRECTORY_SEPARATOR || !\\function_exists('passthru') || !\\function_exists('escapeshellarg')) {
            return \$supported = false;
        }

        ob_start();
        passthru('command -v file', \$exitStatus);
        \$binPath = trim(ob_get_clean());

        return \$supported = 0 === \$exitStatus && '' !== \$binPath;
    }

    /**
     * {@inheritdoc}
     */
    public function guessMimeType(string \$path): ?string
    {
        if (!is_file(\$path) || !is_readable(\$path)) {
            throw new InvalidArgumentException(sprintf('The \"%s\" file does not exist or is not readable.', \$path));
        }

        if (!\$this->isGuesserSupported()) {
            throw new LogicException(sprintf('The \"%s\" guesser is not supported.', __CLASS__));
        }

        ob_start();

        // need to use --mime instead of -i. see #6641
        passthru(sprintf(\$this->cmd, escapeshellarg((0 === strpos(\$path, '-') ? './' : '').\$path)), \$return);
        if (\$return > 0) {
            ob_end_clean();

            return null;
        }

        \$type = trim(ob_get_clean());

        if (!preg_match('#^([a-z0-9\\-]+/[a-z0-9\\-\\+\\.]+)#i', \$type, \$match)) {
            // it's not a type, but an error message
            return null;
        }

        return \$match[1];
    }
}
", "@app/vendor/symfony/mime/FileBinaryMimeTypeGuesser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\FileBinaryMimeTypeGuesser.php");
    }
}
