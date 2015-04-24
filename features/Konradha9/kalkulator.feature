Feature: Obliczenia

  Scenario: Kalkulator a + b
    Given I am on homepage
    When I follow "Kalkulator by Konradha9"
    And I fill in "a" with "8"
    And I fill in "b" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 12"
