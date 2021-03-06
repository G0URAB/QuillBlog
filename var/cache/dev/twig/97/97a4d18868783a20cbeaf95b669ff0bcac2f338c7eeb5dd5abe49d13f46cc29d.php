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

/* @app/vendor/nikic/php-parser/lib/PhpParser/JsonDecoder.php */
class __TwigTemplate_be5b579704123ebf99ba597965bae924bbec963419a537d29509a1ab14b06a44 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/JsonDecoder.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser;

class JsonDecoder
{
    /** @var \\ReflectionClass[] Node type to reflection class map */
    private \$reflectionClassCache;

    public function decode(string \$json) {
        \$value = json_decode(\$json, true);
        if (json_last_error()) {
            throw new \\RuntimeException('JSON decoding error: ' . json_last_error_msg());
        }

        return \$this->decodeRecursive(\$value);
    }

    private function decodeRecursive(\$value) {
        if (\\is_array(\$value)) {
            if (isset(\$value['nodeType'])) {
                if (\$value['nodeType'] === 'Comment' || \$value['nodeType'] === 'Comment_Doc') {
                    return \$this->decodeComment(\$value);
                }
                return \$this->decodeNode(\$value);
            }
            return \$this->decodeArray(\$value);
        }
        return \$value;
    }

    private function decodeArray(array \$array) : array {
        \$decodedArray = [];
        foreach (\$array as \$key => \$value) {
            \$decodedArray[\$key] = \$this->decodeRecursive(\$value);
        }
        return \$decodedArray;
    }

    private function decodeNode(array \$value) : Node {
        \$nodeType = \$value['nodeType'];
        if (!\\is_string(\$nodeType)) {
            throw new \\RuntimeException('Node type must be a string');
        }

        \$reflectionClass = \$this->reflectionClassFromNodeType(\$nodeType);
        /** @var Node \$node */
        \$node = \$reflectionClass->newInstanceWithoutConstructor();

        if (isset(\$value['attributes'])) {
            if (!\\is_array(\$value['attributes'])) {
                throw new \\RuntimeException('Attributes must be an array');
            }

            \$node->setAttributes(\$this->decodeArray(\$value['attributes']));
        }

        foreach (\$value as \$name => \$subNode) {
            if (\$name === 'nodeType' || \$name === 'attributes') {
                continue;
            }

            \$node->\$name = \$this->decodeRecursive(\$subNode);
        }

        return \$node;
    }

    private function decodeComment(array \$value) : Comment {
        \$className = \$value['nodeType'] === 'Comment' ? Comment::class : Comment\\Doc::class;
        if (!isset(\$value['text'])) {
            throw new \\RuntimeException('Comment must have text');
        }

        return new \$className(
            \$value['text'], \$value['line'] ?? -1, \$value['filePos'] ?? -1, \$value['tokenPos'] ?? -1
        );
    }

    private function reflectionClassFromNodeType(string \$nodeType) : \\ReflectionClass {
        if (!isset(\$this->reflectionClassCache[\$nodeType])) {
            \$className = \$this->classNameFromNodeType(\$nodeType);
            \$this->reflectionClassCache[\$nodeType] = new \\ReflectionClass(\$className);
        }
        return \$this->reflectionClassCache[\$nodeType];
    }

    private function classNameFromNodeType(string \$nodeType) : string {
        \$className = 'PhpParser\\\\Node\\\\' . strtr(\$nodeType, '_', '\\\\');
        if (class_exists(\$className)) {
            return \$className;
        }

        \$className .= '_';
        if (class_exists(\$className)) {
            return \$className;
        }

        throw new \\RuntimeException(\"Unknown node type \\\"\$nodeType\\\"\");
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/JsonDecoder.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser;

class JsonDecoder
{
    /** @var \\ReflectionClass[] Node type to reflection class map */
    private \$reflectionClassCache;

    public function decode(string \$json) {
        \$value = json_decode(\$json, true);
        if (json_last_error()) {
            throw new \\RuntimeException('JSON decoding error: ' . json_last_error_msg());
        }

        return \$this->decodeRecursive(\$value);
    }

    private function decodeRecursive(\$value) {
        if (\\is_array(\$value)) {
            if (isset(\$value['nodeType'])) {
                if (\$value['nodeType'] === 'Comment' || \$value['nodeType'] === 'Comment_Doc') {
                    return \$this->decodeComment(\$value);
                }
                return \$this->decodeNode(\$value);
            }
            return \$this->decodeArray(\$value);
        }
        return \$value;
    }

    private function decodeArray(array \$array) : array {
        \$decodedArray = [];
        foreach (\$array as \$key => \$value) {
            \$decodedArray[\$key] = \$this->decodeRecursive(\$value);
        }
        return \$decodedArray;
    }

    private function decodeNode(array \$value) : Node {
        \$nodeType = \$value['nodeType'];
        if (!\\is_string(\$nodeType)) {
            throw new \\RuntimeException('Node type must be a string');
        }

        \$reflectionClass = \$this->reflectionClassFromNodeType(\$nodeType);
        /** @var Node \$node */
        \$node = \$reflectionClass->newInstanceWithoutConstructor();

        if (isset(\$value['attributes'])) {
            if (!\\is_array(\$value['attributes'])) {
                throw new \\RuntimeException('Attributes must be an array');
            }

            \$node->setAttributes(\$this->decodeArray(\$value['attributes']));
        }

        foreach (\$value as \$name => \$subNode) {
            if (\$name === 'nodeType' || \$name === 'attributes') {
                continue;
            }

            \$node->\$name = \$this->decodeRecursive(\$subNode);
        }

        return \$node;
    }

    private function decodeComment(array \$value) : Comment {
        \$className = \$value['nodeType'] === 'Comment' ? Comment::class : Comment\\Doc::class;
        if (!isset(\$value['text'])) {
            throw new \\RuntimeException('Comment must have text');
        }

        return new \$className(
            \$value['text'], \$value['line'] ?? -1, \$value['filePos'] ?? -1, \$value['tokenPos'] ?? -1
        );
    }

    private function reflectionClassFromNodeType(string \$nodeType) : \\ReflectionClass {
        if (!isset(\$this->reflectionClassCache[\$nodeType])) {
            \$className = \$this->classNameFromNodeType(\$nodeType);
            \$this->reflectionClassCache[\$nodeType] = new \\ReflectionClass(\$className);
        }
        return \$this->reflectionClassCache[\$nodeType];
    }

    private function classNameFromNodeType(string \$nodeType) : string {
        \$className = 'PhpParser\\\\Node\\\\' . strtr(\$nodeType, '_', '\\\\');
        if (class_exists(\$className)) {
            return \$className;
        }

        \$className .= '_';
        if (class_exists(\$className)) {
            return \$className;
        }

        throw new \\RuntimeException(\"Unknown node type \\\"\$nodeType\\\"\");
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/JsonDecoder.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\JsonDecoder.php");
    }
}
