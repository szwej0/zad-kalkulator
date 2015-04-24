Feature: Obliczenia

  Scenario: Kalkulator a * b * c * d
    Given I am on homepage
    When I follow "Kalkulator by mrskowron"
    And I fill in "A" with "5"
    And I fill in "B" with "1"
    And I fill in "A" with "2"
    And I fill in "A" with "1"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 10"
