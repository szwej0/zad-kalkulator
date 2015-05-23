Feature: Obliczenia

  Scenario: Kalkulator a + b
    Given I am on homepage
    When I follow "Kalkulator by pjakimiak"
    And I fill in "a" with "10"
    And I fill in "b" with "15"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 25"