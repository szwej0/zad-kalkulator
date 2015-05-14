Feature: Obliczenia

  Scenario: RectangleFurtakM
    Given I am on homepage
    When I follow "Rectangle by furtakm"
    And I fill in "a" with "5"
    And I fill in "b" with "7"
    And I press "Result"
    Then I should see "Result: 12"
