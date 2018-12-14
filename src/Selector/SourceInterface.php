<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

namespace Spiral\Cycle\Selector;

use Spiral\Cycle\Selector;
use Spiral\Database\DatabaseInterface;

/**
 * Defines the access to the SQL database.
 */
interface SourceInterface
{
    // points to the scope which must be applied to all queries
    public const DEFAULT_SCOPE = '@default';

    /**
     * Get database associated with the entity.
     *
     * @return DatabaseInterface
     */
    public function getDatabase(): DatabaseInterface;

    /**
     * Get table associated with the entity.
     *
     * @return string
     */
    public function getTable(): string;

    /**
     * Get initial entity selector. Must include applied scope. Must never return existed entity.
     *
     * @deprecated
     * @return Selector
     */
    public function getSelector(): Selector;

    /**
     * Return named Selector scope or return null.
     *
     * @param string $name
     * @return ScopeInterface|null
     */
    public function getScope(string $name = self::DEFAULT_SCOPE): ?ScopeInterface;
}