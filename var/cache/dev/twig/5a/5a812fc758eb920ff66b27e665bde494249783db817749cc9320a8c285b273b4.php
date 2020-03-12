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

/* @app/vendor/symfony/config/Resource/ComposerResource.php */
class __TwigTemplate_26433f85abbe85ac407443347cb4415876b73afd8e27e4ce5faa70b9c97e3a9c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/Resource/ComposerResource.php"));

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

namespace Symfony\\Component\\Config\\Resource;

/**
 * ComposerResource tracks the PHP version and Composer dependencies.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class ComposerResource implements SelfCheckingResourceInterface
{
    private \$vendors;

    private static \$runtimeVendors;

    public function __construct()
    {
        self::refresh();
        \$this->vendors = self::\$runtimeVendors;
    }

    public function getVendors(): array
    {
        return array_keys(\$this->vendors);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return __CLASS__;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(int \$timestamp): bool
    {
        self::refresh();

        return array_values(self::\$runtimeVendors) === array_values(\$this->vendors);
    }

    private static function refresh()
    {
        self::\$runtimeVendors = [];

        foreach (get_declared_classes() as \$class) {
            if ('C' === \$class[0] && 0 === strpos(\$class, 'ComposerAutoloaderInit')) {
                \$r = new \\ReflectionClass(\$class);
                \$v = \\dirname(\$r->getFileName(), 2);
                if (file_exists(\$v.'/composer/installed.json')) {
                    self::\$runtimeVendors[\$v] = @filemtime(\$v.'/composer/installed.json');
                }
            }
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/config/Resource/ComposerResource.php";
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

namespace Symfony\\Component\\Config\\Resource;

/**
 * ComposerResource tracks the PHP version and Composer dependencies.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class ComposerResource implements SelfCheckingResourceInterface
{
    private \$vendors;

    private static \$runtimeVendors;

    public function __construct()
    {
        self::refresh();
        \$this->vendors = self::\$runtimeVendors;
    }

    public function getVendors(): array
    {
        return array_keys(\$this->vendors);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return __CLASS__;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(int \$timestamp): bool
    {
        self::refresh();

        return array_values(self::\$runtimeVendors) === array_values(\$this->vendors);
    }

    private static function refresh()
    {
        self::\$runtimeVendors = [];

        foreach (get_declared_classes() as \$class) {
            if ('C' === \$class[0] && 0 === strpos(\$class, 'ComposerAutoloaderInit')) {
                \$r = new \\ReflectionClass(\$class);
                \$v = \\dirname(\$r->getFileName(), 2);
                if (file_exists(\$v.'/composer/installed.json')) {
                    self::\$runtimeVendors[\$v] = @filemtime(\$v.'/composer/installed.json');
                }
            }
        }
    }
}
", "@app/vendor/symfony/config/Resource/ComposerResource.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\Resource\\ComposerResource.php");
    }
}
