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

/* @app/vendor/symfony/console/Helper/SymfonyQuestionHelper.php */
class __TwigTemplate_24c686e7b61372a33b8c7198d4d8204a34fb6bb3fc6305c1a1f4185020c2e63e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Helper/SymfonyQuestionHelper.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Formatter\\OutputFormatter;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Question\\ChoiceQuestion;
use Symfony\\Component\\Console\\Question\\ConfirmationQuestion;
use Symfony\\Component\\Console\\Question\\Question;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Symfony Style Guide compliant question helper.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class SymfonyQuestionHelper extends QuestionHelper
{
    /**
     * {@inheritdoc}
     */
    protected function writePrompt(OutputInterface \$output, Question \$question)
    {
        \$text = OutputFormatter::escapeTrailingBackslash(\$question->getQuestion());
        \$default = \$question->getDefault();

        switch (true) {
            case null === \$default:
                \$text = sprintf(' <info>%s</info>:', \$text);

                break;

            case \$question instanceof ConfirmationQuestion:
                \$text = sprintf(' <info>%s (yes/no)</info> [<comment>%s</comment>]:', \$text, \$default ? 'yes' : 'no');

                break;

            case \$question instanceof ChoiceQuestion && \$question->isMultiselect():
                \$choices = \$question->getChoices();
                \$default = explode(',', \$default);

                foreach (\$default as \$key => \$value) {
                    \$default[\$key] = \$choices[trim(\$value)];
                }

                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(implode(', ', \$default)));

                break;

            case \$question instanceof ChoiceQuestion:
                \$choices = \$question->getChoices();
                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(isset(\$choices[\$default]) ? \$choices[\$default] : \$default));

                break;

            default:
                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(\$default));
        }

        \$output->writeln(\$text);

        \$prompt = ' > ';

        if (\$question instanceof ChoiceQuestion) {
            \$output->writeln(\$this->formatChoiceQuestionChoices(\$question, 'comment'));

            \$prompt = \$question->getPrompt();
        }

        \$output->write(\$prompt);
    }

    /**
     * {@inheritdoc}
     */
    protected function writeError(OutputInterface \$output, \\Exception \$error)
    {
        if (\$output instanceof SymfonyStyle) {
            \$output->newLine();
            \$output->error(\$error->getMessage());

            return;
        }

        parent::writeError(\$output, \$error);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Helper/SymfonyQuestionHelper.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Formatter\\OutputFormatter;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Question\\ChoiceQuestion;
use Symfony\\Component\\Console\\Question\\ConfirmationQuestion;
use Symfony\\Component\\Console\\Question\\Question;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Symfony Style Guide compliant question helper.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class SymfonyQuestionHelper extends QuestionHelper
{
    /**
     * {@inheritdoc}
     */
    protected function writePrompt(OutputInterface \$output, Question \$question)
    {
        \$text = OutputFormatter::escapeTrailingBackslash(\$question->getQuestion());
        \$default = \$question->getDefault();

        switch (true) {
            case null === \$default:
                \$text = sprintf(' <info>%s</info>:', \$text);

                break;

            case \$question instanceof ConfirmationQuestion:
                \$text = sprintf(' <info>%s (yes/no)</info> [<comment>%s</comment>]:', \$text, \$default ? 'yes' : 'no');

                break;

            case \$question instanceof ChoiceQuestion && \$question->isMultiselect():
                \$choices = \$question->getChoices();
                \$default = explode(',', \$default);

                foreach (\$default as \$key => \$value) {
                    \$default[\$key] = \$choices[trim(\$value)];
                }

                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(implode(', ', \$default)));

                break;

            case \$question instanceof ChoiceQuestion:
                \$choices = \$question->getChoices();
                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(isset(\$choices[\$default]) ? \$choices[\$default] : \$default));

                break;

            default:
                \$text = sprintf(' <info>%s</info> [<comment>%s</comment>]:', \$text, OutputFormatter::escape(\$default));
        }

        \$output->writeln(\$text);

        \$prompt = ' > ';

        if (\$question instanceof ChoiceQuestion) {
            \$output->writeln(\$this->formatChoiceQuestionChoices(\$question, 'comment'));

            \$prompt = \$question->getPrompt();
        }

        \$output->write(\$prompt);
    }

    /**
     * {@inheritdoc}
     */
    protected function writeError(OutputInterface \$output, \\Exception \$error)
    {
        if (\$output instanceof SymfonyStyle) {
            \$output->newLine();
            \$output->error(\$error->getMessage());

            return;
        }

        parent::writeError(\$output, \$error);
    }
}
", "@app/vendor/symfony/console/Helper/SymfonyQuestionHelper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Helper\\SymfonyQuestionHelper.php");
    }
}
