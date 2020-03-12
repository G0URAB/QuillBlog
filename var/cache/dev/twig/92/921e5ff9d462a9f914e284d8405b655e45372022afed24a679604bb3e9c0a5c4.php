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

/* @app/vendor/symfony/var-dumper/Dumper/ServerDumper.php */
class __TwigTemplate_77161d0a541c8225b9a071b990151f463d47f087c4c1d60a79b0d2accf642e89 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Dumper/ServerDumper.php"));

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
use Symfony\\Component\\VarDumper\\Server\\Connection;

/**
 * ServerDumper forwards serialized Data clones to a server.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ServerDumper implements DataDumperInterface
{
    private \$connection;
    private \$wrappedDumper;

    /**
     * @param string                     \$host             The server host
     * @param DataDumperInterface|null   \$wrappedDumper    A wrapped instance used whenever we failed contacting the server
     * @param ContextProviderInterface[] \$contextProviders Context providers indexed by context name
     */
    public function __construct(string \$host, DataDumperInterface \$wrappedDumper = null, array \$contextProviders = [])
    {
        \$this->connection = new Connection(\$host, \$contextProviders);
        \$this->wrappedDumper = \$wrappedDumper;
    }

    public function getContextProviders(): array
    {
        return \$this->connection->getContextProviders();
    }

    /**
     * {@inheritdoc}
     */
    public function dump(Data \$data)
    {
        if (!\$this->connection->write(\$data) && \$this->wrappedDumper) {
            \$this->wrappedDumper->dump(\$data);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Dumper/ServerDumper.php";
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
use Symfony\\Component\\VarDumper\\Server\\Connection;

/**
 * ServerDumper forwards serialized Data clones to a server.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ServerDumper implements DataDumperInterface
{
    private \$connection;
    private \$wrappedDumper;

    /**
     * @param string                     \$host             The server host
     * @param DataDumperInterface|null   \$wrappedDumper    A wrapped instance used whenever we failed contacting the server
     * @param ContextProviderInterface[] \$contextProviders Context providers indexed by context name
     */
    public function __construct(string \$host, DataDumperInterface \$wrappedDumper = null, array \$contextProviders = [])
    {
        \$this->connection = new Connection(\$host, \$contextProviders);
        \$this->wrappedDumper = \$wrappedDumper;
    }

    public function getContextProviders(): array
    {
        return \$this->connection->getContextProviders();
    }

    /**
     * {@inheritdoc}
     */
    public function dump(Data \$data)
    {
        if (!\$this->connection->write(\$data) && \$this->wrappedDumper) {
            \$this->wrappedDumper->dump(\$data);
        }
    }
}
", "@app/vendor/symfony/var-dumper/Dumper/ServerDumper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Dumper\\ServerDumper.php");
    }
}
