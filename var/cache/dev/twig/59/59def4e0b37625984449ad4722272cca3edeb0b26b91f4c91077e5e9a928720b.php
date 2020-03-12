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

/* @app/vendor/symfony/var-dumper/Caster/XmlResourceCaster.php */
class __TwigTemplate_e1cf399ac5bd15997769d6d7549060219ced2562b4b99d08ae4469cb14156cf0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/XmlResourceCaster.php"));

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
 * Casts XML resources to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class XmlResourceCaster
{
    private static \$xmlErrors = [
        XML_ERROR_NONE => 'XML_ERROR_NONE',
        XML_ERROR_NO_MEMORY => 'XML_ERROR_NO_MEMORY',
        XML_ERROR_SYNTAX => 'XML_ERROR_SYNTAX',
        XML_ERROR_NO_ELEMENTS => 'XML_ERROR_NO_ELEMENTS',
        XML_ERROR_INVALID_TOKEN => 'XML_ERROR_INVALID_TOKEN',
        XML_ERROR_UNCLOSED_TOKEN => 'XML_ERROR_UNCLOSED_TOKEN',
        XML_ERROR_PARTIAL_CHAR => 'XML_ERROR_PARTIAL_CHAR',
        XML_ERROR_TAG_MISMATCH => 'XML_ERROR_TAG_MISMATCH',
        XML_ERROR_DUPLICATE_ATTRIBUTE => 'XML_ERROR_DUPLICATE_ATTRIBUTE',
        XML_ERROR_JUNK_AFTER_DOC_ELEMENT => 'XML_ERROR_JUNK_AFTER_DOC_ELEMENT',
        XML_ERROR_PARAM_ENTITY_REF => 'XML_ERROR_PARAM_ENTITY_REF',
        XML_ERROR_UNDEFINED_ENTITY => 'XML_ERROR_UNDEFINED_ENTITY',
        XML_ERROR_RECURSIVE_ENTITY_REF => 'XML_ERROR_RECURSIVE_ENTITY_REF',
        XML_ERROR_ASYNC_ENTITY => 'XML_ERROR_ASYNC_ENTITY',
        XML_ERROR_BAD_CHAR_REF => 'XML_ERROR_BAD_CHAR_REF',
        XML_ERROR_BINARY_ENTITY_REF => 'XML_ERROR_BINARY_ENTITY_REF',
        XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF => 'XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF',
        XML_ERROR_MISPLACED_XML_PI => 'XML_ERROR_MISPLACED_XML_PI',
        XML_ERROR_UNKNOWN_ENCODING => 'XML_ERROR_UNKNOWN_ENCODING',
        XML_ERROR_INCORRECT_ENCODING => 'XML_ERROR_INCORRECT_ENCODING',
        XML_ERROR_UNCLOSED_CDATA_SECTION => 'XML_ERROR_UNCLOSED_CDATA_SECTION',
        XML_ERROR_EXTERNAL_ENTITY_HANDLING => 'XML_ERROR_EXTERNAL_ENTITY_HANDLING',
    ];

    public static function castXml(\$h, array \$a, Stub \$stub, bool \$isNested)
    {
        \$a['current_byte_index'] = xml_get_current_byte_index(\$h);
        \$a['current_column_number'] = xml_get_current_column_number(\$h);
        \$a['current_line_number'] = xml_get_current_line_number(\$h);
        \$a['error_code'] = xml_get_error_code(\$h);

        if (isset(self::\$xmlErrors[\$a['error_code']])) {
            \$a['error_code'] = new ConstStub(self::\$xmlErrors[\$a['error_code']], \$a['error_code']);
        }

        return \$a;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/XmlResourceCaster.php";
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
 * Casts XML resources to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class XmlResourceCaster
{
    private static \$xmlErrors = [
        XML_ERROR_NONE => 'XML_ERROR_NONE',
        XML_ERROR_NO_MEMORY => 'XML_ERROR_NO_MEMORY',
        XML_ERROR_SYNTAX => 'XML_ERROR_SYNTAX',
        XML_ERROR_NO_ELEMENTS => 'XML_ERROR_NO_ELEMENTS',
        XML_ERROR_INVALID_TOKEN => 'XML_ERROR_INVALID_TOKEN',
        XML_ERROR_UNCLOSED_TOKEN => 'XML_ERROR_UNCLOSED_TOKEN',
        XML_ERROR_PARTIAL_CHAR => 'XML_ERROR_PARTIAL_CHAR',
        XML_ERROR_TAG_MISMATCH => 'XML_ERROR_TAG_MISMATCH',
        XML_ERROR_DUPLICATE_ATTRIBUTE => 'XML_ERROR_DUPLICATE_ATTRIBUTE',
        XML_ERROR_JUNK_AFTER_DOC_ELEMENT => 'XML_ERROR_JUNK_AFTER_DOC_ELEMENT',
        XML_ERROR_PARAM_ENTITY_REF => 'XML_ERROR_PARAM_ENTITY_REF',
        XML_ERROR_UNDEFINED_ENTITY => 'XML_ERROR_UNDEFINED_ENTITY',
        XML_ERROR_RECURSIVE_ENTITY_REF => 'XML_ERROR_RECURSIVE_ENTITY_REF',
        XML_ERROR_ASYNC_ENTITY => 'XML_ERROR_ASYNC_ENTITY',
        XML_ERROR_BAD_CHAR_REF => 'XML_ERROR_BAD_CHAR_REF',
        XML_ERROR_BINARY_ENTITY_REF => 'XML_ERROR_BINARY_ENTITY_REF',
        XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF => 'XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF',
        XML_ERROR_MISPLACED_XML_PI => 'XML_ERROR_MISPLACED_XML_PI',
        XML_ERROR_UNKNOWN_ENCODING => 'XML_ERROR_UNKNOWN_ENCODING',
        XML_ERROR_INCORRECT_ENCODING => 'XML_ERROR_INCORRECT_ENCODING',
        XML_ERROR_UNCLOSED_CDATA_SECTION => 'XML_ERROR_UNCLOSED_CDATA_SECTION',
        XML_ERROR_EXTERNAL_ENTITY_HANDLING => 'XML_ERROR_EXTERNAL_ENTITY_HANDLING',
    ];

    public static function castXml(\$h, array \$a, Stub \$stub, bool \$isNested)
    {
        \$a['current_byte_index'] = xml_get_current_byte_index(\$h);
        \$a['current_column_number'] = xml_get_current_column_number(\$h);
        \$a['current_line_number'] = xml_get_current_line_number(\$h);
        \$a['error_code'] = xml_get_error_code(\$h);

        if (isset(self::\$xmlErrors[\$a['error_code']])) {
            \$a['error_code'] = new ConstStub(self::\$xmlErrors[\$a['error_code']], \$a['error_code']);
        }

        return \$a;
    }
}
", "@app/vendor/symfony/var-dumper/Caster/XmlResourceCaster.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\XmlResourceCaster.php");
    }
}
