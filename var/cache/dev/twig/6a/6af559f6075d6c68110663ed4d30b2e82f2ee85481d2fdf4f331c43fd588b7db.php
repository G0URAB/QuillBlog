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

/* @app/vendor/symfony/var-dumper/Dumper/ContextualizedDumper.php */
class __TwigTemplate_fd81b6015818d9cf62bbc4e833ba0561690de042be63fca1b05523d30238ea51 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Dumper/ContextualizedDumper.php"));

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

namespace Symfony\\Component\\VarDumper\\Dumper;

use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface;

/**
 * @author Kévin Thérage <therage.kevin@gmail.com>
 */
class ContextualizedDumper implements DataDumperInterface
{
    private \$wrappedDumper;
    private \$contextProviders;

    /**
     * @param ContextProviderInterface[] \$contextProviders
     */
    public function __construct(DataDumperInterface \$wrappedDumper, array \$contextProviders)
    {
        \$this->wrappedDumper = \$wrappedDumper;
        \$this->contextProviders = \$contextProviders;
    }

    public function dump(Data \$data)
    {
        \$context = [];
        foreach (\$this->contextProviders as \$contextProvider) {
            \$context[\\get_class(\$contextProvider)] = \$contextProvider->getContext();
        }

        \$this->wrappedDumper->dump(\$data->withContext(\$context));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Dumper/ContextualizedDumper.php";
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

namespace Symfony\\Component\\VarDumper\\Dumper;

use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface;

/**
 * @author Kévin Thérage <therage.kevin@gmail.com>
 */
class ContextualizedDumper implements DataDumperInterface
{
    private \$wrappedDumper;
    private \$contextProviders;

    /**
     * @param ContextProviderInterface[] \$contextProviders
     */
    public function __construct(DataDumperInterface \$wrappedDumper, array \$contextProviders)
    {
        \$this->wrappedDumper = \$wrappedDumper;
        \$this->contextProviders = \$contextProviders;
    }

    public function dump(Data \$data)
    {
        \$context = [];
        foreach (\$this->contextProviders as \$contextProvider) {
            \$context[\\get_class(\$contextProvider)] = \$contextProvider->getContext();
        }

        \$this->wrappedDumper->dump(\$data->withContext(\$context));
    }
}
", "@app/vendor/symfony/var-dumper/Dumper/ContextualizedDumper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Dumper\\ContextualizedDumper.php");
    }
}
