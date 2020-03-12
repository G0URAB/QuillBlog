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

/* @app/vendor/symfony/dependency-injection/Argument/ServiceLocatorArgument.php */
class __TwigTemplate_4a08d8ccdb3bffc1266c56477a06a0e1f4917d35653879b0a371dedc05ee8223 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Argument/ServiceLocatorArgument.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Argument;

use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Represents a closure acting as a service locator.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ServiceLocatorArgument implements ArgumentInterface
{
    use ReferenceSetArgumentTrait;

    private \$taggedIteratorArgument;

    /**
     * @param Reference[]|TaggedIteratorArgument \$values
     */
    public function __construct(\$values = [])
    {
        if (\$values instanceof TaggedIteratorArgument) {
            \$this->taggedIteratorArgument = \$values;
            \$this->values = [];
        } else {
            \$this->setValues(\$values);
        }
    }

    public function getTaggedIteratorArgument(): ?TaggedIteratorArgument
    {
        return \$this->taggedIteratorArgument;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Argument/ServiceLocatorArgument.php";
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

namespace Symfony\\Component\\DependencyInjection\\Argument;

use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Represents a closure acting as a service locator.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ServiceLocatorArgument implements ArgumentInterface
{
    use ReferenceSetArgumentTrait;

    private \$taggedIteratorArgument;

    /**
     * @param Reference[]|TaggedIteratorArgument \$values
     */
    public function __construct(\$values = [])
    {
        if (\$values instanceof TaggedIteratorArgument) {
            \$this->taggedIteratorArgument = \$values;
            \$this->values = [];
        } else {
            \$this->setValues(\$values);
        }
    }

    public function getTaggedIteratorArgument(): ?TaggedIteratorArgument
    {
        return \$this->taggedIteratorArgument;
    }
}
", "@app/vendor/symfony/dependency-injection/Argument/ServiceLocatorArgument.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Argument\\ServiceLocatorArgument.php");
    }
}
