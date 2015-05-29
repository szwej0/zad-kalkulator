Feature: Obliczenia

  Scenario: Kalkulator a + b
    Given I am on homepage
    When I follow "Kalkulator by Krzysztof Debowski"
    And I fill in "a" with "11"
    And I fill in "b" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 15"
