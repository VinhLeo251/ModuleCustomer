<?php

namespace AHT\SalesAgents\Api;

interface SalesagentRepositoryInterface
{
    /** * Undocumented function * * @param \AHT\SalesAgents\Api\Data\SalesAgentInterface $salesagent * @return \AHT\SalesAgents\Api\Data\SalesAgentInterface */ public function save(\AHT\SalesAgents\Api\Data\SalesAgentInterface $salesagent);
    /** * Undocumented function * * @param int $salesagentId * @return \AHT\SalesAgents\Api\Data\SalesAgentInterface */ public function getById($salesagentId);
    /** * Undocumented function * * @param \AHT\SalesAgents\Api\Data\SalesAgentInterface $salesagents * @return \AHT\SalesAgents\Api\Data\SalesAgentInterface */ public function delete(\AHT\SalesAgents\Api\Data\SalesAgentInterface $salesagent);
    /** * Undocumented function * * @param int $salesagentsId * @return \AHT\SalesAgents\Api\Data\SalesAgentInterface */ public function deleteById($salesagentId);
}