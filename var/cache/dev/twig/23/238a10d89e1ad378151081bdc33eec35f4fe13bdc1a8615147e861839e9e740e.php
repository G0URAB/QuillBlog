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

/* @app/vendor/symfony/console/Question/ConfirmationQuestion.php */
class __TwigTemplate_8fc10873054f2ebaa8cde8a5bea67423bf22578b73f6fc0eb61974a76beacece extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/Question/ConfirmationQuestion.php"));

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

namespace Symfony\\Component\\Console\\Question;

/**
 * Represents a yes/no question.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ConfirmationQuestion extends Question
{
    private \$trueAnswerRegex;

    /**
     * @param string \$question        The question to ask to the user
     * @param bool   \$default         The default answer to return, true or false
     * @param string \$trueAnswerRegex A regex to match the \"yes\" answer
     */
    public function __construct(string \$question, bool \$default = true, string \$trueAnswerRegex = '/^y/i')
    {
        parent::__construct(\$question, \$default);

        \$this->trueAnswerRegex = \$trueAnswerRegex;
        \$this->setNormalizer(\$this->getDefaultNormalizer());
    }

    /**
     * Returns the default answer normalizer.
     */
    private function getDefaultNormalizer(): callable
    {
        \$default = \$this->getDefault();
        \$regex = \$this->trueAnswerRegex;

        return function (\$answer) use (\$default, \$regex) {
            if (\\is_bool(\$answer)) {
                return \$answer;
            }

            \$answerIsTrue = (bool) preg_match(\$regex, \$answer);
            if (false === \$default) {
                return \$answer && \$answerIsTrue;
            }

            return '' === \$answer || \$answerIsTrue;
        };
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/Question/ConfirmationQuestion.php";
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

namespace Symfony\\Component\\Console\\Question;

/**
 * Represents a yes/no question.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ConfirmationQuestion extends Question
{
    private \$trueAnswerRegex;

    /**
     * @param string \$question        The question to ask to the user
     * @param bool   \$default         The default answer to return, true or false
     * @param string \$trueAnswerRegex A regex to match the \"yes\" answer
     */
    public function __construct(string \$question, bool \$default = true, string \$trueAnswerRegex = '/^y/i')
    {
        parent::__construct(\$question, \$default);

        \$this->trueAnswerRegex = \$trueAnswerRegex;
        \$this->setNormalizer(\$this->getDefaultNormalizer());
    }

    /**
     * Returns the default answer normalizer.
     */
    private function getDefaultNormalizer(): callable
    {
        \$default = \$this->getDefault();
        \$regex = \$this->trueAnswerRegex;

        return function (\$answer) use (\$default, \$regex) {
            if (\\is_bool(\$answer)) {
                return \$answer;
            }

            \$answerIsTrue = (bool) preg_match(\$regex, \$answer);
            if (false === \$default) {
                return \$answer && \$answerIsTrue;
            }

            return '' === \$answer || \$answerIsTrue;
        };
    }
}
", "@app/vendor/symfony/console/Question/ConfirmationQuestion.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\Question\\ConfirmationQuestion.php");
    }
}
