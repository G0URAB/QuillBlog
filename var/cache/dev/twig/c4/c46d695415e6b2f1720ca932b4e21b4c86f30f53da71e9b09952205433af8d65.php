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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/IdentifierSuffixer.php */
class __TwigTemplate_93180981d888ad980acced505c83de387e6d28550a718e72b3742bce3ba26dfe extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/IdentifierSuffixer.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Generator\\Util;

use PackageVersions\\Versions;

/**
 * Utility class capable of generating
 * valid class/property/method identifiers
 * with a deterministic attached suffix,
 * in order to prevent property name collisions
 * and tampering from userland
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
abstract class IdentifierSuffixer
{
    const VALID_IDENTIFIER_FORMAT = '/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]+\$/';
    const DEFAULT_IDENTIFIER = 'g';

    final private function __construct()
    {
    }

    /**
     * Generates a valid unique identifier from the given name,
     * with a suffix attached to it
     */
    public static function getIdentifier(string \$name) : string
    {
        static \$salt;

        \$salt   = \$salt ?? \$salt = self::loadBaseHashSalt();
        \$suffix = \\substr(\\sha1(\$name . \$salt), 0, 5);

        if (! preg_match(self::VALID_IDENTIFIER_FORMAT, \$name)) {
            return self::DEFAULT_IDENTIFIER . \$suffix;
        }

        return \$name . \$suffix;
    }

    private static function loadBaseHashSalt() : string
    {
        return \\sha1(\\serialize(Versions::VERSIONS));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/IdentifierSuffixer.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Generator\\Util;

use PackageVersions\\Versions;

/**
 * Utility class capable of generating
 * valid class/property/method identifiers
 * with a deterministic attached suffix,
 * in order to prevent property name collisions
 * and tampering from userland
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
abstract class IdentifierSuffixer
{
    const VALID_IDENTIFIER_FORMAT = '/^[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]+\$/';
    const DEFAULT_IDENTIFIER = 'g';

    final private function __construct()
    {
    }

    /**
     * Generates a valid unique identifier from the given name,
     * with a suffix attached to it
     */
    public static function getIdentifier(string \$name) : string
    {
        static \$salt;

        \$salt   = \$salt ?? \$salt = self::loadBaseHashSalt();
        \$suffix = \\substr(\\sha1(\$name . \$salt), 0, 5);

        if (! preg_match(self::VALID_IDENTIFIER_FORMAT, \$name)) {
            return self::DEFAULT_IDENTIFIER . \$suffix;
        }

        return \$name . \$suffix;
    }

    private static function loadBaseHashSalt() : string
    {
        return \\sha1(\\serialize(Versions::VERSIONS));
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/IdentifierSuffixer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Generator\\Util\\IdentifierSuffixer.php");
    }
}
