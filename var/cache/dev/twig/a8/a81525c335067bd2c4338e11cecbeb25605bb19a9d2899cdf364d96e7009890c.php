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

/* @app/vendor/zendframework/zend-code/src/Scanner/FileScanner.php */
class __TwigTemplate_df1b411a6b685563df5e39547eac32b4cedbe9bf02612f995c7ccc85d320ad50 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Scanner/FileScanner.php"));

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

use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Exception;

use function file_exists;
use function file_get_contents;
use function sprintf;
use function token_get_all;

class FileScanner extends TokenArrayScanner implements ScannerInterface
{
    /**
     * @var string
     */
    protected \$file;

    /**
     * @param  string \$file
     * @param  null|AnnotationManager \$annotationManager
     * @throws Exception\\InvalidArgumentException
     */
    public function __construct(\$file, AnnotationManager \$annotationManager = null)
    {
        \$this->file = \$file;
        if (! file_exists(\$file)) {
            throw new Exception\\InvalidArgumentException(sprintf(
                'File \"%s\" not found',
                \$file
            ));
        }
        parent::__construct(token_get_all(file_get_contents(\$file)), \$annotationManager);
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return \$this->file;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Scanner/FileScanner.php";
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

use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Exception;

use function file_exists;
use function file_get_contents;
use function sprintf;
use function token_get_all;

class FileScanner extends TokenArrayScanner implements ScannerInterface
{
    /**
     * @var string
     */
    protected \$file;

    /**
     * @param  string \$file
     * @param  null|AnnotationManager \$annotationManager
     * @throws Exception\\InvalidArgumentException
     */
    public function __construct(\$file, AnnotationManager \$annotationManager = null)
    {
        \$this->file = \$file;
        if (! file_exists(\$file)) {
            throw new Exception\\InvalidArgumentException(sprintf(
                'File \"%s\" not found',
                \$file
            ));
        }
        parent::__construct(token_get_all(file_get_contents(\$file)), \$annotationManager);
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return \$this->file;
    }
}
", "@app/vendor/zendframework/zend-code/src/Scanner/FileScanner.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Scanner\\FileScanner.php");
    }
}
