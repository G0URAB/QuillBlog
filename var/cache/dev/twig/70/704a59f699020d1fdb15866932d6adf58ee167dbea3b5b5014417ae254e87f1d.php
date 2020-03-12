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

/* @app/vendor/symfony/maker-bundle/src/Util/ClassNameDetails.php */
class __TwigTemplate_ce2c2fdf9769d55811746890bd67768b0c0f5237e20c6b803defa894830dbfea extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Util/ClassNameDetails.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Util;

use Symfony\\Bundle\\MakerBundle\\Str;

final class ClassNameDetails
{
    private \$fullClassName;

    private \$namespacePrefix;

    private \$suffix;

    public function __construct(string \$fullClassName, string \$namespacePrefix, string \$suffix = null)
    {
        \$this->fullClassName = \$fullClassName;
        \$this->namespacePrefix = trim(\$namespacePrefix, '\\\\');
        \$this->suffix = \$suffix;
    }

    public function getFullName(): string
    {
        return \$this->fullClassName;
    }

    public function getShortName(): string
    {
        return Str::getShortClassName(\$this->fullClassName);
    }

    /**
     * Returns the original class name the user entered (after
     * being cleaned up).
     *
     * For example, assuming the namespace is App\\Entity:
     *      App\\Entity\\Admin\\User => Admin\\User
     */
    public function getRelativeName(): string
    {
        return str_replace(\$this->namespacePrefix.'\\\\', '', \$this->fullClassName);
    }

    public function getRelativeNameWithoutSuffix(): string
    {
        return Str::removeSuffix(\$this->getRelativeName(), \$this->suffix);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Util/ClassNameDetails.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Util;

use Symfony\\Bundle\\MakerBundle\\Str;

final class ClassNameDetails
{
    private \$fullClassName;

    private \$namespacePrefix;

    private \$suffix;

    public function __construct(string \$fullClassName, string \$namespacePrefix, string \$suffix = null)
    {
        \$this->fullClassName = \$fullClassName;
        \$this->namespacePrefix = trim(\$namespacePrefix, '\\\\');
        \$this->suffix = \$suffix;
    }

    public function getFullName(): string
    {
        return \$this->fullClassName;
    }

    public function getShortName(): string
    {
        return Str::getShortClassName(\$this->fullClassName);
    }

    /**
     * Returns the original class name the user entered (after
     * being cleaned up).
     *
     * For example, assuming the namespace is App\\Entity:
     *      App\\Entity\\Admin\\User => Admin\\User
     */
    public function getRelativeName(): string
    {
        return str_replace(\$this->namespacePrefix.'\\\\', '', \$this->fullClassName);
    }

    public function getRelativeNameWithoutSuffix(): string
    {
        return Str::removeSuffix(\$this->getRelativeName(), \$this->suffix);
    }
}
", "@app/vendor/symfony/maker-bundle/src/Util/ClassNameDetails.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Util\\ClassNameDetails.php");
    }
}
