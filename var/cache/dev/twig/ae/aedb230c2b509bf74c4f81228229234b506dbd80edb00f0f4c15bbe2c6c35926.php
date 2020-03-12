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

/* @app/vendor/symfony/maker-bundle/src/Test/MakerTestCase.php */
class __TwigTemplate_89c03c0caddc417efd2642be850806fe11220da3a32d0c52e54ced8634c71245 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Test/MakerTestCase.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Test;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Bundle\\MakerBundle\\Str;

abstract class MakerTestCase extends TestCase
{
    private \$kernel;

    /**
     * @dataProvider getTestDetails
     */
    public function testExecute(MakerTestDetails \$makerTestDetails)
    {
        \$this->executeMakerCommand(\$makerTestDetails);
    }

    abstract public function getTestDetails();

    protected function executeMakerCommand(MakerTestDetails \$testDetails)
    {
        if (!\$testDetails->isSupportedByCurrentPhpVersion()) {
            \$this->markTestSkipped();
        }

        \$testEnv = MakerTestEnvironment::create(\$testDetails);

        // prepare environment to test
        \$testEnv->prepare();

        // run tests
        \$makerTestProcess = \$testEnv->runMaker();
        \$files = \$testEnv->getGeneratedFilesFromOutputText();

        foreach (\$files as \$file) {
            \$this->assertTrue(\$testEnv->fileExists(\$file));

            if ('.php' === substr(\$file, -4)) {
                \$csProcess = \$testEnv->runPhpCSFixer(\$file);

                \$this->assertTrue(\$csProcess->isSuccessful(), sprintf(
                    \"File '%s' has a php-cs problem: %s\\n\",
                    \$file,
                    \$csProcess->getErrorOutput().\"\\n\".\$csProcess->getOutput()
                ));
            }

            if ('.twig' === substr(\$file, -5)) {
                \$csProcess = \$testEnv->runTwigCSLint(\$file);

                \$this->assertTrue(\$csProcess->isSuccessful(), sprintf('File \"%s\" has a twig-cs problem: %s', \$file, \$csProcess->getErrorOutput().\"\\n\".\$csProcess->getOutput()));
            }
        }

        // run internal tests
        \$internalTestProcess = \$testEnv->runInternalTests();
        if (null !== \$internalTestProcess) {
            \$this->assertTrue(\$internalTestProcess->isSuccessful(), sprintf(\"Error while running the PHPUnit tests *in* the project: \\n\\n %s \\n\\n Command Output: %s\", \$internalTestProcess->getErrorOutput().\"\\n\".\$internalTestProcess->getOutput(), \$makerTestProcess->getErrorOutput().\"\\n\".\$makerTestProcess->getOutput()));
        }

        // checkout user asserts
        if (null === \$testDetails->getAssert()) {
            \$this->assertStringContainsString('Success', \$makerTestProcess->getOutput(), \$makerTestProcess->getErrorOutput());
        } else {
            (\$testDetails->getAssert())(\$makerTestProcess->getOutput(), \$testEnv->getPath());
        }
    }

    protected function assertContainsCount(string \$needle, string \$haystack, int \$count)
    {
        \$this->assertEquals(1, substr_count(\$haystack, \$needle), sprintf('Found more than %d occurrences of \"%s\" in \"%s\"', \$count, \$needle, \$haystack));
    }

    protected function getMakerInstance(string \$makerClass): MakerInterface
    {
        if (null === \$this->kernel) {
            \$this->kernel = new MakerTestKernel('dev', true);
            \$this->kernel->boot();
        }

        // a cheap way to guess the service id
        \$serviceId = \$serviceId ?? sprintf('maker.maker.%s', Str::asRouteName((new \\ReflectionClass(\$makerClass))->getShortName()));

        return \$this->kernel->getContainer()->get(\$serviceId);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Test/MakerTestCase.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Test;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\MakerBundle\\MakerInterface;
use Symfony\\Bundle\\MakerBundle\\Str;

abstract class MakerTestCase extends TestCase
{
    private \$kernel;

    /**
     * @dataProvider getTestDetails
     */
    public function testExecute(MakerTestDetails \$makerTestDetails)
    {
        \$this->executeMakerCommand(\$makerTestDetails);
    }

    abstract public function getTestDetails();

    protected function executeMakerCommand(MakerTestDetails \$testDetails)
    {
        if (!\$testDetails->isSupportedByCurrentPhpVersion()) {
            \$this->markTestSkipped();
        }

        \$testEnv = MakerTestEnvironment::create(\$testDetails);

        // prepare environment to test
        \$testEnv->prepare();

        // run tests
        \$makerTestProcess = \$testEnv->runMaker();
        \$files = \$testEnv->getGeneratedFilesFromOutputText();

        foreach (\$files as \$file) {
            \$this->assertTrue(\$testEnv->fileExists(\$file));

            if ('.php' === substr(\$file, -4)) {
                \$csProcess = \$testEnv->runPhpCSFixer(\$file);

                \$this->assertTrue(\$csProcess->isSuccessful(), sprintf(
                    \"File '%s' has a php-cs problem: %s\\n\",
                    \$file,
                    \$csProcess->getErrorOutput().\"\\n\".\$csProcess->getOutput()
                ));
            }

            if ('.twig' === substr(\$file, -5)) {
                \$csProcess = \$testEnv->runTwigCSLint(\$file);

                \$this->assertTrue(\$csProcess->isSuccessful(), sprintf('File \"%s\" has a twig-cs problem: %s', \$file, \$csProcess->getErrorOutput().\"\\n\".\$csProcess->getOutput()));
            }
        }

        // run internal tests
        \$internalTestProcess = \$testEnv->runInternalTests();
        if (null !== \$internalTestProcess) {
            \$this->assertTrue(\$internalTestProcess->isSuccessful(), sprintf(\"Error while running the PHPUnit tests *in* the project: \\n\\n %s \\n\\n Command Output: %s\", \$internalTestProcess->getErrorOutput().\"\\n\".\$internalTestProcess->getOutput(), \$makerTestProcess->getErrorOutput().\"\\n\".\$makerTestProcess->getOutput()));
        }

        // checkout user asserts
        if (null === \$testDetails->getAssert()) {
            \$this->assertStringContainsString('Success', \$makerTestProcess->getOutput(), \$makerTestProcess->getErrorOutput());
        } else {
            (\$testDetails->getAssert())(\$makerTestProcess->getOutput(), \$testEnv->getPath());
        }
    }

    protected function assertContainsCount(string \$needle, string \$haystack, int \$count)
    {
        \$this->assertEquals(1, substr_count(\$haystack, \$needle), sprintf('Found more than %d occurrences of \"%s\" in \"%s\"', \$count, \$needle, \$haystack));
    }

    protected function getMakerInstance(string \$makerClass): MakerInterface
    {
        if (null === \$this->kernel) {
            \$this->kernel = new MakerTestKernel('dev', true);
            \$this->kernel->boot();
        }

        // a cheap way to guess the service id
        \$serviceId = \$serviceId ?? sprintf('maker.maker.%s', Str::asRouteName((new \\ReflectionClass(\$makerClass))->getShortName()));

        return \$this->kernel->getContainer()->get(\$serviceId);
    }
}
", "@app/vendor/symfony/maker-bundle/src/Test/MakerTestCase.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Test\\MakerTestCase.php");
    }
}
