<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

trait DBTrait
{

    public function clearTableRecordsBy($column, $id)
    {
        $tables = $this->getTablesWithColumn($column);
        foreach ($tables as $key => $table) {
            $statement = "delete from $table where $column = $id";
            DB::statement($statement);
        }
    }

    public function clearTableRecords($column)
    {
        $tables = $this->getTablesWithColumn($column);
        foreach ($tables as $key => $table) {
            DB::table($table)->truncate();
        }
    }

    public function getTablesWithColumn($column)
    {
        $returnTables = [];
        $tables = $this->getTables();
        foreach ($tables as $key => $table) {
            if (Schema::hasColumn($table, $column)) {
                $returnTables[] = $table;
            }
        }
        return $returnTables;
    }

    function getTables()
    {
        $tables = DB::select('SHOW TABLES');
        $tables = array_map('current', $tables);
        return $tables;
    }


    function removeRecordsFromDB($tables, $column, $value)
    {
        if (is_string($tables)) {
            $tables = [$tables];
        }
        foreach ($tables as $key => $table) {
            $statement = "delete from $table where $column = $value";
            DB::statement($statement);
        }
    }
}
