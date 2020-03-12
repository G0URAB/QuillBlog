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

/* @app/vendor/symfony/var-dumper/Test/VarDumperTestTrait.php */
class __TwigTemplate_162e49146aa592e3a9c13439cfb0038235e32a639f1978f5feeeb327f28218ce extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Test/VarDumperTestTrait.php"));

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

namespace Symfony\\Component\\VarDumper\\Test;

use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait VarDumperTestTrait
{
    /**
     * @internal
     */
    private \$varDumperConfig = [
        'casters' => [],
        'flags' => null,
    ];

    protected function setUpVarDumper(array \$casters, int \$flags = null): void
    {
        \$this->varDumperConfig['casters'] = \$casters;
        \$this->varDumperConfig['flags'] = \$flags;
    }

    /**
     * @after
     */
    protected function tearDownVarDumper(): void
    {
        \$this->varDumperConfig['casters'] = [];
        \$this->varDumperConfig['flags'] = null;
    }

    public function assertDumpEquals(\$expected, \$data, int \$filter = 0, string \$message = '')
    {
        \$this->assertSame(\$this->prepareExpectation(\$expected, \$filter), \$this->getDump(\$data, null, \$filter), \$message);
    }

    public function assertDumpMatchesFormat(\$expected, \$data, int \$filter = 0, string \$message = '')
    {
        \$this->assertStringMatchesFormat(\$this->prepareExpectation(\$expected, \$filter), \$this->getDump(\$data, null, \$filter), \$message);
    }

    protected function getDump(\$data, \$key = null, int \$filter = 0): ?string
    {
        if (null === \$flags = \$this->varDumperConfig['flags']) {
            \$flags = getenv('DUMP_LIGHT_ARRAY') ? CliDumper::DUMP_LIGHT_ARRAY : 0;
            \$flags |= getenv('DUMP_STRING_LENGTH') ? CliDumper::DUMP_STRING_LENGTH : 0;
            \$flags |= getenv('DUMP_COMMA_SEPARATOR') ? CliDumper::DUMP_COMMA_SEPARATOR : 0;
        }

        \$cloner = new VarCloner();
        \$cloner->addCasters(\$this->varDumperConfig['casters']);
        \$cloner->setMaxItems(-1);
        \$dumper = new CliDumper(null, null, \$flags);
        \$dumper->setColors(false);
        \$data = \$cloner->cloneVar(\$data, \$filter)->withRefHandles(false);
        if (null !== \$key && null === \$data = \$data->seek(\$key)) {
            return null;
        }

        return rtrim(\$dumper->dump(\$data, true));
    }

    private function prepareExpectation(\$expected, int \$filter): string
    {
        if (!\\is_string(\$expected)) {
            \$expected = \$this->getDump(\$expected, null, \$filter);
        }

        return rtrim(\$expected);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Test/VarDumperTestTrait.php";
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

namespace Symfony\\Component\\VarDumper\\Test;

use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait VarDumperTestTrait
{
    /**
     * @internal
     */
    private \$varDumperConfig = [
        'casters' => [],
        'flags' => null,
    ];

    protected function setUpVarDumper(array \$casters, int \$flags = null): void
    {
        \$this->varDumperConfig['casters'] = \$casters;
        \$this->varDumperConfig['flags'] = \$flags;
    }

    /**
     * @after
     */
    protected function tearDownVarDumper(): void
    {
        \$this->varDumperConfig['casters'] = [];
        \$this->varDumperConfig['flags'] = null;
    }

    public function assertDumpEquals(\$expected, \$data, int \$filter = 0, string \$message = '')
    {
        \$this->assertSame(\$this->prepareExpectation(\$expected, \$filter), \$this->getDump(\$data, null, \$filter), \$message);
    }

    public function assertDumpMatchesFormat(\$expected, \$data, int \$filter = 0, string \$message = '')
    {
        \$this->assertStringMatchesFormat(\$this->prepareExpectation(\$expected, \$filter), \$this->getDump(\$data, null, \$filter), \$message);
    }

    protected function getDump(\$data, \$key = null, int \$filter = 0): ?string
    {
        if (null === \$flags = \$this->varDumperConfig['flags']) {
            \$flags = getenv('DUMP_LIGHT_ARRAY') ? CliDumper::DUMP_LIGHT_ARRAY : 0;
            \$flags |= getenv('DUMP_STRING_LENGTH') ? CliDumper::DUMP_STRING_LENGTH : 0;
            \$flags |= getenv('DUMP_COMMA_SEPARATOR') ? CliDumper::DUMP_COMMA_SEPARATOR : 0;
        }

        \$cloner = new VarCloner();
        \$cloner->addCasters(\$this->varDumperConfig['casters']);
        \$cloner->setMaxItems(-1);
        \$dumper = new CliDumper(null, null, \$flags);
        \$dumper->setColors(false);
        \$data = \$cloner->cloneVar(\$data, \$filter)->withRefHandles(false);
        if (null !== \$key && null === \$data = \$data->seek(\$key)) {
            return null;
        }

        return rtrim(\$dumper->dump(\$data, true));
    }

    private function prepareExpectation(\$expected, int \$filter): string
    {
        if (!\\is_string(\$expected)) {
            \$expected = \$this->getDump(\$expected, null, \$filter);
        }

        return rtrim(\$expected);
    }
}
", "@app/vendor/symfony/var-dumper/Test/VarDumperTestTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Test\\VarDumperTestTrait.php");
    }
}
