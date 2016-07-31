<?php

class ExampleTest extends TestCase {
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample() {

        // 1. Vísit the home page
        $this->visit('/');

        // 2. Press a "Click me" link
        $this->click('Click Me');
        // 3. See "You've been clicked, punk."
        $this->see("You've been clicked, punk.");
        // 4. Assert that the current url is /feedback
        $this->seePageIs('/feedback');
    }
}
