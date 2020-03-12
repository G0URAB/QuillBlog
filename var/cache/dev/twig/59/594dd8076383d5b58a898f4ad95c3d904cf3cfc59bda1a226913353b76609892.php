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

/* @app/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php */
class __TwigTemplate_7ac66708d946dd1acfd93df018f85e457690c535c0d24c21ae30a27cd18eab4b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Validator;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\ORM\\Mapping\\MappingException as OrmMappingException;
use Doctrine\\Persistence\\Mapping\\MappingException;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Mapping\\AutoMappingStrategy;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Loader\\AutoMappingTrait;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;

/**
 * Guesses and loads the appropriate constraints using Doctrine's metadata.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
final class DoctrineLoader implements LoaderInterface
{
    use AutoMappingTrait;

    private \$entityManager;
    private \$classValidatorRegexp;

    public function __construct(EntityManagerInterface \$entityManager, string \$classValidatorRegexp = null)
    {
        \$this->entityManager = \$entityManager;
        \$this->classValidatorRegexp = \$classValidatorRegexp;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata): bool
    {
        \$className = \$metadata->getClassName();
        try {
            \$doctrineMetadata = \$this->entityManager->getClassMetadata(\$className);
        } catch (MappingException | OrmMappingException \$exception) {
            return false;
        }

        if (!\$doctrineMetadata instanceof ClassMetadataInfo) {
            return false;
        }

        \$loaded = false;
        \$enabledForClass = \$this->isAutoMappingEnabledForClass(\$metadata, \$this->classValidatorRegexp);

        /* Available keys:
           - type
           - scale
           - length
           - unique
           - nullable
           - precision
         */
        \$existingUniqueFields = \$this->getExistingUniqueFields(\$metadata);

        // Type and nullable aren't handled here, use the PropertyInfo Loader instead.
        foreach (\$doctrineMetadata->fieldMappings as \$mapping) {
            \$enabledForProperty = \$enabledForClass;
            \$lengthConstraint = null;
            foreach (\$metadata->getPropertyMetadata(\$mapping['fieldName']) as \$propertyMetadata) {
                // Enabling or disabling auto-mapping explicitly always takes precedence
                if (AutoMappingStrategy::DISABLED === \$propertyMetadata->getAutoMappingStrategy()) {
                    continue 2;
                }
                if (AutoMappingStrategy::ENABLED === \$propertyMetadata->getAutoMappingStrategy()) {
                    \$enabledForProperty = true;
                }

                foreach (\$propertyMetadata->getConstraints() as \$constraint) {
                    if (\$constraint instanceof Length) {
                        \$lengthConstraint = \$constraint;
                    }
                }
            }

            if (!\$enabledForProperty) {
                continue;
            }

            if (true === (\$mapping['unique'] ?? false) && !isset(\$existingUniqueFields[\$mapping['fieldName']])) {
                \$metadata->addConstraint(new UniqueEntity(['fields' => \$mapping['fieldName']]));
                \$loaded = true;
            }

            if (null === (\$mapping['length'] ?? null) || !\\in_array(\$mapping['type'], ['string', 'text'], true)) {
                continue;
            }

            if (null === \$lengthConstraint) {
                if (isset(\$mapping['originalClass']) && false === strpos(\$mapping['declaredField'], '.')) {
                    \$metadata->addPropertyConstraint(\$mapping['declaredField'], new Valid());
                    \$loaded = true;
                } elseif (property_exists(\$className, \$mapping['fieldName'])) {
                    \$metadata->addPropertyConstraint(\$mapping['fieldName'], new Length(['max' => \$mapping['length']]));
                    \$loaded = true;
                }
            } elseif (null === \$lengthConstraint->max) {
                // If a Length constraint exists and no max length has been explicitly defined, set it
                \$lengthConstraint->max = \$mapping['length'];
            }
        }

        return \$loaded;
    }

    private function getExistingUniqueFields(ClassMetadata \$metadata): array
    {
        \$fields = [];
        foreach (\$metadata->getConstraints() as \$constraint) {
            if (!\$constraint instanceof UniqueEntity) {
                continue;
            }

            if (\\is_string(\$constraint->fields)) {
                \$fields[\$constraint->fields] = true;
            } elseif (\\is_array(\$constraint->fields) && 1 === \\count(\$constraint->fields)) {
                \$fields[\$constraint->fields[0]] = true;
            }
        }

        return \$fields;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php";
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

namespace Symfony\\Bridge\\Doctrine\\Validator;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;
use Doctrine\\ORM\\Mapping\\MappingException as OrmMappingException;
use Doctrine\\Persistence\\Mapping\\MappingException;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Mapping\\AutoMappingStrategy;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Loader\\AutoMappingTrait;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;

/**
 * Guesses and loads the appropriate constraints using Doctrine's metadata.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
final class DoctrineLoader implements LoaderInterface
{
    use AutoMappingTrait;

    private \$entityManager;
    private \$classValidatorRegexp;

    public function __construct(EntityManagerInterface \$entityManager, string \$classValidatorRegexp = null)
    {
        \$this->entityManager = \$entityManager;
        \$this->classValidatorRegexp = \$classValidatorRegexp;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata): bool
    {
        \$className = \$metadata->getClassName();
        try {
            \$doctrineMetadata = \$this->entityManager->getClassMetadata(\$className);
        } catch (MappingException | OrmMappingException \$exception) {
            return false;
        }

        if (!\$doctrineMetadata instanceof ClassMetadataInfo) {
            return false;
        }

        \$loaded = false;
        \$enabledForClass = \$this->isAutoMappingEnabledForClass(\$metadata, \$this->classValidatorRegexp);

        /* Available keys:
           - type
           - scale
           - length
           - unique
           - nullable
           - precision
         */
        \$existingUniqueFields = \$this->getExistingUniqueFields(\$metadata);

        // Type and nullable aren't handled here, use the PropertyInfo Loader instead.
        foreach (\$doctrineMetadata->fieldMappings as \$mapping) {
            \$enabledForProperty = \$enabledForClass;
            \$lengthConstraint = null;
            foreach (\$metadata->getPropertyMetadata(\$mapping['fieldName']) as \$propertyMetadata) {
                // Enabling or disabling auto-mapping explicitly always takes precedence
                if (AutoMappingStrategy::DISABLED === \$propertyMetadata->getAutoMappingStrategy()) {
                    continue 2;
                }
                if (AutoMappingStrategy::ENABLED === \$propertyMetadata->getAutoMappingStrategy()) {
                    \$enabledForProperty = true;
                }

                foreach (\$propertyMetadata->getConstraints() as \$constraint) {
                    if (\$constraint instanceof Length) {
                        \$lengthConstraint = \$constraint;
                    }
                }
            }

            if (!\$enabledForProperty) {
                continue;
            }

            if (true === (\$mapping['unique'] ?? false) && !isset(\$existingUniqueFields[\$mapping['fieldName']])) {
                \$metadata->addConstraint(new UniqueEntity(['fields' => \$mapping['fieldName']]));
                \$loaded = true;
            }

            if (null === (\$mapping['length'] ?? null) || !\\in_array(\$mapping['type'], ['string', 'text'], true)) {
                continue;
            }

            if (null === \$lengthConstraint) {
                if (isset(\$mapping['originalClass']) && false === strpos(\$mapping['declaredField'], '.')) {
                    \$metadata->addPropertyConstraint(\$mapping['declaredField'], new Valid());
                    \$loaded = true;
                } elseif (property_exists(\$className, \$mapping['fieldName'])) {
                    \$metadata->addPropertyConstraint(\$mapping['fieldName'], new Length(['max' => \$mapping['length']]));
                    \$loaded = true;
                }
            } elseif (null === \$lengthConstraint->max) {
                // If a Length constraint exists and no max length has been explicitly defined, set it
                \$lengthConstraint->max = \$mapping['length'];
            }
        }

        return \$loaded;
    }

    private function getExistingUniqueFields(ClassMetadata \$metadata): array
    {
        \$fields = [];
        foreach (\$metadata->getConstraints() as \$constraint) {
            if (!\$constraint instanceof UniqueEntity) {
                continue;
            }

            if (\\is_string(\$constraint->fields)) {
                \$fields[\$constraint->fields] = true;
            } elseif (\\is_array(\$constraint->fields) && 1 === \\count(\$constraint->fields)) {
                \$fields[\$constraint->fields[0]] = true;
            }
        }

        return \$fields;
    }
}
", "@app/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Validator\\DoctrineLoader.php");
    }
}
