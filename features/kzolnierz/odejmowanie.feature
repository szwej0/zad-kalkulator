Feature: Obliczenia

  Scenario: Kalkulator(odejmowanie): a - b
    Given I am on homepage
    When I follow "Odejmowanie by kzolnierz"
    And I fill in "a" with "5"
    And I fill in "b" with "7"
    And I press "Oblicz"
    Then I should see "Wynik wynosi -2"
