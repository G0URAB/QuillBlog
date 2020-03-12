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

/* @app/vendor/symfony/var-dumper/Caster/DsCaster.php */
class __TwigTemplate_fa29c923b0c1d3188c0c43666442cd78f63ba5fbdad5934d291a034678125879 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/DsCaster.php"));

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

use Ds\\Collection;
use Ds\\Map;
use Ds\\Pair;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts Ds extension classes to array representation.
 *
 * @author Jáchym Toušek <enumag@gmail.com>
 *
 * @final
 */
class DsCaster
{
    public static function castCollection(Collection \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        \$a[Caster::PREFIX_VIRTUAL.'count'] = \$c->count();
        \$a[Caster::PREFIX_VIRTUAL.'capacity'] = \$c->capacity();

        if (!\$c instanceof Map) {
            \$a += \$c->toArray();
        }

        return \$a;
    }

    public static function castMap(Map \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        foreach (\$c as \$k => \$v) {
            \$a[] = new DsPairStub(\$k, \$v);
        }

        return \$a;
    }

    public static function castPair(Pair \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        foreach (\$c->toArray() as \$k => \$v) {
            \$a[Caster::PREFIX_VIRTUAL.\$k] = \$v;
        }

        return \$a;
    }

    public static function castPairStub(DsPairStub \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        if (\$isNested) {
            \$stub->class = Pair::class;
            \$stub->value = null;
            \$stub->handle = 0;

            \$a = \$c->value;
        }

        return \$a;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/DsCaster.php";
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

use Ds\\Collection;
use Ds\\Map;
use Ds\\Pair;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts Ds extension classes to array representation.
 *
 * @author Jáchym Toušek <enumag@gmail.com>
 *
 * @final
 */
class DsCaster
{
    public static function castCollection(Collection \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        \$a[Caster::PREFIX_VIRTUAL.'count'] = \$c->count();
        \$a[Caster::PREFIX_VIRTUAL.'capacity'] = \$c->capacity();

        if (!\$c instanceof Map) {
            \$a += \$c->toArray();
        }

        return \$a;
    }

    public static function castMap(Map \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        foreach (\$c as \$k => \$v) {
            \$a[] = new DsPairStub(\$k, \$v);
        }

        return \$a;
    }

    public static function castPair(Pair \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        foreach (\$c->toArray() as \$k => \$v) {
            \$a[Caster::PREFIX_VIRTUAL.\$k] = \$v;
        }

        return \$a;
    }

    public static function castPairStub(DsPairStub \$c, array \$a, Stub \$stub, bool \$isNested): array
    {
        if (\$isNested) {
            \$stub->class = Pair::class;
            \$stub->value = null;
            \$stub->handle = 0;

            \$a = \$c->value;
        }

        return \$a;
    }
}
", "@app/vendor/symfony/var-dumper/Caster/DsCaster.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\DsCaster.php");
    }
}
