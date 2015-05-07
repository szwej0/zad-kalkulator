Feature: Obliczenia

  Scenario: Kalkulator a + b (RafalNav)
    Given I am on homepage
    When I follow "Kalkulator by RafalNav"
    And I fill in "A" with "5"
    And I fill in "B" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 7"
