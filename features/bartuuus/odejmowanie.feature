Feature: Odejmowanie

  Scenario: Odejmowanie a - b - c
    Given I am on homepage
    When I follow "Kalkulator by bartuuus"
    And I fill in "a" with "3"
    And I fill in "b" with "3"
    And I fill in "c" with "0"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 0"