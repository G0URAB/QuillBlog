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

/* @app/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php */
class __TwigTemplate_91fba2407b1e402c6225c505f9a504dec8c558b5360cd26371dfe435c8a68675 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php"));

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

namespace Symfony\\Component\\DependencyInjection\\ParameterBag;

use Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * Holds parameters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParameterBag implements ParameterBagInterface
{
    protected \$parameters = [];
    protected \$resolved = false;

    /**
     * @param array \$parameters An array of parameters
     */
    public function __construct(array \$parameters = [])
    {
        \$this->add(\$parameters);
    }

    /**
     * Clears all parameters.
     */
    public function clear()
    {
        \$this->parameters = [];
    }

    /**
     * Adds parameters to the service container parameters.
     *
     * @param array \$parameters An array of parameters
     */
    public function add(array \$parameters)
    {
        foreach (\$parameters as \$key => \$value) {
            \$this->set(\$key, \$value);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return \$this->parameters;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$name)
    {
        if (!\\array_key_exists(\$name, \$this->parameters)) {
            if (!\$name) {
                throw new ParameterNotFoundException(\$name);
            }

            \$alternatives = [];
            foreach (\$this->parameters as \$key => \$parameterValue) {
                \$lev = levenshtein(\$name, \$key);
                if (\$lev <= \\strlen(\$name) / 3 || false !== strpos(\$key, \$name)) {
                    \$alternatives[] = \$key;
                }
            }

            \$nonNestedAlternative = null;
            if (!\\count(\$alternatives) && false !== strpos(\$name, '.')) {
                \$namePartsLength = array_map('strlen', explode('.', \$name));
                \$key = substr(\$name, 0, -1 * (1 + array_pop(\$namePartsLength)));
                while (\\count(\$namePartsLength)) {
                    if (\$this->has(\$key)) {
                        if (\\is_array(\$this->get(\$key))) {
                            \$nonNestedAlternative = \$key;
                        }
                        break;
                    }

                    \$key = substr(\$key, 0, -1 * (1 + array_pop(\$namePartsLength)));
                }
            }

            throw new ParameterNotFoundException(\$name, null, null, null, \$alternatives, \$nonNestedAlternative);
        }

        return \$this->parameters[\$name];
    }

    /**
     * Sets a service container parameter.
     *
     * @param string \$name  The parameter name
     * @param mixed  \$value The parameter value
     */
    public function set(string \$name, \$value)
    {
        \$this->parameters[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function has(string \$name)
    {
        return \\array_key_exists((string) \$name, \$this->parameters);
    }

    /**
     * Removes a parameter.
     *
     * @param string \$name The parameter name
     */
    public function remove(string \$name)
    {
        unset(\$this->parameters[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve()
    {
        if (\$this->resolved) {
            return;
        }

        \$parameters = [];
        foreach (\$this->parameters as \$key => \$value) {
            try {
                \$value = \$this->resolveValue(\$value);
                \$parameters[\$key] = \$this->unescapeValue(\$value);
            } catch (ParameterNotFoundException \$e) {
                \$e->setSourceKey(\$key);

                throw \$e;
            }
        }

        \$this->parameters = \$parameters;
        \$this->resolved = true;
    }

    /**
     * Replaces parameter placeholders (%name%) by their values.
     *
     * @param mixed \$value     A value
     * @param array \$resolving An array of keys that are being resolved (used internally to detect circular references)
     *
     * @return mixed The resolved value
     *
     * @throws ParameterNotFoundException          if a placeholder references a parameter that does not exist
     * @throws ParameterCircularReferenceException if a circular reference if detected
     * @throws RuntimeException                    when a given parameter has a type problem
     */
    public function resolveValue(\$value, array \$resolving = [])
    {
        if (\\is_array(\$value)) {
            \$args = [];
            foreach (\$value as \$k => \$v) {
                \$args[\\is_string(\$k) ? \$this->resolveValue(\$k, \$resolving) : \$k] = \$this->resolveValue(\$v, \$resolving);
            }

            return \$args;
        }

        if (!\\is_string(\$value) || 2 > \\strlen(\$value)) {
            return \$value;
        }

        return \$this->resolveString(\$value, \$resolving);
    }

    /**
     * Resolves parameters inside a string.
     *
     * @param array \$resolving An array of keys that are being resolved (used internally to detect circular references)
     *
     * @return mixed The resolved string
     *
     * @throws ParameterNotFoundException          if a placeholder references a parameter that does not exist
     * @throws ParameterCircularReferenceException if a circular reference if detected
     * @throws RuntimeException                    when a given parameter has a type problem
     */
    public function resolveString(string \$value, array \$resolving = [])
    {
        // we do this to deal with non string values (Boolean, integer, ...)
        // as the preg_replace_callback throw an exception when trying
        // a non-string in a parameter value
        if (preg_match('/^%([^%\\s]+)%\$/', \$value, \$match)) {
            \$key = \$match[1];

            if (isset(\$resolving[\$key])) {
                throw new ParameterCircularReferenceException(array_keys(\$resolving));
            }

            \$resolving[\$key] = true;

            return \$this->resolved ? \$this->get(\$key) : \$this->resolveValue(\$this->get(\$key), \$resolving);
        }

        return preg_replace_callback('/%%|%([^%\\s]+)%/', function (\$match) use (\$resolving, \$value) {
            // skip %%
            if (!isset(\$match[1])) {
                return '%%';
            }

            \$key = \$match[1];
            if (isset(\$resolving[\$key])) {
                throw new ParameterCircularReferenceException(array_keys(\$resolving));
            }

            \$resolved = \$this->get(\$key);

            if (!\\is_string(\$resolved) && !is_numeric(\$resolved)) {
                throw new RuntimeException(sprintf('A string value must be composed of strings and/or numbers, but found parameter \"%s\" of type %s inside string value \"%s\".', \$key, \\gettype(\$resolved), \$value));
            }

            \$resolved = (string) \$resolved;
            \$resolving[\$key] = true;

            return \$this->isResolved() ? \$resolved : \$this->resolveString(\$resolved, \$resolving);
        }, \$value);
    }

    public function isResolved()
    {
        return \$this->resolved;
    }

    /**
     * {@inheritdoc}
     */
    public function escapeValue(\$value)
    {
        if (\\is_string(\$value)) {
            return str_replace('%', '%%', \$value);
        }

        if (\\is_array(\$value)) {
            \$result = [];
            foreach (\$value as \$k => \$v) {
                \$result[\$k] = \$this->escapeValue(\$v);
            }

            return \$result;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function unescapeValue(\$value)
    {
        if (\\is_string(\$value)) {
            return str_replace('%%', '%', \$value);
        }

        if (\\is_array(\$value)) {
            \$result = [];
            foreach (\$value as \$k => \$v) {
                \$result[\$k] = \$this->unescapeValue(\$v);
            }

            return \$result;
        }

        return \$value;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php";
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

namespace Symfony\\Component\\DependencyInjection\\ParameterBag;

use Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * Holds parameters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParameterBag implements ParameterBagInterface
{
    protected \$parameters = [];
    protected \$resolved = false;

    /**
     * @param array \$parameters An array of parameters
     */
    public function __construct(array \$parameters = [])
    {
        \$this->add(\$parameters);
    }

    /**
     * Clears all parameters.
     */
    public function clear()
    {
        \$this->parameters = [];
    }

    /**
     * Adds parameters to the service container parameters.
     *
     * @param array \$parameters An array of parameters
     */
    public function add(array \$parameters)
    {
        foreach (\$parameters as \$key => \$value) {
            \$this->set(\$key, \$value);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return \$this->parameters;
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$name)
    {
        if (!\\array_key_exists(\$name, \$this->parameters)) {
            if (!\$name) {
                throw new ParameterNotFoundException(\$name);
            }

            \$alternatives = [];
            foreach (\$this->parameters as \$key => \$parameterValue) {
                \$lev = levenshtein(\$name, \$key);
                if (\$lev <= \\strlen(\$name) / 3 || false !== strpos(\$key, \$name)) {
                    \$alternatives[] = \$key;
                }
            }

            \$nonNestedAlternative = null;
            if (!\\count(\$alternatives) && false !== strpos(\$name, '.')) {
                \$namePartsLength = array_map('strlen', explode('.', \$name));
                \$key = substr(\$name, 0, -1 * (1 + array_pop(\$namePartsLength)));
                while (\\count(\$namePartsLength)) {
                    if (\$this->has(\$key)) {
                        if (\\is_array(\$this->get(\$key))) {
                            \$nonNestedAlternative = \$key;
                        }
                        break;
                    }

                    \$key = substr(\$key, 0, -1 * (1 + array_pop(\$namePartsLength)));
                }
            }

            throw new ParameterNotFoundException(\$name, null, null, null, \$alternatives, \$nonNestedAlternative);
        }

        return \$this->parameters[\$name];
    }

    /**
     * Sets a service container parameter.
     *
     * @param string \$name  The parameter name
     * @param mixed  \$value The parameter value
     */
    public function set(string \$name, \$value)
    {
        \$this->parameters[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function has(string \$name)
    {
        return \\array_key_exists((string) \$name, \$this->parameters);
    }

    /**
     * Removes a parameter.
     *
     * @param string \$name The parameter name
     */
    public function remove(string \$name)
    {
        unset(\$this->parameters[\$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve()
    {
        if (\$this->resolved) {
            return;
        }

        \$parameters = [];
        foreach (\$this->parameters as \$key => \$value) {
            try {
                \$value = \$this->resolveValue(\$value);
                \$parameters[\$key] = \$this->unescapeValue(\$value);
            } catch (ParameterNotFoundException \$e) {
                \$e->setSourceKey(\$key);

                throw \$e;
            }
        }

        \$this->parameters = \$parameters;
        \$this->resolved = true;
    }

    /**
     * Replaces parameter placeholders (%name%) by their values.
     *
     * @param mixed \$value     A value
     * @param array \$resolving An array of keys that are being resolved (used internally to detect circular references)
     *
     * @return mixed The resolved value
     *
     * @throws ParameterNotFoundException          if a placeholder references a parameter that does not exist
     * @throws ParameterCircularReferenceException if a circular reference if detected
     * @throws RuntimeException                    when a given parameter has a type problem
     */
    public function resolveValue(\$value, array \$resolving = [])
    {
        if (\\is_array(\$value)) {
            \$args = [];
            foreach (\$value as \$k => \$v) {
                \$args[\\is_string(\$k) ? \$this->resolveValue(\$k, \$resolving) : \$k] = \$this->resolveValue(\$v, \$resolving);
            }

            return \$args;
        }

        if (!\\is_string(\$value) || 2 > \\strlen(\$value)) {
            return \$value;
        }

        return \$this->resolveString(\$value, \$resolving);
    }

    /**
     * Resolves parameters inside a string.
     *
     * @param array \$resolving An array of keys that are being resolved (used internally to detect circular references)
     *
     * @return mixed The resolved string
     *
     * @throws ParameterNotFoundException          if a placeholder references a parameter that does not exist
     * @throws ParameterCircularReferenceException if a circular reference if detected
     * @throws RuntimeException                    when a given parameter has a type problem
     */
    public function resolveString(string \$value, array \$resolving = [])
    {
        // we do this to deal with non string values (Boolean, integer, ...)
        // as the preg_replace_callback throw an exception when trying
        // a non-string in a parameter value
        if (preg_match('/^%([^%\\s]+)%\$/', \$value, \$match)) {
            \$key = \$match[1];

            if (isset(\$resolving[\$key])) {
                throw new ParameterCircularReferenceException(array_keys(\$resolving));
            }

            \$resolving[\$key] = true;

            return \$this->resolved ? \$this->get(\$key) : \$this->resolveValue(\$this->get(\$key), \$resolving);
        }

        return preg_replace_callback('/%%|%([^%\\s]+)%/', function (\$match) use (\$resolving, \$value) {
            // skip %%
            if (!isset(\$match[1])) {
                return '%%';
            }

            \$key = \$match[1];
            if (isset(\$resolving[\$key])) {
                throw new ParameterCircularReferenceException(array_keys(\$resolving));
            }

            \$resolved = \$this->get(\$key);

            if (!\\is_string(\$resolved) && !is_numeric(\$resolved)) {
                throw new RuntimeException(sprintf('A string value must be composed of strings and/or numbers, but found parameter \"%s\" of type %s inside string value \"%s\".', \$key, \\gettype(\$resolved), \$value));
            }

            \$resolved = (string) \$resolved;
            \$resolving[\$key] = true;

            return \$this->isResolved() ? \$resolved : \$this->resolveString(\$resolved, \$resolving);
        }, \$value);
    }

    public function isResolved()
    {
        return \$this->resolved;
    }

    /**
     * {@inheritdoc}
     */
    public function escapeValue(\$value)
    {
        if (\\is_string(\$value)) {
            return str_replace('%', '%%', \$value);
        }

        if (\\is_array(\$value)) {
            \$result = [];
            foreach (\$value as \$k => \$v) {
                \$result[\$k] = \$this->escapeValue(\$v);
            }

            return \$result;
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function unescapeValue(\$value)
    {
        if (\\is_string(\$value)) {
            return str_replace('%%', '%', \$value);
        }

        if (\\is_array(\$value)) {
            \$result = [];
            foreach (\$value as \$k => \$v) {
                \$result[\$k] = \$this->unescapeValue(\$v);
            }

            return \$result;
        }

        return \$value;
    }
}
", "@app/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBag.php");
    }
}
