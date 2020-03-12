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

/* @app/vendor/symfony/twig-bridge/Extension/WorkflowExtension.php */
class __TwigTemplate_d48f1098efde9e2a503049434a73f1846661313b71cc7bbbfe26c8df1c97c806 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/WorkflowExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Workflow\\Registry;
use Symfony\\Component\\Workflow\\Transition;
use Symfony\\Component\\Workflow\\TransitionBlockerList;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * WorkflowExtension.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
final class WorkflowExtension extends AbstractExtension
{
    private \$workflowRegistry;

    public function __construct(Registry \$workflowRegistry)
    {
        \$this->workflowRegistry = \$workflowRegistry;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('workflow_can', [\$this, 'canTransition']),
            new TwigFunction('workflow_transitions', [\$this, 'getEnabledTransitions']),
            new TwigFunction('workflow_has_marked_place', [\$this, 'hasMarkedPlace']),
            new TwigFunction('workflow_marked_places', [\$this, 'getMarkedPlaces']),
            new TwigFunction('workflow_metadata', [\$this, 'getMetadata']),
            new TwigFunction('workflow_transition_blockers', [\$this, 'buildTransitionBlockerList']),
        ];
    }

    /**
     * Returns true if the transition is enabled.
     */
    public function canTransition(object \$subject, string \$transitionName, string \$name = null): bool
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->can(\$subject, \$transitionName);
    }

    /**
     * Returns all enabled transitions.
     *
     * @return Transition[] All enabled transitions
     */
    public function getEnabledTransitions(object \$subject, string \$name = null): array
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->getEnabledTransitions(\$subject);
    }

    /**
     * Returns true if the place is marked.
     */
    public function hasMarkedPlace(object \$subject, string \$placeName, string \$name = null): bool
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->getMarking(\$subject)->has(\$placeName);
    }

    /**
     * Returns marked places.
     *
     * @return string[]|int[]
     */
    public function getMarkedPlaces(object \$subject, bool \$placesNameOnly = true, string \$name = null): array
    {
        \$places = \$this->workflowRegistry->get(\$subject, \$name)->getMarking(\$subject)->getPlaces();

        if (\$placesNameOnly) {
            return array_keys(\$places);
        }

        return \$places;
    }

    /**
     * Returns the metadata for a specific subject.
     *
     * @param string|Transition|null \$metadataSubject Use null to get workflow metadata
     *                                                Use a string (the place name) to get place metadata
     *                                                Use a Transition instance to get transition metadata
     */
    public function getMetadata(object \$subject, string \$key, \$metadataSubject = null, string \$name = null): ?string
    {
        return \$this
            ->workflowRegistry
            ->get(\$subject, \$name)
            ->getMetadataStore()
            ->getMetadata(\$key, \$metadataSubject)
        ;
    }

    public function buildTransitionBlockerList(object \$subject, string \$transitionName, string \$name = null): TransitionBlockerList
    {
        \$workflow = \$this->workflowRegistry->get(\$subject, \$name);

        return \$workflow->buildTransitionBlockerList(\$subject, \$transitionName);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/WorkflowExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Workflow\\Registry;
use Symfony\\Component\\Workflow\\Transition;
use Symfony\\Component\\Workflow\\TransitionBlockerList;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * WorkflowExtension.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
final class WorkflowExtension extends AbstractExtension
{
    private \$workflowRegistry;

    public function __construct(Registry \$workflowRegistry)
    {
        \$this->workflowRegistry = \$workflowRegistry;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('workflow_can', [\$this, 'canTransition']),
            new TwigFunction('workflow_transitions', [\$this, 'getEnabledTransitions']),
            new TwigFunction('workflow_has_marked_place', [\$this, 'hasMarkedPlace']),
            new TwigFunction('workflow_marked_places', [\$this, 'getMarkedPlaces']),
            new TwigFunction('workflow_metadata', [\$this, 'getMetadata']),
            new TwigFunction('workflow_transition_blockers', [\$this, 'buildTransitionBlockerList']),
        ];
    }

    /**
     * Returns true if the transition is enabled.
     */
    public function canTransition(object \$subject, string \$transitionName, string \$name = null): bool
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->can(\$subject, \$transitionName);
    }

    /**
     * Returns all enabled transitions.
     *
     * @return Transition[] All enabled transitions
     */
    public function getEnabledTransitions(object \$subject, string \$name = null): array
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->getEnabledTransitions(\$subject);
    }

    /**
     * Returns true if the place is marked.
     */
    public function hasMarkedPlace(object \$subject, string \$placeName, string \$name = null): bool
    {
        return \$this->workflowRegistry->get(\$subject, \$name)->getMarking(\$subject)->has(\$placeName);
    }

    /**
     * Returns marked places.
     *
     * @return string[]|int[]
     */
    public function getMarkedPlaces(object \$subject, bool \$placesNameOnly = true, string \$name = null): array
    {
        \$places = \$this->workflowRegistry->get(\$subject, \$name)->getMarking(\$subject)->getPlaces();

        if (\$placesNameOnly) {
            return array_keys(\$places);
        }

        return \$places;
    }

    /**
     * Returns the metadata for a specific subject.
     *
     * @param string|Transition|null \$metadataSubject Use null to get workflow metadata
     *                                                Use a string (the place name) to get place metadata
     *                                                Use a Transition instance to get transition metadata
     */
    public function getMetadata(object \$subject, string \$key, \$metadataSubject = null, string \$name = null): ?string
    {
        return \$this
            ->workflowRegistry
            ->get(\$subject, \$name)
            ->getMetadataStore()
            ->getMetadata(\$key, \$metadataSubject)
        ;
    }

    public function buildTransitionBlockerList(object \$subject, string \$transitionName, string \$name = null): TransitionBlockerList
    {
        \$workflow = \$this->workflowRegistry->get(\$subject, \$name);

        return \$workflow->buildTransitionBlockerList(\$subject, \$transitionName);
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/WorkflowExtension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\WorkflowExtension.php");
    }
}
