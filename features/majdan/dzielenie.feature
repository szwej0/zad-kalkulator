Feature: Obliczenia

  Scenario: Kalkulator a/b/c/d
    Given I am on homepage
    When I follow "Dzielenie by majdan"
    And I fill in "A" with "100"
    And I fill in "B" with "2"
    And I fill in "C" with "2"
    And I fill in "D" with "5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 5"
