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

/* @app/vendor/symfony/flex/src/Configurator/CopyFromPackageConfigurator.php */
class __TwigTemplate_d1178bdedd089a3b7b65ee5672ad829fc58522f12b42406ea360c3816b81f0fc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/src/Configurator/CopyFromPackageConfigurator.php"));

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

namespace Symfony\\Flex\\Configurator;

use LogicException;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CopyFromPackageConfigurator extends AbstractConfigurator
{
    public function configure(Recipe \$recipe, \$config, Lock \$lock, array \$options = [])
    {
        \$this->write('Copying files from package');
        \$packageDir = \$this->composer->getInstallationManager()->getInstallPath(\$recipe->getPackage());
        \$options = array_merge(\$this->options->toArray(), \$options);

        \$this->copyFiles(\$config, \$packageDir, \$options);
    }

    public function unconfigure(Recipe \$recipe, \$config, Lock \$lock)
    {
        \$this->write('Removing files from package');
        \$packageDir = \$this->composer->getInstallationManager()->getInstallPath(\$recipe->getPackage());
        \$this->removeFiles(\$config, \$packageDir, \$this->options->get('root-dir'));
    }

    private function copyFiles(array \$manifest, string \$from, array \$options)
    {
        \$to = \$options['root-dir'] ?? '.';
        foreach (\$manifest as \$source => \$target) {
            \$target = \$this->options->expandTargetDir(\$target);
            if ('/' === substr(\$source, -1)) {
                \$this->copyDir(\$this->path->concatenate([\$from, \$source]), \$this->path->concatenate([\$to, \$target]), \$options);
            } else {
                \$targetPath = \$this->path->concatenate([\$to, \$target]);
                if (!is_dir(\\dirname(\$targetPath))) {
                    mkdir(\\dirname(\$targetPath), 0777, true);
                    \$this->write(sprintf('  Created <fg=green>\"%s\"</>', \$this->path->relativize(\\dirname(\$targetPath))));
                }

                \$this->copyFile(\$this->path->concatenate([\$from, \$source]), \$targetPath, \$options);
            }
        }
    }

    private function removeFiles(array \$manifest, string \$from, string \$to)
    {
        foreach (\$manifest as \$source => \$target) {
            \$target = \$this->options->expandTargetDir(\$target);
            if ('/' === substr(\$source, -1)) {
                \$this->removeFilesFromDir(\$this->path->concatenate([\$from, \$source]), \$this->path->concatenate([\$to, \$target]));
            } else {
                \$targetPath = \$this->path->concatenate([\$to, \$target]);
                if (file_exists(\$targetPath)) {
                    @unlink(\$targetPath);
                    \$this->write(sprintf('  Removed <fg=green>\"%s\"</>', \$this->path->relativize(\$targetPath)));
                }
            }
        }
    }

    private function copyDir(string \$source, string \$target, array \$options)
    {
        if (!is_dir(\$target)) {
            mkdir(\$target, 0777, true);
        }

        \$iterator = \$this->createSourceIterator(\$source, \\RecursiveIteratorIterator::SELF_FIRST);
        foreach (\$iterator as \$item) {
            \$targetPath = \$this->path->concatenate([\$target, \$iterator->getSubPathName()]);
            if (\$item->isDir()) {
                if (!is_dir(\$targetPath)) {
                    mkdir(\$targetPath);
                    \$this->write(sprintf('  Created <fg=green>\"%s\"</>', \$this->path->relativize(\$targetPath)));
                }
            } elseif (!file_exists(\$targetPath)) {
                \$this->copyFile(\$item, \$targetPath, \$options);
            }
        }
    }

    public function copyFile(string \$source, string \$target, array \$options)
    {
        \$overwrite = \$options['force'] ?? false;
        if (!\$this->options->shouldWriteFile(\$target, \$overwrite)) {
            return;
        }

        if (!file_exists(\$source)) {
            throw new LogicException(sprintf('File \"%s\" does not exist!', \$source));
        }

        file_put_contents(\$target, \$this->options->expandTargetDir(file_get_contents(\$source)));
        @chmod(\$target, fileperms(\$target) | (fileperms(\$source) & 0111));
        \$this->write(sprintf('  Created <fg=green>\"%s\"</>', \$this->path->relativize(\$target)));
    }

    private function removeFilesFromDir(string \$source, string \$target)
    {
        \$iterator = \$this->createSourceIterator(\$source, \\RecursiveIteratorIterator::CHILD_FIRST);
        foreach (\$iterator as \$item) {
            \$targetPath = \$this->path->concatenate([\$target, \$iterator->getSubPathName()]);
            if (\$item->isDir()) {
                // that removes the dir only if it is empty
                @rmdir(\$targetPath);
                \$this->write(sprintf('  Removed directory <fg=green>\"%s\"</>', \$this->path->relativize(\$targetPath)));
            } else {
                @unlink(\$targetPath);
                \$this->write(sprintf('  Removed <fg=green>\"%s\"</>', \$this->path->relativize(\$targetPath)));
            }
        }
    }

    private function createSourceIterator(string \$source, int \$mode): \\RecursiveIteratorIterator
    {
        return new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$source, \\RecursiveDirectoryIterator::SKIP_DOTS), \$mode);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/src/Configurator/CopyFromPackageConfigurator.php";
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

