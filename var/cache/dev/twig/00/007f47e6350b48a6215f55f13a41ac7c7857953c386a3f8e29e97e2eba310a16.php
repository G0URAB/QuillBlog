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

/* @app/vendor/symfony/dependency-injection/LazyProxy/PhpDumper/DumperInterface.php */
class __TwigTemplate_cf81ef0fc3e2409fe00d2a58a225be03860c91373608e29e24f00ce50dac1830 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/LazyProxy/PhpDumper/DumperInterface.php"));

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

namespace Symfony\\Component\\DependencyInjection\\LazyProxy\\PhpDumper;

use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * Lazy proxy dumper capable of generating the instantiation logic PHP code for proxied services.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
interface DumperInterface
{
    /**
     * Inspects whether the given definitions should produce proxy instantiation logic in the dumped container.
     *
     * @return bool
     */
    public function isProxyCandidate(Definition \$definition);

    /**
     * Generates the code to be used to instantiate a proxy in the dumped factory code.
     *
     * @return string
     */
    public function getProxyFactoryCode(Definition \$definition, string \$id, string \$factoryCode);

    /**
     * Generates the code for the lazy proxy.
     *
     * @return string
     */
    public function getProxyCode(Definition \$definition);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/LazyProxy/PhpDumper/DumperInterface.php";
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

namespace Symfony\\Component\\DependencyInjection\\LazyProxy\\PhpDumper;

use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * Lazy proxy dumper capable of generating the instantiation logic PHP code for proxied services.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
interface DumperInterface
{
    /**
     * Inspects whether the given definitions should produce proxy instantiation logic in the dumped container.
     *
     * @return bool
     */
    public function isProxyCandidate(Definition \$definition);

    /**
     * Generates the code to be used to instantiate a proxy in the dumped factory code.
     *
     * @return string
     */
    public function getProxyFactoryCode(Definition \$definition, string \$id, string \$factoryCode);

    /**
     * Generates the code for the lazy proxy.
     *
     * @return string
     */
    public function getProxyCode(Definition \$definition);
}
", "@app/vendor/symfony/dependency-injection/LazyProxy/PhpDumper/DumperInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\LazyProxy\\PhpDumper\\DumperInterface.php");
    }
}
