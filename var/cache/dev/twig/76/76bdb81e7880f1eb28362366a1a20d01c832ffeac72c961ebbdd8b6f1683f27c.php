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

/* @app/vendor/symfony/doctrine-bridge/Form/Type/EntityType.php */
class __TwigTemplate_05ff0a6471102cf9eb459d44f8a6a99f23a48a6e03003b861dd2267b5a92a975 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Form/Type/EntityType.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Form\\Type;

use Doctrine\\ORM\\Query\\Parameter;
use Doctrine\\ORM\\QueryBuilder;
use Doctrine\\Persistence\\ObjectManager;
use Symfony\\Bridge\\Doctrine\\Form\\ChoiceList\\ORMQueryBuilderLoader;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class EntityType extends DoctrineType
{
    public function configureOptions(OptionsResolver \$resolver)
    {
        parent::configureOptions(\$resolver);

        // Invoke the query builder closure so that we can cache choice lists
        // for equal query builders
        \$queryBuilderNormalizer = function (Options \$options, \$queryBuilder) {
            if (\\is_callable(\$queryBuilder)) {
                \$queryBuilder = \$queryBuilder(\$options['em']->getRepository(\$options['class']));

                if (null !== \$queryBuilder && !\$queryBuilder instanceof QueryBuilder) {
                    throw new UnexpectedTypeException(\$queryBuilder, 'Doctrine\\ORM\\QueryBuilder');
                }
            }

            return \$queryBuilder;
        };

        \$resolver->setNormalizer('query_builder', \$queryBuilderNormalizer);
        \$resolver->setAllowedTypes('query_builder', ['null', 'callable', 'Doctrine\\ORM\\QueryBuilder']);
    }

    /**
     * Return the default loader object.
     *
     * @param QueryBuilder \$queryBuilder
     *
     * @return ORMQueryBuilderLoader
     */
    public function getLoader(ObjectManager \$manager, \$queryBuilder, string \$class)
    {
        if (!\$queryBuilder instanceof QueryBuilder) {
            throw new \\TypeError(sprintf('Expected an instance of %s, but got %s.', QueryBuilder::class, \\is_object(\$queryBuilder) ? \\get_class(\$queryBuilder) : \\gettype(\$queryBuilder)));
        }

        return new ORMQueryBuilderLoader(\$queryBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entity';
    }

    /**
     * We consider two query builders with an equal SQL string and
     * equal parameters to be equal.
     *
     * @param QueryBuilder \$queryBuilder
     *
     * @internal This method is public to be usable as callback. It should not
     *           be used in user code.
     */
    public function getQueryBuilderPartsForCachingHash(\$queryBuilder): ?array
    {
        if (!\$queryBuilder instanceof QueryBuilder) {
            throw new \\TypeError(sprintf('Expected an instance of %s, but got %s.', QueryBuilder::class, \\is_object(\$queryBuilder) ? \\get_class(\$queryBuilder) : \\gettype(\$queryBuilder)));
        }

        return [
            \$queryBuilder->getQuery()->getSQL(),
            array_map([\$this, 'parameterToArray'], \$queryBuilder->getParameters()->toArray()),
        ];
    }

    /**
     * Converts a query parameter to an array.
     */
    private function parameterToArray(Parameter \$parameter): array
    {
        return [\$parameter->getName(), \$parameter->getType(), \$parameter->getValue()];
    }
}

interface_exists(ObjectManager::class);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Form/Type/EntityType.php";
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

namespace Symfony\\Bridge\\Doctrine\\Form\\Type;

use Doctrine\\ORM\\Query\\Parameter;
use Doctrine\\ORM\\QueryBuilder;
use Doctrine\\Persistence\\ObjectManager;
use Symfony\\Bridge\\Doctrine\\Form\\ChoiceList\\ORMQueryBuilderLoader;
use Symfony\\Component\\Form\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class EntityType extends DoctrineType
{
    public function configureOptions(OptionsResolver \$resolver)
    {
        parent::configureOptions(\$resolver);

        // Invoke the query builder closure so that we can cache choice lists
        // for equal query builders
        \$queryBuilderNormalizer = function (Options \$options, \$queryBuilder) {
            if (\\is_callable(\$queryBuilder)) {
                \$queryBuilder = \$queryBuilder(\$options['em']->getRepository(\$options['class']));

                if (null !== \$queryBuilder && !\$queryBuilder instanceof QueryBuilder) {
                    throw new UnexpectedTypeException(\$queryBuilder, 'Doctrine\\ORM\\QueryBuilder');
                }
            }

            return \$queryBuilder;
        };

        \$resolver->setNormalizer('query_builder', \$queryBuilderNormalizer);
        \$resolver->setAllowedTypes('query_builder', ['null', 'callable', 'Doctrine\\ORM\\QueryBuilder']);
    }

    /**
     * Return the default loader object.
     *
     * @param QueryBuilder \$queryBuilder
     *
     * @return ORMQueryBuilderLoader
     */
    public function getLoader(ObjectManager \$manager, \$queryBuilder, string \$class)
    {
        if (!\$queryBuilder instanceof QueryBuilder) {
            throw new \\TypeError(sprintf('Expected an instance of %s, but got %s.', QueryBuilder::class, \\is_object(\$queryBuilder) ? \\get_class(\$queryBuilder) : \\gettype(\$queryBuilder)));
        }

        return new ORMQueryBuilderLoader(\$queryBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entity';
    }

    /**
     * We consider two query builders with an equal SQL string and
     * equal parameters to be equal.
     *
     * @param QueryBuilder \$queryBuilder
     *
     * @internal This method is public to be usable as callback. It should not
     *           be used in user code.
     */
    public function getQueryBuilderPartsForCachingHash(\$queryBuilder): ?array
    {
        if (!\$queryBuilder instanceof QueryBuilder) {
            throw new \\TypeError(sprintf('Expected an instance of %s, but got %s.', QueryBuilder::class, \\is_object(\$queryBuilder) ? \\get_class(\$queryBuilder) : \\gettype(\$queryBuilder)));
        }

        return [
            \$queryBuilder->getQuery()->getSQL(),
            array_map([\$this, 'parameterToArray'], \$queryBuilder->getParameters()->toArray()),
        ];
    }

    /**
     * Converts a query parameter to an array.
     */
    private function parameterToArray(Parameter \$parameter): array
    {
        return [\$parameter->getName(), \$parameter->getType(), \$parameter->getValue()];
    }
}

interface_exists(ObjectManager::class);
", "@app/vendor/symfony/doctrine-bridge/Form/Type/EntityType.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Form\\Type\\EntityType.php");
    }
}