namespace Symfony\\Flex\\Configurator;

use LogicException;
use Symfony\\Flex\\Lock;
use Symfony\\Flex\\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CopyFromPackageConfigurator extends AbstractConfigurator
{
    public function configure(Recipe \$recipe, \$config, Lock \$lock, array \$options = [])
    {
        \$this->write('Copying files from package');
        \$packageDir = \$this->composer->getInstallationManager()->getInstallPath(\$recipe->getPackage());
        \$options = array_merge(\$this->options->toArray(), \$options);

        \$this->copyFiles(\$config, \$packageDir, \$options);
    }

    public function unconfigure(Recipe \$recipe, \$config, Lock \$lock)
    {
        \$this->write('Removing files from package');
        \$packageDir = \$this->composer->getInstallationManager()->getInstallPath(\$recipe->getPackage());
        \$this->removeFiles(\$config, \$packageDir, \$this->options->get('root-dir'));
    }

    private function copyFiles(array \$manifest, string \$from, array \$options)
    {
        \$to = \$options['root-dir'] ?? '.';
        foreach (\$manifest as \$source => \$target) {
            \$target = \$this->options->expandTargetDir(\$target);
            if ('/' === substr(\$source, -1)) {
                \$this->copyDir(\$this->path->concatenate([\$from, \$source]), \$this->path->concatenate([\$to, \$target]), \$options);
            } else {
                \$targetPath = \$this->path->concatenate([\$to, \$target]);
                if (!is_dir(\\dirname(\$targetPath))) {
                    mkdir(\\dirname(\$targetPath), 0777, true);
                    \$this->write(sprintf('  Created <fg=green>\"%s\"</>', \$this->path->relativize(\\dirname(\$targetPath))));
                }

                \$this->copyFile(\$this->path->concatenate([\$from, \$source]), \$targetPath, \$options);
            }
        }
    }

    private function removeFiles(array \$manifest, string \$from, string \$to)
    {
        foreach (\$manifest as \$source => \$target) {
            \$target = \$this->options->expandTargetDir(\$target);
            if ('/' === substr(\$source, -1)) {
                \$this->removeFilesFromDir(\$this->path->concatenate([\$from, \$source]), \$this->path->concatenate([\$to, \$target]));
            } else {
                \$targetPath = \$this->path->concatenate([\$to, \$target]);
                if (file_exists(\$targetPath)) {
                    @unlink(\$targetPath);
                    \$this->write(sprintf('  Removed <fg=green>\"%s\"</>', \$this->path->relativize(\$targetPath)));
                }
            }
        }
    }

    private function copyDir(string \$source, string \$target, array \$options)
    {
        if (!is_dir(\$target)) {
            mkdir(\$target, 0777, true);
        }

        \$iterator = \$this->createSourceIterator(\$source, \\RecursiveIteratorIterator::SELF_FIRST);
        foreach (\$iterator as \$item) {
            \$targetPath = \$this->path->concatenate([\$target, \$iterator->getSubPathName()]);
            if (\$item->isDir()) {
                if (!is_dir(\$targetPath)) {
                    mkdir(\$targetPath);
                    \$this->write(sprintf('  Created <fg=green>\"%s\"</>', \$this->path->relativize(\$targetPath)));
                }
            } elseif (!file_exists(\$targetPath)) {
                \$this->copyFile(\$item, \$targetPath, \$options);
            }
        }
    }

    public function copyFile(string \$source, string \$target, array \$options)
    {
        \$overwrite = \$options['force'] ?? false;
        if (!\$this->options->shouldWriteFile(\$target, \$overwrite)) {
            return;
        }

        if (!file_exists(\$source)) {
            throw new LogicException(sprintf('File \"%s\" does not exist!', \$source));
        }

        file_put_contents(\$target, \$this->options->expandTargetDir(file_get_contents(\$source)));
        @chmod(\$target, fileperms(\$target) | (fileperms(\$source) & 0111));
        \$this->write(sprintf('  Created <fg=green>\"%s\"</>', \$this->path->relativize(\$target)));
    }

    private function removeFilesFromDir(string \$source, string \$target)
    {
        \$iterator = \$this->createSourceIterator(\$source, \\RecursiveIteratorIterator::CHILD_FIRST);
        foreach (\$iterator as \$item) {
            \$targetPath = \$this->path->concatenate([\$target, \$iterator->getSubPathName()]);
            if (\$item->isDir()) {
                // that removes the dir only if it is empty
                @rmdir(\$targetPath);
                \$this->write(sprintf('  Removed directory <fg=green>\"%s\"</>', \$this->path->relativize(\$targetPath)));
            } else {
                @unlink(\$targetPath);
                \$this->write(sprintf('  Removed <fg=green>\"%s\"</>', \$this->path->relativize(\$targetPath)));
            }
        }
    }

    private function createSourceIterator(string \$source, int \$mode): \\RecursiveIteratorIterator
    {
        return new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$source, \\RecursiveDirectoryIterator::SKIP_DOTS), \$mode);
    }
}
", "@app/vendor/symfony/flex/src/Configurator/CopyFromPackageConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\src\\Configurator\\CopyFromPackageConfigurator.php");
    }
}
