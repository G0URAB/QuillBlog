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

/* @app/vendor/symfony/routing/Loader/GlobFileLoader.php */
class __TwigTemplate_6480594ddcf050c5bdc7a4d7e008181210d03bc701cc096ca249d8598f380f0f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/Loader/GlobFileLoader.php"));

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

namespace Symfony\\Component\\Routing\\Loader;

use Symfony\\Component\\Config\\Loader\\FileLoader;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * GlobFileLoader loads files from a glob pattern.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class GlobFileLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, string \$type = null)
    {
        \$collection = new RouteCollection();

        foreach (\$this->glob(\$resource, false, \$globResource) as \$path => \$info) {
            \$collection->addCollection(\$this->import(\$path));
        }

        \$collection->addResource(\$globResource);

        return \$collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        return 'glob' === \$type;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/routing/Loader/GlobFileLoader.php";
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

namespace Symfony\\Component\\Routing\\Loader;

use Symfony\\Component\\Config\\Loader\\FileLoader;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * GlobFileLoader loads files from a glob pattern.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class GlobFileLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, string \$type = null)
    {
        \$collection = new RouteCollection();

        foreach (\$this->glob(\$resource, false, \$globResource) as \$path => \$info) {
            \$collection->addCollection(\$this->import(\$path));
        }

        \$collection->addResource(\$globResource);

        return \$collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        return 'glob' === \$type;
    }
}
", "@app/vendor/symfony/routing/Loader/GlobFileLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\Loader\\GlobFileLoader.php");
    }
}
