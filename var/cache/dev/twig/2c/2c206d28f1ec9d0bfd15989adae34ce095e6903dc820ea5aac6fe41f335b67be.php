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

/* @app/vendor/symfony/flex/src/Command/UpdateCommand.php */
class __TwigTemplate_f063ebdd5ec5f09b666ab99daea0cdfc2f2b92618a0cb703cbf77770bd55dc49 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Command/UpdateCommand.php"));

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

namespace Symfony\\Flex\\Command;

use Composer\\Command\\UpdateCommand as BaseUpdateCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Flex\\PackageResolver;

class UpdateCommand extends BaseUpdateCommand
{
    private \$resolver;

    public function __construct(PackageResolver \$resolver)
    {
        \$this->resolver = \$resolver;

        parent::__construct();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$input->setArgument('packages', \$this->resolver->resolve(\$input->getArgument('packages')));

        if (\$input->hasOption('no-suggest')) {
            \$input->setOption('no-suggest', true);
        }

        return parent::execute(\$input, \$output);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Command/UpdateCommand.php";
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

namespace Symfony\\Flex\\Command;

use Composer\\Command\\UpdateCommand as BaseUpdateCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Flex\\PackageResolver;

class UpdateCommand extends BaseUpdateCommand
{
    private \$resolver;

    public function __construct(PackageResolver \$resolver)
    {
        \$this->resolver = \$resolver;

        parent::__construct();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$input->setArgument('packages', \$this->resolver->resolve(\$input->getArgument('packages')));

        if (\$input->hasOption('no-suggest')) {
            \$input->setOption('no-suggest', true);
        }

        return parent::execute(\$input, \$output);
    }
}
", "@app/vendor/symfony/flex/src/Command/UpdateCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Command\\UpdateCommand.php");
    }
}
