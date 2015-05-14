Feature: Obliczenia

  Scenario: Pole kwadratu
    Given I am on homepage
    When I follow "Pole kwadratu by kustra88"
    And I fill in "A" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 4"