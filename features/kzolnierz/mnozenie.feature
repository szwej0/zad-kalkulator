Feature: Obliczenia

  Scenario: Kalkulator(mnozenie): a * b
    Given I am on homepage
    When I follow "Mnozenie by kzolnierz"
    And I fill in "a" with "2"
    And I fill in "b" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 4"
