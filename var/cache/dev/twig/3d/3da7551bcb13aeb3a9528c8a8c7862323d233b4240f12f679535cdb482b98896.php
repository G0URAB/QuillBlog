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

/* @app/vendor/symfony/maker-bundle/src/Doctrine/EntityClassGenerator.php */
class __TwigTemplate_0210c530d1f0a1e2923c5f2c2408cabb2a0b9f1d247439457a46e798f716954f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Doctrine/EntityClassGenerator.php"));

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

use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;

/**
 * @internal
 */
final class EntityClassGenerator
{
    private \$generator;

    public function __construct(Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    public function generateEntityClass(ClassNameDetails \$entityClassDetails, bool \$apiResource, bool \$withPasswordUpgrade = false): string
    {
        \$repoClassDetails = \$this->generator->createClassNameDetails(
            \$entityClassDetails->getRelativeName(),
            'Repository\\\\',
            'Repository'
        );

        \$entityPath = \$this->generator->generateClass(
            \$entityClassDetails->getFullName(),
            'doctrine/Entity.tpl.php',
            [
                'repository_full_class_name' => \$repoClassDetails->getFullName(),
                'api_resource' => \$apiResource,
            ]
        );

        \$entityAlias = strtolower(\$entityClassDetails->getShortName()[0]);
        \$this->generator->generateClass(
            \$repoClassDetails->getFullName(),
            'doctrine/Repository.tpl.php',
            [
                'entity_full_class_name' => \$entityClassDetails->getFullName(),
                'entity_class_name' => \$entityClassDetails->getShortName(),
                'entity_alias' => \$entityAlias,
                'with_password_upgrade' => \$withPasswordUpgrade,
            ]
        );

        return \$entityPath;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Doctrine/EntityClassGenerator.php";
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

use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;

/**
 * @internal
 */
final class EntityClassGenerator
{
    private \$generator;

    public function __construct(Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    public function generateEntityClass(ClassNameDetails \$entityClassDetails, bool \$apiResource, bool \$withPasswordUpgrade = false): string
    {
        \$repoClassDetails = \$this->generator->createClassNameDetails(
            \$entityClassDetails->getRelativeName(),
            'Repository\\\\',
            'Repository'
        );

        \$entityPath = \$this->generator->generateClass(
            \$entityClassDetails->getFullName(),
            'doctrine/Entity.tpl.php',
            [
                'repository_full_class_name' => \$repoClassDetails->getFullName(),
                'api_resource' => \$apiResource,
            ]
        );

        \$entityAlias = strtolower(\$entityClassDetails->getShortName()[0]);
        \$this->generator->generateClass(
            \$repoClassDetails->getFullName(),
            'doctrine/Repository.tpl.php',
            [
                'entity_full_class_name' => \$entityClassDetails->getFullName(),
                'entity_class_name' => \$entityClassDetails->getShortName(),
                'entity_alias' => \$entityAlias,
                'with_password_upgrade' => \$withPasswordUpgrade,
            ]
        );

        return \$entityPath;
    }
}
", "@app/vendor/symfony/maker-bundle/src/Doctrine/EntityClassGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\EntityClassGenerator.php");
    }
}
