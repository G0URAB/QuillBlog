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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/TagTrait.php */
class __TwigTemplate_f2b5cab0e0237060b9a296fe85717b37605e3b59471cb206c8a080fe5ea973d6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/TagTrait.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\Traits;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait TagTrait
{
    /**
     * Adds a tag for this definition.
     *
     * @return \$this
     */
    final public function tag(string \$name, array \$attributes = []): self
    {
        if ('' === \$name) {
            throw new InvalidArgumentException(sprintf('The tag name for service \"%s\" must be a non-empty string.', \$this->id));
        }

        foreach (\$attributes as \$attribute => \$value) {
            if (!is_scalar(\$value) && null !== \$value) {
                throw new InvalidArgumentException(sprintf('A tag attribute must be of a scalar-type for service \"%s\", tag \"%s\", attribute \"%s\".', \$this->id, \$name, \$attribute));
            }
        }

        \$this->definition->addTag(\$name, \$attributes);

        return \$this;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/TagTrait.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\Traits;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait TagTrait
{
    /**
     * Adds a tag for this definition.
     *
     * @return \$this
     */
    final public function tag(string \$name, array \$attributes = []): self
    {
        if ('' === \$name) {
            throw new InvalidArgumentException(sprintf('The tag name for service \"%s\" must be a non-empty string.', \$this->id));
        }

        foreach (\$attributes as \$attribute => \$value) {
            if (!is_scalar(\$value) && null !== \$value) {
                throw new InvalidArgumentException(sprintf('A tag attribute must be of a scalar-type for service \"%s\", tag \"%s\", attribute \"%s\".', \$this->id, \$name, \$attribute));
            }
        }

        \$this->definition->addTag(\$name, \$attributes);

        return \$this;
    }
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/Traits/TagTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\Traits\\TagTrait.php");
    }
}
