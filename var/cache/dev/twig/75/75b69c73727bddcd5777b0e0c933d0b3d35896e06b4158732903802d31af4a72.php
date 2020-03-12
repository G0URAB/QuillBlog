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

/* @app/vendor/symfony/doctrine-bridge/PropertyInfo/DoctrineExtractor.php */
class __TwigTemplate_445f2f8414509772bdd378a35bae0c9aafb6ec4b4962cd85be5d52f7b7c966ed extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/PropertyInfo/DoctrineExtractor.php"));

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

namespace Symfony\\Bridge\\Doctrine\\PropertyInfo;

use Doctrine\\DBAL\\Types\\Type as DBALType;
use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\ORM\\Mapping\\MappingException as OrmMappingException;
use Doctrine\\Persistence\\Mapping\\MappingException;
use Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * Extracts data using Doctrine ORM and ODM metadata.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DoctrineExtractor implements PropertyListExtractorInterface, PropertyTypeExtractorInterface, PropertyAccessExtractorInterface
{
    private \$entityManager;
    private \$classMetadataFactory;
    private static \$useDeprecatedConstants;

    public function __construct(EntityManagerInterface \$entityManager)
    {
        \$this->entityManager = \$entityManager;

        if (null === self::\$useDeprecatedConstants) {
            self::\$useDeprecatedConstants = !class_exists(Types::class);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(string \$class, array \$context = [])
    {
        if (null === \$metadata = \$this->getMetadata(\$class)) {
            return null;
        }

        \$properties = array_merge(\$metadata->getFieldNames(), \$metadata->getAssociationNames());

        if (\$metadata instanceof ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && \$metadata->embeddedClasses) {
            \$properties = array_filter(\$properties, function (\$property) {
                return false === strpos(\$property, '.');
            });

            \$properties = array_merge(\$properties, array_keys(\$metadata->embeddedClasses));
        }

        return \$properties;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(string \$class, string \$property, array \$context = [])
    {
        if (null === \$metadata = \$this->getMetadata(\$class)) {
            return null;
        }

        if (\$metadata->hasAssociation(\$property)) {
            \$class = \$metadata->getAssociationTargetClass(\$property);

            if (\$metadata->isSingleValuedAssociation(\$property)) {
                if (\$metadata instanceof ClassMetadataInfo) {
                    \$associationMapping = \$metadata->getAssociationMapping(\$property);

                    \$nullable = \$this->isAssociationNullable(\$associationMapping);
                } else {
                    \$nullable = false;
                }

                return [new Type(Type::BUILTIN_TYPE_OBJECT, \$nullable, \$class)];
            }

            \$collectionKeyType = Type::BUILTIN_TYPE_INT;

            if (\$metadata instanceof ClassMetadataInfo) {
                \$associationMapping = \$metadata->getAssociationMapping(\$property);

                if (isset(\$associationMapping['indexBy'])) {
                    \$indexProperty = \$associationMapping['indexBy'];
                    /** @var ClassMetadataInfo \$subMetadata */
                    \$subMetadata = \$this->entityManager ? \$this->entityManager->getClassMetadata(\$associationMapping['targetEntity']) : \$this->classMetadataFactory->getMetadataFor(\$associationMapping['targetEntity']);
                    \$typeOfField = \$subMetadata->getTypeOfField(\$indexProperty);

                    if (null === \$typeOfField) {
                        \$associationMapping = \$subMetadata->getAssociationMapping(\$indexProperty);

                        /** @var ClassMetadataInfo \$subMetadata */
                        \$indexProperty = \$subMetadata->getSingleAssociationReferencedJoinColumnName(\$indexProperty);
                        \$subMetadata = \$this->entityManager ? \$this->entityManager->getClassMetadata(\$associationMapping['targetEntity']) : \$this->classMetadataFactory->getMetadataFor(\$associationMapping['targetEntity']);
                        \$typeOfField = \$subMetadata->getTypeOfField(\$indexProperty);
                    }

                    if (!\$collectionKeyType = \$this->getPhpType(\$typeOfField)) {
                        return null;
                    }
                }
            }

            return [new Type(
                Type::BUILTIN_TYPE_OBJECT,
                false,
                'Doctrine\\Common\\Collections\\Collection',
                true,
                new Type(\$collectionKeyType),
                new Type(Type::BUILTIN_TYPE_OBJECT, false, \$class)
            )];
        }

        if (\$metadata instanceof ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset(\$metadata->embeddedClasses[\$property])) {
            return [new Type(Type::BUILTIN_TYPE_OBJECT, false, \$metadata->embeddedClasses[\$property]['class'])];
        }

        if (\$metadata->hasField(\$property)) {
            \$typeOfField = \$metadata->getTypeOfField(\$property);

            if (!\$builtinType = \$this->getPhpType(\$typeOfField)) {
                return null;
            }

            \$nullable = \$metadata instanceof ClassMetadataInfo && \$metadata->isNullable(\$property);

            switch (\$builtinType) {
                case Type::BUILTIN_TYPE_OBJECT:
                    switch (\$typeOfField) {
                        case self::\$useDeprecatedConstants ? DBALType::DATE : Types::DATE_MUTABLE:
                        case self::\$useDeprecatedConstants ? DBALType::DATETIME : Types::DATETIME_MUTABLE:
                        case self::\$useDeprecatedConstants ? DBALType::DATETIMETZ : Types::DATETIMETZ_MUTABLE:
                        case 'vardatetime':
                        case self::\$useDeprecatedConstants ? DBALType::TIME : Types::TIME_MUTABLE:
                            return [new Type(Type::BUILTIN_TYPE_OBJECT, \$nullable, 'DateTime')];

                        case 'date_immutable':
                        case 'datetime_immutable':
                        case 'datetimetz_immutable':
                        case 'time_immutable':
                            return [new Type(Type::BUILTIN_TYPE_OBJECT, \$nullable, 'DateTimeImmutable')];

                        case 'dateinterval':
                            return [new Type(Type::BUILTIN_TYPE_OBJECT, \$nullable, 'DateInterval')];
                    }

                    break;
                case Type::BUILTIN_TYPE_ARRAY:
                    switch (\$typeOfField) {
                        case self::\$useDeprecatedConstants ? DBALType::TARRAY : Types::ARRAY:
                        case 'json_array':
                        case self::\$useDeprecatedConstants ? false : Types::JSON:
                            return [new Type(Type::BUILTIN_TYPE_ARRAY, \$nullable, null, true)];

                        case self::\$useDeprecatedConstants ? DBALType::SIMPLE_ARRAY : Types::SIMPLE_ARRAY:
                            return [new Type(Type::BUILTIN_TYPE_ARRAY, \$nullable, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING))];
                    }
            }

            return [new Type(\$builtinType, \$nullable)];
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable(string \$class, string \$property, array \$context = [])
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable(string \$class, string \$property, array \$context = [])
    {
        if (
            null === (\$metadata = \$this->getMetadata(\$class))
            || ClassMetadata::GENERATOR_TYPE_NONE === \$metadata->generatorType
            || !\\in_array(\$property, \$metadata->getIdentifierFieldNames(), true)
        ) {
            return null;
        }

        return false;
    }

    private function getMetadata(string \$class): ?ClassMetadata
    {
        try {
            return \$this->entityManager ? \$this->entityManager->getClassMetadata(\$class) : \$this->classMetadataFactory->getMetadataFor(\$class);
        } catch (MappingException | OrmMappingException \$exception) {
            return null;
        }
    }

    /**
     * Determines whether an association is nullable.
     *
     * @see https://github.com/doctrine/doctrine2/blob/v2.5.4/lib/Doctrine/ORM/Tools/EntityGenerator.php#L1221-L1246
     */
    private function isAssociationNullable(array \$associationMapping): bool
    {
        if (isset(\$associationMapping['id']) && \$associationMapping['id']) {
            return false;
        }

        if (!isset(\$associationMapping['joinColumns'])) {
            return true;
        }

        \$joinColumns = \$associationMapping['joinColumns'];
        foreach (\$joinColumns as \$joinColumn) {
            if (isset(\$joinColumn['nullable']) && !\$joinColumn['nullable']) {
                return false;
            }
        }

        return true;
    }

    /**
     * Gets the corresponding built-in PHP type.
     */
    private function getPhpType(string \$doctrineType): ?string
    {
        switch (\$doctrineType) {
            case self::\$useDeprecatedConstants ? DBALType::SMALLINT : Types::SMALLINT:
            case self::\$useDeprecatedConstants ? DBALType::INTEGER : Types::INTEGER:
                return Type::BUILTIN_TYPE_INT;

            case self::\$useDeprecatedConstants ? DBALType::FLOAT : Types::FLOAT:
                return Type::BUILTIN_TYPE_FLOAT;

            case self::\$useDeprecatedConstants ? DBALType::BIGINT : Types::BIGINT:
            case self::\$useDeprecatedConstants ? DBALType::STRING : Types::STRING:
            case self::\$useDeprecatedConstants ? DBALType::TEXT : Types::TEXT:
            case self::\$useDeprecatedConstants ? DBALType::GUID : Types::GUID:
            case self::\$useDeprecatedConstants ? DBALType::DECIMAL : Types::DECIMAL:
                return Type::BUILTIN_TYPE_STRING;

            case self::\$useDeprecatedConstants ? DBALType::BOOLEAN : Types::BOOLEAN:
                return Type::BUILTIN_TYPE_BOOL;

            case self::\$useDeprecatedConstants ? DBALType::BLOB : Types::BLOB:
            case 'binary':
                return Type::BUILTIN_TYPE_RESOURCE;

            case self::\$useDeprecatedConstants ? DBALType::OBJECT : Types::OBJECT:
            case self::\$useDeprecatedConstants ? DBALType::DATE : Types::DATE_MUTABLE:
            case self::\$useDeprecatedConstants ? DBALType::DATETIME : Types::DATETIME_MUTABLE:
            case self::\$useDeprecatedConstants ? DBALType::DATETIMETZ : Types::DATETIMETZ_MUTABLE:
            case 'vardatetime':
            case self::\$useDeprecatedConstants ? DBALType::TIME : Types::TIME_MUTABLE:
            case 'date_immutable':
            case 'datetime_immutable':
            case 'datetimetz_immutable':
            case 'time_immutable':
            case 'dateinterval':
                return Type::BUILTIN_TYPE_OBJECT;

            case self::\$useDeprecatedConstants ? DBALType::TARRAY : Types::ARRAY:
            case self::\$useDeprecatedConstants ? DBALType::SIMPLE_ARRAY : Types::SIMPLE_ARRAY:
            case 'json_array':
            case self::\$useDeprecatedConstants ? false : Types::JSON:
                return Type::BUILTIN_TYPE_ARRAY;
        }

        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/PropertyInfo/DoctrineExtractor.php";
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

namespace Symfony\\Bridge\\Doctrine\\PropertyInfo;

use Doctrine\\DBAL\\Types\\Type as DBALType;
use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\ORM\\Mapping\\MappingException as OrmMappingException;
use Doctrine\\Persistence\\Mapping\\MappingException;
use Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * Extracts data using Doctrine ORM and ODM metadata.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DoctrineExtractor implements PropertyListExtractorInterface, PropertyTypeExtractorInterface, PropertyAccessExtractorInterface
{
    private \$entityManager;
    private \$classMetadataFactory;
    private static \$useDeprecatedConstants;

    public function __construct(EntityManagerInterface \$entityManager)
    {
        \$this->entityManager = \$entityManager;

        if (null === self::\$useDeprecatedConstants) {
            self::\$useDeprecatedConstants = !class_exists(Types::class);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(string \$class, array \$context = [])
    {
        if (null === \$metadata = \$this->getMetadata(\$class)) {
            return null;
        }

        \$properties = array_merge(\$metadata->getFieldNames(), \$metadata->getAssociationNames());

        if (\$metadata instanceof ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && \$metadata->embeddedClasses) {
            \$properties = array_filter(\$properties, function (\$property) {
                return false === strpos(\$property, '.');
            });

            \$properties = array_merge(\$properties, array_keys(\$metadata->embeddedClasses));
        }

        return \$properties;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(string \$class, string \$property, array \$context = [])
    {
        if (null === \$metadata = \$this->getMetadata(\$class)) {
            return null;
        }

        if (\$metadata->hasAssociation(\$property)) {
            \$class = \$metadata->getAssociationTargetClass(\$property);

            if (\$metadata->isSingleValuedAssociation(\$property)) {
                if (\$metadata instanceof ClassMetadataInfo) {
                    \$associationMapping = \$metadata->getAssociationMapping(\$property);

                    \$nullable = \$this->isAssociationNullable(\$associationMapping);
                } else {
                    \$nullable = false;
                }

                return [new Type(Type::BUILTIN_TYPE_OBJECT, \$nullable, \$class)];
            }

            \$collectionKeyType = Type::BUILTIN_TYPE_INT;

            if (\$metadata instanceof ClassMetadataInfo) {
                \$associationMapping = \$metadata->getAssociationMapping(\$property);

                if (isset(\$associationMapping['indexBy'])) {
                    \$indexProperty = \$associationMapping['indexBy'];
                    /** @var ClassMetadataInfo \$subMetadata */
                    \$subMetadata = \$this->entityManager ? \$this->entityManager->getClassMetadata(\$associationMapping['targetEntity']) : \$this->classMetadataFactory->getMetadataFor(\$associationMapping['targetEntity']);
                    \$typeOfField = \$subMetadata->getTypeOfField(\$indexProperty);

                    if (null === \$typeOfField) {
                        \$associationMapping = \$subMetadata->getAssociationMapping(\$indexProperty);

                        /** @var ClassMetadataInfo \$subMetadata */
                        \$indexProperty = \$subMetadata->getSingleAssociationReferencedJoinColumnName(\$indexProperty);
                        \$subMetadata = \$this->entityManager ? \$this->entityManager->getClassMetadata(\$associationMapping['targetEntity']) : \$this->classMetadataFactory->getMetadataFor(\$associationMapping['targetEntity']);
                        \$typeOfField = \$subMetadata->getTypeOfField(\$indexProperty);
                    }

                    if (!\$collectionKeyType = \$this->getPhpType(\$typeOfField)) {
                        return null;
                    }
                }
            }

            return [new Type(
                Type::BUILTIN_TYPE_OBJECT,
                false,
                'Doctrine\\Common\\Collections\\Collection',
                true,
                new Type(\$collectionKeyType),
                new Type(Type::BUILTIN_TYPE_OBJECT, false, \$class)
            )];
        }

        if (\$metadata instanceof ClassMetadataInfo && class_exists('Doctrine\\ORM\\Mapping\\Embedded') && isset(\$metadata->embeddedClasses[\$property])) {
            return [new Type(Type::BUILTIN_TYPE_OBJECT, false, \$metadata->embeddedClasses[\$property]['class'])];
        }

        if (\$metadata->hasField(\$property)) {
            \$typeOfField = \$metadata->getTypeOfField(\$property);

            if (!\$builtinType = \$this->getPhpType(\$typeOfField)) {
                return null;
            }

            \$nullable = \$metadata instanceof ClassMetadataInfo && \$metadata->isNullable(\$property);

            switch (\$builtinType) {
                case Type::BUILTIN_TYPE_OBJECT:
                    switch (\$typeOfField) {
                        case self::\$useDeprecatedConstants ? DBALType::DATE : Types::DATE_MUTABLE:
                        case self::\$useDeprecatedConstants ? DBALType::DATETIME : Types::DATETIME_MUTABLE:
                        case self::\$useDeprecatedConstants ? DBALType::DATETIMETZ : Types::DATETIMETZ_MUTABLE:
                        case 'vardatetime':
                        case self::\$useDeprecatedConstants ? DBALType::TIME : Types::TIME_MUTABLE:
                            return [new Type(Type::BUILTIN_TYPE_OBJECT, \$nullable, 'DateTime')];

                        case 'date_immutable':
                        case 'datetime_immutable':
                        case 'datetimetz_immutable':
                        case 'time_immutable':
                            return [new Type(Type::BUILTIN_TYPE_OBJECT, \$nullable, 'DateTimeImmutable')];

                        case 'dateinterval':
                            return [new Type(Type::BUILTIN_TYPE_OBJECT, \$nullable, 'DateInterval')];
                    }

                    break;
                case Type::BUILTIN_TYPE_ARRAY:
                    switch (\$typeOfField) {
                        case self::\$useDeprecatedConstants ? DBALType::TARRAY : Types::ARRAY:
                        case 'json_array':
                        case self::\$useDeprecatedConstants ? false : Types::JSON:
                            return [new Type(Type::BUILTIN_TYPE_ARRAY, \$nullable, null, true)];

                        case self::\$useDeprecatedConstants ? DBALType::SIMPLE_ARRAY : Types::SIMPLE_ARRAY:
                            return [new Type(Type::BUILTIN_TYPE_ARRAY, \$nullable, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING))];
                    }
            }

            return [new Type(\$builtinType, \$nullable)];
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable(string \$class, string \$property, array \$context = [])
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable(string \$class, string \$property, array \$context = [])
    {
        if (
            null === (\$metadata = \$this->getMetadata(\$class))
            || ClassMetadata::GENERATOR_TYPE_NONE === \$metadata->generatorType
            || !\\in_array(\$property, \$metadata->getIdentifierFieldNames(), true)
        ) {
            return null;
        }

        return false;
    }

    private function getMetadata(string \$class): ?ClassMetadata
    {
        try {
            return \$this->entityManager ? \$this->entityManager->getClassMetadata(\$class) : \$this->classMetadataFactory->getMetadataFor(\$class);
        } catch (MappingException | OrmMappingException \$exception) {
            return null;
        }
    }

    /**
     * Determines whether an association is nullable.
     *
     * @see https://github.com/doctrine/doctrine2/blob/v2.5.4/lib/Doctrine/ORM/Tools/EntityGenerator.php#L1221-L1246
     */
    private function isAssociationNullable(array \$associationMapping): bool
    {
        if (isset(\$associationMapping['id']) && \$associationMapping['id']) {
            return false;
        }

        if (!isset(\$associationMapping['joinColumns'])) {
            return true;
        }

        \$joinColumns = \$associationMapping['joinColumns'];
        foreach (\$joinColumns as \$joinColumn) {
            if (isset(\$joinColumn['nullable']) && !\$joinColumn['nullable']) {
                return false;
            }
        }

        return true;
    }

    /**
     * Gets the corresponding built-in PHP type.
     */
    private function getPhpType(string \$doctrineType): ?string
    {
        switch (\$doctrineType) {
            case self::\$useDeprecatedConstants ? DBALType::SMALLINT : Types::SMALLINT:
            case self::\$useDeprecatedConstants ? DBALType::INTEGER : Types::INTEGER:
                return Type::BUILTIN_TYPE_INT;

            case self::\$useDeprecatedConstants ? DBALType::FLOAT : Types::FLOAT:
                return Type::BUILTIN_TYPE_FLOAT;

            case self::\$useDeprecatedConstants ? DBALType::BIGINT : Types::BIGINT:
            case self::\$useDeprecatedConstants ? DBALType::STRING : Types::STRING:
            case self::\$useDeprecatedConstants ? DBALType::TEXT : Types::TEXT:
            case self::\$useDeprecatedConstants ? DBALType::GUID : Types::GUID:
            case self::\$useDeprecatedConstants ? DBALType::DECIMAL : Types::DECIMAL:
                return Type::BUILTIN_TYPE_STRING;

            case self::\$useDeprecatedConstants ? DBALType::BOOLEAN : Types::BOOLEAN:
                return Type::BUILTIN_TYPE_BOOL;

            case self::\$useDeprecatedConstants ? DBALType::BLOB : Types::BLOB:
            case 'binary':
                return Type::BUILTIN_TYPE_RESOURCE;

            case self::\$useDeprecatedConstants ? DBALType::OBJECT : Types::OBJECT:
            case self::\$useDeprecatedConstants ? DBALType::DATE : Types::DATE_MUTABLE:
            case self::\$useDeprecatedConstants ? DBALType::DATETIME : Types::DATETIME_MUTABLE:
            case self::\$useDeprecatedConstants ? DBALType::DATETIMETZ : Types::DATETIMETZ_MUTABLE:
            case 'vardatetime':
            case self::\$useDeprecatedConstants ? DBALType::TIME : Types::TIME_MUTABLE:
            case 'date_immutable':
            case 'datetime_immutable':
            case 'datetimetz_immutable':
            case 'time_immutable':
            case 'dateinterval':
                return Type::BUILTIN_TYPE_OBJECT;

            case self::\$useDeprecatedConstants ? DBALType::TARRAY : Types::ARRAY:
            case self::\$useDeprecatedConstants ? DBALType::SIMPLE_ARRAY : Types::SIMPLE_ARRAY:
            case 'json_array':
            case self::\$useDeprecatedConstants ? false : Types::JSON:
                return Type::BUILTIN_TYPE_ARRAY;
        }

        return null;
    }
}
", "@app/vendor/symfony/doctrine-bridge/PropertyInfo/DoctrineExtractor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\PropertyInfo\\DoctrineExtractor.php");
    }
}
