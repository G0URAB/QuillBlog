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

/* @app/vendor/zendframework/zend-code/src/DeclareStatement.php */
class __TwigTemplate_dba5e159ec724137c8e5c5fda0054789ab2fa0417ec130f6fda640bbd86239d9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/DeclareStatement.php"));

        // line 1
        echo "<?php

namespace Zend\\Code;

use Zend\\Code\\Exception\\InvalidArgumentException;

class DeclareStatement
{
    public const TICKS = 'ticks';
    public const STRICT_TYPES = 'strict_types';
    public const ENCODING = 'encoding';

    private const ALLOWED = [
        self::TICKS        => 'integer',
        self::STRICT_TYPES => 'integer',
        self::ENCODING     => 'string',
    ];

    /**
     * @var string
     */
    protected \$directive;

    /**
     * @var int|string
     */
    protected \$value;

    private function __construct(string \$directive, \$value)
    {
        \$this->directive = \$directive;
        \$this->value = \$value;
    }

    /**
     * @return string
     */
    public function getDirective(): string
    {
        return \$this->directive;
    }

    /**
     * @return int|string
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * @param int \$value
     * @return self
     */
    public static function ticks(int \$value): self
    {
        return new self(self::TICKS, \$value);
    }

    /**
     * @param int \$value
     * @return self
     */
    public static function strictTypes(int \$value): self
    {
        return new self(self::STRICT_TYPES, \$value);
    }

    /**
     * @param string \$value
     * @return self
     */
    public static function encoding(string \$value): self
    {
        return new self(self::ENCODING, \$value);
    }

    public static function fromArray(array \$config): self
    {
        \$directive = key(\$config);
        \$value = \$config[\$directive];

        if (! isset(self::ALLOWED[\$directive])) {
            throw new InvalidArgumentException(
                sprintf(
                    'Declare directive must be one of: %s.',
                    implode(', ', array_keys(self::ALLOWED))
                )
            );
        }

        if (gettype(\$value) !== self::ALLOWED[\$directive]) {
            throw new InvalidArgumentException(
                sprintf(
                    'Declare value invalid. Expected %s, got %s.',
                    self::ALLOWED[\$directive],
                    gettype(\$value)
                )
            );
        }

        \$method = str_replace('_', '', lcfirst(ucwords(\$directive, '_')));

        return self::{\$method}(\$value);
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        \$value = is_string(\$this->value) ? '\\'' . \$this->value . '\\'' : \$this->value;

        return sprintf('declare(%s=%s);', \$this->directive, \$value);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/DeclareStatement.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Zend\\Code;

use Zend\\Code\\Exception\\InvalidArgumentException;

class DeclareStatement
{
    public const TICKS = 'ticks';
    public const STRICT_TYPES = 'strict_types';
    public const ENCODING = 'encoding';

    private const ALLOWED = [
        self::TICKS        => 'integer',
        self::STRICT_TYPES => 'integer',
        self::ENCODING     => 'string',
    ];

    /**
     * @var string
     */
    protected \$directive;

    /**
     * @var int|string
     */
    protected \$value;

    private function __construct(string \$directive, \$value)
    {
        \$this->directive = \$directive;
        \$this->value = \$value;
    }

    /**
     * @return string
     */
    public function getDirective(): string
    {
        return \$this->directive;
    }

    /**
     * @return int|string
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * @param int \$value
     * @return self
     */
    public static function ticks(int \$value): self
    {
        return new self(self::TICKS, \$value);
    }

    /**
     * @param int \$value
     * @return self
     */
    public static function strictTypes(int \$value): self
    {
        return new self(self::STRICT_TYPES, \$value);
    }

    /**
     * @param string \$value
     * @return self
     */
    public static function encoding(string \$value): self
    {
        return new self(self::ENCODING, \$value);
    }

    public static function fromArray(array \$config): self
    {
        \$directive = key(\$config);
        \$value = \$config[\$directive];

        if (! isset(self::ALLOWED[\$directive])) {
            throw new InvalidArgumentException(
                sprintf(
                    'Declare directive must be one of: %s.',
                    implode(', ', array_keys(self::ALLOWED))
                )
            );
        }

        if (gettype(\$value) !== self::ALLOWED[\$directive]) {
            throw new InvalidArgumentException(
                sprintf(
                    'Declare value invalid. Expected %s, got %s.',
                    self::ALLOWED[\$directive],
                    gettype(\$value)
                )
            );
        }

        \$method = str_replace('_', '', lcfirst(ucwords(\$directive, '_')));

        return self::{\$method}(\$value);
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        \$value = is_string(\$this->value) ? '\\'' . \$this->value . '\\'' : \$this->value;

        return sprintf('declare(%s=%s);', \$this->directive, \$value);
    }
}
", "@app/vendor/zendframework/zend-code/src/DeclareStatement.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\DeclareStatement.php");
    }
}
