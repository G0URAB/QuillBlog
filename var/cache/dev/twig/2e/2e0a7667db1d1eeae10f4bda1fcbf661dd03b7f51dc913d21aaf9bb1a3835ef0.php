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

/* @app/vendor/zendframework/zend-code/src/Generator/FileGeneratorRegistry.php */
class __TwigTemplate_d5c338c0ad6e065ba11bacffce8798b2344aec16db13736d9672ca19d48e6b29 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Generator/FileGeneratorRegistry.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator;

use Zend\\Code\\Generator\\Exception\\RuntimeException;

use function str_replace;

class FileGeneratorRegistry
{
    /**
     * @var array \$fileCodeGenerators
     */
    private static \$fileCodeGenerators = [];

    /**
     * Registry for the Zend\\Code package.
     *
     * @param  FileGenerator \$fileCodeGenerator
     * @param  string \$fileName
     * @throws RuntimeException
     */
    public static function registerFileCodeGenerator(FileGenerator \$fileCodeGenerator, \$fileName = null)
    {
        if (\$fileName === null) {
            \$fileName = \$fileCodeGenerator->getFilename();
        }

        if (\$fileName == '') {
            throw new RuntimeException('FileName does not exist.');
        }

        // cannot use realpath since the file might not exist, but we do need to have the index
        // in the same DIRECTORY_SEPARATOR that realpath would use:
        \$fileName = str_replace(['\\\\', '/'], DIRECTORY_SEPARATOR, \$fileName);

        static::\$fileCodeGenerators[\$fileName] = \$fileCodeGenerator;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Generator/FileGeneratorRegistry.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator;

use Zend\\Code\\Generator\\Exception\\RuntimeException;

use function str_replace;

class FileGeneratorRegistry
{
    /**
     * @var array \$fileCodeGenerators
     */
    private static \$fileCodeGenerators = [];

    /**
     * Registry for the Zend\\Code package.
     *
     * @param  FileGenerator \$fileCodeGenerator
     * @param  string \$fileName
     * @throws RuntimeException
     */
    public static function registerFileCodeGenerator(FileGenerator \$fileCodeGenerator, \$fileName = null)
    {
        if (\$fileName === null) {
            \$fileName = \$fileCodeGenerator->getFilename();
        }

        if (\$fileName == '') {
            throw new RuntimeException('FileName does not exist.');
        }

        // cannot use realpath since the file might not exist, but we do need to have the index
        // in the same DIRECTORY_SEPARATOR that realpath would use:
        \$fileName = str_replace(['\\\\', '/'], DIRECTORY_SEPARATOR, \$fileName);

        static::\$fileCodeGenerators[\$fileName] = \$fileCodeGenerator;
    }
}
", "@app/vendor/zendframework/zend-code/src/Generator/FileGeneratorRegistry.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Generator\\FileGeneratorRegistry.php");
    }
}
