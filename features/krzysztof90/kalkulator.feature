Feature: Obliczenia

  Scenario: Kalkulator a + b
    Given I am on homepage
    When I follow "Kalkulator by krzysztof90"
    And I fill in "A" with "1500"
    And I fill in "B" with "100"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 1600"
