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

/* @app/vendor/symfony/mime/FileinfoMimeTypeGuesser.php */
class __TwigTemplate_563957c6150a0eac010399507ec81590bb5ca1b3257964c6ed1987a5aa4a22a4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/FileinfoMimeTypeGuesser.php"));

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
 * Guesses the MIME type using the PECL extension FileInfo.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileinfoMimeTypeGuesser implements MimeTypeGuesserInterface
{
    private \$magicFile;

    /**
     * @param string \$magicFile A magic file to use with the finfo instance
     *
     * @see http://www.php.net/manual/en/function.finfo-open.php
     */
    public function __construct(string \$magicFile = null)
    {
        \$this->magicFile = \$magicFile;
    }

    /**
     * {@inheritdoc}
     */
    public function isGuesserSupported(): bool
    {
        return \\function_exists('finfo_open');
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

        if (false === \$finfo = new \\finfo(FILEINFO_MIME_TYPE, \$this->magicFile)) {
            return null;
        }

        return \$finfo->file(\$path);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/FileinfoMimeTypeGuesser.php";
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
 * Guesses the MIME type using the PECL extension FileInfo.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileinfoMimeTypeGuesser implements MimeTypeGuesserInterface
{
    private \$magicFile;

    /**
     * @param string \$magicFile A magic file to use with the finfo instance
     *
     * @see http://www.php.net/manual/en/function.finfo-open.php
     */
    public function __construct(string \$magicFile = null)
    {
        \$this->magicFile = \$magicFile;
    }

    /**
     * {@inheritdoc}
     */
    public function isGuesserSupported(): bool
    {
        return \\function_exists('finfo_open');
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

        if (false === \$finfo = new \\finfo(FILEINFO_MIME_TYPE, \$this->magicFile)) {
            return null;
        }

        return \$finfo->file(\$path);
    }
}
", "@app/vendor/symfony/mime/FileinfoMimeTypeGuesser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\FileinfoMimeTypeGuesser.php");
    }
}
