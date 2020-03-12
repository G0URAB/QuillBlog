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

/* @app/vendor/zendframework/zend-code/src/Scanner/AggregateDirectoryScanner.php */
class __TwigTemplate_4021e70aed8a5be0ce9727f2c031b5c26df4a1c05b7b713631393434c9b9fea5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Scanner/AggregateDirectoryScanner.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Scanner;

use Zend\\Code\\Exception;

class AggregateDirectoryScanner extends DirectoryScanner
{
    /**
     * @var bool
     */
    protected \$isScanned = false;

    /**
     * @param  bool \$returnScannerClass
     * @todo not implemented
     */
    public function getNamespaces(\$returnScannerClass = false)
    {
        // @todo
    }

    public function getIncludes(\$returnScannerClass = false)
    {
    }

    public function getClasses(\$returnScannerClass = false, \$returnDerivedScannerClass = false)
    {
        \$classes = [];
        foreach (\$this->directories as \$scanner) {
            \$classes += \$scanner->getClasses();
        }
        if (\$returnScannerClass) {
            foreach (\$classes as \$index => \$class) {
                \$classes[\$index] = \$this->getClass(\$class, \$returnScannerClass, \$returnDerivedScannerClass);
            }
        }

        return \$classes;
    }

    /**
     * @param  string \$class
     * @return bool
     */
    public function hasClass(\$class)
    {
        foreach (\$this->directories as \$scanner) {
            if (\$scanner->hasClass(\$class)) {
                break;
            } else {
                unset(\$scanner);
            }
        }

        return isset(\$scanner);
    }

    /**
     * @param  string \$class
     * @param  bool \$returnScannerClass
     * @param  bool \$returnDerivedScannerClass
     * @return ClassScanner|DerivedClassScanner
     * @throws Exception\\RuntimeException
     */
    public function getClass(\$class, \$returnScannerClass = true, \$returnDerivedScannerClass = false)
    {
        foreach (\$this->directories as \$scanner) {
            if (\$scanner->hasClass(\$class)) {
                break;
            } else {
                unset(\$scanner);
            }
        }

        if (! isset(\$scanner)) {
            throw new Exception\\RuntimeException('Class by that name was not found.');
        }

        \$classScanner = \$scanner->getClass(\$class);

        return new DerivedClassScanner(\$classScanner, \$this);
    }

    /**
     * @param bool \$returnScannerClass
     */
    public function getFunctions(\$returnScannerClass = false)
    {
        \$this->scan();

        if (! \$returnScannerClass) {
            \$functions = [];
            foreach (\$this->infos as \$info) {
                if (\$info['type'] == 'function') {
                    \$functions[] = \$info['name'];
                }
            }

            return \$functions;
        }
        \$scannerClass = new FunctionScanner();
        // @todo
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Scanner/AggregateDirectoryScanner.php";
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

namespace Zend\\Code\\Scanner;

use Zend\\Code\\Exception;

class AggregateDirectoryScanner extends DirectoryScanner
{
    /**
     * @var bool
     */
    protected \$isScanned = false;

    /**
     * @param  bool \$returnScannerClass
     * @todo not implemented
     */
    public function getNamespaces(\$returnScannerClass = false)
    {
        // @todo
    }

    public function getIncludes(\$returnScannerClass = false)
    {
    }

    public function getClasses(\$returnScannerClass = false, \$returnDerivedScannerClass = false)
    {
        \$classes = [];
        foreach (\$this->directories as \$scanner) {
            \$classes += \$scanner->getClasses();
        }
        if (\$returnScannerClass) {
            foreach (\$classes as \$index => \$class) {
                \$classes[\$index] = \$this->getClass(\$class, \$returnScannerClass, \$returnDerivedScannerClass);
            }
        }

        return \$classes;
    }

    /**
     * @param  string \$class
     * @return bool
     */
    public function hasClass(\$class)
    {
        foreach (\$this->directories as \$scanner) {
            if (\$scanner->hasClass(\$class)) {
                break;
            } else {
                unset(\$scanner);
            }
        }

        return isset(\$scanner);
    }

    /**
     * @param  string \$class
     * @param  bool \$returnScannerClass
     * @param  bool \$returnDerivedScannerClass
     * @return ClassScanner|DerivedClassScanner
     * @throws Exception\\RuntimeException
     */
    public function getClass(\$class, \$returnScannerClass = true, \$returnDerivedScannerClass = false)
    {
        foreach (\$this->directories as \$scanner) {
            if (\$scanner->hasClass(\$class)) {
                break;
            } else {
                unset(\$scanner);
            }
        }

        if (! isset(\$scanner)) {
            throw new Exception\\RuntimeException('Class by that name was not found.');
        }

        \$classScanner = \$scanner->getClass(\$class);

        return new DerivedClassScanner(\$classScanner, \$this);
    }

    /**
     * @param bool \$returnScannerClass
     */
    public function getFunctions(\$returnScannerClass = false)
    {
        \$this->scan();

        if (! \$returnScannerClass) {
            \$functions = [];
            foreach (\$this->infos as \$info) {
                if (\$info['type'] == 'function') {
                    \$functions[] = \$info['name'];
                }
            }

            return \$functions;
        }
        \$scannerClass = new FunctionScanner();
        // @todo
    }
}
", "@app/vendor/zendframework/zend-code/src/Scanner/AggregateDirectoryScanner.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Scanner\\AggregateDirectoryScanner.php");
    }
}
