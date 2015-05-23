Feature: Obliczenia

  Scenario: Pole kwadratu by pawlo
    Given I am on homepage
    When I follow "Pole kwadratu by pawlo"
    And I fill in "A" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 4" 