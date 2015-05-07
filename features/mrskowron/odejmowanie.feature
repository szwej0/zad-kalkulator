Feature: Obliczenia

  Scenario: Kalkulator a - b - c
    Given I am on homepage
    When I follow "Kalkulator by mrskowron"
    And I fill in "A" with "10"
    And I fill in "B" with "5"
    And I fill in "B" with "5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 0"
