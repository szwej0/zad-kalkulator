Feature: Obliczenia

  Scenario: Pole kwadratu
    Given I am on homepage
    When I follow "Pole kwadratu by LukaszB012"
    And I fill in "A" with "10"
    And I press "Calculate"
    Then I should see "Result: 100"