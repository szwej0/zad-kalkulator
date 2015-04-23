Feature: Obliczenia

  Scenario: Kalkulator(dodawanie): a + b
    Given I am on homepage
    When I follow "Kalkulator by kzolnierz"
    And I fill in "a" with "10"
    And I fill in "b" with "7"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 17"
