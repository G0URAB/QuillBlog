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

/* @app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/LicenseTag.php */
class __TwigTemplate_64620fbc8ddd2d4b531e7c04cdc197ca58bcd89549611e1dfb44b4e79058524f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/LicenseTag.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Reflection\\DocBlock\\Tag;

use function preg_match;
use function trim;

class LicenseTag implements TagInterface
{
    /**
     * @var string
     */
    protected \$url;

    /**
     * @var string
     */
    protected \$licenseName;

    /**
     * @return string
     */
    public function getName()
    {
        return 'license';
    }

    /**
     * Initializer
     *
     * @param  string \$tagDocblockLine
     */
    public function initialize(\$tagDocblockLine)
    {
        \$match = [];

        if (! preg_match('#^([\\S]*)(?:\\s+(.*))?\$#m', \$tagDocblockLine, \$match)) {
            return;
        }

        if (\$match[1] !== '') {
            \$this->url = trim(\$match[1]);
        }

        if (isset(\$match[2]) && \$match[2] !== '') {
            \$this->licenseName = \$match[2];
        }
    }

    /**
     * @return null|string
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * @return null|string
     */
    public function getLicenseName()
    {
        return \$this->licenseName;
    }

    public function __toString()
    {
        return 'DocBlock Tag [ * @' . \$this->getName() . ' ]' . \"\\n\";
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/LicenseTag.php";
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

namespace Zend\\Code\\Reflection\\DocBlock\\Tag;

use function preg_match;
use function trim;

class LicenseTag implements TagInterface
{
    /**
     * @var string
     */
    protected \$url;

    /**
     * @var string
     */
    protected \$licenseName;

    /**
     * @return string
     */
    public function getName()
    {
        return 'license';
    }

    /**
     * Initializer
     *
     * @param  string \$tagDocblockLine
     */
    public function initialize(\$tagDocblockLine)
    {
        \$match = [];

        if (! preg_match('#^([\\S]*)(?:\\s+(.*))?\$#m', \$tagDocblockLine, \$match)) {
            return;
        }

        if (\$match[1] !== '') {
            \$this->url = trim(\$match[1]);
        }

        if (isset(\$match[2]) && \$match[2] !== '') {
            \$this->licenseName = \$match[2];
        }
    }

    /**
     * @return null|string
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * @return null|string
     */
    public function getLicenseName()
    {
        return \$this->licenseName;
    }

    public function __toString()
    {
        return 'DocBlock Tag [ * @' . \$this->getName() . ' ]' . \"\\n\";
    }
}
", "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/LicenseTag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Reflection\\DocBlock\\Tag\\LicenseTag.php");
    }
}
