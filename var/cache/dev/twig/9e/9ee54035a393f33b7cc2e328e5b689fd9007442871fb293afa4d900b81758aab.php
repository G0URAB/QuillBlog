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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php */
class __TwigTemplate_6145dcb01f0c39ce01a9ae5bf81ecc83d554c71db27c3144475ec3bf3a1244a6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\GeneratorStrategy;

use Zend\\Code\\Generator\\ClassGenerator;

/**
 * Generator strategy that produces the code and evaluates it at runtime
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class EvaluatingGeneratorStrategy implements GeneratorStrategyInterface
{
    /**
     * @var bool flag indicating whether {@see eval} can be used
     */
    private \$canEval = true;

    /**
     * Constructor
     */
    public function __construct()
    {
        // @codeCoverageIgnoreStart
        \$this->canEval = ! ini_get('suhosin.executor.disable_eval');
        // @codeCoverageIgnoreEnd
    }

    /**
     * Evaluates the generated code before returning it
     *
     * {@inheritDoc}
     */
    public function generate(ClassGenerator \$classGenerator) : string
    {
        \$code = \$classGenerator->generate();

        // @codeCoverageIgnoreStart
        if (! \$this->canEval) {
            \$fileName = tempnam(sys_get_temp_dir(), 'EvaluatingGeneratorStrategy.php.tmp.');

            file_put_contents(\$fileName, \"<?php\\n\" . \$code);
            /* @noinspection PhpIncludeInspection */
            require \$fileName;
            unlink(\$fileName);

            return \$code;
        }
        // @codeCoverageIgnoreEnd

        eval(\$code);

        return \$code;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\GeneratorStrategy;

use Zend\\Code\\Generator\\ClassGenerator;

/**
 * Generator strategy that produces the code and evaluates it at runtime
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class EvaluatingGeneratorStrategy implements GeneratorStrategyInterface
{
    /**
     * @var bool flag indicating whether {@see eval} can be used
     */
    private \$canEval = true;

    /**
     * Constructor
     */
    public function __construct()
    {
        // @codeCoverageIgnoreStart
        \$this->canEval = ! ini_get('suhosin.executor.disable_eval');
        // @codeCoverageIgnoreEnd
    }

    /**
     * Evaluates the generated code before returning it
     *
     * {@inheritDoc}
     */
    public function generate(ClassGenerator \$classGenerator) : string
    {
        \$code = \$classGenerator->generate();

        // @codeCoverageIgnoreStart
        if (! \$this->canEval) {
            \$fileName = tempnam(sys_get_temp_dir(), 'EvaluatingGeneratorStrategy.php.tmp.');

            file_put_contents(\$fileName, \"<?php\\n\" . \$code);
            /* @noinspection PhpIncludeInspection */
            require \$fileName;
            unlink(\$fileName);

            return \$code;
        }
        // @codeCoverageIgnoreEnd

        eval(\$code);

        return \$code;
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\GeneratorStrategy\\EvaluatingGeneratorStrategy.php");
    }
}
