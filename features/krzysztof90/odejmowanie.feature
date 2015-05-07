Feature: Obliczenia

  Scenario: Kalkulator a - b
    Given I am on homepage
    When I follow "Odejmowanie by krzysztof90"
    And I fill in "A" with "45"
    And I fill in "B" with "7"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 38"
