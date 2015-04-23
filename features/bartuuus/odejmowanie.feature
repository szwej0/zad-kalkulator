Feature: Obliczenia

  Scenario: Kalkulator a - b - c
    Given I am on homepage
    When I follow "Odejmowanie by bartuuus"
    And I fill in "a" with "8"
    And I fill in "b" with "8"
    And I fill in "b" with "0"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 0"