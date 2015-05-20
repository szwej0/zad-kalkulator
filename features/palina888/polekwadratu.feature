Feature: Obliczenia

  Scenario: Pole kwadratu
    Given I am on homepage
    When I follow "Pole kwadratu by palina888"
    And I fill in "A" with "5"
    And I press "Calculate"
    Then I should see "Result: 25"