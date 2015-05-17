Feature: Obliczenia

  Scenario: Kalkulator a*b/2 (RafalNav)
    Given I am on homepage
    When I follow "Pole trojkata by RafalNav"
    And I fill in "A" with "5.0"
    And I fill in "B" with "2.0"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 5.0"
