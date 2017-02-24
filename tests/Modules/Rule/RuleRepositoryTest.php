<?php

class RuleRepositoryTest extends \Loadsman\LaravelPluginTests\TestCase
{
    /**
     * @var \Loadsman\LaravelPlugin\Modules\Rule\RuleRepository
     */
    private $ruleRepository;

    public function setUp()
    {
        parent::setUp();

        $this->ruleRepository = $this->app->make(\Loadsman\LaravelPlugin\Modules\Rule\RuleRepository::class);
    }

    public function test_gets_rules()
    {
        $this->app->make('router')->post('some-route', function () { });
        $rules = $this->ruleRepository->getAll();

        $ruleExists = $this->hasByCondition($rules,
            function (\Loadsman\PHP\DTO\Rule $rule) {
                return $rule->getUri() === 'some-route';
            });

        $this->assertTrue($ruleExists);
    }

    /**
     * True if any item in array passes condition.
     * False otherwise.
     *
     * @param array   $array
     * @param Closure $condition
     * @return bool
     */
    private function hasByCondition(array $array, Closure $condition){
        foreach ($array as $item) {
            if ($condition($item)){
                return true;
            }
        }
        return false;
    }
}