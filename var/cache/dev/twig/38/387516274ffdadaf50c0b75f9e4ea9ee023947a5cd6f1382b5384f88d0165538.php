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

/* @app/vendor/symfony/var-dumper/Cloner/DumperInterface.php */
class __TwigTemplate_580e7244f322c896e6cc2ac3d68b378e5138819f69bb4956dc1c9d8382c8b595 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Cloner/DumperInterface.php"));

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

namespace Symfony\\Component\\VarDumper\\Cloner;

/**
 * DumperInterface used by Data objects.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface DumperInterface
{
    /**
     * Dumps a scalar value.
     *
     * @param string                \$type  The PHP type of the value being dumped
     * @param string|int|float|bool \$value The scalar value being dumped
     */
    public function dumpScalar(Cursor \$cursor, string \$type, \$value);

    /**
     * Dumps a string.
     *
     * @param string \$str The string being dumped
     * @param bool   \$bin Whether \$str is UTF-8 or binary encoded
     * @param int    \$cut The number of characters \$str has been cut by
     */
    public function dumpString(Cursor \$cursor, string \$str, bool \$bin, int \$cut);

    /**
     * Dumps while entering an hash.
     *
     * @param int        \$type     A Cursor::HASH_* const for the type of hash
     * @param string|int \$class    The object class, resource type or array count
     * @param bool       \$hasChild When the dump of the hash has child item
     */
    public function enterHash(Cursor \$cursor, int \$type, \$class, bool \$hasChild);

    /**
     * Dumps while leaving an hash.
     *
     * @param int        \$type     A Cursor::HASH_* const for the type of hash
     * @param string|int \$class    The object class, resource type or array count
     * @param bool       \$hasChild When the dump of the hash has child item
     * @param int        \$cut      The number of items the hash has been cut by
     */
    public function leaveHash(Cursor \$cursor, int \$type, \$class, bool \$hasChild, int \$cut);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Cloner/DumperInterface.php";
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

namespace Symfony\\Component\\VarDumper\\Cloner;

/**
 * DumperInterface used by Data objects.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface DumperInterface
{
    /**
     * Dumps a scalar value.
     *
     * @param string                \$type  The PHP type of the value being dumped
     * @param string|int|float|bool \$value The scalar value being dumped
     */
    public function dumpScalar(Cursor \$cursor, string \$type, \$value);

    /**
     * Dumps a string.
     *
     * @param string \$str The string being dumped
     * @param bool   \$bin Whether \$str is UTF-8 or binary encoded
     * @param int    \$cut The number of characters \$str has been cut by
     */
    public function dumpString(Cursor \$cursor, string \$str, bool \$bin, int \$cut);

    /**
     * Dumps while entering an hash.
     *
     * @param int        \$type     A Cursor::HASH_* const for the type of hash
     * @param string|int \$class    The object class, resource type or array count
     * @param bool       \$hasChild When the dump of the hash has child item
     */
    public function enterHash(Cursor \$cursor, int \$type, \$class, bool \$hasChild);

    /**
     * Dumps while leaving an hash.
     *
     * @param int        \$type     A Cursor::HASH_* const for the type of hash
     * @param string|int \$class    The object class, resource type or array count
     * @param bool       \$hasChild When the dump of the hash has child item
     * @param int        \$cut      The number of items the hash has been cut by
     */
    public function leaveHash(Cursor \$cursor, int \$type, \$class, bool \$hasChild, int \$cut);
}
", "@app/vendor/symfony/var-dumper/Cloner/DumperInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Cloner\\DumperInterface.php");
    }
}
