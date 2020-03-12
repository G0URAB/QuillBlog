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

/* @app/vendor/symfony/var-dumper/Caster/XmlReaderCaster.php */
class __TwigTemplate_e4aede90ff88ddeb58b6c302010327285ea1393ce305882b4ef5dcad07c5207b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/XmlReaderCaster.php"));

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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts XmlReader class to array representation.
 *
 * @author Baptiste Clavié <clavie.b@gmail.com>
 *
 * @final
 */
class XmlReaderCaster
{
    private static \$nodeTypes = [
        \\XMLReader::NONE => 'NONE',
        \\XMLReader::ELEMENT => 'ELEMENT',
        \\XMLReader::ATTRIBUTE => 'ATTRIBUTE',
        \\XMLReader::TEXT => 'TEXT',
        \\XMLReader::CDATA => 'CDATA',
        \\XMLReader::ENTITY_REF => 'ENTITY_REF',
        \\XMLReader::ENTITY => 'ENTITY',
        \\XMLReader::PI => 'PI (Processing Instruction)',
        \\XMLReader::COMMENT => 'COMMENT',
        \\XMLReader::DOC => 'DOC',
        \\XMLReader::DOC_TYPE => 'DOC_TYPE',
        \\XMLReader::DOC_FRAGMENT => 'DOC_FRAGMENT',
        \\XMLReader::NOTATION => 'NOTATION',
        \\XMLReader::WHITESPACE => 'WHITESPACE',
        \\XMLReader::SIGNIFICANT_WHITESPACE => 'SIGNIFICANT_WHITESPACE',
        \\XMLReader::END_ELEMENT => 'END_ELEMENT',
        \\XMLReader::END_ENTITY => 'END_ENTITY',
        \\XMLReader::XML_DECLARATION => 'XML_DECLARATION',
    ];

    public static function castXmlReader(\\XMLReader \$reader, array \$a, Stub \$stub, bool \$isNested)
    {
        \$props = Caster::PREFIX_VIRTUAL.'parserProperties';
        \$info = [
            'localName' => \$reader->localName,
            'prefix' => \$reader->prefix,
            'nodeType' => new ConstStub(self::\$nodeTypes[\$reader->nodeType], \$reader->nodeType),
            'depth' => \$reader->depth,
            'isDefault' => \$reader->isDefault,
            'isEmptyElement' => \\XMLReader::NONE === \$reader->nodeType ? null : \$reader->isEmptyElement,
            'xmlLang' => \$reader->xmlLang,
            'attributeCount' => \$reader->attributeCount,
            'value' => \$reader->value,
            'namespaceURI' => \$reader->namespaceURI,
            'baseURI' => \$reader->baseURI ? new LinkStub(\$reader->baseURI) : \$reader->baseURI,
            \$props => [
                'LOADDTD' => \$reader->getParserProperty(\\XMLReader::LOADDTD),
                'DEFAULTATTRS' => \$reader->getParserProperty(\\XMLReader::DEFAULTATTRS),
                'VALIDATE' => \$reader->getParserProperty(\\XMLReader::VALIDATE),
                'SUBST_ENTITIES' => \$reader->getParserProperty(\\XMLReader::SUBST_ENTITIES),
            ],
        ];

        if (\$info[\$props] = Caster::filter(\$info[\$props], Caster::EXCLUDE_EMPTY, [], \$count)) {
            \$info[\$props] = new EnumStub(\$info[\$props]);
            \$info[\$props]->cut = \$count;
        }

        \$info = Caster::filter(\$info, Caster::EXCLUDE_EMPTY, [], \$count);
        // +2 because hasValue and hasAttributes are always filtered
        \$stub->cut += \$count + 2;

        return \$a + \$info;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/XmlReaderCaster.php";
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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Casts XmlReader class to array representation.
 *
 * @author Baptiste Clavié <clavie.b@gmail.com>
 *
 * @final
 */
class XmlReaderCaster
{
    private static \$nodeTypes = [
        \\XMLReader::NONE => 'NONE',
        \\XMLReader::ELEMENT => 'ELEMENT',
        \\XMLReader::ATTRIBUTE => 'ATTRIBUTE',
        \\XMLReader::TEXT => 'TEXT',
        \\XMLReader::CDATA => 'CDATA',
        \\XMLReader::ENTITY_REF => 'ENTITY_REF',
        \\XMLReader::ENTITY => 'ENTITY',
        \\XMLReader::PI => 'PI (Processing Instruction)',
        \\XMLReader::COMMENT => 'COMMENT',
        \\XMLReader::DOC => 'DOC',
        \\XMLReader::DOC_TYPE => 'DOC_TYPE',
        \\XMLReader::DOC_FRAGMENT => 'DOC_FRAGMENT',
        \\XMLReader::NOTATION => 'NOTATION',
        \\XMLReader::WHITESPACE => 'WHITESPACE',
        \\XMLReader::SIGNIFICANT_WHITESPACE => 'SIGNIFICANT_WHITESPACE',
        \\XMLReader::END_ELEMENT => 'END_ELEMENT',
        \\XMLReader::END_ENTITY => 'END_ENTITY',
        \\XMLReader::XML_DECLARATION => 'XML_DECLARATION',
    ];

    public static function castXmlReader(\\XMLReader \$reader, array \$a, Stub \$stub, bool \$isNested)
    {
        \$props = Caster::PREFIX_VIRTUAL.'parserProperties';
        \$info = [
            'localName' => \$reader->localName,
            'prefix' => \$reader->prefix,
            'nodeType' => new ConstStub(self::\$nodeTypes[\$reader->nodeType], \$reader->nodeType),
            'depth' => \$reader->depth,
            'isDefault' => \$reader->isDefault,
            'isEmptyElement' => \\XMLReader::NONE === \$reader->nodeType ? null : \$reader->isEmptyElement,
            'xmlLang' => \$reader->xmlLang,
            'attributeCount' => \$reader->attributeCount,
            'value' => \$reader->value,
            'namespaceURI' => \$reader->namespaceURI,
            'baseURI' => \$reader->baseURI ? new LinkStub(\$reader->baseURI) : \$reader->baseURI,
            \$props => [
                'LOADDTD' => \$reader->getParserProperty(\\XMLReader::LOADDTD),
                'DEFAULTATTRS' => \$reader->getParserProperty(\\XMLReader::DEFAULTATTRS),
                'VALIDATE' => \$reader->getParserProperty(\\XMLReader::VALIDATE),
                'SUBST_ENTITIES' => \$reader->getParserProperty(\\XMLReader::SUBST_ENTITIES),
            ],
        ];

        if (\$info[\$props] = Caster::filter(\$info[\$props], Caster::EXCLUDE_EMPTY, [], \$count)) {
            \$info[\$props] = new EnumStub(\$info[\$props]);
            \$info[\$props]->cut = \$count;
        }

        \$info = Caster::filter(\$info, Caster::EXCLUDE_EMPTY, [], \$count);
        // +2 because hasValue and hasAttributes are always filtered
        \$stub->cut += \$count + 2;

        return \$a + \$info;
    }
}
", "@app/vendor/symfony/var-dumper/Caster/XmlReaderCaster.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\XmlReaderCaster.php");
    }
}
