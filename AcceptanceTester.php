<?php

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * --------------------------------------------------
     * Define custom actions here
     * --------------------------------------------------
     */

    /**
     * @Given I am on page :page
     * @Then I am on page :page
     * @When I am on page :page
     * @And I am on page :page
     */
    public function iAmOnPage($page)
    {
        if ($page === null) {
            throw new \Codeception\Exception\Incomplete("Step `I am on page :page` is not defined");
        }

        $i = $this;

        $i->amOnPage($page);
    }

    /**
     * @Given I see :text
     * @Then I see :text
     * @When I see :text
     * @And I see :text
     */
    public function iSee($text)
    {
        if ($text === null) {
            throw new \Codeception\Exception\Incomplete("Step `I see :text` is not defined");
        }

       $i = $this;
       $i->see($arg1);
    }

    /**
     * @Given I see text :text
     * @Then I see text :text
     * @When I see text :text
     * @And I see text :text
     */
    public function iSeeText($text)
    {
        if ($text === null) {
            throw new \Codeception\Exception\Incomplete("Step `I see text :text` is not defined");
        }

       $i = $this;
       $i->see($arg1);
    }

    /**
     * @Given I fill field :field with :value
     * @When I fill field :field with :value
     * @Then I fill field :field with :value
     * @And I fill field :field with :value
     */
    public function iFillField($field, $value)
    {
        if ($field === null && $value === null) {
            throw new \Codeception\Exception\Incomplete("Step `I fill field :field with :value` is not defined");
        }

        $i = $this;

        $i->fillField($field, $value);
    }

    /**
    * @Given I fill in :field field with :value
    */
    public function iFillInFieldWith($field, $value)
    {
        if ($field === null && $value === null) {
            throw new \Codeception\Exception\Incomplete("Step `I fill in :field field with :value` is not defined");
        }

        $i = $this;

        $i->fillField($field, $value);
    }

    /**
    * @Given I click :element
    * @When I click :element
    * @Then I click :element
    * @And I click :element
    */
    public function iClick($element)
    {
        if ($element === null) {
            throw new \Codeception\Exception\Incomplete("Step `I click :element` is not defined");
        }
        
        $i = $this;

        // $i->makeScreenshot();
        $i->click($element);
    }

    /**
    * @Given I see current url equals :url
    * @When I see current url equals :url
    * @Then I see current url equals :url
    * @And I see current url equals :url
    */
    public function iSeeCurrentUrlEquals($url)
    {
        if ($url === null) {
            throw new \Codeception\Exception\Incomplete("Step `I see current url equals :url` is not defined");
        }

        $i = $this;

        $i->seeCurrentUrlEquals($url);
    }

    /**
    * @Given I am redirected to :url
    * @When I am redirected to :url
    * @Then I am redirected to :url
    * @And I am redirected to :url
    */
    public function iAmRedirectedTo($url)
    {
        if ($url === null) {
            throw new \Codeception\Exception\Incomplete("Step `I am redirected to :url` is not defined");
        }

        $i = $this;

        $i->seeCurrentUrlEquals($url);
    }

    /**
    * @Given I don't see current url equals :url
    * @When I don't see current url equals :url
    * @Then I don't see current url equals :url
    * @And I don't see current url equals :url
    */
    public function iDontSeeCurrentUrlEquals($url)
    {
        if ($url === null) {
            throw new \Codeception\Exception\Incomplete("Step `I am not redirected to :url` is not defined");
        }
        
        $i = $this;

        $i->dontSeeCurrentUrlEquals($url);
    }

    /**
    * @Given I am not redirected to :url
    * @When I am not redirected to :url
    * @Then I am not redirected to :url
    * @And I am not redirected to :url
    */
    public function iAmNotRedirectedTo($url)
    {
        if ($url === null) {
            throw new \Codeception\Exception\Incomplete("Step `I am not redirected to :url` is not defined");
        }
        
        $i = $this;

        $i->dontSeeCurrentUrlEquals($url);
    }

    /**
     * @Given I make screenshot
     * @When I make screenshot
     * @Then I make screenshot
     * @And I make screenshot
     */
    public function iMakeScreenshot()
    {
        $i = $this;

        $i->makeScreenshot();
    }

    /**
     * @Given I take screenshot
     * @When I take screenshot
     * @Then I take screenshot
     * @And I take screenshot
     */
    public function iTakeScreenshot()
    {
        $i = $this;

        $i->makeScreenshot();
    }
}
