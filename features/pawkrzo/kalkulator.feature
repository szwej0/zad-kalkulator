Feature: Obliczenia

  Scenario: Kalkulator a + b
    Given I am on homepage
    When I follow "Kalkulator by pawkrzo"
    And I fill in "a" with "4"
    And I fill in "b" with "6"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 10"
