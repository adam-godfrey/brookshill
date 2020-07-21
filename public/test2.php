<?php

declare(strict_types=1);
 
class animal
{
    protected const DEFAULT_MOTIVATION_THRESHOLD = 20;
    public    $name;
    protected $sound = '';
    private   $motivationThreshold;
 
    public function __construct()
    {
        $this->setMotivationThreshold();
    }
 
    protected function setMotivationThreshold(?int $threshold = null): void
    {
        $this->motivationThreshold = $threshold ?? static::DEFAULT_MOTIVATION_THRESHOLD;
    }
 
    public function speak(): string
    {
        return 'No Animal Selected!';
    }
 
    public function isMotivated(int $motivation): bool
    {
        return $motivation >= $this->motivationThreshold;
    }
 
    protected function setName(string $name): void
    {
        $this->name = $name;
    }
 
}
 
class dog extends animal
{
    public function __construct(string $name, string $sound = 'woof')
    {
        parent::__construct();
        $this->sound = $sound;
        $this->setName($name);
    }
 
    public function speak(): string
    {
        return "{$this->sound} {$this->sound}";
    }
 
}
 
class cat extends dog
{
    protected const DEFAULT_MOTIVATION_THRESHOLD = 20;
 
    public function __construct($name)
    {
        $sound = 'Meeooww';
        parent::__construct($name, $sound);
    }
 
    public function speak(): string
    {
        return $this->sound;
    }
}
 
 
class human extends animal
{
    public function __construct(string $name)
    {
        parent::__construct();
        $this->setName($name);
    }
 
    /**
     * Return 0 for any undefined property
     */
    // public function __get(string $name): int
    // {
    //     return 0;
    // }
 
    public function speak(): string
    {
        return 'Hello, My Name is ' . $this->name . ', ' .
               (false === $this->isMotivated(0) ? 'I must be ill' : "I'm highly motivated");
    }
 
    public function isMotivated(int $motivation): bool
    {
        return $motivation >= $this->motivationThreshold;
    }
}
 
$question7a = (new animal())->speak();
 
$question7b = (new dog('rover', 'woof'))->speak();
 
$question7c = (new cat('garfield'))->isMotivated(15)
    ? "There must be food, I'm walking"
    : "I'm a cat leave me alone";
 
$question7d = (static function (): string {
    $human = new human('fred');
 
    return $human->speak();
})();

echo $question7d;