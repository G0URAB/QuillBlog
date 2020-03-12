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

/* @app/vendor/symfony/var-dumper/Caster/TraceStub.php */
class __TwigTemplate_1eb1ced45cf554de968fa46d69314fe572cbe106555f4dbe132fe2127513fa42 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/TraceStub.php"));

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
 * Represents a backtrace as returned by debug_backtrace() or Exception->getTrace().
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TraceStub extends Stub
{
    public \$keepArgs;
    public \$sliceOffset;
    public \$sliceLength;
    public \$numberingOffset;

    public function __construct(array \$trace, bool \$keepArgs = true, int \$sliceOffset = 0, int \$sliceLength = null, int \$numberingOffset = 0)
    {
        \$this->value = \$trace;
        \$this->keepArgs = \$keepArgs;
        \$this->sliceOffset = \$sliceOffset;
        \$this->sliceLength = \$sliceLength;
        \$this->numberingOffset = \$numberingOffset;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/TraceStub.php";
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
 * Represents a backtrace as returned by debug_backtrace() or Exception->getTrace().
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TraceStub extends Stub
{
    public \$keepArgs;
    public \$sliceOffset;
    public \$sliceLength;
    public \$numberingOffset;

    public function __construct(array \$trace, bool \$keepArgs = true, int \$sliceOffset = 0, int \$sliceLength = null, int \$numberingOffset = 0)
    {
        \$this->value = \$trace;
        \$this->keepArgs = \$keepArgs;
        \$this->sliceOffset = \$sliceOffset;
        \$this->sliceLength = \$sliceLength;
        \$this->numberingOffset = \$numberingOffset;
    }
}
", "@app/vendor/symfony/var-dumper/Caster/TraceStub.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\TraceStub.php");
    }
}
