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

/* @app/vendor/symfony/var-dumper/Caster/StubCaster.php */
class __TwigTemplate_2da8b315f3eee1352be85293decaa025e9c4696a81c059c2bf212405d210eb7c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/StubCaster.php"));

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
 * Casts a caster's Stub.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class StubCaster
{
    public static function castStub(Stub \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        if (\$isNested) {
            \$stub->type = \$c->type;
            \$stub->class = \$c->class;
            \$stub->value = \$c->value;
            \$stub->handle = \$c->handle;
            \$stub->cut = \$c->cut;
            \$stub->attr = \$c->attr;

            if (Stub::TYPE_REF === \$c->type && !\$c->class && \\is_string(\$c->value) && !preg_match('//u', \$c->value)) {
                \$stub->type = Stub::TYPE_STRING;
                \$stub->class = Stub::STRING_BINARY;
            }

            \$a = [];
        }

        return \$a;
    }

    public static function castCutArray(CutArrayStub \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        return \$isNested ? \$c->preservedSubset : \$a;
    }

    public static function cutInternals(\$obj, array \$a, Stub \$stub, bool \$isNested)
    {
        if (\$isNested) {
            \$stub->cut += \\count(\$a);

            return [];
        }

        return \$a;
    }

    public static function castEnum(EnumStub \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        if (\$isNested) {
            \$stub->class = \$c->dumpKeys ? '' : null;
            \$stub->handle = 0;
            \$stub->value = null;
            \$stub->cut = \$c->cut;
            \$stub->attr = \$c->attr;

            \$a = [];

            if (\$c->value) {
                foreach (array_keys(\$c->value) as \$k) {
                    \$keys[] = !isset(\$k[0]) || \"\\0\" !== \$k[0] ? Caster::PREFIX_VIRTUAL.\$k : \$k;
                }
                // Preserve references with array_combine()
                \$a = array_combine(\$keys, \$c->value);
            }
        }

        return \$a;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/StubCaster.php";
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
 * Casts a caster's Stub.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class StubCaster
{
    public static function castStub(Stub \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        if (\$isNested) {
            \$stub->type = \$c->type;
            \$stub->class = \$c->class;
            \$stub->value = \$c->value;
            \$stub->handle = \$c->handle;
            \$stub->cut = \$c->cut;
            \$stub->attr = \$c->attr;

            if (Stub::TYPE_REF === \$c->type && !\$c->class && \\is_string(\$c->value) && !preg_match('//u', \$c->value)) {
                \$stub->type = Stub::TYPE_STRING;
                \$stub->class = Stub::STRING_BINARY;
            }

            \$a = [];
        }

        return \$a;
    }

    public static function castCutArray(CutArrayStub \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        return \$isNested ? \$c->preservedSubset : \$a;
    }

    public static function cutInternals(\$obj, array \$a, Stub \$stub, bool \$isNested)
    {
        if (\$isNested) {
            \$stub->cut += \\count(\$a);

            return [];
        }

        return \$a;
    }

    public static function castEnum(EnumStub \$c, array \$a, Stub \$stub, bool \$isNested)
    {
        if (\$isNested) {
            \$stub->class = \$c->dumpKeys ? '' : null;
            \$stub->handle = 0;
            \$stub->value = null;
            \$stub->cut = \$c->cut;
            \$stub->attr = \$c->attr;

            \$a = [];

            if (\$c->value) {
                foreach (array_keys(\$c->value) as \$k) {
                    \$keys[] = !isset(\$k[0]) || \"\\0\" !== \$k[0] ? Caster::PREFIX_VIRTUAL.\$k : \$k;
                }
                // Preserve references with array_combine()
                \$a = array_combine(\$keys, \$c->value);
            }
        }

        return \$a;
    }
}
", "@app/vendor/symfony/var-dumper/Caster/StubCaster.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\StubCaster.php");
    }
}
