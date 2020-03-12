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

/* @app/vendor/symfony/doctrine-bridge/Form/ChoiceList/ORMQueryBuilderLoader.php */
class __TwigTemplate_3f40796134930d099df36cc4a388192000bfcca65696d8ff01273192a87cbb62 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/Form/ChoiceList/ORMQueryBuilderLoader.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Form\\ChoiceList;

use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\QueryBuilder;

/**
 * Loads entities using a {@link QueryBuilder} instance.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ORMQueryBuilderLoader implements EntityLoaderInterface
{
    /**
     * Contains the query builder that builds the query for fetching the
     * entities.
     *
     * This property should only be accessed through queryBuilder.
     *
     * @var QueryBuilder
     */
    private \$queryBuilder;

    public function __construct(QueryBuilder \$queryBuilder)
    {
        \$this->queryBuilder = \$queryBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntities()
    {
        return \$this->queryBuilder->getQuery()->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntitiesByIds(string \$identifier, array \$values)
    {
        if (null !== \$this->queryBuilder->getMaxResults() || null !== \$this->queryBuilder->getFirstResult()) {
            // an offset or a limit would apply on results including the where clause with submitted id values
            // that could make invalid choices valid
            \$choices = [];
            \$metadata = \$this->queryBuilder->getEntityManager()->getClassMetadata(current(\$this->queryBuilder->getRootEntities()));

            foreach (\$this->getEntities() as \$entity) {
                if (\\in_array((string) current(\$metadata->getIdentifierValues(\$entity)), \$values, true)) {
                    \$choices[] = \$entity;
                }
            }

            return \$choices;
        }

        \$qb = clone \$this->queryBuilder;
        \$alias = current(\$qb->getRootAliases());
        \$parameter = 'ORMQueryBuilderLoader_getEntitiesByIds_'.\$identifier;
        \$parameter = str_replace('.', '_', \$parameter);
        \$where = \$qb->expr()->in(\$alias.'.'.\$identifier, ':'.\$parameter);

        // Guess type
        \$entity = current(\$qb->getRootEntities());
        \$metadata = \$qb->getEntityManager()->getClassMetadata(\$entity);
        if (\\in_array(\$metadata->getTypeOfField(\$identifier), ['integer', 'bigint', 'smallint'])) {
            \$parameterType = Connection::PARAM_INT_ARRAY;

            // Filter out non-integer values (e.g. \"\"). If we don't, some
            // databases such as PostgreSQL fail.
            \$values = array_values(array_filter(\$values, function (\$v) {
                return (string) \$v === (string) (int) \$v || ctype_digit(\$v);
            }));
        } elseif (\\in_array(\$metadata->getTypeOfField(\$identifier), ['uuid', 'guid'])) {
            \$parameterType = Connection::PARAM_STR_ARRAY;

            // Like above, but we just filter out empty strings.
            \$values = array_values(array_filter(\$values, function (\$v) {
                return '' !== (string) \$v;
            }));
        } else {
            \$parameterType = Connection::PARAM_STR_ARRAY;
        }
        if (!\$values) {
            return [];
        }

        return \$qb->andWhere(\$where)
                  ->getQuery()
                  ->setParameter(\$parameter, \$values, \$parameterType)
                  ->getResult();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/Form/ChoiceList/ORMQueryBuilderLoader.php";
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

namespace Symfony\\Bridge\\Doctrine\\Form\\ChoiceList;

use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\QueryBuilder;

/**
 * Loads entities using a {@link QueryBuilder} instance.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ORMQueryBuilderLoader implements EntityLoaderInterface
{
    /**
     * Contains the query builder that builds the query for fetching the
     * entities.
     *
     * This property should only be accessed through queryBuilder.
     *
     * @var QueryBuilder
     */
    private \$queryBuilder;

    public function __construct(QueryBuilder \$queryBuilder)
    {
        \$this->queryBuilder = \$queryBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntities()
    {
        return \$this->queryBuilder->getQuery()->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntitiesByIds(string \$identifier, array \$values)
    {
        if (null !== \$this->queryBuilder->getMaxResults() || null !== \$this->queryBuilder->getFirstResult()) {
            // an offset or a limit would apply on results including the where clause with submitted id values
            // that could make invalid choices valid
            \$choices = [];
            \$metadata = \$this->queryBuilder->getEntityManager()->getClassMetadata(current(\$this->queryBuilder->getRootEntities()));

            foreach (\$this->getEntities() as \$entity) {
                if (\\in_array((string) current(\$metadata->getIdentifierValues(\$entity)), \$values, true)) {
                    \$choices[] = \$entity;
                }
            }

            return \$choices;
        }

        \$qb = clone \$this->queryBuilder;
        \$alias = current(\$qb->getRootAliases());
        \$parameter = 'ORMQueryBuilderLoader_getEntitiesByIds_'.\$identifier;
        \$parameter = str_replace('.', '_', \$parameter);
        \$where = \$qb->expr()->in(\$alias.'.'.\$identifier, ':'.\$parameter);

        // Guess type
        \$entity = current(\$qb->getRootEntities());
        \$metadata = \$qb->getEntityManager()->getClassMetadata(\$entity);
        if (\\in_array(\$metadata->getTypeOfField(\$identifier), ['integer', 'bigint', 'smallint'])) {
            \$parameterType = Connection::PARAM_INT_ARRAY;

            // Filter out non-integer values (e.g. \"\"). If we don't, some
            // databases such as PostgreSQL fail.
            \$values = array_values(array_filter(\$values, function (\$v) {
                return (string) \$v === (string) (int) \$v || ctype_digit(\$v);
            }));
        } elseif (\\in_array(\$metadata->getTypeOfField(\$identifier), ['uuid', 'guid'])) {
            \$parameterType = Connection::PARAM_STR_ARRAY;

            // Like above, but we just filter out empty strings.
            \$values = array_values(array_filter(\$values, function (\$v) {
                return '' !== (string) \$v;
            }));
        } else {
            \$parameterType = Connection::PARAM_STR_ARRAY;
        }
        if (!\$values) {
            return [];
        }

        return \$qb->andWhere(\$where)
                  ->getQuery()
                  ->setParameter(\$parameter, \$values, \$parameterType)
                  ->getResult();
    }
}
", "@app/vendor/symfony/doctrine-bridge/Form/ChoiceList/ORMQueryBuilderLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\Form\\ChoiceList\\ORMQueryBuilderLoader.php");
    }
}
