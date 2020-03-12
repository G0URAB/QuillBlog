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

/* @app/vendor/symfony/maker-bundle/src/Doctrine/EntityDetails.php */
class __TwigTemplate_08096940691ebe45fb4428a78e78fa849a6aefb3fe1dd576fce0f153cbc14e39 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Doctrine/EntityDetails.php"));

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

namespace Symfony\\Bundle\\MakerBundle\\Doctrine;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;

/**
 * @author Sadicov Vladimir <sadikoff@gmail.com>
 *
 * @internal
 */
final class EntityDetails
{
    private \$metadata;

    /**
     * @param ClassMetadata|\\Doctrine\\ORM\\Mapping\\ClassMetadata \$metadata
     */
    public function __construct(ClassMetadata \$metadata)
    {
        \$this->metadata = \$metadata;
    }

    public function getRepositoryClass()
    {
        return \$this->metadata->customRepositoryClassName;
    }

    public function getIdentifier()
    {
        return \$this->metadata->identifier[0];
    }

    public function getDisplayFields()
    {
        return \$this->metadata->fieldMappings;
    }

    public function getFormFields()
    {
        \$fields = (array) \$this->metadata->fieldNames;
        // Remove the primary key field if it's not managed manually
        if (!\$this->metadata->isIdentifierNatural()) {
            \$fields = array_diff(\$fields, \$this->metadata->identifier);
        }
        \$fields = array_values(\$fields);

        if (!empty(\$this->metadata->embeddedClasses)) {
            foreach (array_keys(\$this->metadata->embeddedClasses) as \$embeddedClassKey) {
                \$fields = array_filter(\$fields, function (\$v) use (\$embeddedClassKey) {
                    return 0 !== strpos(\$v, \$embeddedClassKey.'.');
                });
            }
        }

        foreach (\$this->metadata->associationMappings as \$fieldName => \$relation) {
            if (\\Doctrine\\ORM\\Mapping\\ClassMetadata::ONE_TO_MANY !== \$relation['type']) {
                \$fields[] = \$fieldName;
            }
        }

        \$fieldsWithTypes = [];
        foreach (\$fields as \$field) {
            \$fieldsWithTypes[\$field] = null;
        }

        return \$fieldsWithTypes;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Doctrine/EntityDetails.php";
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

namespace Symfony\\Bundle\\MakerBundle\\Doctrine;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;

/**
 * @author Sadicov Vladimir <sadikoff@gmail.com>
 *
 * @internal
 */
final class EntityDetails
{
    private \$metadata;

    /**
     * @param ClassMetadata|\\Doctrine\\ORM\\Mapping\\ClassMetadata \$metadata
     */
    public function __construct(ClassMetadata \$metadata)
    {
        \$this->metadata = \$metadata;
    }

    public function getRepositoryClass()
    {
        return \$this->metadata->customRepositoryClassName;
    }

    public function getIdentifier()
    {
        return \$this->metadata->identifier[0];
    }

    public function getDisplayFields()
    {
        return \$this->metadata->fieldMappings;
    }

    public function getFormFields()
    {
        \$fields = (array) \$this->metadata->fieldNames;
        // Remove the primary key field if it's not managed manually
        if (!\$this->metadata->isIdentifierNatural()) {
            \$fields = array_diff(\$fields, \$this->metadata->identifier);
        }
        \$fields = array_values(\$fields);

        if (!empty(\$this->metadata->embeddedClasses)) {
            foreach (array_keys(\$this->metadata->embeddedClasses) as \$embeddedClassKey) {
                \$fields = array_filter(\$fields, function (\$v) use (\$embeddedClassKey) {
                    return 0 !== strpos(\$v, \$embeddedClassKey.'.');
                });
            }
        }

        foreach (\$this->metadata->associationMappings as \$fieldName => \$relation) {
            if (\\Doctrine\\ORM\\Mapping\\ClassMetadata::ONE_TO_MANY !== \$relation['type']) {
                \$fields[] = \$fieldName;
            }
        }

        \$fieldsWithTypes = [];
        foreach (\$fields as \$field) {
            \$fieldsWithTypes[\$field] = null;
        }

        return \$fieldsWithTypes;
    }
}
", "@app/vendor/symfony/maker-bundle/src/Doctrine/EntityDetails.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\EntityDetails.php");
    }
}
