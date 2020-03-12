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

/* @app/vendor/symfony/doctrine-bridge/DataCollector/ObjectParameter.php */
class __TwigTemplate_66a53752f60f8123e5b32c8c319c30011b85525bdab666a1bf65dd5a8c92acc7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/DataCollector/ObjectParameter.php"));

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

namespace Symfony\\Bridge\\Doctrine\\DataCollector;

final class ObjectParameter
{
    private \$object;
    private \$error;
    private \$stringable;
    private \$class;

    /**
     * @param object \$object
     */
    public function __construct(\$object, ?\\Throwable \$error)
    {
        \$this->object = \$object;
        \$this->error = \$error;
        \$this->stringable = \\is_callable([\$object, '__toString']);
        \$this->class = \\get_class(\$object);
    }

    /**
     * @return object
     */
    public function getObject()
    {
        return \$this->object;
    }

    public function getError(): ?\\Throwable
    {
        return \$this->error;
    }

    public function isStringable(): bool
    {
        return \$this->stringable;
    }

    public function getClass(): string
    {
        return \$this->class;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/DataCollector/ObjectParameter.php";
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

namespace Symfony\\Bridge\\Doctrine\\DataCollector;

final class ObjectParameter
{
    private \$object;
    private \$error;
    private \$stringable;
    private \$class;

    /**
     * @param object \$object
     */
    public function __construct(\$object, ?\\Throwable \$error)
    {
        \$this->object = \$object;
        \$this->error = \$error;
        \$this->stringable = \\is_callable([\$object, '__toString']);
        \$this->class = \\get_class(\$object);
    }

    /**
     * @return object
     */
    public function getObject()
    {
        return \$this->object;
    }

    public function getError(): ?\\Throwable
    {
        return \$this->error;
    }

    public function isStringable(): bool
    {
        return \$this->stringable;
    }

    public function getClass(): string
    {
        return \$this->class;
    }
}
", "@app/vendor/symfony/doctrine-bridge/DataCollector/ObjectParameter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\DataCollector\\ObjectParameter.php");
    }
}
