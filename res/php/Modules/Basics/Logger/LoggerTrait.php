<?php

namespace SAO\Modules\Basics\Logger;

/**
 * @todo Documentar
 */
trait LoggerTrait {

    use LoggerAdition,
        LoggerGetter;

    /**
     * Alamacena todos los registros
     * @var SAO\Modules\Basics\Logger\Log[] 
     */
    protected $Logs = [];

    /**
     *
     * @var int 
     */
    private $LoggerTraceSteps = 3;

    /**
     * 
     * @param int $steps
     * @return Logger
     */
    public function setLoggerTraceSteps($steps) {
        $this->LoggerTraceSteps = $steps;
        return $this;
    }

    /**
     * 
     * @return int
     */
    public function getLoggerTraceStepts() {
        return $this->LoggerTraceSteps;
    }

}
