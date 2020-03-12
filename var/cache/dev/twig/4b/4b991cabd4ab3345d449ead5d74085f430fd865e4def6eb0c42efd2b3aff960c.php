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

/* @app/vendor/symfony/mime/MimeTypeGuesserInterface.php */
class __TwigTemplate_87c8679d60e18ac9e8eba1cb619ec2df54e3d168f13e3df59d8c6f9ae744b768 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/MimeTypeGuesserInterface.php"));

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

/**
 * Guesses the MIME type of a file.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface MimeTypeGuesserInterface
{
    /**
     * Returns true if this guesser is supported.
     */
    public function isGuesserSupported(): bool;

    /**
     * Guesses the MIME type of the file with the given path.
     *
     * @param string \$path The path to the file
     *
     * @return string|null The MIME type or null, if none could be guessed
     *
     * @throws \\LogicException           If the guesser is not supported
     * @throws \\InvalidArgumentException If the file does not exist or is not readable
     */
    public function guessMimeType(string \$path): ?string;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/MimeTypeGuesserInterface.php";
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

/**
 * Guesses the MIME type of a file.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface MimeTypeGuesserInterface
{
    /**
     * Returns true if this guesser is supported.
     */
    public function isGuesserSupported(): bool;

    /**
     * Guesses the MIME type of the file with the given path.
     *
     * @param string \$path The path to the file
     *
     * @return string|null The MIME type or null, if none could be guessed
     *
     * @throws \\LogicException           If the guesser is not supported
     * @throws \\InvalidArgumentException If the file does not exist or is not readable
     */
    public function guessMimeType(string \$path): ?string;
}
", "@app/vendor/symfony/mime/MimeTypeGuesserInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\MimeTypeGuesserInterface.php");
    }
}
