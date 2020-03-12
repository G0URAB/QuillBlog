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

/* @app/vendor/symfony/maker-bundle/src/Util/ClassDetails.php */
class __TwigTemplate_c962f3198074761a6ffae86ba5f8869972406b26a87bad6197788ff2a9dd12b8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Util/ClassDetails.php"));

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

/**
 * @internal
 */
final class ClassDetails
{
    private \$fullClassName;

    public function __construct(string \$fullClassName)
    {
        \$this->fullClassName = \$fullClassName;
    }

    /**
     * Get list of property names except \"id\" for use in a make:form context.
     */
    public function getFormFields(): array
    {
        \$properties = \$this->getProperties();

        \$fields = array_diff(\$properties, ['id']);

        \$fieldsWithTypes = [];
        foreach (\$fields as \$field) {
            \$fieldsWithTypes[\$field] = null;
        }

        return \$fieldsWithTypes;
    }

    private function getProperties(): array
    {
        \$reflect = new \\ReflectionClass(\$this->fullClassName);
        \$props = \$reflect->getProperties();

        \$propertiesList = [];

        foreach (\$props as \$prop) {
            \$propertiesList[] = \$prop->getName();
        }

        return \$propertiesList;
    }

    public function getPath(): string
    {
        return (new \\ReflectionClass(\$this->fullClassName))->getFileName();
    }

    /**
     * An imperfect, but simple way to check for the presence of an annotation.
     *
     * @param string \$annotation The annotation - e.g. @UniqueEntity
     */
    public function doesDocBlockContainAnnotation(string \$annotation): bool
    {
        \$docComment = (new \\ReflectionClass(\$this->fullClassName))->getDocComment();

        if (false === \$docComment) {
            return false;
        }

        return false !== strpos(\$docComment, \$annotation);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Util/ClassDetails.php";
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

/**
 * @internal
 */
final class ClassDetails
{
    private \$fullClassName;

    public function __construct(string \$fullClassName)
    {
        \$this->fullClassName = \$fullClassName;
    }

    /**
     * Get list of property names except \"id\" for use in a make:form context.
     */
    public function getFormFields(): array
    {
        \$properties = \$this->getProperties();

        \$fields = array_diff(\$properties, ['id']);

        \$fieldsWithTypes = [];
        foreach (\$fields as \$field) {
            \$fieldsWithTypes[\$field] = null;
        }

        return \$fieldsWithTypes;
    }

    private function getProperties(): array
    {
        \$reflect = new \\ReflectionClass(\$this->fullClassName);
        \$props = \$reflect->getProperties();

        \$propertiesList = [];

        foreach (\$props as \$prop) {
            \$propertiesList[] = \$prop->getName();
        }

        return \$propertiesList;
    }

    public function getPath(): string
    {
        return (new \\ReflectionClass(\$this->fullClassName))->getFileName();
    }

    /**
     * An imperfect, but simple way to check for the presence of an annotation.
     *
     * @param string \$annotation The annotation - e.g. @UniqueEntity
     */
    public function doesDocBlockContainAnnotation(string \$annotation): bool
    {
        \$docComment = (new \\ReflectionClass(\$this->fullClassName))->getDocComment();

        if (false === \$docComment) {
            return false;
        }

        return false !== strpos(\$docComment, \$annotation);
    }
}
", "@app/vendor/symfony/maker-bundle/src/Util/ClassDetails.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Util\\ClassDetails.php");
    }
}
