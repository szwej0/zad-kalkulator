Feature: Obliczenia

  Scenario: Kalkulator a * b
    Given I am on homepage
    When I follow "Mnozenie by krzysztof90"
    And I fill in "A" with "23"
    And I fill in "B" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 46"
