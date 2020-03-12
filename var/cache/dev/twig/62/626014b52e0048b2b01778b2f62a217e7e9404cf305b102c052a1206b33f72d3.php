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

/* @app/vendor/symfony/var-dumper/Caster/CutArrayStub.php */
class __TwigTemplate_4c2d4ccc62c34f46d115823dbb58a49bb8f64c0a52915418df858b144bbd0dfa extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/Caster/CutArrayStub.php"));

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

/**
 * Represents a cut array.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CutArrayStub extends CutStub
{
    public \$preservedSubset;

    public function __construct(array \$value, array \$preservedKeys)
    {
        parent::__construct(\$value);

        \$this->preservedSubset = array_intersect_key(\$value, array_flip(\$preservedKeys));
        \$this->cut -= \\count(\$this->preservedSubset);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/var-dumper/Caster/CutArrayStub.php";
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

/**
 * Represents a cut array.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CutArrayStub extends CutStub
{
    public \$preservedSubset;

    public function __construct(array \$value, array \$preservedKeys)
    {
        parent::__construct(\$value);

        \$this->preservedSubset = array_intersect_key(\$value, array_flip(\$preservedKeys));
        \$this->cut -= \\count(\$this->preservedSubset);
    }
}
", "@app/vendor/symfony/var-dumper/Caster/CutArrayStub.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\Caster\\CutArrayStub.php");
    }
}
