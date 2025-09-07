<?php

namespace Musafir\DataGrid\Enums;

use Musafir\DataGrid\ColumnTypes\Aggregate;
use Musafir\DataGrid\ColumnTypes\Boolean;
use Musafir\DataGrid\ColumnTypes\Date;
use Musafir\DataGrid\ColumnTypes\Datetime;
use Musafir\DataGrid\ColumnTypes\Decimal;
use Musafir\DataGrid\ColumnTypes\Integer;
use Musafir\DataGrid\ColumnTypes\Text;
use Musafir\DataGrid\Exceptions\InvalidColumnTypeException;

enum ColumnTypeEnum: string
{
    /**
     * String.
     */
    case STRING = 'string';

    /**
     * Integer.
     */
    case INTEGER = 'integer';

    /**
     * Decimal.
     */
    case DECIMAL = 'decimal';

    /**
     * Boolean.
     */
    case BOOLEAN = 'boolean';

    /**
     * Date.
     */
    case DATE = 'date';

    /**
     * Date time.
     */
    case DATETIME = 'datetime';

    /**
     * Aggregate.
     */
    case AGGREGATE = 'aggregate';

    /**
     * Get the corresponding class name for the column type.
     */
    public static function getClassName(string $type): string
    {
        return match ($type) {
            self::STRING->value    => Text::class,
            self::INTEGER->value   => Integer::class,
            self::DECIMAL->value   => Decimal::class,
            self::BOOLEAN->value   => Boolean::class,
            self::DATE->value      => Date::class,
            self::DATETIME->value  => Datetime::class,
            self::AGGREGATE->value => Aggregate::class,
            default                => throw new InvalidColumnTypeException("Invalid column type: {$type}"),
        };
    }
}
