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

/* @app/vendor/doctrine/orm/lib/Doctrine/ORM/Id/SequenceGenerator.php */
class __TwigTemplate_54b41c660167b0a43a72e04da55084db24ea55f63d360db7e1ccf1817ec543e6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Id/SequenceGenerator.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Id;

use Doctrine\\ORM\\EntityManager;
use Serializable;

/**
 * Represents an ID generator that uses a database sequence.
 *
 * @since 2.0
 * @author Roman Borschel <roman@code-factory.org>
 */
class SequenceGenerator extends AbstractIdGenerator implements Serializable
{
    /**
     * The allocation size of the sequence.
     *
     * @var int
     */
    private \$_allocationSize;

    /**
     * The name of the sequence.
     *
     * @var string
     */
    private \$_sequenceName;

    /**
     * @var int
     */
    private \$_nextValue = 0;

    /**
     * @var int|null
     */
    private \$_maxValue = null;

    /**
     * Initializes a new sequence generator.
     *
     * @param string  \$sequenceName   The name of the sequence.
     * @param integer \$allocationSize The allocation size of the sequence.
     */
    public function __construct(\$sequenceName, \$allocationSize)
    {
        \$this->_sequenceName = \$sequenceName;
        \$this->_allocationSize = \$allocationSize;
    }

    /**
     * {@inheritDoc}
     */
    public function generate(EntityManager \$em, \$entity)
    {
        if (\$this->_maxValue === null || \$this->_nextValue == \$this->_maxValue) {
            // Allocate new values
            \$conn = \$em->getConnection();
            \$sql  = \$conn->getDatabasePlatform()->getSequenceNextValSQL(\$this->_sequenceName);

            // Using `query` to force usage of the master server in MasterSlaveConnection
            \$this->_nextValue = (int) \$conn->query(\$sql)->fetchColumn();
            \$this->_maxValue  = \$this->_nextValue + \$this->_allocationSize;
        }

        return \$this->_nextValue++;
    }

    /**
     * Gets the maximum value of the currently allocated bag of values.
     *
     * @return integer|null
     */
    public function getCurrentMaxValue()
    {
        return \$this->_maxValue;
    }

    /**
     * Gets the next value that will be returned by generate().
     *
     * @return integer
     */
    public function getNextValue()
    {
        return \$this->_nextValue;
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize(
            [
            'allocationSize' => \$this->_allocationSize,
            'sequenceName'   => \$this->_sequenceName
            ]
        );
    }

    /**
     * @param string \$serialized
     *
     * @return void
     */
    public function unserialize(\$serialized)
    {
        \$array = unserialize(\$serialized);

        \$this->_sequenceName = \$array['sequenceName'];
        \$this->_allocationSize = \$array['allocationSize'];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Id/SequenceGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Id;

use Doctrine\\ORM\\EntityManager;
use Serializable;

/**
 * Represents an ID generator that uses a database sequence.
 *
 * @since 2.0
 * @author Roman Borschel <roman@code-factory.org>
 */
class SequenceGenerator extends AbstractIdGenerator implements Serializable
{
    /**
     * The allocation size of the sequence.
     *
     * @var int
     */
    private \$_allocationSize;

    /**
     * The name of the sequence.
     *
     * @var string
     */
    private \$_sequenceName;

    /**
     * @var int
     */
    private \$_nextValue = 0;

    /**
     * @var int|null
     */
    private \$_maxValue = null;

    /**
     * Initializes a new sequence generator.
     *
     * @param string  \$sequenceName   The name of the sequence.
     * @param integer \$allocationSize The allocation size of the sequence.
     */
    public function __construct(\$sequenceName, \$allocationSize)
    {
        \$this->_sequenceName = \$sequenceName;
        \$this->_allocationSize = \$allocationSize;
    }

    /**
     * {@inheritDoc}
     */
    public function generate(EntityManager \$em, \$entity)
    {
        if (\$this->_maxValue === null || \$this->_nextValue == \$this->_maxValue) {
            // Allocate new values
            \$conn = \$em->getConnection();
            \$sql  = \$conn->getDatabasePlatform()->getSequenceNextValSQL(\$this->_sequenceName);

            // Using `query` to force usage of the master server in MasterSlaveConnection
            \$this->_nextValue = (int) \$conn->query(\$sql)->fetchColumn();
            \$this->_maxValue  = \$this->_nextValue + \$this->_allocationSize;
        }

        return \$this->_nextValue++;
    }

    /**
     * Gets the maximum value of the currently allocated bag of values.
     *
     * @return integer|null
     */
    public function getCurrentMaxValue()
    {
        return \$this->_maxValue;
    }

    /**
     * Gets the next value that will be returned by generate().
     *
     * @return integer
     */
    public function getNextValue()
    {
        return \$this->_nextValue;
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize(
            [
            'allocationSize' => \$this->_allocationSize,
            'sequenceName'   => \$this->_sequenceName
            ]
        );
    }

    /**
     * @param string \$serialized
     *
     * @return void
     */
    public function unserialize(\$serialized)
    {
        \$array = unserialize(\$serialized);

        \$this->_sequenceName = \$array['sequenceName'];
        \$this->_allocationSize = \$array['allocationSize'];
    }
}
", "@app/vendor/doctrine/orm/lib/Doctrine/ORM/Id/SequenceGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Id\\SequenceGenerator.php");
    }
}
