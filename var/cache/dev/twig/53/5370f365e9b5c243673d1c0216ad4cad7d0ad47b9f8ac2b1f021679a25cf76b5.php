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

/* @app/vendor/symfony/polyfill-php73/Php73.php */
class __TwigTemplate_76120bd547dbec3f049775441b46e1c5282490abf4c429a88aed1cf4114b203d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/polyfill-php73/Php73.php"));

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

namespace Symfony\\Polyfill\\Php73;

/**
 * @author Gabriel Caruso <carusogabriel34@gmail.com>
 * @author Ion Bazan <ion.bazan@gmail.com>
 *
 * @internal
 */
final class Php73
{
    public static \$startAt = 1533462603;

    /**
     * @param bool \$asNum
     *
     * @return array|float|int
     */
    public static function hrtime(\$asNum = false)
    {
        \$ns = microtime(false);
        \$s = substr(\$ns, 11) - self::\$startAt;
        \$ns = 1E9 * (float) \$ns;

        if (\$asNum) {
            \$ns += \$s * 1E9;

            return \\PHP_INT_SIZE === 4 ? \$ns : (int) \$ns;
        }

        return array(\$s, (int) \$ns);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/polyfill-php73/Php73.php";
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

namespace Symfony\\Polyfill\\Php73;

/**
 * @author Gabriel Caruso <carusogabriel34@gmail.com>
 * @author Ion Bazan <ion.bazan@gmail.com>
 *
 * @internal
 */
final class Php73
{
    public static \$startAt = 1533462603;

    /**
     * @param bool \$asNum
     *
     * @return array|float|int
     */
    public static function hrtime(\$asNum = false)
    {
        \$ns = microtime(false);
        \$s = substr(\$ns, 11) - self::\$startAt;
        \$ns = 1E9 * (float) \$ns;

        if (\$asNum) {
            \$ns += \$s * 1E9;

            return \\PHP_INT_SIZE === 4 ? \$ns : (int) \$ns;
        }

        return array(\$s, (int) \$ns);
    }
}
", "@app/vendor/symfony/polyfill-php73/Php73.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\polyfill-php73\\Php73.php");
    }
}
