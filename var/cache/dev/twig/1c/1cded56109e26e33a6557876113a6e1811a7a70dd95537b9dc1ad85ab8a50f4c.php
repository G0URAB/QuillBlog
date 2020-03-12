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

/* @app/vendor/symfony/flex/src/Command/GenerateIdCommand.php */
class __TwigTemplate_bb5a952f02df46ba84e0c051dd53662fe06ec1e28e707f43639df2bc36f05134 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Command/GenerateIdCommand.php"));

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

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class GenerateIdCommand extends Command
{
    private \$flex;

    public function __construct(/* cannot be type-hinted */ \$flex)
    {
        \$this->flex = \$flex;

        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('symfony:generate-id')
            ->setDescription('Generates a unique ID for this project.')
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$this->flex->generateFlexId();

        return 0;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Command/GenerateIdCommand.php";
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

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class GenerateIdCommand extends Command
{
    private \$flex;

    public function __construct(/* cannot be type-hinted */ \$flex)
    {
        \$this->flex = \$flex;

        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('symfony:generate-id')
            ->setDescription('Generates a unique ID for this project.')
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$this->flex->generateFlexId();

        return 0;
    }
}
", "@app/vendor/symfony/flex/src/Command/GenerateIdCommand.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Command\\GenerateIdCommand.php");
    }
}
