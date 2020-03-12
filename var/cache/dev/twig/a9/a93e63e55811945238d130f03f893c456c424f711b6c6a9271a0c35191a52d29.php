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

/* @app/vendor/symfony/framework-bundle/Secrets/DotenvVault.php */
class __TwigTemplate_8a157ae29b71fa0115f46f19030896a592fbd1926d5584350793332b1a1dff0d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Secrets/DotenvVault.php"));

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
class DotenvVault extends AbstractVault
{
    private \$dotenvFile;

    public function __construct(string \$dotenvFile)
    {
        \$this->dotenvFile = strtr(\$dotenvFile, '/', \\DIRECTORY_SEPARATOR);
    }

    public function generateKeys(bool \$override = false): bool
    {
        \$this->lastMessage = 'The dotenv vault doesn\\'t encrypt secrets thus doesn\\'t need keys.';

        return false;
    }

    public function seal(string \$name, string \$value): void
    {
        \$this->lastMessage = null;
        \$this->validateName(\$name);
        \$v = str_replace(\"'\", \"'\\\\''\", \$value);

        \$content = file_exists(\$this->dotenvFile) ? file_get_contents(\$this->dotenvFile) : '';
        \$content = preg_replace(\"/^\$name=((\\\\\\\\'|'[^']++')++|.*)/m\", \"\$name='\$v'\", \$content, -1, \$count);

        if (!\$count) {
            \$content .= \"\$name='\$v'\\n\";
        }

        file_put_contents(\$this->dotenvFile, \$content);

        \$this->lastMessage = sprintf('Secret \"%s\" %s in \"%s\".', \$name, \$count ? 'added' : 'updated', \$this->getPrettyPath(\$this->dotenvFile));
    }

    public function reveal(string \$name): ?string
    {
        \$this->lastMessage = null;
        \$this->validateName(\$name);
        \$v = \\is_string(\$_SERVER[\$name] ?? null) && 0 !== strpos(\$name, 'HTTP_') ? \$_SERVER[\$name] : (\$_ENV[\$name] ?? null);

        if (null === \$v) {
            \$this->lastMessage = sprintf('Secret \"%s\" not found in \"%s\".', \$name, \$this->getPrettyPath(\$this->dotenvFile));

            return null;
        }

        return \$v;
    }

    public function remove(string \$name): bool
    {
        \$this->lastMessage = null;
        \$this->validateName(\$name);

        \$content = file_exists(\$this->dotenvFile) ? file_get_contents(\$this->dotenvFile) : '';
        \$content = preg_replace(\"/^\$name=((\\\\\\\\'|'[^']++')++|.*)\\n?/m\", '', \$content, -1, \$count);

        if (\$count) {
            file_put_contents(\$this->dotenvFile, \$content);
            \$this->lastMessage = sprintf('Secret \"%s\" removed from file \"%s\".', \$name, \$this->getPrettyPath(\$this->dotenvFile));

            return true;
        }

        \$this->lastMessage = sprintf('Secret \"%s\" not found in \"%s\".', \$name, \$this->getPrettyPath(\$this->dotenvFile));

        return false;
    }

    public function list(bool \$reveal = false): array
    {
        \$this->lastMessage = null;
        \$secrets = [];

        foreach (\$_ENV as \$k => \$v) {
            if (preg_match('/^\\w+\$/D', \$k)) {
                \$secrets[\$k] = \$reveal ? \$v : null;
            }
        }

        foreach (\$_SERVER as \$k => \$v) {
            if (\\is_string(\$v) && preg_match('/^\\w+\$/D', \$k)) {
                \$secrets[\$k] = \$reveal ? \$v : null;
            }
        }

        return \$secrets;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Secrets/DotenvVault.php";
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
class DotenvVault extends AbstractVault
{
    private \$dotenvFile;

    public function __construct(string \$dotenvFile)
    {
        \$this->dotenvFile = strtr(\$dotenvFile, '/', \\DIRECTORY_SEPARATOR);
    }

    public function generateKeys(bool \$override = false): bool
    {
        \$this->lastMessage = 'The dotenv vault doesn\\'t encrypt secrets thus doesn\\'t need keys.';

        return false;
    }

    public function seal(string \$name, string \$value): void
    {
        \$this->lastMessage = null;
        \$this->validateName(\$name);
        \$v = str_replace(\"'\", \"'\\\\''\", \$value);

        \$content = file_exists(\$this->dotenvFile) ? file_get_contents(\$this->dotenvFile) : '';
        \$content = preg_replace(\"/^\$name=((\\\\\\\\'|'[^']++')++|.*)/m\", \"\$name='\$v'\", \$content, -1, \$count);

        if (!\$count) {
            \$content .= \"\$name='\$v'\\n\";
        }

        file_put_contents(\$this->dotenvFile, \$content);

        \$this->lastMessage = sprintf('Secret \"%s\" %s in \"%s\".', \$name, \$count ? 'added' : 'updated', \$this->getPrettyPath(\$this->dotenvFile));
    }

    public function reveal(string \$name): ?string
    {
        \$this->lastMessage = null;
        \$this->validateName(\$name);
        \$v = \\is_string(\$_SERVER[\$name] ?? null) && 0 !== strpos(\$name, 'HTTP_') ? \$_SERVER[\$name] : (\$_ENV[\$name] ?? null);

        if (null === \$v) {
            \$this->lastMessage = sprintf('Secret \"%s\" not found in \"%s\".', \$name, \$this->getPrettyPath(\$this->dotenvFile));

            return null;
        }

        return \$v;
    }

    public function remove(string \$name): bool
    {
        \$this->lastMessage = null;
        \$this->validateName(\$name);

        \$content = file_exists(\$this->dotenvFile) ? file_get_contents(\$this->dotenvFile) : '';
        \$content = preg_replace(\"/^\$name=((\\\\\\\\'|'[^']++')++|.*)\\n?/m\", '', \$content, -1, \$count);

        if (\$count) {
            file_put_contents(\$this->dotenvFile, \$content);
            \$this->lastMessage = sprintf('Secret \"%s\" removed from file \"%s\".', \$name, \$this->getPrettyPath(\$this->dotenvFile));

            return true;
        }

        \$this->lastMessage = sprintf('Secret \"%s\" not found in \"%s\".', \$name, \$this->getPrettyPath(\$this->dotenvFile));

        return false;
    }

    public function list(bool \$reveal = false): array
    {
        \$this->lastMessage = null;
        \$secrets = [];

        foreach (\$_ENV as \$k => \$v) {
            if (preg_match('/^\\w+\$/D', \$k)) {
                \$secrets[\$k] = \$reveal ? \$v : null;
            }
        }

        foreach (\$_SERVER as \$k => \$v) {
            if (\\is_string(\$v) && preg_match('/^\\w+\$/D', \$k)) {
                \$secrets[\$k] = \$reveal ? \$v : null;
            }
        }

        return \$secrets;
    }
}
", "@app/vendor/symfony/framework-bundle/Secrets/DotenvVault.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php");
    }
}
