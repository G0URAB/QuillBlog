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

/* @app/vendor/zendframework/zend-code/src/NameInformation.php */
class __TwigTemplate_e69d6df602c1d6bca304f2adc540187128c86e4077f237a67f961911a401f494 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/NameInformation.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code;

use function array_key_exists;
use function array_search;
use function is_array;
use function is_int;
use function is_string;
use function ltrim;
use function strlen;
use function strpos;
use function strrpos;
use function substr;
use function substr_replace;
use function trim;

class NameInformation
{
    /**
     * @var string
     */
    protected \$namespace;

    /**
     * @var array
     */
    protected \$uses = [];

    /**
     * @param  string \$namespace
     * @param  array \$uses
     */
    public function __construct(\$namespace = null, array \$uses = [])
    {
        if (\$namespace) {
            \$this->setNamespace(\$namespace);
        }
        if (\$uses) {
            \$this->setUses(\$uses);
        }
    }

    /**
     * @param  string \$namespace
     * @return NameInformation
     */
    public function setNamespace(\$namespace)
    {
        \$this->namespace = (string) \$namespace;
        return \$this;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return \$this->namespace;
    }

    /**
     * @return bool
     */
    public function hasNamespace()
    {
        return \$this->namespace !== null;
    }

    /**
     * @param  array \$uses
     * @return NameInformation
     */
    public function setUses(array \$uses)
    {
        \$this->uses = [];
        \$this->addUses(\$uses);

        return \$this;
    }

    /**
     * @param  array \$uses
     * @return NameInformation
     */
    public function addUses(array \$uses)
    {
        foreach (\$uses as \$use => \$as) {
            if (is_int(\$use)) {
                \$this->addUse(\$as);
            } elseif (is_string(\$use)) {
                \$this->addUse(\$use, \$as);
            }
        }

        return \$this;
    }

    /**
     * @param  array|string \$use
     * @param  string \$as
     */
    public function addUse(\$use, \$as = null)
    {
        if (is_array(\$use) && array_key_exists('use', \$use) && array_key_exists('as', \$use)) {
            \$uses = \$use;
            \$use  = \$uses['use'];
            \$as   = \$uses['as'];
        }

        \$use = trim(\$use, '\\\\');
        if (\$as === null) {
            \$as                  = trim(\$use, '\\\\');
            \$nsSeparatorPosition = strrpos(\$as, '\\\\');
            if (\$nsSeparatorPosition !== false && \$nsSeparatorPosition !== 0 && \$nsSeparatorPosition != strlen(\$as)) {
                \$as = substr(\$as, \$nsSeparatorPosition + 1);
            }
        }

        \$this->uses[\$use] = \$as;
    }

    /**
     * @return array
     */
    public function getUses()
    {
        return \$this->uses;
    }

    /**
     * @param  string \$name
     * @return string
     */
    public function resolveName(\$name)
    {
        if (\$this->namespace && ! \$this->uses && strlen(\$name) > 0 && \$name[0] != '\\\\') {
            return \$this->namespace . '\\\\' . \$name;
        }

        if (! \$this->uses || strlen(\$name) <= 0 || \$name[0] == '\\\\') {
            return ltrim(\$name, '\\\\');
        }

        if (\$this->namespace || \$this->uses) {
            \$firstPart = \$name;
            if ((\$firstPartEnd = strpos(\$firstPart, '\\\\')) !== false) {
                \$firstPart = substr(\$firstPart, 0, \$firstPartEnd);
            } else {
                \$firstPartEnd = strlen(\$firstPart);
            }
            if ((\$fqns = array_search(\$firstPart, \$this->uses)) !== false) {
                return substr_replace(\$name, \$fqns, 0, \$firstPartEnd);
            }
            if (\$this->namespace) {
                return \$this->namespace . '\\\\' . \$name;
            }
        }

        return \$name;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/NameInformation.php";
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

namespace Zend\\Code;

use function array_key_exists;
use function array_search;
use function is_array;
use function is_int;
use function is_string;
use function ltrim;
use function strlen;
use function strpos;
use function strrpos;
use function substr;
use function substr_replace;
use function trim;

class NameInformation
{
    /**
     * @var string
     */
    protected \$namespace;

    /**
     * @var array
     */
    protected \$uses = [];

    /**
     * @param  string \$namespace
     * @param  array \$uses
     */
    public function __construct(\$namespace = null, array \$uses = [])
    {
        if (\$namespace) {
            \$this->setNamespace(\$namespace);
        }
        if (\$uses) {
            \$this->setUses(\$uses);
        }
    }

    /**
     * @param  string \$namespace
     * @return NameInformation
     */
    public function setNamespace(\$namespace)
    {
        \$this->namespace = (string) \$namespace;
        return \$this;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return \$this->namespace;
    }

    /**
     * @return bool
     */
    public function hasNamespace()
    {
        return \$this->namespace !== null;
    }

    /**
     * @param  array \$uses
     * @return NameInformation
     */
    public function setUses(array \$uses)
    {
        \$this->uses = [];
        \$this->addUses(\$uses);

        return \$this;
    }

    /**
     * @param  array \$uses
     * @return NameInformation
     */
    public function addUses(array \$uses)
    {
        foreach (\$uses as \$use => \$as) {
            if (is_int(\$use)) {
                \$this->addUse(\$as);
            } elseif (is_string(\$use)) {
                \$this->addUse(\$use, \$as);
            }
        }

        return \$this;
    }

    /**
     * @param  array|string \$use
     * @param  string \$as
     */
    public function addUse(\$use, \$as = null)
    {
        if (is_array(\$use) && array_key_exists('use', \$use) && array_key_exists('as', \$use)) {
            \$uses = \$use;
            \$use  = \$uses['use'];
            \$as   = \$uses['as'];
        }

        \$use = trim(\$use, '\\\\');
        if (\$as === null) {
            \$as                  = trim(\$use, '\\\\');
            \$nsSeparatorPosition = strrpos(\$as, '\\\\');
            if (\$nsSeparatorPosition !== false && \$nsSeparatorPosition !== 0 && \$nsSeparatorPosition != strlen(\$as)) {
                \$as = substr(\$as, \$nsSeparatorPosition + 1);
            }
        }

        \$this->uses[\$use] = \$as;
    }

    /**
     * @return array
     */
    public function getUses()
    {
        return \$this->uses;
    }

    /**
     * @param  string \$name
     * @return string
     */
    public function resolveName(\$name)
    {
        if (\$this->namespace && ! \$this->uses && strlen(\$name) > 0 && \$name[0] != '\\\\') {
            return \$this->namespace . '\\\\' . \$name;
        }

        if (! \$this->uses || strlen(\$name) <= 0 || \$name[0] == '\\\\') {
            return ltrim(\$name, '\\\\');
        }

        if (\$this->namespace || \$this->uses) {
            \$firstPart = \$name;
            if ((\$firstPartEnd = strpos(\$firstPart, '\\\\')) !== false) {
                \$firstPart = substr(\$firstPart, 0, \$firstPartEnd);
            } else {
                \$firstPartEnd = strlen(\$firstPart);
            }
            if ((\$fqns = array_search(\$firstPart, \$this->uses)) !== false) {
                return substr_replace(\$name, \$fqns, 0, \$firstPartEnd);
            }
            if (\$this->namespace) {
                return \$this->namespace . '\\\\' . \$name;
            }
        }

        return \$name;
    }
}
", "@app/vendor/zendframework/zend-code/src/NameInformation.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\NameInformation.php");
    }
}
