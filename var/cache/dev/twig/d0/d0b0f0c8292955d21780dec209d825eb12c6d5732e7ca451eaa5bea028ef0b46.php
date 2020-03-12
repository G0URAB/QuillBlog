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

/* @app/vendor/symfony/flex/src/Lock.php */
class __TwigTemplate_58aaffc00851c8d5a3aab4c008a16fb6244291dc95cd003e71841539821f8325 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Lock.php"));

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

namespace Symfony\\Flex;

use Composer\\Json\\JsonFile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Lock
{
    private \$json;
    private \$lock = [];
    private \$changed = false;

    public function __construct(\$lockFile)
    {
        \$this->json = new JsonFile(\$lockFile);
        if (\$this->json->exists()) {
            \$this->lock = \$this->json->read();
        }
    }

    public function has(\$name): bool
    {
        return \\array_key_exists(\$name, \$this->lock);
    }

    public function add(\$name, \$data)
    {
        \$current = \$this->lock[\$name] ?? [];
        \$this->lock[\$name] = array_merge(\$current, \$data);
        \$this->changed = true;
    }

    public function get(\$name)
    {
        return \$this->lock[\$name] ?? null;
    }

    public function set(\$name, \$data)
    {
        if (!\\array_key_exists(\$name, \$this->lock) || \$data !== \$this->lock[\$name]) {
            \$this->lock[\$name] = \$data;
            \$this->changed = true;
        }
    }

    public function remove(\$name)
    {
        if (\\array_key_exists(\$name, \$this->lock)) {
            unset(\$this->lock[\$name]);
            \$this->changed = true;
        }
    }

    public function write()
    {
        if (!\$this->changed) {
            return;
        }

        if (\$this->lock) {
            ksort(\$this->lock);
            \$this->json->write(\$this->lock);
        } elseif (\$this->json->exists()) {
            @unlink(\$this->json->getPath());
        }
    }

    public function all(): array
    {
        return \$this->lock;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Lock.php";
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

namespace Symfony\\Flex;

use Composer\\Json\\JsonFile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Lock
{
    private \$json;
    private \$lock = [];
    private \$changed = false;

    public function __construct(\$lockFile)
    {
        \$this->json = new JsonFile(\$lockFile);
        if (\$this->json->exists()) {
            \$this->lock = \$this->json->read();
        }
    }

    public function has(\$name): bool
    {
        return \\array_key_exists(\$name, \$this->lock);
    }

    public function add(\$name, \$data)
    {
        \$current = \$this->lock[\$name] ?? [];
        \$this->lock[\$name] = array_merge(\$current, \$data);
        \$this->changed = true;
    }

    public function get(\$name)
    {
        return \$this->lock[\$name] ?? null;
    }

    public function set(\$name, \$data)
    {
        if (!\\array_key_exists(\$name, \$this->lock) || \$data !== \$this->lock[\$name]) {
            \$this->lock[\$name] = \$data;
            \$this->changed = true;
        }
    }

    public function remove(\$name)
    {
        if (\\array_key_exists(\$name, \$this->lock)) {
            unset(\$this->lock[\$name]);
            \$this->changed = true;
        }
    }

    public function write()
    {
        if (!\$this->changed) {
            return;
        }

        if (\$this->lock) {
            ksort(\$this->lock);
            \$this->json->write(\$this->lock);
        } elseif (\$this->json->exists()) {
            @unlink(\$this->json->getPath());
        }
    }

    public function all(): array
    {
        return \$this->lock;
    }
}
", "@app/vendor/symfony/flex/src/Lock.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Lock.php");
    }
}
