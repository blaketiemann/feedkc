<?php

namespace App\Services\Enum;

use Illuminate\Support\Str;

class Enum
{
    protected $filters = [
        'slug',
        'snake',
        'camel',
        'title',
        'studly',
        'plural',
        'singular',
    ];

    protected $keyToValue = false;
    protected $applyFilters = [];
    protected $valueFilters = [];
    protected $keyFilters = [];

    /**
     * @param $method
     * @param $parameters
     * @return $this|array|mixed
     * @throws \Exception
     */
    public function __call($method, $parameters)
    {
        if ($method === 'keyToValue') {
            $this->keyToValue = true;
            return $this;
        }

        if (in_array($method, $this->filters)) {
            $this->applyFilters[] = $method;
            return $this;
        }

        $enumerations = $this->classPath($method)::all();

        return $this->keyToValue
            ? array_combine($this->apply($enumerations, $this->keyFilters), $this->apply($enumerations, $this->valueFilters))
            : $this->apply($enumerations, $this->applyFilters);
    }

    /**
     * @param array $filters
     * @return $this
     */
    public function keyFormatters($filters = [])
    {
        $this->keyFilters = $filters;

        return $this;
    }

    /**
     * @param array $filters
     * @return $this
     */
    public function valueFormatters($filters = [])
    {
        $this->valueFilters = $filters;

        return $this;
    }

    /**
     * @param $class
     * @return string
     * @throws \Exception
     */
    public function classPath($class)
    {
        $class = studly_case($class);
        $path = app_path("Enums/$class.php");
        $fileExists = file_exists($path);

        if ($fileExists) return "App\Enums\\$class";

        throw new \Exception("$path Does Not Exist");
    }

    /**
     * @param callable $filter
     * @return $this
     */
    public function filter(callable $filter)
    {
        $this->applyFilters[] = $filter;

        return $this;
    }

    /**
     * @param $enums
     * @param array $filters
     * @return mixed
     */
    public function apply($enums, $filters = [])
    {
        return collect($filters)->reduce(function($enumerations, $filter) {
            return $enumerations->map(function($enum) use ($filter) {
                return is_callable($filter) ? $filter($enum) : Str::$filter($enum);
            });
        }, collect($enums))->all();
    }
}
