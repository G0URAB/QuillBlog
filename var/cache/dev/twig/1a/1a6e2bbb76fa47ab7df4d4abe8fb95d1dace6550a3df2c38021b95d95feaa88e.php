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

/* @app/vendor/twig/twig/src/Node/CheckSecurityNode.php */
class __TwigTemplate_0aea9cae2d5e11fa6620e91efc113d4d4596661e73985ffaf69c8aa0207fba09 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/CheckSecurityNode.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node;

use Twig\\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CheckSecurityNode extends Node
{
    private \$usedFilters;
    private \$usedTags;
    private \$usedFunctions;

    public function __construct(array \$usedFilters, array \$usedTags, array \$usedFunctions)
    {
        \$this->usedFilters = \$usedFilters;
        \$this->usedTags = \$usedTags;
        \$this->usedFunctions = \$usedFunctions;

        parent::__construct();
    }

    public function compile(Compiler \$compiler): void
    {
        \$tags = \$filters = \$functions = [];
        foreach (['tags', 'filters', 'functions'] as \$type) {
            foreach (\$this->{'used'.ucfirst(\$type)} as \$name => \$node) {
                if (\$node instanceof Node) {
                    \${\$type}[\$name] = \$node->getTemplateLine();
                } else {
                    \${\$type}[\$node] = null;
                }
            }
        }

        \$compiler
            ->write(\"\\\$this->sandbox = \\\$this->env->getExtension('\\Twig\\Extension\\SandboxExtension');\\n\")
            ->write('\$tags = ')->repr(array_filter(\$tags))->raw(\";\\n\")
            ->write('\$filters = ')->repr(array_filter(\$filters))->raw(\";\\n\")
            ->write('\$functions = ')->repr(array_filter(\$functions))->raw(\";\\n\\n\")
            ->write(\"try {\\n\")
            ->indent()
            ->write(\"\\\$this->sandbox->checkSecurity(\\n\")
            ->indent()
            ->write(!\$tags ? \"[],\\n\" : \"['\".implode(\"', '\", array_keys(\$tags)).\"'],\\n\")
            ->write(!\$filters ? \"[],\\n\" : \"['\".implode(\"', '\", array_keys(\$filters)).\"'],\\n\")
            ->write(!\$functions ? \"[]\\n\" : \"['\".implode(\"', '\", array_keys(\$functions)).\"']\\n\")
            ->outdent()
            ->write(\");\\n\")
            ->outdent()
            ->write(\"} catch (SecurityError \\\$e) {\\n\")
            ->indent()
            ->write(\"\\\$e->setSourceContext(\\\$this->source);\\n\\n\")
            ->write(\"if (\\\$e instanceof SecurityNotAllowedTagError && isset(\\\$tags[\\\$e->getTagName()])) {\\n\")
            ->indent()
            ->write(\"\\\$e->setTemplateLine(\\\$tags[\\\$e->getTagName()]);\\n\")
            ->outdent()
            ->write(\"} elseif (\\\$e instanceof SecurityNotAllowedFilterError && isset(\\\$filters[\\\$e->getFilterName()])) {\\n\")
            ->indent()
            ->write(\"\\\$e->setTemplateLine(\\\$filters[\\\$e->getFilterName()]);\\n\")
            ->outdent()
            ->write(\"} elseif (\\\$e instanceof SecurityNotAllowedFunctionError && isset(\\\$functions[\\\$e->getFunctionName()])) {\\n\")
            ->indent()
            ->write(\"\\\$e->setTemplateLine(\\\$functions[\\\$e->getFunctionName()]);\\n\")
            ->outdent()
            ->write(\"}\\n\\n\")
            ->write(\"throw \\\$e;\\n\")
            ->outdent()
            ->write(\"}\\n\\n\")
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/CheckSecurityNode.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node;

use Twig\\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CheckSecurityNode extends Node
{
    private \$usedFilters;
    private \$usedTags;
    private \$usedFunctions;

    public function __construct(array \$usedFilters, array \$usedTags, array \$usedFunctions)
    {
        \$this->usedFilters = \$usedFilters;
        \$this->usedTags = \$usedTags;
        \$this->usedFunctions = \$usedFunctions;

        parent::__construct();
    }

    public function compile(Compiler \$compiler): void
    {
        \$tags = \$filters = \$functions = [];
        foreach (['tags', 'filters', 'functions'] as \$type) {
            foreach (\$this->{'used'.ucfirst(\$type)} as \$name => \$node) {
                if (\$node instanceof Node) {
                    \${\$type}[\$name] = \$node->getTemplateLine();
                } else {
                    \${\$type}[\$node] = null;
                }
            }
        }

        \$compiler
            ->write(\"\\\$this->sandbox = \\\$this->env->getExtension('\\Twig\\Extension\\SandboxExtension');\\n\")
            ->write('\$tags = ')->repr(array_filter(\$tags))->raw(\";\\n\")
            ->write('\$filters = ')->repr(array_filter(\$filters))->raw(\";\\n\")
            ->write('\$functions = ')->repr(array_filter(\$functions))->raw(\";\\n\\n\")
            ->write(\"try {\\n\")
            ->indent()
            ->write(\"\\\$this->sandbox->checkSecurity(\\n\")
            ->indent()
            ->write(!\$tags ? \"[],\\n\" : \"['\".implode(\"', '\", array_keys(\$tags)).\"'],\\n\")
            ->write(!\$filters ? \"[],\\n\" : \"['\".implode(\"', '\", array_keys(\$filters)).\"'],\\n\")
            ->write(!\$functions ? \"[]\\n\" : \"['\".implode(\"', '\", array_keys(\$functions)).\"']\\n\")
            ->outdent()
            ->write(\");\\n\")
            ->outdent()
            ->write(\"} catch (SecurityError \\\$e) {\\n\")
            ->indent()
            ->write(\"\\\$e->setSourceContext(\\\$this->source);\\n\\n\")
            ->write(\"if (\\\$e instanceof SecurityNotAllowedTagError && isset(\\\$tags[\\\$e->getTagName()])) {\\n\")
            ->indent()
            ->write(\"\\\$e->setTemplateLine(\\\$tags[\\\$e->getTagName()]);\\n\")
            ->outdent()
            ->write(\"} elseif (\\\$e instanceof SecurityNotAllowedFilterError && isset(\\\$filters[\\\$e->getFilterName()])) {\\n\")
            ->indent()
            ->write(\"\\\$e->setTemplateLine(\\\$filters[\\\$e->getFilterName()]);\\n\")
            ->outdent()
            ->write(\"} elseif (\\\$e instanceof SecurityNotAllowedFunctionError && isset(\\\$functions[\\\$e->getFunctionName()])) {\\n\")
            ->indent()
            ->write(\"\\\$e->setTemplateLine(\\\$functions[\\\$e->getFunctionName()]);\\n\")
            ->outdent()
            ->write(\"}\\n\\n\")
            ->write(\"throw \\\$e;\\n\")
            ->outdent()
            ->write(\"}\\n\\n\")
        ;
    }
}
", "@app/vendor/twig/twig/src/Node/CheckSecurityNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\CheckSecurityNode.php");
    }
}
