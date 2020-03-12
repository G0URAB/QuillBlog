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

/* @app/vendor/symfony/config/Loader/DelegatingLoader.php */
class __TwigTemplate_be38ddb785ccac3b3d7d503c674960ab7d2723a5cfc38fada409c94195fc0fed extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Loader/DelegatingLoader.php"));

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

namespace Symfony\\Component\\Config\\Loader;

use Symfony\\Component\\Config\\Exception\\LoaderLoadException;

/**
 * DelegatingLoader delegates loading to other loaders using a loader resolver.
 *
 * This loader acts as an array of LoaderInterface objects - each having
 * a chance to load a given resource (handled by the resolver)
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DelegatingLoader extends Loader
{
    public function __construct(LoaderResolverInterface \$resolver)
    {
        \$this->resolver = \$resolver;
    }

    /**
     * {@inheritdoc}
     */
    public function load(\$resource, string \$type = null)
    {
        if (false === \$loader = \$this->resolver->resolve(\$resource, \$type)) {
            throw new LoaderLoadException(\$resource, null, null, null, \$type);
        }

        return \$loader->load(\$resource, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        return false !== \$this->resolver->resolve(\$resource, \$type);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Loader/DelegatingLoader.php";
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

namespace Symfony\\Component\\Config\\Loader;

use Symfony\\Component\\Config\\Exception\\LoaderLoadException;

/**
 * DelegatingLoader delegates loading to other loaders using a loader resolver.
 *
 * This loader acts as an array of LoaderInterface objects - each having
 * a chance to load a given resource (handled by the resolver)
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DelegatingLoader extends Loader
{
    public function __construct(LoaderResolverInterface \$resolver)
    {
        \$this->resolver = \$resolver;
    }

    /**
     * {@inheritdoc}
     */
    public function load(\$resource, string \$type = null)
    {
        if (false === \$loader = \$this->resolver->resolve(\$resource, \$type)) {
            throw new LoaderLoadException(\$resource, null, null, null, \$type);
        }

        return \$loader->load(\$resource, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        return false !== \$this->resolver->resolve(\$resource, \$type);
    }
}
", "@app/vendor/symfony/config/Loader/DelegatingLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Loader\\DelegatingLoader.php");
    }
}
