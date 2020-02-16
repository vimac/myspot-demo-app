<?php


namespace MyProject\DAO;


use Exception;
use MyProject\Component\Component;
use MySpot\SqlMap;

abstract class BaseDAO extends Component
{

    protected function getSqlMap(): SqlMap
    {
        return $this->getContainer()->get('sqlMap');
    }

    protected function checkQueryArguments(array $requiredParams, ?array $sqlArguments)
    {
        foreach ($requiredParams as $param) {
            if (!array_key_exists($param, $sqlArguments)) {
                throw new Exception(sprintf('Param [%s] is missing in %s', $param, __METHOD__));
            }
        }
        foreach ($sqlArguments as $key => $val) {
            if (!is_string($val) && !is_bool($val) && !is_float($val) && !is_int($val) && !is_null($val)
                && (is_array($val) && (count($val) < 1 || count($val) > 2))) {
                throw new Exception(sprintf('Unacceptable param [%s] in %s', $key, __METHOD__));
            }
        }
    }

}
