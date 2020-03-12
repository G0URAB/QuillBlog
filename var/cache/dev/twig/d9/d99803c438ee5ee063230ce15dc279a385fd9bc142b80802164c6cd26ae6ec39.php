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

/* @app/vendor/symfony/var-dumper/Caster/MemcachedCaster.php */
class __TwigTemplate_42963ae639bc67bef848d435189254849c70b595fe13ee0e8d91f32e8d25d09a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/MemcachedCaster.php"));

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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 *
 * @final
 */
class MemcachedCaster
{
    private static \$optionConstants;
    private static \$defaultOptions;

    public static function castMemcached(\\Memcached \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        \$a += [
            Caster::PREFIX_VIRTUAL.'servers' => \$c->getServerList(),
            Caster::PREFIX_VIRTUAL.'options' => new EnumStub(
                self::getNonDefaultOptions(\$c)
            ),
        ];

        return \$a;
    }

    private static function getNonDefaultOptions(\\Memcached \$c): array
    {
        self::\$defaultOptions = self::\$defaultOptions ?? self::discoverDefaultOptions();
        self::\$optionConstants = self::\$optionConstants ?? self::getOptionConstants();

        \$nonDefaultOptions = [];
        foreach (self::\$optionConstants as \$constantKey => \$value) {
            if (self::\$defaultOptions[\$constantKey] !== \$option = \$c->getOption(\$value)) {
                \$nonDefaultOptions[\$constantKey] = \$option;
            }
        }

        return \$nonDefaultOptions;
    }

    private static function discoverDefaultOptions(): array
    {
        \$defaultMemcached = new \\Memcached();
        \$defaultMemcached->addServer('127.0.0.1', 11211);

        \$defaultOptions = [];
        self::\$optionConstants = self::\$optionConstants ?? self::getOptionConstants();

        foreach (self::\$optionConstants as \$constantKey => \$value) {
            \$defaultOptions[\$constantKey] = \$defaultMemcached->getOption(\$value);
        }

        return \$defaultOptions;
    }

    private static function getOptionConstants(): array
    {
        \$reflectedMemcached = new \\ReflectionClass(\\Memcached::class);

        \$optionConstants = [];
        foreach (\$reflectedMemcached->getConstants() as \$constantKey => \$value) {
            if (0 === strpos(\$constantKey, 'OPT_')) {
                \$optionConstants[\$constantKey] = \$value;
            }
        }

        return \$optionConstants;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/MemcachedCaster.php";
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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 *
 * @final
 */
class MemcachedCaster
{
    private static \$optionConstants;
    private static \$defaultOptions;

    public static function castMemcached(\\Memcached \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        \$a += [
            Caster::PREFIX_VIRTUAL.'servers' => \$c->getServerList(),
            Caster::PREFIX_VIRTUAL.'options' => new EnumStub(
                self::getNonDefaultOptions(\$c)
            ),
        ];

        return \$a;
    }

    private static function getNonDefaultOptions(\\Memcached \$c): array
    {
        self::\$defaultOptions = self::\$defaultOptions ?? self::discoverDefaultOptions();
        self::\$optionConstants = self::\$optionConstants ?? self::getOptionConstants();

        \$nonDefaultOptions = [];
        foreach (self::\$optionConstants as \$constantKey => \$value) {
            if (self::\$defaultOptions[\$constantKey] !== \$option = \$c->getOption(\$value)) {
                \$nonDefaultOptions[\$constantKey] = \$option;
            }
        }

        return \$nonDefaultOptions;
    }

    private static function discoverDefaultOptions(): array
    {
        \$defaultMemcached = new \\Memcached();
        \$defaultMemcached->addServer('127.0.0.1', 11211);

        \$defaultOptions = [];
        self::\$optionConstants = self::\$optionConstants ?? self::getOptionConstants();

        foreach (self::\$optionConstants as \$constantKey => \$value) {
            \$defaultOptions[\$constantKey] = \$defaultMemcached->getOption(\$value);
        }

        return \$defaultOptions;
    }

    private static function getOptionConstants(): array
    {
        \$reflectedMemcached = new \\ReflectionClass(\\Memcached::class);

        \$optionConstants = [];
        foreach (\$reflectedMemcached->getConstants() as \$constantKey => \$value) {
            if (0 === strpos(\$constantKey, 'OPT_')) {
                \$optionConstants[\$constantKey] = \$value;
            }
        }

        return \$optionConstants;
    }
}
", "@app/vendor/symfony/var-dumper/Caster/MemcachedCaster.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\MemcachedCaster.php");
    }
}
