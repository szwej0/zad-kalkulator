Feature: Obliczenia

  Scenario: Pole kwadratu
    Given I am on homepage
    When I follow "Pole kwadratu by Konradha9"
    And I fill in "A" with "3"
    And I press "Calculate"
    Then I should see "Result: 9"