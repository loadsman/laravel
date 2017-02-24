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
        dump($rules);
        $hasRule = array_first($rules, function (\Loadsman\PHP\DTO\Rule $rule) {
            return $rule->getUri() === 'some-route';
        });

        $this->assertNotNull($hasRule);
    }
}