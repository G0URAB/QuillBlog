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

/* @app/vendor/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php */
class __TwigTemplate_8c1039ee8568efebde1d91693d520c92951da621bd101b2ecb589dfdee8173b5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php"));

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

namespace Symfony\\Component\\Mime\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers custom mime types guessers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AddMimeTypeGuesserPass implements CompilerPassInterface
{
    private \$mimeTypesService;
    private \$mimeTypeGuesserTag;

    public function __construct(string \$mimeTypesService = 'mime_types', string \$mimeTypeGuesserTag = 'mime.mime_type_guesser')
    {
        \$this->mimeTypesService = \$mimeTypesService;
        \$this->mimeTypeGuesserTag = \$mimeTypeGuesserTag;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (\$container->has(\$this->mimeTypesService)) {
            \$definition = \$container->findDefinition(\$this->mimeTypesService);
            foreach (\$container->findTaggedServiceIds(\$this->mimeTypeGuesserTag, true) as \$id => \$attributes) {
                \$definition->addMethodCall('registerGuesser', [new Reference(\$id)]);
            }
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php";
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

namespace Symfony\\Component\\Mime\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers custom mime types guessers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AddMimeTypeGuesserPass implements CompilerPassInterface
{
    private \$mimeTypesService;
    private \$mimeTypeGuesserTag;

    public function __construct(string \$mimeTypesService = 'mime_types', string \$mimeTypeGuesserTag = 'mime.mime_type_guesser')
    {
        \$this->mimeTypesService = \$mimeTypesService;
        \$this->mimeTypeGuesserTag = \$mimeTypeGuesserTag;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (\$container->has(\$this->mimeTypesService)) {
            \$definition = \$container->findDefinition(\$this->mimeTypesService);
            foreach (\$container->findTaggedServiceIds(\$this->mimeTypeGuesserTag, true) as \$id => \$attributes) {
                \$definition->addMethodCall('registerGuesser', [new Reference(\$id)]);
            }
        }
    }
}
", "@app/vendor/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\DependencyInjection\\AddMimeTypeGuesserPass.php");
    }
}
