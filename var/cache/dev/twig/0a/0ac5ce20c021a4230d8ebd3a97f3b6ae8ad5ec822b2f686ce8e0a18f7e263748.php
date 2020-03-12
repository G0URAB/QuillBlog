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

/* @app/vendor/symfony/dependency-injection/Argument/TaggedIteratorArgument.php */
class __TwigTemplate_3c1fedc5b502bcd7a239375375b4d70808d7fe17a89f34be526169faaaf2c4b1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Argument/TaggedIteratorArgument.php"));

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

/**
 * Represents a collection of services found by tag name to lazily iterate over.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class TaggedIteratorArgument extends IteratorArgument
{
    private \$tag;
    private \$indexAttribute;
    private \$defaultIndexMethod;
    private \$defaultPriorityMethod;
    private \$needsIndexes = false;

    /**
     * @param string      \$tag                   The name of the tag identifying the target services
     * @param string|null \$indexAttribute        The name of the attribute that defines the key referencing each service in the tagged collection
     * @param string|null \$defaultIndexMethod    The static method that should be called to get each service's key when their tag doesn't define the previous attribute
     * @param bool        \$needsIndexes          Whether indexes are required and should be generated when computing the map
     * @param string|null \$defaultPriorityMethod The static method that should be called to get each service's priority when their tag doesn't define the \"priority\" attribute
     */
    public function __construct(string \$tag, string \$indexAttribute = null, string \$defaultIndexMethod = null, bool \$needsIndexes = false, string \$defaultPriorityMethod = null)
    {
        parent::__construct([]);

        if (null === \$indexAttribute && \$needsIndexes) {
            \$indexAttribute = preg_match('/[^.]++\$/', \$tag, \$m) ? \$m[0] : \$tag;
        }

        \$this->tag = \$tag;
        \$this->indexAttribute = \$indexAttribute;
        \$this->defaultIndexMethod = \$defaultIndexMethod ?: ('getDefault'.str_replace(' ', '', ucwords(preg_replace('/[^a-zA-Z0-9\\x7f-\\xff]++/', ' ', \$indexAttribute ?? ''))).'Name');
        \$this->needsIndexes = \$needsIndexes;
        \$this->defaultPriorityMethod = \$defaultPriorityMethod ?: ('getDefault'.str_replace(' ', '', ucwords(preg_replace('/[^a-zA-Z0-9\\x7f-\\xff]++/', ' ', \$indexAttribute ?? ''))).'Priority');
    }

    public function getTag()
    {
        return \$this->tag;
    }

    public function getIndexAttribute(): ?string
    {
        return \$this->indexAttribute;
    }

    public function getDefaultIndexMethod(): ?string
    {
        return \$this->defaultIndexMethod;
    }

    public function needsIndexes(): bool
    {
        return \$this->needsIndexes;
    }

    public function getDefaultPriorityMethod(): ?string
    {
        return \$this->defaultPriorityMethod;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Argument/TaggedIteratorArgument.php";
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

/**
 * Represents a collection of services found by tag name to lazily iterate over.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class TaggedIteratorArgument extends IteratorArgument
{
    private \$tag;
    private \$indexAttribute;
    private \$defaultIndexMethod;
    private \$defaultPriorityMethod;
    private \$needsIndexes = false;

    /**
     * @param string      \$tag                   The name of the tag identifying the target services
     * @param string|null \$indexAttribute        The name of the attribute that defines the key referencing each service in the tagged collection
     * @param string|null \$defaultIndexMethod    The static method that should be called to get each service's key when their tag doesn't define the previous attribute
     * @param bool        \$needsIndexes          Whether indexes are required and should be generated when computing the map
     * @param string|null \$defaultPriorityMethod The static method that should be called to get each service's priority when their tag doesn't define the \"priority\" attribute
     */
    public function __construct(string \$tag, string \$indexAttribute = null, string \$defaultIndexMethod = null, bool \$needsIndexes = false, string \$defaultPriorityMethod = null)
    {
        parent::__construct([]);

        if (null === \$indexAttribute && \$needsIndexes) {
            \$indexAttribute = preg_match('/[^.]++\$/', \$tag, \$m) ? \$m[0] : \$tag;
        }

        \$this->tag = \$tag;
        \$this->indexAttribute = \$indexAttribute;
        \$this->defaultIndexMethod = \$defaultIndexMethod ?: ('getDefault'.str_replace(' ', '', ucwords(preg_replace('/[^a-zA-Z0-9\\x7f-\\xff]++/', ' ', \$indexAttribute ?? ''))).'Name');
        \$this->needsIndexes = \$needsIndexes;
        \$this->defaultPriorityMethod = \$defaultPriorityMethod ?: ('getDefault'.str_replace(' ', '', ucwords(preg_replace('/[^a-zA-Z0-9\\x7f-\\xff]++/', ' ', \$indexAttribute ?? ''))).'Priority');
    }

    public function getTag()
    {
        return \$this->tag;
    }

    public function getIndexAttribute(): ?string
    {
        return \$this->indexAttribute;
    }

    public function getDefaultIndexMethod(): ?string
    {
        return \$this->defaultIndexMethod;
    }

    public function needsIndexes(): bool
    {
        return \$this->needsIndexes;
    }

    public function getDefaultPriorityMethod(): ?string
    {
        return \$this->defaultPriorityMethod;
    }
}
", "@app/vendor/symfony/dependency-injection/Argument/TaggedIteratorArgument.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Argument\\TaggedIteratorArgument.php");
    }
}
