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

/* @app/vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php */
class __TwigTemplate_581e69dc75c10a12355820969a523e9622442dba1c938cfe6151aac70bf613da extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php"));

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

namespace Symfony\\Bundle\\MakerBundle\\Renderer;

use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;

/**
 * @internal
 */
final class FormTypeRenderer
{
    private \$generator;

    public function __construct(Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    public function render(ClassNameDetails \$formClassDetails, array \$formFields, ClassNameDetails \$boundClassDetails = null, array \$constraintClasses = [], array \$extraUseClasses = [])
    {
        \$fieldTypeUseStatements = [];
        \$fields = [];
        foreach (\$formFields as \$name => \$fieldTypeOptions) {
            \$fieldTypeOptions = \$fieldTypeOptions ?? ['type' => null, 'options_code' => null];

            if (isset(\$fieldTypeOptions['type'])) {
                \$fieldTypeUseStatements[] = \$fieldTypeOptions['type'];
                \$fieldTypeOptions['type'] = Str::getShortClassName(\$fieldTypeOptions['type']);
            }

            \$fields[\$name] = \$fieldTypeOptions;
        }

        \$mergedTypeUseStatements = array_merge(\$fieldTypeUseStatements, \$extraUseClasses);
        sort(\$mergedTypeUseStatements);

        \$this->generator->generateClass(
            \$formClassDetails->getFullName(),
            'form/Type.tpl.php',
            [
                'bounded_full_class_name' => \$boundClassDetails ? \$boundClassDetails->getFullName() : null,
                'bounded_class_name' => \$boundClassDetails ? \$boundClassDetails->getShortName() : null,
                'form_fields' => \$fields,
                'field_type_use_statements' => \$mergedTypeUseStatements,
                'constraint_use_statements' => \$constraintClasses,
            ]
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php";
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

namespace Symfony\\Bundle\\MakerBundle\\Renderer;

use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;

/**
 * @internal
 */
final class FormTypeRenderer
{
    private \$generator;

    public function __construct(Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    public function render(ClassNameDetails \$formClassDetails, array \$formFields, ClassNameDetails \$boundClassDetails = null, array \$constraintClasses = [], array \$extraUseClasses = [])
    {
        \$fieldTypeUseStatements = [];
        \$fields = [];
        foreach (\$formFields as \$name => \$fieldTypeOptions) {
            \$fieldTypeOptions = \$fieldTypeOptions ?? ['type' => null, 'options_code' => null];

            if (isset(\$fieldTypeOptions['type'])) {
                \$fieldTypeUseStatements[] = \$fieldTypeOptions['type'];
                \$fieldTypeOptions['type'] = Str::getShortClassName(\$fieldTypeOptions['type']);
            }

            \$fields[\$name] = \$fieldTypeOptions;
        }

        \$mergedTypeUseStatements = array_merge(\$fieldTypeUseStatements, \$extraUseClasses);
        sort(\$mergedTypeUseStatements);

        \$this->generator->generateClass(
            \$formClassDetails->getFullName(),
            'form/Type.tpl.php',
            [
                'bounded_full_class_name' => \$boundClassDetails ? \$boundClassDetails->getFullName() : null,
                'bounded_class_name' => \$boundClassDetails ? \$boundClassDetails->getShortName() : null,
                'form_fields' => \$fields,
                'field_type_use_statements' => \$mergedTypeUseStatements,
                'constraint_use_statements' => \$constraintClasses,
            ]
        );
    }
}
", "@app/vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Renderer\\FormTypeRenderer.php");
    }
}
