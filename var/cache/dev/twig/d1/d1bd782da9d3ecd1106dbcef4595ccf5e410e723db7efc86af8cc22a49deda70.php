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

/* @app/vendor/symfony/http-kernel/DataCollector/DataCollector.php */
class __TwigTemplate_66b2ecd7e58099705534455f4db2b1a6351dbb054df6ae3c620ddcf8033dea81 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/DataCollector/DataCollector.php"));

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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\VarDumper\\Caster\\CutStub;
use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;

/**
 * DataCollector.
 *
 * Children of this class must store the collected data in the data property.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@symfony.com>
 */
abstract class DataCollector implements DataCollectorInterface
{
    /**
     * @var array|Data
     */
    protected \$data = [];

    /**
     * @var ClonerInterface
     */
    private \$cloner;

    /**
     * Converts the variable into a serializable Data instance.
     *
     * This array can be displayed in the template using
     * the VarDumper component.
     *
     * @param mixed \$var
     *
     * @return Data
     */
    protected function cloneVar(\$var)
    {
        if (\$var instanceof Data) {
            return \$var;
        }
        if (null === \$this->cloner) {
            \$this->cloner = new VarCloner();
            \$this->cloner->setMaxItems(-1);
            \$this->cloner->addCasters(\$this->getCasters());
        }

        return \$this->cloner->cloneVar(\$var);
    }

    /**
     * @return callable[] The casters to add to the cloner
     */
    protected function getCasters()
    {
        \$casters = [
            '*' => function (\$v, array \$a, Stub \$s, \$isNested) {
                if (!\$v instanceof Stub) {
                    foreach (\$a as \$k => \$v) {
                        if (\\is_object(\$v) && !\$v instanceof \\DateTimeInterface && !\$v instanceof Stub) {
                            \$a[\$k] = new CutStub(\$v);
                        }
                    }
                }

                return \$a;
            },
        ] + ReflectionCaster::UNSET_CLOSURE_FILE_INFO;

        return \$casters;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['data'];
    }

    public function __wakeup()
    {
    }

    /**
     * @internal to prevent implementing \\Serializable
     */
    final protected function serialize()
    {
    }

    /**
     * @internal to prevent implementing \\Serializable
     */
    final protected function unserialize(\$data)
    {
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/DataCollector/DataCollector.php";
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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\VarDumper\\Caster\\CutStub;
use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;

/**
 * DataCollector.
 *
 * Children of this class must store the collected data in the data property.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@symfony.com>
 */
abstract class DataCollector implements DataCollectorInterface
{
    /**
     * @var array|Data
     */
    protected \$data = [];

    /**
     * @var ClonerInterface
     */
    private \$cloner;

    /**
     * Converts the variable into a serializable Data instance.
     *
     * This array can be displayed in the template using
     * the VarDumper component.
     *
     * @param mixed \$var
     *
     * @return Data
     */
    protected function cloneVar(\$var)
    {
        if (\$var instanceof Data) {
            return \$var;
        }
        if (null === \$this->cloner) {
            \$this->cloner = new VarCloner();
            \$this->cloner->setMaxItems(-1);
            \$this->cloner->addCasters(\$this->getCasters());
        }

        return \$this->cloner->cloneVar(\$var);
    }

    /**
     * @return callable[] The casters to add to the cloner
     */
    protected function getCasters()
    {
        \$casters = [
            '*' => function (\$v, array \$a, Stub \$s, \$isNested) {
                if (!\$v instanceof Stub) {
                    foreach (\$a as \$k => \$v) {
                        if (\\is_object(\$v) && !\$v instanceof \\DateTimeInterface && !\$v instanceof Stub) {
                            \$a[\$k] = new CutStub(\$v);
                        }
                    }
                }

                return \$a;
            },
        ] + ReflectionCaster::UNSET_CLOSURE_FILE_INFO;

        return \$casters;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['data'];
    }

    public function __wakeup()
    {
    }

    /**
     * @internal to prevent implementing \\Serializable
     */
    final protected function serialize()
    {
    }

    /**
     * @internal to prevent implementing \\Serializable
     */
    final protected function unserialize(\$data)
    {
    }
}
", "@app/vendor/symfony/http-kernel/DataCollector/DataCollector.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollector.php");
    }
}
