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

/* @app/vendor/symfony/framework-bundle/Secrets/AbstractVault.php */
class __TwigTemplate_79d7060e9871c8e657e17d5d9fe2f507a0c94fa17c80f2a9e261a992c1810900 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Secrets/AbstractVault.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Secrets;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
abstract class AbstractVault
{
    protected \$lastMessage;

    public function getLastMessage(): ?string
    {
        return \$this->lastMessage;
    }

    abstract public function generateKeys(bool \$override = false): bool;

    abstract public function seal(string \$name, string \$value): void;

    abstract public function reveal(string \$name): ?string;

    abstract public function remove(string \$name): bool;

    abstract public function list(bool \$reveal = false): array;

    protected function validateName(string \$name): void
    {
        if (!preg_match('/^\\w++\$/D', \$name)) {
            throw new \\LogicException(sprintf('Invalid secret name \"%s\": only \"word\" characters are allowed.', \$name));
        }
    }

    protected function getPrettyPath(string \$path)
    {
        return str_replace(getcwd().\\DIRECTORY_SEPARATOR, '', \$path);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Secrets/AbstractVault.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Secrets;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
abstract class AbstractVault
{
    protected \$lastMessage;

    public function getLastMessage(): ?string
    {
        return \$this->lastMessage;
    }

    abstract public function generateKeys(bool \$override = false): bool;

    abstract public function seal(string \$name, string \$value): void;

    abstract public function reveal(string \$name): ?string;

    abstract public function remove(string \$name): bool;

    abstract public function list(bool \$reveal = false): array;

    protected function validateName(string \$name): void
    {
        if (!preg_match('/^\\w++\$/D', \$name)) {
            throw new \\LogicException(sprintf('Invalid secret name \"%s\": only \"word\" characters are allowed.', \$name));
        }
    }

    protected function getPrettyPath(string \$path)
    {
        return str_replace(getcwd().\\DIRECTORY_SEPARATOR, '', \$path);
    }
}
", "@app/vendor/symfony/framework-bundle/Secrets/AbstractVault.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php");
    }
}
