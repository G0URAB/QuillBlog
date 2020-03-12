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

/* @app/vendor/symfony/maker-bundle/src/Doctrine/ORMDependencyBuilder.php */
class __TwigTemplate_ef469428202a0e2ed47606e6b951d7a8e76a218d9610aaefc3f37c6572de7b55 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Doctrine/ORMDependencyBuilder.php"));

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

use Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle;
use Doctrine\\ORM\\Mapping\\Column;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;

/**
 * @internal
 */
final class ORMDependencyBuilder
{
    /**
     * Central method to add dependencies needed for Doctrine ORM.
     */
    public static function buildDependencies(DependencyBuilder \$dependencies)
    {
        \$classes = [
            // guarantee DoctrineBundle
            DoctrineBundle::class,
            // guarantee ORM
            Column::class,
        ];

        foreach (\$classes as \$class) {
            \$dependencies->addClassDependency(
                \$class,
                'orm'
            );
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Doctrine/ORMDependencyBuilder.php";
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

use Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle;
use Doctrine\\ORM\\Mapping\\Column;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;

/**
 * @internal
 */
final class ORMDependencyBuilder
{
    /**
     * Central method to add dependencies needed for Doctrine ORM.
     */
    public static function buildDependencies(DependencyBuilder \$dependencies)
    {
        \$classes = [
            // guarantee DoctrineBundle
            DoctrineBundle::class,
            // guarantee ORM
            Column::class,
        ];

        foreach (\$classes as \$class) {
            \$dependencies->addClassDependency(
                \$class,
                'orm'
            );
        }
    }
}
", "@app/vendor/symfony/maker-bundle/src/Doctrine/ORMDependencyBuilder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\ORMDependencyBuilder.php");
    }
}
