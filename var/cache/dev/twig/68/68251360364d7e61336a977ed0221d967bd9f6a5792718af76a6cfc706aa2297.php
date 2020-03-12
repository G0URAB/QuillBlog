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

/* @app/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadata.php */
class __TwigTemplate_06576d452d9f3b004092a1bbcc3d370c2572cea610b89691300c5e6dd3ee33d5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadata.php"));

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

namespace Symfony\\Component\\HttpKernel\\ControllerMetadata;

/**
 * Responsible for storing metadata of an argument.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
class ArgumentMetadata
{
    private \$name;
    private \$type;
    private \$isVariadic;
    private \$hasDefaultValue;
    private \$defaultValue;
    private \$isNullable;

    public function __construct(string \$name, ?string \$type, bool \$isVariadic, bool \$hasDefaultValue, \$defaultValue, bool \$isNullable = false)
    {
        \$this->name = \$name;
        \$this->type = \$type;
        \$this->isVariadic = \$isVariadic;
        \$this->hasDefaultValue = \$hasDefaultValue;
        \$this->defaultValue = \$defaultValue;
        \$this->isNullable = \$isNullable || null === \$type || (\$hasDefaultValue && null === \$defaultValue);
    }

    /**
     * Returns the name as given in PHP, \$foo would yield \"foo\".
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Returns the type of the argument.
     *
     * The type is the PHP class in 5.5+ and additionally the basic type in PHP 7.0+.
     *
     * @return string|null
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Returns whether the argument is defined as \"...\$variadic\".
     *
     * @return bool
     */
    public function isVariadic()
    {
        return \$this->isVariadic;
    }

    /**
     * Returns whether the argument has a default value.
     *
     * Implies whether an argument is optional.
     *
     * @return bool
     */
    public function hasDefaultValue()
    {
        return \$this->hasDefaultValue;
    }

    /**
     * Returns whether the argument accepts null values.
     *
     * @return bool
     */
    public function isNullable()
    {
        return \$this->isNullable;
    }

    /**
     * Returns the default value of the argument.
     *
     * @throws \\LogicException if no default value is present; {@see self::hasDefaultValue()}
     *
     * @return mixed
     */
    public function getDefaultValue()
    {
        if (!\$this->hasDefaultValue) {
            throw new \\LogicException(sprintf('Argument \$%s does not have a default value. Use %s::hasDefaultValue() to avoid this exception.', \$this->name, __CLASS__));
        }

        return \$this->defaultValue;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadata.php";
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

namespace Symfony\\Component\\HttpKernel\\ControllerMetadata;

/**
 * Responsible for storing metadata of an argument.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
class ArgumentMetadata
{
    private \$name;
    private \$type;
    private \$isVariadic;
    private \$hasDefaultValue;
    private \$defaultValue;
    private \$isNullable;

    public function __construct(string \$name, ?string \$type, bool \$isVariadic, bool \$hasDefaultValue, \$defaultValue, bool \$isNullable = false)
    {
        \$this->name = \$name;
        \$this->type = \$type;
        \$this->isVariadic = \$isVariadic;
        \$this->hasDefaultValue = \$hasDefaultValue;
        \$this->defaultValue = \$defaultValue;
        \$this->isNullable = \$isNullable || null === \$type || (\$hasDefaultValue && null === \$defaultValue);
    }

    /**
     * Returns the name as given in PHP, \$foo would yield \"foo\".
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Returns the type of the argument.
     *
     * The type is the PHP class in 5.5+ and additionally the basic type in PHP 7.0+.
     *
     * @return string|null
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Returns whether the argument is defined as \"...\$variadic\".
     *
     * @return bool
     */
    public function isVariadic()
    {
        return \$this->isVariadic;
    }

    /**
     * Returns whether the argument has a default value.
     *
     * Implies whether an argument is optional.
     *
     * @return bool
     */
    public function hasDefaultValue()
    {
        return \$this->hasDefaultValue;
    }

    /**
     * Returns whether the argument accepts null values.
     *
     * @return bool
     */
    public function isNullable()
    {
        return \$this->isNullable;
    }

    /**
     * Returns the default value of the argument.
     *
     * @throws \\LogicException if no default value is present; {@see self::hasDefaultValue()}
     *
     * @return mixed
     */
    public function getDefaultValue()
    {
        if (!\$this->hasDefaultValue) {
            throw new \\LogicException(sprintf('Argument \$%s does not have a default value. Use %s::hasDefaultValue() to avoid this exception.', \$this->name, __CLASS__));
        }

        return \$this->defaultValue;
    }
}
", "@app/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadata.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadata.php");
    }
}
