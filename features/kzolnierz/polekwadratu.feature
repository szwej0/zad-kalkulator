Feature: Obliczenia

  Scenario: Pole kwadratu
    Given I am on homepage
    When I follow "Pole kwadratu by kzolnierz"
    And I fill in "A" with "5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 25"